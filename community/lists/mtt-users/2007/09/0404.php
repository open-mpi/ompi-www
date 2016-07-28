<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  6 10:10:32 2007" -->
<!-- isoreceived="20070906141032" -->
<!-- sent="Thu, 6 Sep 2007 10:10:27 -0400" -->
<!-- isosent="20070906141027" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Associating &amp;quot;description&amp;quot; with a single phase" -->
<!-- id="20070906141027.GC1581_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6FD41781-BC9E-447C-95AD-DDBDB29ECA36_at_cisco.com" -->
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
<strong>Date:</strong> 2007-09-06 10:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0403.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep/05/2007 08:44:19PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 4, 2007, at 12:36 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; reporter.php has a search field for &quot;description&quot;, but which
</span><br>
<span class="quotelev2">&gt; &gt; phase is that for? MPI Install, Test build, or Test run? A
</span><br>
<span class="quotelev2">&gt; &gt; scenario is that Sun will have a home-grown &quot;funclet_files&quot;
</span><br>
<span class="quotelev2">&gt; &gt; funclet set the &quot;description&quot; in the Install phase (e.g., a
</span><br>
<span class="quotelev2">&gt; &gt; label identifying which ISO is being tested). It would be
</span><br>
<span class="quotelev2">&gt; &gt; useful to have one of two things:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   * [easier] Have the &quot;description&quot; fields broken out in
</span><br>
<span class="quotelev2">&gt; &gt;     reporter by phase. E.g.,
</span><br>
<span class="quotelev2">&gt; &gt;     * MPI Install description
</span><br>
<span class="quotelev2">&gt; &gt;     * Test build description
</span><br>
<span class="quotelev2">&gt; &gt;     * Test run description
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  That makes at least one [potentially] common case difficult: I  
</span><br>
<span class="quotelev1">&gt; used the same description for all my phases, and want to find any  
</span><br>
<span class="quotelev1">&gt; results anywhere that have that description (i.e., I'd have to enter  
</span><br>
<span class="quotelev1">&gt; it 3 times).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>We'll leave a phase-less description field too, so:
<br>
<p>&nbsp;&nbsp;* All phases description
<br>
&nbsp;&nbsp;* MPI Install description
<br>
&nbsp;&nbsp;* Test build description
<br>
&nbsp;&nbsp;* Test run description
<br>
<p><p><span class="quotelev2">&gt; &gt;   * [harder] Be able to have a phase description carry over
</span><br>
<span class="quotelev2">&gt; &gt;     to subsequent phases. I think the logic should work like
</span><br>
<span class="quotelev2">&gt; &gt;     this: if an MPI Install has a description, then this
</span><br>
<span class="quotelev2">&gt; &gt;     description will carry-over to its Test build and Test
</span><br>
<span class="quotelev2">&gt; &gt;     runs if another description is not specified in those
</span><br>
<span class="quotelev2">&gt; &gt;     post-MPI-Install phases. (Same for Test build.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmm.  So test builds have 2 descriptions, and test runs have 3  
</span><br>
<span class="quotelev1">&gt; descriptions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No. Still one description per phase, but if description is
<br>
empty for a subsequent phase, we copy over the description 
<br>
from the earlier phase.
<br>
<p><p><span class="quotelev1">&gt; How do you see this data being used in the reporter -- can you  
</span><br>
<span class="quotelev1">&gt; provide a use-case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So currently, if I set description in MPI Install and I'm in
<br>
Test run view in reporter.php, then filtering on
<br>
&quot;description&quot; assumes I'm looking for a description in Test
<br>
run. This is a problem because I did not set description in
<br>
Test run. I need the MPI Install's description.
<br>
<p><span class="quotelev1">&gt; Is this a different way of looking at <a href="https://svn.open-mpi.org/trac/">https://svn.open-mpi.org/trac/</a> 
</span><br>
<span class="quotelev1">&gt; mtt/ticket/302?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No, but this is certainly a related ticket.
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
<li><strong>Next message:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>Previous message:</strong> <a href="0403.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0400.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<li><strong>Reply:</strong> <a href="0406.php">Jeff Squyres: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
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
