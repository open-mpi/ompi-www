<?
$subject_val = "Re: [OMPI devel] 1.5 supported systems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 23 06:05:49 2012" -->
<!-- isoreceived="20120223110549" -->
<!-- sent="Thu, 23 Feb 2012 06:05:41 -0500" -->
<!-- isosent="20120223110541" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.5 supported systems" -->
<!-- id="4F461D85.1030604_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F459C97.1080801_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.5 supported systems<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-23 06:05:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10577.php">TERRY DONTJE: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10575.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually think the systems tested line for Solaris should read:
<br>
- Oracle Solaris 10 and 11, 32 and 64 bit (SPARC, i386, x86_64), with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oracle Solaris Studio 12.2 and 12.3
<br>
<p>--td
<br>
On 2/22/2012 8:55 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Folks at Oracle should decide, but I suspect &quot;Solaris 10&quot; should be 
</span><br>
<span class="quotelev1">&gt; updated to &quot;Solaris 10 and 11&quot;, or just &quot;11&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/22/2012 2:44 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please verify this list of supported systems for the v1.5.5 release:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - The run-time systems that are currently supported are:
</span><br>
<span class="quotelev2">&gt;&gt;    - rsh / ssh
</span><br>
<span class="quotelev2">&gt;&gt;    - LoadLeveler
</span><br>
<span class="quotelev2">&gt;&gt;    - PBS Pro, Open PBS, Torque
</span><br>
<span class="quotelev2">&gt;&gt;    - Platform LSF (v7.0.2 and later)
</span><br>
<span class="quotelev2">&gt;&gt;    - SLURM
</span><br>
<span class="quotelev2">&gt;&gt;    - Cray XT-3, XT-4, and XT-5
</span><br>
<span class="quotelev2">&gt;&gt;    - Oracle Grid Engine (OGE) 6.1, 6.2 and open source Grid Engine
</span><br>
<span class="quotelev2">&gt;&gt;    - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Systems that have been tested are:
</span><br>
<span class="quotelev2">&gt;&gt;    - Linux (various flavors/distros), 32 bit, with gcc, and Oracle
</span><br>
<span class="quotelev2">&gt;&gt;      Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;    - Linux (various flavors/distros), 64 bit (x86), with gcc, Absoft,
</span><br>
<span class="quotelev2">&gt;&gt;      Intel, Portland, and Oracle Solaris Studio 12 compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;    - OS X (10.5, 10.6, 10.7), 32 and 64 bit (x86_64), with gcc and
</span><br>
<span class="quotelev2">&gt;&gt;      Absoft compilers (*)
</span><br>
<span class="quotelev2">&gt;&gt;    - Oracle Solaris 10, 32 and 64 bit (SPARC, i386, x86_64), with
</span><br>
<span class="quotelev2">&gt;&gt;      Oracle Solaris Studio 12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    (*) Be sure to read the Compiler Notes, below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Other systems have been lightly (but not fully tested):
</span><br>
<span class="quotelev2">&gt;&gt;    - Other 64 bit platforms (e.g., Linux on PPC64)
</span><br>
<span class="quotelev2">&gt;&gt;    - Microsoft Windows CCP (Microsoft Windows server 2003 and 2008);
</span><br>
<span class="quotelev2">&gt;&gt;      see the README.WINDOWS file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10576/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10577.php">TERRY DONTJE: "Re: [OMPI devel] v1.5 build failure w/ Solaris Studio 12.2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="10575.php">Paul Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>In reply to:</strong> <a href="10571.php">Paul H. Hargrove: "Re: [OMPI devel] 1.5 supported systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
<li><strong>Reply:</strong> <a href="10578.php">Jeffrey Squyres: "Re: [OMPI devel] 1.5 supported systems"</a>
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
