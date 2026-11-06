<?php

namespace App\Data;

class MenuData {
    public static function getHotDeals(): array
    {
        return [
            [
                "name" => "Classic Unli Samgy",
                "image" => "assets/images/classic_unli_samgy.jpg",
                "price" => "₱299",
                "unit" => "head",
                "badge" => "Best seller",
                "description" => "Unlimited pork samgyupsal, chicken, rice, soup and house banchan.",
                "inclusions" => "Unli pork • 6 banchan • rice & soup",
                "status" => "Available",
                "link" => "booking.php?package=pork"
            ],

            [
                "name" => "Premium Beef & Pork",
                "image" => "assets/images/premium_beef_&_pork.jpg",
                "price" => "₱349",
                "unit" => "head",
                "badge" => "For sharing",
                "description" => "Beef galbi + pork cuts, cheese dip, lettuce wraps and iced tea.",
                "inclusions" => "Beef + pork • cheese • 8 banchan",
                "status" => "Available",
                "link" => "booking.php?package=premium"
            ],

            [
                "name" => "Barkada Bundle — 4 pax",
                "image" => "assets/images/barkada_bundles.jpg",
                "price" => "₱1,099",
                "unit" => "bundle",
                "badge" => "Barkada pick",
                "description" => "Good for four. All classic inclusions plus extra meat platter.",
                "inclusions" => "4 pax • extra platter • pitcher iced tea",
                "status" => "Available",
                "link" => "booking.php?package=barkada"
            ],
            

        ];
    }


    public static function getMainMeals(): array
    {
        return [
            [
                "name" => "UNLI 1 (PORK)",
                "image" => "assets/images/pork.jpg",
                "price" => "₱199",
                "unit" => "head",
                "badge" => "Best Value",
                "description" => "3 Variants of Premium Pork (Plain, Bulgogi, Spicy). Served with unlimited sides, dips, and cheese.",
                "inclusions" => "3 Pork Variants • Unli Rice, Side, Dips & Cheese",
                "status" => "Available",
                "link" => "booking.php?package=unli1"
            ],

            [
                "name" => "UNLI 2 ALL-IN (PORK)",
                "image" => "assets/images/pork.jpg",
                "price" => "₱249",
                "unit" => "head",
                "badge" => "Most Popular",
                "description" => "3 Variants of Premium Pork (Plain, Bulgogi, Spicy) with unlimited juice drinks and fresh lettuce wraps.",
                "inclusions" => "Unli 1 Items + UNLI JUICE & LETTUCE",
                "status" => "Available",
                "link" => "booking.php?package=unli2"
            ],

            [
                "name" => "UNLI 3 (PORK & BEEF)",
                "image" => "assets/images/premium_beef_&_pork.jpg",
                "price" => "₱399",
                "unit" => "head",
                "badge" => "",
                "description" => "Ultimate feast featuring 3 variants of Premium Pork and 3 variants of Premium Beef (Plain, Bulgogi, Spicy).",
                "inclusions" => "3 Pork & 3 Beef Variants • Unli Rice, Side, Dips & Cheese",
                "status" => "Not Available",
                "link" => "booking.php?package=unli3"
            ],
        ];
    }

    public static function getMealPlatters(): array
    {
        return [
            [
                "name" => "CHICKEN PLATTER (PLAIN)",
                "image" => "assets/images/chicken_platter_plain.jpg",
                "price" => "₱150",
                "unit" => "platter",
                "badge" => "Classic Choice",
                "description" => "Crispy, golden-fried classic chicken pieces served platter-style.",
                "inclusions" => "Plain Fried Chicken Platter",
                "status" => "Available",
                "link" => "booking.php?package=chicken_plain"
            ],

            [
                "name" => "CHICKEN PLATTER (BUFFALO)",
                "image" => "assets/images/chicken_platter_buffalo.jpg",
                "price" => "₱170",
                "unit" => "platter",
                "badge" => "Spicy Pick",
                "description" => "Crispy fried chicken tossed in a savory, tangy buffalo sauce wrapper.",
                "inclusions" => "Buffalo Chicken Platter",
                "status" => "Available",
                "link" => "booking.php?package=chicken_buffalo"
            ],

            [
                "name" => "CHIC 'n' FRIES",
                "image" => "assets/images/chic_n_fries.jpg",
                "price" => "₱160",
                "unit" => "order",
                "badge" => "Snack Favorite",
                "description" => "A perfect combination platter of crispy chicken pieces paired with golden fries.",
                "inclusions" => "Chicken Bites • Crispy Fries",
                "status" => "Available",
                "link" => "booking.php?package=chic_n_fries"
            ],
        ];
    }


    public static function getPremiumRiceBowls(): array
    {
        return [
            [
                "name" => "PORK RICE BOWL",
                "image" => "assets/images/pork_rice_bowl.jpg",
                "price" => "₱89",
                "unit" => "bowl",
                "badge" => "Budget Pick",
                "description" => "Savory grilled pork slices served over a steaming bowl of rice with classic side toppings.",
                "inclusions" => "Grilled Pork • Rice • Banchan Toppings",
                "status" => "Available",
                "link" => "booking.php?package=bowl_pork"
            ],

            [
                "name" => "BEEF RICE BOWL",
                "image" => "assets/images/beef_rice_bowl.jpg",
                "price" => "₱99",
                "unit" => "bowl",
                "badge" => "Beef Lover",
                "description" => "Tender, marinated premium beef slices served over a warm rice bed with traditional garnishes.",
                "inclusions" => "Marinated Beef • Rice • Banchan Toppings",
                "status" => "Available",
                "link" => "booking.php?package=bowl_beef"
            ],

            [
                "name" => "CHICKEN RICE BOWL",
                "image" => "assets/images/chicken_rice_bowl.jpg",
                "price" => "₱89",
                "unit" => "bowl",
                "badge" => "Poultry Favorite",
                "description" => "Marinated savory chicken cuts cooked to perfection over hot rice.",
                "inclusions" => "Savory Chicken • Rice • Banchan Toppings",
                "status" => "Available",
                "link" => "booking.php?package=bowl_chicken"
            ],

            [
                "name" => "SISIG RICE BOWL",
                "image" => "assets/images/sisig_rice_bowl.jpg",
                "price" => "₱99",
                "unit" => "bowl",
                "badge" => "Local Hit",
                "description" => "Crispy, savory Filipino pork sisig mixed with special seasoning on top of white rice.",
                "inclusions" => "Crispy Pork Sisig • Rice • Egg/Toppings",
                "status" => "Available",
                "link" => "booking.php?package=bowl_sisig"
            ],
        ];
    }
}

?>
