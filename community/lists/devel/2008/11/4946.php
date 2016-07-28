<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 23 03:19:20 2008" -->
<!-- isoreceived="20081123081920" -->
<!-- sent="Sun, 23 Nov 2008 09:19:12 +0100" -->
<!-- isosent="20081123081912" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081123081912.GD24060_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081121200155.GF240_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-23 03:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ethan Mallove wrote on Fri, Nov 21, 2008 at 09:01:56PM CET:
<br>
<span class="quotelev1">&gt; On Fri, Nov/21/2008 01:02:12PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt; &gt; IMHO OpenMPI can use
</span><br>
<span class="quotelev2">&gt; &gt; the solaris_use_stlport4=yes until such a functionality is in place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice. This workaround works. I don't suppose there's a similar
</span><br>
<span class="quotelev1">&gt; workaround to unset &quot;wl&quot; in the FC libtool section? If not, I think we
</span><br>
<span class="quotelev1">&gt; still need the heinous post-configure workaround script. Otherwise,
</span><br>
<span class="quotelev1">&gt; since there won't be a stable Libtool that contains the Sun Fortran
</span><br>
<span class="quotelev1">&gt; fix for a while, I propose the attached patch.
</span><br>
<p>While I suppose your patch works, I think in similar situations, OpenMPI
<br>
has resorted to patching input files to configure (like aclocal.m4 or
<br>
ltmain.sh).  Search autogen.sh for instances of 'patch'.
<br>
<p>(This is merely an observation; I am not an OpenMPI developer.)
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4943.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4947.php">Ralph Castain: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4952.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
