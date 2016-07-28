<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Nov 11 10:13:02 2006" -->
<!-- isoreceived="20061111151302" -->
<!-- sent="Sat, 11 Nov 2006 10:12:56 -0500" -->
<!-- isosent="20061111151256" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] [MTT bugs] [MTT] #132: Print BIG WARNING in client if	MTTDatabase fails to submit properly" -->
<!-- id="20061111151256.GC13619_at_bur2" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="066.53bed8bfea097cb2e56a1176c8dc68a7_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-11-11 10:12:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT users] New MTT home page"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Nov/10/2006 11:11:39PM, MTT wrote:
<br>
<span class="quotelev1">&gt; #132: Print BIG WARNING in client if MTTDatabase fails to submit properly
</span><br>
<span class="quotelev1">&gt; --------------------------+-------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   Reporter:  jsquyres     |       Owner:  emallove
</span><br>
<span class="quotelev1">&gt;       Type:  defect       |      Status:  new     
</span><br>
<span class="quotelev1">&gt;   Priority:  blocker      |   Milestone:  v1.1    
</span><br>
<span class="quotelev1">&gt;  Component:  Client side  |     Version:  trunk   
</span><br>
<span class="quotelev1">&gt; Resolution:               |    Keywords:          
</span><br>
<span class="quotelev1">&gt; --------------------------+-------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Old description:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Add some intelligence in submit.php so that it knows when an insert into
</span><br>
<span class="quotelev2">&gt; &gt; the database has failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Somehow convey back to the client that one or more inserts has failed so
</span><br>
<span class="quotelev2">&gt; &gt; that the client can print out a '''BIG HAIRY WARNING''' that the results
</span><br>
<span class="quotelev2">&gt; &gt; did not get successfully insertted.  When this happens, automatically
</span><br>
<span class="quotelev2">&gt; &gt; drop a database debug file containing all the data (so that it isn't
</span><br>
<span class="quotelev2">&gt; &gt; lost) and include its filename in the '''BIG HAIRY WARNING.'''  This file
</span><br>
<span class="quotelev2">&gt; &gt; can then be analyzed later for a post mortem, etc.  Be sure that this
</span><br>
<span class="quotelev2">&gt; &gt; file is ''always'' dropped when there's a database insert error,
</span><br>
<span class="quotelev2">&gt; &gt; regardless of what the INI file setting is for dropping database debug
</span><br>
<span class="quotelev2">&gt; &gt; files.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Bonus points will be awarded if submit.php can communicate back to the
</span><br>
<span class="quotelev2">&gt; &gt; client ''which'' results failed to submit, but that's not a huge deal
</span><br>
<span class="quotelev2">&gt; &gt; (we'll be able to do this better in 2.0).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The '''BIG HAIRY WARNING''' should probably be output by the client both
</span><br>
<span class="quotelev2">&gt; &gt; when it happens and at the very end of the run so that if all you see in
</span><br>
<span class="quotelev2">&gt; &gt; the morning is the end of the MTT run on the screen, the warning is there
</span><br>
<span class="quotelev2">&gt; &gt; and the user don't have to search through the output just to know if
</span><br>
<span class="quotelev2">&gt; &gt; their data submitted properly or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New description:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Add some intelligence in submit.php so that it knows when an insert into
</span><br>
<span class="quotelev1">&gt;  the database has failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Somehow convey back to the client that one or more inserts has failed so
</span><br>
<span class="quotelev1">&gt;  that the client can print out a '''BIG HAIRY WARNING''' that the results
</span><br>
<span class="quotelev1">&gt;  did not get successfully insertted.  When this happens, automatically drop
</span><br>
<span class="quotelev1">&gt;  a database debug file containing all the data (so that it isn't lost) and
</span><br>
<span class="quotelev1">&gt;  include its filename in the '''BIG HAIRY WARNING.'''  This file can then
</span><br>
<span class="quotelev1">&gt;  be analyzed later for a post mortem, etc.  Be sure that this file is
</span><br>
<span class="quotelev1">&gt;  ''always'' dropped when there's a database insert error, regardless of
</span><br>
<span class="quotelev1">&gt;  what the INI file setting is for dropping database debug files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Bonus points will be awarded if submit.php can communicate back to the
</span><br>
<span class="quotelev1">&gt;  client ''which'' results failed to submit, but that's not a huge deal
</span><br>
<span class="quotelev1">&gt;  (we'll be able to do this better in 2.0).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The '''BIG HAIRY WARNING''' should probably be output by the client both
</span><br>
<span class="quotelev1">&gt;  when it happens and at the very end of the run so that if all you see in
</span><br>
<span class="quotelev1">&gt;  the morning is the end of the MTT run on the screen, the warning is there
</span><br>
<span class="quotelev1">&gt;  and the user don't have to search through the output just to know if their
</span><br>
<span class="quotelev1">&gt;  data submitted properly or not.
</span><br>
<p>I'm used grepping on the --debug output from client/mtt, which means e.g., I
<br>
will now see double the number of POSTGRES ERRORs. Isn't that confusing? At the
<br>
*end* of the mtt run, I'd much prefer to just say, e.g., &quot;34 SQL errors
<br>
occured&quot;. If they want to see the actual SQL error messages from submit.php,
<br>
users can do:
<br>
<p>$ client/mtt --debug ... | tee debug &amp;&amp; grep -i POSTGRES debug
<br>
<p>If submit.php?debug is used, the exact submission entry that caused the error(s)
<br>
can be traced.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  The should be done on the trunk and the release branch; the code will
</span><br>
<span class="quotelev1">&gt;  likely be at least slightly different between the two, but quite similar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ticket URL: &lt;<a href="http://svn.open-mpi.org/trac/mtt/ticket/132">http://svn.open-mpi.org/trac/mtt/ticket/132</a>&gt;
</span><br>
<span class="quotelev1">&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<p><p><pre>
-- 
-Ethan
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0222.php">Tim Mattox: "[MTT users] Corrupted MTT database or incorrucet query"</a>
<li><strong>Previous message:</strong> <a href="0220.php">Ethan Mallove: "Re: [MTT users] New MTT home page"</a>
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
