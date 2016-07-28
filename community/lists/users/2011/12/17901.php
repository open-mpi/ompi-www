<?
$subject_val = "[OMPI users] Run Time problem: Program hangs when utilizing multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 20:18:04 2011" -->
<!-- isoreceived="20111207011804" -->
<!-- sent="Tue, 6 Dec 2011 20:17:59 -0500" -->
<!-- isosent="20111207011759" -->
<!-- name="Tim Blattner" -->
<!-- email="tblatt1_at_[hidden]" -->
<!-- subject="[OMPI users] Run Time problem: Program hangs when utilizing multiple nodes." -->
<!-- id="CA+FVfTEfHwnKsU2+MDrpe5kxtVUU14z2cCqafAbAfcaPYmc_MQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Run Time problem: Program hangs when utilizing multiple nodes.<br>
<strong>From:</strong> Tim Blattner (<em>tblatt1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 20:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The problem that I have been having is running my application across
<br>
multiple nodes. Here are the details of what I have debugged thus far.
<br>
<p>I am going to follow the numbered list from the getting help page: (
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>)
<br>
1 ) I checked for a solution to this problem throughout the FAQ as well as
<br>
the mailing list, but was unsuccessful in resolving the issue.
<br>
2) Version of openmpi: openmpi v1.4.4
<br>
3) I found the config.log, but it is very large, so I was unable to attach
<br>
it.  If you would like me to I can upload it and provide a link.
<br>
4) ompi_info --all output: see attached file 'ompi_info_all.txt'
<br>
5)'ompi_info -v ompi full --parsable' (ran using: 'mpirun --bynode *--hostfile
<br>
my_hostfile* --tag-output ompi_info -v ompi full --parsable'
<br>
[1,0]&lt;stdout&gt;:package:Open MPI root_at_intel16 Distribution
<br>
[1,0]&lt;stdout&gt;:ompi:version:full:1.4.4 [1,0]&lt;stdout&gt;:ompi:version:svn:r25188
<br>
[1,0]&lt;stdout&gt;:ompi:version:release_date:Sep 27, 2011
<br>
[1,0]&lt;stdout&gt;:orte:version:full:1.4.4 [1,0]&lt;stdout&gt;:orte:version:svn:r25188
<br>
[1,0]&lt;stdout&gt;:orte:version:release_date:Sep 27, 2011
<br>
[1,0]&lt;stdout&gt;:opal:version:full:1.4.4 [1,0]&lt;stdout&gt;:opal:version:svn:r25188
<br>
[1,0]&lt;stdout&gt;:opal:version:release_date:Sep 27, 2011
<br>
[1,0]&lt;stdout&gt;:ident:1.4.4 [1,1]&lt;stdout&gt;:package:Open MPI
<br>
root_at_intel16Distribution [1,1]&lt;stdout&gt;:ompi:version:full:1.4.4
<br>
[1,1]&lt;stdout&gt;:ompi:version:svn:r25188
<br>
[1,1]&lt;stdout&gt;:ompi:version:release_date:Sep 27, 2011
<br>
[1,1]&lt;stdout&gt;:orte:version:full:1.4.4 [1,1]&lt;stdout&gt;:orte:version:svn:r25188
<br>
[1,1]&lt;stdout&gt;:orte:version:release_date:Sep 27, 2011
<br>
[1,1]&lt;stdout&gt;:opal:version:full:1.4.4 [1,1]&lt;stdout&gt;:opal:version:svn:r25188
<br>
[1,1]&lt;stdout&gt;:opal:version:release_date:Sep 27, 2011
<br>
[1,1]&lt;stdout&gt;:ident:1.4.4
<br>
<p><p>6) Detailed description:
<br>
I have a fortran90 application that solves a system of linear equations
<br>
using LU Decomposition. The application has three components. matrix_fill ,
<br>
matrix_decomp, and matrix_solve.  The application has a make option for
<br>
compiling the application using MPI.
<br>
<p>I have successfully compiled the application using openmpi v1.4.4, and can
<br>
run the application.
<br>
I utilize the '--hostfile' parameter when executing mpirun. For testing
<br>
purposes I modified this file to see if I could narrow down the problem.
<br>
<p>I am able to run the program locally (on the same node that mpirun is being
<br>
executed on) when utilizing 1 or greater than 1 slots (i was able to run
<br>
with 12 slots on a single node). I am also able to mpirun on 1 or 2 slots
<br>
on a single remote node as well.
<br>
<p>The problem occurs when I try to have two nodes work together, such that I
<br>
specify two separate nodes in the hostfile and use -np 2 when executing
<br>
mpirun).
<br>
<p>Here is an example of the my_hostfile (when the problem occurs)
<br>
intel15
<br>
intel16
<br>
<p>and this is an example of the command used:
<br>
[intel15] &gt; mpirun --hostfile my_hostfile -np 2 matrix_fill
<br>
<p><p>The problem occurs at a second call to MPI_BARRIER. The first MPI_BARRIER
<br>
call is successful, but on the second one it hangs.
<br>
Here is a basic outline of the code for up to the point of where the
<br>
program hangs:
<br>
[code]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(MPI_COMM_WORLD, my_rank, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(MPI_COMM_WORLD, group_size, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! creates buffers for each image
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!synchronize buffers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WRITE(6, *) 'Initializing I/O for image #', my_image
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL flushio
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! At this barrier the program hangs and must be killed using CTRL+C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_BARRIER(MPI_COMM_WORLD, ierr)
<br>
[/code]
<br>
<p><p>The hang only occurs when trying to use -np 2 (or larger) and on multiple
<br>
nodes that are networked together. At first I thought it was a firewall
<br>
issue, so i ran 'service iptables stop' as root, but sadly this did not fix
<br>
the problem. I am able to ssh between these nodes without a password, and
<br>
the nodes are apart of a cluster of approximately 20 nodes at University of
<br>
Maryland *B*altimore County.
<br>
<p>7) Network info: see attached network_info.txt file:
<br>
<p><p><p>I have been trying to determine the root of this error for the past week,
<br>
but with no success.
<br>
<p>Any help would be greatly appreciated.
<br>
<p>Thank you,
<br>
Tim
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17901/ompi_info_all.txt">ompi_info_all.txt</a>
</ul>
<!-- attachment="ompi_info_all.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17901/network_info.txt">network_info.txt</a>
</ul>
<!-- attachment="network_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17902.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17900.php">Gustavo Correa: "Re: [OMPI users] orte_ess_base_select failed"</a>
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
