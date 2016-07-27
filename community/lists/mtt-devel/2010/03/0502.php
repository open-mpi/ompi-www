<?
$subject_val = "Re: [MTT devel] MTT GDS -- one more...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 14:32:03 2010" -->
<!-- isoreceived="20100303193203" -->
<!-- sent="Wed, 3 Mar 2010 14:29:54 -0500" -->
<!-- isosent="20100303192954" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] MTT GDS -- one more..." -->
<!-- id="2B6902DA-A251-414B-8A76-532FED427FD3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b20b52801002210252v2f910392qa06d91b36378d5ae_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-03-03 14:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 21, 2010, at 5:52 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev3">&gt; &gt; &gt; 2. In reading through the Google Appengine docs, the GDS stuff looks like
</span><br>
<span class="quotelev2">&gt; &gt; we mainly can access the data through GQL.  I don't see any mention of doing
</span><br>
<span class="quotelev2">&gt; &gt; map/reduce kinds of computations (Ethan and I were talking on the phone
</span><br>
<span class="quotelev2">&gt; &gt; today about MTT Appengine possibilities).  I'm new to all this stuff, so
</span><br>
<span class="quotelev2">&gt; &gt; it's quite possible that a) I missed it, or b) I just don't understand what
</span><br>
<span class="quotelev2">&gt; &gt; I'm seeing/reading yet.  Or does GQL do map/reduce on the back end to do its
</span><br>
<span class="quotelev2">&gt; &gt; magic?  Is GQL the main/only way we have to access GDS?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As far as I and Igor know there are no way of doing Map/Reduce with GDS. And
</span><br>
<span class="quotelev2">&gt; &gt; GQL (or filters which is practically synonym) is the main and only way to
</span><br>
<span class="quotelev2">&gt; &gt; access GDS data.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btw, afaik - the gds is using mapreduce explicitly on the backend - one needs do nothing in order to ENABLE it: just use their API and the framework will do the rest.
</span><br>
<p>Hm; ok.  So they only give us limited access to map reduce -- via GQL?  (i.e., we can only do what GQL allows us to do)
<br>
<p>For example, I'd love to be able to specify my own reductions in order to do some real data mining, parsing through the data, etc.  Specifically, I'd like to be able to exploit the whole &quot;bring the computation to the data&quot; philosophy of map reduce, because MTT data can be *huge*.  But I don't see how to do this with GQL...?
<br>
<p>Am I missing something?
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
<li><strong>Next message:</strong> <a href="0503.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>Previous message:</strong> <a href="0501.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2010/02/0499.php">Mike Dubman: "Re: [MTT devel] MTT GDS -- one more..."</a>
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
