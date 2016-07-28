<?
$subject_val = "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 10 13:26:59 2014" -->
<!-- isoreceived="20140110182659" -->
<!-- sent="Fri, 10 Jan 2014 10:26:57 -0800" -->
<!-- isosent="20140110182657" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure" -->
<!-- id="CAAvDA16iXivU5ZssNARWKtDf5K5=xiFp5Q28h_2cigtgbCExfA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="500CA1BA-E60F-4B97-A5E7-F079055121D6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-10 13:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jan 10, 2014 at 7:49 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Paul --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output from configure looks ok to me.  We're testing for the various
</span><br>
<span class="quotelev1">&gt; capabilities of the fortran compiler that we need, most of which have been
</span><br>
<span class="quotelev1">&gt; around for quite a while.  One Big New Thing that isn't around yet is the
</span><br>
<span class="quotelev1">&gt; type(*), dimension(..) notation, which no fortran compiler supports yet.
</span><br>
<span class="quotelev1">&gt;  But *most* of the other new MPI-3 Fortran behavior has been around since
</span><br>
<span class="quotelev1">&gt; F2003 (maybe earlier? I'm no expert).  (I glossed over a few details here,
</span><br>
<span class="quotelev1">&gt; but you get the point)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, it's not entirely surprising to me that we're determining that an
</span><br>
<span class="quotelev1">&gt; &quot;old&quot; compiler is ok to build the mpi_f08 module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OMPI's configure says pgi-8.0 and pgi-9.0 are &quot;good&quot;.
<br>
But pgi-10.0 is rejected without even subjecting it to the tests.
<br>
This situation (8.0 and 9.0 &quot;better&quot; than 10.0) sounds fishy to me.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send the output from what happens when you try to build?  (or did
</span><br>
<span class="quotelev1">&gt; I miss that in another post?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
You didn't miss anything because I was focused on the idea that mpi_f08
<br>
shouldn't even have been attempted on these compilers.  See below for the
<br>
pgi-9.0 error messages.  8.0 was similar but output has been lost (scratch
<br>
f/s expiry).
<br>
<p>-Paul
<br>
<p>Making all in mpi/fortran/base/
<br>
make[2]: Entering directory
<br>
`/global/u1/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/BLD/ompi/mpi/fortran/base'
<br>
&nbsp;&nbsp;CC       libmpi_fortran_base_la-attr_fn_f.lo
<br>
&nbsp;&nbsp;CC       libmpi_fortran_base_la-conversion_fn_null_f.lo
<br>
&nbsp;&nbsp;CC       libmpi_fortran_base_la-f90_accessors.lo
<br>
&nbsp;&nbsp;CC       libmpi_fortran_base_la-strings.lo
<br>
&nbsp;&nbsp;CC       libmpi_fortran_base_la-test_constants_f.lo
<br>
&nbsp;&nbsp;CCLD     libmpi_fortran_base.la
<br>
&nbsp;&nbsp;PPFC     mpi-f08-types.lo
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
96)
<br>
PGF90-W-0119-Redundant specification for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
97)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
97)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
99)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
99)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
101)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
101)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
102)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
102)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
104)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
104)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
106)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
106)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
108)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
109)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
109)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
110)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
110)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
111)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
111)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
112)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
112)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
113)
<br>
PGF90-S-0034-Syntax error at or near =
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
113)
<br>
PGF90-S-0037-Contradictory data type specified for protected
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
114)
<br>
PGF90-F-0008-Error limit exceeded
<br>
(/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/openmpi-1.7.4rc2r30168/ompi/mpi/fortran/base/mpi-f08-types.F90:
<br>
114)
<br>
PGF90/x86-64 Linux 9.0-3: compilation aborted
<br>
make[2]: *** [mpi-f08-types.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/global/u1/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-9.0/BLD/ompi/mpi/fortran/base'
<br>
make[1]: *** [all-recursive] Error 1
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13711/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13712.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Previous message:</strong> <a href="13710.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>In reply to:</strong> <a href="13702.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Reply:</strong> <a href="13728.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
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
