<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 28 09:22:12 2009" -->
<!-- isoreceived="20090228142212" -->
<!-- sent="Sat, 28 Feb 2009 09:22:06 -0500" -->
<!-- isosent="20090228142206" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="65D61566-01AF-41A0-99A1-74556594D042_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800902270459g704ff1d5mc25b8f84c907e63b_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-02-28 09:22:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've added my own ideas and organization to the wiki page.
<br>
<p>Ethan / Josh -- want to add anything?
<br>
<p>We should work offline on the GSoC application.
<br>
<p><p>On Feb 27, 2009, at 7:59 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using MapReduce or any other in-memory DB techque sounds cool and  
</span><br>
<span class="quotelev1">&gt; should provide fast access to all perfomance data.
</span><br>
<span class="quotelev1">&gt; Here is a wiki page with some ideas for mtt addons: <a href="https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas">https://svn.open-mpi.org/trac/mtt/wiki/MttNewFeaturesIdeas</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 25, 2009 at 6:47 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Just to bring the info to the list...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There have been some off list e-mails and some in-person discussions  
</span><br>
<span class="quotelev1">&gt; about a fascinating idea that looks promising here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about moving the MTT data store to the Google Apps Engine/ 
</span><br>
<span class="quotelev1">&gt; datastore?  See here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://code.google.com/appengine/docs/whatisgoogleappengine.html">http://code.google.com/appengine/docs/whatisgoogleappengine.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh looked at this about a year ago and thought that there would be  
</span><br>
<span class="quotelev1">&gt; some interesting possibilities here, but never had the cycles to  
</span><br>
<span class="quotelev1">&gt; follow up on it.  Specifically: if we move all the MTT data from a  
</span><br>
<span class="quotelev1">&gt; postgres DB to the Google Apps datastore, we might have a highly  
</span><br>
<span class="quotelev1">&gt; scalable mechanism for queries, and therefore be able to do much  
</span><br>
<span class="quotelev1">&gt; more interesting kinds of queries (right now, we're fairly limited  
</span><br>
<span class="quotelev1">&gt; in our queries because of memory and CPU restrictions via Apache/PHP/ 
</span><br>
<span class="quotelev1">&gt; jpgraph/etc., and also because www.open-mpi.org is used for other  
</span><br>
<span class="quotelev1">&gt; server purposes).  So moving the data to the Google Apps datastore  
</span><br>
<span class="quotelev1">&gt; *could* give us a better underlying platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A further thought is that perhaps we should roll up all the pending  
</span><br>
<span class="quotelev1">&gt; ideas we have for MTT (and there are a lot of them ;-) -- to include  
</span><br>
<span class="quotelev1">&gt; the one described above) and apply for a Google Summer of Code  
</span><br>
<span class="quotelev1">&gt; student.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://code.google.com/soc/">http://code.google.com/soc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GSoC applications can be submitted March 9-13 2009.  This sounds  
</span><br>
<span class="quotelev1">&gt; like it could be a winner...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Want to start a wiki page with a list of GSoC ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2009, at 5:06 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2009, at 4:49 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Should we allow direct postgres connections (across the internet)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to specific OMPI organizations who want/need it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It is possible that we could allow read-only access to specific
</span><br>
<span class="quotelev2">&gt; &gt; organizations. I would be extremely careful about granting write
</span><br>
<span class="quotelev2">&gt; &gt; access.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Agreed; I think we should only allow read-only to specific IP  
</span><br>
<span class="quotelev1">&gt; addresses.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like this *might* solve some of the issues (assuming they
</span><br>
<span class="quotelev1">&gt; want to take the time to figure out the schema).  Should we explore
</span><br>
<span class="quotelev1">&gt; this possibility?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (the SQL schemas are in the MTT SVN repo, if you didn't know that
</span><br>
<span class="quotelev1">&gt; already)
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/03/0319.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
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
