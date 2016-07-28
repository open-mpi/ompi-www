<?
$subject_val = "Re: [MTT devel] More GDS questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 12 11:51:25 2010" -->
<!-- isoreceived="20100212165125" -->
<!-- sent="Fri, 12 Feb 2010 11:51:19 -0500" -->
<!-- isosent="20100212165119" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] More GDS questions" -->
<!-- id="20BB045A-0198-4F22-9241-1E00D011FF91_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="00ba01caac01$7fd57200$7f805600$_at_com" -->
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
<strong>Subject:</strong> Re: [MTT devel] More GDS questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-12 11:51:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 12, 2010, at 11:36 AM, Andrew Senin wrote:
<br>
<p><span class="quotelev1">&gt; I would also like to add to Igor&#146;s comment that CPU time shown by Google is a sum of all CPUs of distributed system involved in update operation (and who knows how many servers are involved?). Also they &#147;define &#145;CPU hour&#146; in terms of a hypothetical 1.4 GHz processor, whereas the actual processors we use in production vary but are generally faster than this&#148; (see comment of DonSchwarz: <a href="http://groups.google.com/group/google-appengine-java/browse_thread/thread/aa9f18638b7bbea9?pli=1">http://groups.google.com/group/google-appengine-java/browse_thread/thread/aa9f18638b7bbea9?pli=1</a>). According to the same topic 6.5 CPU hours is about 2.3 minutes real time. I think you may try to remove some of indexes which need to be updated on each new file upload (see Datastore Indexes on Web admin console).
</span><br>
<p>Excellent information.  Google seemed to agree that 2.3 mins of real time should be nowhere near 6.5 CPU hours quota and they claimed that they fixed at least one issue regarding bulk uploads.
<br>
<p>However, this thread does imply that trickling in data over time instead of doing bulk uploads is a good idea.
<br>
<p>Was the rationale of caching all MTTGDS info during the Submit phase and actually uploading it during Finalize just a measure to reduce submission latency?
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
<li><strong>Next message:</strong> <a href="0493.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0491.php">Jeff Squyres: "Re: [MTT devel] MTT GDS -- one more..."</a>
<li><strong>In reply to:</strong> <a href="0490.php">Andrew Senin: "Re: [MTT devel] More GDS questions"</a>
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
