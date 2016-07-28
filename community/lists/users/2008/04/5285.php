<?
$subject_val = "[OMPI users] remote host not accessible";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  1 16:46:58 2008" -->
<!-- isoreceived="20080401204658" -->
<!-- sent="Tue, 01 Apr 2008 22:46:57 +0200" -->
<!-- isosent="20080401204657" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="[OMPI users] remote host not accessible" -->
<!-- id="47F29F41.1040301_at_bredband.net" -->
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
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-01 16:46:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5284.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have installed Open-MPI on three machine which runs OpenSUSE and it 
<br>
has been installed successfully. I can submit jobs locally on each 
<br>
machine using &quot;mpirun&quot; and it works fine. I have defined a
<br>
host file on one of them (master) where I have defined IP address of 
<br>
each machine and number of slots. First when I tried to submit jobs to 
<br>
master it asked for password for SSH connection which showed
<br>
that master can communicate with slaves. Then I setup all machines to 
<br>
communicate with each other using SSH without password. Now when I 
<br>
submit a job on master, the job just blocks and nothing
<br>
happens. The program runs locally on each machine but it will not run 
<br>
when I submit it on master to be run on slaves. What can it be?
<br>
<p>D.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Previous message:</strong> <a href="5284.php">Will Portnoy: "[OMPI users] iof, readline, lost stdin buffering"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
<li><strong>Reply:</strong> <a href="5286.php">Doug Reeder: "Re: [OMPI users] remote host not accessible"</a>
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
