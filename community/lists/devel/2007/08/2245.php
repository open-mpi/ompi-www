<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 28 12:57:19 2007" -->
<!-- isoreceived="20070828165719" -->
<!-- sent="Tue, 28 Aug 2007 12:57:09 -0400" -->
<!-- isosent="20070828165709" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread model" -->
<!-- id="8CB68DDC-7D1D-4756-B7B3-522FFF70A8EF_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE52CCE1-0435-4946-8F37-61A02F241CA3_at_cisco.com" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-28 12:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2007, at 10:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 27, 2007, at 2:50 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Until now I haven't had to worry about the opal/orte thread model.
</span><br>
<span class="quotelev2">&gt;&gt; However, there are now people who would like to use ompi that has
</span><br>
<span class="quotelev2">&gt;&gt; been configured with --with-threads=posix and --with-enable-mpi-
</span><br>
<span class="quotelev2">&gt;&gt; threads. Can someone give me some pointers as to what I need to do in
</span><br>
<span class="quotelev2">&gt;&gt; order to make sure I don't violate any threading model?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this is *NOT* well tested.  There is work going on right
</span><br>
<span class="quotelev1">&gt; now to make the OMPI layer be able to support MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; (support was designed in from the beginning, but we haven't ever done
</span><br>
<span class="quotelev1">&gt; any kind of comprehensive testing/stressing of multi-thread support
</span><br>
<span class="quotelev1">&gt; such that it is pretty much guaranteed not to work), but it is
</span><br>
<span class="quotelev1">&gt; occurring on the trunk (i.e., what will eventually become v1.3) --
</span><br>
<span class="quotelev1">&gt; not the v1.2 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interfaces I'm calling are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_event_loop()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian or George will have to answer about that one...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; opal_path_findv()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This guy should be multi-thread safe (disclaimer: haven't tested it
</span><br>
<span class="quotelev1">&gt; myself); it doesn't rely on any global state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orte_init()
</span><br>
<span class="quotelev2">&gt;&gt; orte_ns.create_process_name()
</span><br>
<span class="quotelev2">&gt;&gt; orte_iof.iof_subscribe()
</span><br>
<span class="quotelev2">&gt;&gt; orte_iof.iof_unsubscribe()
</span><br>
<span class="quotelev2">&gt;&gt; orte_schema.get_job_segment_name()
</span><br>
<span class="quotelev2">&gt;&gt; orte_gpr.get()
</span><br>
<span class="quotelev2">&gt;&gt; orte_dss.get()
</span><br>
<span class="quotelev2">&gt;&gt; orte_rml.send_buffer()
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmgr.spawn_job()
</span><br>
<span class="quotelev2">&gt;&gt; orte_pls.terminate_job()
</span><br>
<span class="quotelev2">&gt;&gt; orte_rds.query()
</span><br>
<span class="quotelev2">&gt;&gt; orte_smr.job_stage_gate_subscribe()
</span><br>
<span class="quotelev2">&gt;&gt; orte_rmgr.get_vpid_range()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that all of ORTE is *NOT* thread safe, nor is it planned to be
</span><br>
<span class="quotelev1">&gt; (it just seemed way more trouble than it was worth).  You need to
</span><br>
<span class="quotelev1">&gt; serialize access to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Does that mean just calling OPAL_THREAD_LOCK() and OPAL_THREAD_UNLOCK 
<br>
() around each?
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2246.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2244.php">Brian Barrett: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>In reply to:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/09/2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
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
