<?
$subject_val = "[OMPI users] mpirun tries to ssh to local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 26 06:15:27 2013" -->
<!-- isoreceived="20130826101527" -->
<!-- sent="Mon, 26 Aug 2013 12:15:25 +0200" -->
<!-- isosent="20130826101525" -->
<!-- name="Federico Carotenuto" -->
<!-- email="carotenuto_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun tries to ssh to local machine" -->
<!-- id="20130826121525.40151ak0fjgwl1h9_at_webmail.bo.ibimet.cnr.it" -->
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
<strong>Subject:</strong> [OMPI users] mpirun tries to ssh to local machine<br>
<strong>From:</strong> Federico Carotenuto (<em>carotenuto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-26 06:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22548.php">Nathan Hjelm: "Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm currently having this issue with mpirun: I want to launch a  
<br>
program only on the cores of the local machine, but every time I run  
<br>
an mpi program it says that the host 127.0.0.1 &lt;local_machine_name&gt;  
<br>
with it's associated key is unkown and asks me if I want to add it to  
<br>
the list of ssh known hosts.
<br>
<p>By chowing/chmodding the .ssh file I was able to permanently add this  
<br>
&quot;host&quot; to the list of known hosts, but my problem is that every  
<br>
program that I try to run ask me to insert a password (the actual  
<br>
local user password) n times where n is equal to the -np parameter  
<br>
(i.e.: if I run the program on 8 cores I receive 8 successive password  
<br>
pronts).
<br>
<p>If I insert the password everything runs fine, but it's quite annoying  
<br>
and I wish to bypass such step: is there a way to have mpirun memorize  
<br>
the password? Or make him understand that the 8 nodes are actually 8  
<br>
cores on the local machine and not 8 different hosts?
<br>
<p>Thanks!
<br>
<p><p><p>----------------------------------------------------------------
<br>
This message was sent using IMP, the Internet Messaging Program.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Previous message:</strong> <a href="22548.php">Nathan Hjelm: "Re: [OMPI users] What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
<li><strong>Reply:</strong> <a href="22550.php">Reuti: "Re: [OMPI users] mpirun tries to ssh to local machine"</a>
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
