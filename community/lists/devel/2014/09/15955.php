<?
$subject_val = "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 16:44:10 2014" -->
<!-- isoreceived="20140930204410" -->
<!-- sent="Tue, 30 Sep 2014 13:44:06 -0700" -->
<!-- isosent="20140930204406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk" -->
<!-- id="07550841-1ACD-4346-88A1-F21DBB7C5564_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3B08D462F815D46AD2C7223BA972D141F82C4D6_at_MTIDAG02.mtl.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-30 16:44:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Previous message:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should be fixed in r32822
<br>
<p>On Sep 30, 2014, at 12:51 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; AC_LINK_IFELSE ( in config/opal_check_visibility.m4)  test of conftest.c  is failing with following error.   It seems,  this also causing AC_LINK_IFELSE failures at many other places after PMI check..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $gcc -std=gnu99 -o conftest -g -fvisibility=hidden -Werror   -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/hwloc/hwloc191/hwloc/include -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/event/libevent2021/libevent -I/hpc/home/USERS/devendar11/ompi-vendor/opal/mca/event/libevent2021/libevent/include    a1.c -lrt  -lm -lutil   -lm -lutil
</span><br>
<span class="quotelev1">&gt; a1.c:715:1: error: &quot;WANT_PMI_SUPPORT&quot; redefined
</span><br>
<span class="quotelev1">&gt; a1.c:712:1: error: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; a1.c:716:1: error: &quot;WANT_PMI2_SUPPORT&quot; redefined
</span><br>
<span class="quotelev1">&gt; a1.c:713:1: error: this is the location of the previous definition
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $echo $?
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think these PMI definitions coming from both OPAL_CHECK_CRAY_PMI and OPAL_CHECK_PMI checks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, September 30, 2014 10:38 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior in trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you dig into why configure thinks your compiler doesn't have visibility capabilities?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2014, at 7:36 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I see behavioral difference between 1.8.x and trunk for OPAL_C_HAVE_VISIBILITY definition on same build environment.  is this expected?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Devendar
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff 
</span><br>
<span class="quotelev2">&gt;&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, September 29, 2014 4:25 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] --enable-visibility ( 
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_C_HAVE_VISIBILITY) behavior in trunk
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I can't quite parse what you are saying -- do you have a specific question?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 29, 2014, at 7:18 PM, Devendar Bureddy &lt;devendar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is supposed to be enable by default.  In trunk, I see that  OPAL_C_HAVE_VISIBILITY is defined to 0 by default.   1.8.x looks fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configure : ./configure -prefix=$PWD/install 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpirun-prefix-by-default --disable-mpi-fortran --disable-vt 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-debug --enable-oshmem --with-pmi GCC : gcc version 4.4.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 20120313 (Red Hat 4.4.7-3) (GCC)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Devendar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15936.php">http://www.open-mpi.org/community/lists/devel/2014/09/15936.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15937.php">http://www.open-mpi.org/community/lists/devel/2014/09/15937.php</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15938.php">http://www.open-mpi.org/community/lists/devel/2014/09/15938.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15949.php">http://www.open-mpi.org/community/lists/devel/2014/09/15949.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/15956.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Comm_spawn crashes with the openib btl"</a>
<li><strong>Previous message:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
<li><strong>In reply to:</strong> <a href="15954.php">Devendar Bureddy: "Re: [OMPI devel] --enable-visibility ( OPAL_C_HAVE_VISIBILITY) behavior	in trunk"</a>
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
