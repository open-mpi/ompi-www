<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 16:49:27 2009" -->
<!-- isoreceived="20090224214927" -->
<!-- sent="Tue, 24 Feb 2009 16:49:24 -0500" -->
<!-- isosent="20090224214924" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="BF909297-A0F9-4B55-88A8-A171A3B7F0A8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B74C37AA-DAD1-413B-A420-38FD10EEB419_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] visual reports for mtt<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 16:49:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 8:08 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 24, 2009, at 1:02 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I`m looking for a way having automatic regression report at the end  
</span><br>
<span class="quotelev2">&gt;&gt; of mtt run which include graph+table for bw/lat/2way-bw for this  
</span><br>
<span class="quotelev2">&gt;&gt; specific run as well as for previous runs on the same configuration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cool.
</span><br>
<p>Yeah that sounds nice.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The way we are doing it, is generating dynamic query for MTT test  
</span><br>
<span class="quotelev2">&gt;&gt; reporter at the end of mtt run, fetching html, extracting .png  
</span><br>
<span class="quotelev2">&gt;&gt; files with graphs and attaching it to the final MTT report.
</span><br>
<p>That sounds icky, but probably works most of the time.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; During this process we observe the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The MTT database hosted at <a href="http://www.open-mpi.org/mtt/index.php">http://www.open-mpi.org/mtt/index.php</a>  
</span><br>
<span class="quotelev2">&gt;&gt; behaves in very inconsistent way:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it work very sllllloooowwwwwww, sometimes it takes 5-10min to get  
</span><br>
<span class="quotelev2">&gt;&gt; query results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We probably should look at the typical bottlenecks these days.  It  
</span><br>
<span class="quotelev1">&gt; used to be DB speed (e.g., our schema was not good).  The schema's  
</span><br>
<span class="quotelev1">&gt; been tuned up to be pretty good these days, but sometimes there's  
</span><br>
<span class="quotelev1">&gt; still a mountain of data to plow through to find results.   
</span><br>
<span class="quotelev1">&gt; Possibilities for bottlenecks include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - same old db issues (eg., the SQL queries just take a long time)
</span><br>
<span class="quotelev1">&gt; - PHP adding overhead
</span><br>
<span class="quotelev1">&gt; - the server itself being slow
</span><br>
<span class="quotelev1">&gt; - ...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a DB expert; Josh spent a summer and came up with the  
</span><br>
<span class="quotelev1">&gt; current DB schema that we have now.  Perhaps he would have some  
</span><br>
<span class="quotelev1">&gt; insight into these kinds of issues...?
</span><br>
<p>Looking again at what can be tweaked in the database is probably a  
<br>
good idea. We tuned the schema, indexes, and partition tables for the  
<br>
common query. The common query is for basic reports within the past 24  
<br>
hours to 1 week. Searching for data over a longer time range will be  
<br>
slow since you span multiple partition tables which are each fairly  
<br>
large.
<br>
<p>At the time we were creating the new schema we were only accumulating  
<br>
about 1/2 of the data per week that we do now. If you look at the  
<br>
contribution graph there was a big spike in contributions around Nov  
<br>
2008. The more data to process the slower the reporter has gotten, so  
<br>
taking another look might be a good idea.
<br>
<p>Remember that the machine that the database and Reporter are hosted is  
<br>
a shared machine so other processes might be getting in the way. For  
<br>
example I have a visualization script that runs on that machine from  
<br>
Saturday afternoon (EST) to Sunday Morning (EST) that takes nearly all  
<br>
of the CPU cycles and most of memory. We have considered getting a  
<br>
dedicated machine for MTT, but have not done so yet.
<br>
<p>Rendering the graphs in the PHP Reporter, and formatting the query  
<br>
result takes some time too. If you want to determine how long the SQL  
<br>
took versus the Reporter rendering look to the bottom of the MTT  
<br>
Reporter page and it will give you these two performance numbers.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We get many SQL errors during querying the performance results
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ouch.  That should not be happening.  What kinds of errors?  Do they  
</span><br>
<span class="quotelev1">&gt; stem from PHP, or directly from SQL?
</span><br>
<p>I would bet that these errors are caused by PHP limitations on memory  
<br>
and CPU consumption. I've done some large, complex queries directly on  
<br>
the database and never had a problem.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sometimes we get no performance graphs for historic searches  
</span><br>
<span class="quotelev2">&gt;&gt; (queried by date range, like &quot;past 6 month&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if PHP is hitting resource limits and therefore killing the  
</span><br>
<span class="quotelev1">&gt; job (PHP jobs are only allowed to run for so long and only allowed  
</span><br>
<span class="quotelev1">&gt; to use so much memory).  I've seen that happen before.
</span><br>
<p>This is probably resource consumption, but it is hard to tell for  
<br>
sure. It could also be that we are pushing the limits jgraph's ability  
<br>
to deal with large data sets.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should we allow direct postgres connections (across the internet) to  
</span><br>
<span class="quotelev1">&gt; specific OMPI organizations who want/need it?
</span><br>
<p>It is possible that we could allow read-only access to specific  
<br>
organizations. I would be extremely careful about granting write access.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I`m wondering if someone else using this feature (generate  
</span><br>
<span class="quotelev2">&gt;&gt; performance results for historic runs) for similar goals and have  
</span><br>
<span class="quotelev2">&gt;&gt; better experience with it or recommendations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've toyed with it, but not tried to use it seriously.  The data is  
</span><br>
<span class="quotelev1">&gt; all there in the DB, but I agree that the current UI/generation  
</span><br>
<span class="quotelev1">&gt; aspect of it could definitely use some improvements.
</span><br>
<p>Some folks at IU started to look at historic data regarding pass/fail,  
<br>
not performance. The work has not really progressed much due to other  
<br>
time commitments.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will it behave better if we create a local copy of Mtt database?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could probably be done if you want to; I think the entire  
</span><br>
<span class="quotelev1">&gt; database is many GB these days.  If you want to develop some  
</span><br>
<span class="quotelev1">&gt; extension/query tools locally, we could probably ship a copy of some/ 
</span><br>
<span class="quotelev1">&gt; all of it to you for convenience.  Or you could just setup your own  
</span><br>
<span class="quotelev1">&gt; local postgres database and populate it with some local data for  
</span><br>
<span class="quotelev1">&gt; development purposes.  Either is possible.
</span><br>
<p>The database is pretty huge, so I would suggest against creating a  
<br>
local copy. It is currently 72 GB. If you want some more stats (some  
<br>
of them only go back to Aug. 2007) you can find them by using the  
<br>
interface at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/stats">http://www.open-mpi.org/mtt/stats</a>
<br>
<p>You can certainly create a local developer setup of the MTT client/ 
<br>
server for testing, then we can test it later on the real database.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can we connect to MTT database hosted at www.openmpi.org with SQL  
</span><br>
<span class="quotelev2">&gt;&gt; directly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heh; great minds think alike.  :-)
</span><br>
<p>It is possible if people want this. The SQL schema is pretty complex,  
<br>
so it make take a while to understand how to form a reasonable SQL  
<br>
query to get the results you want.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For how long historic results are kept in the MTT database?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So far, we haven't deleted anything (except possibly when we changed  
</span><br>
<span class="quotelev1">&gt; the db schema in incompatible ways...?  I don't remember clearly).
</span><br>
<p>We converted all of the old data when we upgraded the schema. So we  
<br>
have data dating back to Nov. 2006. The contribution graph is located  
<br>
at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/stats/mtt-contrib.pdf">http://www.open-mpi.org/mtt/stats/mtt-contrib.pdf</a>
<br>
<p>Let me know if I/we can be of any more help.
<br>
<p>Josh
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
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
