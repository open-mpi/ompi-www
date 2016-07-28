<?
$subject_val = "Re: [MTT devel] MTT GDS -- one more...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:44:12 2010" -->
<!-- isoreceived="20100212164412" -->
<!-- sent="Fri, 12 Feb 2010 11:44:07 -0500" -->
<!-- isosent="20100212164407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT GDS -- one more..." -->
<!-- id="43DA0FA4-1FBA-40A7-A871-726FACCB9642_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00b901caac01$691689f0$3b439dd0$_at_com" -->
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
<strong>Subject:</strong> Re: [MTT devel] MTT GDS -- one more...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:44:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Reply:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2010, at 11:35 AM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; I worked with Igor on the GDS framework (although Igor knows more tech
</span><br>
<span class="quotelev1">&gt; details than me). Let me put my two cents to the discussion.
</span><br>
<p>Thanks!
<br>
<p><span class="quotelev2">&gt; &gt; 1. It looks like the main benefits of using the Google App Engine --
</span><br>
<span class="quotelev1">&gt; specifically for MTT -- is that we can use the GDS and/or we can host an
</span><br>
<span class="quotelev1">&gt; application on their web servers.  Is that correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think yes. Also GDS should work faster than a relational DB on large
</span><br>
<span class="quotelev1">&gt; amounts of data.
</span><br>
<p>Cool.  The speed is also a good/important point for us -- our current SQL server is kinda creaking under the load.  Josh spent quite a bit of time optimizing the database that we have now (you should have seen how slow it used to be!), so moving to a faster platform is desirable.
<br>
<p><span class="quotelev2">&gt; &gt; 2. In reading through the Google Appengine docs, the GDS stuff looks like
</span><br>
<span class="quotelev1">&gt; we mainly can access the data through GQL.  I don't see any mention of doing
</span><br>
<span class="quotelev1">&gt; map/reduce kinds of computations (Ethan and I were talking on the phone
</span><br>
<span class="quotelev1">&gt; today about MTT Appengine possibilities).  I'm new to all this stuff, so
</span><br>
<span class="quotelev1">&gt; it's quite possible that a) I missed it, or b) I just don't understand what
</span><br>
<span class="quotelev1">&gt; I'm seeing/reading yet.  Or does GQL do map/reduce on the back end to do its
</span><br>
<span class="quotelev1">&gt; magic?  Is GQL the main/only way we have to access GDS?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I and Igor know there are no way of doing Map/Reduce with GDS. And
</span><br>
<span class="quotelev1">&gt; GQL (or filters which is practically synonym) is the main and only way to
</span><br>
<span class="quotelev1">&gt; access GDS data.
</span><br>
<p>Ok, good.  Just wanted to make sure we understood that point properly and weren't missing anything.
<br>
<p><span class="quotelev2">&gt; &gt; 3. Is there a reason that MTTGDS.pm doesn't use the python API to directly
</span><br>
<span class="quotelev1">&gt; talk to GDS?  I.e., what is the rationale for using a web app on appengine?
</span><br>
<span class="quotelev1">&gt; Is the web app doing stuff that we can't do at the client?  Ditto for
</span><br>
<span class="quotelev1">&gt; bquery.pl and breport.pl.  (these questions are partially fueled by my
</span><br>
<span class="quotelev1">&gt; curiosity and concern about why we're using so much CPU at Google)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are a few reasons of doing it. The first is speed. When we post new
</span><br>
<span class="quotelev1">&gt; data we firstly try to find if there is a copy of corresponding MpiInfo,
</span><br>
<span class="quotelev1">&gt; ClustreInfo and other *Info classes. If we did it directly from client
</span><br>
<span class="quotelev1">&gt; scripts the delays would be higher (depending on Internet connection speed).
</span><br>
<span class="quotelev1">&gt; Price of it is additional CPU cycles on google servers.
</span><br>
<p>FWIW, I don't think I'm concerned about the speed of submitting.  MTT runs can go for hours.  If it takes 2 seconds to submit or 20, I'm not concerned about it -- a few round-trip latencies + some GQL lookups are still a very small fraction of the overall MTT run time.  If CPU is going to be an issue, I wouldn't mind doing some of these lookups from the client (and potentially even caching some of the IDs on the client -- like we do on the SQL submission reporter), and then just submitting those IDs in the &quot;main submit&quot;.
<br>
<p><span class="quotelev1">&gt; The second and more
</span><br>
<span class="quotelev1">&gt; important is that when we have such logic on server we (instead of GDS
</span><br>
<span class="quotelev1">&gt; clients) are responsible for maintaining correct structure of links between
</span><br>
<span class="quotelev1">&gt; objects. If such logic was implemented on client side user could (by mistake
</span><br>
<span class="quotelev1">&gt; or on purpose) break links between objects.
</span><br>
<p>Ah yes, this is a very good reason.
<br>
<p>I would also imagine that without the web interface, we would be limited to talking to the GDS under a single username/password (i.e., the owner of the appspot), which is also undesirable.
<br>
<p>Thanks for the info!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0492.php">Jeff Squyres: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
<li><strong>In reply to:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Reply:</strong> <a href="0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
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
