<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 15 11:49:58 2007" -->
<!-- isoreceived="20070615154958" -->
<!-- sent="Fri, 15 Jun 2007 11:50:37 -0400" -->
<!-- isosent="20070615155037" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Differentiating builds in the reporter" -->
<!-- id="20070615155036.GA28669_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7942BAD4-F949-46D5-BB05-885B48CFE509_at_cisco.com" -->
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
<strong>Date:</strong> 2007-06-15 11:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Reply:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun/15/2007 10:01:24AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 14, 2007, at 10:45 PM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Here at IU on our cluster Thor, we are running the trunk
</span><br>
<span class="quotelev2">&gt; &gt; both with  threads enabled and with threads disabled.
</span><br>
<span class="quotelev2">&gt; &gt; How should these builds be  differentiated for the
</span><br>
<span class="quotelev2">&gt; &gt; reporter?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have two different MPI install sections for the
</span><br>
<span class="quotelev1">&gt; with/without  threads?  (that's how I have it configured
</span><br>
<span class="quotelev1">&gt; in my Cisco MTT -- not  running in production yet, but it
</span><br>
<span class="quotelev1">&gt; will be soon)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, they should be naturally separated already.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Or try this.
<br>
<p>With threads:
<br>
<p><a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=226">http://www.open-mpi.org/mtt/reporter.php?do_redir=226</a>
<br>
<p>Without threads:
<br>
<p><a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=227">http://www.open-mpi.org/mtt/reporter.php?do_redir=227</a>
<br>
<p>If you click [Advanced] pop-up window you can see I've
<br>
entered &quot;threads&quot; and &quot;!threads&quot;.
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
<li><strong>Next message:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Previous message:</strong> <a href="0329.php">Jeff Squyres: "Re: [MTT users] IBM thread tests"</a>
<li><strong>In reply to:</strong> <a href="0328.php">Jeff Squyres: "Re: [MTT users] Differentiating builds in the reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
<li><strong>Reply:</strong> <a href="0331.php">Tim Prins: "Re: [MTT users] Differentiating builds in the reporter"</a>
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
