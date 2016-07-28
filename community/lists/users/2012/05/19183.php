<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 06:33:48 2012" -->
<!-- isoreceived="20120504103348" -->
<!-- sent="Fri, 4 May 2012 06:33:45 -0400" -->
<!-- isosent="20120504103345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="7EFB3625-027F-4421-B9A8-52DE4DA44FBA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120503214259.GJ3458_at_rzlab.ucr.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI over tcp<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 06:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Double check that you have firewalls (e.g., iptables) disabled.
<br>
<p><p>On May 3, 2012, at 5:42 PM, Don Armstrong wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 03 May 2012, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I tried your program on a single node and it worked fine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works fine on a single node, but deadlocks when it communicates in
</span><br>
<span class="quotelev1">&gt; between nodes. Single node communication doesn't use tcp by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, TCP message passing in Open MPI has been working well for some
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok. Which version(s) of openmpi are you using successfully? [I'm
</span><br>
<span class="quotelev1">&gt; assuming that this is in an environment which doesn't use IB.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Can you run something like hostname successfully (mpirun -np 10
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile yourhostfile hostname)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but this only shows that processes start and output is returned,
</span><br>
<span class="quotelev1">&gt; which doesn't utilize the in-band message passing at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. If that works, then you can also run with a debug switch to see
</span><br>
<span class="quotelev2">&gt;&gt; what connections are being made by MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can see the connections being made in the attached log:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [archimedes:29820] btl: tcp: attempting to connect() to [[60576,1],2] address 138.23.141.162 on port 2001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest reading through here for some ideas and for the
</span><br>
<span class="quotelev2">&gt;&gt; debug switch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. I checked the FAQ, and didn't see anything that shed any
</span><br>
<span class="quotelev1">&gt; light, unfortunately.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don Armstrong
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Fate and Temperament are two words for one and the same concept.
</span><br>
<span class="quotelev1">&gt; -- Novalis [Hermann Hesse _Demian_]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
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
<li><strong>Next message:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19182.php">Jorge Chiva Segura: "[OMPI users] MPI_Recv hangs"</a>
<li><strong>In reply to:</strong> <a href="19180.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19197.php">Don Armstrong: "Re: [OMPI users] MPI over tcp"</a>
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
