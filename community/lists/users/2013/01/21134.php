<?
$subject_val = "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 16 11:00:02 2013" -->
<!-- isoreceived="20130116160002" -->
<!-- sent="Wed, 16 Jan 2013 16:59:57 +0100" -->
<!-- isosent="20130116155957" -->
<!-- name="borja mf" -->
<!-- email="borjamunozfernandez_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
<!-- id="CAMv597D2gSnacYK68_L95=3P9WVGk0hVO4X+wn7QZ1zs=u-vXw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380BB9E6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> borja mf (<em>borjamunozfernandez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-16 10:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Getting the same error...
<br>
I forgot to say that I must to use Ubuntu and Im compiling with mpicc. My
<br>
code is written on C.
<br>
<p>Thank for answer.
<br>
<p>Im going crazy with this problem. There's not much info about.
<br>
<p>2013/1/16 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Try disabling firewalling between your nodes.  The easiest way is &quot;sudo
</span><br>
<span class="quotelev1">&gt; service iptables stop&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 16, 2013, at 7:46 AM, borja mf &lt;borjamunozfernandez_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all.
</span><br>
<span class="quotelev2">&gt; &gt; I want to learn MPI and I've trying to setting up OMPI for first time on
</span><br>
<span class="quotelev1">&gt; three nodes. My config above:
</span><br>
<span class="quotelev2">&gt; &gt; Ubuntu server - master node: pruebaborja
</span><br>
<span class="quotelev2">&gt; &gt; 2x Ubuntu Desktop - slaves node:
</span><br>
<span class="quotelev2">&gt; &gt; clienteprueba
</span><br>
<span class="quotelev2">&gt; &gt; clientepruebados 4 slots
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Im running NFSv4 for sharing /home/mpiuser.
</span><br>
<span class="quotelev2">&gt; &gt; I want to test a plain &quot;Hello world&quot;but I can't make it working
</span><br>
<span class="quotelev1">&gt; successfully on node clienteprueba. This is the problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
</span><br>
<span class="quotelev2">&gt; &gt; [clienteprueba:01993] [[64434,0], 2] -&gt; [[64434,0],0]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor (9) [sd =
</span><br>
<span class="quotelev1">&gt; 9]
</span><br>
<span class="quotelev2">&gt; &gt; [clienteprueba:01993] [[64434,0], 2] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[64434,0],0] lost
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, with clientepruebados and pruebaborja only on my hostfile, it
</span><br>
<span class="quotelev1">&gt; works:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pruebaborja slots=1
</span><br>
<span class="quotelev2">&gt; &gt; clientepruebados slots=4
</span><br>
<span class="quotelev2">&gt; &gt; #clienteprueba slots=1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiuser_at_pruebaborja:~$ mpirun -np 6 --hostfile .mpi_hostfile ./holamundo
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy pruebaborja: 0 de 6
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy pruebaborja: 5 de 6
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy clientepruebados: 1 de 6
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy clientepruebados: 2 de 6
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy clientepruebados: 3 de 6
</span><br>
<span class="quotelev2">&gt; &gt; Hola, mundo, soy clientepruebados: 4 de 6
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've checked the OMPI versions on the machines and it's the same. I
</span><br>
<span class="quotelev1">&gt; can't understand why Im getting this error on clienteprueba; i've done the
</span><br>
<span class="quotelev1">&gt; same config on  clientepruebados and clienteprueba. Anyone could help me to
</span><br>
<span class="quotelev1">&gt; solve this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for my english.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21134/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21133.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21130.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21135.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
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
