<?
$subject_val = "Re: [OMPI users] openmpi query";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 10:39:44 2014" -->
<!-- isoreceived="20140404143944" -->
<!-- sent="Fri, 4 Apr 2014 16:39:32 +0200" -->
<!-- isosent="20140404143932" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi query" -->
<!-- id="35D0A36D-D7B3-487E-8E45-4954EADD8FFA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A84631D5-280E-4E35-80C6-C728E743DA33_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi query<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-04 10:39:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24053.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24049.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 04.04.2014 um 05:55 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; On Apr 3, 2014, at 8:03 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thankyou Ralph.
</span><br>
<span class="quotelev2">&gt;&gt; Yes cluster is heterogenous...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And did you configure OMPI --enable-heterogeneous? And are you running it with ---hetero-nodes? What version of OMPI are you using anyway?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that we don't care if the host pc's are hetero - what we care about is the VM. If all the VMs are the same, then it shouldn't matter. However, most VM technologies don't handle hetero hardware very well - i.e., you can't emulate an x86 architecture on top of a Sparc or Power chip or vice versa.
</span><br>
<p>Well - you have to emulate the CPU. There were products running a virtual x86 PC on a Mac with PowerPC chip. And IBM has a product called PowerVM Lx86 to run software compiled for Linux x86 directly on a PowerLinux machine.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; And i haven't made compute nodes on direct physical nodes (pc's) becoz in college it is not possible to take whole lab of 32 pc's for your work  so i ran on vm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, but at least it would let you test the setup to run MPI across even a couple of pc's - this is simple debugging practice.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In Rocks cluster, frontend give the same kickstart to all the pc's so openmpi version should be same i guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guess? or know? Makes a difference - might be worth testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sir 
</span><br>
<span class="quotelev2">&gt;&gt; mpiformatdb is a command to distribute database fragments to different compute nodes after partitioning od database.
</span><br>
<span class="quotelev2">&gt;&gt; And sir have you done mpiblast ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope - but that isn't the issue, is it? The issue is with the MPI setup.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 4, 2014 at 4:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What is &quot;mpiformatdb&quot;? We don't have an MPI database in our system, and I have no idea what that command means
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As for that error - it means that the identifier we exchange between processes is failing to be recognized. This could mean a couple of things:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. the OMPI version on the two ends is different - could be you aren't getting the right paths set on the various machines
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. the cluster is heterogeneous
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You say you have &quot;virtual nodes&quot; running on various PC's? That would be an unusual setup - VM's can be problematic given the way they handle TCP connections, so that might be another source of the problem if my understanding of your setup is correct. Have you tried running this across the PCs directly - i.e., without any VMs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2014, at 10:13 AM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran command :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o output.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to run for other but with no  results even after 2 hours lapsed.....on rocks 6.0 cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb ram to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:41 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i also made machine file which contain ip adresses of all compute nodes + .ncbirc file for path to mpiblast and shared ,local storage path....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sir
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran the same command of mpirun on my college supercomputer 8 nodes each having 24 processors but it just running....gave no result uptill 3 hours...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Apr 3, 2014 at 10:39 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i first formatted my database with mpiformatdb command then i ran command :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 64 -machinefile mf mpiblast -d all.fas -p blastn -i query.fas -o output.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but then it gave this error 113 from some hosts and continue to run for other but with results even after 2 hours lapsed.....on rocks 6.0 cluster with 12 virtual nodes on pc's ...2 on each using virt-manger , 1 gb ram to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Apr 3, 2014 at 8:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having trouble understanding your note, so perhaps I am getting this wrong. Let's see if I can figure out what you said:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * your perl command fails with &quot;no route to host&quot; - but I don't see any host in your cmd. Maybe I'm just missing something.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * you tried running a couple of &quot;mpirun&quot;, but the mpirun command wasn't recognized? Is that correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * you then ran mpiblast and it sounds like it successfully started the processes, but then one aborted? Was there an error message beyond just the -1 return status?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 2, 2014, at 11:17 PM, Nisha Dhankher -M.Tech(CSE) &lt;nishadhankher-coaeseeit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error btl_tcp_endpint.c: 638 connection failed due to error 113
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In openmpi: this error came when i run my mpiblast program on rocks cluster.Connect to hosts failed on ip 10.1.255.236,10.1.255.244 . And when i run following command linux_shell$ perl -e 'die$!=113' this msg comes: &quot;No route to host at -e line 1.&quot; shell$ mpirun --mca btl ^tcp shell$ mpirun --mca btl_tcp_if_include eth1,eth2 shell$ mpirun --mca btl_tcp_if_include 10.1.255.244 was also executed but it did nt recognized these commands....nd aborted.... what should i do...? When i run my mpiblast program for the frst time then it give mpi_abort error...bailing out of signal -1 on rank 2 processor...then i removed my public ethernet cable....and then give btl_tcp endpint error 113....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Previous message:</strong> <a href="24053.php">Nisha Dhankher -M.Tech(CSE): "Re: [OMPI users] openmpi query"</a>
<li><strong>In reply to:</strong> <a href="24049.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
<li><strong>Reply:</strong> <a href="24055.php">Ralph Castain: "Re: [OMPI users] openmpi query"</a>
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
