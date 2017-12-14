<?php

use Illuminate\Database\Seeder;
use App\Noun;
use App\Adjective;

class NounAdjectiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nouns = array("acorn", "alien", "blob", "cactus", "cowbat", "cyclops", "gloogy", "frogthing", 
                       "stool", "robotbee", "shrug", "sweatbeast", "neckdude"
                    );

        $adjectives = array("angry", "spunky", "cheerful", "organic", "attractive", "bald", "beautiful", 
                            "clean", "dazzling", "drab", "elegant", "fancy", "fit", "flabby", "glamorous",
                            "gorgeous", "handsome", "long", "magnificent", "muscular", "plain", "quaint",
                            "scruffy", "shapely", "short", "stocky", "ugly", "unkempt", "unsightly", "ashy",
                            "blue", "gray", "green", "icy", "lemon", "mango", "orange", "purple", "red", 
                            "salmon", "yellow", "alive", "better", "careful", "clever", "dead", "easy", "famous",
                            "gifted", "hallowed", "helpful", "important", "inexpensive", "mealy", "mushy",
                            "odd", "poor", "powerful", "rich", "shy", "tender", "unimportant", "uninterested",
                            "vast", "aggressive", "agreeable", "ambitious", "brave", "calm", "delightful",
                            "eager", "faithful", "gentle", "happy", "jolly", "kind", "lively", "nice",
                            "obedient", "polite", "proud", "silly", "thankful", "victorious", "witty", 
                            "wonderful", "zealous", "angry", "bewildered", "clumsy", "defeated", "embarrassed",
                            "fierce", "grumpy", "helpless", "itchy", "jealous", "lazy", "mysterious", 
                            "nervous", "obnoxious", "panicky", "pitiful", "repulsive", "scary", "thoughtless", 
                            "uptight", "worried", "big", "colossal", "gigantic", "great", "huge", "immense", 
                            "large", "little", "mammoth", "massive", "microscopic", "miniature", "petite", 
                            "puny", "scrawny", "short", "small", "tall", "teeny", "tiny", "crashing",
                            "deafening", "echoing", "faint", "harsh", "hissing", "howling", "loud", "melodic", 
                            "noisy", "purring", "quiet", "rapping", "raspy", "rhythmic", "screeching", 
                            "shrilling", "squeaking", "thundering", "tinkling", "wailing", "whining", 
                            "whispering", "ancient", "brief", "early", "fast", "future", "late", "long", 
                            "modern", "old", "prehistoric", "quick", "rapid", "short", "slow", "swift", 
                            "young", "breezy", "bumpy", "chilly", "cold", "cool", "cuddly", "damaged", "damp",
                            "dirty", "dry", "flaky", "fluffy", "freezing", "greasy", "hot", "icy", "loose",
                            "melted", "prickly", "rough", "shaggy", "sharp", "slimy", "sticky", "strong", 
                            "tight", "uneven", "warm", "weak", "wet", "wooden" 
                        );

        foreach ($nouns as $noun) 
        {
        	$monster = Noun::where('name', $noun)->first();

        	$adjective = $adjectives[array_rand($adjectives)];
        	$adjective = Adjective::where('adj', $adjective)->first();

        	$monster->adjectives()->save($adjective);
        }
    }
}
