<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 13:00:38 2008" -->
<!-- isoreceived="20081120180038" -->
<!-- sent="Thu, 20 Nov 2008 19:00:31 +0100" -->
<!-- isosent="20081120180031" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081120180031.GC20093_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081120175209.GD240_at_sun.com" -->
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
<strong>Date:</strong> 2008-11-20 13:00:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4936.php">Ralph Castain: "[OMPI devel] IOF round 2"</a>
<li><strong>Previous message:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Our previous mails overlapped, sorry about that.
<br>
<p>* Ethan Mallove wrote on Thu, Nov 20, 2008 at 06:52:09PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The above appears to be looking for a Fortran version string from the
</span><br>
<span class="quotelev1">&gt; C compiler, but it wouldn't match our version string anyway:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ f90 -V
</span><br>
<span class="quotelev1">&gt;   f90: Sun Ceres Fortran 95 8.3 SunOS_sparc 2008/01/28
</span><br>
<p>Ah, ok.  Please try the patch below instead of yours, thanks.
<br>
Do you mind being added to libtool/THANKS (includes email address)?
<br>
<p><span class="quotelev1">&gt; I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
</span><br>
<span class="quotelev1">&gt; this line appears in the libtool script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   postdeps=&quot;-library=Cstd -library=Crun&quot;
</span><br>
<p>Do you have the string &quot; -library=stlport4 &quot; in $CXX $CXXFLAGS?
<br>
If not, then how can Libtool detect that you use stlport?
<br>
<p>Thanks,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* libltdl/m4/libtool.m4 (_LT_COMPILER_PIC) [ linux ]: Also
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;match `Sun Ceres Fortran' compiler; reorder with C compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matching.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* THANKS: Update.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Report by Ethan Mallove.
<br>
<p>diff --git a/libltdl/m4/libtool.m4 b/libltdl/m4/libtool.m4
<br>
index 7fbf965..d90c4f4 100644
<br>
--- a/libltdl/m4/libtool.m4
<br>
+++ b/libltdl/m4/libtool.m4
<br>
@@ -3947,17 +3947,17 @@ m4_if([$1], [CXX], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;case `$CC -V 2&gt;&amp;1 | sed 5q` in
<br>
-	*Sun\ C*)
<br>
-	  # Sun C 5.9
<br>
+	*Sun\ F* | *Sun*Fortran*)
<br>
+	  # Sun Fortran 8.3 passes all unrecognized flags to the linker
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
<br>
-	  _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,'
<br>
+	  _LT_TAGVAR(lt_prog_compiler_wl, $1)=''
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
-	*Sun\ F*)
<br>
-	  # Sun Fortran 8.3 passes all unrecognized flags to the linker
<br>
+	*Sun\ C*)
<br>
+	  # Sun C 5.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
<br>
-	  _LT_TAGVAR(lt_prog_compiler_wl, $1)=''
<br>
+	  _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;esac
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4936.php">Ralph Castain: "[OMPI devel] IOF round 2"</a>
<li><strong>Previous message:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4932.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4937.php">Ethan Mallove: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4945.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
