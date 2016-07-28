<?
$subject_val = "[OMPI devel] OMPI 1.4.5rc1 tested: gm";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 00:38:06 2011" -->
<!-- isoreceived="20111214053806" -->
<!-- sent="Tue, 13 Dec 2011 21:37:45 -0800" -->
<!-- isosent="20111214053745" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.4.5rc1 tested: gm" -->
<!-- id="4EE83629.6060803_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FA4CADBB-0548-44CE-87BD-641A7CB97A2C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.4.5rc1 tested: gm<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 00:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10093.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Previous message:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Reply:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On one of the same &quot;System 2&quot; that I used to check compilation against 
<br>
Quadrics Elan, I have multiple versions of the Myrinet GM headers/libs.
<br>
<p>System 2: Linux/x86
<br>
<span class="quotelev1">&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; Red Hat Linux release 8.0 (Psyche)
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux [hostname] 2.4.21-60.ELsmp #1 SMP Fri Aug 28 06:45:10 EDT 2009 
</span><br>
<span class="quotelev1">&gt; i686 i686 i386 GNU/Linux
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 3.4.0 
</span><br>
<p>I tried to build against the following GM releases:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gm-2.0.19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gm-2.0.12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gm-2.0.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gm-1.6.4
<br>
<p>All four &quot;make all install check&quot; w/o incident.
<br>
<p>Additionally, I have a newer system:
<br>
<p>System 3: Linux/x86-64
<br>
<span class="quotelev1">&gt; $ cat /etc/redhat-release
</span><br>
<span class="quotelev1">&gt; Scientific Linux SL release 5.5 (Boron)
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux [hostname] 2.6.18-238.1.1.el5 #1 SMP Tue Jan 18 18:49:37 EST 
</span><br>
<span class="quotelev1">&gt; 2011 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; $ gcc --version | head -1
</span><br>
<span class="quotelev1">&gt; gcc (GCC) 4.1.2 20080704 (Red Hat 4.1.2-48)
</span><br>
<p>This is running (w/ actual h/w) gm-2.1.30.
<br>
Again, &quot;make all install check&quot; runs w/o incident.
<br>
<p>-Paul
<br>
<p><p><p>On 12/8/2011 2:13 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 1.4.5rc1 is now posted in the usual place:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gearing up for a pre-Christmas release -- please test!  There have only been a few bug fixes since 1.4.4.  See <a href="http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS">http://svn.open-mpi.org/svn/ompi/branches/v1.4/NEWS</a> for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that we'll likely have a 1.5.5rc1 shortly, too)
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="10093.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: hwloc build failure on Red Hat Linux 8"</a>
<li><strong>Previous message:</strong> <a href="10091.php">Paul H. Hargrove: "[OMPI devel] 1.5.5rc1 tested: REGRESSION on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="10054.php">Jeff Squyres: "[OMPI devel] OMPI 1.4.5rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
<li><strong>Reply:</strong> <a href="10118.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.5rc1 tested: gm"</a>
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
