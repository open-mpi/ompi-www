<?
$subject_val = "[OMPI users] Cannot run a job with more than 3 nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 02:37:25 2014" -->
<!-- isoreceived="20140312063725" -->
<!-- sent="Wed, 12 Mar 2014 14:37:25 +0800" -->
<!-- isosent="20140312063725" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot run a job with more than 3 nodes" -->
<!-- id="CAJTHAucKLyZisXHnEh7_rHtZ6HvHehscXy=9RU_iDm89NftRiA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Cannot run a job with more than 3 nodes<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 02:37:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23810.php">Ross Boylan: "[OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using openmpi 1.7.4 on Ubuntu 12.04 x64 and I have a very odd problem.
<br>
<p>I have 4 nodes, all of which are defined in the hostfile and in /etc/hosts.
<br>
<p>I can log into each node using ssh and certificate method from the shell
<br>
that is running the mpi job, by sing their name as defined in /etc/hosts.
<br>
<p>I can run an mpi job if I include only 3 nodes in the hostfile, for example:
<br>
<p>Node1 slots=8 max-slots=8
<br>
Node2 slots=8 max-slots=8
<br>
Node3 slots=8 max-slots=8
<br>
<p>But if I add a fourth node into the hostfile eg:
<br>
<p>Node1 slots=8 max-slots=8
<br>
Node2 slots=8 max-slots=8
<br>
Node3 slots=8 max-slots=8
<br>
Node4 slots=8 max-slots=8
<br>
<p>I get this error after attempting mpirun -np 32 --hostfile hostfile a.out:
<br>
<p>ssh: Could not resolve hostname Node4: Name or service not known.
<br>
<p>But, I can log into Node4 using ssh from the same shell by using ssh Node4.
<br>
<p>Also if I mix up the hostfile like this for example and place Node1 to the
<br>
last spot:
<br>
<p>Node4 slots=8 max-slots=8
<br>
Node2 slots=8 max-slots=8
<br>
Node3 slots=8 max-slots=8
<br>
Node1 slots=8 max-slots=8
<br>
<p>The error becomes
<br>
<p>ssh: Could not resolve hostname Node1: Name or service not known.
<br>
<p>If I then go back to the three node hostfile like this:
<br>
<p>Node1 slots=8 max-slots=8
<br>
Node4 slots=8 max-slots=8
<br>
Node2 slots=8 max-slots=8
<br>
<p>There is no error with three nodes even though both Node1 and Node4 &quot;cannot
<br>
be found&quot; if they are present in a 4 node hostfile in the last spot. The
<br>
last slot seems to be bugged.
<br>
<p>What is going on? How do I fix this?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23809/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23810.php">Ross Boylan: "[OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23808.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Maybe reply:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
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
