<?
$subject_val = "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 09:21:03 2015" -->
<!-- isoreceived="20150305142103" -->
<!-- sent="Thu, 5 Mar 2015 14:21:01 +0000" -->
<!-- isosent="20150305142101" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="71A57DD9-9854-4FF0-993E-9BB22ACD66FA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADGp0BQNb+2qY2cj-7SUr4V-D45amq7EVxt6itVBy4XE0ssn8g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-05 09:21:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is not a PSM issue -- I believe Paul said that when he disabled oob:ud, the messages went away.
<br>
<p>I'm sorry; I'm at the MPI Forum this week and not paying close attention to master commits.  Has your code to ensure to call the opal common verbs ibv_fork_init() stuff been pushed to master yet?  If so, then ibv_fork_init() *should* be getting called first, and there's something else going on that needs to be understood.
<br>
<p><p><p><span class="quotelev1">&gt; On Mar 5, 2015, at 1:57 AM, Alina Sklarevich &lt;alinas_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will change the default of the opal_common_verbs_want_fork_support to -1 in order to avoid these messages in case ibv_fork_init() fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason why it is failing is that ibv_fork_init() is being called to late. To avoid this, every component should call ibv_fork_init() early in the init (in this case before oob/ud does) - call the opal_common_verbs_fork_test() function which does just that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul, can you please check if adding this call to psm fixes the issue?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 4, 2015 at 11:40 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 4, 2015, at 3:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 4, 2015 at 1:04 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs: Warning: no userspace device-specific driver found for /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think that warning is printed by libibverbs itself.  Are you 100% sure there are no IB HCAs sitting in the head node?  If there are IB HCAs but you don't want them to be used, you might want to ensure that the various verbs kernel modules don't get loaded, which is one half of the mismatch which confuses libibverbs.
</span><br>
<span class="quotelev2">&gt; &gt; [...]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I can confirm that these two lines are from libibverbs itself:
</span><br>
<span class="quotelev2">&gt; &gt; $ strings /usr/lib64/libibverbs.a | grep -e 'no userspace' -e 'open config directory'
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: no userspace device-specific driver found for %s
</span><br>
<span class="quotelev2">&gt; &gt; libibverbs: Warning: couldn't open config directory '%s'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, I think you'd also see the same message if you run &quot;ibv_devices&quot; or &quot;ibv_devinfo&quot; on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As it happens, the login node *does* have an HCA installed and the kernel modules appears to be loaded.  However, as the &quot;17th node&quot; in the cluster it was never cabled to the 16-port switch and the package(s) that should have created/populated /etc/libibverbs.d are *not* present (specifically the login node has libipathverbs-devel installed but not libipathverbs).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, Dave, are you saying that what I describe in the previous paragraph would be considered &quot;misconfiguration&quot;?  I am fine with dropping the discussion of those first two lines if there is agreement that Open MPI shouldn't be responsible for handling this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would consider that to be a lesser misconfiguration, which is only really an issue because of libibverbs deficiencies.  Either the hardware could be removed from the head node or the kernel modules could be unloaded / prevented from loading on the head node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now the ibv_fork_init() warnings are another issue entirely.  Since btl:verbs and mtl:psm both work (at least separately) perfectly fine on the compute nodes, I don't believe that there are any configuration issues there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed, something needs to be improved there.  I assume that Mike D. or someone from his team will take a look.  I don't have any bandwidth to look at this myself.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17100.php">http://www.open-mpi.org/community/lists/devel/2015/03/17100.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17101.php">http://www.open-mpi.org/community/lists/devel/2015/03/17101.php</a>
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
<li><strong>Next message:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>In reply to:</strong> <a href="17101.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17103.php">Alina Sklarevich: "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node"</a>
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
