<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'picture' => 'https://www.robotshop.com/media/catalog/product/cache/image/1350x/9df78eab33525d08d6e5fb8d27136e95/m/a/makeblock-mtiny-coding-kit-1.jpg',
            'title' => 'MakeBlock mTiny Coding Kit',
            'price' => 149,
            'description' => 'The MakeBlock mTiny Coding Kit is an early childhood education robot for children growing up in the digital age. Its unique Tap Pen Controller, as a coding tool, facilitates kids kinesthetic experience on tangible programming language.'
            
        ]);

        Product::create([
            'picture' => 'https://www.robotshop.com/media/catalog/product/cache/image/900x900/9df78eab33525d08d6e5fb8d27136e95/e/z/ez-robot-jd-humanoid-robot.jpg',
            'title' => 'EZ-Robot JD Humanoid Robot',
            'price' => 549,
            'description' => 'The EZ-Robot JD Humanoid Robot is a fully functional humanoid robot built with EZ-Bits. This humanoid boasts 16 degrees of freedom with metal gear heavy duty servo motors.',
            
        ]);

        Product::create([
            'picture' => 'https://www.robotshop.com/media/catalog/product/cache/image/1350x/9df78eab33525d08d6e5fb8d27136e95/a/r/arcbotics-sparki-robot-25.jpg',
            'title' => 'ArcBotics Sparki Robot',
            'price' => 149,
            'description' => 'The ArcBotics Sparki Robot is an affordable, easy to use, and fun intro to programming, electronics, and robotics. It is geared towards kids elementary-age and above, educators looking for an easy intro to robotics.',
            
        ]);

        Product::create([
            'picture' => 'https://www.robotshop.com/media/catalog/product/cache/image/1350x/9df78eab33525d08d6e5fb8d27136e95/k/r/krypton-3-modular-robot-kit_1.jpg',
            'title' => 'Modular Contruction Robot Kit',
            'price' => 299,
            'description' => 'The Krypton 3 Modular Robot Kit combines different types of bricks, various sensors and actuators and powerful controllers, with which youngsters can design and construct their own robots and program the robot to accomplish various tasks.',
            
        ]);
    }
}
