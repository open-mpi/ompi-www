<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 08:07:33 2007" -->
<!-- isoreceived="20070612120733" -->
<!-- sent="Tue, 12 Jun 2007 08:07:20 -0400" -->
<!-- isosent="20070612120720" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="672C877C-8A38-415D-B6FF-8CD68EB1758D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070611220256.GF63369_at_sun.com" -->
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
<strong>Date:</strong> 2007-06-12 08:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Ethan Mallove: "[MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0320.php">Ethan Mallove: "[MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2007, at 6:02 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;            &quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;            &quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;                &quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;                &quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;sm,udapl&quot;)&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;            ) \
</span><br>
<span class="quotelev1">&gt;        )
</span><br>
<p>Yowza!  We really need to make this quoting situation better  
<br>
somehow.  :-(
<br>
<p>Don't you have an extra ) in there at the end?
<br>
<p><span class="quotelev1">&gt; How come EvaluateString() doesn't translate this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;            &quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;            &quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;                &quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
</span><br>
<span class="quotelev1">&gt;                &quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;sm,udapl&quot;)&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;            ) \
</span><br>
<span class="quotelev1">&gt;        )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Into one big eval block like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eval $btls = MTT::Functions::if(MTT::Functions::regexp 
</span><br>
<span class="quotelev1">&gt; (MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-2|v20z-2&quot;),
</span><br>
<span class="quotelev1">&gt;                  MTT::Functions::enumerate(&quot;self,sm,tcp&quot;),
</span><br>
<span class="quotelev1">&gt;                  MTT::Functions::if(&quot;MTT::Functions::regexp 
</span><br>
<span class="quotelev1">&gt; (&quot;MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-6&quot;),
</span><br>
<span class="quotelev1">&gt;                      MTT::Functions::enumerate(&quot;udapl&quot;),
</span><br>
<span class="quotelev1">&gt;                      MTT::Functions::enumerate(&quot;sm&quot;, &quot;tcp&quot;,  
</span><br>
<span class="quotelev1">&gt; &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)
</span><br>
<span class="quotelev1">&gt;                  )
</span><br>
<span class="quotelev1">&gt;      )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we could put the burden of the nasty recursive
</span><br>
<span class="quotelev1">&gt; parenthesis/quote parsing on perl, rather than MTT. That
</span><br>
<span class="quotelev1">&gt; would seem to naturally make the INI funclet syntax more
</span><br>
<span class="quotelev1">&gt; Perl-like.
</span><br>
<p>Ah -- I had to think about this a bit before I figured it out/ 
<br>
remembered.  I think we won't get the expansion effect if you do it  
<br>
this way.  Although it might solve some other issues (e.g., https:// 
<br>
svn.open-mpi.org/trac/mtt/ticket/184)...?
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
<li><strong>Next message:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Ethan Mallove: "[MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0320.php">Ethan Mallove: "[MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0322.php">Ethan Mallove: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
