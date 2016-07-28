<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 13:05:14 2011" -->
<!-- isoreceived="20110217180514" -->
<!-- sent="Thu, 17 Feb 2011 12:05:05 -0600" -->
<!-- isosent="20110217180505" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="4D5D6351.5090405_at_norbl.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C9823270.E67D%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 13:05:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15644.php">Jeff Squyres: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena,
<br>
<p>If I understand you correctly, the configuration you're trying to use is
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
<br>
<p>I haven't tried this yet (although I will in the next few days). 
<br>
<p>I've tried
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;(a)  submission host[non-ec2 system with static IP, direct net
<br>
&nbsp;&nbsp;&nbsp;&nbsp;connection] &lt;-&gt; slave [ec2 instance 1]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(b)  submission host[non-ec2 system with local static IP, connected
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to net via router] &lt;-&gt; slave [ec2 instance 1]
<br>
<p>(a) works, (b) does not, presumably because opmpi does not support NAT
<br>
(see Jeff Squyres comments, later in the thread).
<br>
<p><p>I notice that you're using the 'internal' uri to specify hostnames. This
<br>
makes sense in principle, but have you tried using the public/external
<br>
uri?  Presumably opmpi has to lookup these hostnames.  I don't know how
<br>
that's done, but trying to lookup the internal uri might be a problem.
<br>
<p>If you try this (or anything else), I'd appreciate it if you'd post your
<br>
results.
<br>
<p>bw
<br>
<p><p>On 2/17/11 4:08 AM, Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi Barnet,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Allow me to interject.
</span><br>
<span class="quotelev1">&gt; Are you saying that you run master on your local machine and launching
</span><br>
<span class="quotelev1">&gt; openMPI process on EC2?  You are saying that 1) tcp port
</span><br>
<span class="quotelev1">&gt; tcp://192.168.1.101:35272 is on your local system and 2) the ec2
</span><br>
<span class="quotelev1">&gt; instance is trying to connect your local machine&#146;s port 35272 , and
</span><br>
<span class="quotelev1">&gt; hanging.  Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just a bit different situation.  I am running 2 ec2 instances
</span><br>
<span class="quotelev1">&gt; and trying to run mpirun on both instances.  My ssh debug output looks
</span><br>
<span class="quotelev1">&gt; quite similar to yours and mpirun behavior also very similar.  Here&#146;s
</span><br>
<span class="quotelev1">&gt; what I captured:
</span><br>
<span class="quotelev1">&gt;   Sending command:  orted --daemonize -mca ess env -mca orte_ess_jobid
</span><br>
<span class="quotelev1">&gt; 1025769472 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev1">&gt; &quot;1025769472.0;tcp://10.118.23.4:60941&quot;
</span><br>
<span class="quotelev1">&gt; And here&#146;s what I did on the instance from which I issued mpirun:
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_ip-10-118-23-4 ~]$ nslookup `hostname`
</span><br>
<span class="quotelev1">&gt;   Server:         172.16.0.23
</span><br>
<span class="quotelev1">&gt;   Address:        172.16.0.23#53
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Non-authoritative answer:
</span><br>
<span class="quotelev1">&gt;   Name:   ip-10-118-23-4.ec2.internal
</span><br>
<span class="quotelev1">&gt;   Address: 10.118.23.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So that tcp port does belong to this instance.  Furthermore, it cannot
</span><br>
<span class="quotelev1">&gt; come into it.  No router (which may perform address translation?) is
</span><br>
<span class="quotelev1">&gt; involved and it appears the same thing as what you describe is
</span><br>
<span class="quotelev1">&gt; happening.  Incidentally, here&#146;s how I ran mpirun:
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_ip-10-118-23-4 ~]$ mpirun -app app.ac
</span><br>
<span class="quotelev1">&gt; With app.ac file:
</span><br>
<span class="quotelev1">&gt;   [tsakai_at_ip-10-118-23-4 ~]$ cat app.ac
</span><br>
<span class="quotelev1">&gt;   -H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;   -H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first two lines spawns /bin/hostname on this instance
</span><br>
<span class="quotelev1">&gt; (ip-10-118-23-4.ec2.internal) and the bottom 2 lines on the remote
</span><br>
<span class="quotelev1">&gt; instance.
</span><br>
<span class="quotelev1">&gt; Here&#146;s the security group used for these instances:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   connetion       protocol   from     to      source
</span><br>
<span class="quotelev1">&gt;   -------------        -----------   ------    -----   ------------
</span><br>
<span class="quotelev1">&gt;   *SSH                 *tcp           22      22    0.0.0.0/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I making sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/16/11 8:56 PM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I've run into a problem involving accessing a remote host via a
</span><br>
<span class="quotelev1">&gt;     router and I think need to understand how opmpi determines ip
</span><br>
<span class="quotelev1">&gt;     addresses.  If there's anything posted on this subject, please
</span><br>
<span class="quotelev1">&gt;     point me to it.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      Here's the problem:
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      I've installed opmpi (1.4.3) on a remote system (an Amazon ec2
</span><br>
<span class="quotelev1">&gt;     instance).  If the local system I'm working on has a static ip
</span><br>
<span class="quotelev1">&gt;     address (and a direct connection to the internet), there's no
</span><br>
<span class="quotelev1">&gt;     problem.  But if the local system accesses the internet through a
</span><br>
<span class="quotelev1">&gt;     router (which itself gets it's ip via dhcp), a call to runmpi
</span><br>
<span class="quotelev1">&gt;     command hangs.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      This is not firewall problem - I've disabled the firewalls on all
</span><br>
<span class="quotelev1">&gt;     the system that are involved (and the router).
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      It is also not an ssh problem.  The ssh connection is being made
</span><br>
<span class="quotelev1">&gt;     and it appears that the application has been launched on the
</span><br>
<span class="quotelev1">&gt;     remote system.  After the runmpi command has been launched
</span><br>
<span class="quotelev1">&gt;     locally, a ps on the remote system shows a process
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         orted --daemonize -mca ess env -mca orte_ess_jobid 1187643392
</span><br>
<span class="quotelev1">&gt;         -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev1">&gt;         1187643392.0;tcp://192.168.1.101:35272
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      While I don't really understand the orted process, I assume this
</span><br>
<span class="quotelev1">&gt;     indicates that a command to execute an app has been received and
</span><br>
<span class="quotelev1">&gt;     that opmpi is trying to run it.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      I suspect that the problem is related to the '--hnp-uri ...
</span><br>
<span class="quotelev1">&gt;     tcp://192.168.1.101' argument.  192.168.1.101 is the address of my
</span><br>
<span class="quotelev1">&gt;     local system on my local network (attached to the router), which
</span><br>
<span class="quotelev1">&gt;     of course is not accessible over the net.  It appears that opmpi
</span><br>
<span class="quotelev1">&gt;     is transmitting the local (static) ip address to the remote host.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      It would help to know how opmpi determines and distributes IP
</span><br>
<span class="quotelev1">&gt;     addresses.  And if there's any way to control this.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      Any thoughts on dealing with this would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      Thanks,
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      bw
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15644.php">Jeff Squyres: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Previous message:</strong> <a href="15642.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15636.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
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
