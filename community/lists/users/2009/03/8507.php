<?
$subject_val = "[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 17:15:13 2009" -->
<!-- isoreceived="20090318211513" -->
<!-- sent="Wed, 18 Mar 2009 17:17:20 -0400" -->
<!-- isosent="20090318211720" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="[OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1" -->
<!-- id="49C164E0.7050409_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EA8C8AD-098E-469B-BFAF-49E83836C66B_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-18 17:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>In reply to:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>anyone ever seen an error like this? Seems like I have some setting 
<br>
wrong in opemmpi.  I thought I had it setup like the other machines but 
<br>
seems as though I have missed something. I only get the error when 
<br>
adding machine &quot;fs1&quot; to the hostfile list.  The other 40+ machines seem 
<br>
fine.
<br>
<p>[fs1.calvin.edu:01750] [[2469,1],6] selected pml cm, but peer 
<br>
[[2469,1],0] on compute-0-0 selected pml ob1
<br>
<p>When I use ompi_info the output looks like my other machines:
<br>
<p>[root_at_fs1 openmpi-1.3]# ompi_info | grep btl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: ofud (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: openib (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: self (MCA v2.0, API v2.0, Component v1.3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: sm (MCA v2.0, API v2.0, Component v1.3)
<br>
<p>The whole error is below, any help would be greatly appreciated.
<br>
<p>Gary
<br>
<p>[admin_at_dahl 00.greetings]$ /usr/local/bin/mpirun --mca btl ^tcp 
<br>
--hostfile machines -np 7 greetings
<br>
[fs1.calvin.edu:01959] [[2212,1],6] selected pml cm, but peer 
<br>
[[2212,1],0] on compute-0-0 selected pml ob1
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[fs1.calvin.edu:1959] Abort before MPI_INIT completed successfully; not 
<br>
able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[2212,1],3]) is on host: dahl.calvin.edu
<br>
&nbsp;&nbsp;Process 2 ([[2212,1],0]) is on host: compute-0-0
<br>
&nbsp;&nbsp;BTLs attempted: openib self sm
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[dahl.calvin.edu:16884] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[compute-0-0.local:1591] Abort before MPI_INIT completed successfully; 
<br>
not able to guarantee that all other processes were killed!
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
[fs2.calvin.edu:8826] Abort before MPI_INIT completed successfully; not 
<br>
able to guarantee that all other processes were killed!
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 3 with PID 16884 on
<br>
node dahl.calvin.edu exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[dahl.calvin.edu:16879] 3 more processes have sent help message 
<br>
help-mpi-runtime / mpi_init:startup:internal-failure
<br>
[dahl.calvin.edu:16879] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 
<br>
0 to see all help / error messages
<br>
[dahl.calvin.edu:16879] 2 more processes have sent help message 
<br>
help-mca-bml-r2.txt / unreachable proc
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Previous message:</strong> <a href="8506.php">Jeff Squyres: "Re: [OMPI users] [Fwd: Re: open mpi on non standard ssh port]"</a>
<li><strong>In reply to:</strong> <a href="8505.php">Jeff Squyres: "Re: [OMPI users] open mpi on non standard ssh port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<li><strong>Reply:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
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
