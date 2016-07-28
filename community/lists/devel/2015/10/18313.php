<?
$subject_val = "Re: [OMPI devel] Please test: v1.10.1rc3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 20:24:37 2015" -->
<!-- isoreceived="20151030002437" -->
<!-- sent="Thu, 29 Oct 2015 17:24:31 -0700" -->
<!-- isosent="20151030002431" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Please test: v1.10.1rc3" -->
<!-- id="CAAvDA16K-2ynVB7u7zHDcMHC2s9Vjb69_5=DSBa_Mi8xG_BBEA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CE1CFE7-406C-454A-B47E-332EE4E3EE09_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Please test: v1.10.1rc3<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 20:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Previous message:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>In reply to:</strong> <a href="18310.php">Ralph Castain: "[OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18315.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have completed testing to the best of my ability.
<br>
That includes waiting for my slow QEMU-emulated ARM and MIPS systems.
<br>
My testing also includes real h/w testing of ARMv7, ARMv8 (aka AARCH64),
<br>
PPC64el and IA64.
<br>
Though a few systems have been retired since my last round of testing, I
<br>
count 79 configurations tested.
<br>
<p>I found no new issues.
<br>
<p>For the first time I was also able to (attempt to) test SPARC64 via QEMU.
<br>
I have a &quot;very odd&quot; failure on this system in which &quot;@SET_MAKE@&quot; appears
<br>
un-expanded in several generated Makefiles.
<br>
For that reason the testing on this platform did not finish.
<br>
I am still investigating, but currently am assuming this is some issue like
<br>
sed crashing (due to bad emulation?) rather than anything in Open MPI.
<br>
<p>-Paul
<br>
<p>On Wed, Oct 28, 2015 at 12:19 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Last call - please give this version a whirl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18310.php">http://www.open-mpi.org/community/lists/devel/2015/10/18310.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Previous message:</strong> <a href="18312.php">Nick Papior: "Re: [OMPI devel] 1.10.*, intel 16.0.0, fortran, symbol lookup error reference to mpi_fortran_argvs_null__"</a>
<li><strong>In reply to:</strong> <a href="18310.php">Ralph Castain: "[OMPI devel] Please test: v1.10.1rc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18314.php">Ralph Castain: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18315.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
<li><strong>Reply:</strong> <a href="18319.php">Paul Hargrove: "Re: [OMPI devel] Please test: v1.10.1rc3"</a>
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
