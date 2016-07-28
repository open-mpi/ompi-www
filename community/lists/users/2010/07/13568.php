<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 15:21:13 2010" -->
<!-- isoreceived="20100710192113" -->
<!-- sent="Sat, 10 Jul 2010 13:21:02 -0600" -->
<!-- isosent="20100710192102" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="27004F2F-3792-44FB-88BE-E73712B0BB94_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="738119.84745.qm_at_web80803.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 15:21:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are there multiple interfaces on your nodes? I'm wondering if we are using a different network than the one where you opened these ports.
<br>
<p>You'll get quite a bit of output, but you can turn on debug output in the oob itself with -mca oob_tcp_verbose xx. The higher the number, the more you get.
<br>
<p><p>On Jul 10, 2010, at 11:14 AM, Robert Walters wrote:
<br>
<p><span class="quotelev1">&gt; Hello again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe my administrator has opened the ports I requested. The problem I am having now is that OpenMPI is not listening to my defined port assignments in openmpi-mca-params.conf (looks like permission 644 on those files should it be 755?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I perform netstat -ltnup I see that orted is listening 14 processes in tcp but scaterred in the 26000ish port range when I specified 60001-60016 in the mca-params file. Is there a parameter I am missing? In any case I am still hanging as mentioned originally even with the port forwarding enabled and specifications in mca-param enabled. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any other ideas on what might be causing the hang? Is there a more verbose mode I can employ to see more deeply into the issue? I have run --debug-daemons and --mca plm_base_verbose 99.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; --- On Tue, 7/6/10, Robert Walters &lt;raw19896_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Robert Walters &lt;raw19896_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 6, 2010, 5:41 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your expeditious responses, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to confirm with you, I should change openmpi-mca-params.conf to include:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; oob_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_min_v4 = (My minimum port in the range)
</span><br>
<span class="quotelev1">&gt; btl_tcp_port_range_v4 = (My port range)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, for a cluster of around 32-64 processes (8 processors per node), how wide of a range will I require? I've noticed some entries in the mailing list suggesting you need a few to get started and then it opens as necessary. Will I be safe with 20 or should I go for 100? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again for all of your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, July 6, 2010, 5:31 PM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem isn't with ssh - the problem is that the daemons need to open a TCP connection back to the machine where mpirun is running. If the firewall blocks that connection, then we can't run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can get a range of ports opened, then you can specify the ports OMPI should use for this purpose. If the sysadmin won't allow even that, then you are pretty well hosed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2010, at 2:23 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, there is a system firewall. I don't think the sysadmin will allow it to go disabled. Each Linux machine has the built-in RHEL firewall. SSH is enabled through the firewall though.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --- On Tue, 7/6/10, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI Hangs, No Error
</span><br>
<span class="quotelev2">&gt;&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tuesday, July 6, 2010, 4:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like the remote daemon is starting - is there a firewall in the way?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 6, 2010, at 2:04 PM, Robert Walters wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD Opteron's and right now I am just working on getting OpenMPI itself up and running. I have a successful configure and make all install. LD_LIBRARY_PATH and PATH variables were correctly edited. mpirun -np 8 hello_c successfully works on all machines. I have setup my two test machines with DSA key pairs that successfully work with each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem comes when I initiate my hostfile to attempt to communicate across machines. The hostfile is setup correctly with &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive the following text output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on machine2- beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: Looking for oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: component tcp has no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[1418,0],1] checking in as pid 1962 on host machine2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[1418,0],1] not using static ports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point the system hangs indefinitely. While running top on the machine2 terminal, I see several things come up briefly. These items are: sshd (root), tcsh (myuser), orted (myuser), and mcstransd (root). I was wondering if sshd needs to be initiated by myuser? It is currently turned off in sshd_config through UsePAM yes. This was setup by the sysadmin but it can be worked around if this is necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So in summary, mpirun works on each machine individually, but hangs when initiated through a hostfile or with the -host flag. ./configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set up correctly. Any help is appreciated. Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13568/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13567.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13569.php">Robert Walters: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
