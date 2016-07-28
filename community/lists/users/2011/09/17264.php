<?
$subject_val = "[OMPI users] Problem running under SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 17:18:39 2011" -->
<!-- isoreceived="20110913211839" -->
<!-- sent="Tue, 13 Sep 2011 15:18:07 -0600" -->
<!-- isosent="20110913211807" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running under SGE" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB275E483599_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem running under SGE<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 17:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17266.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm able to run this command below from an interactive shell window:
<br>
<p>&lt;path&gt;/bin/mpirun --machinefile mpihosts.dat -np 16 -mca plm_rsh_agent /usr/bin/rsh -x MPI_ENVIRONMENT=1 ./test_setup
<br>
<p>but it does not work if I put it into a shell script and 'qsub' that script to SGE.  I get the message shown at the bottom of this post.
<br>
<p>I've tried everything I can think of.  I would welcome any hints on how to proceed.
<br>
<p>For what it's worth, this OpenMPI is 1.4.3 and I built it on another system.  I am setting and exporting OPAL_PREFIX and as I said, all works fine interactively just not in batch.  It was built with -disable-shared and I don't see any shared libs under openmpi/lib, and I've done 'ldd' from within the script, on both the application executable and on the orterun command; no unresolved shared libraries.  So I don't think the error message hinting at LD_LIBRARY_PATH issues is pointing me in the right direction.
<br>
<p>Thanks for any guidance,
<br>
<p>Ed
<br>
<p><p>error: executing task of job 139362 failed: execution daemon on host &quot;f8312&quot; didn't accept task
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 2818) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17264/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Previous message:</strong> <a href="17263.php">Gus Correa: "Re: [OMPI users] Problem compiling openmpi-1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17265.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
<li><strong>Reply:</strong> <a href="17266.php">Reuti: "Re: [OMPI users] Problem running under SGE"</a>
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
