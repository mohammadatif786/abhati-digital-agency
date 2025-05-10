<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\ServicePoint;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'title' => 'Web Development',
                'description' => 'Modern and scalable web solutions for businesses.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Responsive Design', 'point_description' => 'Ensures compatibility with all devices.'],
                    ['point' => 'Secure Code', 'point_description' => 'Uses the latest security standards.'],
                ],
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'High-performance mobile apps for Android and iOS.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'User-Friendly UI', 'point_description' => 'Designed for smooth user experience.'],
                    ['point' => 'Fast Performance', 'point_description' => 'Optimized for speed and efficiency.'],
                ],
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Improve brand visibility with our digital strategies.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'SEO Optimization', 'point_description' => 'Boost your rankings on search engines.'],
                    ['point' => 'Social Media Marketing', 'point_description' => 'Engage users on multiple platforms.'],
                ],
            ],
            [
                'title' => 'Graphic Design',
                'description' => 'Stunning visuals that enhance brand identity.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Creative Logos', 'point_description' => 'Unique and eye-catching designs.'],
                    ['point' => 'Professional Branding', 'point_description' => 'Consistent design across all platforms.'],
                ],
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Secure and scalable cloud-based services.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Data Security', 'point_description' => 'Protects sensitive information.'],
                    ['point' => 'High Availability', 'point_description' => 'Ensures uptime and reliability.'],
                ],
            ],
            [
                'title' => 'Cybersecurity Services',
                'description' => 'Protect your digital assets with our cybersecurity solutions.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Threat Detection', 'point_description' => 'Identifies and prevents cyber attacks.'],
                    ['point' => 'Data Encryption', 'point_description' => 'Secures your sensitive information.'],
                ],
            ],
            [
                'title' => 'AI & Machine Learning',
                'description' => 'Intelligent solutions powered by AI.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Predictive Analytics', 'point_description' => 'Helps in data-driven decision making.'],
                    ['point' => 'Automated Systems', 'point_description' => 'Reduces manual workload and errors.'],
                ],
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Build and scale your online store effortlessly.',
                'image' => 'n/a',
                'points' => [
                    ['point' => 'Custom Storefronts', 'point_description' => 'Personalized designs for your brand.'],
                    ['point' => 'Payment Integration', 'point_description' => 'Supports multiple payment gateways.'],
                ],
            ],
        ];

        foreach ($services as $serviceData) {
            $service = Service::create([
                'title' => $serviceData['title'],
                'description' => $serviceData['description'],
                'image' => $serviceData['image'],
            ]);

            foreach ($serviceData['points'] as $point) {
                ServicePoint::create([
                    'service_id' => $service->id,
                    'point' => $point['point'],
                    'point_description' => $point['point_description'],
                ]);
            }
        }
    }
}
