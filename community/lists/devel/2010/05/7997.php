<?
$subject_val = "[OMPI devel] Some questions about checkpoint/restart (13),(14)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 03:52:42 2010" -->
<!-- isoreceived="20100528075242" -->
<!-- sent="Fri, 28 May 2010 16:54:54 +0900" -->
<!-- isosent="20100528075454" -->
<!-- name="Takayuki Seki" -->
<!-- email="seki_at_[hidden]" -->
<!-- subject="[OMPI devel] Some questions about checkpoint/restart (13),(14)" -->
<!-- id="4BFF76CE.1050608_at_np.css.fujitsu.com" -->
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
<strong>Subject:</strong> [OMPI devel] Some questions about checkpoint/restart (13),(14)<br>
<strong>From:</strong> Takayuki Seki (<em>seki_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 03:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7996.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (12)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
13th, 14th question are as follows:
<br>
<p>(13) Some messages are not shown even though --mca snapc_base_verbose parameter is used.
<br>
<p>Framework         : snapc
<br>
Component         : full
<br>
The source file   : orte/mca/snapc/base/snapc_base_open.c
<br>
The function name : orte_snapc_base_open
<br>
<p>I think that the following verbose messages are not shown.
<br>
Because the orte_snapc_base_output ID is not initialized at those point.
<br>
The orte_snapc_base_output ID is initialized in opal_output_set_verbosity function called by mca_base_components_open function.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((10, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open()&quot;));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((20, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open: base_global_snapshot_dir    = %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_snapc_base_global_snapshot_dir));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((20, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open: base_store_in_place    = %d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_snapc_base_store_in_place));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((20, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open: base_only_one_seq    = %d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_snapc_base_store_only_one_seq));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((20, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open: base_establish_global_snapshot_dir    = %d&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_snapc_base_establish_global_snapshot_dir));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OPAL_OUTPUT_VERBOSE((20, orte_snapc_base_output,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;snapc:base: open: base_global_snapshot_ref    = %s&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_snapc_base_global_snapshot_ref));
<br>
<p>Result of running.
<br>
previous messages are not shown.
<br>
<p>&nbsp;mca: base: components_open: Looking for snapc components
<br>
&nbsp;mca: base: components_open: opening snapc components
<br>
&nbsp;mca: base: components_open: found loaded component full
<br>
&nbsp;mca: base: components_open: component full has no register function
<br>
&nbsp;snapc:full: open()
<br>
&nbsp;snapc:full: open: priority    = 20
<br>
&nbsp;snapc:full: open: verbosity   = 100
<br>
&nbsp;snapc:full: open: skip_filem  = False
<br>
&nbsp;mca: base: components_open: component full open function successful
<br>
&nbsp;snapc:select: Using none component
<br>
&nbsp;snapc:full: close()
<br>
<p><p>(14) I use the Aggregate MCA parameter -am ft-enable-cr to enable checkpoint/restart
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fault tolerance for an MPI application.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If two or more mca parameter files are specified by -am option,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fault tolerance may be disabled.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I understand it is a specification of Open MPI.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is there any way to specify multiple AMCA parameter files?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For user,it will be convenient to use MCA parameter file.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpiexec .... --mca btl self,tcp -am ft-enable-cr -am /home/guest/Test/CR-Debug/local-mca-param.conf .... a.out
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bash-3.2$ cat local-mca-param.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crs_base_snapshot_dir=/home/guest/Test/temp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;snapc_base_global_snapshot_dir=/home/guest/Test/cr-work
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-bash-3.2$
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fault tolerance is disabled.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7998.php">Sylvain Jeaugey: "Re: [OMPI devel] BTL add procs errors"</a>
<li><strong>Previous message:</strong> <a href="7996.php">Takayuki Seki: "[OMPI devel] Some questions about checkpoint/restart (12)"</a>
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
