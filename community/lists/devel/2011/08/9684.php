<?
$subject_val = "Re: [OMPI devel] ibm/dynamic/loop_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 20 19:11:17 2011" -->
<!-- isoreceived="20110820231117" -->
<!-- sent="Sat, 20 Aug 2011 16:11:25 -0700" -->
<!-- isosent="20110820231125" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/dynamic/loop_spawn" -->
<!-- id="4E503F1D.3070907_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C1AED37-D3BF-47F4-B2C1-5E5C86E3E3FF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm/dynamic/loop_spawn<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-20 19:11:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9685.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding Connection establishment in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9683.php">David Gunter: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, put back as r1846.
<br>
<p>On 8/16/2011 1:23 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We talked about this a lot today on the call (and then some more afterwards). :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think there's 2 important points here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Ralph's original test was written with the intent of launching it with 1 process which would then do a series of local spawns.  Even doing a huge truckload of them, Ralph mentioned (on the phone to me today) that it only took about 15 seconds.
</span><br>
15 seconds sounds to me like a stretch -- at least for the 2000 
<br>
iterations that, not too long ago, were in the code.  But, I quibble.
<br>
<span class="quotelev1">&gt; 2. My test -- i.e., the current one in the ibm test suite directory -- is more of a general &quot;beat on the ORTE/spawn system&quot; test.  I.e., just spawn/reap a bajillion times and ensure that it works.  I think that it still breaks openib, for example -- after you do a bunch of spawns, something runs out of resources (I don't remember the exact failure scenario).
</span><br>
The comments to the putback &quot;say it all.&quot;   Main point is that the 
<br>
number of spawning processes is cut back in some cases, and sleep-waits 
<br>
have been introduced.  Specifically in the case of loop_spawn, both 
<br>
patterns (Ralph's and Jeff's) are in there, *and* there is a 
<br>
user-settable time limit (ten minutes by default).  So, /everyone/ 
<br>
should be happy!  Happy happy joy joy.
<br>
<span class="quotelev1">&gt; Ralph's opinion is that we don't need to test for #1 any more.  I don't think it would be bad to test for #1 any more, but the C code for such a test could be a bit smarter (i.e., only MCW rank 0 could COMM_SPAWN on COMM_SELF, and use a host info key of &quot;localhost&quot; to ensure spawning locally, while any other MCW procs could idle looping on while (!done) {sleep(1); MPI_Test(...,&amp;done); } so that they don't spin the CPU).
</span><br>
This is a digression, but sleep(1) is excessive.  If the cost of a 
<br>
futile MPI_Test is a fraction of a millisecond, then checking out for a 
<br>
full second should drop load by over 1000x.  Run times will be 
<br>
horrendous... not because of oversubscription, but because the machine 
<br>
will be idle!  Anyhow, again, just a digression.  I hope/expect that the 
<br>
spawn/load problems are now gone.
<br>
<span class="quotelev1">&gt; For #2, I don't disagree that Eugene's suggestions could make it a bit more robust.  After all, we only have so many hours for testing with so much equipment; one test that runs for hours and hours probably isn't useful.  You can imagine a bunch of ways to make that test more useful: take an argv[1] specifying the number of iterations, take an argv[1] that indicates a number of seconds to run the test, ensure that you only spawn on half the MCW processes and have the other half idle in a while(!done){...} loop, like mentioned above so that you can spawn on CPUs that aren't spinning tightly on MPI progress, ...etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 15, 2011, at 11:47 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is a question about ompi-tests/ibm/dynamic.  Some of these tests (spawn, spawn_multiple, loop_spawn/child, and no-disconnect) exercise MPI_Comm_spawn* functionality.  Specifically, they spawn additional processes (beyond the initial mpirun launch) and therefore exert a different load on a test system than one might naively expect from the &quot;mpirun -np&lt;np&gt;&quot; command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One approach to testing is to have the test harness know characteristics about individual tests like this.  E.g., if I have only 8 processors and I don't want to oversubscribe, have the test harness know that particular tests should be launched with fewer processes.  On the other hand, building such generality into a test harness when changes would have to be so pervasive (subjective assessment) and so few tests require it may not make that much sense.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another approach would be to manage oversubscription in the tests themselves.  E.g., for spawn.c, instead of spawning np new processes, do the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - idle np/2 of the processes
</span><br>
<span class="quotelev2">&gt;&gt; - have the remaining np/2 processes spawn np/2 new ones
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Okay, so that leaves open the possibility that the newly spawned processes might not appear on the same nodes where idled processes have &quot;made room&quot; for them.  Each solution seems loaded with shortcomings.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyhow, I was interested in some feedback on this topic.  A very small number (1-4) of spawning tests are causing us lots of problems (undue complexity in the test harness as well as a bunch of our time for reasons I find difficult to explain succinctly).  We're inclined to modify the tests so that they're a little more social.  E.g., make decisions about how many of the launched processes should &quot;really&quot; be used, idling some fraction of the processes, and continuing the test only with the remaining fraction.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9685.php">Bhargava Ramu Kavati: "[OMPI devel] Regarding Connection establishment in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9683.php">David Gunter: "Re: [OMPI devel] Broken TotalView behavior in 1.5.4"</a>
<li><strong>In reply to:</strong> <a href="9657.php">Jeff Squyres: "Re: [OMPI devel] ibm/dynamic/loop_spawn"</a>
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
