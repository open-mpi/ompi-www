<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 22:05:10 2007" -->
<!-- isoreceived="20070828020510" -->
<!-- sent="Mon, 27 Aug 2007 22:04:49 -0400" -->
<!-- isosent="20070828020449" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread model" -->
<!-- id="DE52CCE1-0435-4946-8F37-61A02F241CA3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E4E44399-8D0E-4303-AB82-C3206620B769_at_computer.org" -->
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
<strong>Date:</strong> 2007-08-27 22:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>In reply to:</strong> <a href="2232.php">Greg Watson: "[OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2007, at 2:50 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Until now I haven't had to worry about the opal/orte thread model.
</span><br>
<span class="quotelev1">&gt; However, there are now people who would like to use ompi that has
</span><br>
<span class="quotelev1">&gt; been configured with --with-threads=posix and --with-enable-mpi-
</span><br>
<span class="quotelev1">&gt; threads. Can someone give me some pointers as to what I need to do in
</span><br>
<span class="quotelev1">&gt; order to make sure I don't violate any threading model?
</span><br>
<p>Note that this is *NOT* well tested.  There is work going on right  
<br>
now to make the OMPI layer be able to support MPI_THREAD_MULTIPLE  
<br>
(support was designed in from the beginning, but we haven't ever done  
<br>
any kind of comprehensive testing/stressing of multi-thread support  
<br>
such that it is pretty much guaranteed not to work), but it is  
<br>
occurring on the trunk (i.e., what will eventually become v1.3) --  
<br>
not the v1.2 branch.
<br>
<p><span class="quotelev1">&gt; The interfaces I'm calling are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_event_loop()
</span><br>
<p>Brian or George will have to answer about that one...
<br>
<p><span class="quotelev1">&gt; opal_path_findv()
</span><br>
<p>This guy should be multi-thread safe (disclaimer: haven't tested it  
<br>
myself); it doesn't rely on any global state.
<br>
<p><span class="quotelev1">&gt; orte_init()
</span><br>
<span class="quotelev1">&gt; orte_ns.create_process_name()
</span><br>
<span class="quotelev1">&gt; orte_iof.iof_subscribe()
</span><br>
<span class="quotelev1">&gt; orte_iof.iof_unsubscribe()
</span><br>
<span class="quotelev1">&gt; orte_schema.get_job_segment_name()
</span><br>
<span class="quotelev1">&gt; orte_gpr.get()
</span><br>
<span class="quotelev1">&gt; orte_dss.get()
</span><br>
<span class="quotelev1">&gt; orte_rml.send_buffer()
</span><br>
<span class="quotelev1">&gt; orte_rmgr.spawn_job()
</span><br>
<span class="quotelev1">&gt; orte_pls.terminate_job()
</span><br>
<span class="quotelev1">&gt; orte_rds.query()
</span><br>
<span class="quotelev1">&gt; orte_smr.job_stage_gate_subscribe()
</span><br>
<span class="quotelev1">&gt; orte_rmgr.get_vpid_range()
</span><br>
<p>Note that all of ORTE is *NOT* thread safe, nor is it planned to be  
<br>
(it just seemed way more trouble than it was worth).  You need to  
<br>
serialize access to it.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2239.php">Jeff Squyres: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2237.php">Jeff Squyres: "Re: [OMPI devel] &amp;find() broken?"</a>
<li><strong>In reply to:</strong> <a href="2232.php">Greg Watson: "[OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2245.php">Greg Watson: "Re: [OMPI devel] thread model"</a>
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
