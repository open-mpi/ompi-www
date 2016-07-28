<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 30 18:11:39 2007" -->
<!-- isoreceived="20070830221139" -->
<!-- sent="Thu, 30 Aug 2007 18:11:03 -0400" -->
<!-- isosent="20070830221103" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] UH in summary stats?" -->
<!-- id="69A179CE-A073-4A66-B8AA-6FBE877852B3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32780273-638C-4316-B62C-E9B13721422C_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-30 18:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "[MTT devel] change description in db"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "Re: [MTT devel] No nightly summary last night?"</a>
<li><strong>In reply to:</strong> <a href="0060.php">Jeff Squyres: "Re: [MTT devel] UH in summary stats?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2007/09/0074.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
<li><strong>Reply:</strong> <a href="../../2007/09/0074.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nothing is hardcoded in the collection script, but the orgs are  
<br>
hardcoded in the stats table once the data has been gathered. That's  
<br>
why the stats page is so quick to load, since it is referencing a  
<br>
single relatively small table.
<br>
<p>On the stats php page the list of orgs is determined by the date  
<br>
range specified.  So if org X did not contribute in the interval  
<br>
being looked at then they don't appear in the list. Same with all the  
<br>
other fields.
<br>
<p>The reason UH didn't appear in the list is because they started  
<br>
contributing after the stats collector had been turned off. I turned  
<br>
back on the stats collector, but it is currently working on  
<br>
2007-08-21 - 2007-08-22.
<br>
<p>Once it finishes coming upto date then I'll put it in a crontab and  
<br>
have it run everyday.
<br>
<p>I'll let you know when it is live again.
<br>
<p>-- Josh
<br>
<p>On Aug 30, 2007, at 4:35 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Oh, I see -- it's a hard-coded list of org's.  I thought it got them
</span><br>
<span class="quotelev1">&gt; from the db.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No rush -- I just saw it today and was curious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 30, 2007, at 4:32 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't updated them in a couple days (since monday actually). I
</span><br>
<span class="quotelev2">&gt;&gt; was working on updateing the script so it can run once a day. Should
</span><br>
<span class="quotelev2">&gt;&gt; be done later tonight sometime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So that's why UH isn't in there yet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 30, 2007, at 3:35 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Shouldn't UH now show up in the summary stats?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/stats/">http://www.open-mpi.org/mtt/stats/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I only see cisco, iu, sun, ibm, hlrs for a query of 2007-08-01 -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2007-08-30.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "[MTT devel] change description in db"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Jeff Squyres: "Re: [MTT devel] No nightly summary last night?"</a>
<li><strong>In reply to:</strong> <a href="0060.php">Jeff Squyres: "Re: [MTT devel] UH in summary stats?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2007/09/0074.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
<li><strong>Reply:</strong> <a href="../../2007/09/0074.php">Josh Hursey: "Re: [MTT devel] UH in summary stats?"</a>
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
