<?
$subject_val = "Re: [OMPI devel] Paul's testing summary";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 12 15:57:25 2014" -->
<!-- isoreceived="20140112205725" -->
<!-- sent="Sun, 12 Jan 2014 12:57:22 -0800" -->
<!-- isosent="20140112205722" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Paul's testing summary" -->
<!-- id="CAAvDA17JAaVXpB_3j=8re7YMmkSpWewph720MdGwH2qOW9j1Yw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B4F9F501-716D-4059-8798-7055AE9BD1E7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Paul's testing summary<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-12 15:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13756.php">Bibrak Qamar: "[OMPI devel] On the Java binding for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13754.php">Ralph Castain: "[OMPI devel] RFC: deprecate old mapping/binding MCA params"</a>
<li><strong>In reply to:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Jan 12, 2014 at 9:35 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This should have been fixed by r30226 - was it not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2014, at 3:29 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. oshem_info reports oshmem:bindings:fort:yes unconditionally
</span><br>
<span class="quotelev1">&gt; NO CHANGE (that I am aware of)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
Nope.
<br>
<p>System w/o a Fortran compiler:
<br>
$ grep 'find compiler' LOG/configure.log
<br>
configure: WARNING: *** All Fortran MPI bindings disabled (could not find
<br>
compiler)
<br>
<p>Yet oshmem_info still reports oshmem fortran bindings in r30255:
<br>
$ INST/bin/oshmem_info --parsable | grep -e oshmem:version:full: -e
<br>
bindings:
<br>
oshmem:version:full:1.9a1r30255
<br>
bindings:c:yes
<br>
bindings:cxx:no
<br>
bindings:mpif.h:no
<br>
bindings:use_mpi:no
<br>
bindings:use_mpi:size:deprecated-ompi-info-value
<br>
bindings:use_mpi_f08:no
<br>
bindings:use_mpi_f08:compliance:The mpi_f08 module was not built
<br>
bindings:use_mpi_f08:subarrays-supported:no
<br>
bindings:java:no
<br>
oshmem:bindings:c:yes
<br>
oshmem:bindings:fort:yes
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13756.php">Bibrak Qamar: "[OMPI devel] On the Java binding for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="13754.php">Ralph Castain: "[OMPI devel] RFC: deprecate old mapping/binding MCA params"</a>
<li><strong>In reply to:</strong> <a href="13753.php">Ralph Castain: "Re: [OMPI devel] Paul's testing summary"</a>
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
