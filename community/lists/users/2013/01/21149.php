<?
$subject_val = "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 14:59:23 2013" -->
<!-- isoreceived="20130117195923" -->
<!-- sent="Thu, 17 Jan 2013 11:59:16 -0800" -->
<!-- isosent="20130117195916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor" -->
<!-- id="83F6A68C-D728-40FE-92A2-BD30AD59D886_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMv597DGGxuLiJCgWgGXgJ6hw+bG1yPsWhb_4wNaQe39OYXYBg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 14:59:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21150.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21148.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Configure OMPI with --enable-debug, and then run
<br>
<p>mpirun -n 1 -host clienteprueba -mca plm_base_verbose 5 hostname
<br>
<p>You should see a daemon getting launched and successfully reporting back to mpirun, and then the application getting launched on the remote node.
<br>
<p><p>On Jan 17, 2013, at 1:25 AM, borja mf &lt;borjamunozfernandez_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry! I removed the mails so I have to post another one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I stopped the iptables on the three nodes. Ping it's working OK (pruebaborja to clienteprueba / clienteprueba to pruebaborja....).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My /etc/networks/interfaces - node:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pruebaborja Masternode
</span><br>
<span class="quotelev1">&gt; #The loopback network interface
</span><br>
<span class="quotelev1">&gt; auto lo
</span><br>
<span class="quotelev1">&gt; iface lo inet loopback
</span><br>
<span class="quotelev1">&gt; #The primary network interface
</span><br>
<span class="quotelev1">&gt; auto eth0
</span><br>
<span class="quotelev1">&gt; iface eth0 inet dhcp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; clienteprueba and clientepruebados
</span><br>
<span class="quotelev1">&gt; auto lo
</span><br>
<span class="quotelev1">&gt; ifface lo inet loopback
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My interface is Auto (eth0) on the three nodes.
</span><br>
<span class="quotelev1">&gt; Do you want to see &quot;ifconfig&quot; also? 
</span><br>
<span class="quotelev1">&gt; Thank you again or answer 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21150.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>Previous message:</strong> <a href="21148.php">Ralph Castain: "Re: [OMPI users] help me understand these error msgs"</a>
<li><strong>In reply to:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<!-- nextthread="start" -->
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
