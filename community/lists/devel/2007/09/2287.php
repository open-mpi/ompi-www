<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 21:05:15 2007" -->
<!-- isoreceived="20070906010515" -->
<!-- sent="Wed, 5 Sep 2007 21:04:51 -0400" -->
<!-- isosent="20070906010451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread model" -->
<!-- id="22542463-6110-4F89-A332-1CC5587644D9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8CB68DDC-7D1D-4756-B7B3-522FFF70A8EF_at_computer.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 21:04:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="2286.php">Gleb Natapov: "[OMPI devel] opal_atomic_lifo is not really atomic."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greg: sorry for the delay in replying...
<br>
<p>I am not the authority on this stuff; can George / Brian / Terry /  
<br>
Brad / Gleb reply on this issue?
<br>
<p>Thanks.
<br>
<p>On Aug 28, 2007, at 12:57 PM, Greg Watson wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Note that this is *NOT* well tested.  There is work going on right
</span><br>
<span class="quotelev2">&gt;&gt; now to make the OMPI layer be able to support MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev2">&gt;&gt; (support was designed in from the beginning, but we haven't ever done
</span><br>
<span class="quotelev2">&gt;&gt; any kind of comprehensive testing/stressing of multi-thread support
</span><br>
<span class="quotelev2">&gt;&gt; such that it is pretty much guaranteed not to work), but it is
</span><br>
<span class="quotelev2">&gt;&gt; occurring on the trunk (i.e., what will eventually become v1.3) --
</span><br>
<span class="quotelev2">&gt;&gt; not the v1.2 branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The interfaces I'm calling are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_event_loop()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian or George will have to answer about that one...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_path_findv()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This guy should be multi-thread safe (disclaimer: haven't tested it
</span><br>
<span class="quotelev2">&gt;&gt; myself); it doesn't rely on any global state.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_init()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_ns.create_process_name()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_iof.iof_subscribe()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_iof.iof_unsubscribe()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_schema.get_job_segment_name()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_gpr.get()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_dss.get()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rml.send_buffer()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmgr.spawn_job()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_pls.terminate_job()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rds.query()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_smr.job_stage_gate_subscribe()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_rmgr.get_vpid_range()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that all of ORTE is *NOT* thread safe, nor is it planned to be
</span><br>
<span class="quotelev2">&gt;&gt; (it just seemed way more trouble than it was worth).  You need to
</span><br>
<span class="quotelev2">&gt;&gt; serialize access to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean just calling OPAL_THREAD_LOCK() and OPAL_THREAD_UNLOCK
</span><br>
<span class="quotelev1">&gt; () around each?
</span><br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<li><strong>Previous message:</strong> <a href="2286.php">Gleb Natapov: "[OMPI devel] opal_atomic_lifo is not really atomic."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/08/2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2288.php">Ralph Castain: "Re: [OMPI devel] thread model"</a>
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
