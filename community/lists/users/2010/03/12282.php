<?
$subject_val = "[OMPI users] pipe function call failed...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  9 11:40:25 2010" -->
<!-- isoreceived="20100309164025" -->
<!-- sent="Tue, 9 Mar 2010 17:40:17 +0100" -->
<!-- isosent="20100309164017" -->
<!-- name="Lasse Kliemann" -->
<!-- email="lasse-list-openmpi-2010_at_[hidden]" -->
<!-- subject="[OMPI users] pipe function call failed..." -->
<!-- id="20100309164017.GB4060_at_lasse.mail.plastictre.net" -->
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
<strong>Subject:</strong> [OMPI users] pipe function call failed...<br>
<strong>From:</strong> Lasse Kliemann (<em>lasse-list-openmpi-2010_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-09 11:40:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12281.php">chan_at_[hidden]: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
$ mpirun -n 1 ls
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it encountered an error:
<br>
<p>Error: pipe function call failed when setting up I/O forwarding subsystem
<br>
Node: xxxxx.xxxxxxxxxx.xxxxxxxx.xx
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
<p>I receive this error constantly. I tracked it down so far that it  
<br>
appears now certain that the 'tcgetattr' and 'tcsetattr' calls in 
<br>
'orte/mca/iof/base/iof_base_setup.c' are responsible. 'errno' is 
<br>
set to 22 each, which means 'invalid argument'. We can simply 
<br>
ignore the return values of these calls and continue, as done in 
<br>
the attached patch. Some simple tests suggest that everything 
<br>
else is fine, but I haven't tested thoroughly yet.
<br>
<p>On another system, this problem is absent. The main difference 
<br>
are GCC and Glibc versions. The problematic system uses GCC 4.3.4 
<br>
and Glibc 2.11.1 -- which is the newest Glibc release and maybe 
<br>
untested yet with OpenMPI.
<br>
<p>Let me know which additional information I can provide to further 
<br>
analyze this issue.
<br>
<p>
<br><p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12282/patch">patch</a>
</ul>
<!-- attachment="patch" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12282/02-part">stored</a>
</ul>
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12283.php">Ramon: "Re: [OMPI users] MPI_Comm_accept() busy waiting?"</a>
<li><strong>Previous message:</strong> <a href="12281.php">chan_at_[hidden]: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
<li><strong>Reply:</strong> <a href="12284.php">Ralph Castain: "Re: [OMPI users] pipe function call failed..."</a>
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
