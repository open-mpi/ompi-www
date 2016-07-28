<?
$subject_val = "Re: [OMPI devel] orte_job_data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 22:23:36 2008" -->
<!-- isoreceived="20080306032336" -->
<!-- sent="Wed, 05 Mar 2008 20:23:23 -0700" -->
<!-- isosent="20080306032323" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_job_data" -->
<!-- id="C3F4B1BB.48FB%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47CF52FC.8090700_at_lri.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_job_data<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 22:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/5/08 7:12 PM, &quot;Camille Coti&quot; &lt;coti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 3/5/08 3:31 PM, &quot;Aur&#195;&#169;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  From : Camille Coti &lt;coti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date : 5 mars 2008 17:26:32 HNE (&#195;&#137;UA)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to : devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Objet : orte_job_data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I had a look at how the job data are kept during the life cycle of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The orte_job_data pointer array contains two elements:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    addr[0] is filled during rte_init().
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    addr[1] is filled by PLM at setup time and contains the map on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which the job is spawned.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does the first entry correspond to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The first element in the array is for the daemon job. All subsequent entries
</span><br>
<span class="quotelev2">&gt;&gt; correspond to applications.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Besides, when I dump the map contained in the second element during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the execution of my application (ie, after PLM launched the job), each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node entry contains: &quot;Daemon launched: False&quot;. Is this expected?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that is expected - we don't bother to update that field in the job map
</span><br>
<span class="quotelev2">&gt;&gt; when we launch the daemons for an application. However, the next time the
</span><br>
<span class="quotelev2">&gt;&gt; job map is retrieved - say to map a comm_spawn'd application - then we do
</span><br>
<span class="quotelev2">&gt;&gt; fill it in. The get_job_map function will check the daemon's job data object
</span><br>
<span class="quotelev2">&gt;&gt; to see if a daemon has been launched on each node and fill-in the field.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Reason we don't automatically update that field as the daemons launch is
</span><br>
<span class="quotelev2">&gt;&gt; that we are looking ahead to when we minimize memory usage. When that
</span><br>
<span class="quotelev2">&gt;&gt; happens, we probably won't retain the map at all - we'll reconstruct
</span><br>
<span class="quotelev2">&gt;&gt; whatever is needed from the minimal stored set of data when it is needed,
</span><br>
<span class="quotelev2">&gt;&gt; and then dump it when done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, since we'll probably have to regenerate the map anyway, we don't bother
</span><br>
<span class="quotelev2">&gt;&gt; to maintain the daemon spawned field. We just fill it in when we retrieve a
</span><br>
<span class="quotelev2">&gt;&gt; map. If you want to see the filled-in values, call orte_rmaps.get_job_map
</span><br>
<span class="quotelev2">&gt;&gt; and then dump the returned map object.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your answer.
</span><br>
<span class="quotelev1">&gt; orte_rmaps.get_job_map gave me what I wanted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also need to access the mapping information from any node. However,
</span><br>
<span class="quotelev1">&gt; orte_rmaps.get_job_map calls orte_get_job_data_object, which returns
</span><br>
<span class="quotelev1">&gt; NULL if the node is not an HNP. In that case, is there an alternative
</span><br>
<span class="quotelev1">&gt; way to access the mapping information?
</span><br>
<p>Not at the moment - we knew of no immediate need for that data on the orteds
<br>
or the application procs. However, we do plan to add that info in the near
<br>
future (probably about two weeks out).
<br>
<p>The orteds have all the data since they actually receive a complete process
<br>
map in the launch message - they just don't store it or do anything with it
<br>
(other than setting up the routed system so they know where to relay
<br>
messages). So it is rather trivial for us to just have them hang onto it
<br>
(though that does increase their memory footprint, so we will want to do
<br>
that carefully).
<br>
<p>For application procs, Galen had proposed a couple of months ago that we
<br>
create a struct that would hold all the RTE-level data that is currently in
<br>
ompi_proc_t (e.g., nodeid - which is already in the RTE layer), and then
<br>
just let the ompi_proc_t point at it. This may make it somewhat easier to
<br>
support multiple environments where that data gets exchanged in different
<br>
ways, and would help to reduce the modex message size. Since the orteds
<br>
already have the data, it would be simple enough to just &quot;drop&quot; it into the
<br>
proc. This wouldn't increase our current memory footprint since we already
<br>
store all that data in the proc - we would just reorganize it a little, more
<br>
properly do the data update in the RTE layer, etc.
<br>
<p>Won't get to that for a couple of weeks, though - I will be on vacation next
<br>
week. In the interim, I'm afraid there really isn't any easy way to get it
<br>
outside of the HNP.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Camille
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Camille
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3386.php">Gleb Natapov: "[OMPI devel] orte can't launch process"</a>
<li><strong>Previous message:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
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
