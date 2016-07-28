<?
$subject_val = "Re: [OMPI users] mpirun works locally but not through network";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 09:36:41 2010" -->
<!-- isoreceived="20100429133641" -->
<!-- sent="Thu, 29 Apr 2010 13:36:28 +0000 (GMT)" -->
<!-- isosent="20100429133628" -->
<!-- name="Nguyen Kim Son" -->
<!-- email="conmeomit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun works locally but not through network" -->
<!-- id="924618.28516.qm_at_web24002.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] mpirun works locally but not through network" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun works locally but not through network<br>
<strong>From:</strong> Nguyen Kim Son (<em>conmeomit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 09:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think the problem reside the orted.&#160; As I tested mpirun in 2 virtual machines(fedora) in Windows, the communication between the two is through eth1 but not eth0. After lauching 
<br>
<p>ps aux | grep orted
<br>
<p>the results is:
<br>
<p>/usr/lib/openmpi/bin/orted --daemonize -mca ess env -mca orte_ess_jobid -1233715200 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 3061252096.0;tcp://10.0.2.15:43549;tcp://192.168.56.101:43549 --mca btl tcp,self
<br>
<p>I think the bold part is not supposed to be there as orted try to do something with the IP of windows machine.
<br>
Is there someway to start orted manually?
<br>
<p>Regards,
<br>
Son
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12847/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12846.php">Pankatz, Klaus: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Maybe in reply to:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12848.php">Ralph Castain: "Re: [OMPI users] mpirun works locally but not through network"</a>
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
