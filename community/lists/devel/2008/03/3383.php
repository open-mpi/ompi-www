<?
$subject_val = "Re: [OMPI devel] orte_job_data";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 18:28:25 2008" -->
<!-- isoreceived="20080305232825" -->
<!-- sent="Wed, 05 Mar 2008 16:28:13 -0700" -->
<!-- isosent="20080305232813" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_job_data" -->
<!-- id="C3F47A9D.48E6%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CD20C3C1-ABC3-4FD5-961C-F3C5132E5121_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-03-05 18:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3382.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 3/5/08 3:31 PM, &quot;Aur&#233;lien Bouteiller&quot; &lt;bouteill_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From : Camille Coti &lt;coti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 5 mars 2008 17:26:32 HNE (&#201;UA)
</span><br>
<span class="quotelev1">&gt; to : devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Objet : orte_job_data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I had a look at how the job data are kept during the life cycle of a
</span><br>
<span class="quotelev1">&gt; job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The orte_job_data pointer array contains two elements:
</span><br>
<span class="quotelev1">&gt;    addr[0] is filled during rte_init().
</span><br>
<span class="quotelev1">&gt;    addr[1] is filled by PLM at setup time and contains the map on
</span><br>
<span class="quotelev1">&gt; which the job is spawned.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does the first entry correspond to?
</span><br>
<p>The first element in the array is for the daemon job. All subsequent entries
<br>
correspond to applications.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides, when I dump the map contained in the second element during
</span><br>
<span class="quotelev1">&gt; the execution of my application (ie, after PLM launched the job), each
</span><br>
<span class="quotelev1">&gt; node entry contains: &quot;Daemon launched: False&quot;. Is this expected?
</span><br>
<p>Yes, that is expected - we don't bother to update that field in the job map
<br>
when we launch the daemons for an application. However, the next time the
<br>
job map is retrieved - say to map a comm_spawn'd application - then we do
<br>
fill it in. The get_job_map function will check the daemon's job data object
<br>
to see if a daemon has been launched on each node and fill-in the field.
<br>
<p>Reason we don't automatically update that field as the daemons launch is
<br>
that we are looking ahead to when we minimize memory usage. When that
<br>
happens, we probably won't retain the map at all - we'll reconstruct
<br>
whatever is needed from the minimal stored set of data when it is needed,
<br>
and then dump it when done.
<br>
<p>So, since we'll probably have to regenerate the map anyway, we don't bother
<br>
to maintain the daemon spawned field. We just fill it in when we retrieve a
<br>
map. If you want to see the filled-in values, call orte_rmaps.get_job_map
<br>
and then dump the returned map object.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Camille
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
<li><strong>Next message:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Previous message:</strong> <a href="3382.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_job_data"</a>
<li><strong>In reply to:</strong> <a href="3382.php">Aur&#233;lien Bouteiller: "[OMPI devel] orte_job_data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
<li><strong>Reply:</strong> <a href="3384.php">Camille Coti: "Re: [OMPI devel] orte_job_data"</a>
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
