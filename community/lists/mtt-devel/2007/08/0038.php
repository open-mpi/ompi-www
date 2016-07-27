<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 07:13:29 2007" -->
<!-- isoreceived="20070829111329" -->
<!-- sent="Wed, 29 Aug 2007 07:12:58 -0400" -->
<!-- isosent="20070829111258" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Performance Graph Notes" -->
<!-- id="84F47D38-E430-4B8B-8B28-B3AACD959EA4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CC9777BA-FB62-437E-8B40-0D4A05AB024E_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 07:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in reply.
<br>
<p>On Aug 27, 2007, at 6:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; - We need a well defined way to see what collective implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was used. Meaning that there are N AlltoAll collective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementations in the 'tuned' component we need to know when  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; looking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the graph which one of the N we are looking at for Open MPI. For
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other implementations we don't have so much control.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know if MTT can.  In order for MTT to do this, OMPI needs to
</span><br>
<span class="quotelev1">&gt; export that data somehow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So I see 2 solutions to this:
<br>
&nbsp;&nbsp;1) Require that everyone specify the collective on the command line.
<br>
&nbsp;&nbsp;2) Create a special, hidden MCA parameter that prints the  
<br>
collective being used only once. Then MTT can extract that and we can  
<br>
track it.
<br>
Just an idea.
<br>
<p><p><span class="quotelev3">&gt;&gt;&gt; - It is difficult to search in the reporter for queries like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Open MPI run with only tcp,sm,self
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about something like this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=288">http://www.open-mpi.org/mtt/reporter.php?do_redir=288</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did some skampi runs to see verbs results across 2 MPIs (Intel MPI
</span><br>
<span class="quotelev1">&gt; uses udapl, not tcp).  I don't really think that this is hard:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - network: verbs (or TCP in Josh's case)
</span><br>
<span class="quotelev1">&gt; - test suite: skampi
</span><br>
<span class="quotelev1">&gt; - command: bcast (granted, per #281, you have to fill in &quot;bcast&quot; on
</span><br>
<span class="quotelev1">&gt; the &quot;command&quot; field on the advanced window, not the normal window)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It should show all the MPI's.  You probably want to limit it down to
</span><br>
<span class="quotelev1">&gt; a specific platform, though, in order to get apples-to-apples
</span><br>
<span class="quotelev1">&gt; comparisons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mtt/reporter.php?do_redir=290">http://www.open-mpi.org/mtt/reporter.php?do_redir=290</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Intel MPI (which is only tcp I believe)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * MPICH2 with tcp results from running the skampi Bcast benchmark.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The reporter is designed to track a single MPI well for regression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tracking. However when we need to compare multiple MPIs and each may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to be selected with a different type of query it is impossible/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hard to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see why this is hard...?  I disagree with the statement
</span><br>
<span class="quotelev1">&gt; &quot;Reporter is design to track a single MPI well...&quot;  See the permalink
</span><br>
<span class="quotelev1">&gt; above.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Humm I was having an aweful time getting these results to pair as you  
<br>
did in the link you gave me (I actually gave up after a while). Maybe  
<br>
I was using the reporter wrong.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; One solution I proposed was using the 'tagging' idea, but there  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be some alternative UI features that we can develop to better  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these types of queries. Tim P seemed interested/had some ideas on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do this.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0039.php">Josh Hursey: "Re: [MTT devel] --trial pruning for v3 schema?"</a>
<li><strong>Previous message:</strong> <a href="0037.php">Ethan Mallove: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>In reply to:</strong> <a href="0029.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
<li><strong>Reply:</strong> <a href="0040.php">Jeff Squyres: "Re: [MTT devel] Performance Graph Notes"</a>
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
