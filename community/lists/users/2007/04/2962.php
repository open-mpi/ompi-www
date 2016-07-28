<?
$subject_val = "[OMPI users] Torque/OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 09:16:26 2007" -->
<!-- isoreceived="20070401131626" -->
<!-- sent="Sun, 1 Apr 2007 14:16:09 +0100" -->
<!-- isosent="20070401131609" -->
<!-- name="Barry Evans" -->
<!-- email="bevans_at_[hidden]" -->
<!-- subject="[OMPI users] Torque/OpenMPI" -->
<!-- id="191EB8BA1D4E4F4F932AFC4DDE49A05A12E72C_at_mailserver.ocf.co.uk" -->
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
<strong>From:</strong> Barry Evans (<em>bevans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 09:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="../../2007/03/2961.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>Having a bit of trouble running Open MPI 1.2 under Torque 2.1.8. 
<br>
<p>&nbsp;
<br>
<p>My Script contains the following:
<br>
<p>-----------------------------------------------
<br>
<p>HPCC_HOME=/home/test/hpcc-1.0.0
<br>
<p>ncpus=`wc -l $PBS_NODEFILE`
<br>
<p>mpirun -np $ncpus $HPCC_HOME/hpcc
<br>
<p>-----------------------------------------------
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>When I try to run on 4 nodes, 4 cpus each I receive the following in my
<br>
err file:
<br>
<p>&nbsp;
<br>
<p>[node003:04409] [0,0,4] ORTE_ERROR_LOG: Not found in file
<br>
odls_default_module.c at line 1188
<br>
<p>[node008:06691] [0,0,1] ORTE_ERROR_LOG: Not found in file
<br>
odls_default_module.c at line 1188
<br>
<p>[node007:04352] [0,0,2] ORTE_ERROR_LOG: Not found in file
<br>
odls_default_module.c at line 1188
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
Failed to find or execute the following executable:
 
Host:       node007
Executable: /var/spool/torque/aux//350.wc01
 
Cannot continue.
------------------------------------------------------------------------
--
[no---------------------------------------------------------------------
-----
Failed to find or execute the following executable:
 
Host:       node004
Executable: /var/spool/torque/aux//350.wc01
 
Cannot continue.
------------------------------------------------------------------------
--
de004:04364] [0,0,3] ORTE_ERROR_LOG: Not found in file
odls_default_module.c at line 1188
------------------------------------------------------------------------
--
Failed to find or execute the following executable:
 
Host:       node003
Executable: /var/spool/torque/aux//350.wc01
 
Cannot continue.
------------------------------------------------------------------------
--
------------------------------------------------------------------------
--
Failed to find or execute the following executable:
 
Host:       node008
Executable: /var/spool/torque/aux//350.wc01
 
Cannot continue.
------------------------------------------------------------------------
--
[node007:04352] [0,0,2] ORTE_ERROR_LOG: Not found in file orted.c at
line 588
[node008:06691] [0,0,1] ORTE_ERROR_LOG: Not found in file orted.c at
line 588
[node004:04364] [0,0,3] ORTE_ERROR_LOG: Not found in file orted.c at
line 588
[node003:04409] [0,0,4] ORTE_ERROR_LOG: Not found in file orted.c at
line 588
 
 
Has anyone seen this before? It seems odd that openmpi would be trying
to execute what is effectively the host file. I stuck a sleep in to make
sure the file was being distributed, and sure enough, it was there. I am
able to run mvapich through torque without issue and openmpi from the
command line. 
 
Cheers,
Barry Evans
Technical Manager
OCF plc
+44 (0)7970 148 121
bevans_at_[hidden]          
 
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-2962/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="../../2007/03/2961.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
<li><strong>Reply:</strong> <a href="2963.php">Tim Prins: "Re: [OMPI users] Torque/OpenMPI"</a>
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
