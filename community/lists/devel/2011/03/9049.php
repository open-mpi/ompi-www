<?
$subject_val = "[OMPI devel] turning on progress threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 17:44:44 2011" -->
<!-- isoreceived="20110310224444" -->
<!-- sent="Thu, 10 Mar 2011 14:43:35 -0800" -->
<!-- isosent="20110310224335" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] turning on progress threads" -->
<!-- id="4D795417.8040801_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] turning on progress threads<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 17:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the trunk, we hardwire progress threads to be off.  E.g.,
<br>
<p>% grep progress configure.ac
<br>
# Hardwire all progress threads to be off
<br>
enable_progress_threads=&quot;no&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Hardcode the ORTE progress thread to be off])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Hardcode the OMPI progress thread to be off])
<br>
<p>So, how do I understand the following?
<br>
<p>% grep enable_progress contrib/platform/*/*.conf
<br>
contrib/platform/cisco/linux-static.conf:orte_enable_progress_threads = 1
<br>
contrib/platform/cisco/macosx-dynamic.conf:orte_enable_progress_threads = 1
<br>
contrib/platform/openrcm/debug.conf:orte_enable_progress_threads = 1
<br>
% grep enable_progress contrib/platform/*/*/*.conf
<br>
contrib/platform/cisco/ebuild/hlfr.conf:orte_enable_progress_threads = 1
<br>
contrib/platform/cisco/ebuild/ludd.conf:orte_enable_progress_threads = 1
<br>
contrib/platform/cisco/ebuild/native.conf:orte_enable_progress_threads = 1
<br>
<p>These seem to try to turn progress threads on.  Ugly, but not a problem?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Previous message:</strong> <a href="9048.php">N.M. Maclaren: "Re: [OMPI devel] [Fwd:  multi-threaded test]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
<li><strong>Reply:</strong> <a href="9050.php">Ralph Castain: "Re: [OMPI devel] turning on progress threads"</a>
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
