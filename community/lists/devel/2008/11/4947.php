<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 24 08:39:20 2008" -->
<!-- isoreceived="20081124133920" -->
<!-- sent="Mon, 24 Nov 2008 06:39:13 -0700" -->
<!-- isosent="20081124133913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="3620283B-94A3-4DBC-A86E-16C717B74996_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081123081912.GD24060_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-24 08:39:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 23, 2008, at 1:19 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Ethan Mallove wrote on Fri, Nov 21, 2008 at 09:01:56PM CET:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Nov/21/2008 01:02:12PM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMHO OpenMPI can use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the solaris_use_stlport4=yes until such a functionality is in place.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nice. This workaround works. I don't suppose there's a similar
</span><br>
<span class="quotelev2">&gt;&gt; workaround to unset &quot;wl&quot; in the FC libtool section? If not, I think  
</span><br>
<span class="quotelev2">&gt;&gt; we
</span><br>
<span class="quotelev2">&gt;&gt; still need the heinous post-configure workaround script. Otherwise,
</span><br>
<span class="quotelev2">&gt;&gt; since there won't be a stable Libtool that contains the Sun Fortran
</span><br>
<span class="quotelev2">&gt;&gt; fix for a while, I propose the attached patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While I suppose your patch works, I think in similar situations,  
</span><br>
<span class="quotelev1">&gt; OpenMPI
</span><br>
<span class="quotelev1">&gt; has resorted to patching input files to configure (like aclocal.m4 or
</span><br>
<span class="quotelev1">&gt; ltmain.sh).  Search autogen.sh for instances of 'patch'.
</span><br>
<p><p>Interesting observation - I wonder if that would explain why I  
<br>
recently started seeing an &quot;aclocal.m4.rej&quot; file every time I re-gen  
<br>
the trunk?
<br>
<p>Maybe one of those patches has an error in it?
<br>
Ralph
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (This is merely an observation; I am not an OpenMPI developer.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="4948.php">Peter Kjellstrom: "[OMPI devel] gather-bug reminder/re-post"</a>
<li><strong>Previous message:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4949.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
