<?
$subject_val = "Re: [OMPI users] OpenMPI Hangs, No Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 18:36:17 2010" -->
<!-- isoreceived="20100706223617" -->
<!-- sent="Wed, 7 Jul 2010 00:36:00 +0200" -->
<!-- isosent="20100706223600" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI Hangs, No Error" -->
<!-- id="43CAFA05-45B9-47B5-89AE-7D7AC75FD36F_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B03662F4-F338-4700-8214-0F02976B659C_at_open-mpi.org" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-06 18:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Previous message:</strong> <a href="13490.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 06.07.2010 um 23:31 schrieb Ralph Castain:
<br>
<p><span class="quotelev1">&gt; Problem isn't with ssh - the problem is that the daemons need to  
</span><br>
<span class="quotelev1">&gt; open a TCP connection back to the machine where mpirun is running.  
</span><br>
<span class="quotelev1">&gt; If the firewall blocks that connection, then we can't run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can get a range of ports opened, then you can specify the  
</span><br>
<span class="quotelev1">&gt; ports OMPI should use for this purpose. If the sysadmin won't allow  
</span><br>
<span class="quotelev1">&gt; even that, then you are pretty well hosed.
</span><br>
<p>Yes, often MPI takes place inside a cluster which is on a private  
<br>
subnet anyway, hence there are no security impacts at all. I have no  
<br>
firewalls on my cluster nodes (only on the headnode), as they are not  
<br>
connected to the outside world.
<br>
<p>But just for curiosity: at one point Open MPI chooses the ports. At  
<br>
that point it might possible to implement to start two SSH tunnels per  
<br>
slave node to have both directions and the daemons have to contact  
<br>
then &quot;localhost&quot; on a specific port which will be tunneled to each  
<br>
slave. In principle it should work I think, but it's just not  
<br>
implemented for now.
<br>
<p>Maybe it could be an addition to Open MPI for security concerned  
<br>
usage. I wonder about the speed impact, when compression is switched  
<br>
on per se in SSH in such a setup in case you transfer large amounts of  
<br>
data via Open MPI.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; On Jul 6, 2010, at 2:23 PM, Robert Walters wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, there is a system firewall. I don't think the sysadmin will  
</span><br>
<span class="quotelev2">&gt;&gt; allow it to go disabled. Each Linux machine has the built-in RHEL  
</span><br>
<span class="quotelev2">&gt;&gt; firewall. SSH is enabled through the firewall though.
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
<span class="quotelev2">&gt;&gt; It looks like the remote daemon is starting - is there a firewall  
</span><br>
<span class="quotelev2">&gt;&gt; in the way?
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
<span class="quotelev3">&gt;&gt;&gt; I am using OpenMPI 1.4.2 on RHEL. I have a cluster of AMD  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Opteron's and right now I am just working on getting OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; itself up and running. I have a successful configure and make all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install. LD_LIBRARY_PATH and PATH variables were correctly edited.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 hello_c successfully works on all machines. I have  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setup my two test machines with DSA key pairs that successfully  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work with each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem comes when I initiate my hostfile to attempt to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicate across machines. The hostfile is setup correctly with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;host_name&gt; &lt;slots&gt; &lt;max-slots&gt;. When running with all verbose  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options enabled &quot;mpirun --mca plm_base_verbose 99 --debug-daemons  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --mca btl_base_verbose 30 --mca oob_base_verbose 99 --mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pml_base_verbose 99 -hostfile hostfile -np 16 hello_c&quot; I receive  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following text output.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: Looking for plm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component rsh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component rsh has no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component rsh open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component slurm has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component slurm open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Query of component [rsh]  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set priority to 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Skipping component  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [slurm]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: close: component slurm closed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: Looking for oob  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: found loaded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component tcp has no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine1:03578] mca: base: components_open: component tcp open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on machine2- beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: Looking for oob  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: opening oob components
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: found loaded  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component tcp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: component tcp has no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; register function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [machine2:01962] mca: base: components_open: component tcp open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function successful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[1418,0],1] checking in as pid 1962 on host machine2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[1418,0],1] not using static ports
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this point the system hangs indefinitely. While running top on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machine2 terminal, I see several things come up briefly. These  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; items are: sshd (root), tcsh (myuser), orted (myuser), and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mcstransd (root). I was wondering if sshd needs to be initiated by  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myuser? It is currently turned off in sshd_config through UsePAM  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yes. This was setup by the sysadmin but it can be worked around if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is necessary.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So in summary, mpirun works on each machine individually, but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hangs when initiated through a hostfile or with the -host flag. ./ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure with defaults and --prefix. LD_LIBRARY_PATH and PATH set  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; up correctly. Any help is appreciated. Thanks!
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
<li><strong>Next message:</strong> <a href="13492.php">Saygin Arkan: "[OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Previous message:</strong> <a href="13490.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13488.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Reply:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
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
