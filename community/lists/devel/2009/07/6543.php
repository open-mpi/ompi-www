<?
$subject_val = "Re: [OMPI devel] libtool issue with crs/self";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 11:01:53 2009" -->
<!-- isoreceived="20090729150153" -->
<!-- sent="Wed, 29 Jul 2009 11:01:49 -0400 (EDT)" -->
<!-- isosent="20090729150149" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libtool issue with crs/self" -->
<!-- id="alpine.DEB.1.10.0907291055030.28692_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.1.10.0907291048280.28692_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 11:01:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Previous message:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind, I'm an idiot.  I still don't like the wrappers around 
<br>
lt_dlopen in util, but it might be your best option.  Are you looking for 
<br>
symbols in components or the executable?  I assumed the executable, in 
<br>
which case you might be better off just using dlsym() directly.  If you're 
<br>
looking for a symbol first place it's found, then you can just do:
<br>
<p>&nbsp;&nbsp;&nbsp;dlsym(RTLD_DEFAULT, symbol);
<br>
<p>The lt_dlsym only really helps if you're running on really obscure 
<br>
platforms which don't support dlsym and loading &quot;preloaded&quot; components.
<br>
<p>Brian
<br>
<p>On Wed, 29 Jul 2009, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; What are you trying to do with lt_dlopen?  It seems like you should always go 
</span><br>
<span class="quotelev1">&gt; through the MCA base utilities.  If one's missing, adding it there seems like 
</span><br>
<span class="quotelev1">&gt; the right mechanism.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 29 Jul 2009, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George suggested that to me as well yesterday after the meeting. So we 
</span><br>
<span class="quotelev2">&gt;&gt; would create opal interfaces to libtool (similar to what we do with the 
</span><br>
<span class="quotelev2">&gt;&gt; event engine). That might be the best way to approach this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll start to take a look at implementing this. Since opal/libltdl is not 
</span><br>
<span class="quotelev2">&gt;&gt; part of the repository, is there a 'right' place to put this header? maybe 
</span><br>
<span class="quotelev2">&gt;&gt; in opal/util/?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 28, 2009, at 6:57 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh - this is almost certainly what happened. Yoibks. Unfortunately, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's good reasons for it. :(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What about if we proxy calls to lt_dlopen through an opal function call?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -jms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tue Jul 28 16:39:42 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] libtool issue with crs/self
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It was mentioned to me that r21731 might have caused this problem by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restricting the visibility of the libltdl library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/changeset/21731">https://svn.open-mpi.org/trac/ompi/changeset/21731</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you have any thoughts on how we might extend the visibility so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MCA components could also use the libtool in opal?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can try to initialize libtool in the Self CRS component and use it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly, but since it is already opened by OPAL, I think it might be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; better to use the instantiation in OPAL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 28, 2009, at 3:06 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Once upon a time, the Self CRS module worked correctly, but I admit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that I have not tested it in a long time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Self CRS component uses dl_open and friends to inspect the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running process for a particular set of functions. When I try to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; an MPI program that contains these signatures I get the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error when it tries to resolve lt_dlopen() in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_crs_self_component_query():
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my-app: symbol lookup error: /path/to/install/lib/openmpi/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca_crs_self.so: undefined symbol: lt_dlopen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am configuring with the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=/path/to/install \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-binaries \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-devel-headers \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-debug \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-mpi-threads \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-ft=cr \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --without-memory-manager \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-ft-thread \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  CC=gcc CXX=g++ \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  F77=gfortran FC=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The source code is at the link below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self">https://svn.open-mpi.org/trac/ompi/browser/trunk/opal/mca/crs/self</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anyone have any thoughts on what might be going wrong here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6544.php">Ashley Pittman: "Re: [OMPI devel] Allgather failures?"</a>
<li><strong>Previous message:</strong> <a href="6542.php">Brian W. Barrett: "Re: [OMPI devel] Shared library versioning"</a>
<li><strong>In reply to:</strong> <a href="6541.php">Brian W. Barrett: "Re: [OMPI devel] libtool issue with crs/self"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6590.php">Josh Hursey: "Re: [OMPI devel] libtool issue with crs/self"</a>
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
