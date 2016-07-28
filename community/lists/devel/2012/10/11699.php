<?
$subject_val = "Re: [OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 01:12:51 2012" -->
<!-- isoreceived="20121031051251" -->
<!-- sent="Tue, 30 Oct 2012 22:12:46 -0700" -->
<!-- isosent="20121031051246" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1" -->
<!-- id="CAAvDA15ZRuZ-LarqEQX5_xrf8FUG0ZWEcVBHf=85ohHoY-caaw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA17cBGw_+YxifXxBwmjens-bsA5CYrUROy4TMONm7ixtwg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 01:12:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11698.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w/ XLF"</a>
<li><strong>In reply to:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
pathf95 from PathScale's 3.2.99 compiler suite fails in the same manner:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.... LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p>-Paul
<br>
<p>On Tue, Oct 30, 2012 at 9:03 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have a Linux/x86-64 system with PathScale's &quot;ekopath-4.0.12.1&quot; compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building Fortran 2008 support fails as shown below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My records show the ompi-1.5 branch and a Feb 2012 trunk were OK on this
</span><br>
<span class="quotelev1">&gt; configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
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
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) &amp;
</span><br>
<span class="quotelev1">&gt;                                                                           ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 66, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; attribute_val_in,attribute_val_out,flag,ierror) &amp;
</span><br>
<span class="quotelev1">&gt;                                                                          ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 91, Column = 74
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  attribute_val_in,attribute_val_out,flag,ierror) &amp;
</span><br>
<span class="quotelev1">&gt;                                                                           ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 116, Column = 75
</span><br>
<span class="quotelev1">&gt;   For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror) &amp;
</span><br>
<span class="quotelev1">&gt;                                                     ^
</span><br>
<span class="quotelev1">&gt; pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File =
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/openmpi-1.7rc5/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
</span><br>
<span class="quotelev1">&gt; Line = 195, Column = 53
</span><br>
<span class="quotelev1">&gt;   For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Tue Oct 30, 2012
</span><br>
<span class="quotelev1">&gt;  20:45:48
</span><br>
<span class="quotelev1">&gt; pathf95: 429 source lines
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
<span class="quotelev1">&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/base'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/global/scratch/sd/hargrove/OMPI/openmpi-1.7rc5-linux-x86_64-pathcc-4.0/BLD/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 30, 2012 at 7:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have posted the next release candidate (rc5) for the 1.7.0 release in
</span><br>
<span class="quotelev2">&gt;&gt; the usual place:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please put it thru the wringer to help us validate it prior to release
</span><br>
<span class="quotelev2">&gt;&gt; later this month. We think this looks pretty complete, pending someone
</span><br>
<span class="quotelev2">&gt;&gt; finding a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11699/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11700.php">Dmitri Gribenko: "Re: [OMPI devel] Compile-time MPI_Datatype checking"</a>
<li><strong>Previous message:</strong> <a href="11698.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w/ XLF"</a>
<li><strong>In reply to:</strong> <a href="11696.php">Paul Hargrove: "[OMPI devel] 1.7.0rc5 - FORTRAN build failure w /pathcc-4.0.12.1"</a>
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
