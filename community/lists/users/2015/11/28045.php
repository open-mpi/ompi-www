<?
$subject_val = "Re: [OMPI users] Strange problem with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 18 00:15:46 2015" -->
<!-- isoreceived="20151118051546" -->
<!-- sent="Wed, 18 Nov 2015 14:15:43 +0900" -->
<!-- isosent="20151118051543" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with SSH" -->
<!-- id="564C097F.8020607_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="564BE30B.8090008_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange problem with SSH<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-18 00:15:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<li><strong>Previous message:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Federico,
<br>
<p>i made PR #772 <a href="https://github.com/open-mpi/ompi-release/pull/772">https://github.com/open-mpi/ompi-release/pull/772</a>
<br>
<p>feel free to manually patch your ompi install or use the workaround i 
<br>
previously described
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 11/18/2015 11:31 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the report, i will push a fix shortly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; meanwhile, and as a workaround, you can add the
</span><br>
<span class="quotelev1">&gt; --mca orte_keep_fqdn_hostnames true
</span><br>
<span class="quotelev1">&gt; to your mpirun command line when using --host user_at_ip
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/17/2015 7:19 PM, Federico Reghenzani wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to execute this command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /mpirun -np 8 --host openmpi_at_10.10.1.1 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:openmpi_at_10.10.1.1&gt;,openmpi_at_10.10.1.2,openmpi_at_10.10.1.3,openmpi_at_10.10.1.4 
</span><br>
<span class="quotelev2">&gt;&gt; --mca oob_tcp_if_exclude lo,wlp2s0 ompi_info
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Everything goes find if I execute the same command with only 2 nodes 
</span><br>
<span class="quotelev2">&gt;&gt; (independently of which nodes).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 3 or more nodes I obtain:
</span><br>
<span class="quotelev2">&gt;&gt; *ssh: connect to host 10 port 22: Invalid argument*
</span><br>
<span class="quotelev2">&gt;&gt; followed by &quot;ORTE was unable to reliably start one or more daemons.&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Searching with plm_base_verbose, I found:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],1]
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],1] to node openmpi_at_10.10.1.1 &lt;mailto:openmpi_at_10.10.1.1&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],2]
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],2] to node openmpi_at_10.10.1.2 &lt;mailto:openmpi_at_10.10.1.2&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],3]
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],3] to node openmpi_at_10.10.1.3 &lt;mailto:openmpi_at_10.10.1.3&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],4]
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],4] to node openmpi_at_10.10.1.4 &lt;mailto:openmpi_at_10.10.1.4&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.1 
</span><br>
<span class="quotelev2">&gt;&gt; to launch list
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.2 
</span><br>
<span class="quotelev2">&gt;&gt; to launch list
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 3 not a child of mine
</span><br>
<span class="quotelev2">&gt;&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.4 
</span><br>
<span class="quotelev2">&gt;&gt; to launch list
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: assuming same remote shell 
</span><br>
<span class="quotelev2">&gt;&gt; as local shell
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: final template argv:
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ssh &lt;template&gt;  orted --hnp-topo-sig 
</span><br>
<span class="quotelev2">&gt;&gt; 0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess &quot;env&quot; -mca orte_ess_jobid 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3520462848&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca orte_ess_num_procs 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;5&quot; -mca orte_parent_uri &quot;3520462848.1;tcp://10.10.1.1:35489 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://10.10.1.1:35489">http://10.10.1.1:35489</a>&gt;&quot; -mca orte_hnp_uri 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3520462848.0;tcp://10.10.10.2:43771 &lt;<a href="http://10.10.10.2:43771">http://10.10.10.2:43771</a>&gt;&quot; --mca 
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_exclude &quot;lo,wlp2s0&quot; --mca plm_base_verbose &quot;100&quot; -mca plm 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rsh&quot; --tree-spawn
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: activating launch event
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: recording launch of daemon 
</span><br>
<span class="quotelev2">&gt;&gt; [[53718,0],3]
</span><br>
<span class="quotelev2">&gt;&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: executing: (/usr/bin/ssh) 
</span><br>
<span class="quotelev2">&gt;&gt; [*/usr/bin/ssh openmpi_at_10  orted* --hnp-topo-sig 
</span><br>
<span class="quotelev2">&gt;&gt; 0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess &quot;env&quot; -mca orte_ess_jobid 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3520462848&quot; -mca orte_ess_vpid 3 -mca orte_ess_num_procs &quot;5&quot; -mca 
</span><br>
<span class="quotelev2">&gt;&gt; orte_parent_uri &quot;3520462848.1;tcp://10.10.1.1:35489 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://10.10.1.1:35489">http://10.10.1.1:35489</a>&gt;&quot; -mca orte_hnp_uri 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;3520462848.0;tcp://10.10.10.2:43771 &lt;<a href="http://10.10.10.2:43771">http://10.10.10.2:43771</a>&gt;&quot; --mca 
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_exclude &quot;lo,wlp2s0&quot; --mca plm_base_verbose &quot;100&quot; -mca plm 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;rsh&quot; --tree-spawn]
</span><br>
<span class="quotelev2">&gt;&gt; *ssh: connect to host 10 port 22: Invalid argument*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems it corrupts the ip address during remote spawn. Any idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (I'm using 1.10.0rc7 version)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Federico
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; __
</span><br>
<span class="quotelev2">&gt;&gt; Federico Reghenzani
</span><br>
<span class="quotelev2">&gt;&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/11/28042.php">http://www.open-mpi.org/community/lists/users/2015/11/28042.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28044.php">http://www.open-mpi.org/community/lists/users/2015/11/28044.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28045/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<li><strong>Previous message:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28054.php">Federico Reghenzani: "Re: [OMPI users] Strange problem with SSH"</a>
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
