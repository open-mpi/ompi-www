<?
$subject_val = "[OMPI users] PBSPro/OpenMPI Errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 12:07:05 2009" -->
<!-- isoreceived="20090625160705" -->
<!-- sent="Thu, 25 Jun 2009 11:06:58 -0500" -->
<!-- isosent="20090625160658" -->
<!-- name="Robert Jackson" -->
<!-- email="rjackson_at_[hidden]" -->
<!-- subject="[OMPI users] PBSPro/OpenMPI Errors" -->
<!-- id="59F8E9364A4B184EA893B98611CFC88E097592F0_at_XMAIL.ds.utpa.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] PBSPro/OpenMPI Errors<br>
<strong>From:</strong> Robert Jackson (<em>rjackson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 12:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>Reply:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When using OpenMPI and nwchem standalone (mpirun --byslot --mca btl
<br>
self,sm,tcp --mca btl_base_verbose 30 --mca btl_tcp_if_exclude lo,eth1
<br>
$NWCHEM h2o.nw &gt; &amp; h2o.nwo.$$) the job runs fine.
<br>
<p>&nbsp;
<br>
<p>When running the same job via the PBSPro scheduler I get errors. The PBS
<br>
script is called nwrun and is run with the following command - qsub -V
<br>
-S /bin/bash ./nwrun.
<br>
<p>&nbsp;
<br>
<p>Nwrun listing:
<br>
<p>#!/bin/tcsh
<br>
<p>#PBS -N h2o
<br>
<p>#PBS -l select=4:ncpus=4:mpiprocs=4
<br>
<p>#PBS -l walltime=0:10:00
<br>
<p>#PBS -e .
<br>
<p>#PBS -j eo
<br>
<p>#PBS -k eo
<br>
<p>#
<br>
<p># set working directory
<br>
<p>set echo
<br>
<p>cd $PBS_O_WORKDIR
<br>
<p>#
<br>
<p># make sure that the proper mpirun is installed
<br>
<p>##module load hpc/openmpi-1.2.6-intel
<br>
<p>#
<br>
<p># load NWChem
<br>
<p>#module load hpc/nwchem-5.1
<br>
<p>setenv LD_LIBRARY_PATH
<br>
/share/apps/openmpi-1.2.6-intel/lib:/share/apps/intel/mkl/10.0.1.014/lib
<br>
/em64t:/s
<br>
<p>hare/apps/intel/cce/10.1.015/lib:/share/apps/intel/fce/10.1.015/lib
<br>
<p>setenv NWCHEM /share/apps/nwchem-5.1/bin/nwchem
<br>
<p>setenv PERMANENT_DIR $PBS_O_WORKDIR
<br>
<p>setenv SCRATCH_DIR $TMPDIR
<br>
<p>#
<br>
<p>setenv | grep LD_LIB
<br>
<p>which mpirun
<br>
<p>cat $PBS_NODEFILE
<br>
<p># run a parallel job
<br>
<p>mpirun --byslot --mca btl self,sm,tcp --mca btl_tcp_if_exclude lo,eth1
<br>
$NWCHEM h2o.nw &gt;&amp; h2o.nwo.$$
<br>
<p>exit
<br>
<p>&nbsp;
<br>
<p>Error listing from error file:
<br>
<p>ARMCI configured for 4 cluster nodes. Network protocol is 'TCP/IP
<br>
Sockets'.
<br>
<p>1:trying connect to host=compute-1-4.local, port=35506 t=5 111
<br>
<p>1:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>trying to connect:: Connection refused
<br>
<p>1:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>Last System Error Message from Task 1:: Connection refused
<br>
<p>[compute-1-4.local:04739] MPI_ABORT invoked on rank 1 in communicator
<br>
MPI_COMM_WORLD with errorcode -1
<br>
<p>3:trying connect to host=compute-1-4.local, port=35508 t=5 111
<br>
<p>trying to connect:: Connection refused
<br>
<p>3:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>Last System Error Message from Task 3:: Connection refused
<br>
<p>3:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>[compute-1-4.local:04741] MPI_ABORT invoked on rank 3 in communicator
<br>
MPI_COMM_WORLD with errorcode -1
<br>
<p>6:trying connect to host=compute-1-5.local, port=48920 t=5 111
<br>
<p>10:trying connect to host=compute-1-6.local, port=36350 t=5 111
<br>
<p>4:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>4:trying connect to host=compute-1-5.local, port=48918 t=5 111
<br>
<p>trying to connect:: Connection refused
<br>
<p>4:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>Last System Error Message from Task 4:: Connection refused
<br>
<p>5:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>5:trying connect to host=compute-1-5.local, port=48919 t=5 111
<br>
<p>trying to connect:: Connection refused
<br>
<p>5:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>Last System Error Message from Task 5:: Connection refused
<br>
<p>[compute-1-5.local:01175] MPI_ABORT invoked on rank 5 in communicator
<br>
MPI_COMM_WORLD with errorcode -1
<br>
<p>6:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>trying to connect:: Connection refused
<br>
<p>6:armci_CreateSocketAndConnect: connect failed: -1
<br>
<p>Last System Error Message from Task 6:: Connection refused
<br>
<p>&nbsp;
<br>
<p>Is anybody familiar with this error?
<br>
<p>&nbsp;
<br>
<p>Robert C. Jackson
<br>
<p>Software Systems Specialist III
<br>
<p>The University of Texas - Pan American
<br>
<p>1201 W. University Dr.
<br>
<p>Edinburg Texas 78539
<br>
<p>Academic Computing Department
<br>
<p>ASB 2.162E 
<br>
<p>956-381-2455 office 956-381-2355 fax
<br>
<p>email: rjackson_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9714.php">Jim Kress: "[OMPI users] Infiniband requirements"</a>
<li><strong>Previous message:</strong> <a href="9712.php">Jeff Squyres: "Re: [OMPI users] Shared Memory (SM) module andsharedcache	implications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
<li><strong>Reply:</strong> <a href="9741.php">Jeff Squyres: "Re: [OMPI users] PBSPro/OpenMPI Errors"</a>
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
