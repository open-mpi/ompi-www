<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 14:51:37 2015" -->
<!-- isoreceived="20150304195137" -->
<!-- sent="Wed, 4 Mar 2015 19:51:35 +0000" -->
<!-- isosent="20150304195135" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node" -->
<!-- id="C5062484-1F05-4773-8E0E-6A01C6F9E67A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16mYUXz3KUhBWKc3xQezZUxd=PWWb6FV+grfcnHCLz9Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 14:51:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if this is why we invented the &quot;-1&quot; default value for enabling verbs fork support() -- because there are legitimate cases where ibv_fork_init() fails, and the user doesn't care.  Hence, -1 allows it to fail and no one cares.
<br>
<p>Can you tell us why ibv_fork_init() would fail?
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 4, 2015, at 9:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a system with InifniPath HCAs, where I've historically tested mtl:psm.
</span><br>
<span class="quotelev1">&gt; For some reason, that appears to have ceased working some time in the past 4 months.
</span><br>
<span class="quotelev1">&gt; However, this report is about something else.
</span><br>
<span class="quotelev1">&gt; I am using the current master tarball: openmpi-dev-1203-g171d674.tar.bz2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I ran configure, verbs support was found even though it was not my intent to use it.
</span><br>
<span class="quotelev1">&gt; So, I am running with an explicit blt list that omits verbs and am disabling the broken mtl:psm and mtl:ofi as well.
</span><br>
<span class="quotelev1">&gt; However, I am getting complaints from some verbs-related code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self,tcp -mca mtl ^psm,ofi -np 2 -host n15,n16  examples/ring_c
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n16
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n15
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n16
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Fork support was requested but the library call ibv_fork_init() failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Hostname:    n15
</span><br>
<span class="quotelev1">&gt;   Error (22):  Invalid argument
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (2 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt; Process 1 exiting
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are at least THREE things &quot;wrong&quot; in my opinion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The first is the following two lines:
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; However, I can run ibv_devinfo (and see ACTIVE ports) on both of the compute nodes.
</span><br>
<span class="quotelev1">&gt; So, these appear to me to be a complaint about the login node (which is simply not on the IB network).
</span><br>
<span class="quotelev1">&gt; I did not ask for ibv, and even if I did the message about a non-IB login node is just an annoyance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The second is the &quot;ibv_fork_init()&quot; message twice per host, again when I have NOT requested btl:verbs. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The third is that I had to pass so many mca params just to get as far as this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did find that adding &quot;-mca oob tcp&quot; eliminated all the messages.
</span><br>
<span class="quotelev1">&gt; So, I am assuming oob:ud is responsible for this mess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not appear to be a very good default behavior.
</span><br>
<span class="quotelev1">&gt; + I believe oob:ud should *silently* disqualify itself when the node running &quot;mpirun&quot; is not on the IB network.
</span><br>
<span class="quotelev1">&gt; + I don't know why/when the ibv_fork_init() messages came about but they are quite annoying when I don't even intend to *use* ibv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17093.php">http://www.open-mpi.org/community/lists/devel/2015/03/17093.php</a>
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
<li><strong>Next message:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17093.php">Paul Hargrove: "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17095.php">Paul Hargrove: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
