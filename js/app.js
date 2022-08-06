if ("serviceWorker" in navigator) {
      navigator.serviceWorker
        .register("serviceworker.js")
        .then(res => console.log("service worker registered newwww okay fun", res.scope))
        .catch(err => console.log("service worker not registered new", err))
}

console.log("hello")

// function notifyMe(){
//   if(!("Notification" in window)){
//     console.log("browser supports notification")
//   }
//   console.log(Notification.permission)

//   if(Notification.permission === "granted"){
//     const Notificationn = new Notification("this is notification")
//   }
//   else if(Notification.permission !== "denied"){
//     Notification.requestPermission().then(function (permission) {
//       // If the user accepts, let's create a notification
//       if (permission === "granted") {
//         const notification = new Notification("Hi there!");
//       }
//     });
//   }
// }
// notifyMe()

navigator.serviceWorker.getRegistration().then(reg=>{
  reg.pushManager.subscribe({
    userVisibleOnly: true
  }).then(sub=>{

  })
})


