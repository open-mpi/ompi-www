<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 05:05:27 2006" -->
<!-- isoreceived="20060525090527" -->
<!-- sent="Thu, 25 May 2006 16:54:10 +0800" -->
<!-- isosent="20060525085410" -->
<!-- name="&#209;&#238;&#191;&#198;" -->
<!-- email="semper_at_[hidden]" -->
<!-- subject="[OMPI users] SEGV_ACCERR Failing at addr ..." -->
<!-- id="348547250.16423_at_nudt.edu.cn" -->
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
<strong>From:</strong> &#209;&#238;&#191;&#198; (<em>semper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 04:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
<li><strong>Maybe reply:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,all
<br>
I tried to use hostfile option to launch MPI jobs on several nodes.Each node has
<br>
the same Open MPI package installed correctly (version 1.1ra9202).
<br>
But only node0 refused to work with other nodes.What should I do?
<br>
Can anybody help me? thank you.
<br>
<p>[semper_at_node0]mpirun --hostfile h -np 4 /tmp/semper/testMPI
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Signal:11 info.si_errno:0(Success) si_code:2(SEGV_ACCERR)
<br>
Failing at addr:0x6
<br>
<p>[semper_at_node0]cat h
<br>
node0
<br>
node2
<br>
node4
<br>
node6
<br>
[semper_at_node0]vi h
<br>
[semper_at_node0]cat h
<br>
node2
<br>
node4
<br>
node6
<br>
<p>[semper_at_node0]mpirun --hostfile h -np 4 /tmp/semper/testMPI
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
<span class="quotelev1">&gt;From process 0: Num processes: 4
</span><br>
Greetings from process 1 ,pid 5140,host node4!
<br>
Greetings from process 2 ,pid 11471,host node6!
<br>
Greetings from process 3 ,pid 4290,host node2!
<br>
<p>[semper_at_node0]mpirun -np 4 /tmp/semper/testMPI
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
Hello MPI World the original.
<br>
<span class="quotelev1">&gt;From process 0: Num processes: 4
</span><br>
Greetings from process 1 ,pid 21743,host node0!
<br>
Greetings from process 2 ,pid 21744,host node0!
<br>
Greetings from process 3 ,pid 21745,host node0!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1288.php">Michael Kluskens: "Re: [OMPI users] spawn failed with errno=-7"</a>
<li><strong>Previous message:</strong> <a href="1286.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
<li><strong>Maybe reply:</strong> <a href="1291.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] SEGV_ACCERR Failing at addr ..."</a>
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
