<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 10:26:38 2015" -->
<!-- isoreceived="20150903142638" -->
<!-- sent="Thu, 3 Sep 2015 08:26:34 -0600" -->
<!-- isosent="20150903142634" -->
<!-- name="hppritcha_at_[hidden]" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="C586B6DD-B039-4D12-85C9-CE91DD5CF444_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F928BF6-6FA6-4281-B150-1B1F8E509A7A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0 issue<br>
<strong>From:</strong> <a href="mailto:hppritcha_at_[hidden]?Subject=Re:%20[OMPI%20devel]%201.10.0%20issue"><em>hppritcha_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-09-03 10:26:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17935.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi Jeff
<br>
<p>to answer your question I too find the PSM
<br>
1/2 weird and a real mess.  Back to IB verbs?
<br>
<p>Howard
<br>
<p>Von meinem iPhone gesendet
<br>
<p><span class="quotelev1">&gt; Am 03.09.2015 um 06:55 schrieb Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with what George says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AFAIK, Red Hat builds Open MPI support for dlopen, so the config file option is probably suitable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I have to admit that I resent the fact that PSM's poor upgrade path design is forcing both the Open MPI and libfabric communities to have similar confusing conversations (e.g., see <a href="https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271">https://github.com/ofiwg/libfabric/issues/1258#issuecomment-137426271</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: because of the design of PSM1/PSM2, both Open MPI and libfabric will have to adjust their configury and use dlopen/function pointer indirection to &quot;solve&quot; the problem of supporting both PSM1 and PSM2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that seem weird to anyone else?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; IMNSHO, if you have to have extremely confusing conversations in multiple software communities explaining your configury, function-pointer-indirection code (i.e., PR <a href="https://github.com/ofiwg/libfabric/pull/1259">https://github.com/ofiwg/libfabric/pull/1259</a>), compilation, and linking scheme to upgrade to a new library, you're doing it wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2015, at 7:19 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Michael,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I might have missed some context when proposing this solution. As Gilles suggested if you build Open MPI without support for dlopen (configure option --disable-dlopen) this simple solution will not work because the symbol conflict issue is generated deep inside the constructors of the 2 libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the &quot;mtl = ^psm&quot; (or ^psm2 depending on which one you want to disable) should go in the openmpi-mca-params.conf that gets installed in the $(sysconfigdir).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 3, 2015 at 5:14 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; [I apologize for not threading the email properly. I was not subscribed
</span><br>
<span class="quotelev2">&gt;&gt; before and found the conversation in the web archive.]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am the one who discovered the PSM vs. PSM2 library conflict and
</span><br>
<span class="quotelev2">&gt;&gt; proposed the temporary workaround of having two builds of the openmpi
</span><br>
<span class="quotelev2">&gt;&gt; package.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. Except if the distro builds OMPI statically, I see no reason to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have 2 build of OMPI due to conflicting symbols between two shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the OMPI system wide configuration file is not enough to solve the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for this suggestion. It would go into openmpi-mca-params.conf,
</span><br>
<span class="quotelev2">&gt;&gt; right? I will try it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Michal
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17927.php">http://www.open-mpi.org/community/lists/devel/2015/09/17927.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17928.php">http://www.open-mpi.org/community/lists/devel/2015/09/17928.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17931.php">http://www.open-mpi.org/community/lists/devel/2015/09/17931.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17937.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17935.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17953.php">Friedley, Andrew: "Re: [OMPI devel] 1.10.0 issue"</a>
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
