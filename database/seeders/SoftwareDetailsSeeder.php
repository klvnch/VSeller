<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SoftwareDetails;

class SoftwareDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SoftwareDetails::create([
            'softwares_id' => 1,
            'imgurl' => 'https://www.image-line.com/wp-content/uploads/2020/11/fl-studio-UI.png',
            'vidurl' => 'https://www.youtube.com/embed/_bBH_577trY',
            'description' => 'FL Studio 20 Producer Edition Full version is a complete software music production environment or Digital Audio Workstation (DAW). Representing more than 18 years of innovative developments it has everything you need in one package to compose, arrange, record, edit, mix and master professional quality music. FL Studio is now one of the world’s most popular DAWs and is used by the most creative artists.',
            'shortdesc' => 'FL Studio 20 Producer Edition Full version is a complete software music production environment or Digital Audio Workstation (DAW).',
            'developer' => 'Image Line',
            'releasedate' => '18 May 2020',
            'price' => '850000',
            'versionnumber' => 'v20.8.3.2304'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 2,
            'imgurl' => 'https://1.bp.blogspot.com/-m0ssXoyj9hY/YFgHv_g6Q1I/AAAAAAAAAPA/wSXT04IRKjc06nb-a_lkrA3m1RMmWmA4ACLcBGAsYHQ/s1200/Ableton%2BLive%2B11.png',
            'vidurl' => 'https://www.youtube.com/embed/zAisG2rrH_Q',
            'description' => 'Ableton Live 11 Suite is the most complete edition of Live software for creating and performing music and is a software of a complete integrated studio equipped with everything necessary for musical creative work. Suite Edition can provide an unlimited number of tracks and scenes, 12 send and return tracks, 256 mono audio input channels, 256 mono audio output channels, advanced audio stretching algorithms (warp modes), audio slicing mode for creating samples, audio conversion to MIDI, support REX files, export and import video and many other features.',
            'shortdesc' => 'Ableton Live 11 Suite is the most complete edition of Live software for creating and performing music and is a software of a complete integrated studio equipped with everything necessary for musical creative work.',
            'developer' => 'Gerhard Behles',
            'releasedate' => '14 February 2021',
            'price' => '800000',
            'versionnumber' => 'v11.0.12'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 3,
            'imgurl' => 'https://webintopc.com/wp-content/uploads/2020/11/FabFilter-Total-Bundle-VST-full-version1-downwload.jpg',
            'vidurl' => 'https://www.youtube.com/embed/Kl9sp47sY6s',
            'description' => 'The Total Bundle 2021 is a set of all FabFilter plug-ins. With this bundle, you get our professional EQ, reverb, compressor, multiband dynamics, limiter, de-esser and gate/expander, creative multiband distortion, delay, filter and synthesizer plug-ins. FabFilter Micro v1.23, FabFilter One v3.34, FabFilter Pro-C 2 v2.14, FabFilter Pro-DS v1.18, FabFilter Pro-G v1.28, FabFilter Pro-L 2 v2.10, FabFilter Pro-MB v1.25, FabFilter Pro-Q 3 v3.20, FabFilter Pro-R v1.12, FabFilter Saturn 2 v2.05, FabFilter Simplon v1.33, FabFilter Timeless v3.02, FabFilter Twin v2.33, FabFilter Volcano v3.01',
            'shortdesc' => 'The Total Bundle 2021 is a set of all FabFilter plug-ins. With this bundle, you get our professional EQ, reverb, compressor, multiband dynamics, limiter, de-esser and gate/expander, creative multiband distortion, delay, filter and synthesizer plug-ins.',
            'developer' => 'Floris Klinkert',
            'releasedate' => '5 February 2009',
            'price' => '1000000',
            'versionnumber' => 'v2021.12'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 4,
            'imgurl' => 'https://3.bp.blogspot.com/-HCyDJcbHUEQ/WrcqZCBOC0I/AAAAAAAACWQ/gQqxB6Ht81wSlZ3TDR5zH8v-hEW7VbergCLcBGAs/w1200-h630-p-k-no-nu/A.O.M%2BTotal%2BBundle%2Bv1.8.2.jpg',
            'vidurl' => 'https://www.youtube.com/embed/wUvpKDu5cv0',
            'description' => 'A.O.M. Factory offers professional audio plug-ins. Our goal is to provide simple and effective gears for audio and music production. A.O.M. Invisible Limiter is a transparent look-ahead brickwall limiter with automatic tuning of time parameters attack/release. Algorithm Invisible Limiter reduces the difference between the original and processed material. Invisible Limiter G2 – its data, inherited from Invisible Limiter, but there are many improvements such as: reducing drives, soft knee, communication channel, manual attack/release, chills, and a filter circuit part, etc.',
            'shortdesc' => 'A.O.M. Factory offers professional audio plug-ins. Our goal is to provide simple and effective gears for audio and music production.',
            'developer' => 'A.O.M. Corporation',
            'releasedate' => '9 September 2021',
            'price' => '900000',
            'versionnumber' => 'v1.12.0'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 5,
            'imgurl' => 'https://www.amplesound.net/images/ag/aglp01.jpg',
            'vidurl' => 'https://www.youtube.com/embed/v6kEEbc7y9Q',
            'description' => 'Ample Guitar LP III aim to bring a Gibson Les Paul 1958 Reissue guitar sound to your studio. The Ample Sound Ample Guitar LP III is a Virtual Electric Guitar (Download) with a Based on 6128 samples of a Gibson Les Paul, Tab player for all popular tablature formats, Realistic fretboard and string grip sounds, playing styles and sustain, Hammer On and Pull Off, Legato slide, Slide In and Out, Palm Mute, Popping, Natural harmonic, Slide guitar, 11 Strum articulations, Legato at random Length, Pitch and Poly, Support for MIDI guitars, Various algorithms for realistic play & Keyswitches for articulation change.',
            'shortdesc' => 'Ample Guitar LP III aim to bring a Gibson Les Paul 1958 Reissue guitar sound to your studio. The Ample Sound Ample Guitar LP III is a Virtual Electric Guitar (Download) with a Based on 6128 samples of a Gibson Les Paul.',
            'developer' => 'Ample Sound',
            'releasedate' => '26 September 2021',
            'price' => '750000',
            'versionnumber' => 'v3.5.0'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 6,
            'imgurl' => 'https://keysmod.com/wp-content/uploads/2021/01/Screenshot_1-4.png',
            'vidurl' => 'https://www.youtube.com/embed/5kdXo6rXL74',
            'description' => 'The dream synthesizer did not seem to exist: a wavetable synthesizer with a truly high-quality sound, visual and creative workflow-oriented interface to make creating and altering sounds fun instead of tedious, and the ability to “go deep” when desired - to create / import / edit / morph wavetables, and manipulate these on playback in real-time with over than 450 presets, and 144 wavetables, Serum is here to help producer to be creative and elevate their sound design level',
            'shortdesc' => 'The dream synthesizer did not seem to exist: a wavetable synthesizer with a truly high-quality sound, visual and creative workflow-oriented interface to make creating and altering sounds fun instead of tedious.',
            'developer' => 'Xfer Records',
            'releasedate' => '10 November 2014',
            'price' => '550000',
            'versionnumber' => 'v1.33b4'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 7,
            'imgurl' => 'https://rekkerd.org/wp-content/uploads/2021/11/Sonuscore-ROKI.png',
            'vidurl' => 'https://www.youtube.com/embed/E7-q_xtMoIQ',
            'description' => 'Enrich your compositions with the vintage sounds of meticulously recorded mechanics, multiple microphone positions and 20 velocities or turn them into mysterious, ethereal soundscapes using the Glow slider. With the instruments vast sound melding capabilities you can switch between the raw DI signal or the warmth of a vintage style amp, change attack, release and dynamic range, as well as add mechanical noises and nine finely tuned effect modules.',
            'shortdesc' => 'Welcome to SONUSCORE’s ROKI – Electric Piano. Where words fail, music gains its power. The Electric Piano brings the analogue warmth of the great 70s to your tracks.',
            'developer' => 'Sonuscore',
            'releasedate' => '22 November 2021',
            'price' => '780000',
            'versionnumber' => 'v6.6.0'
        ]);
        SoftwareDetails::create([
            'softwares_id' => 8,
            'imgurl' => 'https://cinematique-instruments.com/skin/Pandrum-Kontakt-Main.jpg',
            'vidurl' => 'https://www.youtube.com/embed/mh21nrgjgo4',
            'description' => 'A Hand Pan consists of two metal half-shells glued together with an opening whole in the bottom side. On top is a central tone field with the deepest note surrounded by a circle of at least seven tone fields with higher scale notes. The creation and tuning of the tone fields is extremely complex. In the process of tuning, the tuner hammers several overtones into every tone field. This takes a very long time. Finally the handpan is available in a large amount of scales from all over the world. In addition to the classic handpan instruments with battered in tone fields, there is also the department of the Tongue Drums, which work with metallic reeds.',
            'shortdesc' => 'Pandrum is an exceptional instrument with a fantastic sound in a modern design. Finally it is a very impressive reproduction of a real handpan instrument.',
            'developer' => 'Cinematique Instruments',
            'releasedate' => '8 April 2020',
            'price' => '980000',
            'versionnumber' => 'v6.6.0'
        ]);
    }
}
