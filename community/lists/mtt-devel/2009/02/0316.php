<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 13:02:01 2009" -->
<!-- isoreceived="20090225180201" -->
<!-- sent="Wed, 25 Feb 2009 13:01:55 -0500" -->
<!-- isosent="20090225180155" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="20090225180155.GA26920_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-25 13:01:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb/24/2009 08:02:15AM, Mike Dubman wrote:
<br>
<span class="quotelev1">&gt;    Hello guys,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I`m looking for a way having automatic regression report at the end of mtt
</span><br>
<span class="quotelev1">&gt;    run which include graph+table for bw/lat/2way-bw for this specific run as
</span><br>
<span class="quotelev1">&gt;    well as for previous runs on the same configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The way we are doing it, is generating dynamic query for MTT test reporter
</span><br>
<span class="quotelev1">&gt;    at the end of mtt run, fetching html, extracting .png files with graphs
</span><br>
<span class="quotelev1">&gt;    and attaching it to the final MTT report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    During this process we observe the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The MTT database hosted at <a href="http://www.open-mpi.org/mtt/index.php">http://www.open-mpi.org/mtt/index.php</a> behaves
</span><br>
<span class="quotelev1">&gt;    in very inconsistent way:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    it work very sllllloooowwwwwww, sometimes it takes 5-10min to get query
</span><br>
<span class="quotelev1">&gt;    results
</span><br>
<span class="quotelev1">&gt;    We get many SQL errors during querying the performance results
</span><br>
<span class="quotelev1">&gt;    Sometimes we get no performance graphs for historic searches (queried by
</span><br>
<span class="quotelev1">&gt;    date range, like &quot;past 6 month&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The MTT database is always in need of optimzation :-) What performance
<br>
results are you trying to search on? 
<br>
<p>In the MTT Reporter, there are some tricks to narrowing a search for
<br>
speedier results. E.g., if you wanted to compare a set of results from
<br>
last August and this week, a non-continguous date range could speed
<br>
things up by a lot. So instead of &quot;past 6 months&quot; as a date range, you
<br>
could do &quot;2009-02-19 - 2009-02-25 | 2008-08-19 - 2008-08-25&quot;, which
<br>
would compare this week with six months ago (but it only searches on
<br>
the two boundary weeks, instead of the entire six months). To avoid
<br>
long searches on Test run data, clicking on the &quot;MPI install&quot; radio
<br>
button allows you to do a quick probe on whether you have *any* data
<br>
for a given date range. Then once you get a date range of where your
<br>
data exists, you can expand the search to include Test build and Test
<br>
run data.
<br>
<p>-Ethan
<br>
<p><p><span class="quotelev1">&gt;    So, I`m wondering if someone else using this feature (generate performance
</span><br>
<span class="quotelev1">&gt;    results for historic runs) for similar goals and have better experience
</span><br>
<span class="quotelev1">&gt;    with it or recommendations?
</span><br>
<span class="quotelev1">&gt;    Will it behave better if we create a local copy of Mtt database?
</span><br>
<span class="quotelev1">&gt;    Can we connect to MTT database hosted at www.openmpi.org with SQL
</span><br>
<span class="quotelev1">&gt;    directly?
</span><br>
<span class="quotelev1">&gt;    For how long historic results are kept in the MTT database?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    10x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Mike
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; References
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Visible links
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.open-mpi.org/mtt/index.php">http://www.open-mpi.org/mtt/index.php</a>
</span><br>
<span class="quotelev1">&gt;    . <a href="http://www.openmpi.org/">http://www.openmpi.org/</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0311.php">Mike Dubman: "[MTT devel] visual reports for mtt"</a>
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
