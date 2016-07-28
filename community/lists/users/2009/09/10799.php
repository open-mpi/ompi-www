<?
$subject_val = "Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 12:17:53 2009" -->
<!-- isoreceived="20090928161753" -->
<!-- sent="Mon, 28 Sep 2009 10:17:41 -0600" -->
<!-- isosent="20090928161741" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Failed to find the following executable&amp;quot;	problemunder Torque" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB0641B191_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8BC549E9-1D12-4A93-9127-8E359CBFC3D8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Failed to find the following executable&quot;	problemunder Torque<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 12:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Previous message:</strong> <a href="10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply. I looked harder at the command invocation and I think I stumbled across an answer.  My actual mpirun command is invoked from a Python script using the subprocess module. When you create a subprocess, one of the options is &quot;shell&quot; and I had that set to False, causing the actual invocation to use spawn or exec (one of the variants) instead of system().
<br>
<p>When I pass down the argument list as follows, mpirun fails with &quot;cannot find executable named '--prefix /usr/mpi/intel/openmpi-1.2.8' &quot;
<br>
<p>&nbsp;&nbsp;Command:  ['mpirun', '--prefix /usr/mpi/intel/openmpi-1.2.8', '-np 8', '--mca btl ^tcp', ' --mca mpi_leave_pinned 1', '--mca mpool_base_use_mem_hooks 1', '-x LD_LIBRARY_PATH', '-x MPI_ENVIRONMENT=1', '/tmp/7852.fwnaeglingio/falconv4_ibm_openmpi', '-cycles', '10', '-ri', 'restart.5000', '-ro', '/tmp/7852.fwnaeglingio/restart.5000']
<br>
<p>whereas if I take the additional step of removing spaces from the arguments, it works:
<br>
<p>&nbsp;&nbsp;Command:  ['mpirun', '--prefix', '/usr/mpi/intel/openmpi-1.2.8', '--machinefile', '/var/spool/torque/aux/7854.fwnaeglingio', '-np', '8', '--mca', 'btl', '^tcp', '--mca', 'mpi_leave_pinned', '1', '--mca', 'mpool_base_use_mem_hooks', '1', '-x', 'LD_LIBRARY_PATH', '-x', 'MPI_ENVIRONMENT=1', '/tmp/7854.fwnaeglingio/falconv4_ibm_openmpi', '-cycles', '10', '-ri', 'restart.5010', '-ro', '/tmp/7854.fwnaeglingio/restart.5010']
<br>
<p><p>Somehow the handling of the argv list by orterun has changed in 1.2.8 as compared to 1.2.2-1, as the spawned command used to execute just fine.
<br>
<p>I'm guessing the elements in argv used to be split on spaces first, before being parsed, whereas now they are not, resulting in the first string being reported as an unrecognized option.
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, September 26, 2009 8:24 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] &quot;Failed to find the following executable&quot;
</span><br>
<span class="quotelev1">&gt; problemunder Torque
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2009, at 7:55 AM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm having a problem running OpenMPI under Torque.  It complains
</span><br>
<span class="quotelev2">&gt; &gt; like there is a command syntax problem, but the three variations
</span><br>
<span class="quotelev2">&gt; &gt; below are all correct, best I can tell using mpirun -help.  The
</span><br>
<span class="quotelev2">&gt; &gt; environment in which the command executes, i.e. PATH and
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH, is correct.  Torque is 2.3.x.  OpenMPI is 1.2.8.
</span><br>
<span class="quotelev2">&gt; &gt; OFED is 1.4.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is your mpirun a script, perchance?  It's almost like the arguments
</span><br>
<span class="quotelev1">&gt; that end up being passed are getting munged / re-ordered, and Bad
</span><br>
<span class="quotelev1">&gt; Things happen such that the real mpirun under the covers gets confused.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/intel/openmpi-1.2.8/bin/mpirun -np 28 /tmp/43.fwnaeglingio/
</span><br>
<span class="quotelev2">&gt; &gt; falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/
</span><br>
<span class="quotelev2">&gt; &gt; 43.fwnaeglingio/restart.0
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Host:       n8n26
</span><br>
<span class="quotelev2">&gt; &gt; Executable: -p
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't even see -p in that argument list.  Where is it coming from?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A little background: OMPI's mpirun analyzes the command line tokens
</span><br>
<span class="quotelev1">&gt; that are passed to it.  The first one that it doesn't recognize, it
</span><br>
<span class="quotelev1">&gt; assumes is the executable to invoke.  In this case, OMPI's mpirun
</span><br>
<span class="quotelev1">&gt; found a &quot;-p&quot; on the command line (not sure how that happened; perhaps /
</span><br>
<span class="quotelev1">&gt; usr/mpi/intel/openmpi-1.2.8/bin/mpirun is not actually OMPI's mpirun,
</span><br>
<span class="quotelev1">&gt; as I mentioned above...?) and tried to execute it.  But then there was
</span><br>
<span class="quotelev1">&gt; no executable named &quot;-p&quot; to be found in the filesystem, then OMPI
</span><br>
<span class="quotelev1">&gt; printed the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --prefix /usr/mpi/intel/openmpi-1.2.8 --machinefile /var/
</span><br>
<span class="quotelev2">&gt; &gt; spool/torque/aux/45.fwnaeglingio -np 28 --mca btl ^tcp  --mca
</span><br>
<span class="quotelev2">&gt; &gt; mpi_leave_pinned 1 --mca mpool_base_use_mem_hooks 1 -x
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH -x MPI_ENVIRONMENT /tmp/45.fwnaeglingio/
</span><br>
<span class="quotelev2">&gt; &gt; falconv4_ibm_openmpi -cycles 100 -ri restart.0 -ro /tmp/
</span><br>
<span class="quotelev2">&gt; &gt; 45.fwnaeglingio/restart.0
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Failed to find or execute the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Host:       n8n27
</span><br>
<span class="quotelev2">&gt; &gt; Executable: --prefix /usr/mpi/intel/openmpi-1.2.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ditto on this one.  --prefix is a valid mpirun command line argument,
</span><br>
<span class="quotelev1">&gt; so it should not have complained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then again, I confess to not remembering all the 1.2.x command
</span><br>
<span class="quotelev1">&gt; line options; I don't remember if --prefix was introduced in the 1.2
</span><br>
<span class="quotelev1">&gt; or 1.3 series...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/mpi/intel/openmpi-1.2.8/bin/mpirun -x LD_LIBRARY_PATH -x
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ENVIRONMENT=1 /tmp/47.fwnaeglingio/falconv4_ibm_openmpi -cycles
</span><br>
<span class="quotelev2">&gt; &gt; 100 -ri restart.0 -ro /tmp/47.fwnaeglingio/restart.0
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Failed to find the following executable:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Host:       n8n27
</span><br>
<span class="quotelev2">&gt; &gt; Executable: -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ditto to #1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>Previous message:</strong> <a href="10798.php">Kritiraj Sajadah: "[OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<li><strong>Reply:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
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
