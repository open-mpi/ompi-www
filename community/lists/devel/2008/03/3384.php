<?
$subject_val = "Re: [OMPI devel] orte_job_data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 21:12:21 2008" -->
<!-- isoreceived="20080306021221" -->
<!-- sent="Wed, 05 Mar 2008 21:12:12 -0500" -->
<!-- isosent="20080306021212" -->
<!-- name="Camille Coti" -->
<!-- email="coti_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_job_data" -->
<!-- id="47CF52FC.8090700_at_lri.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C3F47A9D.48E6%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Camille Coti (<em>coti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 21:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; On 3/5/08 3:31 PM, &quot;Aur&#195;&#169;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;  From : Camille Coti &lt;coti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date : 5 mars 2008 17:26:32 HNE (&#195;&#137;UA)
</span><br>
<span class="quotelev2">&gt;&gt; to : devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Objet : orte_job_data
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had a look at how the job data are kept during the life cycle of a
</span><br>
<span class="quotelev2">&gt;&gt; job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The orte_job_data pointer array contains two elements:
</span><br>
<span class="quotelev2">&gt;&gt;    addr[0] is filled during rte_init().
</span><br>
<span class="quotelev2">&gt;&gt;    addr[1] is filled by PLM at setup time and contains the map on
</span><br>
<span class="quotelev2">&gt;&gt; which the job is spawned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does the first entry correspond to?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first element in the array is for the daemon job. All subsequent entries
</span><br>
<span class="quotelev1">&gt; correspond to applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Besides, when I dump the map contained in the second element during
</span><br>
<span class="quotelev2">&gt;&gt; the execution of my application (ie, after PLM launched the job), each
</span><br>
<span class="quotelev2">&gt;&gt; node entry contains: &quot;Daemon launched: False&quot;. Is this expected?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is expected - we don't bother to update that field in the job map
</span><br>
<span class="quotelev1">&gt; when we launch the daemons for an application. However, the next time the
</span><br>
<span class="quotelev1">&gt; job map is retrieved - say to map a comm_spawn'd application - then we do
</span><br>
<span class="quotelev1">&gt; fill it in. The get_job_map function will check the daemon's job data object
</span><br>
<span class="quotelev1">&gt; to see if a daemon has been launched on each node and fill-in the field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason we don't automatically update that field as the daemons launch is
</span><br>
<span class="quotelev1">&gt; that we are looking ahead to when we minimize memory usage. When that
</span><br>
<span class="quotelev1">&gt; happens, we probably won't retain the map at all - we'll reconstruct
</span><br>
<span class="quotelev1">&gt; whatever is needed from the minimal stored set of data when it is needed,
</span><br>
<span class="quotelev1">&gt; and then dump it when done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, since we'll probably have to regenerate the map anyway, we don't bother
</span><br>
<span class="quotelev1">&gt; to maintain the daemon spawned field. We just fill it in when we retrieve a
</span><br>
<span class="quotelev1">&gt; map. If you want to see the filled-in values, call orte_rmaps.get_job_map
</span><br>
<span class="quotelev1">&gt; and then dump the returned map object.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Ralph,
<br>
<p>Thanks a lot for your answer.
<br>
orte_rmaps.get_job_map gave me what I wanted.
<br>
<p>I also need to access the mapping information from any node. However, 
<br>
orte_rmaps.get_job_map calls orte_get_job_data_object, which returns 
<br>
NULL if the node is not an HNP. In that case, is there an alternative 
<br>
way to access the mapping information?
<br>
<p>Camille
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Camille
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3383.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3385.php">Ralph Castain: "Re: [OMPI devel] orte_job_data"</a>
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
