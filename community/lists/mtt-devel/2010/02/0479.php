<?
$subject_val = "[MTT devel] MTT GDS -- one more...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 21:43:28 2010" -->
<!-- isoreceived="20100212024328" -->
<!-- sent="Thu, 11 Feb 2010 21:43:21 -0500" -->
<!-- isosent="20100212024321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] MTT GDS -- one more..." -->
<!-- id="8A556B10-1618-47EA-96A9-33F22AECD3F1_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [MTT devel] MTT GDS -- one more...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 21:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Jeff Squyres: "[MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Maybe reply:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Heh... even more questions...
<br>
<p>(BTW, Ethan and I have asked soooo many questions that if it helps, I can setup a webex and we can all discuss this in person rather than via 1,000,000 annoying emails from us.  :-)  Webex can call you; no one will need to pay for an international call)
<br>
<p>1. It looks like the main benefits of using the Google App Engine -- specifically for MTT -- is that we can use the GDS and/or we can host an application on their web servers.  Is that correct?
<br>
<p>2. In reading through the Google Appengine docs, the GDS stuff looks like we mainly can access the data through GQL.  I don't see any mention of doing map/reduce kinds of computations (Ethan and I were talking on the phone today about MTT Appengine possibilities).  I'm new to all this stuff, so it's quite possible that a) I missed it, or b) I just don't understand what I'm seeing/reading yet.  Or does GQL do map/reduce on the back end to do its magic?  Is GQL the main/only way we have to access GDS?
<br>
<p>3. Is there a reason that MTTGDS.pm doesn't use the python API to directly talk to GDS?  I.e., what is the rationale for using a web app on appengine?  Is the web app doing stuff that we can't do at the client?  Ditto for bquery.pl and breport.pl.  (these questions are partially fueled by my curiosity and concern about why we're using so much CPU at Google)
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
<li><strong>Next message:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0478.php">Jeff Squyres: "[MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>Maybe reply:</strong> <a href="0489.php">Andrew Senin: "Re: [MTT devel] MTT GDS -- one more..."</a>
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
