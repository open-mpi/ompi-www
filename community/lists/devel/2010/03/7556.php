<?
$subject_val = "Re: [OMPI devel] Missing Symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 18:26:19 2010" -->
<!-- isoreceived="20100305232619" -->
<!-- sent="Fri, 5 Mar 2010 18:26:13 -0500" -->
<!-- isosent="20100305232613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing Symbol" -->
<!-- id="E42AE6BB-E808-4A97-8CC3-6FA709B22719_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48530242-9656-4496-B20D-2456F2F66AA1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing Symbol<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 18:26:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 6:02 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; I wondered aloud on IM to Terry after your earlier emails if we should just custom-patch ltdl in OMPI to fix this issue.  The problem is that libltdl is effectively reporting the &quot;wrong&quot; error back to OMPI, so the error string that we get to print out ends up not being very useful (e.g., not showing which symbol was missing, or what the problem was with the dlopen).  Fixing this properly in libltdl is actually somewhat tricky -- which is why it hasn't been fixed yet.  But given that OMPI's use of libltdl is pretty specific, we might be able to get away with a simple fix that works just for OMPI (but wouldn't necessarily be suitable for all other libltdl users).
</span><br>
<p>I made a patch for exactly what I described: it comments out the preopen module's setting of FILE_NOT_FOUND.  But  now I'm getting foiled by the use of RTLD_LAZY.  For example, if I add a bogus symbol that can't be resolved into the TCP BTL, I get this when I run ompi_info:
<br>
<p>-----
<br>
...lots of ompi_info config output...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
dyld: lazy symbol binding failed: Symbol not found: _jeffs_symbol_that_does_not_exist
<br>
&nbsp;&nbsp;Referenced from: /Users/jsquyres/bogus/lib/openmpi/mca_btl_tcp.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
[ ompi_info aborts ]
<br>
-----
<br>
<p>This is happening because libltdl's dlopen() is being invoked with RTLD_LAZY so the fact that a symbol can't be resolved at dlopen() time is not a problem.  It becomes a fatal problem later when the component's open function is invoked and my unresolved symbol is exposed in all of its glory.
<br>
<p>If I manually change the LT_LAZY_OR_NOW to RTLD_NOW in the libltdl/loaders/dlopen.c, then I get the behavior I was expecting:
<br>
<p>------
<br>
...lots of ompi_info config output...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
[rtp-jsquyres-8717.cisco.com:89384] mca: base: component_find: unable to open /Users/jsquyres/bogus/lib/openmpi/mca_btl_tcp: dlopen(/Users/jsquyres/bogus/lib/openmpi/mca_btl_tcp.so, 10): Symbol not found: _jeffs_symbol_that_does_not_exist
<br>
&nbsp;&nbsp;Referenced from: /Users/jsquyres/bogus/lib/openmpi/mca_btl_tcp.so
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /Users/jsquyres/bogus/lib/openmpi/mca_btl_tcp.so (ignored)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA backtrace: execinfo (MCA v2.0, API v2.0, Component v1.7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA paffinity: darwin (MCA v2.0, API v2.0, Component v1.7)
<br>
...lots of ompi_info config output...
<br>
-----
<br>
<p>I.e., the dlopen() fails and my patch causes us to actually get a reasonable error message from libltdl.
<br>
<p>So:
<br>
<p>1. Given that I'm seeing this on both Linux (RHEL4) and OSX, the LT_LAZY_OR_NOW must be resolving the RTLD_LAZY on both Linux and OSX -- so how are you getting the error message that you're getting?  Is your system somehow using RTLD_NOW?
<br>
<p>2. If OSX and Linux both use RTLD_LAZY, is my patch useful?  I'm hesitant to add it if it's only partially (or not at all) useful...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7557.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>Previous message:</strong> <a href="7555.php">George Bosilca: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7553.php">Jeff Squyres: "Re: [OMPI devel] Missing Symbol"</a>
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
