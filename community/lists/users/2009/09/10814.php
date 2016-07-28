<?
$subject_val = "Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 09:42:52 2009" -->
<!-- isoreceived="20090929134252" -->
<!-- sent="Tue, 29 Sep 2009 07:42:37 -0600" -->
<!-- isosent="20090929134237" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;Failed to find the	followingexecutable&amp;quot;	problemunder Torque" -->
<!-- id="E9F276A0010AF44ABD2C03ED2EDAE7DB06484582_at_HDXMSPB.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EE410100-42A6-4A55-8820-0448C114964C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;Failed to find the	followingexecutable&quot;	problemunder Torque<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 09:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You know, it was a while back for me, too.  It's possible I ended up using a system call to launch mpirun in 1.2.2 and just remembered that I had it working in the past. 
<br>
<p>Thanks for your help.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 29, 2009 8:20 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;
</span><br>
<span class="quotelev1">&gt; problemunder Torque
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2009, at 12:17 PM, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   Command:  ['mpirun', '--prefix /usr/mpi/intel/openmpi-1.2.8', '-np
</span><br>
<span class="quotelev2">&gt; &gt; 8', '--mca btl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, yes, this would definitely be a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; whereas if I take the additional step of removing spaces from the
</span><br>
<span class="quotelev2">&gt; &gt; arguments, it works:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Command:  ['mpirun', '--prefix', '/usr/mpi/intel/openmpi-1.2.8',
</span><br>
<span class="quotelev2">&gt; &gt; '--machinefile', '/var/spool/torque/aux/7854.fwnaeglingio', '-np',
</span><br>
<span class="quotelev2">&gt; &gt; '8', '--mca', 'btl', '^tcp', '--mca', 'mpi_leave_pinned', '1', '--
</span><br>
<span class="quotelev2">&gt; &gt; mca', 'mpool_base_use_mem_hooks', '1', '-x', 'LD_LIBRARY_PATH', '-
</span><br>
<span class="quotelev2">&gt; &gt; x', 'MPI_ENVIRONMENT=1', '/tmp/7854.fwnaeglingio/
</span><br>
<span class="quotelev2">&gt; &gt; falconv4_ibm_openmpi', '-cycles', '10', '-ri', 'restart.5010', '-
</span><br>
<span class="quotelev2">&gt; &gt; ro', '/tmp/7854.fwnaeglingio/restart.5010']
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somehow the handling of the argv list by orterun has changed in
</span><br>
<span class="quotelev2">&gt; &gt; 1.2.8 as compared to 1.2.2-1, as the spawned command used to execute
</span><br>
<span class="quotelev2">&gt; &gt; just fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm guessing the elements in argv used to be split on spaces first,
</span><br>
<span class="quotelev2">&gt; &gt; before being parsed, whereas now they are not, resulting in the
</span><br>
<span class="quotelev2">&gt; &gt; first string being reported as an unrecognized option.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think we've changed that level of command line parsing in a
</span><br>
<span class="quotelev1">&gt; long, long time, but then again 1.2.2 is a pretty long time ago.  So I
</span><br>
<span class="quotelev1">&gt; guess it's possible...?  (I honestly don't remember)
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
<li><strong>Next message:</strong> <a href="10815.php">worldeb_at_[hidden]: "Re: [OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10813.php">Jeff Squyres: "Re: [OMPI users] problem using openmpi with DMTCP"</a>
<li><strong>In reply to:</strong> <a href="10812.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the followingexecutable&quot;	problemunder Torque"</a>
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
