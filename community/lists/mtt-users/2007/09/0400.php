<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep  5 20:44:43 2007" -->
<!-- isoreceived="20070906004443" -->
<!-- sent="Wed, 5 Sep 2007 20:44:19 -0400" -->
<!-- isosent="20070906004419" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Associating &amp;quot;description&amp;quot; with a single phase" -->
<!-- id="6FD41781-BC9E-447C-95AD-DDBDB29ECA36_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070904163638.GS11675_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-05 20:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0399.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>In reply to:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 4, 2007, at 12:36 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; reporter.php has a search field for &quot;description&quot;, but which
</span><br>
<span class="quotelev1">&gt; phase is that for? MPI Install, Test build, or Test run? A
</span><br>
<span class="quotelev1">&gt; scenario is that Sun will have a home-grown &quot;funclet_files&quot;
</span><br>
<span class="quotelev1">&gt; funclet set the &quot;description&quot; in the Install phase (e.g., a
</span><br>
<span class="quotelev1">&gt; label identifying which ISO is being tested). It would be
</span><br>
<span class="quotelev1">&gt; useful to have one of two things:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * [easier] Have the &quot;description&quot; fields broken out in
</span><br>
<span class="quotelev1">&gt;     reporter by phase. E.g.,
</span><br>
<span class="quotelev1">&gt;     * MPI Install description
</span><br>
<span class="quotelev1">&gt;     * Test build description
</span><br>
<span class="quotelev1">&gt;     * Test run description
</span><br>
<p>Hmm.  That makes at least one [potentially] common case difficult: I  
<br>
used the same description for all my phases, and want to find any  
<br>
results anywhere that have that description (i.e., I'd have to enter  
<br>
it 3 times).
<br>
<p><span class="quotelev1">&gt;   * [harder] Be able to have a phase description carry over
</span><br>
<span class="quotelev1">&gt;     to subsequent phases. I think the logic should work like
</span><br>
<span class="quotelev1">&gt;     this: if an MPI Install has a description, then this
</span><br>
<span class="quotelev1">&gt;     description will carry-over to its Test build and Test
</span><br>
<span class="quotelev1">&gt;     runs if another description is not specified in those
</span><br>
<span class="quotelev1">&gt;     post-MPI-Install phases. (Same for Test build.)
</span><br>
<p>Hmm.  So test builds have 2 descriptions, and test runs have 3  
<br>
descriptions?
<br>
<p>How do you see this data being used in the reporter -- can you  
<br>
provide a use-case?
<br>
<p>Is this a different way of looking at <a href="https://svn.open-mpi.org/trac/">https://svn.open-mpi.org/trac/</a> 
<br>
mtt/ticket/302?
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
<li><strong>Next message:</strong> <a href="0401.php">Jeff Squyres: "Re: [MTT users] Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0399.php">Jeff Squyres: "Re: [MTT users] [MTT] #245: Support multiplicative effect for other	INI params"</a>
<li><strong>In reply to:</strong> <a href="0391.php">Ethan Mallove: "[MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
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
