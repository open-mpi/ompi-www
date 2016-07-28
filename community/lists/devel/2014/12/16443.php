<?
$subject_val = "[OMPI devel] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec  7 18:22:52 2014" -->
<!-- isoreceived="20141207232252" -->
<!-- sent="Mon, 8 Dec 2014 12:22:50 +1300" -->
<!-- isosent="20141207232250" -->
<!-- name="Kevin Buckley" -->
<!-- email="kevin.buckley.ecs.vuw.ac.nz_at_[hidden]" -->
<!-- subject="[OMPI devel] (no subject)" -->
<!-- id="CABwOO=ctaP7MdYZvDPbfuFSNQy4mWW2q2FxFkhRuM5bqR1261g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] (no subject)<br>
<strong>From:</strong> Kevin Buckley (<em>kevin.buckley.ecs.vuw.ac.nz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-07 18:22:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="16442.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Watcha,
<br>
<p>have recently come to install the PISM package on top of PETSc, which,
<br>
in turn is
<br>
built against OpenMPI 1.8.1 on our Science Faculty HPC Facility, which has SGI
<br>
C2112 compute nodes with 64GB RAM running on top of CentOS 6.
<br>
<p>In testing the PETSc deployment out and when running PISM itself, I am
<br>
seeing the
<br>
<p>&quot; ...OpenFabrics subsystem is configured to only allow registering
<br>
part of your physical
<br>
&nbsp;memory ...&quot;
<br>
<p>message telling me
<br>
<p>&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            524285 MiB
<br>
<p>Oh yeah, that's the 512GB big memory node, not a 64Gb compute node, which says
<br>
<p>&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            65534 MiB
<br>
<p>but still suggests a default  for allowing the use of 32GB.
<br>
<p>So, having followed my nose to the OpenMPI FAQ sections, and the Mellanox
<br>
community page,
<br>
<p><a href="http://community.mellanox.com/docs/DOC-1120">http://community.mellanox.com/docs/DOC-1120</a>
<br>
<p>which suggests the defaults for the two parameters in need of a tweak are
<br>
<p>log_num_mtt  20
<br>
log_mtts_per_seg 0
<br>
<p>I came to try and tweak  those Mellanox driver parameters.
<br>
<p>What I see on my compute nodes is
<br>
<p># cat /sys/module/mlx4_core/parameters/log_num_mtt
<br>
0
<br>
# cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
<br>
3
<br>
#
<br>
<p>so something that doesn't match the defaults the Mellanox page suggests
<br>
I should be seeing.
<br>
<p>Furthermore, having &quot;done the math&quot; and realised that I probably want
<br>
<p>log_num_mtt  22
<br>
log_mtts_per_seg 3
<br>
<p>to allow OpenMPI to use double the memory (128GB - because giving it 1 TB
<br>
on the big memory node seems excessive!) when I come to alter those values,
<br>
I can't seem to.
<br>
<p>Trying to add a module load option
<br>
<p>options mlx4_core log_num_mtt=22
<br>
<p>via modifying the file
<br>
<p>/etc/modprobe.d/mlx4.conf
<br>
<p>never sees that value honoured after a full node reboot.
<br>
<p>It also appears that the
<br>
<p>/sys/module/mlx4_core/parameters/
<br>
<p>are nearly all read-only, including the ones it's suggested that I tweak, vis:
<br>
<p># echo 22 &gt; /sys/module/mlx4_core/parameters/log_num_mtt
<br>
-bash: /sys/module/mlx4_core/parameters/log_num_mtt: Permission denied
<br>
#  ls -l /sys/module/mlx4_core/parameters/log_num_mtt
<br>
-r--r--r--. 1 root root 4096 Dec  5 13:08
<br>
/sys/module/mlx4_core/parameters/log_num_mtt
<br>
<p>so I'm getting the impression that the Mrellanox driver doesn't really want
<br>
the defaults altered ?
<br>
<p>OK, so if i can't tell my nodes to allow OpenMPI to use any more than 32GB,
<br>
how do I turn off the OpenMPI message that is telling me about it?
<br>
<p><p>Kevin M. Buckley
<br>
<p>eScience Consultant
<br>
School of Engineering and Computer Science
<br>
Victoria University of Wellington
<br>
New Zealand
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="16442.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="16444.php">Kevin Buckley: "Re: [OMPI devel] (no subject)"</a>
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
