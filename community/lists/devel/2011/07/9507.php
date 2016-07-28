<?
$subject_val = "[OMPI devel] orte_odls_base_default_launch_local()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 17:35:15 2011" -->
<!-- isoreceived="20110712213515" -->
<!-- sent="Tue, 12 Jul 2011 14:35:02 -0700" -->
<!-- isosent="20110712213502" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] orte_odls_base_default_launch_local()" -->
<!-- id="4E1CBE06.9040805_at_oracle.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] orte_odls_base_default_launch_local()<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 17:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Previous message:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The function orte_odls_base_default_launch_local() has a variable 
<br>
num_procs_alive that is basically initialized like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( oversubscribed ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num_procs_alive = ...;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Specifically, if the &quot;oversubscribed&quot; test passes, the variable is not 
<br>
initialized.
<br>
<p>(Strictly speaking, this is true only in v1.5.  In the trunk, the 
<br>
variable is set to 0 when it is declared, but I'm not sure that's very 
<br>
helpful.)
<br>
<p>I'm inclined to move the num_procs_alive computation ahead of the &quot;if&quot; 
<br>
block so that this computation is always performed.
<br>
<p>Sanity check?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9508.php">Barrett, Brian W: "Re: [OMPI devel] [devel-core] RFC: extend MTL API"</a>
<li><strong>Previous message:</strong> <a href="9506.php">Barrett, Brian W: "Re: [OMPI devel] Libevent visibility problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
<li><strong>Reply:</strong> <a href="9509.php">Ralph Castain: "Re: [OMPI devel] orte_odls_base_default_launch_local()"</a>
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
