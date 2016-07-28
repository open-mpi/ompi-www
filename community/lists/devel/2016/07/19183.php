<?
$subject_val = "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 13:29:22 2016" -->
<!-- isoreceived="20160712172922" -->
<!-- sent="Tue, 12 Jul 2016 17:29:20 +0000" -->
<!-- isosent="20160712172920" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc4] non-critical faulres report" -->
<!-- id="FDE5195E-2798-4C08-89D6-111C04A45A81_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14M9Jiu7AutjfHK9ZzXscRqFyNsx3Q3C7fT220oWaxCBA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc4] non-critical faulres report<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 13:29:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19184.php">Paul Kapinos: "[OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19182.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it; thanks.
<br>
<p><span class="quotelev1">&gt; On Jul 12, 2016, at 1:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have only access to two instances of PGI which were installed with -m32 support.
</span><br>
<span class="quotelev1">&gt; They are both old:  12.10-0 and 13.9-0.
</span><br>
<span class="quotelev1">&gt; Sorry, I know that's not much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 12, 2016 at 8:06 AM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Paul,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you narrow down the versions of the PGCC where you get the ICE when
</span><br>
<span class="quotelev1">&gt; using the -m32 option?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2016-07-06 15:29 GMT-06:00 Paul Hargrove &lt;phhargrove_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; The following are previously reported issues that I am *not* expecting to be resolved in 2.0.0.
</span><br>
<span class="quotelev1">&gt; However, I am listing them here for completeness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Known, but with later target:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenBSD fails to build ROMIO - PR1178 exists with v2.0.1 target
</span><br>
<span class="quotelev1">&gt; NAG Fortran support - PR1215 exists with v2.0.1 target
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Known, but *not* suspected to be the fault of Open MPI or it embedded components:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pathcc gets ICE - versions 5.0.5 and 6.0.527 get compiler crashes building Open MPI
</span><br>
<span class="quotelev1">&gt; Pgcc -m32 gets ICE - versions 12.x and 13.x (the only ones I can test w/ -m32) crash compiling hwloc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19155.php">http://www.open-mpi.org/community/lists/devel/2016/07/19155.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19181.php">http://www.open-mpi.org/community/lists/devel/2016/07/19181.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19182.php">http://www.open-mpi.org/community/lists/devel/2016/07/19182.php</a>
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
<li><strong>Next message:</strong> <a href="19184.php">Paul Kapinos: "[OMPI devel] SHMEM, &quot;mpp/shmem.fh&quot;, CMake and infinite loops"</a>
<li><strong>Previous message:</strong> <a href="19182.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>In reply to:</strong> <a href="19182.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
<li><strong>Reply:</strong> <a href="19186.php">Paul Hargrove: "Re: [OMPI devel] [2.0.0rc4] non-critical faulres report"</a>
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
