<?
$subject_val = "[OMPI devel] Intermittent MPI issues with torque/maui";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 19:31:01 2014" -->
<!-- isoreceived="20140826233101" -->
<!-- sent="Tue, 26 Aug 2014 19:30:58 -0400" -->
<!-- isosent="20140826233058" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="[OMPI devel] Intermittent MPI issues with torque/maui" -->
<!-- id="20140826193058.21869634_at_antares" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Intermittent MPI issues with torque/maui<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 19:30:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I asked this question on the torque mailing list, and I found several
<br>
similar issues on the web, but no definitive solutions. When we run our
<br>
MPI programs via torque/maui, at random times, in ~50-70% of all cases,
<br>
the job will fail with the following error message:
<br>
<p>[node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 142
<br>
[node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 82
<br>
[node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 149
<br>
[node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 99
<br>
[node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 194
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
<br>
launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
<p>I compiled hwloc 1.9 with --with-libpci, torque with --enable-cpuset and
<br>
openmpi with --with-tm, so I thought (from the docs) that this should 
<br>
make torque and openmpi communicate seamlessly. Resubmitting the exact
<br>
same job will run the next time or the time after that. Adding sleep to
<br>
work around any race conditions did not help.
<br>
<p>Any ideas?
<br>
<p>Thanks,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>Previous message:</strong> <a href="15723.php">George Bosilca: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15726.php">Ralph Castain: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
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
