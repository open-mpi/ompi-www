<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 15:27:01 2014" -->
<!-- isoreceived="20140122202701" -->
<!-- sent="Wed, 22 Jan 2014 12:26:57 -0800" -->
<!-- isosent="20140122202657" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail" -->
<!-- id="CAAvDA17hbQ3igTw7bhJ1bexx891n+H077uS73dGZrsTaR4uG2w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A05491E-CCE2-473E-982B-E722EE412F4E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 15:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13841.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>It took all night to run, but I CAN confirm &quot;make check&quot; passed on my
<br>
64-bit MIPS platform with last night's v1.7 tarball (1.7.4rc2r30361).
<br>
<p>This was with &quot;-mabi=64&quot; in {C,CXX,FC}FLAGS and the corresponding wrapper
<br>
flags. I would guess from Brian's response to my failures reported for
<br>
PPC32 and MIPS32 that the other two ABIs won't work.  However, that won't
<br>
stop me from trying (for completeness).
<br>
<p>-Paul
<br>
<p><p>On Tue, Jan 21, 2014 at 8:48 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I dug back and found that your trunk patch still applies, so I committed
</span><br>
<span class="quotelev1">&gt; it and moved it to 1.7.4. So if you wouldn't mind verifying it once the
</span><br>
<span class="quotelev1">&gt; nightly tarball is available, I'd appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2014, at 9:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Building a recent (1.7.4rc2r30303) v1.7 tarball on a (QEMU-emulated)
</span><br>
<span class="quotelev1">&gt; MIPS64 system I find that the opal atomics test fail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Applying the &quot;for trunk&quot; patch I attached to ticket #3039 roughly 1 year
</span><br>
<span class="quotelev1">&gt; ago resolves the problems for me.  I suppose it would be great if at least
</span><br>
<span class="quotelev1">&gt; one person with real MIPS h/w could verify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I am concerned there is no &quot;pressure&quot; to push this into 1.7.4 if
</span><br>
<span class="quotelev1">&gt; time is tight.  I am just (re)testing this platform and reporting the
</span><br>
<span class="quotelev1">&gt; results for completeness.
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
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13843.php">Rolf vandeVaart: "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13841.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: mpirun hangs on ia64"</a>
<li><strong>In reply to:</strong> <a href="13826.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
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
