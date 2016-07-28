<?
$subject_val = "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 26 09:23:40 2009" -->
<!-- isoreceived="20090926132340" -->
<!-- sent="Sat, 26 Sep 2009 09:23:35 -0400" -->
<!-- isosent="20090926132335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Failed to find the following executable&amp;quot; problemunder Torque" -->
<!-- id="8BC549E9-1D12-4A93-9127-8E359CBFC3D8_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB06373435_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-26 09:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2009, at 7:55 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m having a problem running OpenMPI under Torque.  It complains  
</span><br>
<span class="quotelev1">&gt; like there is a command syntax problem, but the three variations  
</span><br>
<span class="quotelev1">&gt; below are all correct, best I can tell using mpirun &#150;help.  The  
</span><br>
<span class="quotelev1">&gt; environment in which the command executes, i.e. PATH and  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, is correct.  Torque is 2.3.x.  OpenMPI is 1.2.8.   
</span><br>
<span class="quotelev1">&gt; OFED is 1.4.
</span><br>
<p>Is your mpirun a script, perchance?  It's almost like the arguments  
<br>
that end up being passed are getting munged / re-ordered, and Bad  
<br>
Things happen such that the real mpirun under the covers gets confused.
<br>
<p><span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.2.8/bin/mpirun -np 28 /tmp/43.fwnaeglingio/ 
</span><br>
<span class="quotelev1">&gt; falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/ 
</span><br>
<span class="quotelev1">&gt; 43.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       n8n26
</span><br>
<span class="quotelev1">&gt; Executable: -p
</span><br>
<p>I don't even see -p in that argument list.  Where is it coming from?
<br>
<p>A little background: OMPI's mpirun analyzes the command line tokens  
<br>
that are passed to it.  The first one that it doesn't recognize, it  
<br>
assumes is the executable to invoke.  In this case, OMPI's mpirun  
<br>
found a &quot;-p&quot; on the command line (not sure how that happened; perhaps / 
<br>
usr/mpi/intel/openmpi-1.2.8/bin/mpirun is not actually OMPI's mpirun,  
<br>
as I mentioned above...?) and tried to execute it.  But then there was  
<br>
no executable named &quot;-p&quot; to be found in the filesystem, then OMPI  
<br>
printed the error.
<br>
<p><span class="quotelev1">&gt; mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/ 
</span><br>
<span class="quotelev1">&gt; spool/torque/aux/45.fwnaeglingio -np 28 --mca btl ^tcp  --mca  
</span><br>
<span class="quotelev1">&gt; mpi_leave_pinned 1 --mca mpool_base_use_mem_hooks 1 -x  
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH -x MPI_ENVIRONMENT /tmp/45.fwnaeglingio/ 
</span><br>
<span class="quotelev1">&gt; falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/ 
</span><br>
<span class="quotelev1">&gt; 45.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       n8n27
</span><br>
<span class="quotelev1">&gt; Executable: --prefix /usr/mpi/intel/openmpi-1.2.8
</span><br>
<p>Ditto on this one.  --prefix is a valid mpirun command line argument,  
<br>
so it should not have complained.
<br>
<p>But then again, I confess to not remembering all the 1.2.x command  
<br>
line options; I don't remember if --prefix was introduced in the 1.2  
<br>
or 1.3 series...
<br>
<p><span class="quotelev1">&gt; /usr/mpi/intel/openmpi-1.2.8/bin/mpirun -x LD_LIBRARY_PATH -x  
</span><br>
<span class="quotelev1">&gt; MPI_ENVIRONMENT=1 /tmp/47.fwnaeglingio/falconv4_ibm_openmpi -cycles  
</span><br>
<span class="quotelev1">&gt; 100 -ri restart.0 -ro /tmp/47.fwnaeglingio/restart.0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       n8n27
</span><br>
<span class="quotelev1">&gt; Executable: -
</span><br>
<p><p>Ditto to #1.
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
<li><strong>Next message:</strong> <a href="10773.php">Jeff Squyres: "Re: [OMPI users] segfault on finalize"</a>
<li><strong>Previous message:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10765.php">Blosch, Edwin L: "[OMPI users] &quot;Failed to find the following executable&quot; problem under Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10799.php">Blosch, Edwin L: "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque"</a>
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
