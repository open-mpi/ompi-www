<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 07:58:44 2009" -->
<!-- isoreceived="20090729115844" -->
<!-- sent="Wed, 29 Jul 2009 06:58:29 -0500" -->
<!-- isosent="20090729115829" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="829BCBC9-0B11-43A7-A44B-E24B72D79FB4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E7FD839BAFD8CA499213A6EE26F2368004CCD8_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2009-07-29 07:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George suggested that to me as well yesterday after the meeting. So we  
<br>
would create opal interfaces to libtool (similar to what we do with  
<br>
the event engine). That might be the best way to approach this.
<br>
<p>I'll start to take a look at implementing this. Since opal/libltdl is  
<br>
not part of the repository, is there a 'right' place to put this  
<br>
header? maybe in opal/util/?
<br>
<p>Thanks,
<br>
Josh
<br>
<p><p>On Jul 28, 2009, at 6:57 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Josh - this is almost certainly what happened. Yoibks.  
</span><br>
<span class="quotelev1">&gt; Unfortunately, there's good reasons for it. :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about if we proxy calls to lt_dlopen through an opal function  
</span><br>
<span class="quotelev1">&gt; call?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tue Jul 28 16:39:42 2009
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] libtool issue with crs/self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was mentioned to me that r21731 might have caused this problem by
</span><br>
<span class="quotelev1">&gt; restricting the visibility of the libltdl library.
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/21731">https://svn.open-mpi.org/trac/ompi/changeset/21731</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt; Do you have any thoughts on how we might extend the visibility so that
</span><br>
<span class="quotelev1">&gt; MCA components could also use the libtool in opal?
</span><br>
<span class="quotelev1">&gt; I can try to initialize libtool in the Self CRS component and use it
</span><br>
<span class="quotelev1">&gt; directly, but since it is already opened by OPAL, I think it might be
</span><br>
<span class="quotelev1">&gt; better to use the instantiation in OPAL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 3:06 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Once upon a time, the Self CRS module worked correctly, but I admit
</span><br>
<span class="quotelev2">&gt; &gt; that I have not tested it in a long time.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The Self CRS component uses dl_open and friends to inspect the
</span><br>
<span class="quotelev2">&gt; &gt; running process for a particular set of functions. When I try to run
</span><br>
<span class="quotelev2">&gt; &gt; an MPI program that contains these signatures I get the following
</span><br>
<span class="quotelev2">&gt; &gt; error when it tries to resolve lt_dlopen() in
</span><br>
<span class="quotelev2">&gt; &gt; opal_crs_self_component_query():
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; my-app: symbol lookup error: /path/to/install/lib/openmpi/
</span><br>
<span class="quotelev2">&gt; &gt; mca_crs_self.so: undefined symbol: lt_dlopen
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am configuring with the following:
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/path/to/install \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-binaries \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-devel-headers \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-debug \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt; &gt;  --with-ft=cr \
</span><br>
<span class="quotelev2">&gt; &gt;  --without-memory-manager \
</span><br>
<span class="quotelev2">&gt; &gt;  --enable-ft-thread \
</span><br>
<span class="quotelev2">&gt; &gt;  CC=gcc CXX=g++ \
</span><br>
<span class="quotelev2">&gt; &gt;  F77=gfortran FC=gfortran
</span><br>
<span class="quotelev2">&gt; &gt; ------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The source code is at the link below:
</span><br>
<span class="quotelev2">&gt; &gt;  <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does anyone have any thoughts on what might be going wrong here?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Josh
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="6539.php">Jeff Squyres: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>Previous message:</strong> <a href="6537.php">Jeff Squyres: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>In reply to:</strong> <a href="6535.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6540.php">Jeff Squyres: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
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
