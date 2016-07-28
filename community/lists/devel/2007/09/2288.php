<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 22:09:15 2007" -->
<!-- isoreceived="20070906020915" -->
<!-- sent="Wed, 05 Sep 2007 20:09:00 -0600" -->
<!-- isosent="20070906020900" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread model" -->
<!-- id="C304BD5C.3A15%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="22542463-6110-4F89-A332-1CC5587644D9_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 22:09:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See below
<br>
<p><p>On 9/5/07 7:04 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Greg: sorry for the delay in replying...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not the authority on this stuff; can George / Brian / Terry /
</span><br>
<span class="quotelev1">&gt; Brad / Gleb reply on this issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 28, 2007, at 12:57 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that this is *NOT* well tested.  There is work going on right
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now to make the OMPI layer be able to support MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (support was designed in from the beginning, but we haven't ever done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any kind of comprehensive testing/stressing of multi-thread support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such that it is pretty much guaranteed not to work), but it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; occurring on the trunk (i.e., what will eventually become v1.3) --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not the v1.2 branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The interfaces I'm calling are:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_event_loop()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian or George will have to answer about that one...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_path_findv()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This guy should be multi-thread safe (disclaimer: haven't tested it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; myself); it doesn't rely on any global state.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_init()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_ns.create_process_name()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_iof.iof_subscribe()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_iof.iof_unsubscribe()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_schema.get_job_segment_name()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_gpr.get()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_dss.get()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rml.send_buffer()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rmgr.spawn_job()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_pls.terminate_job()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rds.query()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_smr.job_stage_gate_subscribe()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; orte_rmgr.get_vpid_range()
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that all of ORTE is *NOT* thread safe, nor is it planned to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (it just seemed way more trouble than it was worth).  You need to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; serialize access to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does that mean just calling OPAL_THREAD_LOCK() and OPAL_THREAD_UNLOCK
</span><br>
<span class="quotelev2">&gt;&gt; () around each?
</span><br>
<p>We actually do thread locks inside of these - just a big LOCK when you
<br>
enter, with a corresponding UNLOCK when you leave - so I'm not sure how much
<br>
good you'll get from adding locks around the calls themselves. The majority
<br>
of threading issues in this area have to do with the progress engine and our
<br>
interactions with that beast - I'm not sure we entirely understand those
<br>
issues yet.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2289.php">Ralph H Castain: "[OMPI devel] [RFC] Exit without finalize"</a>
<li><strong>Previous message:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>In reply to:</strong> <a href="2287.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
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
