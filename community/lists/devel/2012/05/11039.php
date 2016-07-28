<?
$subject_val = "Re: [OMPI devel] orte_util_decode_pidmap and hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 27 12:26:13 2012" -->
<!-- isoreceived="20120527162613" -->
<!-- sent="Sun, 27 May 2012 10:26:06 -0600" -->
<!-- isosent="20120527162606" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte_util_decode_pidmap and hwloc" -->
<!-- id="650323F7-3CA6-43AB-9969-C8CE3ECC62A3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FC10079.8070001_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte_util_decode_pidmap and hwloc<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-27 12:26:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11040.php">Jeff Squyres: "[OMPI devel] Migration of SVN/Trac/OpenGrok services"</a>
<li><strong>Previous message:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>In reply to:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 26, 2012, at 10:10 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I'm suspicious of some code, but would like comment from someone who understands it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In orte/util/nidmap.c orte_util_decode_pidmap(), one cycles through a buffer.  One cycles through jobs.  For each one, one unpacks num_procs.  One also unpacks all sorts of other stuff like bind_idx.  In particular, there's
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    orte_process_info.bind_idx = bind_idx[ORTE_PROC_MY_NAME-&gt;vpid];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, if we spawn a job with more processes than the parent job, we could have vpid &gt;= num_procs and we read garbage which could and I think does lead to some less-than-enjoyable experiences later on.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes/no/fix?
</span><br>
<p>Well, actually it's a bit of all three :-/
<br>
<p>First, you have to remember that we do NOT update pidmaps in application procs. So procs in the parent job only see the initial pidmap that contains only their own job - they never see the pidmap of their children. Thus, their data is correct.
<br>
<p>The child job will see both pidmaps. However, the values being set in orte_process_info are being overwritten each time the code parses the data for a job. Since the jobs are recorded (and hence, parsed) in order, and the last job is the one a proc actually belongs to, the values being set actually turn out to be correct.
<br>
<p>Still, the code really isn't right (especially when we begin to update pidmaps, which is coming soon) and merited a fix. So I committed one (r26498)
<br>
<p>Thanks
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="11040.php">Jeff Squyres: "[OMPI devel] Migration of SVN/Trac/OpenGrok services"</a>
<li><strong>Previous message:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
<li><strong>In reply to:</strong> <a href="11038.php">Eugene Loh: "[OMPI devel] orte_util_decode_pidmap and hwloc"</a>
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
