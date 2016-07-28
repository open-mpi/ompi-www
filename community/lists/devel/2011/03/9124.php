<?
$subject_val = "Re: [OMPI devel] Setting data into the orte_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 16:11:41 2011" -->
<!-- isoreceived="20110323201141" -->
<!-- sent="Wed, 23 Mar 2011 21:11:35 +0100" -->
<!-- isosent="20110323201135" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting data into the orte_proc_t" -->
<!-- id="AANLkTim5ycbDfZk2ke_eNfkF7tuSK616beEqH-dn655-_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C31FD80-5889-4340-956C-4553C55DA4B5_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 16:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>In reply to:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks again Ralph.
<br>
<p>I've solved thanks to you. My first mistake was what you told me and  then i
<br>
realize that i have to communicate with the hnp when the vprotocol initiates
<br>
&nbsp;so he can set that data in the orte_proc_t.
<br>
<p>Again thanks.
<br>
<p>Hugo Meyer
<br>
<p>2011/3/23 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2011, at 6:12 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to store extra information into the orte_proc_t struct, i have added
</span><br>
<span class="quotelev1">&gt; into that struct another field with a default value, but now i need to
</span><br>
<span class="quotelev1">&gt; update that value with a value that i'm storint into the orte_process_info.
</span><br>
<span class="quotelev1">&gt; My question is how i can do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have an error in your code - you aren't pointing to a proc object at
</span><br>
<span class="quotelev1">&gt; all. See below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am actually doing this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jdata = orte_get_job_data_object(proc.jobid);
</span><br>
<span class="quotelev1">&gt; procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; procs_rec = (orte_proc_t**)procs[proc.vpid]-&gt;node-&gt;procs-&gt;addr;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't do the above - this is what is getting you into trouble. Instead, do
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orte_proc_t *procptr1, *procptr2;
</span><br>
<span class="quotelev1">&gt; orte_node_t *node;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (NULL == (procptr1 =
</span><br>
<span class="quotelev1">&gt; (orte_proc_t*)opal_pointer_array_get_item(jdata-&gt;procs, proc.vpid))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;       return;  /* or whatever */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; node = procptr1-&gt;node;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (i=0; i &lt; node-&gt;procs-&gt;size; i++) {
</span><br>
<span class="quotelev1">&gt;     if (NULL == (procptr2 =
</span><br>
<span class="quotelev1">&gt; (orte_proc_t*)opal_pointer_array_get_item(node-&gt;procs, i))) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           ORTE_ERROR_LOG(ORTE_ERR_NOT_FOUND);
</span><br>
<span class="quotelev1">&gt;           return;  /* or whatever */
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;      if (procptr2-&gt;name.jobid == procptr1-&gt;name.jobid &amp;&amp;
</span><br>
<span class="quotelev1">&gt;          procptr2-&gt;name.vpid == procptr1-&gt;name.vpid) {
</span><br>
<span class="quotelev1">&gt;              /* procptr2 now points at your proc struct, so set your value
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt;              procptr2-&gt;my_value = foo;
</span><br>
<span class="quotelev1">&gt;              break;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Remember, the proc objects are -not- stored in vpid order in the
</span><br>
<span class="quotelev1">&gt; node-&gt;procs array, so you have to search that array to find the one you
</span><br>
<span class="quotelev1">&gt; want.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ORTE_NAME_PRINT(&amp;(procs_rec[x]-&gt;my_value));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But i don't know how to set my value, and where because i'm only getting
</span><br>
<span class="quotelev1">&gt; now my default initial value.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>In reply to:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
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
