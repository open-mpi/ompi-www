<?
$subject_val = "Re: [OMPI users] Strange problem with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 06:59:40 2015" -->
<!-- isoreceived="20151117115940" -->
<!-- sent="Tue, 17 Nov 2015 05:59:35 -0600" -->
<!-- isosent="20151117115935" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with SSH" -->
<!-- id="CAMD57oduWH5Ub8QcTk+01hOYQBuZ_F3PMU_=3g5F0J-uqb_jOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADf4hJJ9f16v_R+zXCaFU5EHPZWf6_pE1NJhocU4FiZzXdyVHg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-17 06:59:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can't check it this week due to the Supercomputing project. It looks like
<br>
you are feeding us a hostfile that contains userid and a hostname expressed
<br>
as an IP address. Can you convert the IP address to a name? I think that
<br>
might be a workaround until I can address it.
<br>
<p><p>On Tue, Nov 17, 2015 at 4:19 AM, Federico Reghenzani &lt;
<br>
federico1.reghenzani_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to execute this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 8 --host openmpi_at_10.10.1.1
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_at_10.10.1.1&gt;,openmpi_at_10.10.1.2 &lt;openmpi_at_10.10.1.2&gt;,openmpi_at_10.10.1.3
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_at_10.10.1.3&gt;,openmpi_at_10.10.1.4 &lt;openmpi_at_10.10.1.4&gt; --mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_exclude lo,wlp2s0 ompi_info*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything goes find if I execute the same command with only 2 nodes
</span><br>
<span class="quotelev1">&gt; (independently of which nodes).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 3 or more nodes I obtain:
</span><br>
<span class="quotelev1">&gt; *ssh: connect to host 10 port 22: Invalid argument*
</span><br>
<span class="quotelev1">&gt; followed by &quot;ORTE was unable to reliably start one or more daemons.&quot; error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching with plm_base_verbose, I found:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],1]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],1] to node openmpi_at_10.10.1.1
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],2]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],2] to node openmpi_at_10.10.1.2
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],3]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],3] to node openmpi_at_10.10.1.3
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],4]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],4] to node openmpi_at_10.10.1.4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.1 to
</span><br>
<span class="quotelev1">&gt; launch list
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.2 to
</span><br>
<span class="quotelev1">&gt; launch list
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 3 not a child of mine
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.4 to
</span><br>
<span class="quotelev1">&gt; launch list
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: remote spawn called
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: local shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: assuming same remote shell as
</span><br>
<span class="quotelev1">&gt; local shell
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: remote shell: 0 (bash)
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: final template argv:
</span><br>
<span class="quotelev1">&gt; /usr/bin/ssh &lt;template&gt;  orted --hnp-topo-sig
</span><br>
<span class="quotelev1">&gt; 0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess &quot;env&quot; -mca orte_ess_jobid
</span><br>
<span class="quotelev1">&gt; &quot;3520462848&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca orte_ess_num_procs &quot;5&quot;
</span><br>
<span class="quotelev1">&gt; -mca orte_parent_uri &quot;3520462848.1;tcp://10.10.1.1:35489&quot; -mca
</span><br>
<span class="quotelev1">&gt; orte_hnp_uri &quot;3520462848.0;tcp://10.10.10.2:43771&quot; --mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_exclude &quot;lo,wlp2s0&quot; --mca plm_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot;
</span><br>
<span class="quotelev1">&gt; --tree-spawn
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: activating launch event
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: recording launch of daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],3]
</span><br>
<span class="quotelev1">&gt; [roaster-vm1:00593] [[53718,0],1] plm:rsh: executing: (/usr/bin/ssh) [*/usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; openmpi_at_10  orted* --hnp-topo-sig 0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess
</span><br>
<span class="quotelev1">&gt; &quot;env&quot; -mca orte_ess_jobid &quot;3520462848&quot; -mca orte_ess_vpid 3 -mca
</span><br>
<span class="quotelev1">&gt; orte_ess_num_procs &quot;5&quot; -mca orte_parent_uri &quot;3520462848.1;tcp://
</span><br>
<span class="quotelev1">&gt; 10.10.1.1:35489&quot; -mca orte_hnp_uri &quot;3520462848.0;tcp://10.10.10.2:43771&quot;
</span><br>
<span class="quotelev1">&gt; --mca oob_tcp_if_exclude &quot;lo,wlp2s0&quot; --mca plm_base_verbose &quot;100&quot; -mca plm
</span><br>
<span class="quotelev1">&gt; &quot;rsh&quot; --tree-spawn]
</span><br>
<span class="quotelev1">&gt; *ssh: connect to host 10 port 22: Invalid argument*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems it corrupts the ip address during remote spawn. Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I'm using 1.10.0rc7 version)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Federico
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __
</span><br>
<span class="quotelev1">&gt; Federico Reghenzani
</span><br>
<span class="quotelev1">&gt; M.Eng. Student @ Politecnico di Milano
</span><br>
<span class="quotelev1">&gt; Computer Science and Engineering
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28042.php">http://www.open-mpi.org/community/lists/users/2015/11/28042.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<li><strong>In reply to:</strong> <a href="28042.php">Federico Reghenzani: "[OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
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
