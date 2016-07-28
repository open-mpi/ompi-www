<?
$subject_val = "Re: [OMPI devel] When libltdl is not your friend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:01:23 2015" -->
<!-- isoreceived="20150203030123" -->
<!-- sent="Mon, 2 Feb 2015 19:01:20 -0800" -->
<!-- isosent="20150203030120" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] When libltdl is not your friend" -->
<!-- id="CAAvDA17xRAPPBkQ2eS5_G95-1g4VSPe+iea_BfjH=x-7WZKJ5A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj6bpkXav21eSqxXfGsiLj=-ZCCordOtmH4femsTc381HA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] When libltdl is not your friend<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-02 22:01:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Previous message:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>In reply to:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Reply:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Howard,
<br>
<p>This was seen on NERSC's Carver.
<br>
<p>-Paul
<br>
<p>On Mon, Feb 2, 2015 at 6:49 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for checking in depth into this.  Just to help in determining how
</span><br>
<span class="quotelev1">&gt; to proceed, which national center is this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-02-02 19:35 GMT-07:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Below is one example of what happens when you assume that you can trust
</span><br>
<span class="quotelev2">&gt;&gt; the libltdl installed an otherwise very well maintained national center.  I
</span><br>
<span class="quotelev2">&gt;&gt; think this is another &quot;vote&quot; for continuing to embed (a working) libltdl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt;&gt; /sys/class/infiniband_verbs/uverbs2
</span><br>
<span class="quotelev2">&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev2">&gt;&gt; /sys/class/infiniband_verbs/uverbs1
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default:
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default.so:
</span><br>
<span class="quotelev2">&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; [cvrsvc03:25777] [[22934,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev2">&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/openmpi-gitclone/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt; at line 583
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   orte_odls_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16896.php">http://www.open-mpi.org/community/lists/devel/2015/02/16896.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16897.php">http://www.open-mpi.org/community/lists/devel/2015/02/16897.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16898/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16899.php">Paul Hargrove: "[OMPI devel] Master build failure on Mac OS 10.8 with --enable-static/--disable-shared"</a>
<li><strong>Previous message:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>In reply to:</strong> <a href="16897.php">Howard Pritchard: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<li><strong>Reply:</strong> <a href="16901.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
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
