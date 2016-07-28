<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 08:02:54 2007" -->
<!-- isoreceived="20070718120254" -->
<!-- sent="Wed, 18 Jul 2007 08:02:42 -0400" -->
<!-- isosent="20070718120242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] iof / oob issues" -->
<!-- id="EF381098-8946-47D2-9989-6BF9D47CFF20_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="181075D5-EC42-4FB2-917A-768532776D49_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-18 08:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>In reply to:</strong> <a href="1879.php">Jeff Squyres: "[OMPI devel] iof / oob issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Reply:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
BTW, the fix didn't occur over the weekend because of some merging  
<br>
issues.
<br>
<p>I also didn't explain the problem well; you may see some clipped  
<br>
output from your program or the orted may hang while everything is  
<br>
shutting down.  This is especially likely to occur for very short  
<br>
applications.
<br>
<p>The problem is actually in the oob; the orted gets into a state where  
<br>
it's waiting for some IOF OOB callbacks to occur for messages that  
<br>
were already successfully sent, but the callbacks never occur due  
<br>
to... well, it's a long story.  The IOF is basically spinning during  
<br>
the orted shutdown waiting for pending OOB callbacks that will never  
<br>
occur.
<br>
<p>I can explain in more detail if anyone cares, but hopefully Brian  
<br>
will be able to work the fix in within the next few days.
<br>
<p><p>On Jul 13, 2007, at 5:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FYI: there is an issue on the OMPI trunk right now that the tail  
</span><br>
<span class="quotelev1">&gt; end of output from applications may get clipped.  The fix is coming  
</span><br>
<span class="quotelev1">&gt; this weekend.  If you care, I'll explain, but I just wanted to give  
</span><br>
<span class="quotelev1">&gt; everyone heads up that if you see the tail end of your stdout/ 
</span><br>
<span class="quotelev1">&gt; stderr not show up, it's probably not your fault.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Previous message:</strong> <a href="1921.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r15474"</a>
<li><strong>In reply to:</strong> <a href="1879.php">Jeff Squyres: "[OMPI devel] iof / oob issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
<li><strong>Reply:</strong> <a href="1923.php">Ralph H Castain: "Re: [OMPI devel] iof / oob issues"</a>
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
