<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 23 03:15:30 2008" -->
<!-- isoreceived="20081123081530" -->
<!-- sent="Sun, 23 Nov 2008 09:15:19 +0100" -->
<!-- isosent="20081123081519" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081123081519.GC24060_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20081120180031.GC20093_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-11-23 03:15:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[ Libtool list readers: this thread is
<br>
&nbsp;&nbsp;&lt;<a href="http://www.open-mpi.org/community/lists/devel/2008/11/4937.php">http://www.open-mpi.org/community/lists/devel/2008/11/4937.php</a>&gt; ]
<br>
<p>I'm applying this patch to Libtool master, to fix $wl for the Sun Ceres
<br>
Fortran compiler.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fix matching of Sun Fortran compiler on Linux.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* libltdl/m4/libtool.m4 (_LT_COMPILER_PIC) [ linux ]: Also
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
index 35d7d5c..bb2e6ef 100644
<br>
--- a/libltdl/m4/libtool.m4
<br>
+++ b/libltdl/m4/libtool.m4
<br>
@@ -3941,17 +3941,17 @@ m4_if([$1], [CXX], [
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
<li><strong>Next message:</strong> <a href="4946.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<li><strong>Previous message:</strong> <a href="4944.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>In reply to:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4934.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
