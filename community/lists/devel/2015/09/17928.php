<?
$subject_val = "Re: [OMPI devel] 1.10.0 issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 07:19:21 2015" -->
<!-- isoreceived="20150903111921" -->
<!-- sent="Thu, 3 Sep 2015 07:19:20 -0400" -->
<!-- isosent="20150903111920" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0 issue" -->
<!-- id="CAMJJpkX=+DAFmiW8qKTyZc9gw_NH1WwayYZUChxPNqowiMiOhg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="55E80F6D.9090008_at_redhat.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 07:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Michael,
<br>
<p>I might have missed some context when proposing this solution. As Gilles
<br>
suggested if you build Open MPI without support for dlopen (configure
<br>
option --disable-dlopen) this simple solution will not work because the
<br>
symbol conflict issue is generated deep inside the constructors of the 2
<br>
libraries.
<br>
<p>Yes, the &quot;mtl = ^psm&quot; (or ^psm2 depending on which one you want to disable)
<br>
should go in the openmpi-mca-params.conf that gets installed in the
<br>
$(sysconfigdir).
<br>
<p>Thanks,
<br>
George.
<br>
<p><p>On Thu, Sep 3, 2015 at 5:14 AM, Michal Schmidt &lt;mschmidt_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; [I apologize for not threading the email properly. I was not subscribed
</span><br>
<span class="quotelev1">&gt; before and found the conversation in the web archive.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am the one who discovered the PSM vs. PSM2 library conflict and
</span><br>
<span class="quotelev1">&gt; proposed the temporary workaround of having two builds of the openmpi
</span><br>
<span class="quotelev1">&gt; package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 3. Except if the distro builds OMPI statically, I see no reason to
</span><br>
<span class="quotelev2">&gt; &gt; have 2 build of OMPI due to conflicting symbols between two shared
</span><br>
<span class="quotelev2">&gt; &gt; libraries that OMPI MCA load willingly. Why a simple &quot;mtl = ^psm&quot; in
</span><br>
<span class="quotelev2">&gt; &gt; the OMPI system wide configuration file is not enough to solve the
</span><br>
<span class="quotelev2">&gt; &gt; issue?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for this suggestion. It would go into openmpi-mca-params.conf,
</span><br>
<span class="quotelev1">&gt; right? I will try it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Michal
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17927.php">http://www.open-mpi.org/community/lists/devel/2015/09/17927.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Previous message:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>In reply to:</strong> <a href="17927.php">Michal Schmidt: "Re: [OMPI devel] 1.10.0 issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17929.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.0 issue"</a>
<li><strong>Reply:</strong> <a href="17931.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.10.0 issue"</a>
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
