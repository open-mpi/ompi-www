<?
$subject_val = "[OMPI devel] When libltdl is not your friend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 21:35:21 2015" -->
<!-- isoreceived="20150203023521" -->
<!-- sent="Mon, 2 Feb 2015 18:35:19 -0800" -->
<!-- isosent="20150203023519" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] When libltdl is not your friend" -->
<!-- id="CAAvDA173j71mZuSOs=GJm89-PnDybMKf86W+nsjBZGx6_iYVZQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] When libltdl is not your friend<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 21:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Previous message:</strong> <a href="16895.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Reply:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Below is one example of what happens when you assume that you can trust the
<br>
libltdl installed an otherwise very well maintained national center.  I
<br>
think this is another &quot;vote&quot; for continuing to embed (a working) libltdl.
<br>
<p>-Paul
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] mca: base: component_find: unable to open
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default:
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default.so:
<br>
failed to map segment from shared object: Cannot allocate memory (ignored)
<br>
[cvrsvc03:25777] [[22934,0],0] ORTE_ERROR_LOG: Not found in file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/openmpi-gitclone/orte/mca/ess/hnp/ess_hnp_module.c
<br>
at line 583
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;orte_odls_base_select failed
<br>
&nbsp;&nbsp;--&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16896/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Previous message:</strong> <a href="16895.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Reply:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
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
