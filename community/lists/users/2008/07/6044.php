<?
$subject_val = "[OMPI users] OMPI and mpipov";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 11 03:18:20 2008" -->
<!-- isoreceived="20080711071820" -->
<!-- sent="Fri, 11 Jul 2008 09:18:13 +0200" -->
<!-- isosent="20080711071813" -->
<!-- name="Matthias Hovestadt" -->
<!-- email="maho_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI and mpipov" -->
<!-- id="48770935.7000501_at_cs.tu-berlin.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] OMPI and mpipov<br>
<strong>From:</strong> Matthias Hovestadt (<em>maho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-11 03:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>I'm working in a project fucusing on fault tolerance in
<br>
Grid systems. We have been using LAM-MPI and BLCR so far,
<br>
now I want to evaluate OpenMPI.
<br>
<p>I read in the mailing lists that the current stable version
<br>
of OpenMPI lacks many features on checkpointing, making it
<br>
recommended to use the development version from SVN.
<br>
<p>All my small test applications are working without any
<br>
problems. Unfortunately executing the mpi-enabled version of
<br>
Povray 3.1 failed, which we have used as standard demo
<br>
application so far:
<br>
<p><p>[grid-demo:09575] *** An error occurred in MPI_Recv
<br>
[grid-demo:09575] *** on communicator MPI_COMM_WORLD
<br>
[grid-demo:09575] *** MPI_ERR_TRUNCATE: message truncated
<br>
[grid-demo:09575] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 9575 on
<br>
node grid-demo exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p><p>I found the following posting about this error:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2006/11/1191.php">http://www.open-mpi.org/community/lists/devel/2006/11/1191.php</a>
<br>
<p>We did not have any problems with mpi-povray so far, but
<br>
maybe the described problem applies to mpi-povray and the
<br>
problem only did not show up before because other MPI
<br>
flavors are more flexible.
<br>
<p><p>Therefore my question to this list: did anybody of you
<br>
succeed in executing mpi-povray?
<br>
<p><p>Best,
<br>
Matthias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6045.php">Willem Vermin: "Re: [OMPI users] Strange problem with 1.2.6"</a>
<li><strong>Previous message:</strong> <a href="6043.php">Joe Landman: "[OMPI users] Strange problem with 1.2.6"</a>
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
