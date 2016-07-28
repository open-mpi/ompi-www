<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (15)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 18 02:24:03 2010" -->
<!-- isoreceived="20101018062403" -->
<!-- sent="Mon, 18 Oct 2010 15:25:36 +0900" -->
<!-- isosent="20101018062536" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (15)" -->
<!-- id="4CBBE860.8000004_at_np.css.fujitsu.com" -->
<!-- charset="ISO-2022-JP" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (15)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-18 02:25:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8615.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Previous message:</strong> <a href="8613.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have another question about checkpoint/restart of Open MPI.
<br>
<p>The source file : ompi/runtime/ompi_cr.c
<br>
The function name : notify_collectives
<br>
<p>In notify_collectives function, it seems to find modules and call ft_event functions per communicators
<br>
using the for statement.
<br>
A variable &quot;modules&quot; used in the for statement is an array which has 16 elements.
<br>
<p>Source code is as follows:
<br>
<p>#define NUM_COLLECTIVES 16
<br>
<p>#define SIGNAL(comm, modules, highest_module, msg, ret, func)   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;do {                                                        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bool found = false;                                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int k;                                                  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_base_module_t *my_module =               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm-&gt;c_coll.coll_ ## func ## _module;              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != my_module) {                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (k = 0 ; k &lt; highest_module ; ++k) {            \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (my_module == modules[k]) found = true;      \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!found) {                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modules[highest_module++] = my_module;          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != my_module-&gt;ft_event) {              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = my_module-&gt;ft_event(msg);             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                               \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                   \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} while (0)
<br>
<p>static int
<br>
notify_collectives(int msg)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_base_module_t *modules[NUM_COLLECTIVES];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i, max, ret, highest_module = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;memset(&amp;modules, 0, sizeof(mca_coll_base_module_t*) * NUM_COLLECTIVES);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;max = opal_pointer_array_get_size(&amp;ompi_mpi_communicators);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0 ; i &lt; max ; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t *comm =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ompi_communicator_t *)opal_pointer_array_get_item(&amp;ompi_mpi_communicators, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == comm) continue;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNAL(comm, modules, highest_module, msg, ret, allgather);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGNAL(comm, modules, highest_module, msg, ret, allgatherv);
<br>
<p>In the for statement, the subscript of the array &quot;modules&quot; is incremented if new module is found in macro named &quot;SIGNAL&quot;.
<br>
<p>I have two questions about this source.
<br>
<p>1. I think variable &quot;highest_module&quot;, which is a subscript variable of the array &quot;modules&quot;,
<br>
&nbsp;&nbsp;&nbsp;should be initialized at every communicator.
<br>
&nbsp;&nbsp;&nbsp;If many communicators are created, does the code attempt to access array elements which are
<br>
&nbsp;&nbsp;&nbsp;outside the bounds of the array &quot;modules&quot; declaration?
<br>
<p>2. I think it works well if adding initialization of subscript variable &quot;highest_module&quot; to the for statement
<br>
&nbsp;&nbsp;&nbsp;even if many communicators are created.
<br>
&nbsp;&nbsp;&nbsp;Is that correct?
<br>
&nbsp;&nbsp;&nbsp;For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0 ; i &lt; max ; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_communicator_t *comm =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ompi_communicator_t *)opal_pointer_array_get_item(&amp;ompi_mpi_communicators, i);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;highest_module = 0;      /* &lt;- add initialization of subscript variable &quot;highest_module&quot; */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == comm) continue;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8615.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23931"</a>
<li><strong>Previous message:</strong> <a href="8613.php">Ralph Castain: "Re: [OMPI devel] debugger attach broken in trunk"</a>
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
