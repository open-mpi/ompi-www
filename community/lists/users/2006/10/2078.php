<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Oct 28 11:10:55 2006" -->
<!-- isoreceived="20061028151055" -->
<!-- sent="Sat, 28 Oct 2006 17:00:54 +0200" -->
<!-- isosent="20061028150054" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="1162047655.5455.2.camel_at_y-boda.hpc2n.umu.se" -->
<!-- inreplyto="B6510006-C984-45B2-8AD8-694C3B333E92_at_cisco.com" -->
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
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-28 11:00:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2079.php">openmpi-user_at_[hidden]: "[OMPI users] Xgrid and Kerberos"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2006-10-28 at 08:45 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay on this -- is this still the case with the OMPI  
</span><br>
<span class="quotelev1">&gt; trunk?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We think we finally have all the issues solved with MPI_ABORT on the  
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Nah, it was a problem with overutilization, i.e. 4tasks on 2 cpus in one
<br>
node.
<br>
Turning on yield_when_idle made the problem go away.
<br>
As to why it didn't figure this out by itself is another problem.
<br>
<p>Summary: 1.1.2 works correctly, no problems.
<br>
(Except when building with PGI, i have patches...)
<br>
<p><span class="quotelev3">&gt; &gt;&gt; Lets add some more data to this...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BLACS 1.1p3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ubuntu Dapper 6.06
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dual opteron
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gcc 4.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gfortran 4.0 (for both f77 and f90)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; standard tests with 4 tasks on one node (i.e. 2 tasks per cpu)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OpenMPI 1.1.2rc3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The tests comes to a complete standstill at the integer bsbr tests
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It consumes cpu all the time but nothing happens.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually if i'm not too inpatient i will progress but VERY slowly.
</span><br>
<span class="quotelev2">&gt; &gt; A complete run of the blacstest takes +30min cpu-time...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From the bsbr tests and onwards everything takes &quot;forever&quot;.
</span><br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2079.php">openmpi-user_at_[hidden]: "[OMPI users] Xgrid and Kerberos"</a>
<li><strong>Previous message:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="2077.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2082.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
