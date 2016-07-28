<?
$subject_val = "Re: [MTT users] Why is this loop_spawn test result marked FAIL?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 11:24:23 2010" -->
<!-- isoreceived="20100416152423" -->
<!-- sent="Fri, 16 Apr 2010 11:24:18 -0400" -->
<!-- isosent="20100416152418" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Why is this loop_spawn test result marked FAIL?" -->
<!-- id="20100416152418.GB29996_at_oracle.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E636E7D7-4845-4016-9D77-7AA7CCF7455B_at_cisco.com" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 11:24:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>Previous message:</strong> <a href="0730.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>In reply to:</strong> <a href="0730.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>Reply:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've filed a Trac ticket for this issue:
<br>
<p><a href="http://svn.open-mpi.org/trac/mtt/ticket/393">http://svn.open-mpi.org/trac/mtt/ticket/393</a>
<br>
<p>On Wed, Apr/14/2010 11:36:04AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; That's interesting -- I see &quot;Failed; exit status: 0&quot; in the &quot;Result message&quot; field.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like that's coming from Test::Analyze::Correctness.  Somehow $pass came out to be 0, so it fell into the &quot;fail&quot; path...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 14, 2010, at 10:51 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This loop_spawn test appears to have passed, though it's marked
</span><br>
<span class="quotelev2">&gt; &gt; as FAIL:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   <a href="http://www.open-mpi.org/mtt/index.php?do_redir=1233">http://www.open-mpi.org/mtt/index.php?do_redir=1233</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Its pass condition is set to:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   pass = &amp;and(&amp;test_wifexited(), &amp;eq(&amp;test_wexitstatus(), 0))
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>Previous message:</strong> <a href="0730.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>In reply to:</strong> <a href="0730.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
<li><strong>Reply:</strong> <a href="0732.php">Jeff Squyres: "Re: [MTT users] Why is this loop_spawn test result marked FAIL?"</a>
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
