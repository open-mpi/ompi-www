<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 15:23:10 2011" -->
<!-- isoreceived="20110324192310" -->
<!-- sent="Thu, 24 Mar 2011 13:23:02 -0600" -->
<!-- isosent="20110324192302" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="7DF8FEAD-4113-4FE5-A12B-B4F55AE6D8B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110324182923.GB19362_at_ssilva.omnisys.int.com.br" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 15:23:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I never considered that scenario when writing that code. The sysinfo functionality isn't considered critical at this time, though there are some changes coming that will make it more important.
<br>
<p>Have to ponder the best solution - I'd rather not have configure fail just because we don't find a non-required directory.
<br>
<p>On Mar 24, 2011, at 12:29 PM, Silas Silva wrote:
<br>
<p><span class="quotelev1">&gt; Hello there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI for educational reasons.  It works pretty fine under
</span><br>
<span class="quotelev1">&gt; GNU/Linux.  I have both compiled it and downloaded it from the package
</span><br>
<span class="quotelev1">&gt; management system with no problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I have trying to use it in other Unix systems as well.  In these
</span><br>
<span class="quotelev1">&gt; systems /proc (NetBSD for instance) is by default unmounted, so
</span><br>
<span class="quotelev1">&gt; ./configure script cannot stat /proc/cpuinfo (although it does exist in
</span><br>
<span class="quotelev1">&gt; NetBSD if you manually mount /proc).  In the case it cannot stat
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo, it just silently ignores compilation of
</span><br>
<span class="quotelev1">&gt; mca_sysinfo_linux.{so,la}.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this behaviour correct?  Or it would be be a better idea that
</span><br>
<span class="quotelev1">&gt; configure script fail with a &quot;please check /proc/cpuinfo or specify
</span><br>
<span class="quotelev1">&gt; --dont-build-sysinfo-linux&quot;-like message?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Silas Silva
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9129.php">Hugo Meyer: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>Previous message:</strong> <a href="9127.php">Ralph Castain: "Re: [OMPI devel] Add child to another parent."</a>
<li><strong>In reply to:</strong> <a href="9126.php">Silas Silva: "[OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9131.php">Jeff Squyres: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
