<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 08:08:24 2009" -->
<!-- isoreceived="20090224130824" -->
<!-- sent="Tue, 24 Feb 2009 08:08:18 -0500" -->
<!-- isosent="20090224130818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="B74C37AA-DAD1-413B-A420-38FD10EEB419_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800902232202k7f7595d7h42dfe7ce780ddbbd_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 08:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2009, at 1:02 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; I`m looking for a way having automatic regression report at the end  
</span><br>
<span class="quotelev1">&gt; of mtt run which include graph+table for bw/lat/2way-bw for this  
</span><br>
<span class="quotelev1">&gt; specific run as well as for previous runs on the same configuration.
</span><br>
<p>Cool.
<br>
<p><span class="quotelev1">&gt; The way we are doing it, is generating dynamic query for MTT test  
</span><br>
<span class="quotelev1">&gt; reporter at the end of mtt run, fetching html, extracting .png files  
</span><br>
<span class="quotelev1">&gt; with graphs and attaching it to the final MTT report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; During this process we observe the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MTT database hosted at <a href="http://www.open-mpi.org/mtt/index.php">http://www.open-mpi.org/mtt/index.php</a>  
</span><br>
<span class="quotelev1">&gt; behaves in very inconsistent way:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it work very sllllloooowwwwwww, sometimes it takes 5-10min to get  
</span><br>
<span class="quotelev1">&gt; query results
</span><br>
<p>We probably should look at the typical bottlenecks these days.  It  
<br>
used to be DB speed (e.g., our schema was not good).  The schema's  
<br>
been tuned up to be pretty good these days, but sometimes there's  
<br>
still a mountain of data to plow through to find results.   
<br>
Possibilities for bottlenecks include:
<br>
<p>- same old db issues (eg., the SQL queries just take a long time)
<br>
- PHP adding overhead
<br>
- the server itself being slow
<br>
- ...?
<br>
<p>I'm not a DB expert; Josh spent a summer and came up with the current  
<br>
DB schema that we have now.  Perhaps he would have some insight into  
<br>
these kinds of issues...?
<br>
<p><span class="quotelev1">&gt; We get many SQL errors during querying the performance results
</span><br>
<p>Ouch.  That should not be happening.  What kinds of errors?  Do they  
<br>
stem from PHP, or directly from SQL?
<br>
<p><span class="quotelev1">&gt; Sometimes we get no performance graphs for historic searches  
</span><br>
<span class="quotelev1">&gt; (queried by date range, like &quot;past 6 month&quot;)
</span><br>
<p>I wonder if PHP is hitting resource limits and therefore killing the  
<br>
job (PHP jobs are only allowed to run for so long and only allowed to  
<br>
use so much memory).  I've seen that happen before.
<br>
<p>Should we allow direct postgres connections (across the internet) to  
<br>
specific OMPI organizations who want/need it?
<br>
<p><span class="quotelev1">&gt; So, I`m wondering if someone else using this feature (generate  
</span><br>
<span class="quotelev1">&gt; performance results for historic runs) for similar goals and have  
</span><br>
<span class="quotelev1">&gt; better experience with it or recommendations?
</span><br>
<p>We've toyed with it, but not tried to use it seriously.  The data is  
<br>
all there in the DB, but I agree that the current UI/generation aspect  
<br>
of it could definitely use some improvements.
<br>
<p><span class="quotelev1">&gt; Will it behave better if we create a local copy of Mtt database?
</span><br>
<p>This could probably be done if you want to; I think the entire  
<br>
database is many GB these days.  If you want to develop some extension/ 
<br>
query tools locally, we could probably ship a copy of some/all of it  
<br>
to you for convenience.  Or you could just setup your own local  
<br>
postgres database and populate it with some local data for development  
<br>
purposes.  Either is possible.
<br>
<p><span class="quotelev1">&gt; Can we connect to MTT database hosted at www.openmpi.org with SQL  
</span><br>
<span class="quotelev1">&gt; directly?
</span><br>
<p>Heh; great minds think alike.  :-)
<br>
<p><span class="quotelev1">&gt; For how long historic results are kept in the MTT database?
</span><br>
<p><p>So far, we haven't deleted anything (except possibly when we changed  
<br>
the db schema in incompatible ways...?  I don't remember clearly).
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
<li><strong>Next message:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0313.php">Josh Hursey: "Re: [MTT devel] visual reports for mtt"</a>
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
