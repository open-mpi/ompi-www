<?
$subject_val = "Re: [OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 15:13:22 2014" -->
<!-- isoreceived="20141219201322" -->
<!-- sent="Fri, 19 Dec 2014 21:13:19 +0100" -->
<!-- isosent="20141219201319" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64" -->
<!-- id="549486DF.50405_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DUB126-W2190E22E21596A1B834CF4E36B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 15:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26047.php">Diego Avesani: "[OMPI users] best function to send data"</a>
<li><strong>Previous message:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
<li><strong>In reply to:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The rationale is to read the message and do what it says :)
<br>
<p>Have a look at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error
<br>
Try upgrading your BIOS and kernel.
<br>
<p>Otherwise install hwloc and send the output (tarball) of
<br>
hwloc-gather-topology to hwloc-users (not to OMPI users).
<br>
<p>thanks
<br>
Brice
<br>
<p><p><p>Le 19/12/2014 20:58, Sergio Manzetti a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all, when trying to run NWchem with openmpi, I get this error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there any rationale for solving this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26045.php">http://www.open-mpi.org/community/lists/users/2014/12/26045.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26047.php">Diego Avesani: "[OMPI users] best function to send data"</a>
<li><strong>Previous message:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
<li><strong>In reply to:</strong> <a href="26045.php">Sergio Manzetti: "[OMPI users] Hwloc error with Openmpi 1.8.3 on AMD 64"</a>
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
