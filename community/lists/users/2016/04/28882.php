<?
$subject_val = "Re: [OMPI users] Building against XLC XLF";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr  3 22:34:47 2016" -->
<!-- isoreceived="20160404023447" -->
<!-- sent="Mon, 4 Apr 2016 11:34:44 +0900" -->
<!-- isosent="20160404023444" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building against XLC XLF" -->
<!-- id="5701D2C4.40604_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAFVdyvMuur5LwiAubCEMgU6U86LHjFZf-L9W8zveNF_3B_0sDA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-03 22:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Reply:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock,
<br>
<p>which version are you using ? v1.10 ? v2.x ? master ?
<br>
<p>what is failing ?
<br>
configure ? make ? make install ? make check ?
<br>
<p>is this issue specific to xlc/xlf ?
<br>
(e.g. does it work with gcc compilers ?)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/4/2016 11:28 AM, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; I recently needed to build an OpenMPI build on Power 8 where I had 
</span><br>
<span class="quotelev1">&gt; access to xlc / xlf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The current release fails (as noted in the readme)
</span><br>
<span class="quotelev1">&gt; But a clone as of April 4th from git worked, here is my (simple) 
</span><br>
<span class="quotelev1">&gt; configure script:
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
<span class="quotelev1">&gt; brockp_at_[hidden] &lt;mailto:brockp_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28881.php">http://www.open-mpi.org/community/lists/users/2016/04/28881.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28882/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Previous message:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<li><strong>In reply to:</strong> <a href="28881.php">Brock Palen: "[OMPI users] Building against XLC XLF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
<li><strong>Reply:</strong> <a href="28883.php">Brock Palen: "Re: [OMPI users] Building against XLC XLF"</a>
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
