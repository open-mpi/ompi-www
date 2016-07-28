<?
$subject_val = "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 14:29:52 2011" -->
<!-- isoreceived="20110324182952" -->
<!-- sent="Thu, 24 Mar 2011 15:29:26 -0300" -->
<!-- isosent="20110324182926" -->
<!-- name="Silas Silva" -->
<!-- email="silasdb_at_[hidden]" -->
<!-- subject="[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="20110324182923.GB19362_at_ssilva.omnisys.int.com.br" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist<br>
<strong>From:</strong> Silas Silva (<em>silasdb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 14:29:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello there,
<br>
<p>I'm using OpenMPI for educational reasons.  It works pretty fine under
<br>
GNU/Linux.  I have both compiled it and downloaded it from the package
<br>
management system with no problems.
<br>
<p>But I have trying to use it in other Unix systems as well.  In these
<br>
systems /proc (NetBSD for instance) is by default unmounted, so
<br>
./configure script cannot stat /proc/cpuinfo (although it does exist in
<br>
NetBSD if you manually mount /proc).  In the case it cannot stat
<br>
/proc/cpuinfo, it just silently ignores compilation of
<br>
mca_sysinfo_linux.{so,la}.
<br>
<p>Is this behaviour correct?  Or it would be be a better idea that
<br>
configure script fail with a &quot;please check /proc/cpuinfo or specify
<br>
--dont-build-sysinfo-linux&quot;-like message?
<br>
<p>Thank you very much.
<br>
<p><pre>
-- 
Silas Silva
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9125.php">Hugo Meyer: "[OMPI devel] Add child to another parent."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9128.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
