<?
$subject_val = "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:33:42 2015" -->
<!-- isoreceived="20150722003342" -->
<!-- sent="Tue, 21 Jul 2015 17:33:37 -0700" -->
<!-- isosent="20150722003337" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32" -->
<!-- id="CAAvDA162=eJv3=r8hLkg=W7_5p3BpEy21v_veDtCRvuJ5CMcDA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A8FA8604-E6E3-41CD-A08B-1FBF750E7DBF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-21 20:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17675.php">Paul Hargrove: "[OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;"</a>
<li><strong>Previous message:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>In reply to:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Thanks for clarifying.
<br>
<p>-Paul
<br>
<p>On Tue, Jul 21, 2015 at 5:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Nathan reminded me today that we started requiring C99 in the 1.8 series,
</span><br>
<span class="quotelev1">&gt; so yes - 1.10 does require C99
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I went ahead and removed the designators before he reminded me, but I&#226;&#128;&#153;ll
</span><br>
<span class="quotelev1">&gt; leave them out as they aren&#226;&#128;&#153;t required
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2015, at 5:01 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know you recently fixed a C99-related issue I saw in 1.10.0rc1 (removing
</span><br>
<span class="quotelev1">&gt; designators in an initializer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I was surprised to see the following with pgi-9.0-4 and -m32:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Compiler and preprocessor tests
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** C compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for gcc... (cached) pgcc
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C compiler... (cached) no
</span><br>
<span class="quotelev1">&gt; checking whether pgcc accepts -g... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking for pgcc option to accept ISO C89... (cached) none needed
</span><br>
<span class="quotelev1">&gt; checking whether pgcc and cc understand -c and -o together... yes
</span><br>
<span class="quotelev1">&gt; checking for pgcc option to accept ISO C99... unsupported
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Open MPI requires a C99 compiler
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The odd  thing is this is happening with &quot;-m32&quot;, but not without it.
</span><br>
<span class="quotelev1">&gt; Examining config.log shows problems with &quot;ull&quot; suffixes on constants.
</span><br>
<span class="quotelev1">&gt; So, this does appear to be a *valid* choice to reject this compiler.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HOWEVER, I just wanted to ask if 1.10.0 is really intended to be enforcing
</span><br>
<span class="quotelev1">&gt; C99 or not?
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
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17672.php">http://www.open-mpi.org/community/lists/devel/2015/07/17672.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17673.php">http://www.open-mpi.org/community/lists/devel/2015/07/17673.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17675.php">Paul Hargrove: "[OMPI devel] Open MPI 1.10.0rc2 and &quot;pgcc -m32&quot;"</a>
<li><strong>Previous message:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<li><strong>In reply to:</strong> <a href="17673.php">Ralph Castain: "Re: [OMPI devel] 1.10.0rc2 failure with pgi-9.0-4 and -m32"</a>
<!-- nextthread="start" -->
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
