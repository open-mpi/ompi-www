<?
$subject_val = "[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 18 12:45:51 2014" -->
<!-- isoreceived="20140718164551" -->
<!-- sent="Fri, 18 Jul 2014 17:45:41 +0100" -->
<!-- isosent="20140718164541" -->
<!-- name="Dirk Schubert" -->
<!-- email="dschubert_at_[hidden]" -->
<!-- subject="[OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)" -->
<!-- id="53C94F35.8020508_at_allinea.com" -->
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
<strong>Subject:</strong> [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)<br>
<strong>From:</strong> Dirk Schubert (<em>dschubert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-18 12:45:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Reply:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Maybe reply:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>It seems that OMPI_MCA environment variables with spaces (for rsh?) are 
<br>
incorrectly escaped.
<br>
<p>This happens with version 1.8 and 1.8.1. I did not try Version 1.7!
<br>
<p>To reproduce:
<br>
<p>0) ./configure &amp;&amp; make &amp;&amp; make install # no special configure flags required
<br>
1) Create a host file, with a couple of hostnames in it.
<br>
2) export OMPI_MCA_mpi_show_handle_leaks=&quot;1 --foo&quot;
<br>
3) mpirun -hostfile /path/to/hostfile -n 1 /code/to/mpi.exe
<br>
<p>Expected:
<br>
<p>--------------------------------------------------------------------------
<br>
An invalid value was supplied for an enum variable.
<br>
<p>&nbsp;&nbsp;&nbsp;Variable     : mpi_show_handle_leaks
<br>
&nbsp;&nbsp;&nbsp;Value        : 1 --foo
<br>
&nbsp;&nbsp;&nbsp;Valid values : 0: f|false|disabled, 1: t|true|enabled
<br>
--------------------------------------------------------------------------
<br>
...
<br>
<p>Actual:
<br>
<p>orted: Error: unknown option &quot;--foo&quot;
<br>
Type 'orted --help' for usage.
<br>
Usage: orted [OPTION]...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-am &lt;arg0&gt;            Aggregate MCA parameter set file list
<br>
...
<br>
<p><p>A potential patch that fixes the problem (but then I don't know why &quot;;&quot; 
<br>
would be considered a special character in the first place).
<br>
<p>--- ./orte/mca/plm/rsh/plm_rsh_module.c.orig    2014-07-18 
<br>
17:25:38.477318000 +0100
<br>
+++ ./orte/mca/plm/rsh/plm_rsh_module.c    2014-07-18 17:25:06.936780000 
<br>
+0100
<br>
@@ -618,7 +618,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* if the value has a special character in it,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* then protect it with quotes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*/
<br>
-                    if (NULL != strchr(value, ';')) {
<br>
+                    if (NULL != strchr(value, ' ')) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char *p2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;p2, &quot;\&quot;%s\&quot;&quot;, value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_argv_append(&amp;argc, &amp;argv, p2);
<br>
<p>Regards,
<br>
Dirk
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24813.php">Fab Tillier: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<li><strong>Previous message:</strong> <a href="24811.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] latest stable and win7/msvc2013 and shared memory feature"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Reply:</strong> <a href="24814.php">Ralph Castain: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
<li><strong>Maybe reply:</strong> <a href="24834.php">Dirk Schubert: "Re: [OMPI users] Incorrect escaping of OMPI_MCA environment variables with spaces (for rsh?)"</a>
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
