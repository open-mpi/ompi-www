<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 11 09:34:34 2007" -->
<!-- isoreceived="20070911133434" -->
<!-- sent="Tue, 11 Sep 2007 09:34:12 -0400" -->
<!-- isosent="20070911133412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Associating &amp;quot;description&amp;quot; with a single phase" -->
<!-- id="27207048-6828-4103-9CB5-2C8193DB0FB9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070906141027.GC1581_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-11 09:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I can agree in principle what what you're saying.
<br>
<p>I am just worried that we'll end up with a complicated hierarchy of  
<br>
descriptions.  Can you make a concrete proposal for all the use-cases?
<br>
<p><p><p>On Sep 6, 2007, at 10:10 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, Sep/05/2007 08:44:19PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 4, 2007, at 12:36 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reporter.php has a search field for &quot;description&quot;, but which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phase is that for? MPI Install, Test build, or Test run? A
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scenario is that Sun will have a home-grown &quot;funclet_files&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; funclet set the &quot;description&quot; in the Install phase (e.g., a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; label identifying which ISO is being tested). It would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; useful to have one of two things:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * [easier] Have the &quot;description&quot; fields broken out in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     reporter by phase. E.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     * MPI Install description
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     * Test build description
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     * Test run description
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  That makes at least one [potentially] common case difficult: I
</span><br>
<span class="quotelev2">&gt;&gt; used the same description for all my phases, and want to find any
</span><br>
<span class="quotelev2">&gt;&gt; results anywhere that have that description (i.e., I'd have to enter
</span><br>
<span class="quotelev2">&gt;&gt; it 3 times).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll leave a phase-less description field too, so:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * All phases description
</span><br>
<span class="quotelev1">&gt;   * MPI Install description
</span><br>
<span class="quotelev1">&gt;   * Test build description
</span><br>
<span class="quotelev1">&gt;   * Test run description
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   * [harder] Be able to have a phase description carry over
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to subsequent phases. I think the logic should work like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     this: if an MPI Install has a description, then this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     description will carry-over to its Test build and Test
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     runs if another description is not specified in those
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     post-MPI-Install phases. (Same for Test build.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  So test builds have 2 descriptions, and test runs have 3
</span><br>
<span class="quotelev2">&gt;&gt; descriptions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No. Still one description per phase, but if description is
</span><br>
<span class="quotelev1">&gt; empty for a subsequent phase, we copy over the description
</span><br>
<span class="quotelev1">&gt; from the earlier phase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you see this data being used in the reporter -- can you
</span><br>
<span class="quotelev2">&gt;&gt; provide a use-case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So currently, if I set description in MPI Install and I'm in
</span><br>
<span class="quotelev1">&gt; Test run view in reporter.php, then filtering on
</span><br>
<span class="quotelev1">&gt; &quot;description&quot; assumes I'm looking for a description in Test
</span><br>
<span class="quotelev1">&gt; run. This is a problem because I did not set description in
</span><br>
<span class="quotelev1">&gt; Test run. I need the MPI Install's description.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a different way of looking at <a href="https://svn.open-mpi.org/trac/">https://svn.open-mpi.org/trac/</a>
</span><br>
<span class="quotelev2">&gt;&gt; mtt/ticket/302?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, but this is certainly a related ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
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
<li><strong>Next message:</strong> <a href="0407.php">Ethan Mallove: "[MTT users] Capturing stderr using &amp;shell()"</a>
<li><strong>Previous message:</strong> <a href="0405.php">Josh Hursey: "Re: [MTT users] [MTT devel]  Test runs not getting into database"</a>
<li><strong>In reply to:</strong> <a href="0404.php">Ethan Mallove: "Re: [MTT users] Associating &quot;description&quot; with a single phase"</a>
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
