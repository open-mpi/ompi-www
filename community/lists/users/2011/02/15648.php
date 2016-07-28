<?
$subject_val = "Re: [OMPI users] How are IP addresses determined?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 03:38:41 2011" -->
<!-- isoreceived="20110218083841" -->
<!-- sent="Fri, 18 Feb 2011 00:38:28 -0800" -->
<!-- isosent="20110218083828" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are IP addresses determined?" -->
<!-- id="C9836ECC.E6EA%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="4D5DFBFE.9010900_at_norbl.com" -->
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
<strong>Date:</strong> 2011-02-18 03:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15646.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Barnet,
<br>
<p>Thank you for your post.
<br>
It was security group setting.  Here&#146;s my entry
<br>
<p>&nbsp;&nbsp;&nbsp;Connection Method    Protocol    From port    To port   Source (IP or group)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;All                                    tcp               0                  65535    intra
<br>
<p>I didn&#146;t want to use 0.0.0.0/0 for source.  What intra is the very name of this
<br>
security group and by having this field set as the name of the security group
<br>
it enables all instances belonging to this security group, intra, to communicate
<br>
with each other.
<br>
<p>I certainly didn&#146;t have OMPI_MCA_plm_rsh_agent variable set; nor have I touched
<br>
/etc/ssh/ssh_config file.  Just fixing the security group, all examples I have been using
<br>
&nbsp;started working.
<br>
<p>Obviously, I need to stury and experiment more with security group, not to mention
<br>
OpenMPI environment variables, but I am starting to see the light at the other end
<br>
of the tunnel.
<br>
<p>Thank you for sharing tips.
<br>
<p>Regards,
<br>
<p>Tena
<br>
<p><p>On 2/17/11 8:56 PM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt; wrote:
<br>
<p>&nbsp;&nbsp;Tena
<br>
<p>&nbsp;Earlier today I was able to successfully get a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
<br>
<p>&nbsp;configuration to work.  I haven't fully digested your &quot;this must be an ssh ... &quot; thread.  But here are few things that I found it
<br>
&nbsp;necessary to do, in order to get things working.
<br>
<p>&nbsp;(i) First and foremost is the ec2 security group.  The 'default' group will probably not work.  ompi randomly chooses ports. I think that some ranges are excluded, but I was too lazy to find out, so I just opened everything up, creating a group that includes the line
<br>
<p>&nbsp;Connection Method    Protocol    From port    To port   Source (IP or group)
<br>
&nbsp;&nbsp;All                              tcp             0                  65535   0.0.0.0/0
<br>
<p>&nbsp;Of course this could be insecure, depending how your instance is configured.  Since I have no services running except ssh, I'm don't foresee any problems.
<br>
<p>&nbsp;(ii) Since you have ssh working, this probably is irrelevant: by default when ompi uses ssh, it attempts to log into the remote host using the local user name, and will use the rsa file  $USER/.ssh/id_rsa. However, you can explicitly set these by specifying the ssh command in an MCA param, e.g.
<br>
<p>&nbsp;&nbsp;OMPI_MCA_plm_rsh_agent=&quot;ssh -i rsa_file -l ec2-user&quot;; export OMPI_MCA_plm_rsh_agent
<br>
<p>&nbsp;And the rsa file must have mode 600.
<br>
<p>&nbsp;(iii) To supress the ssh authenticity test, I added
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;UserKnownHostsFile /dev/null
<br>
&nbsp;&nbsp;&nbsp;&nbsp;StrictHostKeyChecking no
<br>
&nbsp;to /etc/ssh/ssh_config
<br>
<p>&nbsp;Hope one of these helps.
<br>
<p>&nbsp;bw
<br>
<p>&nbsp;On 2/17/11 6:11 PM, Tena Sakai wrote:
<br>
&nbsp;Re: [OMPI users] How are IP addresses determined? Hi Barnet,
<br>
<p><span class="quotelev1"> &gt; If I understand you correctly, the configuration you're trying to use Is
</span><br>
<span class="quotelev1"> &gt;  submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
</span><br>
<p>&nbsp;Correct.
<br>
<p><span class="quotelev1"> &gt; but have you tried using the public/external uri?
</span><br>
<p>&nbsp;I just did.  It didn&#146;t make a bit of difference.
<br>
&nbsp;I also tried IP addresses and that didn&#146;t get me anywhere either.
<br>
<p>&nbsp;Jeff earlier gave me steps to follow, which I am about to embark on.
<br>
&nbsp;May I suggest you follow a thread with heading &#147;This must be ssh
<br>
&nbsp;problem, but I can't figure out what it is...&#148;
<br>
<p>&nbsp;Regards,
<br>
<p>&nbsp;Tena
<br>
<p><p>&nbsp;On 2/17/11 10:05 AM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt; wrote:
<br>
<p><p>&nbsp;&nbsp;Tena,
<br>
<p>&nbsp;&nbsp;If I understand you correctly, the configuration you're trying to use is
<br>
<p><p>submission host[ec2 instance 0] &lt;-&gt; slave [ec2 instance 1]
<br>
<p><p>&nbsp;I haven't tried this yet (although I will in the next few days).
<br>
<p>&nbsp;&nbsp;I've tried
<br>
<p><p>(a)  submission host[non-ec2 system with static IP, direct net connection] &lt;-&gt; slave [ec2 instance 1]
<br>
&nbsp;&nbsp;(b)  submission host[non-ec2 system with local static IP, connected to net via router] &lt;-&gt; slave [ec2 instance 1]
<br>
<p><p>&nbsp;(a) works, (b) does not, presumably because opmpi does not support NAT (see Jeff Squyres comments, later in the thread).
<br>
<p><p>&nbsp;&nbsp;I notice that you're using the 'internal' uri to specify hostnames. This makes sense in principle, but have you tried using the public/external uri?  Presumably opmpi has to lookup these hostnames.  I don't know how that's done, but trying to lookup the internal uri might be a problem.
<br>
<p>&nbsp;&nbsp;If you try this (or anything else), I'd appreciate it if you'd post your results.
<br>
<p>&nbsp;&nbsp;bw
<br>
<p><p>&nbsp;&nbsp;On 2/17/11 4:08 AM, Tena Sakai wrote:
<br>
<p>&nbsp;Re: [OMPI users] How are IP addresses determined? Hi Barnet,
<br>
<p>&nbsp;&nbsp;Allow me to interject.
<br>
&nbsp;&nbsp;Are you saying that you run master on your local machine and launching openMPI process on EC2?  You are saying that 1) tcp port tcp://192.168.1.101:35272 is on your local system and 2) the ec2 instance is trying to connect your local machine&#146;s port 35272 , and hanging.  Is that correct?
<br>
<p>&nbsp;&nbsp;I have just a bit different situation.  I am running 2 ec2 instances and trying to run mpirun on both instances.  My ssh debug output looks quite similar to yours and mpirun behavior also very similar.  Here&#146;s what I captured:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Sending command:  orted --daemonize -mca ess env -mca orte_ess_jobid 1025769472 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri &quot;1025769472.0;tcp://10.118.23.4:60941&quot;
<br>
&nbsp;&nbsp;And here&#146;s what I did on the instance from which I issued mpirun:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ nslookup `hostname`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Server:         172.16.0.23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Address:        172.16.0.23#53
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Non-authoritative answer:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Name:   ip-10-118-23-4.ec2.internal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Address: 10.118.23.4
<br>
<p>&nbsp;&nbsp;So that tcp port does belong to this instance.  Furthermore, it cannot come into it.  No router (which may perform address translation?) is involved and it appears the same thing as what you describe is happening.  Incidentally, here&#146;s how I ran mpirun:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ mpirun -app app.ac
<br>
&nbsp;&nbsp;With app.ac file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;[tsakai_at_ip-10-118-23-4 ~]$ cat app.ac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H ip-10-118-23-4.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-H ip-10-118-18-172.ec2.internal -np 1 /bin/hostname
<br>
<p>&nbsp;&nbsp;The first two lines spawns /bin/hostname on this instance (ip-10-118-23-4.ec2.internal) and the bottom 2 lines on the remote instance.
<br>
&nbsp;&nbsp;Here&#146;s the security group used for these instances:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;connetion       protocol   from     to      source
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-------------        -----------   ------    -----   ------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;SSH                 tcp           22      22    0.0.0.0/0
<br>
<p>&nbsp;&nbsp;Am I making sense?
<br>
<p>&nbsp;&nbsp;Regards,
<br>
<p>&nbsp;&nbsp;Tena
<br>
<p><p><p><p>&nbsp;&nbsp;On 2/16/11 8:56 PM, &quot;Barnet Wagman&quot; &lt;bw_at_[hidden]&gt;  wrote:
<br>
<p><p><p>&nbsp;&nbsp;I've run into a problem involving accessing a remote host via a router and I think need to understand how opmpi determines ip addresses.  If there's anything posted on this subject, please point me to it.
<br>
<p>&nbsp;&nbsp;&nbsp;Here's the problem:
<br>
<p>&nbsp;&nbsp;&nbsp;I've installed opmpi (1.4.3) on a remote system (an Amazon ec2 instance).  If the local system I'm working on has a static ip address (and a direct connection to the internet), there's no problem.  But if the local system accesses the internet through a router (which itself gets it's ip via dhcp), a call to runmpi command hangs.
<br>
<p>&nbsp;&nbsp;&nbsp;This is not firewall problem - I've disabled the firewalls on all the system that are involved (and the router).
<br>
<p>&nbsp;&nbsp;&nbsp;It is also not an ssh problem.  The ssh connection is being made and it appears that the application has been launched on the remote system.  After the runmpi command has been launched locally, a ps on the remote system shows a process
<br>
<p><p><p>orted --daemonize -mca ess env -mca orte_ess_jobid 1187643392 -mca orte_ess_vpid 1 -mca orte_ess_num_procs 2 --hnp-uri 1187643392.0;tcp://192.168.1.101:35272
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;While I don't really understand the orted process, I assume this indicates that a command to execute an app has been received and that opmpi is trying to run it.
<br>
<p>&nbsp;&nbsp;&nbsp;I suspect that the problem is related to the '--hnp-uri ... tcp://192.168.1.101' argument.  192.168.1.101 is the address of my local system on my local network (attached to the router), which of course is not accessible over the net.  It appears that opmpi is transmitting the local (static) ip address to the remote host.
<br>
<p>&nbsp;&nbsp;&nbsp;It would help to know how opmpi determines and distributes IP addresses.  And if there's any way to control this.
<br>
<p>&nbsp;&nbsp;&nbsp;Any thoughts on dealing with this would be greatly appreciated.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
<p>&nbsp;&nbsp;&nbsp;bw
<br>
<p><p><p><p><p><p><p>&nbsp;_______________________________________________
<br>
&nbsp;users mailing list
<br>
&nbsp;users_at_[hidden]
<br>
&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15649.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15647.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15646.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
<li><strong>Reply:</strong> <a href="15654.php">Barnet Wagman: "Re: [OMPI users] How are IP addresses determined?"</a>
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
