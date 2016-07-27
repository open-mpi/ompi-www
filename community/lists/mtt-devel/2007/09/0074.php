<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Sep  2 11:31:18 2007" -->
<!-- isoreceived="20070902153118" -->
<!-- sent="Sun, 2 Sep 2007 11:30:30 -0400" -->
<!-- isosent="20070902153030" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] UH in summary stats?" -->
<!-- id="5F8A4019-B4E3-4075-B699-4FD60B9020DB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="69A179CE-A073-4A66-B8AA-6FBE877852B3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-02 11:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "[MTT devel] Fwd: [OMPI svn-docs] svn:open-mpi-docs r2410"</a>
<li><strong>Previous message:</strong> <a href="../../2007/08/0073.php">Jeff Squyres: "[MTT devel] new php warning that comes up a lot"</a>
<li><strong>In reply to:</strong> <a href="../../2007/08/0063.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I setup the cron job in my account to update both the DB and  
<br>
contribution stats every night at 1 am. They should all be current  
<br>
now. Note that the current day is never represented in the stats, but  
<br>
only the previous day and throughout the past.
<br>
<p>-- Josh
<br>
<p>On Aug 30, 2007, at 6:11 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Nothing is hardcoded in the collection script, but the orgs are
</span><br>
<span class="quotelev1">&gt; hardcoded in the stats table once the data has been gathered. That's
</span><br>
<span class="quotelev1">&gt; why the stats page is so quick to load, since it is referencing a
</span><br>
<span class="quotelev1">&gt; single relatively small table.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the stats php page the list of orgs is determined by the date
</span><br>
<span class="quotelev1">&gt; range specified.  So if org X did not contribute in the interval
</span><br>
<span class="quotelev1">&gt; being looked at then they don't appear in the list. Same with all the
</span><br>
<span class="quotelev1">&gt; other fields.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The reason UH didn't appear in the list is because they started
</span><br>
<span class="quotelev1">&gt; contributing after the stats collector had been turned off. I turned
</span><br>
<span class="quotelev1">&gt; back on the stats collector, but it is currently working on
</span><br>
<span class="quotelev1">&gt; 2007-08-21 - 2007-08-22.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Once it finishes coming upto date then I'll put it in a crontab and
</span><br>
<span class="quotelev1">&gt; have it run everyday.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let you know when it is live again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2007, at 4:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, I see -- it's a hard-coded list of org's.  I thought it got them
</span><br>
<span class="quotelev2">&gt;&gt; from the db.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No rush -- I just saw it today and was curious.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2007, at 4:32 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I haven't updated them in a couple days (since monday actually). I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was working on updateing the script so it can run once a day. Should
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be done later tonight sometime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So that's why UH isn't in there yet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 30, 2007, at 3:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Shouldn't UH now show up in the summary stats?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/stats/">http://www.open-mpi.org/mtt/stats/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I only see cisco, iu, sun, ibm, hlrs for a query of 2007-08-01 -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2007-08-30.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0075.php">Jeff Squyres: "[MTT devel] Fwd: [OMPI svn-docs] svn:open-mpi-docs r2410"</a>
<li><strong>Previous message:</strong> <a href="../../2007/08/0073.php">Jeff Squyres: "[MTT devel] new php warning that comes up a lot"</a>
<li><strong>In reply to:</strong> <a href="../../2007/08/0063.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
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
