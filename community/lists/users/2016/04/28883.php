<?
$subject_val = "Re: [OMPI users] Building against XLC XLF";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 22:44:26 2016" -->
<!-- isoreceived="20160404024426" -->
<!-- sent="Sun, 3 Apr 2016 22:44:25 -0400" -->
<!-- isosent="20160404024425" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building against XLC XLF" -->
<!-- id="CAFVdyvM+_5z25UWXNooKMr3im5HY3KL__udi3PnhmxEkgGXbNw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5701D2C4.40604_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building against XLC XLF<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 22:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.10.1 failed in make  with xlc/xlf it (1.10.1) works with gcc.
<br>
<p>master (cloned today from github)  works with xlc/xlf.
<br>
<p>I wanted to be more confident it worked than just make check.  I have built
<br>
a few codes appears good so far.  Just reporting that master appears to
<br>
work with xlc/xlf.
<br>
<p>On Sun, Apr 3, 2016 at 10:34 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which version are you using ? v1.10 ? v2.x ? master ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what is failing ?
</span><br>
<span class="quotelev1">&gt; configure ? make ? make install ? make check ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is this issue specific to xlc/xlf ?
</span><br>
<span class="quotelev1">&gt; (e.g. does it work with gcc compilers ?)
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/4/2016 11:28 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I recently needed to build an OpenMPI build on Power 8 where I had access
</span><br>
<span class="quotelev1">&gt; to xlc / xlf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current release fails (as noted in the readme)
</span><br>
<span class="quotelev1">&gt; But a clone as of April 4th from git worked, here is my (simple) configure
</span><br>
<span class="quotelev1">&gt; script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; COMPILERS='CC=xlc FC=xlf CXX=xlc++'
</span><br>
<span class="quotelev1">&gt; ./configure             \
</span><br>
<span class="quotelev1">&gt; --prefix=$PREFIX        \
</span><br>
<span class="quotelev1">&gt; --mandir=$PREFIX/man    \
</span><br>
<span class="quotelev1">&gt; $COMPILERS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to check other than
</span><br>
<span class="quotelev1">&gt; make check
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It had not failures.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xlc --version
</span><br>
<span class="quotelev1">&gt; IBM XL C/C++ for Linux, V13.1.3 (5725-C73, 5765-J08)
</span><br>
<span class="quotelev1">&gt; xlf -qversion
</span><br>
<span class="quotelev1">&gt; IBM XL Fortran for Linux, V15.1.3 (5725-C75, 5765-J10)
</span><br>
<span class="quotelev1">&gt; Version: 15.01.0003.0001
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev1">&gt; Assoc. Director Advanced Research Computing - TS
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28881.php">http://www.open-mpi.org/community/lists/users/2016/04/28881.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28882.php">http://www.open-mpi.org/community/lists/users/2016/04/28882.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Brock Palen
www.umich.edu/~brockp
Assoc. Director Advanced Research Computing - TS
XSEDE Campus Champion
brockp_at_[hidden]
(734)936-1985
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28883/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28884.php">Howard Pritchard: "Re: [OMPI users] libfabric verb provider for iWARP RNIC"</a>
<li><strong>Previous message:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28882.php">Gilles Gouaillardet: "Re: [OMPI users] Building against XLC XLF"</a>
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
