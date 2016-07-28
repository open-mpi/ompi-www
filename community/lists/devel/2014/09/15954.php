<?
$subject_val = "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 15:51:11 2014" -->
<!-- isoreceived="20140930195111" -->
<!-- sent="Tue, 30 Sep 2014 19:51:03 +0000" -->
<!-- isosent="20140930195103" -->
<!-- name="Devendar Bureddy" -->
<!-- email="devendar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk" -->
<!-- id="C3B08D462F815D46AD2C7223BA972D141F82C4D6_at_MTIDAG02.mtl.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="666EF148-B39C-416B-B712-299521C47AE3_at_cisco.com" -->
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
<strong>Date:</strong> 2014-09-30 15:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
<li><strong>In reply to:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Reply:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
AC_LINK_IFELSE ( in config/opal_check_visibility.m4)  test of conftest.c  is failing with following error.   It seems,  this also causing AC_LINK_IFELSE failures at many other places after PMI check..
<br>
<p>$gcc -std=gnu99 -o conftest -g -fvisibility=hidden -Werror   -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/hwloc/hwloc191/hwloc/include -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/event/libevent2021/libevent -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/event/libevent2021/libevent/include    a1.c -lrt  -lm -lutil   -lm -lutil
<br>
a1.c:715:1: error: &quot;WANT_PMI_SUPPORT&quot; redefined
<br>
a1.c:712:1: error: this is the location of the previous definition
<br>
a1.c:716:1: error: &quot;WANT_PMI2_SUPPORT&quot; redefined
<br>
a1.c:713:1: error: this is the location of the previous definition
<br>
<p>$echo $?
<br>
1
<br>
<p>I think these PMI definitions coming from both OPAL_CHECK_CRAY_PMI and OPAL_CHECK_PMI checks
<br>
<p>-Devendar
<br>
<p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Tuesday, September 30, 2014 10:38 AM
<br>
To: Open MPI Developers List
<br>
Subject: Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior in trunk
<br>
<p>Probably not.
<br>
<p>Can you dig into why configure thinks your compiler doesn't have visibility capabilities?
<br>
<p><p>On Sep 29, 2014, at 7:36 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I see behavioral difference between 1.8.x and trunk for OPAL_C_HAVE_VISIBILITY definition on same build environment.  is this expected?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff 
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, September 29, 2014 4:25 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] --enable-visibility ( 
</span><br>
<span class="quotelev1">&gt; OPAL_C_HAVE_VISIBILITY) behavior in trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't quite parse what you are saying -- do you have a specific question?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 7:18 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is supposed to be enable by default.  In trunk, I see that  OPAL_C_HAVE_VISIBILITY is defined to 0 by default.   1.8.x looks fine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Configure : ./configure -prefix=$PWD/install 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default --disable-mpi-fortran --disable-vt 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug --enable-oshmem --with-pmi GCC : gcc version 4.4.7
</span><br>
<span class="quotelev2">&gt;&gt; 20120313 (Red Hat 4.4.7-3) (GCC)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Devendar
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15936.php">http://www.open-mpi.org/community/lists/devel/2014/09/15936.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15937.php">http://www.open-mpi.org/community/lists/devel/2014/09/15937.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15938.php">http://www.open-mpi.org/community/lists/devel/2014/09/15938.php</a>
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
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15949.php">http://www.open-mpi.org/community/lists/devel/2014/09/15949.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Previous message:</strong> <a href="15953.php">Ralph Castain: "Re: [OMPI devel] Broken abort backtrace functionality"</a>
<li><strong>In reply to:</strong> <a href="15949.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>Reply:</strong> <a href="15955.php">Ralph Castain: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
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
