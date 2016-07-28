<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 05:08:48 2011" -->
<!-- isoreceived="20110217100848" -->
<!-- sent="Thu, 17 Feb 2011 02:08:42 -0800" -->
<!-- isosent="20110217100842" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="C9823270.E67D%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4D5CAA69.9080804_at_norbl.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are IP addresses determined?<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 05:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15637.php">Ashley Pittman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15635.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15633.php">Barnet Wagman: "[OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Barnet,
<br>
<p>Allow me to interject.
<br>
Are you saying that you run master on your local machine and launching openMPI process on EC2?  You are saying that 1) tcp port tcp://192.168.1.101:35272 is on your local system and 2) the ec2 instance is trying to connect your local machine&#146;s port 35272 , and hanging.  Is that correct?
<br>
<p>I have just a bit different situation.  I am running 2 ec2 instances and trying to run mpirun on both instances.  My ssh debug output looks quite similar to yours and mpirun behavior also very similar.  Here&#146;s what I captured:
<br>
&nbsp;&nbsp;Sending command:  orted --daemonize -mca ess env -mca orte_ess_jobid 1025769472 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1025769472.0;tcp://10.118.23.4:60941&quot;
<br>
And here&#146;s what I did on the instance from which I issued mpirun:
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;Server:         172.16.0.23
<br>
&nbsp;&nbsp;Address:        172.16.0.23#53
<br>
<p>&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;Name:   ip-10-118-23-4.ec2.internal
<br>
&nbsp;&nbsp;Address: 10.118.23.4
<br>
<p>So that tcp port does belong to this instance.  Furthermore, it cannot come into it.  No router (which may perform address translation?) is involved and it appears the same thing as what you describe is happening.  Incidentally, here&#146;s how I ran mpirun:
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ mpirun -app app.ac
<br>
With app.ac file:
<br>
&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ cat app.ac
<br>
&nbsp;&nbsp;-H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;-H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
<br>
<p>The first two lines spawns /bin/hostname on this instance (ip-10-118-23-4.ec2.internal) and the bottom 2 lines on the remote instance.
<br>
Here&#146;s the security group used for these instances:
<br>
<p>&nbsp;&nbsp;connetion       protocol   from     to      source
<br>
&nbsp;&nbsp;-------------        -----------   ------    -----   ------------
<br>
&nbsp;&nbsp;SSH                 tcp           22      22    0.0.0.0/0
<br>
<p>Am I making sense?
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p><p><p>On 2/16/11 8:56 PM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt; wrote:
<br>
<p>&nbsp;&nbsp;I've run into a problem involving accessing a remote host via a router and I think need to understand how opmpi determines ip addresses.  If there's anything posted on this subject, please point me to it.
<br>
<p>&nbsp;Here's the problem:
<br>
<p>&nbsp;I've installed opmpi (1.4.3) on a remote system (an Amazon ec2 instance).  If the local system I'm working on has a static ip address (and a direct connection to the internet), there's no problem.  But if the local system accesses the internet through a router (which itself gets it's ip via dhcp), a call to runmpi command hangs.
<br>
<p>&nbsp;This is not firewall problem - I've disabled the firewalls on all the system that are involved (and the router).
<br>
<p>&nbsp;It is also not an ssh problem.  The ssh connection is being made and it appears that the application has been launched on the remote system.  After the runmpi command has been launched locally, a ps on the remote system shows a process
<br>
<p>orted --daemonize -mca ess env -mca orte_ess_jobid 1187643392 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 1187643392.0;tcp://192.168.1.101:35272
<br>
<p><p>&nbsp;While I don't really understand the orted process, I assume this indicates that a command to execute an app has been received and that opmpi is trying to run it.
<br>
<p>&nbsp;I suspect that the problem is related to the '--hnp-uri ... tcp://192.168.1.101' argument.  192.168.1.101 is the address of my local system on my local network (attached to the router), which of course is not accessible over the net.  It appears that opmpi is transmitting the local (static) ip address to the remote host.
<br>
<p>&nbsp;It would help to know how opmpi determines and distributes IP addresses.  And if there's any way to control this.
<br>
<p>&nbsp;Any thoughts on dealing with this would be greatly appreciated.
<br>
<p>&nbsp;Thanks,
<br>
<p>&nbsp;bw
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15637.php">Ashley Pittman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15635.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15633.php">Barnet Wagman: "[OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15643.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
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
