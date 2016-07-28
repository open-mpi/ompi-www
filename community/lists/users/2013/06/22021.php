<?
$subject_val = "[OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  4 12:48:45 2013" -->
<!-- isoreceived="20130604164845" -->
<!-- sent="Wed, 5 Jun 2013 00:48:41 +0800" -->
<!-- isosent="20130604164841" -->
<!-- name="vacate" -->
<!-- email="vacatehoping_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&amp;quot; errors during mpirun" -->
<!-- id="CANxn1WVpEVrLPpi2E8sCjFxXTYBYucg8Q_Yk-Ruxyo5Kp1jMUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun<br>
<strong>From:</strong> vacate (<em>vacatehoping_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-04 12:48:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22022.php">Orion Poplawski: "[OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Previous message:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Reply:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>After solving my first ssh_exchange_identification problem,
<br>
I feel embarrassed to ask my another problem... :'((
<br>
<p>I got some &quot;*ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed
<br>
out*&quot; errors
<br>
when I mpirun over 2000 times almost at the same time.
<br>
<pre>
---
my bash shell script file :
   for (( index=0; index&lt;2000 ; index++))
      do
          (time mpirun --hostfile my_hostfile openMPI_test &amp;) &gt;&gt; file 2&gt;&amp;1
      done
---
*
*
*But not &quot;always&quot; got this problem, just &quot;often&quot;*.(It seldom works well.)
*In addition, the amount of &quot;timed out&quot; error in each test are different*.
(In 2000 times, this error happened between 0~200 times)
I try to google it,
but I can't find anyone have this ssh problem when he/she use a lot of ssh
connections...
So I think maybe someone here have had the same problem as mine.
----------------------------------------------------------------------------------
The following are some of my settings that I have tried to change :
1. net.ipv4.tcp_fin_timeout=180
<a href="http://askubuntu.com/questions/21182/how-to-change-the-default-timeout-of-internet-connection">http://askubuntu.com/questions/21182/how-to-change-the-default-timeout-of-internet-connection</a>
2. sudo iptables -A INPUT -p tcp --dport ssh -j ACCEPT
<a href="http://www.serkey.com/ubuntu-ssh-connection-timed-out-due-to-firewall-behgct.html">http://www.serkey.com/ubuntu-ssh-connection-timed-out-due-to-firewall-behgct.html</a>
----------------------------------------------------------------------------------
but these changes still didn't solve my problem...
I still can't figure out where is the problem and are there some potential
problems :(((
If someone here have any idea about this situation ,or have had the same
problem as mine?
Is it my *machine problem* or *system problem*? Or *OpenMPI* can't let me
do something like this?
Really hope someone can give me a hand ..
Thank you all very very very much!!
Best Wishes,
Jen
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22022.php">Orion Poplawski: "[OMPI users] Force mpirun to only run under gridengine"</a>
<li><strong>Previous message:</strong> <a href="22020.php">Neel Sunil Desai: "Re: [OMPI users] Open MPI Checkpoint Restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
<li><strong>Reply:</strong> <a href="22034.php">Ralph Castain: "Re: [OMPI users] &quot;ssh: connect to host XXX.XXX.XXX.XX port 22: connection timed out&quot; errors during mpirun"</a>
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
