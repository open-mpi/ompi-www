<?
$subject_val = "Re: [OMPI devel] When libltdl is not your friend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  2 22:21:30 2015" -->
<!-- isoreceived="20150203032130" -->
<!-- sent="Mon, 2 Feb 2015 19:21:27 -0800" -->
<!-- isosent="20150203032127" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] When libltdl is not your friend" -->
<!-- id="CAAvDA15eKE5SYTJafyAK0Udg=nBC-pXuAXObBvtSSuMKGZmjLQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17xRAPPBkQ2eS5_G95-1g4VSPe+iea_BfjH=x-7WZKJ5A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-02-02 22:21:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16902.php">Paul Hargrove: "[OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Previous message:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>In reply to:</strong> <a href="16898.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like I was too quick to blame libltdl.
<br>
A build of the current 'master' tarball on the same system and identical
<br>
configure arguments fails as seen below.
<br>
<p>While the failure is not identical, it is also a out-of-memory error.
<br>
I am currently assuming that an rlimit has been lowered on this system
<br>
since the last time I tested there (1.8.4rc5, I believe).
<br>
<p>-Paul
<br>
<p>--------------------------------------------------------------------------
<br>
A system call failed during shared memory initialization that should
<br>
not have.  It is likely that your MPI job will now either abort or
<br>
experience performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  cvrsvc03
<br>
&nbsp;&nbsp;System call: mmap(2)
<br>
&nbsp;&nbsp;Error:       Cannot allocate memory (errno 12)
<br>
--------------------------------------------------------------------------
<br>
[cvrsvc03:19412] create_and_attach: unable to create shared memory BTL
<br>
coordinating structure :: size 134217728
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[30315,1],0]) is on host: cvrsvc03
<br>
&nbsp;&nbsp;Process 2 ([[30315,1],1]) is on host: cvrsvc03
<br>
&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
<p>On Mon, Feb 2, 2015 at 7:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Howard,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was seen on NERSC's Carver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Feb 2, 2015 at 6:49 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Paul,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for checking in depth into this.  Just to help in determining how
</span><br>
<span class="quotelev2">&gt;&gt; to proceed, which national center is this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015-02-02 19:35 GMT-07:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Below is one example of what happens when you assume that you can trust
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the libltdl installed an otherwise very well maintained national center.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think this is another &quot;vote&quot; for continuing to embed (a working) libltdl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/class/infiniband_verbs/uverbs2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/class/infiniband_verbs/uverbs1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_loadleveler.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_simulator.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_slurm.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_ras_tm.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_lama.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_mindist.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_ppr.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_rank_file.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_resilient.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_round_robin.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_seq.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_rmaps_staged.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] mca: base: component_find: unable to open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_odls_default.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed to map segment from shared object: Cannot allocate memory (ignored)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [cvrsvc03:25777] [[22934,0],0] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-libltdl-linux-x86_64-icc-11.1/openmpi-gitclone/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at line 583
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI developer):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   orte_odls_base_select failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   --&gt; Returned value Not found (-13) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16896.php">http://www.open-mpi.org/community/lists/devel/2015/02/16896.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/16897.php">http://www.open-mpi.org/community/lists/devel/2015/02/16897.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16902.php">Paul Hargrove: "[OMPI devel] Master assert failure on Linux/PPC64"</a>
<li><strong>Previous message:</strong> <a href="16900.php">Paul Hargrove: "[OMPI devel] Master failure building oshmem java examples"</a>
<li><strong>In reply to:</strong> <a href="16898.php">Paul Hargrove: "Re: [OMPI devel] When libltdl is not your friend"</a>
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
