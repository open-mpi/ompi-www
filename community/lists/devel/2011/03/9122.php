<?
$subject_val = "[OMPI devel] Setting data into the orte_proc_t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 08:12:22 2011" -->
<!-- isoreceived="20110323121222" -->
<!-- sent="Wed, 23 Mar 2011 13:12:17 +0100" -->
<!-- isosent="20110323121217" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Setting data into the orte_proc_t" -->
<!-- id="AANLkTi=scbUrPR4JLjtaG+1NZsDkrDt3fq=9dxPDL6XD_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Setting data into the orte_proc_t<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 08:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Previous message:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Reply:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I need to store extra information into the orte_proc_t struct, i have added
<br>
into that struct another field with a default value, but now i need to
<br>
update that value with a value that i'm storint into the orte_process_info.
<br>
My question is how i can do this?
<br>
<p>I am actually doing this:
<br>
<p>jdata = orte_get_job_data_object(proc.jobid);
<br>
procs = (orte_proc_t**)jdata-&gt;procs-&gt;addr;
<br>
procs_rec = (orte_proc_t**)procs[proc.vpid]-&gt;node-&gt;procs-&gt;addr;
<br>
ORTE_NAME_PRINT(&amp;(procs_rec[x]-&gt;my_value));
<br>
<p>But i don't know how to set my value, and where because i'm only getting now
<br>
my default initial value.
<br>
<p>Thanks in advance.
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Previous message:</strong> <a href="9121.php">Ralph Castain: "Re: [OMPI devel] Multicast grpcomm now available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<li><strong>Reply:</strong> <a href="9123.php">Ralph Castain: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
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
