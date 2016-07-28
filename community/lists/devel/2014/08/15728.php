<?
$subject_val = "Re: [OMPI devel] Intermittent MPI issues with torque/maui";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 21:09:28 2014" -->
<!-- isoreceived="20140827010928" -->
<!-- sent="Tue, 26 Aug 2014 21:09:25 -0400" -->
<!-- isosent="20140827010925" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent MPI issues with torque/maui" -->
<!-- id="20140826210925.067ba797_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07DFCEE3-6678-4100-9E7F-A48BF0C68160_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent MPI issues with torque/maui<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 21:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p><span class="quotelev1">&gt; I don't know what version of OMPI you're working with, so I can't
</span><br>
<span class="quotelev1">&gt; precisely pinpoint the line in question. However, it looks likely to
</span><br>
<span class="quotelev1">&gt; be an error caused by not finding the PBS nodefile.
</span><br>
<p>This is openmpi 1.6.5.
<br>
<p><span class="quotelev1">&gt; We look in the environment for PBS_NODEFILE to find the directory
</span><br>
<span class="quotelev1">&gt; where the file should be found, and then look for a file named with
</span><br>
<span class="quotelev1">&gt; our Torque-assigned jobid in that place. The open failure indicates
</span><br>
<span class="quotelev1">&gt; that it isn't there or isn't readable by us.
</span><br>
<p>Does that mean that I misunderstand the --with-libpci switch for hwloc
<br>
and --enable-cpuset for torque? I had thought that this eliminates the
<br>
need for $PBS_NODEFILE.
<br>
<p><span class="quotelev1">&gt; If you are on a network file system, then it's possible that Torque
</span><br>
<span class="quotelev1">&gt; is creating the file on your server, but the compute node just isn't
</span><br>
<span class="quotelev1">&gt; seeing it fast enough. You might look at potential NFS setup switches
</span><br>
<span class="quotelev1">&gt; to speed-up the sync.
</span><br>
<p>Indeed the compute nodes are NFS-mounted. I'll take a look at sync
<br>
parameters. Thanks for the pointer.
<br>
<p>Cheers,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Previous message:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>In reply to:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15729.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
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
