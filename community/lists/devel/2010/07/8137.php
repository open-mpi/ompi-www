<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  4 23:17:23 2010" -->
<!-- isoreceived="20100705031723" -->
<!-- sent="Mon, 5 Jul 2010 15:17:07 +1200" -->
<!-- isosent="20100705031707" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down?" -->
<!-- id="03b3bc1843b788109d2bed2a4134ab27.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7EB300B7-27B6-4F7B-86AD-5914559F69F7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: thumbs up or down?<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v1.5:%20thumbs%20up%20or%20down?"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-04 23:17:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8138.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8136.php">Brad Benton: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Reply:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Can we get a thumbs up / down from each organization about where you
</span><br>
<span class="quotelev1">&gt; think we are with v1.5?  Cisco and HLRS obviously give a thumbs up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can't claim to speak for NetBSD but, for info, I have just managed
<br>
to COMPILE 1.5rc3 on a NetBSD platform.
<br>
<p>Notes:
<br>
======
<br>
<p>1) The patch NetBSD was applying to opal/util/if.c
<br>
<p>&nbsp;&nbsp;Rewrite network interface configuration using getifaddrs(3) for BSD,
<br>
<p>is no longer needed, so that's obviously now in the OpenMPI source.
<br>
<p>2) A couple of other NetBSD patches needed altering but mostly for
<br>
&nbsp;&nbsp;&nbsp;line numbers with an extra  couple of changes where OpenMPI has
<br>
&nbsp;&nbsp;&nbsp;changed a define from
<br>
<p>#if OMPI_WANT_LIBLTDL
<br>
<p>to
<br>
<p>#if OPAL_WANT_LIBLTDL
<br>
<p>3) I also had to disable the Vampire Trace toolkit build
<br>
<p>--enable-contrib-no-build=vt
<br>
<p>but then I had to do that for OpenMPI 1.4.2.
<br>
<p><p>4) The other thing that comes to mind are the mountain of WARNINGs
<br>
because of the &quot;redefinition&quot; of
<br>
<p>#define CACHE_LINE_SIZE 128
<br>
<p>in
<br>
<p>opal/include/opal/sys/cache.h
<br>
<p>although it's a bit &quot;chicken and egg&quot; because NetBSD's definition,
<br>
in:
<br>
<p>/usr/include/sys/param.h
<br>
<p>obviously allows one to redefine it, vis:
<br>
<p>#ifndef CACHE_LINE_SIZE
<br>
#define CACHE_LINE_SIZE         64
<br>
#endif
<br>
<p>so that's probably not an issue but at least you know about it.
<br>
<p><p>That OpenMPI #define should probably be wrapped in an #ifndef
<br>
to defeat the warnings but, as to which should be defined first,
<br>
by virtue of the order the order of the include files ... ?
<br>
<p><p>I'll try actually installing and running the thing when I get
<br>
a chance but thought you might appreciate some &quot;progress feedback&quot;
<br>
from a NetBSD platform trail.
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8138.php">’≈æß: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>Previous message:</strong> <a href="8136.php">Brad Benton: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
<li><strong>Reply:</strong> <a href="8139.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down?"</a>
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
