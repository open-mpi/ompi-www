<?
$subject_val = "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 08:11:29 2014" -->
<!-- isoreceived="20140530121129" -->
<!-- sent="Fri, 30 May 2014 16:11:26 +0400" -->
<!-- isosent="20140530121126" -->
<!-- name="&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] [warn] Epoll ADD(1) on fd 0 failed" -->
<!-- id="1401451886.29264010_at_f372.i.mail.ru" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] [warn] Epoll ADD(1) on fd 0 failed<br>
<strong>From:</strong> &#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178; (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 08:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="24514.php">Sergii Veremieiev: "[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I am using Open MPI v1.8.1 and slurm 2.5.6.
<br>
I got this messages when i try to run example (hello_oshmem.cpp) program:
<br>
[warn] Epoll ADD(1) on fd 0 failed. Old events were 0; read change was 1 (add); write change was 0 (none): Operation not permitted
<br>
[warn] Epoll ADD(4) on fd 1 failed. Old events were 0; read change was 0 (none); write change was 1 (add): Operation not permitted
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
What does this warnings mean?
<br>
I lunch this job using sbatch and mpirun with hostfile (got it from : &#194;&#160;$srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE)
<br>
Regards,
<br>
Timur
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24515/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24516.php">Marco Atzeri: "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="24514.php">Sergii Veremieiev: "[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Reply:</strong> <a href="24518.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/06/24545.php">Ralph Castain: "Re: [OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
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
