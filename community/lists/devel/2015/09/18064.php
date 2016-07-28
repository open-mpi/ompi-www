<?
$subject_val = "[OMPI devel] regression running mpi applications with dvm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 14:30:11 2015" -->
<!-- isoreceived="20150917183011" -->
<!-- sent="Thu, 17 Sep 2015 20:30:08 +0200" -->
<!-- isosent="20150917183008" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="[OMPI devel] regression running mpi applications with dvm" -->
<!-- id="8BC6DE35-EC9E-4337-BDC3-B426B1404CB7_at_rutgers.edu" -->
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
<strong>Subject:</strong> [OMPI devel] regression running mpi applications with dvm<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 14:30:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi (Ralph),
<br>
<p>Over the last months I have been focussing on exec throughput, and not so much on the application payload (read: mainly using /bin/sleep ;-)
<br>
As things are stabilising now, I returned my attention to &quot;real&quot; applications.
<br>
To discover that launching MPI applications (build with the same Open MPI version) within a DVM doesn't work anymore (see error below).
<br>
<p>I've been doing a binary search, but that turned out to be not so trivial because of other problems in the window of the change.
<br>
So far I've narrowed it down to:
<br>
<p>64ec498 - mar 5 - works on my laptop (but not on the Crays)
<br>
b67b361 - mar 28 - works once per DVM launch on my laptop, but consecutive orte-submits get a connect error
<br>
b209c9e - March 30 - same MPI_Init issue as HEAD
<br>
<p>Going further into mid-March I run into build issues with verb, runtime issues with default binding complaining about missing libnumactl, runtime tcp oob errors, etc.
<br>
So I don't know whether the binary search will yield much more than I was able to dig up now.
<br>
<p>What can I do to get closer to debugging the actual issue?
<br>
<p>Thanks!
<br>
<p>Mark
<br>
<p><p>OMPI_PREFIX=/Users/mark/proj/openmpi/installed/HEAD
<br>
OMPI_MCA_orte_hnp_uri=723386368.0;usock;tcp://192.168.0.103:56672
<br>
OMPI_MCA_ess=tool
<br>
[netbook:70703] Job [11038,3] has launched
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;ompi_mpi_init: ompi_rte_init failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;(null)&quot; (-43) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
<br>
***    and potentially your MPI job)
<br>
[netbook:70704] Local abort before MPI_INIT completed completed successfully, but am not able to aggregate error messages, and not able to guarantee that all other processes were killed!
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Previous message:</strong> <a href="18063.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
<li><strong>Reply:</strong> <a href="18065.php">Ralph Castain: "Re: [OMPI devel] regression running mpi applications with dvm"</a>
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
