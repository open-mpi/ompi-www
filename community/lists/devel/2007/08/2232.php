<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 14:50:57 2007" -->
<!-- isoreceived="20070827185057" -->
<!-- sent="Mon, 27 Aug 2007 14:50:45 -0400" -->
<!-- isosent="20070827185045" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] thread model" -->
<!-- id="E4E44399-8D0E-4303-AB82-C3206620B769_at_computer.org" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 14:50:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Until now I haven't had to worry about the opal/orte thread model.  
<br>
However, there are now people who would like to use ompi that has  
<br>
been configured with --with-threads=posix and --with-enable-mpi- 
<br>
threads. Can someone give me some pointers as to what I need to do in  
<br>
order to make sure I don't violate any threading model?
<br>
<p>The interfaces I'm calling are:
<br>
<p>opal_event_loop()
<br>
opal_path_findv()
<br>
orte_init()
<br>
orte_ns.create_process_name()
<br>
orte_iof.iof_subscribe()
<br>
orte_iof.iof_unsubscribe()
<br>
orte_schema.get_job_segment_name()
<br>
orte_gpr.get()
<br>
orte_dss.get()
<br>
orte_rml.send_buffer()
<br>
orte_rmgr.spawn_job()
<br>
orte_pls.terminate_job()
<br>
orte_rds.query()
<br>
orte_smr.job_stage_gate_subscribe()
<br>
orte_rmgr.get_vpid_range()
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2233.php">Rolf vandeVaart: "[OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2231.php">Josh Hursey: "Re: [OMPI devel] MTT Database and Reporter Upgrade **Action Required**"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
<li><strong>Reply:</strong> <a href="2238.php">Jeff Squyres: "Re: [OMPI devel] thread model"</a>
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
