<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 10:50:11 2007" -->
<!-- isoreceived="20070612145011" -->
<!-- sent="Tue, 12 Jun 2007 10:50:44 -0400" -->
<!-- isosent="20070612145044" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="20070612145043.GA57432_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="672C877C-8A38-415D-B6FF-8CD68EB1758D_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-12 10:50:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun/12/2007 08:07:20AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 11, 2007, at 6:02 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;            &quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;            &quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;                &quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;                &quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;,  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sm,udapl&quot;)&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;            ) \
</span><br>
<span class="quotelev2">&gt; &gt;        )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yowza!  We really need to make this quoting situation better  
</span><br>
<span class="quotelev1">&gt; somehow.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Don't you have an extra ) in there at the end?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; How come EvaluateString() doesn't translate this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;            &quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;            &quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;                &quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
</span><br>
<span class="quotelev2">&gt; &gt;                &quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;,  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sm,udapl&quot;)&quot;&quot; \
</span><br>
<span class="quotelev2">&gt; &gt;            ) \
</span><br>
<span class="quotelev2">&gt; &gt;        )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Into one big eval block like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; eval $btls = MTT::Functions::if(MTT::Functions::regexp 
</span><br>
<span class="quotelev2">&gt; &gt; (MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-2|v20z-2&quot;),
</span><br>
<span class="quotelev2">&gt; &gt;                  MTT::Functions::enumerate(&quot;self,sm,tcp&quot;),
</span><br>
<span class="quotelev2">&gt; &gt;                  MTT::Functions::if(&quot;MTT::Functions::regexp 
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-6&quot;),
</span><br>
<span class="quotelev2">&gt; &gt;                      MTT::Functions::enumerate(&quot;udapl&quot;),
</span><br>
<span class="quotelev2">&gt; &gt;                      MTT::Functions::enumerate(&quot;sm&quot;, &quot;tcp&quot;,  
</span><br>
<span class="quotelev2">&gt; &gt; &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)
</span><br>
<span class="quotelev2">&gt; &gt;                  )
</span><br>
<span class="quotelev2">&gt; &gt;      )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So we could put the burden of the nasty recursive
</span><br>
<span class="quotelev2">&gt; &gt; parenthesis/quote parsing on perl, rather than MTT. That
</span><br>
<span class="quotelev2">&gt; &gt; would seem to naturally make the INI funclet syntax more
</span><br>
<span class="quotelev2">&gt; &gt; Perl-like.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah -- I had to think about this a bit before I figured it out/ 
</span><br>
<span class="quotelev1">&gt; remembered.  I think we won't get the expansion effect if you do it  
</span><br>
<span class="quotelev1">&gt; this way.  
</span><br>
<p>No expansion effect? As long as the perl code evaluates to
<br>
an array, couldn't it to work? E.g.,
<br>
<p>&nbsp;&nbsp;exec = mpirun --mca btl @btls@ ...
<br>
<p>&nbsp;&nbsp;# Returns an array
<br>
&nbsp;&nbsp;btls = (&quot;sm&quot;, &quot;tcp&quot;)
<br>
<p>So EvaluateString() would do only this:
<br>
<p>&nbsp;&nbsp;* Substitute all &amp;funcs() with MTT::Functions::funcs()
<br>
&nbsp;&nbsp;* Substitute all $vars with same-INI-section params
<br>
&nbsp;&nbsp;* Backslash escape @ symbols so they show up as strings in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the eval'd result
<br>
&nbsp;&nbsp;* Perform an &quot;eval&quot; on the final string
<br>
&nbsp;&nbsp;* Iterate over the result of the above step's string,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;replacing &quot;@multiplier&quot; strings with the corresponding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;element of the @multiplier array 
<br>
<p><span class="quotelev1">&gt; Although it might solve some other issues (e.g., https:// 
</span><br>
<span class="quotelev1">&gt; svn.open-mpi.org/trac/mtt/ticket/184)...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The mess atop this email would simplify to:
<br>
<p>btls =  if ($hostname =~ /foo/) {                                \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;self,sm,tcp&quot;);                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} elsif ($hostname =~ /bar/) {                           \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;udapl&quot;);                                    \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {                                                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return (&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;); \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>In reply to:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0323.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
