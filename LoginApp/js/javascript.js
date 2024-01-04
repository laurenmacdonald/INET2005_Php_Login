// Javascript that changes the contents inside cards on the welcome page, displaying different offers available.
// The user can click a button to move to the next offer, or back to the previous offer.
const welcomeOffers = [
    {
        cardID: 1,
        img: "../LoginApp/Images/mandrinkingcoffee.jpg",
        title: "Espresso Subscription",
        text: "Premium espresso.",
    },
    {
        cardID: 2,
        img: "../LoginApp/Images/coffeeoutside.jpg",
        title: "Brewing Accessories",
        text: "Top-tier supplies."
    },
    {
        cardID: 3,
        img: "../LoginApp/Images/friendswithcoffee.jpg",
        title: "Coffee Subscription",
        text: "Best of the best."
    }
];

// Select items
const img = document.getElementById('cardIMG');
const title = document.getElementById('cardTitle');
const text = document.getElementById('cardText');

// Select button
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

// Set starting item
let currentOffer = 0;

// Load initial item
window.addEventListener('DOMContentLoaded',function(){
    showOffer(currentOffer);
});

// Function to show card based on offer
function showOffer(offer){
    const item = welcomeOffers[offer];
    img.src = item.img;
    title.textContent = item.title;
    text.textContent = item.text;

}

// Show next offer
nextBtn.addEventListener('click', function (){
    currentOffer++;
    if(currentOffer > welcomeOffers.length - 1){
        currentOffer =0;
    }
    showOffer(currentOffer);
})

// Show previous offer
prevBtn.addEventListener('click', function (){
    currentOffer--;
    if(currentOffer < 0){
        currentOffer = welcomeOffers.length - 1;
    }
    showOffer(currentOffer);
})