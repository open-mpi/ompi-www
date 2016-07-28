<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 24 08:47:50 2007" -->
<!-- isoreceived="20070324124750" -->
<!-- sent="Sat, 24 Mar 2007 08:47:22 -0400" -->
<!-- isosent="20070324124722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems compiling openmpi 1.2 under AIX 5.2" -->
<!-- id="8748155B-9DA6-40BA-AB06-690A68F88B62_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6CAE2265-FC2B-4216-AF5E-6899B26CEF28_at_ist.utl.pt" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-24 08:47:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>In reply to:</strong> <a href="2898.php">Ricardo Fonseca: "[OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2007, at 10:53 AM, Ricardo Fonseca wrote:
<br>
<p><span class="quotelev1">&gt; I'm having problems compiling openmpi 1.2 under AIX 5.2. Here are  
</span><br>
<span class="quotelev1">&gt; the configure parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --disable-shared --enable-static \
</span><br>
<span class="quotelev1">&gt;                    CC=xlc CXX=xlc++ F77=xlf FC=xlf95
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To get it to work I have to do 2 changes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff -r openmpi-1.2/ompi/mpi/cxx/mpicxx.cc openmpi-1.2-aix/ompi/mpi/ 
</span><br>
<span class="quotelev1">&gt; cxx/mpicxx.cc
</span><br>
<span class="quotelev1">&gt; 34a35,38
</span><br>
<span class="quotelev2">&gt; &gt; #undef SEEK_SET
</span><br>
<span class="quotelev2">&gt; &gt; #undef SEEK_CUR
</span><br>
<span class="quotelev2">&gt; &gt; #undef SEEK_END
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p>Hrm.  This one is problematic in the general case; there's very weird  
<br>
mojo involved with the MPI C++ bindings to get MPI::SEEK_SET and  
<br>
friends to work properly.
<br>
<p>Our support for MPI::SEEK_* isn't 100% correct yet (you can't use  
<br>
them in switch/case statements -- it's a long, convoluted story), so  
<br>
I don't think that I want to apply this patch to the general code base.
<br>
<p><span class="quotelev1">&gt; diff -r openmpi-1.2/orte/mca/pls/poe/pls_poe_module.c openmpi-1.2- 
</span><br>
<span class="quotelev1">&gt; aix/orte/mca/pls/poe/pls_poe_module.c
</span><br>
<span class="quotelev1">&gt; 636a637,641
</span><br>
<span class="quotelev2">&gt; &gt; static int pls_poe_cancel_operation(void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     return ORTE_ERR_NOT_IMPLEMENTED;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This last one means that when you run OpenMPI jobs through POE you  
</span><br>
<span class="quotelev1">&gt; get a:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [r1blade003:381130] [0,0,0] ORTE_ERROR_LOG: Not implemented in file  
</span><br>
<span class="quotelev1">&gt; errmgr_hnp.c at line 90
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; mpirun was unable to cleanly terminate the daemons for this job.  
</span><br>
<span class="quotelev1">&gt; Returned value Not implemented instead of ORTE_SUCCESS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; at the job end.
</span><br>
<p>Gotcha.
<br>
<p>How about this compromise: since AIX is not an officially supported  
<br>
platform, I've added a category in the FAQ about AIX and put a link  
<br>
to this mail so that AIX users can manually apply these changes to  
<br>
get a working Open MPI.
<br>
<p>(Our web server seems to be having some problems right now; I'll get  
<br>
the category added to the live site shortly)
<br>
<p>Thanks for the patches!
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2914.php">David Burns: "Re: [OMPI users] Failure to launch on a remote node.  SSH problem?"</a>
<li><strong>Previous message:</strong> <a href="2912.php">Jeff Squyres: "Re: [OMPI users] install error"</a>
<li><strong>In reply to:</strong> <a href="2898.php">Ricardo Fonseca: "[OMPI users] Problems compiling openmpi 1.2 under AIX 5.2"</a>
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
