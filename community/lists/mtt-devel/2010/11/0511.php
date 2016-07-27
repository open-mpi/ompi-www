<?
$subject_val = "[MTT devel] questions about MTT database from HDF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  3 21:10:18 2010" -->
<!-- isoreceived="20101104011018" -->
<!-- sent="Wed, 3 Nov 2010 21:10:12 -0400" -->
<!-- isosent="20101104011012" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] questions about MTT database from HDF" -->
<!-- id="F560019B-1B51-4D81-BC90-2A2097BA133D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="40797F48-718A-4069-B030-59AE79057DCC_at_hdfgroup.org" -->
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
<strong>Subject:</strong> [MTT devel] questions about MTT database from HDF<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-03 21:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/04/0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Reply:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan / Josh --
<br>
<p>The HDF guys are interested in potentially using MTT.  They have some questions about the database.  Can you guys take a whack at answering them?  (be sure to keep the CC, as Elena/Quincey aren't on the list)
<br>
<p><p>On Nov 3, 2010, at 1:29 PM, Quincey Koziol wrote:
<br>
<p><span class="quotelev1">&gt; 	Lots of interest here about MTT, thanks again for taking time to demo it and talk to us!
</span><br>
<p>Glad to help.
<br>
<p><span class="quotelev1">&gt; 	One lasting concern was the slowness of the report queries - what's the controlling parameter there?  Is it the number of tests, the size of the output, the number of configurations of each test, etc?  
</span><br>
<p>All of the above.  On a good night, Cisco dumps in 250k test runs to the database.  That's just a boatload of data.  End result: the database is *HUGE*.  Running queries just takes time.
<br>
<p>If the database wasn't so huge, the queries wouldn't take nearly as long.  The size of the database is basically how much data you put into it -- so it's really a function of everything you mentioned.  I.e., increasing any one of those items increases the size of the database.  Our database is *huge* -- the DB guys tell me that it's lots and lots of little data (with blobs of stdout/stderr here an there) that make it &quot;huge&quot;, in SQL terms. 
<br>
<p>Josh did some great work a few summers back that basically &quot;fixed&quot; the speed of the queries to a set speed by effectively dividing up all the data into month-long chunks in the database.  The back-end of the web reporter only queries the relevant month chunks in the database (I think this is a postgres-specific SQL feature).
<br>
<p>Additionally, we have the DB server on a fairly underpowered machine that is shared with a whole pile of other server duties (www.open-mpi.org, mailman, ...etc.).  This also contributes to the slowness.
<br>
<p><span class="quotelev1">&gt; For example, each HDF5 build includes on the order of 100 test executables, and we run 50 or so configurations each night.  How would that compare with the OpenMPI test results database?
</span><br>
<p>Good question.  I'm CC'ing the mtt-devel list to see if Josh or Ethan could comment on this more intelligently than me -- they did almost all of the database work, not me.
<br>
<p>I'm *guessing* that it won't come anywhere close to the size of the Open MPI database (we haven't trimmed the data in the OMPI database since we started gathering data in the database several years ago).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/04/0510.php">Jeff Squyres: "Re: [MTT devel] new patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Reply:</strong> <a href="0513.php">Joshua Hursey: "Re: [MTT devel] questions about MTT database from HDF"</a>
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
