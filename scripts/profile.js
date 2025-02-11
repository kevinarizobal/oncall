 // Prevent horizontal scrolling in the table from affecting page swiping
 const scrollableTable = document.getElementById('scrollableTable');

 scrollableTable.addEventListener('wheel', (event) => {
     if (event.deltaX !== 0) {
         event.stopPropagation(); // Stop the event from propagating to the page
     }
 });

 scrollableTable.addEventListener('touchstart', (event) => {
     let startX = event.touches[0].clientX;
     let startY = event.touches[0].clientY;

     const onTouchMove = (moveEvent) => {
         let diffX = Math.abs(moveEvent.touches[0].clientX - startX);
         let diffY = Math.abs(moveEvent.touches[0].clientY - startY);

         // Stop propagation if horizontal scrolling is detected
         if (diffX > diffY) {
             moveEvent.stopPropagation();
         }
     };

     const onTouchEnd = () => {
         scrollableTable.removeEventListener('touchmove', onTouchMove);
         scrollableTable.removeEventListener('touchend', onTouchEnd);
     };

     scrollableTable.addEventListener('touchmove', onTouchMove);
     scrollableTable.addEventListener('touchend', onTouchEnd);
 });