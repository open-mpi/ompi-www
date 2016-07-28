<?
$subject_val = "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 07:46:13 2013" -->
<!-- isoreceived="20130116124613" -->
<!-- sent="Wed, 16 Jan 2013 13:46:09 +0100" -->
<!-- isosent="20130116124609" -->
<!-- name="borja mf" -->
<!-- email="borjamunozfernandez_at_[hidden]" -->
<!-- subject="[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
<!-- id="CAMv597BKeCXqKYoVUWjLbe5K-O0WUJbpYxak9uwrsj43U+jrLQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor<br>
<strong>From:</strong> borja mf (<em>borjamunozfernandez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 07:46:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Maybe reply:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all.
<br>
I want to learn MPI and I've trying to setting up OMPI for first time on
<br>
three nodes. My config above:
<br>
Ubuntu server - master node: pruebaborja
<br>
2x Ubuntu Desktop - slaves node:
<br>
clienteprueba
<br>
clientepruebados 4 slots
<br>
<p>Im running NFSv4 for sharing /home/mpiuser.
<br>
I want to test a plain &quot;Hello world&quot;but I can't make it working
<br>
successfully on node clienteprueba. This is the problem:
<br>
<p>mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
<br>
[clienteprueba:01993] [[64434,0], 2] -&gt; [[64434,0],0]
<br>
mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor (9) [sd =
<br>
9]
<br>
[clienteprueba:01993] [[64434,0], 2] routed:binomial: Connection to
<br>
lifeline [[64434,0],0] lost
<br>
<p>However, with clientepruebados and pruebaborja only on my hostfile, it
<br>
works:
<br>
<p>pruebaborja slots=1
<br>
clientepruebados slots=4
<br>
#clienteprueba slots=1
<br>
<p>mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
<br>
Hola, mundo, soy pruebaborja: 0 de 6
<br>
Hola, mundo, soy pruebaborja: 5 de 6
<br>
Hola, mundo, soy clientepruebados: 1 de 6
<br>
Hola, mundo, soy clientepruebados: 2 de 6
<br>
Hola, mundo, soy clientepruebados: 3 de 6
<br>
Hola, mundo, soy clientepruebados: 4 de 6
<br>
<p>I've checked the OMPI versions on the machines and it's the same. I can't
<br>
understand why Im getting this error on clienteprueba; i've done the same
<br>
config on  clientepruebados and clienteprueba. Anyone could help me to
<br>
solve this?
<br>
<p>Sorry for my english.
<br>
Thanks in advance
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21127.php">Matthias Jurenz: "Re: [OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Maybe reply:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
