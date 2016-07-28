<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:40:37 2015" -->
<!-- isoreceived="20150312234037" -->
<!-- sent="Thu, 12 Mar 2015 20:40:34 -0300" -->
<!-- isosent="20150312234034" -->
<!-- name="Fabricio Cannini" -->
<!-- email="fcannini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="550223F2.5050505_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="A7841931-FCCA-4DAC-A6EB-E64C6CD46B94_at_cisco.com" -->
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
<strong>From:</strong> Fabricio Cannini (<em>fcannini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 19:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 12-03-2015 20:24, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdarg.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static void foo(const char *fmt, ...)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;          va_list list;
</span><br>
<span class="quotelev1">&gt;          va_start(list, fmt);
</span><br>
<span class="quotelev1">&gt;          vprintf(fmt, list);
</span><br>
<span class="quotelev1">&gt;          va_end(fmt);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;          foo(&quot;%s %s\n&quot;, &quot;hello&quot;, &quot;world&quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p>Thanks for the code, Jeff.
<br>
<p>icc won't even compile it, barfs with the following error message:
<br>
===========================================
<br>
foo.c(9): error: incorrect use of va_end
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_end(fmt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for foo.c (code 2)
<br>
===========================================
<br>
<p><p>This means i should update icc, right ?
<br>
<p><p>[ ]'s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>In reply to:</strong> <a href="26459.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26461.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
