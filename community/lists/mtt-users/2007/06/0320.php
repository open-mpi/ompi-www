<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 18:02:20 2007" -->
<!-- isoreceived="20070611220220" -->
<!-- sent="Mon, 11 Jun 2007 18:02:57 -0400" -->
<!-- isosent="20070611220257" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT users] &amp;amp;if funclet and quoting" -->
<!-- id="20070611220256.GF63369_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-06-11 18:02:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
------------------------------------------------------
<br>
Question 1:
<br>
------------------------------------------------------
<br>
<p>I have the below &quot;exec&quot; and &quot;btls&quot; params in my INI, but I
<br>
keep running into quoting issues. I'm trying to get an
<br>
if-else effect by putting the else block in as the third
<br>
argument to the &amp;if() function, and I can't seem to manage
<br>
the levels of nested quoting. I keep getting bareword errors
<br>
(which is due to an incorrect number of wrapped quotes).
<br>
What am I doing wrong?
<br>
<p>exec = mpirun --mca btl @btls@ @hosts@ -np &amp;test_np() --prefix &amp;test_prefix() &amp;test_executable() &amp;test_argv()
<br>
<p>btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
<p>(The idea here is to use a different &quot;--mca btl&quot; option on
<br>
different clusters.)
<br>
<p>------------------------------------------------------
<br>
Question 2:
<br>
------------------------------------------------------
<br>
<p>How come EvaluateString() doesn't translate this:
<br>
<p>btls = &amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-2|v20z-2&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;self,sm,tcp&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;if(&quot;&amp;regexp(&quot;&amp;shell(&quot;hostname&quot;)&quot;, &quot;v440-6&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;udapl&quot;)&quot;, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;&amp;enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)&quot;&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;) \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
<p>Into one big eval block like this:
<br>
<p>eval $btls = MTT::Functions::if(MTT::Functions::regexp(MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-2|v20z-2&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Functions::enumerate(&quot;self,sm,tcp&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Functions::if(&quot;MTT::Functions::regexp(&quot;MTT::Functions::shell(&quot;hostname&quot;), &quot;v440-6&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Functions::enumerate(&quot;udapl&quot;),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Functions::enumerate(&quot;sm&quot;, &quot;tcp&quot;, &quot;sm,tcp&quot;, &quot;udapl&quot;, &quot;sm,udapl&quot;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;)
<br>
<p>So we could put the burden of the nasty recursive
<br>
parenthesis/quote parsing on perl, rather than MTT. That
<br>
would seem to naturally make the INI funclet syntax more
<br>
Perl-like.
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Jeff Squyres: "Re: [MTT users] Test build failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
<li><strong>Reply:</strong> <a href="0321.php">Jeff Squyres: "Re: [MTT users] &amp;if funclet and quoting"</a>
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
