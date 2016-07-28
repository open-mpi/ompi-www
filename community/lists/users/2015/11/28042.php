<?
$subject_val = "[OMPI users] Strange problem with SSH";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 05:19:19 2015" -->
<!-- isoreceived="20151117101919" -->
<!-- sent="Tue, 17 Nov 2015 11:19:11 +0100" -->
<!-- isosent="20151117101911" -->
<!-- name="Federico Reghenzani" -->
<!-- email="federico1.reghenzani_at_[hidden]" -->
<!-- subject="[OMPI users] Strange problem with SSH" -->
<!-- id="CADf4hJJ9f16v_R+zXCaFU5EHPZWf6_pE1NJhocU4FiZzXdyVHg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Strange problem with SSH<br>
<strong>From:</strong> Federico Reghenzani (<em>federico1.reghenzani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-17 05:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28041.php">Erik Schnetter: "[OMPI users] Maximum message size in OpenMPI 1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to execute this command:
<br>
<p><p>*mpirun -np 8 --host openmpi_at_10.10.1.1
<br>
&lt;openmpi_at_10.10.1.1&gt;,openmpi_at_10.10.1.2 &lt;openmpi_at_10.10.1.2&gt;,openmpi_at_10.10.1.3
<br>
&lt;openmpi_at_10.10.1.3&gt;,openmpi_at_10.10.1.4 &lt;openmpi_at_10.10.1.4&gt; --mca
<br>
oob_tcp_if_exclude lo,wlp2s0 ompi_info*
<br>
<p>Everything goes find if I execute the same command with only 2 nodes
<br>
(independently of which nodes).
<br>
<p>With 3 or more nodes I obtain:
<br>
*ssh: connect to host 10 port 22: Invalid argument*
<br>
followed by &quot;ORTE was unable to reliably start one or more daemons.&quot; error.
<br>
<p>Searching with plm_base_verbose, I found:
<br>
<p>...
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon [[53718,0],1]
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
<br>
[[53718,0],1] to node openmpi_at_10.10.1.1
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon [[53718,0],2]
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
<br>
[[53718,0],2] to node openmpi_at_10.10.1.2
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon [[53718,0],3]
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
<br>
[[53718,0],3] to node openmpi_at_10.10.1.3
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm add new daemon [[53718,0],4]
<br>
[Neptune:22627] [[53718,0],0] plm:base:setup_vm assigning new daemon
<br>
[[53718,0],4] to node openmpi_at_10.10.1.4
<br>
...
<br>
[Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 0 not a child of mine
<br>
[Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.1 to
<br>
launch list
<br>
[Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.2 to
<br>
launch list
<br>
[Neptune:22627] [[53718,0],0] plm:rsh:launch daemon 3 not a child of mine
<br>
[Neptune:22627] [[53718,0],0] plm:rsh: adding node openmpi_at_10.10.1.4 to
<br>
launch list
<br>
...
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: remote spawn called
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: local shell: 0 (bash)
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: assuming same remote shell as
<br>
local shell
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: remote shell: 0 (bash)
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: final template argv:
<br>
/usr/bin/ssh &lt;template&gt;  orted --hnp-topo-sig
<br>
0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess &quot;env&quot; -mca orte_ess_jobid
<br>
&quot;3520462848&quot; -mca orte_ess_vpid &quot;&lt;template&gt;&quot; -mca orte_ess_num_procs &quot;5&quot;
<br>
-mca orte_parent_uri &quot;3520462848.1;tcp://10.10.1.1:35489&quot; -mca orte_hnp_uri
<br>
&quot;3520462848.0;tcp://10.10.10.2:43771&quot; --mca oob_tcp_if_exclude &quot;lo,wlp2s0&quot;
<br>
--mca plm_base_verbose &quot;100&quot; -mca plm &quot;rsh&quot; --tree-spawn
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: activating launch event
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: recording launch of daemon
<br>
[[53718,0],3]
<br>
[roaster-vm1:00593] [[53718,0],1] plm:rsh: executing: (/usr/bin/ssh)
<br>
[*/usr/bin/ssh
<br>
openmpi_at_10  orted* --hnp-topo-sig 0N:1S:0L3:1L2:2L1:2C:2H:x86_64 -mca ess
<br>
&quot;env&quot; -mca orte_ess_jobid &quot;3520462848&quot; -mca orte_ess_vpid 3 -mca
<br>
orte_ess_num_procs &quot;5&quot; -mca orte_parent_uri &quot;3520462848.1;tcp://
<br>
10.10.1.1:35489&quot; -mca orte_hnp_uri &quot;3520462848.0;tcp://10.10.10.2:43771&quot;
<br>
--mca oob_tcp_if_exclude &quot;lo,wlp2s0&quot; --mca plm_base_verbose &quot;100&quot; -mca plm
<br>
&quot;rsh&quot; --tree-spawn]
<br>
*ssh: connect to host 10 port 22: Invalid argument*
<br>
<p>It seems it corrupts the ip address during remote spawn. Any idea?
<br>
<p>(I'm using 1.10.0rc7 version)
<br>
<p><p>Cheers,
<br>
Federico
<br>
<p>__
<br>
Federico Reghenzani
<br>
M.Eng. Student @ Politecnico di Milano
<br>
Computer Science and Engineering
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28042/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Previous message:</strong> <a href="28041.php">Erik Schnetter: "[OMPI users] Maximum message size in OpenMPI 1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28043.php">Ralph Castain: "Re: [OMPI users] Strange problem with SSH"</a>
<li><strong>Reply:</strong> <a href="28044.php">Gilles Gouaillardet: "Re: [OMPI users] Strange problem with SSH"</a>
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
