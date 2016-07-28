<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 05:07:46 2007" -->
<!-- isoreceived="20070801090746" -->
<!-- sent="Wed, 1 Aug 2007 11:08:01 +0200" -->
<!-- isosent="20070801090801" -->
<!-- name="Sven Stork" -->
<!-- email="stork_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pml failures?" -->
<!-- id="200708011108.02229.stork_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="75B571CF-CED2-40F1-9056-A81B9BD9674B_at_cisco.com" -->
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
<strong>From:</strong> Sven Stork (<em>stork_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 05:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2062.php">Jeff Squyres: "[OMPI devel] Tracking MPI_ALLOC_MEM leaks"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2058.php">Jeff Squyres: "[OMPI devel] pml failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>since yesterday I noticed that Netpipe and sometimes IMB are hanging. As far 
<br>
as I saw both processes stuck in a receive. The wired thing is that if I run 
<br>
it in a debugger everything works fine.
<br>
<p>Cheers,
<br>
&nbsp;&nbsp;Sven 
<br>
<p>On Tuesday 31 July 2007 23:47, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I'm getting a pile of test failures when running with the openib and  
</span><br>
<span class="quotelev1">&gt; tcp BTLs on the trunk.  Gleb is getting some failures, too, but his  
</span><br>
<span class="quotelev1">&gt; seem to be different than mine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's what I'm seeing from manual MTT runs on my SVN/development  
</span><br>
<span class="quotelev1">&gt; install -- did you know that MTT could do that? :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +-------------+-------------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | Phase       | Section           | Pass | Fail | Time out | Skip |
</span><br>
<span class="quotelev1">&gt; +-------------+-------------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; | Test Run    | intel             | 442  | 0    | 26       | 0    |
</span><br>
<span class="quotelev1">&gt; | Test Run    | ibm               | 173  | 3    | 1        | 3    |
</span><br>
<span class="quotelev1">&gt; +-------------+-------------------+------+------+----------+------+
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The tests that are failing are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Recv_pack_c, np=16, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Ssend_ator_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Irecv_pack_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Isend_ator_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Irsend_rtoa_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Ssend_rtoa_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Send_rtoa_c, np=16, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Send_ator_c, np=16, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Rsend_rtoa_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Reduce_loc_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Isend_ator2_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Issend_rtoa_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Isend_rtoa_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Send_ator2_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: MPI_Issend_ator_c, np=16, variant=1: TIMED OUT  
</span><br>
<span class="quotelev1">&gt; (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: comm_join, np=16, variant=1: TIMED OUT (failed)
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: getcount, np=16, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: spawn, np=3, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: spawn_multiple, np=3, variant=1: FAILED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not too worried about the comm spawn/join tests because I think  
</span><br>
<span class="quotelev1">&gt; they're heavily oversubscribing the nodes and therefore timing out.   
</span><br>
<span class="quotelev1">&gt; These were all from a default trunk build running with &quot;mpirun --mca  
</span><br>
<span class="quotelev1">&gt; btl openib,self&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For all of these tests, I'm running on 4 nodes, 4 cores each, but  
</span><br>
<span class="quotelev1">&gt; they have varying numbers of network interfaces:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            nodes 1,2          nodes 3,4
</span><br>
<span class="quotelev1">&gt; openib    3 active ports     2 active ports
</span><br>
<span class="quotelev1">&gt; tcp       4 tcp interfaces   3 tcp interfaces
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is anyone else seeing these kinds of failures?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2062.php">Jeff Squyres: "[OMPI devel] Tracking MPI_ALLOC_MEM leaks"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/07/2058.php">Jeff Squyres: "[OMPI devel] pml failures?"</a>
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
