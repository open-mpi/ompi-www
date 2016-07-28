<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 16 11:18:13 2006" -->
<!-- isoreceived="20060416151813" -->
<!-- sent="Sun, 16 Apr 2006 11:18:07 -0400" -->
<!-- isosent="20060416151807" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="[OMPI users] General Installation Question" -->
<!-- id="33f36270604160818re18b38dtd223a491ef616776_at_mail.gmail.com" -->
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
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-16 11:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Aniruddha Shet: "Re: [OMPI users] Error while building OpenMPI on Itanium clusterwith Myrinet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I know that I have to include some information to get the
<br>
right answer. But, I have one simple question which does not
<br>
need that information.
<br>
<p>1. I could not find any document except FAQ and mailing list
<br>
for Open MPI. Is there any user manual or something like that?
<br>
Or, the LAM MPI's manual can be used instead?
<br>
<p>2. Another question is about installation.
<br>
If I want to use rsh/ssh for Open MPI, do I have to install
<br>
Open MPI on all master and slave nodes? Or, should I use
<br>
something like NSF file system so that even though I installed
<br>
Open MPI on only master node, all the other salve nodes could
<br>
see Open MPI installation in the master node?
<br>
<p>The error I have is from I wanted to run a program on two slave
<br>
nodes but shell complained that there is no orted. It is true
<br>
that there is no installation of Open MPI on each slave node.
<br>
<p>Thank you,
<br>
<p>Sang Chul
<br>
<p>P.S. The Errors when I ran the command line
<br>
<p>% mpirun --hostfile hostfile -np 2 hello
<br>
<p>=============================================
<br>
bash: line 1: orted: command not found
<br>
[node00:04841] ERROR: A daemon on node node02 failed to start as expected.
<br>
[node00:04841] ERROR: There may be more information available from
<br>
[node00:04841] ERROR: the remote shell (see above).
<br>
[node00:04841] ERROR: The daemon exited unexpectedly with status 127.
<br>
bash: line 1: orted: command not found
<br>
[node00:04841] ERROR: A daemon on node node01 failed to start as expected.
<br>
[node00:04841] ERROR: There may be more information available from
<br>
[node00:04841] ERROR: the remote shell (see above).
<br>
[node00:04841] ERROR: The daemon exited unexpectedly with status 127.
<br>
=============================================
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1073/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Previous message:</strong> <a href="1072.php">Aniruddha Shet: "Re: [OMPI users] Error while building OpenMPI on Itanium clusterwith Myrinet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
<li><strong>Reply:</strong> <a href="1074.php">Brian Barrett: "Re: [OMPI users] General Installation Question"</a>
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
