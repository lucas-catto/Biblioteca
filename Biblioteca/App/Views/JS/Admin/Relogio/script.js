function updateTime() {
    
    const now = new Date();

    const diasDaSemana = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
    
    const diaSemana    = diasDaSemana[now.getDay()];
    const diaMes       = now.getDate().toString().padStart(2, '0');
    
    const meses        = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    
    const mes          = meses[now.getMonth()];
    const horas        = now.getHours().toString().padStart(2, '0');
    const minutos      = now.getMinutes().toString().padStart(2, '0');
    const segundos     = now.getSeconds().toString().padStart(2, '0');
    const timeString   = `${diaSemana}, ${diaMes} de ${mes} - ${horas}:${minutos}:${segundos}`;
    
    document.getElementById('time').textContent = timeString;
}

setInterval(updateTime, 1000);
updateTime();
