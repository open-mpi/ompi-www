<?
$subject_val = "[OMPI users] Segmentation fault error with IB support when number of processes is greater 129";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 10 04:25:34 2013" -->
<!-- isoreceived="20130310082534" -->
<!-- sent="Sun, 10 Mar 2013 11:25:30 +0300" -->
<!-- isosent="20130310082530" -->
<!-- name="Svyatoslav Korneev" -->
<!-- email="svyatoslav.korneev_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault error with IB support when number of processes is greater 129" -->
<!-- id="CA+jNUxYY2N8uzUhiVJyxAy7iqLH4RMbMEgQeq_Bg2xqXu+t3WA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault error with IB support when number of processes is greater 129<br>
<strong>From:</strong> Svyatoslav Korneev (<em>svyatoslav.korneev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-10 04:25:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Previous message:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Reply:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Reply:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Community,
<br>
<p>I have 4 computing nodes and front-end. Computing nodes connected via
<br>
IB and Ethernet and fron-end has Ethernet only. Computing node has 4
<br>
CPU on board, each CPU has 16 cores, total number of cores per node is
<br>
64. The IB network controller is Mellanox MT26428, IB switch is Qlogic
<br>
12000. I installed Rock Cluster Linux 6.1 on my cluster, and this
<br>
system has OpenMPI from the box. ompi_info gives the version of OpenMP
<br>
is 1.6.2
<br>
<p>Good news that IB and OpendMPI with IB support working from the box,
<br>
but I face a really strange bug. If I try to run HelloWord on more
<br>
then 129 processes with IB support it gives me Segmentation fault
<br>
error. I have this error even if I try to start it on one node. Below
<br>
129 processes everything is working fine, on 1 node or on 4 nodes
<br>
except warning messages (listing bellow). Without IB support
<br>
everything working fine on arbitrary number of processes.
<br>
<p>Anybody have an idea regarding my issue?
<br>
<p>Thank you.
<br>
<p><p>Warning messages for HelloWord, running on two processes (each process
<br>
per node):
<br>
<p>&nbsp;mpirun --mca btl_openib_verbose 1 --mca btl ^tcp -hostfile
<br>
machinefile -n 2 a.out
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x0000, part ID 0
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: default
<br>
--------------------------------------------------------------------------
<br>
WARNING: There are more than one active ports on host
<br>
'compute-0-0.local', but the
<br>
default subnet GID prefix was detected on more than one of these
<br>
ports.  If these ports are connected to different physical IB
<br>
networks, this configuration will fail in Open MPI.  This version of
<br>
Open MPI requires that every physically separate IB subnet that is
<br>
used between connected MPI processes must have different subnet ID
<br>
values.
<br>
<p>Please see this FAQ entry for more details:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www.open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_default_gid_prefix to 0.
<br>
--------------------------------------------------------------------------
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x0000, part ID 0
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: default
<br>
--------------------------------------------------------------------------
<br>
WARNING: Failed to open &quot;OpenIB-cma-1&quot; [DAT_INVALID_ADDRESS:].
<br>
This may be a real error or it may be an invalid entry in the uDAPL
<br>
Registry which is contained in the dat.conf file. Contact your local
<br>
System Administrator to confirm the availability of the interfaces in
<br>
the dat.conf file.
<br>
--------------------------------------------------------------------------
<br>
compute-0-0.local:20229:  open_hca: getaddr_netdev ERROR: Success. Is
<br>
ib1 configured?
<br>
compute-0-0.local:20229:  open_hca: device mthca0 not found
<br>
compute-0-0.local:20229:  open_hca: device mthca0 not found
<br>
compute-0-1.local:58701:  open_hca: getaddr_netdev ERROR: Success. Is
<br>
ib1 configured?
<br>
compute-0-1.local:58701:  open_hca: device mthca0 not found
<br>
compute-0-1.local:58701:  open_hca: device mthca0 not found
<br>
DAT: library load failure: libdaplscm.so.2: cannot open shared object
<br>
file: No such file or directory
<br>
DAT: library load failure: libdaplscm.so.2: cannot open shared object
<br>
file: No such file or directory
<br>
DAT: library load failure: libdaplscm.so.2: cannot open shared object
<br>
file: No such file or directory
<br>
DAT: library load failure: libdaplscm.so.2: cannot open shared object
<br>
file: No such file or directory
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.  This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p><p>See this Open MPI FAQ item for more information on these Linux kernel module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              compute-0-0.local
<br>
&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;Total memory:            262125 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
--------------------------------------------------------------------------
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-0.local][[43740,1],0][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:166:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 26428
<br>
[compute-0-1.local][[43740,1],1][btl_openib_ini.c:185:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Hermon
<br>
Hello world from process 0 of 2
<br>
Hello world from process 1 of 2
<br>
[compute-0-0.local:20227] 1 more process has sent help message
<br>
help-mpi-btl-openib.txt / default subnet prefix
<br>
[compute-0-0.local:20227] Set MCA parameter &quot;orte_base_help_aggregate&quot;
<br>
to 0 to see all help / error messages
<br>
[compute-0-0.local:20227] 9 more processes have sent help message
<br>
help-mpi-btl-udapl.txt / dat_ia_open fail
<br>
[compute-0-0.local:20227] 3 more processes have sent help message
<br>
help-mpi-btl-openib.txt / reg mem limit low
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Previous message:</strong> <a href="21514.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Reply:</strong> <a href="21516.php">devendra rai: "[OMPI users] Anyone has OpenMPI Logo (Vector Graphics only)"</a>
<li><strong>Reply:</strong> <a href="21518.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault error with IB support when number of processes is greater 129"</a>
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
