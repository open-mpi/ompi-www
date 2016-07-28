<?
$subject_val = "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 08:57:22 2013" -->
<!-- isoreceived="20130116135722" -->
<!-- sent="Wed, 16 Jan 2013 13:57:15 +0000" -->
<!-- isosent="20130116135715" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380BB9E6_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMv597BKeCXqKYoVUWjLbe5K-O0WUJbpYxak9uwrsj43U+jrLQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 08:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try disabling firewalling between your nodes.  The easiest way is &quot;sudo service iptables stop&quot;.
<br>
<p><p>On Jan 16, 2013, at 7:46 AM, borja mf &lt;borjamunozfernandez_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Hello all. 
</span><br>
<span class="quotelev1">&gt; I want to learn MPI and I've trying to setting up OMPI for first time on three nodes. My config above:
</span><br>
<span class="quotelev1">&gt; Ubuntu server - master node: pruebaborja 
</span><br>
<span class="quotelev1">&gt; 2x Ubuntu Desktop - slaves node:  
</span><br>
<span class="quotelev1">&gt; clienteprueba
</span><br>
<span class="quotelev1">&gt; clientepruebados 4 slots
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Im running NFSv4 for sharing /home/mpiuser.
</span><br>
<span class="quotelev1">&gt; I want to test a plain &quot;Hello world&quot;but I can't make it working successfully on node clienteprueba. This is the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
</span><br>
<span class="quotelev1">&gt; [clienteprueba:01993] [[64434,0], 2] -&gt; [[64434,0],0] mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor (9) [sd = 9]
</span><br>
<span class="quotelev1">&gt; [clienteprueba:01993] [[64434,0], 2] routed:binomial: Connection to lifeline [[64434,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, with clientepruebados and pruebaborja only on my hostfile, it works:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pruebaborja slots=1
</span><br>
<span class="quotelev1">&gt; clientepruebados slots=4
</span><br>
<span class="quotelev1">&gt; #clienteprueba slots=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy pruebaborja: 0 de 6
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy pruebaborja: 5 de 6
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy clientepruebados: 1 de 6
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy clientepruebados: 2 de 6
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy clientepruebados: 3 de 6
</span><br>
<span class="quotelev1">&gt; Hola, mundo, soy clientepruebados: 4 de 6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've checked the OMPI versions on the machines and it's the same. I can't understand why Im getting this error on clienteprueba; i've done the same config on  clientepruebados and clienteprueba. Anyone could help me to solve this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for my english. 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21131.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Windows MPI with Fortran calling programs"</a>
<li><strong>Previous message:</strong> <a href="21129.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>In reply to:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21134.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
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
