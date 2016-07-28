<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 15:00:37 2015" -->
<!-- isoreceived="20150304200037" -->
<!-- sent="Wed, 4 Mar 2015 12:00:06 -0800" -->
<!-- isosent="20150304200006" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CAAvDA14=FML4ZHWh_R0XV_UbC6QUmTtbFRQ6BCmb1a2wKxmezg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C5062484-1F05-4773-8E0E-6A01C6F9E67A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 15:00:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17096.php">Paul Hargrove: "Re: [OMPI devel] master tarball broken"</a>
<li><strong>Previous message:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since disabling oob:ud eliminated all of the messages, I am assuming that
<br>
the warnings are from orted, which by its nature is expecting to
<br>
fork()+exec() the application process.  So, I would not be surprised if
<br>
there is no setting to disable verbs fork support in oob:ud.
<br>
<p>However, since the node executing mpirun is not connected to the IB
<br>
network, it would seem logical to avoid all of these warnings (from a
<br>
component that cannot run anyway).
<br>
<p>-Paul
<br>
<p>BTW:
<br>
Using different nodes was all that was needed to get mtl:psm working.
<br>
So, I assume the ones I had been using need a reboot.
<br>
<p>On Wed, Mar 4, 2015 at 11:51 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I wonder if this is why we invented the &quot;-1&quot; default value for enabling
</span><br>
<span class="quotelev1">&gt; verbs fork support() -- because there are legitimate cases where
</span><br>
<span class="quotelev1">&gt; ibv_fork_init() fails, and the user doesn't care.  Hence, -1 allows it to
</span><br>
<span class="quotelev1">&gt; fail and no one cares.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell us why ibv_fork_init() would fail?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 4, 2015, at 9:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a system with InifniPath HCAs, where I've historically tested
</span><br>
<span class="quotelev1">&gt; mtl:psm.
</span><br>
<span class="quotelev2">&gt; &gt; For some reason, that appears to have ceased working some time in the
</span><br>
<span class="quotelev1">&gt; past 4 months.
</span><br>
<span class="quotelev2">&gt; &gt; However, this report is about something else.
</span><br>
<span class="quotelev2">&gt; &gt; I am using the current master tarball: openmpi-dev-1203-g171d674.tar.bz2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I ran configure, verbs support was found even though it was not my
</span><br>
<span class="quotelev1">&gt; intent to use it.
</span><br>
<span class="quotelev2">&gt; &gt; So, I am running with an explicit blt list that omits verbs and am
</span><br>
<span class="quotelev1">&gt; disabling the broken mtl:psm and mtl:ofi as well.
</span><br>
<span class="quotelev2">&gt; &gt; However, I am getting complaints from some verbs-related code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -mca btl sm,self,tcp -mca mtl ^psm,ofi -np 2 -host n15,n16
</span><br>
<span class="quotelev1">&gt; examples/ring_c
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Hostname:    n16
</span><br>
<span class="quotelev2">&gt; &gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Hostname:    n15
</span><br>
<span class="quotelev2">&gt; &gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Hostname:    n16
</span><br>
<span class="quotelev2">&gt; &gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Hostname:    n15
</span><br>
<span class="quotelev2">&gt; &gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 sent to 1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 exiting
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 exiting
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are at least THREE things &quot;wrong&quot; in my opinion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The first is the following two lines:
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt; &gt; However, I can run ibv_devinfo (and see ACTIVE ports) on both of the
</span><br>
<span class="quotelev1">&gt; compute nodes.
</span><br>
<span class="quotelev2">&gt; &gt; So, these appear to me to be a complaint about the login node (which is
</span><br>
<span class="quotelev1">&gt; simply not on the IB network).
</span><br>
<span class="quotelev2">&gt; &gt; I did not ask for ibv, and even if I did the message about a non-IB
</span><br>
<span class="quotelev1">&gt; login node is just an annoyance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The second is the &quot;ibv_fork_init()&quot; message twice per host, again when I
</span><br>
<span class="quotelev1">&gt; have NOT requested btl:verbs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The third is that I had to pass so many mca params just to get as far as
</span><br>
<span class="quotelev1">&gt; this!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I did find that adding &quot;-mca oob tcp&quot; eliminated all the messages.
</span><br>
<span class="quotelev2">&gt; &gt; So, I am assuming oob:ud is responsible for this mess.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This does not appear to be a very good default behavior.
</span><br>
<span class="quotelev2">&gt; &gt; + I believe oob:ud should *silently* disqualify itself when the node
</span><br>
<span class="quotelev1">&gt; running &quot;mpirun&quot; is not on the IB network.
</span><br>
<span class="quotelev2">&gt; &gt; + I don't know why/when the ibv_fork_init() messages came about but they
</span><br>
<span class="quotelev1">&gt; are quite annoying when I don't even intend to *use* ibv.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev2">&gt; &gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17093.php">http://www.open-mpi.org/community/lists/devel/2015/03/17093.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17094.php">http://www.open-mpi.org/community/lists/devel/2015/03/17094.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17096.php">Paul Hargrove: "Re: [OMPI devel] master tarball broken"</a>
<li><strong>Previous message:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
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
