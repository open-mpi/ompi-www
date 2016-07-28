<?
$subject_val = "Re: [OMPI devel] Intermittent MPI issues with torque/maui";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 22:00:34 2014" -->
<!-- isoreceived="20140827020034" -->
<!-- sent="Tue, 26 Aug 2014 18:59:56 -0700" -->
<!-- isosent="20140827015956" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent MPI issues with torque/maui" -->
<!-- id="DDD3DAD2-3656-40CF-A3CD-EF55E39256E1_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140826210925.067ba797_at_antares" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 21:59:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 26, 2014, at 6:09 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know what version of OMPI you're working with, so I can't
</span><br>
<span class="quotelev2">&gt;&gt; precisely pinpoint the line in question. However, it looks likely to
</span><br>
<span class="quotelev2">&gt;&gt; be an error caused by not finding the PBS nodefile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is openmpi 1.6.5.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We look in the environment for PBS_NODEFILE to find the directory
</span><br>
<span class="quotelev2">&gt;&gt; where the file should be found, and then look for a file named with
</span><br>
<span class="quotelev2">&gt;&gt; our Torque-assigned jobid in that place. The open failure indicates
</span><br>
<span class="quotelev2">&gt;&gt; that it isn't there or isn't readable by us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that mean that I misunderstand the --with-libpci switch for hwloc
</span><br>
<span class="quotelev1">&gt; and --enable-cpuset for torque? I had thought that this eliminates the
</span><br>
<span class="quotelev1">&gt; need for $PBS_NODEFILE.
</span><br>
<p>I'm afraid not - it has nothing to do with it. We need the nodefile to tell us what nodes were allocated for the job. The other switches can tell us which cores are available for our use on each of those nodes.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are on a network file system, then it's possible that Torque
</span><br>
<span class="quotelev2">&gt;&gt; is creating the file on your server, but the compute node just isn't
</span><br>
<span class="quotelev2">&gt;&gt; seeing it fast enough. You might look at potential NFS setup switches
</span><br>
<span class="quotelev2">&gt;&gt; to speed-up the sync.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed the compute nodes are NFS-mounted. I'll take a look at sync
</span><br>
<span class="quotelev1">&gt; parameters. Thanks for the pointer.
</span><br>
<p>I suspect this is the problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15728.php">http://www.open-mpi.org/community/lists/devel/2014/08/15728.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15730.php">George Bosilca: "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>In reply to:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
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
