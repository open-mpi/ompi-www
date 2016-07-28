<?
$subject_val = "[OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 23:56:16 2011" -->
<!-- isoreceived="20110217045616" -->
<!-- sent="Wed, 16 Feb 2011 22:56:09 -0600" -->
<!-- isosent="20110217045609" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="[OMPI users] How are IP addresses determined?" -->
<!-- id="4D5CAA69.9080804_at_norbl.com" -->
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
<strong>Subject:</strong> [OMPI users] How are IP addresses determined?<br>
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 23:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15634.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15632.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15637.php">Ashley Pittman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've run into a problem involving accessing a remote host via a router
<br>
and I think need to understand how opmpi determines ip addresses.  If
<br>
there's anything posted on this subject, please point me to it.
<br>
<p>Here's the problem:
<br>
<p>I've installed opmpi (1.4.3) on a remote system (an Amazon ec2
<br>
instance).  If the local system I'm working on has a static ip address
<br>
(and a direct connection to the internet), there's no problem.  But if
<br>
the local system accesses the internet through a router (which itself
<br>
gets it's ip via dhcp), a call to runmpi command hangs.
<br>
<p>This is not firewall problem - I've disabled the firewalls on all the
<br>
system that are involved (and the router).
<br>
<p>It is also not an ssh problem.  The ssh connection is being made and it
<br>
appears that the application has been launched on the remote system. 
<br>
After the runmpi command has been launched locally, a ps on the remote
<br>
system shows a process
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orted --daemonize -mca ess env -mca orte_ess_jobid 1187643392 -mca
<br>
&nbsp;&nbsp;&nbsp;&nbsp;orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1187643392.0;tcp://192.168.1.101:35272
<br>
<p><p>While I don't really understand the orted process, I assume this
<br>
indicates that a command to execute an app has been received and that
<br>
opmpi is trying to run it.
<br>
<p>I suspect that the problem is related to the '--hnp-uri ...
<br>
tcp://192.168.1.101' argument.  192.168.1.101 is the address of my local
<br>
system on my local network (attached to the router), which of course is
<br>
not accessible over the net.  It appears that opmpi is transmitting the
<br>
local (static) ip address to the remote host.
<br>
<p>It would help to know how opmpi determines and distributes IP
<br>
addresses.  And if there's any way to control this.
<br>
<p>Any thoughts on dealing with this would be greatly appreciated.
<br>
<p>Thanks,
<br>
<p>bw
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15633/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15634.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15632.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15637.php">Ashley Pittman: "Re: [OMPI users] How are IP addresses determined?"</a>
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
