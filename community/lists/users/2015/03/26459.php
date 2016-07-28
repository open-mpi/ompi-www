<?
$subject_val = "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 19:24:28 2015" -->
<!-- isoreceived="20150312232428" -->
<!-- sent="Thu, 12 Mar 2015 23:24:27 +0000" -->
<!-- isosent="20150312232427" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled" -->
<!-- id="A7841931-FCCA-4DAC-A6EB-E64C6CD46B94_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="550217DF.5020407_at_gmail.com" -->
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
<strong>Date:</strong> 2015-03-12 19:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26458.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>In reply to:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Put this in foo.c:
<br>
<p>-----
<br>
include &lt;stdio.h&gt;
<br>
#include &lt;stdarg.h&gt;
<br>
<p>static void foo(const char *fmt, ...)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_list list;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_start(list, fmt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vprintf(fmt, list);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;va_end(fmt);
<br>
}
<br>
<p>int main()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo(&quot;%s %s\n&quot;, &quot;hello&quot;, &quot;world&quot;);
<br>
}
<br>
-----
<br>
<p>Then try
<br>
<p>icc foo.c -o foo
<br>
./foo
<br>
<p><p><p><p><span class="quotelev1">&gt; On Mar 12, 2015, at 6:49 PM, Fabricio Cannini &lt;fcannini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12-03-2015 18:23, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Do you have the latest version of the Intel 12.x compiler installed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you able to compile/install any other C source code that uses varargs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try it now. Any easy-to-find code tha i can pick?
</span><br>
<span class="quotelev1">&gt; Sorry but I know practically zero C. :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because we've seen busted / buggy Intel compiler installs before.  It may be that you need to update to the latest version of the Intel 12.x compiler suite.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's not the very latest according to this link, but it's pretty recent for the series:
</span><br>
<span class="quotelev1">&gt; <a href="https://software.intel.com/en-us/articles/intel-compiler-and-composer-update-version-numbers-to-compiler-version-number-mapping">https://software.intel.com/en-us/articles/intel-compiler-and-composer-update-version-numbers-to-compiler-version-number-mapping</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26457.php">http://www.open-mpi.org/community/lists/users/2015/03/26457.php</a>
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
<li><strong>Next message:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Previous message:</strong> <a href="26458.php">Ralph Castain: "Re: [OMPI users] Process Binding Warning"</a>
<li><strong>In reply to:</strong> <a href="26457.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<li><strong>Reply:</strong> <a href="26460.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
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
