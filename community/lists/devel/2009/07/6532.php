<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 16:39:04 2009" -->
<!-- isoreceived="20090728203904" -->
<!-- sent="Tue, 28 Jul 2009 13:38:48 -0700" -->
<!-- isosent="20090728203848" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="4A6F61D8.1060300_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DEEB4328-8D6F-451B-A8D5-DE73948DC685_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libtool issue with crs/self<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 16:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I follow correctly, the problem is not with the Self CRS component 
<br>
USING lt_dl*(), but rather a failure is occurring when one is trying to 
<br>
dynamically load the component itself.  If that is correct, then I'd 
<br>
guess that some automake/libtool magic incantation is missing.  It may 
<br>
be as simple as needing $(LIBLTDL) somewhere in the Makefile.am.
<br>
<p>-Paul
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Once upon a time, the Self CRS module worked correctly, but I admit 
</span><br>
<span class="quotelev1">&gt; that I have not tested it in a long time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Self CRS component uses dl_open and friends to inspect the running 
</span><br>
<span class="quotelev1">&gt; process for a particular set of functions. When I try to run an MPI 
</span><br>
<span class="quotelev1">&gt; program that contains these signatures I get the following error when 
</span><br>
<span class="quotelev1">&gt; it tries to resolve lt_dlopen() in opal_crs_self_component_query():
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; my-app: symbol lookup error: 
</span><br>
<span class="quotelev1">&gt; /path/to/install/lib/openmpi/mca_crs_self.so: undefined symbol: lt_dlopen
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am configuring with the following:
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/path/to/install \
</span><br>
<span class="quotelev1">&gt;   --enable-binaries \
</span><br>
<span class="quotelev1">&gt;   --with-devel-headers \
</span><br>
<span class="quotelev1">&gt;   --enable-debug \
</span><br>
<span class="quotelev1">&gt;   --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;   --with-ft=cr \
</span><br>
<span class="quotelev1">&gt;   --without-memory-manager \
</span><br>
<span class="quotelev1">&gt;   --enable-ft-thread \
</span><br>
<span class="quotelev1">&gt;   CC=gcc CXX=g++ \
</span><br>
<span class="quotelev1">&gt;   F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source code is at the link below:
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone have any thoughts on what might be going wrong here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
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
