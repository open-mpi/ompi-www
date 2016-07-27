<?
$subject_val = "Re: [MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 11:48:05 2009" -->
<!-- isoreceived="20090225164805" -->
<!-- sent="Wed, 25 Feb 2009 11:47:59 -0500" -->
<!-- isosent="20090225164759" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] visual reports for mtt" -->
<!-- id="595207F1-E9A5-4A4A-AABB-368B5FFEABEF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="41C6F4E4-804C-46AB-9FD6-611E5ABD2DD4_at_cisco.com" -->
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
<strong>Date:</strong> 2009-02-25 11:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to bring the info to the list...
<br>
<p>There have been some off list e-mails and some in-person discussions  
<br>
about a fascinating idea that looks promising here.
<br>
<p>How about moving the MTT data store to the Google Apps Engine/ 
<br>
datastore?  See here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://code.google.com/appengine/docs/whatisgoogleappengine.html">http://code.google.com/appengine/docs/whatisgoogleappengine.html</a>
<br>
<p>Josh looked at this about a year ago and thought that there would be  
<br>
some interesting possibilities here, but never had the cycles to  
<br>
follow up on it.  Specifically: if we move all the MTT data from a  
<br>
postgres DB to the Google Apps datastore, we might have a highly  
<br>
scalable mechanism for queries, and therefore be able to do much more  
<br>
interesting kinds of queries (right now, we're fairly limited in our  
<br>
queries because of memory and CPU restrictions via Apache/PHP/jpgraph/ 
<br>
etc., and also because www.open-mpi.org is used for other server  
<br>
purposes).  So moving the data to the Google Apps datastore *could*  
<br>
give us a better underlying platform.
<br>
<p>A further thought is that perhaps we should roll up all the pending  
<br>
ideas we have for MTT (and there are a lot of them ;-) -- to include  
<br>
the one described above) and apply for a Google Summer of Code student.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://code.google.com/soc/">http://code.google.com/soc/</a>
<br>
<p>GSoC applications can be submitted March 9-13 2009.  This sounds like  
<br>
it could be a winner...
<br>
<p>Want to start a wiki page with a list of GSoC ideas?
<br>
<p><p><p>On Feb 24, 2009, at 5:06 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 24, 2009, at 4:49 PM, Josh Hursey wrote:
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0317.php">Mike Dubman: "Re: [MTT devel] visual reports for mtt"</a>
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
