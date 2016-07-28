<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 08:36:21 2006" -->
<!-- isoreceived="20060704123621" -->
<!-- sent="Tue, 04 Jul 2006 08:34:10 -0400" -->
<!-- isosent="20060704123410" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [MTT users] database and all that" -->
<!-- id="44AA6042.3050208_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AFAEA22C_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 08:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am on vacation (really) so I probably will not respond to any
<br>
reply to my below comments until July 10th.
<br>
<p>Jeff, just to make sure I understand what is being said I'd like to
<br>
repeat what you are saying.  In short the data upload from the
<br>
mtt client and the php script is done one test case at a time.
<br>
However, the bulk of a test run (a group of test cases) is written
<br>
as one table at some single point in time (when the run is done).
<br>
<p>Is there no way for us to add rows to an existing table using perfbase?
<br>
<p>--td
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt;Andrew and I got on the phone to talk about the database stuff that
</span><br>
<span class="quotelev1">&gt;we've been discussing on the mailing list.  There were several
</span><br>
<span class="quotelev1">&gt;miscommunications, but I think we understand each other now.  Here's the
</span><br>
<span class="quotelev1">&gt;important bits:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- mtt does currently submit one test result at a time (e.g., the result
</span><br>
<span class="quotelev1">&gt;of a single intel test).  It certainly can be adjusted to submit them
</span><br>
<span class="quotelev1">&gt;all at once, but right now it submits them individually.
</span><br>
<span class="quotelev1">&gt;- a perfbase &quot;run&quot; is actually a unique *table* in the database that
</span><br>
<span class="quotelev1">&gt;holds the variant data (not a *row* in an existing table, as I thought).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hence, submitting 400+ &quot;runs&quot; for a single invocation of the intel test
</span><br>
<span class="quotelev1">&gt;suite would be so inefficient that we need to consider something better
</span><br>
<span class="quotelev1">&gt;(especially since we'll be invoking the intel test suite potentially
</span><br>
<span class="quotelev1">&gt;many times a night at each testing site -- so it's not just that we'll
</span><br>
<span class="quotelev1">&gt;be creating boatloads of tables; we'll be creating N time boatloads of
</span><br>
<span class="quotelev1">&gt;tables).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;So for the moment, we do need to submit all the intel tests as a single
</span><br>
<span class="quotelev1">&gt;&quot;run&quot;, meaning that we have to submit them to the database all at once
</span><br>
<span class="quotelev1">&gt;(how we upload them to the server is a different issue).  This
</span><br>
<span class="quotelev1">&gt;unfortunately means no partial results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For the immediate need, I think that this is ok because we're focusing
</span><br>
<span class="quotelev1">&gt;on nightly tests where partial results aren't as important.  But this is
</span><br>
<span class="quotelev1">&gt;definitely something that we should ponder further as MTT becomes more
</span><br>
<span class="quotelev1">&gt;pervasive (e.g., during a release cycle when we might be running MTT
</span><br>
<span class="quotelev1">&gt;multiple times a day).  It is probably even worth talking to the
</span><br>
<span class="quotelev1">&gt;perfbase author about this issue [...starting to compose a mail to the
</span><br>
<span class="quotelev1">&gt;perfbase mailing list...].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2006/06/0031.php">Jeff Squyres \(jsquyres\): "[MTT users] database and all that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0033.php">Jeff Squyres \(jsquyres\): "Re: [MTT users] database and all that"</a>
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
