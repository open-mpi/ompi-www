<?
$subject_val = "[OMPI users] MPI Program hangs when runs on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 02:40:06 2010" -->
<!-- isoreceived="20100420064006" -->
<!-- sent="Tue, 20 Apr 2010 13:39:42 +0700" -->
<!-- isosent="20100420063942" -->
<!-- name="long thai" -->
<!-- email="thaithanhlong2501_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Program hangs when runs on more than one host" -->
<!-- id="r2l6f5f9bfc1004192339lc6ee1953o2683da73f70eee64_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Program hangs when runs on more than one host<br>
<strong>From:</strong> long thai (<em>thaithanhlong2501_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 02:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>Previous message:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Reply:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all.
<br>
<p>I'm just using OpenMPI for few days. I'll try to run a simple MPI program,
<br>
the program is ProcessColors which I get from
<br>
CI-Tutor&lt;<a href="http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091">http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091</a>&gt;.
<br>
I have 2 hosts, if I run the program separately on each one, it runs well.
<br>
However, if I run it on two hosts using following command: *mpirun --host
<br>
host1,host2 --preload-binary -np 8 ProcessColors*. The program hangs.
<br>
<p>When I use command *ps -A* to check running process, I find out that there
<br>
is 4 processes running on each host. So, I think that there is a deadlock on
<br>
my program, but why it runs well with single host?
<br>
<p>All those following commands run without any problem on both machine:
<br>
<p>&nbsp;&nbsp;&nbsp;- mpirun -np 8 ProcessColors
<br>
&nbsp;&nbsp;&nbsp;- mpirun --host host1 -np 8 ProcessColors
<br>
&nbsp;&nbsp;&nbsp;- mpirun --host host2 -np 8 ProcessColors
<br>
<p>Later, I found out that the problem comes when the remote host try to send
<br>
message to the host which root process (process 0) is running, which is the
<br>
host that I run the command. I don't know why the process is blocked at
<br>
sending task.
<br>
<p>Any help from you is precious to me.
<br>
<p>Regards.
<br>
<p>Long Thai.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12706/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12707.php">jody: "Re: [OMPI users] Error on sending argv"</a>
<li><strong>Previous message:</strong> <a href="12705.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Reply:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
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
