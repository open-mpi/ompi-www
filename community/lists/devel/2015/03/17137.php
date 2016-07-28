<?
$subject_val = "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 23:03:22 2015" -->
<!-- isoreceived="20150319030322" -->
<!-- sent="Wed, 18 Mar 2015 23:03:21 -0400" -->
<!-- isosent="20150319030321" -->
<!-- name="Peter Gottesman" -->
<!-- email="mygames1030_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] Configuration error with external hwloc" -->
<!-- id="CAF_-zRu4fL8wK9Pe=cajKJqp+xGHHogmcUEpity9mWYiPYOgVA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A8BD260E-9DA9-4317-822F-DC428DFED3F2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Peter Gottesman (<em>mygames1030_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 23:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17136.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17136.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here are the files you requested. I have run autogen.pl multiple times, and
<br>
tried different versions of open mpi in addition to distribution versions,
<br>
so I do not believe that is the problem. I assume I am having a problem
<br>
with my compiler somehow, but I am not sure what it is.
<br>
Thanks for the help,
<br>
Peter
<br>
<p>On Wed, Mar 18, 2015 at 6:36 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Moved this thread over from the users list...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like this is a build from a git clone of master.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The specific failure occurred in the sub-configure script of libevent;
</span><br>
<span class="quotelev1">&gt; could you send the additional two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The opal/mca/event/libevent2022/libevent/config.log file (from the
</span><br>
<span class="quotelev1">&gt; build tree)
</span><br>
<span class="quotelev1">&gt; 2. The output from running autogen.pl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 18, 2015, at 10:55 AM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Okay, the config.log and configure output are attached.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 18, 2015 at 11:38 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Can you send all the info listed here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 17, 2015, at 6:30 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hey all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to compile Open MPI on a 32bit laptop running debian
</span><br>
<span class="quotelev1">&gt; wheezy 7.8.0. When I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc=$HOME/openmpi/hwloc/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get the error code:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; See `config.log' for more details
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: /bin/bash
</span><br>
<span class="quotelev1">&gt; '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure'
</span><br>
<span class="quotelev1">&gt; *failed* for opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: WARNING: Event library failed to configure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have looked at a previous message in this mailing list, and I have a
</span><br>
<span class="quotelev1">&gt; working compiler, so I do not believe that that is the problem here. Any
</span><br>
<span class="quotelev1">&gt; help is appreciated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Peter
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26491.php">http://www.open-mpi.org/community/lists/users/2015/03/26491.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26498.php">http://www.open-mpi.org/community/lists/users/2015/03/26498.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26499.php">http://www.open-mpi.org/community/lists/users/2015/03/26499.php</a>
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17137/output.tar.bz2">output.tar.bz2</a>
</ul>
<!-- attachment="output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17138.php">Paul Hargrove: "[OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17136.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="17136.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17145.php">Peter Gottesman: "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="17146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Configuration error with external hwloc"</a>
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
