<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:45:00 2015" -->
<!-- isoreceived="20150312234500" -->
<!-- sent="Thu, 12 Mar 2015 23:44:59 +0000" -->
<!-- isosent="20150312234459" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="12B5152F-5C77-4FED-BB1F-5DE98E7DE56D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="550223F2.5050505_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 19:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gah; my mistake -- that va_end(fmt) should be va_end(list).
<br>
<p>It works for me with gcc 4.9.1 and icc:
<br>
<p>Intel(R) C Intel(R) 64 Compiler XE for applications running on Intel(R) 64, Version 15.0.2.164 Build 20150121
<br>
<p><p><p><p><span class="quotelev1">&gt; On Mar 12, 2015, at 7:40 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12-03-2015 20:24, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdarg.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; static void foo(const char *fmt, ...)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         va_list list;
</span><br>
<span class="quotelev2">&gt;&gt;         va_start(list, fmt);
</span><br>
<span class="quotelev2">&gt;&gt;         vprintf(fmt, list);
</span><br>
<span class="quotelev2">&gt;&gt;         va_end(fmt);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         foo(&quot;%s %s\n&quot;, &quot;hello&quot;, &quot;world&quot;);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the code, Jeff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icc won't even compile it, barfs with the following error message:
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; foo.c(9): error: incorrect use of va_end
</span><br>
<span class="quotelev1">&gt;      va_end(fmt);
</span><br>
<span class="quotelev1">&gt;      ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compilation aborted for foo.c (code 2)
</span><br>
<span class="quotelev1">&gt; ===========================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means i should update icc, right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ ]'s
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26460.php">http://www.open-mpi.org/community/lists/users/2015/03/26460.php</a>
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
<li><strong>Next message:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26470.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
