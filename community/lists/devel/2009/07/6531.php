<?
$subject_val = "[OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 16:06:34 2009" -->
<!-- isoreceived="20090728200634" -->
<!-- sent="Tue, 28 Jul 2009 15:06:27 -0500" -->
<!-- isosent="20090728200627" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[OMPI devel] libtool issue with crs/self" -->
<!-- id="DEEB4328-8D6F-451B-A8D5-DE73948DC685_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] libtool issue with crs/self<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 16:06:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Maybe reply:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Once upon a time, the Self CRS module worked correctly, but I admit  
<br>
that I have not tested it in a long time.
<br>
<p>The Self CRS component uses dl_open and friends to inspect the running  
<br>
process for a particular set of functions. When I try to run an MPI  
<br>
program that contains these signatures I get the following error when  
<br>
it tries to resolve lt_dlopen() in opal_crs_self_component_query():
<br>
------------------
<br>
my-app: symbol lookup error: /path/to/install/lib/openmpi/ 
<br>
mca_crs_self.so: undefined symbol: lt_dlopen
<br>
------------------
<br>
<p>I am configuring with the following:
<br>
------------------
<br>
./configure --prefix=/path/to/install \
<br>
&nbsp;&nbsp;&nbsp;--enable-binaries \
<br>
&nbsp;&nbsp;&nbsp;--with-devel-headers \
<br>
&nbsp;&nbsp;&nbsp;--enable-debug \
<br>
&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;--with-ft=cr \
<br>
&nbsp;&nbsp;&nbsp;--without-memory-manager \
<br>
&nbsp;&nbsp;&nbsp;--enable-ft-thread \
<br>
&nbsp;&nbsp;&nbsp;CC=gcc CXX=g++ \
<br>
&nbsp;&nbsp;&nbsp;F77=gfortran FC=gfortran
<br>
------------------
<br>
<p>The source code is at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
<br>
<p><p>Does anyone have any thoughts on what might be going wrong here?
<br>
<p>Thanks,
<br>
Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Previous message:</strong> <a href="6530.php">Ralf Wildenhues: "Re: [OMPI devel] Shared library versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6533.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Maybe reply:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
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
