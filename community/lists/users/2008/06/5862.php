<?
$subject_val = "[OMPI users] locked  memory problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 18:01:48 2008" -->
<!-- isoreceived="20080611220148" -->
<!-- sent="Wed, 11 Jun 2008 17:59:42 -0400" -->
<!-- isosent="20080611215942" -->
<!-- name="twurgl_at_[hidden]" -->
<!-- email="twurgl_at_[hidden]" -->
<!-- subject="[OMPI users] locked  memory problem" -->
<!-- id="OF4EC1F6C2.3F7C3F4F-ON85257465.00747B11-85257465.0078D1AE_at_goodyear.com" -->
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
<strong>Subject:</strong> [OMPI users] locked  memory problem<br>
<strong>From:</strong> <a href="mailto:twurgl_at_[hidden]?Subject=Re:%20[OMPI%20users]%20locked%20%20memory%20problem"><em>twurgl_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-06-11 17:59:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
<li><strong>Reply:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I get the locked memory error as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** An error occurred in MPI_Init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** before MPI was initialized
<br>
&nbsp;&nbsp;&nbsp;&nbsp;*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[node10:10395] [0,0,0]-[0,1,6] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;The OpenIB BTL failed to initialize while trying to allocate some
<br>
&nbsp;&nbsp;&nbsp;&nbsp;locked memory.  This typically can indicate that the memlock limits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;are set too low.  For most HPC installations, the memlock limits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;should be set to &quot;unlimited&quot;.  The failure occured here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Host:          node10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI source:   btl_openib.c:830
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Function:      ibv_create_cq()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Device:        mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Memlock limit: 32768
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;You may need to consult with your system administrator to get this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;problem fixed.  This FAQ entry on the Open MPI web site may also be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;helpful:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>I've read the above FAQ and still have problems.  Here is the scenario.  All cluster nodes are (supposed) to be the same.
<br>
I can run just fine on all except a few nodes. For testing, I have closed all the nodes, and when I submit the job, LSF puts the job in PENDING state.
<br>
<p>Now if I use
<br>
<p>brun -m &quot;node1 node10&quot; jobid
<br>
<p>to release the job, it runs fine.
<br>
<p>But if I use
<br>
<p>brun -m &quot;node10 node1&quot; jobid
<br>
<p>it fails with the above OPENMPI error.
<br>
<p>I've checked the ulimit -a on all nodes, it is set to unlimited.  I've added a .bashrc file and set the ulimit in there, as well as in my .cshrc file
<br>
(I start on a csh shell and the jobs run in sh).
<br>
<p>I've compared environment settings and everything else I can think of.  3 nodes have the (bad) behaviour if they happen to be the lead node and run
<br>
fine if
<br>
they are not, the rest of the nodes run fine in either position.
<br>
<p>Anyone have any ideas about this?
<br>
<p>thanks!
<br>
tom
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5863.php">Gabriele Fatigati: "[OMPI users] OpenMPI bug?"</a>
<li><strong>Previous message:</strong> <a href="5861.php">Manuel Freiberger: "[OMPI users] Problem with getting started"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
<li><strong>Reply:</strong> <a href="5891.php">Jeff Squyres: "Re: [OMPI users] locked  memory problem"</a>
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
