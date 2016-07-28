<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 20:02:07 2014" -->
<!-- isoreceived="20140118010207" -->
<!-- sent="Fri, 17 Jan 2014 17:02:05 -0800" -->
<!-- isosent="20140118010205" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA15Qfi8qTgzLLMdB+ShDA1X0fVegZLnpVmSU7Wnx7RAAhg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA14mOrorGyTBQc+Fm9cbe4db6k75cTCev80WXpAs-v22Jg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 20:02:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: PathScale 3.2.99 compilers yield the same complaints.
<br>
<p>-Paul
<br>
<p><p>On Fri, Jan 17, 2014 at 4:59 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building the v1.7 tarball (1.7.4rc2r30303) with the PathScale compilers
</span><br>
<span class="quotelev1">&gt; (v4.0.12.1) I hit the errors shown below.  I've attached config.log and
</span><br>
<span class="quotelev1">&gt; configure's stdout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but I
</span><br>
<span class="quotelev1">&gt; am reporting this for completeness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PPFC     mpi-f08-interfaces-callbacks.lo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module mpi_f08_interfaces_callbacks
</span><br>
<span class="quotelev1">&gt;        ^
</span><br>
<span class="quotelev1">&gt; pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 9, Column = 8
</span><br>
<span class="quotelev1">&gt;   The compiler has detected errors in module
</span><br>
<span class="quotelev1">&gt; &quot;MPI_F08_INTERFACES_CALLBACKS&quot;.  No module information file will be created
</span><br>
<span class="quotelev1">&gt; for this module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 66, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                                          ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 89, Column = 74
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                                           ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 112, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror)
</span><br>
<span class="quotelev1">&gt; BIND(C)
</span><br>
<span class="quotelev1">&gt;                                                     ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 184, Column = 53
</span><br>
<span class="quotelev1">&gt;   For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Fri Jan 17, 2014
</span><br>
<span class="quotelev1">&gt;  16:32:38
</span><br>
<span class="quotelev1">&gt; pathf95: 406 source lines
</span><br>
<span class="quotelev1">&gt; pathf95: 5 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
</span><br>
<span class="quotelev1">&gt; pathf95: &quot;explain pathf95-message number&quot; gives more information about
</span><br>
<span class="quotelev1">&gt; each message
</span><br>
<span class="quotelev1">&gt; make[2]: *** [mpi-f08-interfaces-callbacks.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13801.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>Previous message:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>In reply to:</strong> <a href="13799.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13833.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
