<?
$subject_val = "Re: [OMPI users] Torque/OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  1 09:49:44 2007" -->
<!-- isoreceived="20070401134944" -->
<!-- sent="Sun, 1 Apr 2007 09:49:42 -0400" -->
<!-- isosent="20070401134942" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Torque/OpenMPI" -->
<!-- id="DA566353-94E9-434D-8750-560F19E35BF2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="191EB8BA1D4E4F4F932AFC4DDE49A05A12E72C_at_mailserver.ocf.co.uk" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-01 09:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2964.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Previous message:</strong> <a href="2962.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2962.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Barry,
<br>
<p>The problem is the line:
<br>
ncpus=`wc -l $PBS_NODEFILE`
<br>
<p>wc will print out the file name after the count. So ncpus gets &quot;16 / 
<br>
var/spool/torque/aux//350.wc01&quot; and your mpirun command will look like:
<br>
mpirun -np 16 /var/spool/torque/aux//350.wc01 /home/test/hpcc-1.0.0/hpcc
<br>
<p>So mpirun will try to execute  /var/spool/torque/aux//350.wc01
<br>
<p>A solution to this is that Open MPI will run on every available slot  
<br>
if -np is not passed. So you could just use the script:
<br>
<p>HPCC_HOME=/home/test/hpcc-1.0.0
<br>
mpirun $HPCC_HOME/hpcc
<br>
<p>This will launch one process on every CPU reported by Torque.
<br>
<p>Alternatively, you could have wc read from stdin instead of from a file:
<br>
ncpus=`wc -l &lt; $PBS_NODEFILE`
<br>
<p>this will avoid the filename being printed.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>On Apr 1, 2007, at 9:16 AM, Barry Evans wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having a bit of trouble running Open MPI 1.2 under Torque 2.1.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My Script contains the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPCC_HOME=/home/test/hpcc-1.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ncpus=`wc -l $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np $ncpus $HPCC_HOME/hpcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I try to run on 4 nodes, 4 cpus each I receive the following  
</span><br>
<span class="quotelev1">&gt; in my err file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node003:04409] [0,0,4] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 1188
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node008:06691] [0,0,1] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 1188
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node007:04352] [0,0,2] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 1188
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: /var/spool/torque/aux//350.wc01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [no------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node004
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: /var/spool/torque/aux//350.wc01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; de004:04364] [0,0,3] ORTE_ERROR_LOG: Not found in file  
</span><br>
<span class="quotelev1">&gt; odls_default_module.c at line 1188
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: /var/spool/torque/aux//350.wc01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       node008
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: /var/spool/torque/aux//350.wc01
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node007:04352] [0,0,2] ORTE_ERROR_LOG: Not found in file orted.c  
</span><br>
<span class="quotelev1">&gt; at line 588
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node008:06691] [0,0,1] ORTE_ERROR_LOG: Not found in file orted.c  
</span><br>
<span class="quotelev1">&gt; at line 588
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node004:04364] [0,0,3] ORTE_ERROR_LOG: Not found in file orted.c  
</span><br>
<span class="quotelev1">&gt; at line 588
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node003:04409] [0,0,4] ORTE_ERROR_LOG: Not found in file orted.c  
</span><br>
<span class="quotelev1">&gt; at line 588
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone seen this before? It seems odd that openmpi would be  
</span><br>
<span class="quotelev1">&gt; trying to execute what is effectively the host file. I stuck a  
</span><br>
<span class="quotelev1">&gt; sleep in to make sure the file was being distributed, and sure  
</span><br>
<span class="quotelev1">&gt; enough, it was there. I am able to run mvapich through torque  
</span><br>
<span class="quotelev1">&gt; without issue and openmpi from the command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Barry Evans
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Technical Manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OCF plc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +44 (0)7970 148 121
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bevans_at_[hidden]
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2964.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Previous message:</strong> <a href="2962.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="2962.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
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
