<?
$subject_val = "Re: [OMPI devel] RFC: warn if running a debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 02:02:56 2016" -->
<!-- isoreceived="20160302070256" -->
<!-- sent="Wed, 2 Mar 2016 01:02:54 -0600" -->
<!-- isosent="20160302070254" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: warn if running a debug build" -->
<!-- id="CAMJJpkXsNYeeZumuM6bBq9zsBuRyNT7-3Lmiko5ZYadLHUm+Aw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56D67149.3060908_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: warn if running a debug build<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 02:02:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure why Jeff decided to implement this approach. If I remember
<br>
correctly last week we converged toward the solution described by Ralph (ie
<br>
disabling the debug build by default for everyone,  including developers).
<br>
<p>I wish we could fix all the cases. What we tried to achieve is to prevent
<br>
the most usual blunders, but without finding the perfect solution. Most of
<br>
the solutions we came up with put the burden on us,  the OMPI developers.
<br>
<p>George
<br>
On Mar 1, 2016 10:51 PM, &quot;Gilles Gouaillardet&quot; &lt;gilles_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Let me rephrase that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will set the parameter in the etc/openmpi-mca-params.conf of my install
</span><br>
<span class="quotelev1">&gt; directory,
</span><br>
<span class="quotelev1">&gt; and i will very likely forget about it (etc/openmpi-mca-params.conf is not
</span><br>
<span class="quotelev1">&gt; overwritten by make install, right ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if one day, i decide to configure without --enable-debug and run a
</span><br>
<span class="quotelev1">&gt; performance benchmark, then i will not get the warning i need (and yes, i
</span><br>
<span class="quotelev1">&gt; will be the only one to blame ... but isn't it something we want to avoid
</span><br>
<span class="quotelev1">&gt; here ?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/2/2016 1:43 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 1, 2016, at 22:27 , Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be &quot;me-friendly&quot; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i explicitly configure with --enable-debug --enable-picky from git, so i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (hopefully) know what i am doing and do not want any warning.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iirc, cisco mtt does that too, and i am not sure you would want a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning and/or update your mtt config.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is not a strong opinion, and i am fine with setting a parameter (i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will likely soon forget i set that) in a config file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And you will be painfully reminded about that ;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The emitted message was supposed to contain the MCA parameter that need
</span><br>
<span class="quotelev2">&gt;&gt; to be set to silence the warning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/2/2016 1:21 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 1, 2016, at 10:17 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this case, should we only display the warning if debug build was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implicit ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for example, ./configure from git would display the warning (implicit
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; debug),
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but ./configure --enable-debug would not (explicit debug), regardless
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; we built from git or a tarball
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We don't currently distinguish between these two cases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What is the rationale for only warning on implicit debug builds?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18656.php">http://www.open-mpi.org/community/lists/devel/2016/03/18656.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18658.php">http://www.open-mpi.org/community/lists/devel/2016/03/18658.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/03/18659.php">http://www.open-mpi.org/community/lists/devel/2016/03/18659.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18660/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Previous message:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>In reply to:</strong> <a href="18659.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
<li><strong>Reply:</strong> <a href="18661.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: warn if running a debug build"</a>
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
