const abhiyantaStatic = 'abhiyanta-static-v4';
const assets = [
    "/",
    "/loginpage.html",
    "/styles/style.css",
    "/js/app.js",
    "/images/banner1.png",
]
self.addEventListener("install", installEvent => {
    self.skipWaiting();
    installEvent.waitUntil(
      caches.open(abhiyantaStatic).then(cache => {
        cache.addAll(assets)
      })
    )
})

self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
        .catch(()=>{
            if(fetchEvent.request.mode == 'navigate')
                return caches.match("/offlinepage.html")
        })
      })
    )
})

const expectedCaches = [
    'abhiyanta-static-v4'
]

self.addEventListener("activate", activeEvent => {
    activeEvent.waitUntil(
        caches.keys().then(cacheName=>{
            return Promise.all(cacheName.map(cacheName => {
                if(!expectedCaches.includes(cacheName)){
                    return caches.delete(cacheName)
                }
            }))
        })
    )
})