<?
$subject_val = "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 16:33:13 2008" -->
<!-- isoreceived="20081120213313" -->
<!-- sent="Thu, 20 Nov 2008 16:33:08 -0500" -->
<!-- isosent="20081120213308" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure" -->
<!-- id="20081120213308.GE240_at_sun.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-20 16:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4936.php">Ralph Castain: "[OMPI devel] IOF round 2"</a>
<li><strong>In reply to:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov/20/2008 07:00:31PM, Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Our previous mails overlapped, sorry about that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Ethan Mallove wrote on Thu, Nov 20, 2008 at 06:52:09PM CET:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The above appears to be looking for a Fortran version string from the
</span><br>
<span class="quotelev2">&gt; &gt; C compiler, but it wouldn't match our version string anyway:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   $ f90 -V
</span><br>
<span class="quotelev2">&gt; &gt;   f90: Sun Ceres Fortran 95 8.3 SunOS_sparc 2008/01/28
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, ok.  Please try the patch below instead of yours, thanks.
</span><br>
<p>Your patch seems to work, though I get this:
<br>
<p>&nbsp;&nbsp;&nbsp;libtool: Version mismatch error.  This is libtool 2.2.7a, but the
<br>
&nbsp;&nbsp;&nbsp;libtool: definition of this LT_INIT comes from libtool 2.2.6.
<br>
&nbsp;&nbsp;&nbsp;libtool: You should recreate aclocal.m4 with macros from libtool 2.2.7a
<br>
&nbsp;&nbsp;&nbsp;libtool: and run autoconf again.
<br>
<p>I take it the above error will occur if I have two different libtools
<br>
in my PATH?
<br>
<p>This comment could be a little misleading because the same is true for
<br>
Sun Fortran 8.1 and 8.2:
<br>
<p>&nbsp;&nbsp;# Sun Fortran 8.3 passes all unrecognized flags to the linker
<br>
<p>I don't know of a version of Sun Fortran that accepts -Wl the way GNU
<br>
Fortran does. I will let you know if I find one.
<br>
<p><span class="quotelev1">&gt; Do you mind being added to libtool/THANKS (includes email address)?
</span><br>
<p>I do not mind.
<br>
<p><span class="quotelev2">&gt; &gt; I'm still running into the Cstd/stlport4 issue with 2.2.6. That is,
</span><br>
<span class="quotelev2">&gt; &gt; this line appears in the libtool script:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   postdeps=&quot;-library=Cstd -library=Crun&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have the string &quot; -library=stlport4 &quot; in $CXX $CXXFLAGS?
</span><br>
<span class="quotelev1">&gt; If not, then how can Libtool detect that you use stlport?
</span><br>
<p>Ok. When I use -library=stlport4, I get libstlport linked to
<br>
libmpi_cxx, instead of libCstd. Doesn't that then lock the user into
<br>
having to use stlport4 when we want them to be able to use either Cstd
<br>
or stlport4?
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	* libltdl/m4/libtool.m4 (_LT_COMPILER_PIC) [ linux ]: Also
</span><br>
<span class="quotelev1">&gt;         match `Sun Ceres Fortran' compiler; reorder with C compiler
</span><br>
<span class="quotelev1">&gt; 	matching.
</span><br>
<span class="quotelev1">&gt; 	* THANKS: Update.
</span><br>
<span class="quotelev1">&gt; 	Report by Ethan Mallove.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/libltdl/m4/libtool.m4 b/libltdl/m4/libtool.m4
</span><br>
<span class="quotelev1">&gt; index 7fbf965..d90c4f4 100644
</span><br>
<span class="quotelev1">&gt; --- a/libltdl/m4/libtool.m4
</span><br>
<span class="quotelev1">&gt; +++ b/libltdl/m4/libtool.m4
</span><br>
<span class="quotelev1">&gt; @@ -3947,17 +3947,17 @@ m4_if([$1], [CXX], [
</span><br>
<span class="quotelev1">&gt;  	;;
</span><br>
<span class="quotelev1">&gt;        *)
</span><br>
<span class="quotelev1">&gt;  	case `$CC -V 2&gt;&amp;1 | sed 5q` in
</span><br>
<span class="quotelev1">&gt; -	*Sun\ C*)
</span><br>
<span class="quotelev1">&gt; -	  # Sun C 5.9
</span><br>
<span class="quotelev1">&gt; +	*Sun\ F* | *Sun*Fortran*)
</span><br>
<span class="quotelev1">&gt; +	  # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev1">&gt;  	  _LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
</span><br>
<span class="quotelev1">&gt;  	  _LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev1">&gt; -	  _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,'
</span><br>
<span class="quotelev1">&gt; +	  _LT_TAGVAR(lt_prog_compiler_wl, $1)=''
</span><br>
<span class="quotelev1">&gt;  	  ;;
</span><br>
<span class="quotelev1">&gt; -	*Sun\ F*)
</span><br>
<span class="quotelev1">&gt; -	  # Sun Fortran 8.3 passes all unrecognized flags to the linker
</span><br>
<span class="quotelev1">&gt; +	*Sun\ C*)
</span><br>
<span class="quotelev1">&gt; +	  # Sun C 5.9
</span><br>
<span class="quotelev1">&gt;  	  _LT_TAGVAR(lt_prog_compiler_pic, $1)='-KPIC'
</span><br>
<span class="quotelev1">&gt;  	  _LT_TAGVAR(lt_prog_compiler_static, $1)='-Bstatic'
</span><br>
<span class="quotelev1">&gt; -	  _LT_TAGVAR(lt_prog_compiler_wl, $1)=''
</span><br>
<span class="quotelev1">&gt; +	  _LT_TAGVAR(lt_prog_compiler_wl, $1)='-Wl,'
</span><br>
<span class="quotelev1">&gt;  	  ;;
</span><br>
<span class="quotelev1">&gt;  	esac
</span><br>
<span class="quotelev1">&gt;  	;;
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
<li><strong>Next message:</strong> <a href="4938.php">Rainer Keller: "Re: [OMPI devel] RFC: merge windows branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="4936.php">Ralph Castain: "[OMPI devel] IOF round 2"</a>
<li><strong>In reply to:</strong> <a href="4935.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4940.php">Terry Dontje: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script	for	post-configure"</a>
<li><strong>Reply:</strong> <a href="4941.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Add SunStudio/Libtool helper script for	post-configure"</a>
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
