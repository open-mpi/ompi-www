<?
$subject_val = "Re: [MTT devel] GSOC application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:17:40 2009" -->
<!-- isoreceived="20090323211740" -->
<!-- sent="Mon, 23 Mar 2009 14:17:34 -0700" -->
<!-- isosent="20090323211734" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] GSOC application" -->
<!-- id="1123F098-DD96-4E78-AEAA-B3EE67A21032_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090323160530.GF26923_at_sun.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] GSOC application<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:17:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2009, at 9:05 AM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt;   -------------------+---------------------+----------
</span><br>
<span class="quotelev1">&gt;   Resource           | Unit                | Unit cost
</span><br>
<span class="quotelev1">&gt;   -------------------+---------------------+----------
</span><br>
<span class="quotelev1">&gt;   Outgoing Bandwidth | gigabytes           | $0.12
</span><br>
<span class="quotelev1">&gt;   Incoming Bandwidth | gigabytes           | $0.10
</span><br>
<span class="quotelev1">&gt;   CPU Time           | CPU hours           | $0.10
</span><br>
<span class="quotelev1">&gt;   Stored Data        | gigabytes per month | $0.15
</span><br>
<span class="quotelev1">&gt;   Recipients Emailed | recipients          | $0.0001
</span><br>
<span class="quotelev1">&gt;   -------------------+---------------------+----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would we itemize the MTT bill on a per user basis?  E.g., orgs that
</span><br>
<span class="quotelev1">&gt; use MTT more, would have to pay more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Let's assume stored data == incoming bandwidth, because we never throw  
<br>
anything away.  And let's go with the SWAG of 100GB.  We may or may  
<br>
not be able to gzip the data uploading to the server.  So if anything,  
<br>
we *might* be able to decrease the incoming data and have higher level  
<br>
of stored data.
<br>
<p>I anticipate our outgoing data to be significantly less, particularly  
<br>
if we can gzip the outgoing data (which I think we can).  You're  
<br>
right, CPU time is a mystery -- we won't know what it will be until we  
<br>
start running some queries to see what happens.
<br>
<p>100GB * $0.10 = $10
<br>
100GB * $0.15 = $15
<br>
total = $25 for the first month
<br>
<p>So let's SWAG at $25/mo for a year = $300.  This number will be wrong  
<br>
for several reasons, but it at least gives us a ballpark.  For $300/ 
<br>
year, I think we (the OMPI project) can find a way to pay for this  
<br>
fairly easily.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<li><strong>In reply to:</strong> <a href="0375.php">Ethan Mallove: "Re: [MTT devel] GSOC application"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/04/0377.php">Mike Dubman: "Re: [MTT devel] GSOC application"</a>
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
