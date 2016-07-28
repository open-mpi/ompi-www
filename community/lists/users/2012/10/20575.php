<?
$subject_val = "Re: [OMPI users] openmpi shared memory feature";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 29 11:31:30 2012" -->
<!-- isoreceived="20121029153130" -->
<!-- sent="Mon, 29 Oct 2012 11:31:24 -0400" -->
<!-- isosent="20121029153124" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi shared memory feature" -->
<!-- id="FE3F8CCB-DEB8-4BC6-8C44-38176720AAF3_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A7EEF5ED-5103-444D-B7AD-2101E1983717_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi shared memory feature<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-29 11:31:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 29, 2012, at 11:01 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Wow, that would make no sense at all. If P1 and P2 are on the same node, then we will use shared memory to do the transfer, as Jeff described. However, if you disable shared memory, as you indicated you were doing on a previous message (by adding -mca btl ^sm), then we would use a loopback device if available - i.e., the packet would be handed to the network stack, which would then return it to P2 without it ever leaving the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there is no loopback device, and you disable shared memory, then we would abort the job with an error as there is no way for P1 to communicate with P2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We would never do what you describe.
</span><br>
<p>To be clear: it would probably be a good idea to have *some* tmpfs on your diskless node.  Some things should simply not be on a network filesystem (e.g., /tmp).  Google around; there are good reasons for having a small tmpfs, even on a diskless server.
<br>
<p>Indeed, Open MPI will warn you if it ends up putting a shared memory &quot;file&quot; (which, as I described, isn't really a file) on a network filesystem -- e.g., if /tmp is a network filesystem.  OMPI warns because corner cases can arise that cause performance degradation (e.g., the OS may periodically writing out the contents of shared memory to the network filesystem).
<br>
<p>But as Ralph says: Open MPI primarily uses shared memory when communicating with processes on the same server (unless you disable shared memory).  This means Open MPI copies message A from P1's address space to shared memory, and then P2 copies message A from shared memory to its address space.  Or, if you're using the Linux knem kernel module, MPI copies message A from P1's address space directly to P2's address space.  No network transfer occurs, unless you possibly have /tmp on a network filesystem, and/or no /dev/shm filesystem, or other corner cases like that.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20576.php">Damien: "Re: [OMPI users] OpenMPI on Windows when MPI_F77 is used from a C application"</a>
<li><strong>Previous message:</strong> <a href="20574.php">Ralph Castain: "Re: [OMPI users] open mpi 1.6 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="20573.php">Ralph Castain: "Re: [OMPI users] openmpi shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20608.php">Mahmood Naderan: "Re: [OMPI users] openmpi shared memory feature"</a>
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
