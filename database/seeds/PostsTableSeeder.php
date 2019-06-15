<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement("INSERT INTO `posts` (`title`, `category_id`,`description`) VALUES
            ('How to Take a Mental Health Day From Your Job',1,'If the thought of going to work fills you with dread, and when you’re there you can’t focus, take some time away.'),
            ('What to Drink When You’re Trying to Eat Healthy',1,'Any standard-sized drink has about 98 calories from alcohol. You can’t make a drink with any fewer calories than that, unless you want it to be less alcoholic.'),
            ('Salted Butter Has Always Been the Secret to Better Cookies',2,'I’m so pleased to tell you that even among salted butter cookies, Roman’s are exceptional. I was ready for the caramel-like flavor that salted butter cookie dough develops as it browns, and I already knew how I felt about dark chocolate chunk cookies flecked with sea salt—I’m for ‘em!—but what blew me away was the complexity you get from three kinds of sugar.'),
            ('You Need to Add Potato Chips to Your Eggs',2,'Potato chips are usually thought of as a lunchtime companion—a crunchy side to your sandwich or wrap—but their time has come to shine as a breakfast star. Think of them as a low-effort breakfast potato, which is the best kind of breakfast potato, especially on those morning where frying something seems impossible.'),
            ('I Knew it Was Time to Leave My Classroom. I Hope 20 Years Was Enough.',3,'Every tough decision comes with some measure of remorse for what could have been. As I finish out my 20th and final year as a teacher and prepare to move into an office to serve as my district’s federal programs and grants manager, I am having all the feels, as the kids say.'),
            ('Dear White People: When it Comes to Educational Equity, You’ll Have to Get Comfortable With Being Uncomfortable',3,'White supremacy is a system,  not an issue of individual white power. It is reinforced through the media, popular culture, the education system,  etc. White people can and do benefit from white supremacy. White people as a group do not get the same punishment or rewards as Blacks'),
            ('The Top Five Metal Guitarists Under The Age of 30',4,'Oh, the controversy! Jason Roches decision not to put Animals As Leaders Tosin Abasi at number one got folks more riled up than Mitt Romneys flippity-flopping on health care mandates, whatever they are. But the real reason this post resonated with readers, we believe, was because it cast aside the traditional moldy-oldy favorites of guitar magazines — we are looking at you, Guitar World — and embraced the less-heralded new crop of shredders.'),
            ('Ten Fashion Combinations You Will Find this Year (and Every Year) at Coachella',4,'Maxi dresses with wide-brimmed hats we can live with. Rompers and cowboy boots (above) may cause your feet to smell, but hey. Short shorts with exposed pockets we are kind of into. Ray Bans and meticulously-groomed mustaches we are not that crazy about. But hipster headdresses and model pouts? We are on the next fixed gear bike out of Indio.'),
            ('The New Apple iPad Pro Evolves Into An Essential For Designers',5,'Apple’s latest iPad Pro is the best iPad ever for designers, but its potential is only realized after upgrading it to iOS 11. Explore why.'),
            ('Netflix’s “Abstract: The Art of Design” Demystifies Design',5,'A series from Netflix attempts to avoid the tropes of “serious” design documentaries with playful profiles about the luminaries of modern design.');
        ");
    }
}
