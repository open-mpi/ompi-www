<?
$subject_val = "Re: [OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 15:08:54 2013" -->
<!-- isoreceived="20130220200854" -->
<!-- sent="Wed, 20 Feb 2013 22:08:30 +0200" -->
<!-- isosent="20130220200830" -->
<!-- name="Dmitri Gribenko" -->
<!-- email="gribozavr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi/java question" -->
<!-- id="CA+Y5xYfPqR=KvYNfbsmJqNvo06i17YD53K_x-5QOS=RNHsJBMQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="373C65C5-6482-478C-B630-F306F05D3CA4_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mpi/java question<br>
<strong>From:</strong> Dmitri Gribenko (<em>gribozavr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 15:08:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12136.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12136.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb 20, 2013 at 10:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2013, at 11:39 AM, Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 20, 2013 at 9:34 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If someone could write some generic java code to figure out the size of a java type (and either printf it out, or write it to a file, or otherwise be able to give that value to a shell script), that would be a good start.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No need for that -- type sizes in Java are fixed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html">http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True - but the ones on the C-side are not, and that's the problem.
</span><br>
<p>My point was that there is no need to write java code to detect type
<br>
sizes.  About C types -- don't we already check those anyway?  Sure,
<br>
we need to match these with java side, but there's no need to write
<br>
new code to check type sizes.
<br>
<p>Dmitri
<br>
<p><pre>
-- 
main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
(j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12136.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12136.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
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
