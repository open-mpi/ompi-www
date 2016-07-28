<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 21 20:18:09 2006" -->
<!-- isoreceived="20060822001809" -->
<!-- sent="Mon, 21 Aug 2006 18:17:34 -0600" -->
<!-- isosent="20060822001734" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] allreduce produces &amp;quot;error(8) registering gm memory&amp;quot;" -->
<!-- id="CE1BC02C-752D-48B7-8015-EDC78F3A2685_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44EA4B78.1090300_at_lbl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-21 20:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1763.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="1761.php">Dave Grote: "[OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>In reply to:</strong> <a href="1761.php">Dave Grote: "[OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 21, 2006, at 6:10 PM, Dave Grote wrote:
<br>
<p><span class="quotelev1">&gt; I have attached a small program that when run on my machine  
</span><br>
<span class="quotelev1">&gt; produces the error message below and locks up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node0000:06319] [mpool_gm_module.c:100] error(8) registering gm  
</span><br>
<span class="quotelev1">&gt; memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the error when I run with 32 processors, but not with 4 (even  
</span><br>
<span class="quotelev1">&gt; if I increase the loop count to 20000). This is on a cluster of  
</span><br>
<span class="quotelev1">&gt; dual-dual core opterons with myrinet switches (i.e. using the gm  
</span><br>
<span class="quotelev1">&gt; routines). Unfortunately, I don't have the configure options that  
</span><br>
<span class="quotelev1">&gt; were used to build openmpi, but I don't think there was anything  
</span><br>
<span class="quotelev1">&gt; unusual. I've also attached the open_info output. Here is the  
</span><br>
<span class="quotelev1">&gt; compile line for the code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g95 -o allreducetest allreducetest.F -I/usr/local/ompi/1.1-gcc/ 
</span><br>
<span class="quotelev1">&gt; include -L/usr/local/ompi/1.1-gcc/lib -lmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also note that I did have to make changes to the fortran include  
</span><br>
<span class="quotelev1">&gt; files in openmpi to force all of the integers to be of size 4 (i.e.  
</span><br>
<span class="quotelev1">&gt; declaring them integer(4)) since the default integer size used by  
</span><br>
<span class="quotelev1">&gt; g95 is 8 bytes but the openmpi fortran interface was compiled with  
</span><br>
<span class="quotelev1">&gt; f77 which uses 4 byte integers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions on what to look for?
</span><br>
<p>I believe you are running into a known issue with Open MPI 1.1.  Can  
<br>
you try the 1.1.1 pre-release available on our web page:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
<p>As for the Fortran fixes, the solution is to compile Open MPI with  
<br>
the same Fortran compiler you use for compiling your application.   
<br>
While g77 and g95 are somewhat close in compatibility, this usually  
<br>
isn't the case, so we don't try to be compatible across multiple  
<br>
Fortran compilers.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1763.php">Jayanta Roy: "[OMPI users] dual Gigabit ethernet support"</a>
<li><strong>Previous message:</strong> <a href="1761.php">Dave Grote: "[OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
<li><strong>In reply to:</strong> <a href="1761.php">Dave Grote: "[OMPI users] allreduce produces &quot;error(8) registering gm memory&quot;"</a>
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
