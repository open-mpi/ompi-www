<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  2 16:08:03 2009" -->
<!-- isoreceived="20090302210803" -->
<!-- sent="Mon, 2 Mar 2009 16:07:57 -0500" -->
<!-- isosent="20090302210757" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="20090302210757.GB26920_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="65D61566-01AF-41A0-99A1-74556594D042_at_cisco.com" -->
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
<strong>Date:</strong> 2009-03-02 16:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Jeff Squyres: "[MTT devel] GSOC apps now open"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0318.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0318.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, Feb/28/2009 09:22:06AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I've added my own ideas and organization to the wiki page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ethan / Josh -- want to add anything?
</span><br>
<p>I posted links to client-side and server-side Trac ticket reports.
<br>
<p>-Ethan
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We should work offline on the GSoC application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 27, 2009, at 7:59 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Using MapReduce or any other in-memory DB techque sounds cool and should 
</span><br>
<span class="quotelev2">&gt;&gt; provide fast access to all perfomance data.
</span><br>
<span class="quotelev2">&gt;&gt; Here is a wiki page with some ideas for mtt addons: <a href="https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas">https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; regards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 25, 2009 at 6:47 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just to bring the info to the list...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There have been some off list e-mails and some in-person discussions about 
</span><br>
<span class="quotelev2">&gt;&gt; a fascinating idea that looks promising here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about moving the MTT data store to the Google Apps Engine/datastore?  
</span><br>
<span class="quotelev2">&gt;&gt; See here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://code.google.com/appengine/docs/whatisgoogleappengine.html">http://code.google.com/appengine/docs/whatisgoogleappengine.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh looked at this about a year ago and thought that there would be some 
</span><br>
<span class="quotelev2">&gt;&gt; interesting possibilities here, but never had the cycles to follow up on 
</span><br>
<span class="quotelev2">&gt;&gt; it.  Specifically: if we move all the MTT data from a postgres DB to the 
</span><br>
<span class="quotelev2">&gt;&gt; Google Apps datastore, we might have a highly scalable mechanism for 
</span><br>
<span class="quotelev2">&gt;&gt; queries, and therefore be able to do much more interesting kinds of 
</span><br>
<span class="quotelev2">&gt;&gt; queries (right now, we're fairly limited in our queries because of memory 
</span><br>
<span class="quotelev2">&gt;&gt; and CPU restrictions via Apache/PHP/jpgraph/etc., and also because 
</span><br>
<span class="quotelev2">&gt;&gt; www.open-mpi.org is used for other server purposes).  So moving the data 
</span><br>
<span class="quotelev2">&gt;&gt; to the Google Apps datastore *could* give us a better underlying platform.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A further thought is that perhaps we should roll up all the pending ideas 
</span><br>
<span class="quotelev2">&gt;&gt; we have for MTT (and there are a lot of them ;-) -- to include the one 
</span><br>
<span class="quotelev2">&gt;&gt; described above) and apply for a Google Summer of Code student.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://code.google.com/soc/">http://code.google.com/soc/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GSoC applications can be submitted March 9-13 2009.  This sounds like it 
</span><br>
<span class="quotelev2">&gt;&gt; could be a winner...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Want to start a wiki page with a list of GSoC ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2009, at 5:06 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 24, 2009, at 4:49 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Should we allow direct postgres connections (across the internet)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; to specific OMPI organizations who want/need it?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is possible that we could allow read-only access to specific
</span><br>
<span class="quotelev3">&gt;&gt; &gt; organizations. I would be extremely careful about granting write
</span><br>
<span class="quotelev3">&gt;&gt; &gt; access.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Agreed; I think we should only allow read-only to specific IP addresses.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like this *might* solve some of the issues (assuming they
</span><br>
<span class="quotelev2">&gt;&gt; want to take the time to figure out the schema).  Should we explore
</span><br>
<span class="quotelev2">&gt;&gt; this possibility?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (the SQL schemas are in the MTT SVN repo, if you didn't know that
</span><br>
<span class="quotelev2">&gt;&gt; already)
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
<li><strong>Next message:</strong> <a href="0320.php">Jeff Squyres: "[MTT devel] GSOC apps now open"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0318.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0318.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/02/0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
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
