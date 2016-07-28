<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 31 17:47:48 2007" -->
<!-- isoreceived="20070731214748" -->
<!-- sent="Tue, 31 Jul 2007 17:47:31 -0400" -->
<!-- isosent="20070731214731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] pml failures?" -->
<!-- id="75B571CF-CED2-40F1-9056-A81B9BD9674B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-31 17:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2059.php">Jeff Squyres: "[OMPI devel] openib modular wireup"</a>
<li><strong>Previous message:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm getting a pile of test failures when running with the openib and  
<br>
tcp BTLs on the trunk.  Gleb is getting some failures, too, but his  
<br>
seem to be different than mine.
<br>
<p>Here's what I'm seeing from manual MTT runs on my SVN/development  
<br>
install -- did you know that MTT could do that? :-)
<br>
<p>+-------------+-------------------+------+------+----------+------+
<br>
| Phase       | Section           | Pass | Fail | Time out | Skip |
<br>
+-------------+-------------------+------+------+----------+------+
<br>
| Test Run    | intel             | 442  | 0    | 26       | 0    |
<br>
| Test Run    | ibm               | 173  | 3    | 1        | 3    |
<br>
+-------------+-------------------+------+------+----------+------+
<br>
<p>The tests that are failing are:
<br>
<p>*** WARNING: Test: MPI_Recv_pack_c, np=16, variant=1: TIMED OUT (failed)
<br>
*** WARNING: Test: MPI_Ssend_ator_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Irecv_pack_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Isend_ator_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Irsend_rtoa_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Ssend_rtoa_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Send_rtoa_c, np=16, variant=1: TIMED OUT (failed)
<br>
*** WARNING: Test: MPI_Send_ator_c, np=16, variant=1: TIMED OUT (failed)
<br>
*** WARNING: Test: MPI_Rsend_rtoa_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Reduce_loc_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Isend_ator2_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Issend_rtoa_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Isend_rtoa_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Send_ator2_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: MPI_Issend_ator_c, np=16, variant=1: TIMED OUT  
<br>
(failed)
<br>
*** WARNING: Test: comm_join, np=16, variant=1: TIMED OUT (failed)
<br>
*** WARNING: Test: getcount, np=16, variant=1: FAILED
<br>
*** WARNING: Test: spawn, np=3, variant=1: FAILED
<br>
*** WARNING: Test: spawn_multiple, np=3, variant=1: FAILED
<br>
<p>I'm not too worried about the comm spawn/join tests because I think  
<br>
they're heavily oversubscribing the nodes and therefore timing out.   
<br>
These were all from a default trunk build running with &quot;mpirun --mca  
<br>
btl openib,self&quot;.
<br>
<p>For all of these tests, I'm running on 4 nodes, 4 cores each, but  
<br>
they have varying numbers of network interfaces:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nodes 1,2          nodes 3,4
<br>
openib    3 active ports     2 active ports
<br>
tcp       4 tcp interfaces   3 tcp interfaces
<br>
<p>Is anyone else seeing these kinds of failures?
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
<li><strong>Next message:</strong> <a href="2059.php">Jeff Squyres: "[OMPI devel] openib modular wireup"</a>
<li><strong>Previous message:</strong> <a href="2057.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
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
