<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => 'Desenvolver um sistema de gestão de eventos para uma plataforma online que permite a criação, organização e gerenciamento de eventos para empresas e organizadores individuais. O sistema deverá ser construído com React.js no frontend e Node.js no backend, integrando APIs de pagamento como Stripe e PayPal para facilitar a compra de ingressos e o processamento de transações. A solução também inclui um painel de administração para gerenciar participantes, enviar notificações automáticas por e-mail e gerar relatórios de presença e vendas.',
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake() ->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['react', 'vite', 'js', 'nextjs', 'nodejs'], random_int(1,5)),
            'created_by' => User::factory(),
        ];
    }
}
