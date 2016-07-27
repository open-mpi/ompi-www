<?
$subject_val = "Re: [MTT devel] questions about MTT database from HDF";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 09:30:52 2010" -->
<!-- isoreceived="20101104133052" -->
<!-- sent="Thu, 4 Nov 2010 09:30:45 -0400" -->
<!-- isosent="20101104133045" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] questions about MTT database from HDF" -->
<!-- id="635110DC-3A59-46A1-9EA1-8B259BE10F03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F560019B-1B51-4D81-BC90-2A2097BA133D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] questions about MTT database from HDF<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 09:30:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Reply:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2010, at 9:10 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ethan / Josh --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The HDF guys are interested in potentially using MTT.  
</span><br>
<p>I just forwarded a message to the mtt-devel list about some work at IU to use MTT to test the CIFTS FTB project. So maybe development between these two efforts can be mutually beneficial.
<br>
<p><span class="quotelev1">&gt; They have some questions about the database.  Can you guys take a whack at answering them?  (be sure to keep the CC, as Elena/Quincey aren't on the list)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 3, 2010, at 1:29 PM, Quincey Koziol wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	Lots of interest here about MTT, thanks again for taking time to demo it and talk to us!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Glad to help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	One lasting concern was the slowness of the report queries - what's the controlling parameter there?  Is it the number of tests, the size of the output, the number of configurations of each test, etc?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All of the above.  On a good night, Cisco dumps in 250k test runs to the database.  That's just a boatload of data.  End result: the database is *HUGE*.  Running queries just takes time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the database wasn't so huge, the queries wouldn't take nearly as long.  The size of the database is basically how much data you put into it -- so it's really a function of everything you mentioned.  I.e., increasing any one of those items increases the size of the database.  Our database is *huge* -- the DB guys tell me that it's lots and lots of little data (with blobs of stdout/stderr here an there) that make it &quot;huge&quot;, in SQL terms. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Josh did some great work a few summers back that basically &quot;fixed&quot; the speed of the queries to a set speed by effectively dividing up all the data into month-long chunks in the database.  The back-end of the web reporter only queries the relevant month chunks in the database (I think this is a postgres-specific SQL feature).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, we have the DB server on a fairly underpowered machine that is shared with a whole pile of other server duties (www.open-mpi.org, mailman, ...etc.).  This also contributes to the slowness.
</span><br>
<p>Yeah this pretty much sums it up. The current Open MPI MTT database is 141 GB, and contains data as far back as Nov. 2006. The MTT Reporter takes some of this time just to convert the raw database output into pretty HTML (it is currently written in PHP). At the bottom of the MTT Reporter you will see some stats on where the Reporter took most of its time.
<br>
<p>How long the Reporter took total to return the result is:
<br>
&nbsp;&nbsp;Total script execution time: 24 second(s) 
<br>
How long just the database query took is reported as:
<br>
&nbsp;&nbsp;Total SQL execution time: 19 second(s)
<br>
<p>We also generate an overall contribution graph which is also linked at the bottom to give you a feeling of the amount of data coming in every day/week/month.
<br>
<p>Jeff mentioned the partition tables work that I did a couple summers ago. The partition tables help quite a lot by partitioning the data into week long chunks so shorter date ranges will be faster than longer date ranges since they pull a smaller table with respect to all of the data to perform a query. The database interface that the MTT Reporter uses is abstracted away from the partition tables, it is really just the DBA (I guess that is me these days) that has to worry about their setup (which is usually just a 5 min task once a year). Most of the queries to MTT ask for date ranges like 'past 24 hours', 'past 3 days' so breaking up the results by week saves some time.
<br>
<p>One thing to also notice is that usually the first query through the MTT Reporter is the slowest. After that first query the MTT database (postgresql in this case) it is able to cache some of the query information which should make subsequent queries a little faster.
<br>
<p>But the performance is certainly not where I would like it, and there are still a few ways to make it better. I think if we moved to a newer server that is not quite as heavily shared we would see a performance boost. Certainly if we added more RAM to the system, and potentially a faster disk array that would improve the performance. I think there are still a few things that I can do to the database schema to improve common queries. Better normalization of incoming data would certainly help things. There are likely also some places in the current MTT Reporter where performance might be improved on the sorting/rendering side of things.
<br>
<p>The text blobs (database fields of variable string length) for stderr/stdout should not be contributing to the problem. Most recent databases (and postgresql in particular does this) will be able to optimize the performance these fields so that they have the same performance as referencing small fixed length strings, with regard to the SQL query.
<br>
<p><p>So in short. Most of the slowness is due to: (1) shared server environment hosting a number of active projects, (2) volume of existing data. There are some places to improve things, but we haven't had the cycles yet to investigate them too much.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For example, each HDF5 build includes on the order of 100 test executables, and we run 50 or so configurations each night.  How would that compare with the OpenMPI test results database?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good question.  I'm CC'ing the mtt-devel list to see if Josh or Ethan could comment on this more intelligently than me -- they did almost all of the database work, not me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm *guessing* that it won't come anywhere close to the size of the Open MPI database (we haven't trimmed the data in the OMPI database since we started gathering data in the database several years ago).
</span><br>
<p>An interesting site that might be useful to give you a feeling of the volume and type of data being submitted is the 'stats' page: www.open-mpi.org/mtt/stats
<br>
<p>We don't publicly link to this page since it is not really useful for anyone except MTT maintainers.
<br>
<p>I have a script that maintains stats on the database that we can use as a metric. It is a special table in the database that is updated about every night. It is a nice way to get insight into the distribution of testing (for instance about 90 % of Open MPI testing is on Linux, 8 % on Solaris, 1 % on each of OS X and cygwin).
<br>
<p>For example, on Oct. 25, 2010 (put '2010-10-25 - 2010-10-25' in the Date Range) there were:
<br>
&nbsp;&nbsp;&nbsp;691 MPI Install variations
<br>
&nbsp;&nbsp;&nbsp;658 Test Builds
<br>
78,539 Test Run results
<br>
&nbsp;&nbsp;&nbsp;437 Performance results
<br>
<p>Since MTT has the capability to tell if there is a 'new' tarball to test or not, some organizations (like Cisco) only run MTT when there is a new tarball while others (like IU) run every night even if it is against an old tarball.
<br>
<p>So the current database is holding today about 186 million test records. The weekly contribution normally ranges from 1.25 - 0.5 million tests submitted (range depends on how many 'new' tarballs are created in the week).
<br>
<p><p>Hopefully my comments help more than confuse. If it would be useful to chat on the phone sometime, I'm sure we could setup something.
<br>
<p>Best,
<br>
Josh
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0514.php">Jeff Squyres: "Re: [MTT devel] question about the test run"</a>
<li><strong>Previous message:</strong> <a href="0512.php">Joshua Hursey: "Re: [MTT devel] question about the test run"</a>
<li><strong>In reply to:</strong> <a href="0511.php">Jeff Squyres: "[MTT devel] questions about MTT database from HDF"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
<li><strong>Reply:</strong> <a href="0520.php">Quincey Koziol: "Re: [MTT devel] questions about MTT database from HDF"</a>
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
