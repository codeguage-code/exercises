import React, { useState } from 'react';

function App() {
   const [backgroundColor, setBackgroundColor] = useState('#eee');

   return (
      <div style={{height: 200, backgroundColor: backgroundColor}}>
      onMouseEnter={() => setBackgroundColor('yellow')}
      onMouseLeave={() => setBackgroundColor('#eee')}
         Change the background
      </div>
   );
}

export default App;