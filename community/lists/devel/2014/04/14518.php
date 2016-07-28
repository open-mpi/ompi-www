<?
$subject_val = "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 15:15:27 2014" -->
<!-- isoreceived="20140414191527" -->
<!-- sent="Mon, 14 Apr 2014 22:15:25 +0300" -->
<!-- isosent="20140414191525" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions" -->
<!-- id="CAAO1KyZA+Pr6RSc7z4q6Zu_55QLf6=n9fhVmpkjnnHATkouL0A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="61071FC8-9FE9-42E1-B94E-D210F0EEC442_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 15:15:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
this was true if all external libraries were maintaining ABI compatibility
<br>
indicator properly with libtool.
<br>
Let`s check your favorite, libibverbs :), the version is always 0.0.0 in
<br>
libibverbs.so.0.0.0 so openib btl will not fail on link.
<br>
The libibverbs can have experimental verbs included but libibverbs version
<br>
still will be indicating the libtool version is &quot;0:0:0&quot;.
<br>
<p>So, the only way for sysadmin/user to know if he has a right version of
<br>
libibvers installed is to check verbs.getVersion() and see if it is matches
<br>
to one which includes experimental verbs and then he will know that there
<br>
is a problem.
<br>
<p>but for us, the most powerful case is the one that you described: compare
<br>
ompi_info output on head and compute node and warn user if differ.
<br>
<p>Also, to provide an infrastructure to digitize release notes.
<br>
<p><p>On Mon, Apr 14, 2014 at 9:52 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; BTW, I should point out that this really is only relevant if libfoo A.B.C
</span><br>
<span class="quotelev1">&gt; and X.Y.Z are *ABI compatible*, but not *behavior compatible*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If A.B.C and X.Y.Z are not ABI compatible, then ompi_info will fail just
</span><br>
<span class="quotelev1">&gt; like the MPI processes fail (i.e., it may not be able to dlopen the
</span><br>
<span class="quotelev1">&gt; component using libfoo X.Y.Z).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A useful case to determine behavior compatibility is if libfoo exports a
</span><br>
<span class="quotelev1">&gt; capability vector; A.B.C supports capability 13 and 27, but X.Y.Z supports
</span><br>
<span class="quotelev1">&gt; only 13.  If the OMPI component is smart enough to detect these run-time
</span><br>
<span class="quotelev1">&gt; behavior differences, it'll only use capability 13 with X.Y.Z but will use
</span><br>
<span class="quotelev1">&gt; both 13 and 27 with A.B.C.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2014, at 2:48 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 14, 2014, at 10:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is no correlation between built_with and running_with versions of
</span><br>
<span class="quotelev1">&gt; external libraries supported by OMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ah, I see -- yes, that's the disconnect here.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think one use case that shows this is the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Admin Bob builds Open MPI on the cluster head node with dependent
</span><br>
<span class="quotelev1">&gt; library libfoo.so version A.B.C, which is a fully supported configuration.
</span><br>
<span class="quotelev1">&gt;  Therefore, the appropriate configure.m4's are happy, and everything builds
</span><br>
<span class="quotelev1">&gt; and installs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. But when User Betty goes to run, the libfoo.so on the back-end
</span><br>
<span class="quotelev1">&gt; compute nodes is accidentally version X.Y.Z, which is *not* supported.  And
</span><br>
<span class="quotelev1">&gt; Bad Things happen.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3. So you'd like to be able to run ompi_info on the head node and on the
</span><br>
<span class="quotelev1">&gt; compute nodes and compare the output, and see an obvious difference of
</span><br>
<span class="quotelev1">&gt; A.B.C vs. X.Y.Z in the dependent library of a given component, and use that
</span><br>
<span class="quotelev1">&gt; to help figure out what is going wrong.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The next release of external library does not mean we should remove
</span><br>
<span class="quotelev1">&gt; code in ompi for all previous supported releases for the same library.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is another use case: OMPI was built against dep library libfoo.so
</span><br>
<span class="quotelev1">&gt; A.B.C (which is a supported config).  But then someone does an upgrade of
</span><br>
<span class="quotelev1">&gt; libfoo *without rebuilding OMPI*, and now OMPI run-time links against
</span><br>
<span class="quotelev1">&gt; libfoo.so X.Y.Z, which is no longer a supported configuration.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Why are you so against it? I don`t see any issue with printing ext lib
</span><br>
<span class="quotelev1">&gt; version number in the MCA description, something that can improve
</span><br>
<span class="quotelev1">&gt; sysadmin/user-experience.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, we've done this before by putting them in read-only MCA parameters
</span><br>
<span class="quotelev1">&gt; -- we've called them &quot;info&quot; MCA params.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't see any in the code base today, but I know we've definitely had
</span><br>
<span class="quotelev1">&gt; version kinds of MCA params before.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14513.php">http://www.open-mpi.org/community/lists/devel/2014/04/14513.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14514.php">http://www.open-mpi.org/community/lists/devel/2014/04/14514.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14518/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>Previous message:</strong> <a href="14517.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<li><strong>In reply to:</strong> <a href="14514.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14519.php">Mike Dubman: "Re: [OMPI devel] [devel-core] OMPI MCA components - track external libs versions"</a>
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
