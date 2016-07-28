<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 20 11:33:38 2007" -->
<!-- isoreceived="20070420153338" -->
<!-- sent="Fri, 20 Apr 2007 09:32:41 -0600" -->
<!-- isosent="20070420153241" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fancy ORTE/MPIRUN bugs" -->
<!-- id="51D04127-8045-4A86-8040-177C0A4F1D14_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46277F01.8010805_at_cs.utk.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-20 11:32:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>In reply to:</strong> <a href="1447.php">Aurelien Bouteiller: "[OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2007, at 8:38 AM, Aurelien Bouteiller wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am experiencing several fancy bugs with ORTE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All bugs occur on Intel 32 bits architecture under Mac OS X using gcc
</span><br>
<span class="quotelev1">&gt; 4.2. The tested version is todays trunk (it also have occured for at
</span><br>
<span class="quotelev1">&gt; least three weeks)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First occurs when compiling in &quot;optimized&quot;  mode (aka configure
</span><br>
<span class="quotelev1">&gt; --disable-debug --with-platform=optimized) and does not occur in debug
</span><br>
<span class="quotelev1">&gt; mode.
</span><br>
<p>Fixed as of r14440.  Was caused by a faulty compiler hint that  
<br>
allowed the compiler to optimize out some much needed checks on the  
<br>
input.
<br>
<p><span class="quotelev1">&gt; The other one occurs when running MPI program without mpirun (I know
</span><br>
<span class="quotelev1">&gt; this is pretty useless but still ;) ). This bug does not require
</span><br>
<span class="quotelev1">&gt; specific compilation options to occur. Running mpirun -np 1  
</span><br>
<span class="quotelev1">&gt; mympiprogram
</span><br>
<span class="quotelev1">&gt; is fine, but running mympiprogram fails with segfault in MPI_Finalize:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ~/ompi$ mpirun -np 1 mpiself
</span><br>
<span class="quotelev1">&gt; ~/ompi$ gdb mpiself
</span><br>
<span class="quotelev1">&gt; (gdb) r
</span><br>
<span class="quotelev1">&gt; Program received signal EXC_BAD_ACCESS, Could not access memory.
</span><br>
<span class="quotelev1">&gt; Reason: KERN_INVALID_ADDRESS at address: 0x77767578
</span><br>
<span class="quotelev1">&gt; 0x90002e46 in szone_malloc ()
</span><br>
<p>As of r14440, I'm unable to replicate, but it could have been one of  
<br>
those getting lucky issues.  Can you see if the problem is still  
<br>
occurring?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1455.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r14444"</a>
<li><strong>Previous message:</strong> <a href="1453.php">Jeff Squyres: "Re: [OMPI devel] Need help for semaphore in BML"</a>
<li><strong>In reply to:</strong> <a href="1447.php">Aurelien Bouteiller: "[OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1457.php">bouteill: "Re: [OMPI devel] Fancy ORTE/MPIRUN bugs"</a>
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
