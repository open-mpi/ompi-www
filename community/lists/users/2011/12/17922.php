<?
$subject_val = "[OMPI users] MPI_COMM_split hanging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 18:52:27 2011" -->
<!-- isoreceived="20111209235227" -->
<!-- sent="Fri, 9 Dec 2011 17:52:20 -0600" -->
<!-- isosent="20111209235220" -->
<!-- name="Gary Gorbet" -->
<!-- email="gegorbet_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMM_split hanging" -->
<!-- id="p06240826cb084f1308d2_at_[192.168.1.68]" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_COMM_split hanging<br>
<strong>From:</strong> Gary Gorbet (<em>gegorbet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 18:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17923.php">amjad ali: "[OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Maybe reply:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am attempting to split my application into multiple master+workers
<br>
groups using MPI_COMM_split. My MPI revision is shown as:
<br>
<p>mpirun --tag-output ompi_info -v ompi full --parsable
<br>
[1,0]&lt;stdout&gt;:package:Open MPI root_at_build-x86-64 Distribution
<br>
[1,0]&lt;stdout&gt;:ompi:version:full:1.4.3
<br>
[1,0]&lt;stdout&gt;:ompi:version:svn:r23834
<br>
[1,0]&lt;stdout&gt;:ompi:version:release_date:Oct 05, 2010
<br>
[1,0]&lt;stdout&gt;:orte:version:full:1.4.3
<br>
[1,0]&lt;stdout&gt;:orte:version:svn:r23834
<br>
[1,0]&lt;stdout&gt;:orte:version:release_date:Oct 05, 2010
<br>
[1,0]&lt;stdout&gt;:opal:version:full:1.4.3
<br>
[1,0]&lt;stdout&gt;:opal:version:svn:r23834
<br>
[1,0]&lt;stdout&gt;:opal:version:release_date:Oct 05, 2010
<br>
[1,0]&lt;stdout&gt;:ident:1.4.3
<br>
<p>The basic problem I am having is that none of processor instances ever
<br>
returns from the MPI_COMM_split call. I am pretty new to MPI and it is
<br>
likely I am not doing things quite correctly. I'd appreciate some guidance.
<br>
<p>I am working with an application that has functioned nicely for a while
<br>
now. It only uses a single MPI_COMM_WORLD communicator. It is standard
<br>
stuff:  a master that hands out tasks to many workers, receives output
<br>
and keeps track of workers that are ready to receive another task. The
<br>
tasks are quite compute-intensive. When running a variation of the
<br>
process that uses Monte Carlo iterations, jobs can exceed the 30 hours
<br>
they are limited to. The MC iterations are independent of each other -
<br>
adding random noise to an input - so I would like to run multiple
<br>
iterations simultaneously so that 4 times the cores runs in a fourth of
<br>
the time. This would entail a supervisor interacting with multiple
<br>
master+workers groups.
<br>
<p>I had thought that I would just have to declare a communicator for each
<br>
group so that broadcasts and syncs would work within a single group.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;total_proc_count );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;my_rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cores_per_group = total_proc_count / groups_count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;my_group = my_rank / cores_per_group;     // e.g., 0, 1, ...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;group_rank = my_rank - my_group * cores_per_group;  // rank within a
<br>
group
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( my_rank == 0 )    continue;    // Do not create group for supervisor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm oldcomm = MPI_COMM_WORLD;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm my_communicator;    // Actually declared as a class variable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int sstat = MPI_Comm_split( oldcomm, my_group, group_rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;my_communicator );
<br>
<p>There is never a return from the above _split() call. Do I need to do
<br>
something else to set this up? I would have expected perhaps a non-zero
<br>
status return, but not that I would get no return at all. I would
<br>
appreciate any comments or guidance.
<br>
<p>- Gary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17923.php">amjad ali: "[OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<li><strong>Previous message:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Maybe reply:</strong> <a href="17930.php">Josh Hursey: "Re: [OMPI users] MPI_COMM_split hanging"</a>
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
