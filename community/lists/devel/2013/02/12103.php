<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 17:03:45 2013" -->
<!-- isoreceived="20130204220345" -->
<!-- sent="Mon, 4 Feb 2013 17:03:40 -0500" -->
<!-- isosent="20130204220340" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp" -->
<!-- id="CAMJJpkUFOzbxScUN1F25smSMayjaM6V0CyHLqayDgrYPckLRow_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC42CC4ED2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 17:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Previous message:</strong> <a href="12102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it ain't broke, don't fix it. I am more than skeptical about the
<br>
interest of this new notation.
<br>
<p>The two behaviors you describe for include and exclude do not look
<br>
conflicting to me. Inclusion is a strong request, the user enforce the
<br>
usage of a specific interface. If the interface is not available, then
<br>
we have a problem. Exclude on the other side, must enforce that a
<br>
specific interface is not in use, fact that can be quite simple if the
<br>
interface is not available.
<br>
<p>I'm not a fan of the nowarn option. Seems like a lot of code with
<br>
limited interest, especially if we only plan to support it in TCP.
<br>
<p>If you need specialized arguments for some of your nodes here is what
<br>
I do: rename the binaries to .orig, and use the original name to
<br>
create a sh script that will change the value of mca_param_files to
<br>
something based on the host name (if such a file exists) and then call
<br>
the .orig executable. Works like a charm., even when a batch scheduler
<br>
is used.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Mon, Feb 4, 2013 at 12:02 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Feb 1, 2013, at 9:59 PM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think this is right either. Excluding a device that doesn't exist has many use cases. Such as disabling a network that only exists on part of the cluster.  I'm not sure about what to do with seq; it's more like include than exclude.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  I've now given this quite a bit of thought.  Here's what I think:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Just like there might be good reasons to exclude non-existent interfaces (e.g., networks that only include on part of the cluster), the same argument could be made for *including* non-existent interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. It seems odd to me to have different behavior for non-existent interfaces between include, exclude, and/or seq.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. We have a very strong precedent throughout OMPI that if a human asks for something that OMPI can't deliver, OMPI should error.  According to this, and according to the Law of Least Surprise, I would think that if I typo an exclude interface name, OMPI should error and make a human figure it out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. If someone wants different includes/excludes in different parts of the cluster, then they should have per-node values for these MCA params.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. That being said, #4 is not always feasible.  Concrete example (which is why this whole thing started, incidentally): in my MTT cluster at Cisco, I have *some* nodes with back-to-back interfaces.  I can't think of a good way to have per-node MCA params in an MTT run that is SLURM-queued and may end up on random nodes in my cluster -- that may or may not include nodes with loopback interfaces.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So how about this compromise:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If an invalid include, exclude, or if_seq interface is specified:
</span><br>
<span class="quotelev1">&gt; - If that interface is prefaced with &quot;nowarn:&quot;, silently ignore that token
</span><br>
<span class="quotelev1">&gt; - Otherwise, display a show_help message and ignore the TCP BTL
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     mpirun --mca btl_tcp_if_include nowarn:eth5,eth6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If eth5 doesn't exist, the job will continue just as if eth5 wasn't specified
</span><br>
<span class="quotelev1">&gt; - If eth6 doesn't exist, the TCP BTL will disqualify itself
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (BTW: yes, I'm volunteering to code up whatever we agree on)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12104.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28029 - trunk/opal/class"</a>
<li><strong>Previous message:</strong> <a href="12102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="12102.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 - trunk/ompi/mca/btl/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Reply:</strong> <a href="12105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r28016 -	trunk/ompi/mca/btl/tcp"</a>
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
