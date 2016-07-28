<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 12 10:17:23 2006" -->
<!-- isoreceived="20060312151723" -->
<!-- sent="Sun, 12 Mar 2006 23:17:20 +0800" -->
<!-- isosent="20060312151720" -->
<!-- name="Yusuf Sun" -->
<!-- email="yusuf.sun_at_[hidden]" -->
<!-- subject="[OMPI users] New user question on nohup submission" -->
<!-- id="1ffc3b770603120717p1e53b2f1l3161f0beb4d4e13f_at_mail.gmail.com" -->
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
<strong>From:</strong> Yusuf Sun (<em>yusuf.sun_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-12 10:17:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Julian Seward: "[OMPI users] svn r9191 build failure on ppc32-linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>Reply:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I recently installed Open MPI. And I can get my program compiled and run.
<br>
There is a small problem:
<br>
Previously, when using LAM, I use the following command line to submit my
<br>
jobs:
<br>
nohup mpirun n1-4 ~/bin/mympi.LAM &gt; output.txt &amp;
<br>
<p>But, with Open MPI, I can only run the program at foreground by
<br>
mpirun -np 4 --hostfile myhosts ~/bin/mympi.OMPI
<br>
If adding &quot;nohup&quot; and &quot;&gt; output.txt &amp;&quot;, the submitted job will stop
<br>
immediately.
<br>
However, when I check on the slave nodes, I can still see the job and the
<br>
orted
<br>
by &quot;ps -u&quot;. I have to manually kill them.
<br>
<p>Any suggestion?
<br>
<p>Thanks
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Julian Seward: "[OMPI users] svn r9191 build failure on ppc32-linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
<li><strong>Reply:</strong> <a href="0831.php">Brian Barrett: "Re: [OMPI users] New user question on nohup submission"</a>
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
