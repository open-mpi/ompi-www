<?
$subject_val = "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 18 11:50:58 2013" -->
<!-- isoreceived="20130818155058" -->
<!-- sent="Sun, 18 Aug 2013 17:50:47 +0200" -->
<!-- isosent="20130818155047" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core" -->
<!-- id="5210ED57.3010509_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAPkf6e3xtJMmK3w6+a-HmLXhHXq2TjRSuK9rg4xf1T9UfTau3w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-18 11:50:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22510.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/08/2013 14:51, Siddhartha Jana a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If all the above works and does not return errors (you should
</span><br>
<span class="quotelev1">&gt;     check that
</span><br>
<span class="quotelev1">&gt;     your application's PID is in /dev/cpuset/socket0/tasks while running),
</span><br>
<span class="quotelev1">&gt;     bind-to-core won't clash with it, at least when using a OMPI that uses
</span><br>
<span class="quotelev1">&gt;     hwloc for binding (v1.5.2 or later if I remember correctly).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My concern is that hwloc is used before the application begins
</span><br>
<span class="quotelev1">&gt; executing and so mpirun might use it to bind the application to
</span><br>
<span class="quotelev1">&gt; different cores than the ones I want them to bind to.
</span><br>
<p>Ah right, they could be a problem here. MPI can bind at two different
<br>
times: inside mpirun after ssh before running the actual program (this
<br>
one would ignore your cpuset), later at MPI_Init inside your program
<br>
(this one will ignore your cpuset only if you call MPI_Init before
<br>
creating the cpuset).
<br>
<p>I'll let OMPI people give more details about this.
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22511/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22512.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22510.php">Ralph Castain: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>In reply to:</strong> <a href="22503.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22504.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
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
