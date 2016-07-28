<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 16:39:49 2009" -->
<!-- isoreceived="20090728203949" -->
<!-- sent="Tue, 28 Jul 2009 15:39:42 -0500" -->
<!-- isosent="20090728203942" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="CD4B7EA8-0970-4821-9BF8-26C6AB199C52_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 16:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was mentioned to me that r21731 might have caused this problem by  
<br>
restricting the visibility of the libltdl library.
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/21731">https://svn.open-mpi.org/trac/ompi/changeset/21731</a>
<br>
<p>Brian,
<br>
Do you have any thoughts on how we might extend the visibility so that  
<br>
MCA components could also use the libtool in opal?
<br>
I can try to initialize libtool in the Self CRS component and use it  
<br>
directly, but since it is already opened by OPAL, I think it might be  
<br>
better to use the instantiation in OPAL.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Jul 28, 2009, at 3:06 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Once upon a time, the Self CRS module worked correctly, but I admit  
</span><br>
<span class="quotelev1">&gt; that I have not tested it in a long time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Self CRS component uses dl_open and friends to inspect the  
</span><br>
<span class="quotelev1">&gt; running process for a particular set of functions. When I try to run  
</span><br>
<span class="quotelev1">&gt; an MPI program that contains these signatures I get the following  
</span><br>
<span class="quotelev1">&gt; error when it tries to resolve lt_dlopen() in  
</span><br>
<span class="quotelev1">&gt; opal_crs_self_component_query():
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt; my-app: symbol lookup error: /path/to/install/lib/openmpi/ 
</span><br>
<span class="quotelev1">&gt; mca_crs_self.so: undefined symbol: lt_dlopen
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
<span class="quotelev1">&gt;  --enable-binaries \
</span><br>
<span class="quotelev1">&gt;  --with-devel-headers \
</span><br>
<span class="quotelev1">&gt;  --enable-debug \
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;  --with-ft=cr \
</span><br>
<span class="quotelev1">&gt;  --without-memory-manager \
</span><br>
<span class="quotelev1">&gt;  --enable-ft-thread \
</span><br>
<span class="quotelev1">&gt;  CC=gcc CXX=g++ \
</span><br>
<span class="quotelev1">&gt;  F77=gfortran FC=gfortran
</span><br>
<span class="quotelev1">&gt; ------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The source code is at the link below:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6534.php">Chris Samuel: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6532.php">Paul H. Hargrove: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>In reply to:</strong> <a href="6531.php">Josh Hursey: "[OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
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
