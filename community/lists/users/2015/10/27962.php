<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 16:34:18 2015" -->
<!-- isoreceived="20151030203418" -->
<!-- sent="Fri, 30 Oct 2015 13:34:12 -0700" -->
<!-- isosent="20151030203412" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel" -->
<!-- id="DFEF4691-3A1A-49B1-BAC7-E59741747CE4_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A0E9C55A-AEF7-4400-96CB-2AB19C845357_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-30 16:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I honestly have no ideas&#226;&#128;&#166;best I can see, it looks like hwloc feels that it cannot perform that operation and returns an error.
<br>
<p><p><span class="quotelev1">&gt; On Oct 30, 2015, at 1:31 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He's building and running on a single server (leo).  From the configure output, all the numa libs and headers are available on this leo server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 30, 2015, at 11:09 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think Dave has probably hit the problem - that node may well not have a &#226;&#128;&#156;numa&#226;&#128;&#157; object. You also might check that node &#226;&#128;&#156;leo&#226;&#128;&#157; has libnuma on it
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 30, 2015, at 6:48 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is this a valid test?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -n 4 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, unless you turned off the default binding -- to socket? check the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun man page -- it worked, but the &quot;numa&quot; level failed.  I don't know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if that level has to exist, and there have been bugs in that area
</span><br>
<span class="quotelev3">&gt;&gt;&gt; before.  Running lstopo might be useful, and checking that you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; picking up the right hwloc dynamic library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What happens if you try to bind to sockets, assuming you don't want to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bind to cores?  [I don't understand why the default isn't to cores when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you have only one process per core.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/openmpi-1.10.0-gcc/bin/mpiexec -bind-to numa -n 4 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A request was made to bind a process, but at least one node does NOT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; support binding processes to cpus.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Node:  leo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This usually is due to not having libnumactl and libnumactl-devel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed on the node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By the way, you can check the binding done, independently to what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi says, with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun ... hwloc-ps
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27957.php">http://www.open-mpi.org/community/lists/users/2015/10/27957.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27958.php">http://www.open-mpi.org/community/lists/users/2015/10/27958.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27961.php">http://www.open-mpi.org/community/lists/users/2015/10/27961.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="27961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and	libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
<li><strong>Reply:</strong> <a href="27963.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl	and	libnumactl-devel"</a>
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
