<?
$subject_val = "Re: [OMPI users] mpirun works locally but not through network";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 09:53:22 2010" -->
<!-- isoreceived="20100429135322" -->
<!-- sent="Thu, 29 Apr 2010 07:53:05 -0600" -->
<!-- isosent="20100429135305" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun works locally but not through network" -->
<!-- id="B7B522F9-837E-4015-902F-DC854FB034C6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="924618.28516.qm_at_web24002.mail.ird.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 09:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12849.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try running it with
<br>
<p>mpirun -mca oob_tcp_if_exclude=10.0.2.15
<br>
<p>That will tell OMPI to ignore the 10.0.2.15 interface
<br>
<p>On Apr 29, 2010, at 7:36 AM, Nguyen Kim Son wrote:
<br>
<p><span class="quotelev1">&gt; I think the problem reside the orted.  As I tested mpirun in 2 virtual machines(fedora) in Windows, the communication between the two is through eth1 but not eth0. After lauching 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ps aux | grep orted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the results is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib/openmpi/bin/orted --daemonize -mca ess env -mca orte_ess_jobid -1233715200 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 3061252096.0;tcp://10.0.2.15:43549;tcp://192.168.56.101:43549 --mca btl tcp,self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the bold part is not supposed to be there as orted try to do something with the IP of windows machine.
</span><br>
<span class="quotelev1">&gt; Is there someway to start orted manually?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Son
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12849.php">Ralph Castain: "Re: [OMPI users] mpirun -np 4 hello_world; on a eight processor shared memory machine produces wrong output"</a>
<li><strong>Previous message:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>In reply to:</strong> <a href="12847.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Reply:</strong> <a href="12850.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
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
