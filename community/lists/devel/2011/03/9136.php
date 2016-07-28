<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 22:03:33 2011" -->
<!-- isoreceived="20110325020333" -->
<!-- sent="Thu, 24 Mar 2011 20:03:25 -0600" -->
<!-- isosent="20110325020325" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="463C4595-7D33-4C48-8DC6-0B521F014353_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 22:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2011, at 8:00 PM, Silas Silva wrote:
<br>
<p><span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 24, 2011 at 06:52:23PM -0700, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Silas,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FYI: openmpi-1.4.1 is in the package repo for NetBSD 5.1.  So, you
</span><br>
<span class="quotelev2">&gt;&gt; might not need to build from scratch at all, depending on your
</span><br>
<span class="quotelev2">&gt;&gt; desired use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm actually not building it from scratch  :-)  I'm using the pkgsrc
</span><br>
<span class="quotelev1">&gt; package manager (www.pkgsrc.org) that is source based and create binary
</span><br>
<span class="quotelev1">&gt; packages in the local computer.  The problem is that the contents of the
</span><br>
<span class="quotelev1">&gt; package differs in the case when /proc is mounted...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When available (remember that unlike Linux /proc might not be
</span><br>
<span class="quotelev2">&gt;&gt; mounted by default) the /proc/cpuinfo and /proc/meminfo on NetBSD
</span><br>
<span class="quotelev2">&gt;&gt; 5.1 are (nearly?) identical to the Linux ones.  See below for an
</span><br>
<span class="quotelev2">&gt;&gt; example.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; To &quot;prefetch&quot; the next logical question:
</span><br>
<span class="quotelev2">&gt;&gt; On a FreeBSD 8.1 system I find that /proc exists but does not
</span><br>
<span class="quotelev2">&gt;&gt; contain cpuinfo or meminfo
</span><br>
<span class="quotelev2">&gt;&gt; On a OpenBSD 4.8 system I find that there is no /proc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was just pasting NetBSD's /proc/{cpuinfo,meminfo}.  Thanks for doing
</span><br>
<span class="quotelev1">&gt; that :-) But yeah, other systems might not have this.  I know working on
</span><br>
<span class="quotelev1">&gt; portability can be painful.  That is why most projects support GNU/Linux
</span><br>
<span class="quotelev1">&gt; only and let other systems developers port their application.  Anyway,
</span><br>
<span class="quotelev1">&gt; can /proc be unmounted in GNU/Linux somehow?
</span><br>
<p>Why would you want to do that, if it even were possible (which I'm pretty sure it isn't)?
<br>
<p>Like I said earlier, you don't need sysinfo to run an MPI job. So if it isn't being built, you can ignore it.
<br>
<p>If you are having problems building for some reason, then just add this to your configure:
<br>
<p>--enable-mca-no-build=sysinfo
<br>
<p>and we won't even try to build it.
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9135.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9133.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9137.php">Silas Silva: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
