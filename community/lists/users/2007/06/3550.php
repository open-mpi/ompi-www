<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 22:34:07 2007" -->
<!-- isoreceived="20070627023407" -->
<!-- sent="Tue, 26 Jun 2007 20:33:47 -0600" -->
<!-- isosent="20070627023347" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] making all library components static (questions about --enable-mcs-static)" -->
<!-- id="7538BC44-1B94-4CFE-8650-2E602BDDBE8B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1626092b0706072004w6f06d6dj5651fae859015ebf_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-26 22:33:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3551.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<li><strong>In reply to:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 7, 2007, at 9:04 PM, Code Master wrote:
<br>
<p><span class="quotelev1">&gt; nction `_int_malloc':
</span><br>
<span class="quotelev1">&gt; : multiple definition of `_int_malloc'
</span><br>
<span class="quotelev1">&gt; /usr/lib/libopen-pal.a(lt1-malloc.o)(.text+0x18a0):openmpi-1.2.2/ 
</span><br>
<span class="quotelev1">&gt; opal/mca/memory/ptmalloc2/malloc.c:3954: first defined here
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Warning: size of symbol `_int_malloc' changed from  
</span><br>
<span class="quotelev1">&gt; 1266 in /usr/lib/libopen- pal.a(lt1-malloc.o) to 1333 in /home/ 
</span><br>
<span class="quotelev1">&gt; 490_research/490/src/mpi.optimized_profiling//lib/libopen-pal.a(lt1- 
</span><br>
<span class="quotelev1">&gt; malloc.o)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so what could go wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it because openmpi has internal implementatios of system- 
</span><br>
<span class="quotelev1">&gt; provided functions (such as malloc) that are also used in my  
</span><br>
<span class="quotelev1">&gt; program, but the one the client program use is provided by the  
</span><br>
<span class="quotelev1">&gt; system whereas the one in the library has a different internal  
</span><br>
<span class="quotelev1">&gt; implementation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In such case, how could I do the static linking in my client  
</span><br>
<span class="quotelev1">&gt; program?  I really need static linking as far as possible to do the  
</span><br>
<span class="quotelev1">&gt; profiling.
</span><br>
<p>Yup, you guessed right.  The easiest solution is to compile Open MPI  
<br>
without the memory manager code.  This disables some optimizations  
<br>
for InfiniBand (OpenFabrics and MVAPI) and Myrinet/GM, but for other  
<br>
networks has no impact.  YOu can disable the memory manager with the  
<br>
--without-memory-manager option to configure.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian W. Barrett
   Networking Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3551.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3549.php">Yuan Wan: "[OMPI users] How to use multi TCP network"</a>
<li><strong>In reply to:</strong> <a href="3407.php">Code Master: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
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
