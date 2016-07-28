<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 22:07:00 2011" -->
<!-- isoreceived="20110325020700" -->
<!-- sent="Thu, 24 Mar 2011 19:06:19 -0700" -->
<!-- isosent="20110325020619" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="4D8BF89B.8090101_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110325020048.GA542_at_ghost.tifa.renegado" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 22:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
replies below...
<br>
<p>On 3/24/2011 7:00 PM, Silas Silva wrote:
<br>
<span class="quotelev1">&gt; I'm actually not building it from scratch:-)   I'm using the pkgsrc
</span><br>
<span class="quotelev1">&gt; package manager (www.pkgsrc.org) that is source based and create binary
</span><br>
<span class="quotelev1">&gt; packages in the local computer.  The problem is that the contents of the
</span><br>
<span class="quotelev1">&gt; package differs in the case when /proc is mounted...
</span><br>
<p>Ah, yes.  Now I see your problem.
<br>
<p>[snip]
<br>
<span class="quotelev1">&gt; Anyway, can /proc be unmounted in GNU/Linux somehow?
</span><br>
[snip]
<br>
<p>Short answer is NO.  Too many things depend on it to always be there, 
<br>
especially in the boot scripts.  Running &quot;lsof /proc&quot; on my workstation 
<br>
shows me many KDE daemons apparently using /proc/&lt;some_pid&gt;/status 
<br>
(perhaps to watch for other processes to exit?).
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9139.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
