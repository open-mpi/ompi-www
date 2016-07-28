<?
$subject_val = "Re: [OMPI users] Problem building 1.10.1 on OSX:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 26 11:55:02 2015" -->
<!-- isoreceived="20151126165502" -->
<!-- sent="Thu, 26 Nov 2015 08:54:57 -0800" -->
<!-- isosent="20151126165457" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building 1.10.1 on OSX:" -->
<!-- id="AA1B9DB5-BADD-402B-84AD-FAC8EC4E6210_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="565736DB.20804_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building 1.10.1 on OSX:<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-26 11:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28113.php">Grigory Shamov: "[OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>In reply to:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that&#226;&#128;&#153;s correct - unfortunately, the VT team no longer supports it as they have moved on to ScoreP. It still builds and works on Linux, and so we leave it in the code for that purpose. I&#226;&#128;&#153;m afraid Mac users just need to use one of the workarounds you identified.
<br>
<p>Sorry for the inconvenience
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Nov 26, 2015, at 8:44 AM, JR Cary &lt;cary_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i.e., Yosemite,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Darwin numbersixe.carys.home 14.5.0 Darwin Kernel Version 14.5.0: Tue Sep  1 21:23:09 PDT 2015; root:xnu-2782.50.1~1/RELEASE_X86_64 x86_64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but also occurs on El Capitan:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ln -s /Users/cary/projects/vorpalall/builds/openmpi-1.10.1/static/../ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/otfmerge.c otfmerge.c
</span><br>
<span class="quotelev1">&gt; ln -s /Users/cary/projects/vorpalall/builds/openmpi-1.10.1/static/../ompi/contrib/vt/vt/extlib/otf/tools/otfmerge/handler.c handler.c
</span><br>
<span class="quotelev1">&gt;  CC       otfmerge_mpi-otfmerge.o
</span><br>
<span class="quotelev1">&gt;  CC       otfmerge_mpi-handler.o
</span><br>
<span class="quotelev1">&gt;  CCLD     otfmerge-mpi
</span><br>
<span class="quotelev1">&gt; ld: library not found for -lmpi
</span><br>
<span class="quotelev1">&gt; clang: error: linker command failed with exit code 1 (use -v to see invocation)
</span><br>
<span class="quotelev1">&gt; make[10]: *** [otfmerge-mpi] Error 1
</span><br>
<span class="quotelev1">&gt; make[9]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[8]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[7]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[6]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been a long-standing bug that gets fixed by any of
</span><br>
<span class="quotelev1">&gt;  --disable-vt
</span><br>
<span class="quotelev1">&gt;  not using &quot;make -j&quot;
</span><br>
<span class="quotelev1">&gt;  restarting the build, i.e., typing make at the point where this fails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I suspect a missing dependency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; John Cary
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28111.php">http://www.open-mpi.org/community/lists/users/2015/11/28111.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28113.php">Grigory Shamov: "[OMPI users] oob-tcp error (warning?) message"</a>
<li><strong>Previous message:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
<li><strong>In reply to:</strong> <a href="28111.php">JR Cary: "[OMPI users] Problem building 1.10.1 on OSX:"</a>
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
