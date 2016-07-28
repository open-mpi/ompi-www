<?
$subject_val = "Re: [MTT users] Why is this loop_spawn test result marked FAIL?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 11:48:02 2010" -->
<!-- isoreceived="20100416154802" -->
<!-- sent="Fri, 16 Apr 2010 11:47:56 -0400" -->
<!-- isosent="20100416154756" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Why is this loop_spawn test result marked FAIL?" -->
<!-- id="B097DB4F-EC0D-4A39-9A9D-EAF3FAB30D87_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100416152418.GB29996_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [MTT users] Why is this loop_spawn test result marked FAIL?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 11:47:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0733.php">Jon Forrest: "[MTT users] Using mtt For Performance Testing Only"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Ethan Mallove: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>In reply to:</strong> <a href="0731.php">Ethan Mallove: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to put a little more debug diag output in those code paths and run the test manually to see what's up.  Sorry I don't have a better idea offhand.  :-(
<br>
<p>On Apr 16, 2010, at 11:24 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; I've filed a Trac ticket for this issue:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://svn.open-mpi.org/trac/mtt/ticket/393">http://svn.open-mpi.org/trac/mtt/ticket/393</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr/14/2010 11:36:04AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; That's interesting -- I see &quot;Failed; exit status: 0&quot; in the &quot;Result message&quot; field.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looks like that's coming from Test::Analyze::Correctness.  Somehow $pass came out to be 0, so it fell into the &quot;fail&quot; path...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 14, 2010, at 10:51 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This loop_spawn test appears to have passed, though it's marked
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as FAIL:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1233">http://www.open-mpi.org/mtt/index.php?do_redir=1233</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Its pass condition is set to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Ethan
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0733.php">Jon Forrest: "[MTT users] Using mtt For Performance Testing Only"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Ethan Mallove: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>In reply to:</strong> <a href="0731.php">Ethan Mallove: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
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
