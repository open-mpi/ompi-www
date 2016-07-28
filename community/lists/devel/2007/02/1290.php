<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Feb  3 23:42:23 2007" -->
<!-- isoreceived="20070204044223" -->
<!-- sent="Sat, 3 Feb 2007 21:42:11 -0700" -->
<!-- isosent="20070204044211" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted --seed and orte_init()" -->
<!-- id="3B05815C-335F-49F9-87AF-4CA7E4ECE6AF_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C1EA15FE.182E%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-03 23:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1291.php">Jeff Squyres: "Re: [OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>Previous message:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>In reply to:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2007, at 10:35 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Something did occur to me that *might* help with the problem of  
</span><br>
<span class="quotelev1">&gt; detecting
</span><br>
<span class="quotelev1">&gt; when the seed is running. There is an option to orted &quot;-- report- 
</span><br>
<span class="quotelev1">&gt; uri pipe&quot;
</span><br>
<span class="quotelev1">&gt; that will cause the orted to write it's uri to the specified pipe.  
</span><br>
<span class="quotelev1">&gt; This
</span><br>
<span class="quotelev1">&gt; comes after the orted has completed orte_init, and so it *should*  
</span><br>
<span class="quotelev1">&gt; be ready
</span><br>
<span class="quotelev1">&gt; at that time for you to connect to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So you might try using that option when you kickoff the seed, and then
</span><br>
<span class="quotelev1">&gt; reading from the pipe until you get the uri back. Or you can just  
</span><br>
<span class="quotelev1">&gt; wait to
</span><br>
<span class="quotelev1">&gt; see when the pipe closes since the orted closes the pipe  
</span><br>
<span class="quotelev1">&gt; immediately after
</span><br>
<span class="quotelev1">&gt; writing to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is still some stuff that the orted does before it accepts  
</span><br>
<span class="quotelev1">&gt; commands
</span><br>
<span class="quotelev1">&gt; send directly to it etc., but that shouldn't impact your ability to  
</span><br>
<span class="quotelev1">&gt; connect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know how that goes. If we need to do so, we can shift the  
</span><br>
<span class="quotelev1">&gt; timing of
</span><br>
<span class="quotelev1">&gt; that report-uri output so it comes a little later in the orted's  
</span><br>
<span class="quotelev1">&gt; setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/3/07 6:51 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<p>I'll give it a try this week.
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1291.php">Jeff Squyres: "Re: [OMPI devel] [patch] commentary typo fixes"</a>
<li><strong>Previous message:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<li><strong>In reply to:</strong> <a href="1288.php">Ralph Castain: "Re: [OMPI devel] orted --seed and orte_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1289.php">Greg Watson: "Re: [OMPI devel] orted --seed and orte_init()"</a>
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
