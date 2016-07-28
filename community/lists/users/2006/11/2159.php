<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov  8 13:26:07 2006" -->
<!-- isoreceived="20061108182607" -->
<!-- sent="Wed, 8 Nov 2006 10:25:55 -0800 (PST)" -->
<!-- isosent="20061108182555" -->
<!-- name="shane kennedy" -->
<!-- email="kennedy_shane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] are there any gotchas to running over myrinet" -->
<!-- id="296605.90759.qm_at_web30302.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="DF66E4D5-3B35-4F6B-BF82-BD53084A9083_at_lanl.gov" -->
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
<strong>From:</strong> shane kennedy (<em>kennedy_shane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-08 13:25:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2158.php">Eric Thibodeau: "[OMPI users] Running in a heterogeneous environment (Opteron Head + Athlon nodes)"</a>
<li><strong>In reply to:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt; &gt; i've run my mm5 weather modeling app over mpich
</span><br>
<span class="quotelev1">&gt; gig-e
</span><br>
<span class="quotelev2">&gt; &gt; &amp; myrinet, &amp; open-mpi gig-e.  when i tried
</span><br>
<span class="quotelev1">&gt; open-mpi
</span><br>
<span class="quotelev2">&gt; &gt; over myrinet, i was able to compile &amp; run w/o
</span><br>
<span class="quotelev1">&gt; issue,
</span><br>
<span class="quotelev2">&gt; &gt; but i get no net traffic over the myrinet switch. 
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; job cranks up the cpu's but never completes.  i'm
</span><br>
<span class="quotelev2">&gt; &gt; using the myrinet MX driver.  i have the myrinet
</span><br>
<span class="quotelev1">&gt; libs
</span><br>
<span class="quotelev2">&gt; &gt; set in both LD_LIBRARY_PATH &amp; the ld.so.conf file.
</span><br>
<span class="quotelev2">&gt; &gt; any advice/suggestions would be greatly
</span><br>
<span class="quotelev1">&gt; appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; i've listed my compile options below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you build the MX driver?  Unless MX is in one of
</span><br>
<span class="quotelev1">&gt; the compiler  
</span><br>
<span class="quotelev1">&gt; search paths, you'll likely need to add the
</span><br>
<span class="quotelev1">&gt; configure argument --with- 
</span><br>
<span class="quotelev1">&gt; mx=&lt;PATH TO MX&gt; when building Open MPI.  You can
</span><br>
<span class="quotelev1">&gt; determine whether  
</span><br>
<span class="quotelev1">&gt; you have MX support in your current Open MPI build
</span><br>
<span class="quotelev1">&gt; by running the  
</span><br>
<span class="quotelev1">&gt; &quot;ompi_info&quot; command.  If you see a line that
</span><br>
<span class="quotelev1">&gt; includes btl: mx, then  
</span><br>
<span class="quotelev1">&gt; you have MX support and something else is going on. 
</span><br>
<span class="quotelev1">&gt; Otherwise, the  
</span><br>
<span class="quotelev1">&gt; issue is building MX support into your copy of Open
</span><br>
<span class="quotelev1">&gt; MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<p><p>yes, open-mpi was config'd with:
<br>
./configure --prefix=/raid1/mpich F77=ifort FC=ifort
<br>
--with-mx=/opt/mx --with-mx-libdir=/opt/mx/lib
<br>
<p>openmpi_info shows mx support:
<br>
# ompi_info | grep mx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: mx (MCA v1.0, API v1.0, Component v1.1.2)
<br>
<p>i'm running mpi with:
<br>
mpirun --mca btl mx,self --n 32 --nolocal mm5.mpp
<br>
<p><p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Sponsored Link
<br>
<p>Mortgage rates near historic lows: 
<br>
$150,000 loan as low as $579/mo. Intro-*Terms 
<br>
<a href="https://www2.nextag.com/">https://www2.nextag.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2160.php">Greg Lindahl: "Re: [OMPI users] efficient memory to memory transfer"</a>
<li><strong>Previous message:</strong> <a href="2158.php">Eric Thibodeau: "[OMPI users] Running in a heterogeneous environment (Opteron Head + Athlon nodes)"</a>
<li><strong>In reply to:</strong> <a href="2157.php">Brian Barrett: "Re: [OMPI users] are there any gotchas to running over myrinet"</a>
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
