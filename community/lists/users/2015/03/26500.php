<?
$subject_val = "Re: [OMPI users] Configuration error with external hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 18 18:34:45 2015" -->
<!-- isoreceived="20150318223445" -->
<!-- sent="Wed, 18 Mar 2015 22:34:43 +0000" -->
<!-- isosent="20150318223443" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuration error with external hwloc" -->
<!-- id="53CFCDFC-0C3E-44B3-A0EB-CA6AD197CF73_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAF_-zRsqWz+cnODmS+hEgMXLuW_a3TNPy9Sx8CzKSrnRn7c3Yw_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-18 18:34:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26499.php">Peter Gottesman: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26499.php">Peter Gottesman: "Re: [OMPI users] Configuration error with external hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter --
<br>
<p>Looks like you're trying to build the trunk from a git checkout.  I'm guessing that something may have gone wonky when autogen.pl ran...?
<br>
<p>This is probably in the realm of a &quot;developer&quot; discussion rather than a &quot;user&quot; discussion...
<br>
<p>I'm going to take the liberty of moving this thread over to the devel list and following up there.
<br>
<p><p><span class="quotelev1">&gt; On Mar 18, 2015, at 10:55 AM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay, the config.log and configure output are attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 18, 2015 at 11:38 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you send all the info listed here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 17, 2015, at 6:30 PM, Peter Gottesman &lt;mygames1030_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hey all,
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to compile Open MPI on a 32bit laptop running debian wheezy 7.8.0. When I
</span><br>
<span class="quotelev2">&gt; &gt; ../ompi-master/configure --prefix=$HOME/ompi-master/build --with-hwloc=$HOME/openmpi/hwloc/build --with-hwloc-libdir=$HOME/openmpi/hwloc/build/lib
</span><br>
<span class="quotelev2">&gt; &gt; I get the error code:
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are cross compiling... configure: error: in `/home/peter/openmpi/build/opal/mca/event/libevent2022/libevent':
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: cannot run C compiled programs.
</span><br>
<span class="quotelev2">&gt; &gt; If you meant to cross compile, use `--host'.
</span><br>
<span class="quotelev2">&gt; &gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt; &gt; configure: /bin/bash '../../../../../../ompi-master/opal/mca/event/libevent2022/libevent/configure' *failed* for opal/mca/event/libevent2022/libevent
</span><br>
<span class="quotelev2">&gt; &gt; configure: WARNING: Event library failed to configure
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Cannot continue
</span><br>
<span class="quotelev2">&gt; &gt; I have looked at a previous message in this mailing list, and I have a working compiler, so I do not believe that that is the problem here. Any help is appreciated.
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26491.php">http://www.open-mpi.org/community/lists/users/2015/03/26491.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26498.php">http://www.open-mpi.org/community/lists/users/2015/03/26498.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;output.tar.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26499.php">http://www.open-mpi.org/community/lists/users/2015/03/26499.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26501.php">Tus: "Re: [OMPI users] how to compile without ib support"</a>
<li><strong>Previous message:</strong> <a href="26499.php">Peter Gottesman: "Re: [OMPI users] Configuration error with external hwloc"</a>
<li><strong>In reply to:</strong> <a href="26499.php">Peter Gottesman: "Re: [OMPI users] Configuration error with external hwloc"</a>
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
