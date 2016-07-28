<?
$subject_val = "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 19:36:36 2014" -->
<!-- isoreceived="20140929233636" -->
<!-- sent="Mon, 29 Sep 2014 23:36:33 +0000" -->
<!-- isosent="20140929233633" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk" -->
<!-- id="C3B08D462F815D46AD2C7223BA972D141F82BFB2_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="556DCDDE-88E8-4A23-842D-4F9EF82A5281_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk<br>
<strong>From:</strong> Devendar Bureddy (<em>devendar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 19:36:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Previous message:</strong> <a href="15937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Reply:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see behavioral difference between 1.8.x and trunk for OPAL_C_HAVE_VISIBILITY definition on same build environment.  is this expected?
<br>
<p>-Devendar
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Monday, September 29, 2014 4:25 PM
<br>
To: Open MPI Developers List
<br>
Subject: Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior in trunk
<br>
<p>I can't quite parse what you are saying -- do you have a specific question?
<br>
<p><p>On Sep 29, 2014, at 7:18 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is supposed to be enable by default.  In trunk, I see that  OPAL_C_HAVE_VISIBILITY is defined to 0 by default.   1.8.x looks fine
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Configure : ./configure -prefix=$PWD/install 
</span><br>
<span class="quotelev1">&gt; --enable-mpirun-prefix-by-default --disable-mpi-fortran --disable-vt 
</span><br>
<span class="quotelev1">&gt; --enable-debug --enable-oshmem --with-pmi GCC : gcc version 4.4.7 
</span><br>
<span class="quotelev1">&gt; 20120313 (Red Hat 4.4.7-3) (GCC)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15936.php">http://www.open-mpi.org/community/lists/devel/2014/09/15936.php</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
devel mailing list
devel_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15937.php">http://www.open-mpi.org/community/lists/devel/2014/09/15937.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15939.php">Kawashima, Takahiro: "[OMPI devel] Problem on MPI_Type_create_resized and multiple BTL modules"</a>
<li><strong>Previous message:</strong> <a href="15937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15937.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Reply:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
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
