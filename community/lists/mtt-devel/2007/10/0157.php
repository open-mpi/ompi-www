<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 14:04:03 2007" -->
<!-- isoreceived="20071008180403" -->
<!-- sent="Mon, 8 Oct 2007 14:03:57 -0400" -->
<!-- isosent="20071008180357" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Adding libnbc performance Performance Analyze module for MTT" -->
<!-- id="E7E06215-3321-4CB1-9671-A7FAF1DB8515_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="AF3A4A3F-0EC4-4F16-88FC-411CEAC7C144_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-08 14:03:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm inclined to say 'let's just do it right the first time' meaning  
<br>
let's implement the 3D table we designed a few weeks ago. This would  
<br>
allow for arbitrary storage of performance data. But would take a  
<br>
considerable amount of effort.
<br>
<p>However, it would probably be quicker to implement a NBC performance  
<br>
table and do the right plumbing to make it work. The problem is that  
<br>
next time we want to add a new performance data table will have to do  
<br>
all this all over again. :/
<br>
<p>I'll have to see the layout of the data when Torsten gets back to  
<br>
determine how complex the database table will need to be. I suspect  
<br>
it won't be too bad, but can't say for sure at the moment.
<br>
<p>Unfortunately I'm swamped at the moment, so I probably won't be able  
<br>
to work on this for a few months out, but I can help with planning  
<br>
for it.
<br>
<p>Cheers,
<br>
-- Josh
<br>
<p>On Oct 8, 2007, at 12:49 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ethan/Josh --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torsten's libnbc benchmark program outputs a whole bunch of numbers
</span><br>
<span class="quotelev1">&gt; that we are not currently recording.  Essentially, it outputs a fixed
</span><br>
<span class="quotelev1">&gt; number of double precision numbers for each message size (each of
</span><br>
<span class="quotelev1">&gt; which has a different meaning).  We obviously currently cannot record
</span><br>
<span class="quotelev1">&gt; all of these numbers in the database.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torsten will come find Josh when he returns to IU to discuss if it
</span><br>
<span class="quotelev1">&gt; would be easy/hard to store this stuff in the database -- that would
</span><br>
<span class="quotelev1">&gt; be the first step.  Next we will need to update submit.php and the
</span><br>
<span class="quotelev1">&gt; client to submit the data properly and then store it in the DB.
</span><br>
<span class="quotelev1">&gt; Finally, we will need to update the reporter to visualize this
</span><br>
<span class="quotelev1">&gt; information in a new way (it's more than just standard latency/
</span><br>
<span class="quotelev1">&gt; bandwidth information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no immediate need to get this all done, but it should be
</span><br>
<span class="quotelev1">&gt; added to the &quot;to do&quot; list to eventually get done.  I'll file a ticket
</span><br>
<span class="quotelev1">&gt; about it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that this is different than the SKaMPI storage problem
</span><br>
<span class="quotelev1">&gt; because the number of values that are output for each message size is
</span><br>
<span class="quotelev1">&gt; fixed (the extended SKaMPI output has a number for each MPI
</span><br>
<span class="quotelev1">&gt; process).  So I *think* it should be fairly easy to add a new table
</span><br>
<span class="quotelev1">&gt; for libnbc data in the database...?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0158.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: uh)"</a>
<li><strong>Previous message:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
<li><strong>In reply to:</strong> <a href="0156.php">Jeff Squyres: "[MTT devel] Adding libnbc performance Performance Analyze module for MTT"</a>
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
