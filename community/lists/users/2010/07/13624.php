<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 13 14:22:21 2010" -->
<!-- isoreceived="20100713182221" -->
<!-- sent="Tue, 13 Jul 2010 11:22:15 -0700 (PDT)" -->
<!-- isosent="20100713182215" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="260580.63923.qm_at_web80804.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="97D75B7E-2FE6-4BCA-BAD8-3C9353806FE5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI Hangs, No Error<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-13 14:22:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI,
<br>
<p>Following up. The sysadmin opened ports for machine to machine communication and OpenMPI is running successfully with no errors in connectivity_c, hello_c, or ring_c. Since, I have started to implement our MPP software (finite element analysis) that we have, and upon running a simple, 1 core on machine1, 1 core on machine2, job, I notice it is considerably slower than a 2 core job on a single machine. 
<br>
<p>A quick look at top shows me kernel usage is almost twice what cpu usage is! On a 16 core job, (8 cores per node so 2 nodes total) test, OpenMPI was consuming ~65% of the cpu for kernel related items rather than number-crunching related items...Granted, we are running on GigE, but this is a finite element code we are running with no heavy data transfer within it. I'm looking into benchmarking tools, but my sysadmin is not very open to installing third party softwares. Do you have any suggestions for what I can use that would be &quot;big name&quot; or guaranteed safe tools I can use to figure out what's causing the hold up with all the kernel usage? I'm pretty sure its network traffic but I have no way of telling (as far as I know because I'm not a Linux whiz) with the standard tools in RHEL.
<br>
<p>Thanks for all the help! I'm glad to get it finally working and I think with a little tweaking it should be ready to go very soon.
<br>
<p>Regards,
<br>
Robert Walters
<br>
--- On Sat, 7/10/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Saturday, July 10, 2010, 4:37 PM
<br>
<p>The &quot;static ports&quot; flag means something different - it is used when the daemon is given a fixed port to use. In some installations, we lock every daemon to the same port number so that each daemon can compute exactly how to contact its peers (i.e., no contact info exchange required for wireup).
<br>
You have a &quot;fixed range&quot;, but not &quot;static port&quot;, scenario. Hence the message.
<br>
Let us know how it goes - I agree it sounds like something to discuss with the sysadmin.
<br>
<p>On Jul 10, 2010, at 1:47 PM, Robert Walters wrote:
<br>
I ran oob_tcp_verbose 99 and I am getting something interesting I never got before.
<br>
<p>[machine 2:22347] bind() failed: no port available in the range [60001-60016]
<br>
[machine 2:22347] mca_oob_tcp_init: unable to create IPv4 listen socket: Error
<br>
<p>I never got that error before we messed with the iptables but now I get that error... Very interesting, I will have to talk to my sysadmin again and make sure he opened the right ports on my two test machines. It looks as though there are no open ports. Another interesting thing is I see that the Daemon is still report:
<br>
<p>Daemon [[28845,0],1] checking in as pid 22347 on host machine 2
<br>
Daemon [[28845,0],1] not using static ports
<br>
<p>Which, I may be misunderstanding, should have been taken care of when I specified what ports to use. I am telling it a static set of ports... Anyhow, I will get with my
 sysadmin again and see what he says. At least OpenMPI is correctly interpreting the range. 
<br>
<p>Thanks for the help.
<br>
<p>--- On Sat, 7/10/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Saturday, July 10, 2010, 3:21 PM
<br>
<p>Are there multiple interfaces on your nodes? I'm wondering if we are using a different network than the one where you opened these ports.
<br>
You'll get quite a bit of output, but you can turn on debug output in the oob itself with -mca oob_tcp_verbose xx. The higher the number, the more you get.
<br>
<p>On Jul 10, 2010, at 11:14 AM, Robert Walters wrote:
<br>
Hello again,
<br>
<p>I believe my administrator has opened the ports I requested. The problem I am having now is that OpenMPI is not listening to my defined port assignments in openmpi-mca-params.conf (looks like permission 644 on those files should it be 755?)
<br>
<p>When I perform netstat -ltnup I see that orted is listening 14 processes in tcp but scaterred in the 26000ish port range when I specified 60001-60016 in the mca-params file. Is there a parameter I am missing? In any case I am still hanging as mentioned originally even with the port forwarding enabled and specifications in mca-param enabled. 
<br>
<p>Any other ideas on what might be causing the hang? Is there a more verbose mode I can employ to see more deeply into the issue? I have run --debug-daemons and --mca plm_base_verbose
 99.
<br>
<p>Thanks!
<br>
--- On Tue, 7/6/10, Robert Walters
 &lt;raw19896_at_[hidden]&gt; wrote:
<br>
<p>From: Robert Walters &lt;raw19896_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 5:41 PM
<br>
<p>Thanks for your expeditious responses, Ralph.
<br>
<p>Just to confirm with you, I should change openmpi-mca-params.conf to
 include:
<br>
<p>oob_tcp_port_min_v4 = (My minimum port in the range)
<br>
oob_tcp_port_range_v4 = (My port range)
<br>
btl_tcp_port_min_v4 = (My minimum port in the range)
<br>
btl_tcp_port_range_v4 = (My port range)
<br>
<p>correct?
<br>
<p>Also, for a cluster of around 32-64 processes (8 processors per node), how wide of a range will I require? I've noticed some entries in
 the mailing list suggesting you need a few to get started and then it opens as necessary. Will I be safe with 20 or should I go for 100? 
<br>
<p>Thanks again for all of your help!
<br>
<p>--- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From:
 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 5:31 PM
<br>
<p>Problem isn't with ssh - the problem is that the daemons need to open a TCP connection back to the machine where mpirun is running. If the firewall blocks that connection, then we can't run.
<br>
If you can get a range of ports opened, then you can specify the ports OMPI should use for this purpose. If the sysadmin won't allow even that, then you are pretty well hosed.
<br>
<p>On Jul 6, 2010, at 2:23 PM, Robert Walters wrote:
<br>
Yes, there is a system firewall. I don't think the sysadmin will allow it to go disabled. Each Linux machine
 has the built-in RHEL firewall. SSH is enabled through the firewall though.
<br>
<p>--- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI Hangs, No Error
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, July 6, 2010, 4:19 PM
<br>
<p>It looks like the remote daemon is starting - is there a firewall in the way?
<br>
On Jul 6, 2010, at 2:04 PM, Robert Walters
 wrote:
<br>
Hello all,
<br>
<p>I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and right now I am just working on getting OpenMPI itself up and running. I have a successful configure and make all install. LD_LIBRARY_PATH and PATH variables were correctly edited. mpirun -np 8 hello_c successfully works on all machines. I have setup my two test machines with DSA key pairs that successfully work with each other.
<br>
<p>The problem comes when I initiate my hostfile to attempt to communicate across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca
 pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive the following text
 output.
<br>
<p>[machine1:03578] mca: base: components_open: Looking for plm components
<br>
[machine1:03578] mca: base: components_open: opening plm components
<br>
[machine1:03578] mca: base: components_open: found loaded component rsh
<br>
[machine1:03578] mca: base: components_open: component rsh has no register function
<br>
[machine1:03578] mca: base: components_open: component rsh open function successful
<br>
[machine1:03578] mca: base: components_open: found loaded component slurm
<br>
[machine1:03578] mca: base: components_open: component slurm has no register function
<br>
[machine1:03578] mca: base: components_open: component slurm open function successful
<br>
[machine1:03578] mca:base:select: Auto-selecting plm components
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component [rsh]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Query of component [rsh] set priority to 10
<br>
[machine1:03578] mca:base:select:(&#160; plm) Querying component
 [slurm]
<br>
[machine1:03578] mca:base:select:(&#160; plm) Skipping component [slurm]. Query failed to return a module
<br>
[machine1:03578] mca:base:select:(&#160; plm) Selected component [rsh]
<br>
[machine1:03578] mca: base: close: component slurm closed
<br>
[machine1:03578] mca: base: close: unloading component slurm
<br>
[machine1:03578] mca: base: components_open: Looking for oob components
<br>
[machine1:03578] mca: base: components_open: opening oob components
<br>
[machine1:03578] mca: base: components_open: found loaded component tcp
<br>
[machine1:03578] mca: base: components_open: component tcp has no register function
<br>
[machine1:03578] mca: base: components_open: component tcp open function successful
<br>
Daemon was launched on machine2- beginning to initialize
<br>
[machine2:01962] mca: base: components_open: Looking for oob components
<br>
[machine2:01962] mca: base: components_open: opening oob components
<br>
[machine2:01962] mca: base: components_open:
 found loaded component tcp
<br>
[machine2:01962] mca: base: components_open: component tcp has no register function
<br>
[machine2:01962] mca: base: components_open: component tcp open function successful
<br>
Daemon [[1418,0],1] checking in as pid 1962 on host machine2
<br>
Daemon [[1418,0],1] not using static ports
<br>
<p>At this point the system hangs indefinitely. While running top on the machine2 terminal, I see several things come up briefly. These items are: sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was wondering if sshd needs to be initiated by myuser? It is currently turned off in sshd_config through UsePAM yes. This was setup by the sysadmin but it can be worked around if this is necessary.
<br>
<p>So in summary, mpirun works on each machine individually, but hangs when initiated through a hostfile or with the -host flag. ./configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help is
 appreciated. Thanks!
<br>
<p><p><p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13624/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13625.php">Rolf vandeVaart: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>Previous message:</strong> <a href="13623.php">Eloi Gaudry: "Re: [OMPI users] [openib] segfault when using openib btl"</a>
<li><strong>In reply to:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13626.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
