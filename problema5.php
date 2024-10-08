    <?php
    
        // Inicialmente, todas as lâmpadas estão apagadas e frias. 
            $lampadaA = ['estado' => 'apagada', 'temperatura' => 'fria'];
            $lampadaB = ['estado' => 'apagada', 'temperatura' => 'fria'];
            $lampadaC = ['estado' => 'apagada', 'temperatura' => 'fria'];

        // Simulação da lógica:
        function resolverDesafio() {
            global $lampadaA, $lampadaB, $lampadaC;
        
        // 1. Ligar o Interruptor A e deixar por um tempo (Lâmpada A aquece)
        $lampadaA['estado'] = 'acesa';
        // Simulando o tempo em que a lâmpada fica ligada (ela aquece)
        sleep(1); // A lâmpada A ficou ligada por um tempo (simulando)
        $lampadaA['temperatura'] = 'quente';

        // 2. Desligar o Interruptor A
        $lampadaA['estado'] = 'apagada';

        // 3. Ligar o Interruptor B
        $lampadaB['estado'] = 'acesa';

        // Agora, vamos até a sala das lâmpadas:
        echo "Verificando o estado das lâmpadas:\n";

        verificarLampadas();

        }

        // Função para verificar o estado das lâmpadas
        function verificarLampadas() {
            global $lampadaA, $lampadaB, $lampadaC;

        // Lâmpada A
        if ($lampadaA['estado'] === 'acesa') {
            echo "Lâmpada A está acesa, então é controlada pelo Interruptor B.\n";
        } elseif ($lampadaA['estado'] === 'apagada' && $lampadaA['temperatura'] === 'quente') {
            echo "Lâmpada A está apagada mas quente, então é controlada pelo Interruptor A.\n";
        } elseif ($lampadaA['estado'] === 'apagada' && $lampadaA['temperatura'] === 'fria') {
            echo "Lâmpada A está apagada e fria, então é controlada pelo Interrupetor C.\n";
        }

        // Lâmpada B
        if ($lampadaB['estado'] === 'acesa') {
            echo "Lâmpada B está acesa, então é controlada pelo Interruptor B.\n";
        } elseif ($lampadaB['estado'] === 'apagada' && $lampadaB['temperatura'] === 'quente') {
            echo "Lâmpada B está apagada mas quente, então le controlada pelo Interruptor A.\n";
        } elseif ($lampadaB['estado'] === 'apagada' && $lampadaB['temperatura'] === 'fria') {
            echo "Lâmpada B está apagada e fria, então é controlada pelo Interrupetor C.\n";
        }

        // Lâmpada C
        if ($lampadaC['estado'] === 'acesa') {
            echo "Lâmpada C está acesa, então é controlada pelo Interruptor B.\n";
        } elseif ($lampadaC['estado'] === 'apagada' && $lampadaC['temperatura'] === 'quente') {
            echo "Lâmpada C está apagada mas quente, então le controlada pelo Interruptor A.\n";
        } elseif ($lampadaC['estado'] === 'apagada' && $lampadaC['temperatura'] === 'fria') {
            echo "Lâmpada C está apagada e fria, então é controlada pelo Interrupetor C.\n";
        }
    }

    // Chamar a função para resolver o desafio
    resolverDesafio();
    ?>