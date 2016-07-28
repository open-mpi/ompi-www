<?
$subject_val = "[OMPI users] Spawn problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 01:41:41 2008" -->
<!-- isoreceived="20080331054141" -->
<!-- sent="Mon, 31 Mar 2008 02:41:30 -0300" -->
<!-- isosent="20080331054130" -->
<!-- name="Joao Vicente Lima" -->
<!-- email="joao.lima.mail_at_[hidden]" -->
<!-- subject="[OMPI users] Spawn problem" -->
<!-- id="2899306a0803302241i76f32f6bv8420380e2324cd07_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Spawn problem<br>
<strong>From:</strong> Joao Vicente Lima (<em>joao.lima.mail_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-31 01:41:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5280.php">Matt Hughes: "[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
sorry bring this again ... but i hope use spawn in ompi someday :-D
<br>
<p>The execution of spawn in this way works fine:
<br>
MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 2, MPI_INFO_NULL, 0,
<br>
MPI_COMM_SELF, &amp;intercomm, MPI_ERRCODES_IGNORE);
<br>
<p>but if this code go to a for I get a problem :
<br>
for (i= 0; i &lt; 2; i++)
<br>
{
<br>
&nbsp;&nbsp;MPI_Comm_spawn (&quot;./spawn1&quot;, MPI_ARGV_NULL, 1,
<br>
&nbsp;&nbsp;MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm[i], MPI_ERRCODES_IGNORE);
<br>
}
<br>
<p>and the error is:
<br>
spawning ...
<br>
child!
<br>
child!
<br>
[localhost:03892] *** Process received signal ***
<br>
[localhost:03892] Signal: Segmentation fault (11)
<br>
[localhost:03892] Signal code: Address not mapped (1)
<br>
[localhost:03892] Failing at address: 0xc8
<br>
[localhost:03892] [ 0] /lib/libpthread.so.0 [0x2ac71ca8bed0]
<br>
[localhost:03892] [ 1]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(ompi_dpm_base_dyn_finalize+0xa3)
<br>
[0x2ac71ba7448c]
<br>
[localhost:03892] [ 2] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71b9decdf]
<br>
[localhost:03892] [ 3] /usr/local/mpi/ompi-svn/lib/libmpi.so.0 [0x2ac71ba04765]
<br>
[localhost:03892] [ 4]
<br>
/usr/local/mpi/ompi-svn/lib/libmpi.so.0(PMPI_Finalize+0x71)
<br>
[0x2ac71ba365c9]
<br>
[localhost:03892] [ 5] ./spawn1(main+0xaa) [0x400ac2]
<br>
[localhost:03892] [ 6] /lib/libc.so.6(__libc_start_main+0xf4) [0x2ac71ccb7b74]
<br>
[localhost:03892] [ 7] ./spawn1 [0x400989]
<br>
[localhost:03892] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3892 on node localhost
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>the attachments contain the ompi_info, config.log and program.
<br>
<p>thanks for some check,
<br>
Joao.
<br>
<p>


<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5281/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5281/ompi_info.txt.gz">ompi_info.txt.gz</a>
</ul>
<!-- attachment="ompi_info.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5281/spawn1.c.gz">spawn1.c.gz</a>
</ul>
<!-- attachment="spawn1.c.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Previous message:</strong> <a href="5280.php">Matt Hughes: "[OMPI users] ConnectX hang with 1.2.5, crash with 1.3, during gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5282.php">Terry Frankcombe: "Re: [OMPI users] Spawn problem"</a>
<li><strong>Reply:</strong> <a href="5283.php">Matt Hughes: "Re: [OMPI users] Spawn problem"</a>
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
