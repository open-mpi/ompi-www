<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 23:56:38 2011" -->
<!-- isoreceived="20110218045638" -->
<!-- sent="Thu, 17 Feb 2011 22:56:30 -0600" -->
<!-- isosent="20110218045630" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="4D5DFBFE.9010900_at_norbl.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C982F80A.E6C5%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Date:</strong> 2011-02-17 23:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena
<br>
<p>Earlier today I was able to successfully get a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
<br>
<p>configuration to work.  I haven't fully digested your &quot;this must be an
<br>
ssh ... &quot; thread.  But here are few things that I found it
<br>
necessary to do, in order to get things working.
<br>
<p>(i) First and foremost is the ec2 security group.  The 'default' group
<br>
will probably not work.  ompi randomly chooses ports. I think that some
<br>
ranges are excluded, but I was too lazy to find out, so I just
<br>
opened/everything/ up, creating a group that includes the line
<br>
<p>Connection Method    Protocol    From port    To port   Source (IP or group)
<br>
&nbsp;All                              tcp             0                 
<br>
65535   0.0.0.0/0
<br>
<p>Of course this could be insecure, depending how your instance is
<br>
configured.  Since I have no services running except ssh, I'm don't
<br>
foresee any problems.
<br>
<p>(ii) Since you have ssh working, this probably is irrelevant: by default
<br>
when ompi uses ssh, it attempts to log into the remote host using the
<br>
local user name, and will use the rsa file  $USER/.ssh/id_rsa. However,
<br>
you can explicitly set these by specifying the ssh command in an MCA
<br>
param, e.g.
<br>
<p>&nbsp;OMPI_MCA_plm_rsh_agent=&quot;ssh -i rsa_file -l ec2-user&quot;; export
<br>
OMPI_MCA_plm_rsh_agent
<br>
<p>And the rsa file must have mode 600.
<br>
<p>(iii) To supress the ssh authenticity test, I added
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;UserKnownHostsFile /dev/null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;StrictHostKeyChecking no
<br>
<p>to /etc/ssh/ssh_config
<br>
<p>Hope one of these helps.
<br>
<p>bw
<br>
<p>On 2/17/11 6:11 PM, Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi Barnet,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I understand you correctly, the configuration you're trying to use Is
</span><br>
<span class="quotelev2">&gt; &gt;  submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; but have you tried using the public/external uri?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just did.  It didn&#146;t make a bit of difference.
</span><br>
<span class="quotelev1">&gt; I also tried IP addresses and that didn&#146;t get me anywhere either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff earlier gave me steps to follow, which I am about to embark on.
</span><br>
<span class="quotelev1">&gt; May I suggest you follow a thread with heading &#147;This must be ssh
</span><br>
<span class="quotelev1">&gt; problem, but I can't figure out what it is...&#148;
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
<span class="quotelev1">&gt; On 2/17/11 10:05 AM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Tena,
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      If I understand you correctly, the configuration you're trying to
</span><br>
<span class="quotelev1">&gt;     use is
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I haven't tried this yet (although I will in the next few days). 
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      I've tried
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         (a)  submission host[non-ec2 system with static IP, direct net
</span><br>
<span class="quotelev1">&gt;         connection] &lt;-&gt; slave [ec2 instance 1]
</span><br>
<span class="quotelev1">&gt;          (b)  submission host[non-ec2 system with local static IP,
</span><br>
<span class="quotelev1">&gt;         connected to net via router] &lt;-&gt; slave [ec2 instance 1]
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     (a) works, (b) does not, presumably because opmpi does not support
</span><br>
<span class="quotelev1">&gt;     NAT (see Jeff Squyres comments, later in the thread).
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      I notice that you're using the 'internal' uri to specify
</span><br>
<span class="quotelev1">&gt;     hostnames. This makes sense in principle, but have you tried using
</span><br>
<span class="quotelev1">&gt;     the public/external uri?  Presumably opmpi has to lookup these
</span><br>
<span class="quotelev1">&gt;     hostnames.  I don't know how that's done, but trying to lookup the
</span><br>
<span class="quotelev1">&gt;     internal uri might be a problem.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      If you try this (or anything else), I'd appreciate it if you'd
</span><br>
<span class="quotelev1">&gt;     post your results.
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      bw
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      
</span><br>
<span class="quotelev1">&gt;      On 2/17/11 4:08 AM, Tena Sakai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          Re: [OMPI users] How are IP addresses determined? Hi Barnet,
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          Allow me to interject.
</span><br>
<span class="quotelev1">&gt;          Are you saying that you run master on your local machine and
</span><br>
<span class="quotelev1">&gt;         launching openMPI process on EC2?  You are saying that 1) tcp
</span><br>
<span class="quotelev1">&gt;         port tcp://192.168.1.101:35272 is on your local system and 2)
</span><br>
<span class="quotelev1">&gt;         the ec2 instance is trying to connect your local machine&#146;s
</span><br>
<span class="quotelev1">&gt;         port 35272 , and hanging.  Is that correct?
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          I have just a bit different situation.  I am running 2 ec2
</span><br>
<span class="quotelev1">&gt;         instances and trying to run mpirun on both instances.  My ssh
</span><br>
<span class="quotelev1">&gt;         debug output looks quite similar to yours and mpirun behavior
</span><br>
<span class="quotelev1">&gt;         also very similar.  Here&#146;s what I captured:
</span><br>
<span class="quotelev1">&gt;            Sending command:  orted --daemonize -mca ess env -mca
</span><br>
<span class="quotelev1">&gt;         orte_ess_jobid 1025769472 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev1">&gt;         orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev1">&gt;         &quot;1025769472.0;tcp://10.118.23.4:60941&quot;
</span><br>
<span class="quotelev1">&gt;          And here&#146;s what I did on the instance from which I issued mpirun:
</span><br>
<span class="quotelev1">&gt;            [tsakai_at_ip-10-118-23-4 ~]$ nslookup `hostname`
</span><br>
<span class="quotelev1">&gt;            Server:         172.16.0.23
</span><br>
<span class="quotelev1">&gt;            Address:        172.16.0.23#53
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;            Non-authoritative answer:
</span><br>
<span class="quotelev1">&gt;            Name:   ip-10-118-23-4.ec2.internal
</span><br>
<span class="quotelev1">&gt;            Address: 10.118.23.4
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          So that tcp port does belong to this instance.  Furthermore,
</span><br>
<span class="quotelev1">&gt;         it cannot come into it.  No router (which may perform address
</span><br>
<span class="quotelev1">&gt;         translation?) is involved and it appears the same thing as
</span><br>
<span class="quotelev1">&gt;         what you describe is happening.  Incidentally, here&#146;s how I
</span><br>
<span class="quotelev1">&gt;         ran mpirun:
</span><br>
<span class="quotelev1">&gt;            [tsakai_at_ip-10-118-23-4 ~]$ mpirun -app app.ac
</span><br>
<span class="quotelev1">&gt;          With app.ac file:
</span><br>
<span class="quotelev1">&gt;            [tsakai_at_ip-10-118-23-4 ~]$ cat app.ac
</span><br>
<span class="quotelev1">&gt;            -H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;            -H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;            -H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;            -H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          The first two lines spawns /bin/hostname on this instance
</span><br>
<span class="quotelev1">&gt;         (ip-10-118-23-4.ec2.internal) and the bottom 2 lines on the
</span><br>
<span class="quotelev1">&gt;         remote instance.
</span><br>
<span class="quotelev1">&gt;          Here&#146;s the security group used for these instances:
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;            connetion       protocol   from     to      source
</span><br>
<span class="quotelev1">&gt;            -------------        -----------   ------    -----
</span><br>
<span class="quotelev1">&gt;           ------------
</span><br>
<span class="quotelev1">&gt;            *SSH                 *tcp           22      22    0.0.0.0/0
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;         Am I making sense?
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          Regards,
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          Tena
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;          On 2/16/11 8:56 PM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;           
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               I've run into a problem involving accessing a remote
</span><br>
<span class="quotelev1">&gt;             host via a router and I think need to understand how opmpi
</span><br>
<span class="quotelev1">&gt;             determines ip addresses.  If there's anything posted on
</span><br>
<span class="quotelev1">&gt;             this subject, please point me to it.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               Here's the problem:
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               I've installed opmpi (1.4.3) on a remote system (an
</span><br>
<span class="quotelev1">&gt;             Amazon ec2 instance).  If the local system I'm working on
</span><br>
<span class="quotelev1">&gt;             has a static ip address (and a direct connection to the
</span><br>
<span class="quotelev1">&gt;             internet), there's no problem.  But if the local system
</span><br>
<span class="quotelev1">&gt;             accesses the internet through a router (which itself gets
</span><br>
<span class="quotelev1">&gt;             it's ip via dhcp), a call to runmpi command hangs.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               This is not firewall problem - I've disabled the
</span><br>
<span class="quotelev1">&gt;             firewalls on all the system that are involved (and the
</span><br>
<span class="quotelev1">&gt;             router).
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               It is also not an ssh problem.  The ssh connection is
</span><br>
<span class="quotelev1">&gt;             being made and it appears that the application has been
</span><br>
<span class="quotelev1">&gt;             launched on the remote system.  After the runmpi command
</span><br>
<span class="quotelev1">&gt;             has been launched locally, a ps on the remote system shows
</span><br>
<span class="quotelev1">&gt;             a process
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 orted --daemonize -mca ess env -mca orte_ess_jobid
</span><br>
<span class="quotelev1">&gt;                 1187643392 -mca orte_ess_vpid 1 -mca
</span><br>
<span class="quotelev1">&gt;                 orte_ess_num_procs 2 --hnp-uri
</span><br>
<span class="quotelev1">&gt;                 1187643392.0;tcp://192.168.1.101:35272
</span><br>
<span class="quotelev1">&gt;                   
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              
</span><br>
<span class="quotelev1">&gt;               While I don't really understand the orted process, I
</span><br>
<span class="quotelev1">&gt;             assume this indicates that a command to execute an app has
</span><br>
<span class="quotelev1">&gt;             been received and that opmpi is trying to run it.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               I suspect that the problem is related to the '--hnp-uri
</span><br>
<span class="quotelev1">&gt;             ... tcp://192.168.1.101' argument.  192.168.1.101 is the
</span><br>
<span class="quotelev1">&gt;             address of my local system on my local network (attached
</span><br>
<span class="quotelev1">&gt;             to the router), which of course is not accessible over the
</span><br>
<span class="quotelev1">&gt;             net.  It appears that opmpi is transmitting the local
</span><br>
<span class="quotelev1">&gt;             (static) ip address to the remote host.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               It would help to know how opmpi determines and
</span><br>
<span class="quotelev1">&gt;             distributes IP addresses.  And if there's any way to
</span><br>
<span class="quotelev1">&gt;             control this.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               Any thoughts on dealing with this would be greatly
</span><br>
<span class="quotelev1">&gt;             appreciated.
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               Thanks,
</span><br>
<span class="quotelev1">&gt;               
</span><br>
<span class="quotelev1">&gt;               bw
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>In reply to:</strong> <a href="15645.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15648.php">Tena Sakai: "Re: [OMPI users] How are IP addresses determined?"</a>
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
