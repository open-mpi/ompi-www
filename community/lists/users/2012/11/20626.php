<?
$subject_val = "[OMPI users] patch: enabling shmem-sysv on cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 13:26:28 2012" -->
<!-- isoreceived="20121102172628" -->
<!-- sent="Fri, 02 Nov 2012 18:26:21 +0100" -->
<!-- isosent="20121102172621" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI users] patch: enabling shmem-sysv on cygwin" -->
<!-- id="5094023D.6010406_at_gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] patch: enabling shmem-sysv on cygwin<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 13:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20625.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More as a note for other cygwin users than a general patch, but it 
<br>
should work in any case.
<br>
<p>The attached patch allow to enable shmem_sysv.
<br>
as  SHM_R | SHM_W are not defined on cygwin (and on posix) [1]
<br>
<p>Additional advise :on cygwin the SYSV shared memory requires the
<br>
cygserver service running, otherwise it will fail as
<br>
<p>$ mpirun -n 4 ./hello_c.exe
<br>
Bad system call
<br>
<p><p>Regards
<br>
Marco
<br>
<p>[1] <a href="http://cygwin.com/ml/cygwin/2007-10/msg00284.html">http://cygwin.com/ml/cygwin/2007-10/msg00284.html</a>
<br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20626/SHM.patch">SHM.patch</a>
</ul>
<!-- attachment="SHM.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20627.php">Orion Poplawski: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.6.3 released"</a>
<li><strong>Previous message:</strong> <a href="20625.php">Ralph Castain: "Re: [OMPI users] tester for cygwin openmpi-1.6.3 package"</a>
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
