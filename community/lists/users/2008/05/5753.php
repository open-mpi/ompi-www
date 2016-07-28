<?
$subject_val = "[OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 15:24:28 2008" -->
<!-- isoreceived="20080529192428" -->
<!-- sent="Thu, 29 May 2008 16:24:18 -0300" -->
<!-- isosent="20080529192418" -->
<!-- name="Davi Vercillo C. Garcia" -->
<!-- email="davivercillo_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="dd4eed670805291224j4783198emc4f6baacb5ee2ab7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Davi Vercillo C. Garcia (<em>davivercillo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 15:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run my program in my environment and some problems are
<br>
happening. My environment is based on PVFS2 over NFS (PVFS is mounted
<br>
over NFS partition), OpenMPI and Ubuntu. My program uses MPI-IO and
<br>
BZ2 development libraries. When I tried to run, a message appears:
<br>
<p>File locking failed in ADIOI_Set_lock. If the file system is NFS, you
<br>
need to use NFS version 3, ensure that the lockd daemon is running on
<br>
all the machines, and mount the directory with the 'noac' option (no
<br>
attribute caching).
<br>
[campogrande05.dcc.ufrj.br:05005] MPI_ABORT invoked on rank 0 in
<br>
communicator MPI_COMM_WORLD with errorcode 1
<br>
mpiexec noticed that job rank 1 with PID 5008 on node campogrande04
<br>
exited on signal 15 (Terminated).
<br>
<p>Why ?!
<br>
<p><pre>
-- 
Davi Vercillo Carneiro Garcia
Universidade Federal do Rio de Janeiro
Departamento de Ci&#234;ncia da Computa&#231;&#227;o
DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
&quot;Good things come to those who... wait.&quot; - Debian Project
&quot;A computer is like air conditioning: it becomes useless when you open
windows.&quot; - Linus Torvalds
&quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
em d&#250;vida quanto o primeiro.&quot; - Albert Einstein

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5753/comprime.c">comprime.c</a>
</ul>
<!-- attachment="comprime.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5752.php">Jeff Squyres: "Re: [OMPI users] [torqueusers] Job dies randomly, but only through torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5754.php">Brock Palen: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
