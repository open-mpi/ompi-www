<?
$subject_val = "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 16:39:24 2016" -->
<!-- isoreceived="20160225213924" -->
<!-- sent="Thu, 25 Feb 2016 13:39:20 -0800" -->
<!-- isosent="20160225213920" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)" -->
<!-- id="CAAvDA17a2BSExmOijYMsd2nhoMhzuxOD5Su-4g9xz+QVgY2r_A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="69722888-10B9-4914-B8D7-81BBEA736DBA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-25 16:39:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Feb 25, 2016 at 1:27 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; I still find it fairly astounding that the naked word &quot;rank&quot; (vs &quot;rank()&quot;)
</span><br>
<span class="quotelev1">&gt; is ambiguous with a variable and a function call.  I wouldn't be surprised
</span><br>
<span class="quotelev1">&gt; by this in a scripting language; if this really is true in C++, that's
</span><br>
<span class="quotelev1">&gt; quite surprising to me.
</span><br>
<p><p>A &quot;bare&quot; function name (without parens) is the address of the function,
<br>
which can be converted to an int, long, etc.
<br>
So the &quot;rank&quot; identifier can validly refer to the function in this context.
<br>
<p>This is no different than C with respect to typing rules:
<br>
<p>$ cat foo.c
<br>
#include &lt;stdio.h&gt;
<br>
int main(void) { printf(&quot;%ld\n&quot;, main); }
<br>
$ gcc -o foo foo.c
<br>
$ ./foo
<br>
134513448
<br>
<p><p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Previous message:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>In reply to:</strong> <a href="18622.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
<li><strong>Reply:</strong> <a href="18624.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MTT setup updated to gcc-6.0 (pre)"</a>
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
