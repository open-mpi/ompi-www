<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 18 16:41:56 2006" -->
<!-- isoreceived="20060118214156" -->
<!-- sent="Wed, 18 Jan 2006 13:41:03 -0800" -->
<!-- isosent="20060118214103" -->
<!-- name="Jean-Christophe Hugly" -->
<!-- email="jice_at_[hidden]" -->
<!-- subject="[O-MPI users] does btl_openib work ?" -->
<!-- id="1137620463.24430.35.camel_at_jhugly.pantasys.com" -->
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
<strong>From:</strong> Jean-Christophe Hugly (<em>jice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-18 16:41:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More info.
<br>
<p>Environment of remotely exec'ed progs (by running mpirun ... env):
<br>
==================================================================
<br>
<p>OMPI_MCA_rds_hostfile_path=/root/machines
<br>
SHELL=/bin/bash
<br>
SSH_CLIENT=10.1.40.61 42076 22
<br>
USER=root
<br>
LD_LIBRARY_PATH=/opt/ompi/lib:
<br>
LS_COLORS=
<br>
MAIL=/var/mail/root
<br>
PATH=/opt/ompi/bin:/usr/bin:/bin:/usr/sbin:/sbin
<br>
PWD=/root
<br>
LANG=en_US.UTF-8
<br>
SHLVL=1
<br>
HOME=/root
<br>
LS_OPTIONS=-a -N --color=none -T 0
<br>
LOGNAME=root
<br>
SSH_CONNECTION=10.1.40.61 42076 10.1.40.63 22
<br>
_=/opt/ompi/bin/orted
<br>
OMPI_MCA_universe=root_at_bench1:default-universe-10053
<br>
OMPI_MCA_ns_nds=env
<br>
OMPI_MCA_ns_nds_vpid_start=0
<br>
OMPI_MCA_ns_nds_num_procs=1
<br>
OMPI_MCA_mpi_paffinity_processor=0
<br>
OMPI_MCA_ns_replica_uri=0.0.0;tcp://10.1.40.61:33050
<br>
OMPI_MCA_gpr_replica_uri=0.0.0;tcp://10.1.40.61:33050
<br>
OMPI_MCA_orte_base_nodename=bench2
<br>
OMPI_MCA_ns_nds_cellid=0
<br>
OMPI_MCA_ns_nds_jobid=1
<br>
OMPI_MCA_ns_nds_vpid=0
<br>
<p>ulimits (by running mpirun ... sh -c &quot;ulimit -a&quot;):
<br>
==================================================
<br>
<p>core file size        (blocks, -c) 0
<br>
data seg size         (kbytes, -d) unlimited
<br>
file size             (blocks, -f) unlimited
<br>
max locked memory     (kbytes, -l) 1073741824
<br>
max memory size       (kbytes, -m) unlimited
<br>
open files                    (-n) 1024
<br>
pipe size          (512 bytes, -p) 8
<br>
stack size            (kbytes, -s) 8192
<br>
cpu time             (seconds, -t) unlimited
<br>
max user processes            (-u) 81920
<br>
virtual memory        (kbytes, -v) unlimited
<br>
<p>I forgot anything ?
<br>
<p><pre>
-- 
Jean-Christophe Hugly &lt;jice_at_[hidden]&gt;
PANTA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0511.php">Jeff Squyres: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0509.php">Jean-Christophe Hugly: "[O-MPI users] does btl_openib work ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
<li><strong>Reply:</strong> <a href="0512.php">Galen Shipman: "Re: [O-MPI users] does btl_openib work ?"</a>
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
