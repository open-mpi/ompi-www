<?
$subject_val = "[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 19:59:08 2014" -->
<!-- isoreceived="20140118005908" -->
<!-- sent="Fri, 17 Jan 2014 16:59:04 -0800" -->
<!-- isosent="20140118005904" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="CAAvDA14mOrorGyTBQc+Fm9cbe4db6k75cTCev80WXpAs-v22Jg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 19:59:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building the v1.7 tarball (1.7.4rc2r30303) with the PathScale compilers
<br>
(v4.0.12.1) I hit the errors shown below.  I've attached config.log and
<br>
configure's stdout.
<br>
<p>&quot;We don't care about that compiler&quot; is an acceptable (to me) answer, but I
<br>
am reporting this for completeness.
<br>
<p>-Paul
<br>
<p>&nbsp;&nbsp;PPFC     mpi-f08-interfaces-callbacks.lo
<br>
<p>module mpi_f08_interfaces_callbacks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-855 pathf95: ERROR MPI_F08_INTERFACES_CALLBACKS, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
<br>
Line = 9, Column = 8
<br>
&nbsp;&nbsp;The compiler has detected errors in module
<br>
&quot;MPI_F08_INTERFACES_CALLBACKS&quot;.  No module information file will be created
<br>
for this module.
<br>
<p><p>&nbsp;attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>pathf95-1691 pathf95: ERROR MPI_COMM_COPY_ATTR_FUNCTION, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
<br>
Line = 66, Column = 75
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p><p>attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-1691 pathf95: ERROR MPI_WIN_COPY_ATTR_FUNCTION, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
<br>
Line = 89, Column = 74
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p><p>&nbsp;attribute_val_in,attribute_val_out,flag,ierror) BIND(C)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-1691 pathf95: ERROR MPI_TYPE_COPY_ATTR_FUNCTION, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
<br>
Line = 112, Column = 75
<br>
&nbsp;&nbsp;For &quot;FLAG&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p>SUBROUTINE MPI_Grequest_cancel_function(extra_state,complete,ierror) BIND(C)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
pathf95-1691 pathf95: ERROR MPI_GREQUEST_CANCEL_FUNCTION, File =
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/openmpi-1.7.4rc2r30303/ompi/mpi/fortran/base/mpi-f08-interfaces-callbacks.F90,
<br>
Line = 184, Column = 53
<br>
&nbsp;&nbsp;For &quot;COMPLETE&quot;, LOGICAL(KIND=4) not allowed with BIND(C)
<br>
<p>pathf95: PathScale(TM) Fortran Version 4.0.12.1 (f14) Fri Jan 17, 2014
<br>
&nbsp;16:32:38
<br>
pathf95: 406 source lines
<br>
pathf95: 5 Error(s), 0 Warning(s), 0 Other message(s), 0 ANSI(s)
<br>
pathf95: &quot;explain pathf95-message number&quot; gives more information about each
<br>
message
<br>
make[2]: *** [mpi-f08-interfaces-callbacks.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/global/scratch2/sd/hargrove/OMPI/openmpi-1.7.4-latest-linux-x86_64-pathcc-4.0/BLD/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13799/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13799/config.log.bz2">config.log.bz2</a>
</ul>
<!-- attachment="config.log.bz2" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13799/configure.stdout.bz2">configure.stdout.bz2</a>
</ul>
<!-- attachment="configure.stdout.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Previous message:</strong> <a href="13798.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13800.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
