<?
$subject_val = "Re: [MTT devel] MTT GDS -- one more...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:36:00 2010" -->
<!-- isoreceived="20100212163600" -->
<!-- sent="Fri, 12 Feb 2010 19:35:38 +0300" -->
<!-- isosent="20100212163538" -->
<!-- name="Andrew Senin" -->
<!-- email="as_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT GDS -- one more..." -->
<!-- id="00b901caac01$691689f0$3b439dd0$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.974.1265986861.6605.mtt-devel_at_open-mpi.org" -->
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
<strong>From:</strong> Andrew Senin (<em>as_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:35:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Reply:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff, 
<br>
<p>I worked with Igor on the GDS framework (although Igor knows more tech
<br>
details than me). Let me put my two cents to the discussion.
<br>
<p><span class="quotelev1">&gt; 1. It looks like the main benefits of using the Google App Engine --
</span><br>
specifically for MTT -- is that we can use the GDS and/or we can host an
<br>
application on their web servers.  Is that correct?
<br>
<p>I think yes. Also GDS should work faster than a relational DB on large
<br>
amounts of data.
<br>
<p><span class="quotelev1">&gt; 2. In reading through the Google Appengine docs, the GDS stuff looks like
</span><br>
we mainly can access the data through GQL.  I don't see any mention of doing
<br>
map/reduce kinds of computations (Ethan and I were talking on the phone
<br>
today about MTT Appengine possibilities).  I'm new to all this stuff, so
<br>
it's quite possible that a) I missed it, or b) I just don't understand what
<br>
I'm seeing/reading yet.  Or does GQL do map/reduce on the back end to do its
<br>
magic?  Is GQL the main/only way we have to access GDS?
<br>
<p>As far as I and Igor know there are no way of doing Map/Reduce with GDS. And
<br>
GQL (or filters which is practically synonym) is the main and only way to
<br>
access GDS data.
<br>
<p><span class="quotelev1">&gt; 3. Is there a reason that MTTGDS.pm doesn't use the python API to directly
</span><br>
talk to GDS?  I.e., what is the rationale for using a web app on appengine?
<br>
Is the web app doing stuff that we can't do at the client?  Ditto for
<br>
bquery.pl and breport.pl.  (these questions are partially fueled by my
<br>
curiosity and concern about why we're using so much CPU at Google)
<br>
<p>There are a few reasons of doing it. The first is speed. When we post new
<br>
data we firstly try to find if there is a copy of corresponding MpiInfo,
<br>
ClustreInfo and other *Info classes. If we did it directly from client
<br>
scripts the delays would be higher (depending on Internet connection speed).
<br>
Price of it is additional CPU cycles on google servers. The second and more
<br>
important is that when we have such logic on server we (instead of GDS
<br>
clients) are responsible for maintaining correct structure of links between
<br>
objects. If such logic was implemented on client side user could (by mistake
<br>
or on purpose) break links between objects.
<br>
<p>Regards, 
<br>
Andrew Senin
<br>
<p>-----Original Message-----
<br>
Date: Thu, 11 Feb 2010 21:43:21 -0500
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: [MTT devel] MTT GDS -- one more...
<br>
To: Development list for the MPI Testing Tool &lt;mtt-devel_at_[hidden]&gt;
<br>
Message-ID: &lt;8A556B10-1618-47EA-96A9-33F22AECD3F1_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=us-ascii
<br>
<p>Heh... even more questions...
<br>
<p>(BTW, Ethan and I have asked soooo many questions that if it helps, I can
<br>
setup a webex and we can all discuss this in person rather than via
<br>
1,000,000 annoying emails from us.  :-)  Webex can call you; no one will
<br>
need to pay for an international call)
<br>
<p>1. It looks like the main benefits of using the Google App Engine --
<br>
specifically for MTT -- is that we can use the GDS and/or we can host an
<br>
application on their web servers.  Is that correct?
<br>
<p>2. In reading through the Google Appengine docs, the GDS stuff looks like we
<br>
mainly can access the data through GQL.  I don't see any mention of doing
<br>
map/reduce kinds of computations (Ethan and I were talking on the phone
<br>
today about MTT Appengine possibilities).  I'm new to all this stuff, so
<br>
it's quite possible that a) I missed it, or b) I just don't understand what
<br>
I'm seeing/reading yet.  Or does GQL do map/reduce on the back end to do its
<br>
magic?  Is GQL the main/only way we have to access GDS?
<br>
<p>3. Is there a reason that MTTGDS.pm doesn't use the python API to directly
<br>
talk to GDS?  I.e., what is the rationale for using a web app on appengine?
<br>
Is the web app doing stuff that we can't do at the client?  Ditto for
<br>
bquery.pl and breport.pl.  (these questions are partially fueled by my
<br>
curiosity and concern about why we're using so much CPU at Google)
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
<li><strong>Next message:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Jeff Squyres: "Re: [MTT devel] MTTGDS issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="0479.php">Jeff Squyres: "[MTT devel] MTT GDS -- one more..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Reply:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
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
