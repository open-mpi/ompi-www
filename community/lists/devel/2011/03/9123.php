<?
$subject_val = "Re: [OMPI devel] Setting data into the orte_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 09:52:17 2011" -->
<!-- isoreceived="20110323135217" -->
<!-- sent="Wed, 23 Mar 2011 07:52:07 -0600" -->
<!-- isosent="20110323135207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting data into the orte_proc_t" -->
<!-- id="4C31FD80-5889-4340-956C-4553C55DA4B5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=scbUrPR4JLjtaG+1NZsDkrDt3fq=9dxPDL6XD_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting data into the orte_proc_t<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 09:52:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Previous message:</strong> <a href="9122.php">Hugo Meyer: "[OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>In reply to:</strong> <a href="9122.php">Hugo Meyer: "[OMPI devel] Setting data into the orte_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Reply:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2011, at 6:12 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I need to store extra information into the orte_proc_t struct, i have added into that struct another field with a default value, but now i need to update that value with a value that i'm storint into the orte_process_info. My question is how i can do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You have an error in your code - you aren't pointing to a proc object at all. See below.
<br>
<p><span class="quotelev1">&gt; I am actually doing this: 
</span><br>
<span class="quotelev1">&gt; jdata = orte_get_job_data_object(proc.jobid);
</span><br>
<span class="quotelev1">&gt; procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<p><span class="quotelev1">&gt; procs_rec = (orte_proc_t**)procs[proc.vpid]-&gt;node-&gt;procs-&gt;addr;
</span><br>
<p>Don't do the above - this is what is getting you into trouble. Instead, do this:
<br>
<p>orte_proc_t *procptr1, *procptr2;
<br>
orte_node_t *node;
<br>
<p>if (NULL == (procptr1 = (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, proc.vpid))) {
<br>
<span class="quotelev1">&gt; 
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;  /* or whatever */
<br>
}
<br>
node = procptr1-&gt;node;
<br>
<p>for (i=0; i &lt; node-&gt;procs-&gt;size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == (procptr2 = (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, i))) {
<br>
<span class="quotelev1">&gt; 
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return;  /* or whatever */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (procptr2-&gt;name.jobid == procptr1-&gt;name.jobid &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procptr2-&gt;name.vpid == procptr1-&gt;name.vpid) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* procptr2 now points at your proc struct, so set your value */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procptr2-&gt;my_value = foo;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>Remember, the proc objects are -not- stored in vpid order in the node-&gt;procs array, so you have to search that array to find the one you want.
<br>
<p><p><span class="quotelev1">&gt; ORTE_NAME_PRINT(&amp;(procs_rec[x]-&gt;my_value));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><span class="quotelev1">&gt; But i don't know how to set my value, and where because i'm only getting now my default initial value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Previous message:</strong> <a href="9122.php">Hugo Meyer: "[OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>In reply to:</strong> <a href="9122.php">Hugo Meyer: "[OMPI devel] Setting data into the orte_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Reply:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
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
