<?
$subject_val = "Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct  3 07:08:32 2009" -->
<!-- isoreceived="20091003110832" -->
<!-- sent="Sat, 3 Oct 2009 07:08:25 -0400" -->
<!-- isosent="20091003110825" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?" -->
<!-- id="AD5C0C35-EDF4-4C9F-9CE1-6C7F29569714_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB06558975_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Are there ways to reduce the memory used by OpenMPI?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-03 07:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Previous message:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>In reply to:</strong> <a href="10861.php">Blosch, Edwin L: "[OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 1, 2009, at 2:56 PM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; Are there are tuning parameters than I can use to reduce the amount  
</span><br>
<span class="quotelev1">&gt; of memory used by OpenMPI?  I would very much like to use OpenMPI  
</span><br>
<span class="quotelev1">&gt; instead of MVAPICH, but I&#146;m on a cluster where memory usage is the  
</span><br>
<span class="quotelev1">&gt; most important consideration. Here are three results which capture  
</span><br>
<span class="quotelev1">&gt; the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the &#147;leave_pinned&#148; behavior turned on, I get good performance  
</span><br>
<span class="quotelev1">&gt; (19.528, lower is better)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile
</span><br>
<p>FWIW, there have been a lot of improvements in Open MPI since the 1.2  
<br>
series (including some memory reduction work) -- is it possible for  
<br>
you to upgrade to the latest 1.3 release?
<br>
<p><span class="quotelev1">&gt; /var/spool/torque/aux/7972.fwnaeglingio -np 28 --mca btl ^tcp  --mca  
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 --mca mpool_base_use_mem_hooks 1 -x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH -x MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/ 
</span><br>
<span class="quotelev1">&gt; falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/ 
</span><br>
<span class="quotelev1">&gt; 7972.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; Compute rate (processor-microseconds/cell/cycle):   19.528
</span><br>
<span class="quotelev1">&gt; Total memory usage:    38155.3477 MB (38.1553 GB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Turning off the leave_pinned behavior, I get considerably slower  
</span><br>
<span class="quotelev1">&gt; performance (28.788), but the memory usage is unchanged (still 38 GB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/ 
</span><br>
<span class="quotelev1">&gt; spool/torque/aux/7972.fwnaeglingio -np 28 -x LD_LIBRARY_PATH -x  
</span><br>
<span class="quotelev1">&gt; MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/falconv4_ibm_openmpi - 
</span><br>
<span class="quotelev1">&gt; cycles 100 -ri restart.0 -ro /tmp/7972.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; Compute rate (processor-microseconds/cell/cycle):   28.788
</span><br>
<span class="quotelev1">&gt; Total memory usage:    38335.7656 MB (38.3358 GB)
</span><br>
<p>I would guess that you are continually re-using the same communication  
<br>
buffers -- doing so will definitely be better with  
<br>
mpi_leave_pinned=1.  Note, too, that mpi_leave_pinned is on by default  
<br>
for OpenFabrics networks in the Open MPI 1.3 series.
<br>
<p><span class="quotelev1">&gt; Using MVAPICH, the performance is in the middle (23.6), but the  
</span><br>
<span class="quotelev1">&gt; memory usage is reduced by 5 to 6 GB out of 38 GB, a significant  
</span><br>
<span class="quotelev1">&gt; decrease to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/mpi/intel/mvapich-1.1.0/bin/mpirun_rsh -ssh -np 28 -hostfile / 
</span><br>
<span class="quotelev1">&gt; var/spool/torque/aux/7972.fwnaeglingio LD_LIBRARY_PATH=&quot;/usr/mpi/ 
</span><br>
<span class="quotelev1">&gt; intel/mvapich-1.1.0/lib/shared:/usr/mpi/intel/openmpi-1.2.8/lib64:/ 
</span><br>
<span class="quotelev1">&gt; appserv/intel/fce/10.1.008/lib:/appserv/intel/cce/10.1.008/lib&quot;  
</span><br>
<span class="quotelev1">&gt; MPI_ENVIRONMENT=1 /tmp/7972.fwnaeglingio/falconv4_ibm_mvapich - 
</span><br>
<span class="quotelev1">&gt; cycles 100 -ri restart.0 -ro /tmp/7972.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; Compute rate (processor-microseconds/cell/cycle):   23.608
</span><br>
<span class="quotelev1">&gt; Total memory usage:    32753.0586 MB (32.7531 GB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn&#146;t see anything in the FAQ that discusses memory usage other  
</span><br>
<span class="quotelev1">&gt; than the impact of the &#147;leave_pinned&#148; option, which apparently does  
</span><br>
<span class="quotelev1">&gt; not affect the memory usage in my case.  But I figure there must be  
</span><br>
<span class="quotelev1">&gt; a justification why OpenMPI would use 6 GB more than MVAPICH on the  
</span><br>
<span class="quotelev1">&gt; same case.
</span><br>
<p><p>Try the 1.3 series; we do have a bunch of knobs in there for memory  
<br>
usage -- there were significant changes/advancements in the 1.3 series  
<br>
with regards to how OpenFabrics buffers are registered.  Get a  
<br>
baseline on that memory usage, and then let's see what you want to do  
<br>
from there.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10879.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Previous message:</strong> <a href="10877.php">Jeff Squyres: "Re: [OMPI users] Is Iprobe fast when there is no message to recieve"</a>
<li><strong>In reply to:</strong> <a href="10861.php">Blosch, Edwin L: "[OMPI users] Are there ways to reduce the memory used by OpenMPI?"</a>
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
