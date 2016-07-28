<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 20:20:24 2007" -->
<!-- isoreceived="20070906002024" -->
<!-- sent="Wed, 5 Sep 2007 20:19:58 -0400" -->
<!-- isosent="20070906001958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params" -->
<!-- id="AD620F26-AA9D-479A-8E89-3E3EECBA253E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070904173314.GR12598_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-05 20:19:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Tim Prins: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2007, at 1:33 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; So if I have the following line in my [Test build: intel]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; section, MTT will now build and run the Intel tests *twice*?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Once with compiler-A and once with compiler-B?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   setenv = &amp;enumerate(&quot;/path/to/compiler-A&quot;, &quot;/path/to/compiler-B&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv is a bad example -- we can already take multiple values for
</span><br>
<span class="quotelev2">&gt;&gt; that and we do *not* create multiple runs for it.  For example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenv = FOO value1
</span><br>
<span class="quotelev2">&gt;&gt; setenv = BAR value2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This ticket should be re-opened because the above case is
</span><br>
<span class="quotelev1">&gt; not covered. I *want* to get two separate test builds if I
</span><br>
<span class="quotelev1">&gt; give &quot;prepend_path&quot; a two-item list. Should we support two
</span><br>
<span class="quotelev1">&gt; kinds of environment INI parameter assignment? One for when
</span><br>
<span class="quotelev1">&gt; the user wants a multiplicative effect, and one for when
</span><br>
<span class="quotelev1">&gt; they do not? E.g.,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do one test build. Prepend PATH with value1 and value2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   prepend_path = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt;       PATH value1
</span><br>
<span class="quotelev1">&gt;       PATH value2
</span><br>
<span class="quotelev1">&gt;   EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do two test builds. Prepend PATH with value1 on first
</span><br>
<span class="quotelev1">&gt; build. Prepend PATH with value2 on second build.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   prepend_path = &lt;&lt;EOT
</span><br>
<span class="quotelev1">&gt;     &amp;enumerate( \
</span><br>
<span class="quotelev1">&gt;      &quot;PATH value1&quot;, \
</span><br>
<span class="quotelev1">&gt;      &quot;PATH value2&quot;  \
</span><br>
<span class="quotelev1">&gt;     )
</span><br>
<span class="quotelev1">&gt;   EOT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So scalar context means do not mulitply runs, and list
</span><br>
<span class="quotelev1">&gt; context means multiply.
</span><br>
<p>I might be convinced that this is ok, but you'll need to run it by  
<br>
all users to make sure that they're not already using the moral  
<br>
equivalent of the second form (i.e., two setenv's).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Previous message:</strong> <a href="0398.php">Tim Prins: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0393.php">Ethan Mallove: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
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
