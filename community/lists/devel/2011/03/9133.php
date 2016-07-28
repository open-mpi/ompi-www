<?
$subject_val = "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 21:58:41 2011" -->
<!-- isoreceived="20110325015841" -->
<!-- sent="Thu, 24 Mar 2011 23:00:49 -0300" -->
<!-- isosent="20110325020049" -->
<!-- name="Silas Silva" -->
<!-- email="silasdb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist" -->
<!-- id="20110325020048.GA542_at_ghost.tifa.renegado" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8BF557.6000106_at_lbl.gov" -->
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
<strong>From:</strong> Silas Silva (<em>silasdb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 22:00:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9138.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul,
<br>
<p>On Thu, Mar 24, 2011 at 06:52:23PM -0700, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Silas,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: openmpi-1.4.1 is in the package repo for NetBSD 5.1.  So, you
</span><br>
<span class="quotelev1">&gt; might not need to build from scratch at all, depending on your
</span><br>
<span class="quotelev1">&gt; desired use.
</span><br>
<p>I'm actually not building it from scratch  :-)  I'm using the pkgsrc
<br>
package manager (www.pkgsrc.org) that is source based and create binary
<br>
packages in the local computer.  The problem is that the contents of the
<br>
package differs in the case when /proc is mounted...
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When available (remember that unlike Linux /proc might not be
</span><br>
<span class="quotelev1">&gt; mounted by default) the /proc/cpuinfo and /proc/meminfo on NetBSD
</span><br>
<span class="quotelev1">&gt; 5.1 are (nearly?) identical to the Linux ones.  See below for an
</span><br>
<span class="quotelev1">&gt; example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To &quot;prefetch&quot; the next logical question:
</span><br>
<span class="quotelev1">&gt; On a FreeBSD 8.1 system I find that /proc exists but does not
</span><br>
<span class="quotelev1">&gt; contain cpuinfo or meminfo
</span><br>
<span class="quotelev1">&gt; On a OpenBSD 4.8 system I find that there is no /proc
</span><br>
<p>I was just pasting NetBSD's /proc/{cpuinfo,meminfo}.  Thanks for doing
<br>
that :-) But yeah, other systems might not have this.  I know working on
<br>
portability can be painful.  That is why most projects support GNU/Linux
<br>
only and let other systems developers port their application.  Anyway,
<br>
can /proc be unmounted in GNU/Linux somehow?
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
<li><strong>Next message:</strong> <a href="9134.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Previous message:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>In reply to:</strong> <a href="9132.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9136.php">Ralph Castain: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
<li><strong>Reply:</strong> <a href="9138.php">Paul H. Hargrove: "Re: [OMPI devel] Build mca_sysinfo_linux module when /proc/cpuinfo doesn't exist"</a>
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
