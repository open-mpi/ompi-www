<?
$subject_val = "[OMPI devel] Add child to another parent.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 09:56:56 2011" -->
<!-- isoreceived="20110324135656" -->
<!-- sent="Thu, 24 Mar 2011 14:56:46 +0100" -->
<!-- isosent="20110324135646" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="[OMPI devel] Add child to another parent." -->
<!-- id="AANLkTinFxywwcRw-he7LcqcRDaLg5ooQsyMB7=_E8v96_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Add child to another parent.<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 09:56:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Maybe reply:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello @ll.
<br>
<p>I'm trying to restart a child that has failed, now i'm catching the failed
<br>
child in the errmgr and then i'm packing the child and sending it to another
<br>
node who has to &quot;adopt&quot; it. Is there any way to do this with te actual
<br>
implementation? something like add_child. Because the i will have to do
<br>
somethin like:
<br>
<p>opal_list_item_t *item;
<br>
orte_odls_job_t *jobdat;
<br>
orte_app_context_t *app;
<br>
for (item = opal_list_get_first(&amp;orte_local_jobdata);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item != opal_list_get_end(&amp;orte_local_jobdata);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item = opal_list_get_next(item)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jobdat = (orte_odls_job_t*)item;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (jobdat-&gt;jobid == child-&gt;name-&gt;jobid) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
app = jobdat-&gt;apps[child-&gt;app_idx];
<br>
<p>In order to do this, i need to have the child in the jobdat. If there is not
<br>
such thing implemented, could someone give me an advice on how to do this.
<br>
<p>Best Regards.
<br>
<p>Hugo Meyer
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9124.php">Hugo Meyer: "Re: [OMPI devel] Setting data into the orte_proc_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Reply:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Maybe reply:</strong> <a href="9153.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
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
