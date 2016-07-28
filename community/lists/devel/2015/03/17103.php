<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 09:32:22 2015" -->
<!-- isoreceived="20150305143222" -->
<!-- sent="Thu, 5 Mar 2015 16:32:21 +0200" -->
<!-- isosent="20150305143221" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CADGp0BT0_v3JA_wkQQkCQbBOkgpWwSxmgxAz8NbBjcLJzLBPXg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="71A57DD9-9854-4FF0-993E-9BB22ACD66FA_at_cisco.com" -->
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
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 09:32:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If oob:ud was disabled then there was no call to ibv_fork_init() anywhere
<br>
else, right? If so, then this is why the messages went away.
<br>
<p>The calls to ibv_fork_init() from the opal common verbs were pushed to the
<br>
master. One of the places a call was set is oob:ud, but if there is a call
<br>
to memory registering verbs before this place, then the call to it in
<br>
oob:ud would result in a failure.
<br>
<p>On Thu, Mar 5, 2015 at 4:21 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; This is not a PSM issue -- I believe Paul said that when he disabled
</span><br>
<span class="quotelev1">&gt; oob:ud, the messages went away.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry; I'm at the MPI Forum this week and not paying close attention
</span><br>
<span class="quotelev1">&gt; to master commits.  Has your code to ensure to call the opal common verbs
</span><br>
<span class="quotelev1">&gt; ibv_fork_init() stuff been pushed to master yet?  If so, then
</span><br>
<span class="quotelev1">&gt; ibv_fork_init() *should* be getting called first, and there's something
</span><br>
<span class="quotelev1">&gt; else going on that needs to be understood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 5, 2015, at 1:57 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I will change the default of the opal_common_verbs_want_fork_support to
</span><br>
<span class="quotelev1">&gt; -1 in order to avoid these messages in case ibv_fork_init() fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The reason why it is failing is that ibv_fork_init() is being called to
</span><br>
<span class="quotelev1">&gt; late. To avoid this, every component should call ibv_fork_init() early in
</span><br>
<span class="quotelev1">&gt; the init (in this case before oob/ud does) - call the
</span><br>
<span class="quotelev1">&gt; opal_common_verbs_fork_test() function which does just that.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul, can you please check if adding this call to psm fixes the issue?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 4, 2015 at 11:40 PM, Dave Goodell (dgoodell) &lt;
</span><br>
<span class="quotelev1">&gt; dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 4, 2015, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Mar 4, 2015 at 1:04 PM, Dave Goodell (dgoodell) &lt;
</span><br>
<span class="quotelev1">&gt; dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libibverbs: Warning: couldn't open config directory
</span><br>
<span class="quotelev1">&gt; '/etc/libibverbs.d'.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; libibverbs: Warning: no userspace device-specific driver found for
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I think that warning is printed by libibverbs itself.  Are you 100%
</span><br>
<span class="quotelev1">&gt; sure there are no IB HCAs sitting in the head node?  If there are IB HCAs
</span><br>
<span class="quotelev1">&gt; but you don't want them to be used, you might want to ensure that the
</span><br>
<span class="quotelev1">&gt; various verbs kernel modules don't get loaded, which is one half of the
</span><br>
<span class="quotelev1">&gt; mismatch which confuses libibverbs.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FWIW, I can confirm that these two lines are from libibverbs itself:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ strings /usr/lib64/libibverbs.a | grep -e 'no userspace' -e 'open
</span><br>
<span class="quotelev1">&gt; config directory'
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs: Warning: no userspace device-specific driver found for %s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs: Warning: couldn't open config directory '%s'.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I think you'd also see the same message if you run &quot;ibv_devices&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;ibv_devinfo&quot; on the head node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As it happens, the login node *does* have an HCA installed and the
</span><br>
<span class="quotelev1">&gt; kernel modules appears to be loaded.  However, as the &quot;17th node&quot; in the
</span><br>
<span class="quotelev1">&gt; cluster it was never cabled to the 16-port switch and the package(s) that
</span><br>
<span class="quotelev1">&gt; should have created/populated /etc/libibverbs.d are *not* present
</span><br>
<span class="quotelev1">&gt; (specifically the login node has libipathverbs-devel installed but not
</span><br>
<span class="quotelev1">&gt; libipathverbs).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; So, Dave, are you saying that what I describe in the previous
</span><br>
<span class="quotelev1">&gt; paragraph would be considered &quot;misconfiguration&quot;?  I am fine with dropping
</span><br>
<span class="quotelev1">&gt; the discussion of those first two lines if there is agreement that Open MPI
</span><br>
<span class="quotelev1">&gt; shouldn't be responsible for handling this case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would consider that to be a lesser misconfiguration, which is only
</span><br>
<span class="quotelev1">&gt; really an issue because of libibverbs deficiencies.  Either the hardware
</span><br>
<span class="quotelev1">&gt; could be removed from the head node or the kernel modules could be unloaded
</span><br>
<span class="quotelev1">&gt; / prevented from loading on the head node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now the ibv_fork_init() warnings are another issue entirely.  Since
</span><br>
<span class="quotelev1">&gt; btl:verbs and mtl:psm both work (at least separately) perfectly fine on the
</span><br>
<span class="quotelev1">&gt; compute nodes, I don't believe that there are any configuration issues
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Agreed, something needs to be improved there.  I assume that Mike D. or
</span><br>
<span class="quotelev1">&gt; someone from his team will take a look.  I don't have any bandwidth to look
</span><br>
<span class="quotelev1">&gt; at this myself.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Dave
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17100.php">http://www.open-mpi.org/community/lists/devel/2015/03/17100.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17101.php">http://www.open-mpi.org/community/lists/devel/2015/03/17101.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17102.php">http://www.open-mpi.org/community/lists/devel/2015/03/17102.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17103/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17104.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
