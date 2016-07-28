<?
$subject_val = "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 04:25:44 2013" -->
<!-- isoreceived="20130117092544" -->
<!-- sent="Thu, 17 Jan 2013 10:25:39 +0100" -->
<!-- isosent="20130117092539" -->
<!-- name="borja mf" -->
<!-- email="borjamunozfernandez_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
<!-- id="CAMv597DGGxuLiJCgWgGXgJ6hw+bG1yPsWhb_4wNaQe39OYXYBg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
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
<strong>Date:</strong> 2013-01-17 04:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21145.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21143.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe in reply to:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry! I removed the mails so I have to post another one.
<br>
<p>I stopped the iptables on the three nodes. Ping it's working OK
<br>
(pruebaborja to clienteprueba / clienteprueba to pruebaborja....).
<br>
<p>My /etc/networks/interfaces - node:
<br>
<p>pruebaborja Masternode
<br>
#The loopback network interface
<br>
auto lo
<br>
iface lo inet loopback
<br>
#The primary network interface
<br>
auto eth0
<br>
iface eth0 inet dhcp
<br>
<p>clienteprueba and clientepruebados
<br>
auto lo
<br>
ifface lo inet loopback
<br>
<p>My interface is Auto (eth0) on the three nodes.
<br>
Do you want to see &quot;ifconfig&quot; also?
<br>
Thank you again or answer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21145.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21143.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Maybe in reply to:</strong> <a href="21128.php">borja mf: "[OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="21149.php">Ralph Castain: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
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
