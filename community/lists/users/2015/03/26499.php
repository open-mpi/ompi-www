<?
$subject_val = "Re: [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 13:55:53 2015" -->
<!-- isoreceived="20150318175553" -->
<!-- sent="Wed, 18 Mar 2015 13:55:52 -0400" -->
<!-- isosent="20150318175552" -->
<!-- name="Peter Gottesman" -->
<!-- email="mygames1030_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration error with external hwloc" -->
<!-- id="CAF_-zRsqWz+cnODmS+hEgMXLuW_a3TNPy9Sx8CzKSrnRn7c3Yw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="6D020E97-036B-48AF-B6AD-9C5D6C08BBEC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuration error with external hwloc<br>
<strong>From:</strong> Peter Gottesman (<em>mygames1030_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 13:55:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, the config.log and configure output are attached.
<br>
<p><p>On Wed, Mar 18, 2015 at 11:38 AM, Jeff Squyres (jsquyres) &lt;
<br>
jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Can you send all the info listed here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 17, 2015, at 6:30 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hey all,
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile Open MPI on a 32bit laptop running debian wheezy
</span><br>
<span class="quotelev1">&gt; 7.8.0. When I
</span><br>
<span class="quotelev2">&gt; &gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc=$HOME/openmpi/hwloc/build
</span><br>
<span class="quotelev1">&gt; --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
</span><br>
<span class="quotelev2">&gt; &gt; I get the error code:
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are cross compiling... configure: error: in
</span><br>
<span class="quotelev1">&gt; `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev2">&gt; &gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev2">&gt; &gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt; &gt; configure: /bin/bash
</span><br>
<span class="quotelev1">&gt; '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure'
</span><br>
<span class="quotelev1">&gt; *failed* for opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Event library failed to configure
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt; I have looked at a previous message in this mailing list, and I have a
</span><br>
<span class="quotelev1">&gt; working compiler, so I do not believe that that is the problem here. Any
</span><br>
<span class="quotelev1">&gt; help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Peter
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26491.php">http://www.open-mpi.org/community/lists/users/2015/03/26491.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/03/26498.php">http://www.open-mpi.org/community/lists/users/2015/03/26498.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26499/output.tar.bz2">output.tar.bz2</a>
</ul>
<!-- attachment="output.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Previous message:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26498.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>Reply:</strong> <a href="26500.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configuration error with external hwloc"</a>
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
