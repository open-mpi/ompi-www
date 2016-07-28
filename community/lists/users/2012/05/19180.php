<?
$subject_val = "Re: [OMPI users] MPI over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  3 17:43:07 2012" -->
<!-- isoreceived="20120503214307" -->
<!-- sent="Thu, 3 May 2012 14:42:59 -0700" -->
<!-- isosent="20120503214259" -->
<!-- name="Don Armstrong" -->
<!-- email="don_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI over tcp" -->
<!-- id="20120503214259.GJ3458_at_rzlab.ucr.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E842E4DB7_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Don Armstrong (<em>don_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-03 17:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 03 May 2012, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; I tried your program on a single node and it worked fine. 
</span><br>
<p>It works fine on a single node, but deadlocks when it communicates in
<br>
between nodes. Single node communication doesn't use tcp by default.
<br>
<p><span class="quotelev1">&gt; Yes, TCP message passing in Open MPI has been working well for some
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<p>Ok. Which version(s) of openmpi are you using successfully? [I'm
<br>
assuming that this is in an environment which doesn't use IB.]
<br>
<p><span class="quotelev1">&gt; 1. Can you run something like hostname successfully (mpirun -np 10
</span><br>
<span class="quotelev1">&gt; -hostfile yourhostfile hostname)
</span><br>
<p>Yes, but this only shows that processes start and output is returned,
<br>
which doesn't utilize the in-band message passing at all.
<br>
<p><span class="quotelev1">&gt; 2. If that works, then you can also run with a debug switch to see
</span><br>
<span class="quotelev1">&gt; what connections are being made by MPI.
</span><br>
<p>You can see the connections being made in the attached log:
<br>
<p>[archimedes:29820] btl: tcp: attempting to connect() to [[60576,1],2] address 138.23.141.162 on port 2001
<br>
<p><span class="quotelev1">&gt; I would suggest reading through here for some ideas and for the
</span><br>
<span class="quotelev1">&gt; debug switch.
</span><br>
<p>Thanks. I checked the FAQ, and didn't see anything that shed any
<br>
light, unfortunately.
<br>
<p><p>Don Armstrong
<br>
<p><pre>
-- 
Fate and Temperament are two words for one and the same concept.
 -- Novalis [Hermann Hesse _Demian_]
<a href="http://www.donarmstrong.com">http://www.donarmstrong.com</a>              <a href="http://rzlab.ucr.edu">http://rzlab.ucr.edu</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>In reply to:</strong> <a href="19179.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19183.php">Jeff Squyres: "Re: [OMPI users] MPI over tcp"</a>
<li><strong>Reply:</strong> <a href="19191.php">Rolf vandeVaart: "Re: [OMPI users] MPI over tcp"</a>
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
