<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 26 14:46:02 2007" -->
<!-- isoreceived="20070526184602" -->
<!-- sent="Sat, 26 May 2007 13:45:58 -0500" -->
<!-- isosent="20070526184558" -->
<!-- name="smairal_at_[hidden]" -->
<!-- email="smairal_at_[hidden]" -->
<!-- subject="[OMPI users] Regarding MPI_THREAD_MULTIPLE" -->
<!-- id="1180205158.465880669c773_at_webmail.ksu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> <a href="mailto:smairal_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Regarding%20MPI_THREAD_MULTIPLE"><em>smairal_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-05-26 14:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3324.php">Nayden D Kambouchev: "[OMPI users] Cannot run batch jobs with SLURM"</a>
<li><strong>Previous message:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I want to use threads with OpenMPI such that the threads would
<br>
be able to call MPI functions. For this purpose, I am using
<br>
MPI_Init_thread with MPI_THREAD_MULTIPLE option. But this function call
<br>
returns MPI_THREAD_SINGLE in the &quot;provided&quot; parameter indicating that
<br>
MPI_THREAD_MULTIPLE is not configured. Somewhere it is mentioned that
<br>
OpenMPI needs to be configured with --enable-mpi-threads inorder to use
<br>
MPI_THREAD_MULTIPLE. If true, is it possible to know whether the
<br>
OpenMPI (1.1.2)which I have already configured, has the option
<br>
&quot;--enable-mpi-threads&quot; already configured or not? Also, how easy or
<br>
difficult is it to configure --enable-mpi-threads option?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please share some information on this.
<br>
<p>-Thanks and Regards,
<br>
Sarang.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3324.php">Nayden D Kambouchev: "[OMPI users] Cannot run batch jobs with SLURM"</a>
<li><strong>Previous message:</strong> <a href="3322.php">Code Master: "Re: [OMPI users] port(s) and protocol used by openmpi for interprocess communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
<li><strong>Reply:</strong> <a href="3325.php">Code Master: "Re: [OMPI users] Regarding MPI_THREAD_MULTIPLE"</a>
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
