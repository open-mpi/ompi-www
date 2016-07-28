<?
$subject_val = "Re: [MTT users] Reporter problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 31 12:29:06 2008" -->
<!-- isoreceived="20080131172906" -->
<!-- sent="Thu, 31 Jan 2008 12:28:57 -0500" -->
<!-- isosent="20080131172857" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT users] Reporter problems" -->
<!-- id="20080131172857.GM17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2BA7C008-93C2-4344-B5AB-8C3D0152C445_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT users] Reporter problems<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-31 12:28:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Josh Hursey: "[MTT users] BLACS Support"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It would be useful to know how long the queries were taking,
<br>
e.g., on date &quot;x&quot; when the database had &quot;n&quot; tuples. (Idea
<br>
for the stats table?) I was just going by my [possibly
<br>
unreliable] recollection of top-level summaries taking only
<br>
a few seconds.
<br>
<p>-Ethan
<br>
<p><p>On Wed, Jan/30/2008 03:14:20PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I'm seeing between 12 and 20 seconds on a fairly idle machine. We can  
</span><br>
<span class="quotelev1">&gt; likely do better. I'll dig into it this week[end] and see what I can do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 12 - 20 isn't too bad though considering the amount of data that query  
</span><br>
<span class="quotelev1">&gt; is returning. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2008, at 2:52 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I don't remember a &quot;past 24 hour&quot; summary taking &quot;24
</span><br>
<span class="quotelev2">&gt; &gt; seconds&quot;. Are we seeing a slow down due to an accumulation
</span><br>
<span class="quotelev2">&gt; &gt; of results? I thought the week-long table partitions would
</span><br>
<span class="quotelev2">&gt; &gt; prevent this type of effect?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Jan/30/2008 11:00:46AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This maintenance is complete. The reporter should be operating as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; normal.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There are a few other maintenance items, but I am pushing them to the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; weekend since it will result in a bit of a slowdown again.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks for your patience.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 29, 2008, at 9:47 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The reporter should be responding much better now. I tweaked the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; maintenance scripts so they no longer push nearly as hard on the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; database. They are still running, but the query you specified  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; seems to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; run in approx. 15-20 sec. with the current load.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 29, 2008, at 8:38 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; For the next 24 - 48 hours this is to be expected. Sorry :(
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I started some maintenance work last night, and it is taking a bit
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; longer than I expected (due to integrity constraint checking most
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; likely). The maintenance scripts are pushing fairly hard on the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; database, so I would expect some slowdown with the reporter (and
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; maybe
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; client submits).
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If this becomes a substantial problem for anyone please let me  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; know,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; and I may be able to shift this work to the weekend. In the mean  
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; time
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'll see if I can reduce the load a bit.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Jan 29, 2008, at 7:44 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Using the reporter this morning it is being awfully slow, as in it
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; taking about 3 minutes to do a top level summary search for:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Date: past 24 hours
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Org: IU
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Platform name: IU_Odin
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I don't know whether this is a known problem or not. I seem to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; recall
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that after the last database upgrade such a search was taking  
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; just a
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; few
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; seconds.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0504.php">Josh Hursey: "[MTT users] BLACS Support"</a>
<li><strong>Previous message:</strong> <a href="0502.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
<li><strong>In reply to:</strong> <a href="0502.php">Josh Hursey: "Re: [MTT users] Reporter problems"</a>
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
