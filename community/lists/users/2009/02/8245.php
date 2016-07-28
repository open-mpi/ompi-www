<?
$subject_val = "Re: [OMPI users] openib RETRY EXCEEDED ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 12:33:35 2009" -->
<!-- isoreceived="20090227173335" -->
<!-- sent="Fri, 27 Feb 2009 19:33:26 +0200" -->
<!-- isosent="20090227173326" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib RETRY EXCEEDED ERROR" -->
<!-- id="49A823E6.6040306_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49A7510D.8020208_at_vpac.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib RETRY EXCEEDED ERROR<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 12:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8244.php">&#197;ke Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Usually &quot;retry exceeded error&quot; points to some network issues, like bad 
<br>
cable or some bad connector. You may use ibdiagnet tool for the network 
<br>
debug - *<a href="http://linux.die.net/man/1/ibdiagnet">http://linux.die.net/man/1/ibdiagnet</a>. *This tool is part of OFED.
<br>
<p>Pasha
<br>
<p>Brett Pemberton wrote:
<br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've had a couple of errors recently, of the form:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [[1176,1],0][btl_openib_component.c:2905:handle_wc] from 
</span><br>
<span class="quotelev1">&gt; tango092.vpac.org to: tango090 error polling LP CQ with status RETRY 
</span><br>
<span class="quotelev1">&gt; EXCEEDED ERROR status number 12 for wr_id 38996224 opcode 0 qp_idx 0
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The InfiniBand retry count between two MPI processes has been
</span><br>
<span class="quotelev1">&gt; exceeded.  &quot;Retry count&quot; is defined in the InfiniBand spec 1.2
</span><br>
<span class="quotelev1">&gt; (section 12.7.38):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My first thought was to increase the retry count, but it is already at 
</span><br>
<span class="quotelev1">&gt; maximum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've checked connections between the two nodes, and they seem ok
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_tango090 ~]# ibv_rc_pingpong
</span><br>
<span class="quotelev1">&gt;   local address:  LID 0x005f, QPN 0xe4045d, PSN 0xdd13f0
</span><br>
<span class="quotelev1">&gt;   remote address: LID 0x005d, QPN 0xfe0425, PSN 0xc43fe2
</span><br>
<span class="quotelev1">&gt; 8192000 bytes in 0.07 seconds = 996.93 Mbit/sec
</span><br>
<span class="quotelev1">&gt; 1000 iters in 0.07 seconds = 65.74 usec/iter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I stop this happening in the future, without increasing the 
</span><br>
<span class="quotelev1">&gt; retry count?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     / Brett
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8246.php">Nicolas Deladerriere: "[OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8244.php">&#197;ke Sandgren: "Re: [OMPI users] openib RETRY EXCEEDED ERROR"</a>
<li><strong>In reply to:</strong> <a href="8223.php">Brett Pemberton: "[OMPI users] openib RETRY EXCEEDED ERROR"</a>
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
