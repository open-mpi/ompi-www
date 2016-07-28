<?
$subject_val = "Re: [OMPI users] Strange problem with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 05:33:17 2015" -->
<!-- isoreceived="20151119103317" -->
<!-- sent="Thu, 19 Nov 2015 11:33:08 +0100" -->
<!-- isosent="20151119103308" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange problem with SSH" -->
<!-- id="CADf4hJKDSRvNKxziTJKJPWZqaw0q7VQZXsnwbe9DJEFOw8jkxg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="564C097F.8020607_at_rist.or.jp" -->
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
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-19 05:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28053.php">Nick Papior: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28045.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the fix,
<br>
I could have tried only today, I confirm it works with the patch and with
<br>
the mca option.
<br>
<p><p>Cheers,
<br>
Federico Reghenzani
<br>
<p>2015-11-18 6:15 GMT+01:00 Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Federico,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i made PR #772 <a href="https://github.com/open-mpi/ompi-release/pull/772">https://github.com/open-mpi/ompi-release/pull/772</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; feel free to manually patch your ompi install or use the workaround i
</span><br>
<span class="quotelev1">&gt; previously described
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/18/2015 11:31 AM, Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to execute this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 8 --host openmpi_at_10.10.1.1 &lt;openmpi_at_10.10.1.1&gt;,
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_at_10.10.1.2&gt;openmpi_at_10.10.1.2 &lt;openmpi_at_10.10.1.2&gt;,
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_at_10.10.1.3&gt;openmpi_at_10.10.1.3 &lt;openmpi_at_10.10.1.3&gt;,
</span><br>
<span class="quotelev1">&gt; &lt;openmpi_at_10.10.1.4&gt;openmpi_at_10.10.1.4 &lt;openmpi_at_10.10.1.4&gt; --mca
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_exclude lo,wlp2s0 ompi_info *
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
<span class="quotelev1">&gt; [[53718,0],1] to node &lt;openmpi_at_10.10.1.1&gt;openmpi_at_10.10.1.1
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],2]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],2] to node &lt;openmpi_at_10.10.1.2&gt;openmpi_at_10.10.1.2
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],3]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],3] to node &lt;openmpi_at_10.10.1.3&gt;openmpi_at_10.10.1.3
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],4]
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
</span><br>
<span class="quotelev1">&gt; [[53718,0],4] to node &lt;openmpi_at_10.10.1.4&gt;openmpi_at_10.10.1.4
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 0 not a child of mine
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node &lt;openmpi_at_10.10.1.1&gt;
</span><br>
<span class="quotelev1">&gt; openmpi_at_10.10.1.1 to launch list
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node &lt;openmpi_at_10.10.1.2&gt;
</span><br>
<span class="quotelev1">&gt; openmpi_at_10.10.1.2 to launch list
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 3 not a child of mine
</span><br>
<span class="quotelev1">&gt; [Neptune:22627] [[53718,0],0] plm:rsh: adding node &lt;openmpi_at_10.10.1.4&gt;
</span><br>
<span class="quotelev1">&gt; openmpi_at_10.10.1.4 to launch list
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28042.php">http://www.open-mpi.org/community/lists/users/2015/11/28042.php</a>
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28044.php">http://www.open-mpi.org/community/lists/users/2015/11/28044.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28045.php">http://www.open-mpi.org/community/lists/users/2015/11/28045.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28055.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28053.php">Nick Papior: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>In reply to:</strong> <a href="28045.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- nextthread="start" -->
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
