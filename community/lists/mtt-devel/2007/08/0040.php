<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 08:59:07 2007" -->
<!-- isoreceived="20070829125907" -->
<!-- sent="Wed, 29 Aug 2007 08:58:36 -0400" -->
<!-- isosent="20070829125836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Performance Graph Notes" -->
<!-- id="447E3B42-2EA2-4E77-8C8C-1E8703C73E2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84F47D38-E430-4B8B-8B28-B3AACD959EA4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-08-29 08:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Previous message:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>In reply to:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 29, 2007, at 7:12 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev4">&gt;&gt;&gt;&gt; - We need a well defined way to see what collective implementation
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was used. Meaning that there are N AlltoAll collective
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementations in the 'tuned' component we need to know when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; looking at the graph which one of the N we are looking at for  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI. For
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other implementations we don't have so much control.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if MTT can.  In order for MTT to do this, OMPI needs to
</span><br>
<span class="quotelev2">&gt;&gt; export that data somehow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I see 2 solutions to this:
</span><br>
<span class="quotelev1">&gt;   1) Require that everyone specify the collective on the command line.
</span><br>
<span class="quotelev1">&gt;   2) Create a special, hidden MCA parameter that prints the
</span><br>
<span class="quotelev1">&gt; collective being used only once. Then MTT can extract that and we can
</span><br>
<span class="quotelev1">&gt; track it.
</span><br>
<span class="quotelev1">&gt; Just an idea.
</span><br>
<p>Hmm.  But remember that &quot;tuned&quot; may pick a different algorithm for  
<br>
any given data point on the graph.  So for a single skampi/IMB/ 
<br>
whatever Bcast run going from 1 byte to 8MB, you could have lotsa  
<br>
different algorithms used.
<br>
<p><span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=290">http://www.open-mpi.org/mtt/reporter.php?do_redir=290</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't see why this is hard...?  I disagree with the statement
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Reporter is design to track a single MPI well...&quot;  See the permalink
</span><br>
<span class="quotelev2">&gt;&gt; above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Humm I was having an aweful time getting these results to pair as you
</span><br>
<span class="quotelev1">&gt; did in the link you gave me (I actually gave up after a while). Maybe
</span><br>
<span class="quotelev1">&gt; I was using the reporter wrong.
</span><br>
<p>For me, that URL goes to 2 results: skampi bcast for intel MPI 3.0  
<br>
and ompi-trunk-r15963 and shows the two respective lines on a latency  
<br>
graph.
<br>
<p>Are you seeing something different?  You might need to have trials  
<br>
enabled?  (the two results were trials -- sorry, I didn't mention  
<br>
that...)
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
<li><strong>Next message:</strong> <a href="0041.php">Josh Hursey: "Re: [MTT devel] Thoughts on tagging..."</a>
<li><strong>Previous message:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>In reply to:</strong> <a href="0038.php">Josh Hursey: "Re: [MTT devel] Performance Graph Notes"</a>
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
