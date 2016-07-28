<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May  1 09:43:17 2007" -->
<!-- isoreceived="20070501134317" -->
<!-- sent="Tue, 1 May 2007 06:43:11 -0700" -->
<!-- isosent="20070501134311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sockaddr* vs. sockaddr_storage*" -->
<!-- id="1DD259B4-D9EF-47D4-9309-3D121EF5FA79_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070429160703.GF14385_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2007-05-01 09:43:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1468.php">Jun Hui Bu: "[OMPI devel] Jun Hui Bu is out of the office for Labor Day holiday."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 29, 2007, at 9:07 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev2">&gt;&gt; BTL). It's not that I don't care about IPv6, it's just that I care
</span><br>
<span class="quotelev2">&gt;&gt; more about multi TCP BTL working in the way it is supposed to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There'd be less trouble if we all had automatic testing, so nobody
</span><br>
<span class="quotelev1">&gt; breaks stuff somebody else relies on.
</span><br>
<p>We actually do -- I'm guessing no one has spoken to you about  
<br>
MTT...?  (The MPI Testing Tool)  Read the users's section to see how  
<br>
to get started:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki">https://svn.open-mpi.org/trac/mtt/wiki</a>
<br>
<p><span class="quotelev1">&gt; See, you have committed something that made my internal tests turn  
</span><br>
<span class="quotelev1">&gt; red:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://cluster.inf-ra.uni-jena.de:8010/">http://cluster.inf-ra.uni-jena.de:8010/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I just had an URL indicating when *I* break something *you* rely  
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<p>We run 10's of thousands of tests a night:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/">http://www.open-mpi.org/mtt/</a>
<br>
<p>Username: ompi, password: mtt (will be open someday, just not today)
<br>
<p>The results are also mailed out every morning (here's the schedule):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/wiki/EmailReportsSchedule">https://svn.open-mpi.org/trac/mtt/wiki/EmailReportsSchedule</a>
<br>
<p>However, I didn't see any failures from UTK regarding TCP.  Bill and  
<br>
I have both been traveling over the past 1.5 weeks, so it's possible  
<br>
that we missed some failures, but I don't recall any...?
<br>
<p><span class="quotelev2">&gt;&gt; PS: Please read the commit log for the r14544. It explain why I
</span><br>
<span class="quotelev2">&gt;&gt; changed from sockaddr_storage* to sockaddr*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It doesn't:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Second, the IPv6 RFC suggest to use sockaddr_storage as a holder
</span><br>
<span class="quotelev2">&gt;&gt; for the IP information, but use a sockaddr* when we pass it to
</span><br>
<span class="quotelev2">&gt;&gt; functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand the second part: &quot;but use a sockaddr*&quot;. Why?
</span><br>
<p><span class="quotelev1">&gt; Does r14550 satisfies your needs?
</span><br>
<p>George: can you reply?
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
<li><strong>Next message:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1468.php">Jun Hui Bu: "[OMPI devel] Jun Hui Bu is out of the office for Labor Day holiday."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1465.php">Adrian Knoth: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
<li><strong>Reply:</strong> <a href="1470.php">Ralph Castain: "Re: [OMPI devel] sockaddr* vs. sockaddr_storage*"</a>
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
