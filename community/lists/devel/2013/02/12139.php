<?
$subject_val = "Re: [OMPI devel] mpi/java question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 15:32:35 2013" -->
<!-- isoreceived="20130220203235" -->
<!-- sent="Wed, 20 Feb 2013 21:32:28 +0100" -->
<!-- isosent="20130220203228" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpi/java question" -->
<!-- id="80F66EA8-70F8-425E-B037-88FA92ED6AA3_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="11ADA243-4704-4D3F-A487-7DC75CB77B52_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 15:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is wrong with MPI_INT64_T ? (MPI 3.0 standard page 26.)
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Feb 20, 2013, at 21:12 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2013, at 12:08 PM, Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 20, 2013 at 10:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 20, 2013, at 11:39 AM, Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Feb 20, 2013 at 9:34 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If someone could write some generic java code to figure out the size of a java type (and either printf it out, or write it to a file, or otherwise be able to give that value to a shell script), that would be a good start.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No need for that -- type sizes in Java are fixed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html">http://docs.oracle.com/javase/tutorial/java/nutsandbolts/datatypes.html</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; True - but the ones on the C-side are not, and that's the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My point was that there is no need to write java code to detect type
</span><br>
<span class="quotelev2">&gt;&gt; sizes.  About C types -- don't we already check those anyway?  Sure,
</span><br>
<span class="quotelev2">&gt;&gt; we need to match these with java side, but there's no need to write
</span><br>
<span class="quotelev2">&gt;&gt; new code to check type sizes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you misunderstood - we are talking about writing build-system code that matches the discovered C-type sizes to the corresponding known Java type. This is the source of the reported problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And yes - Jeff misspoke in his note. I've straightened him out over the phone. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dmitri
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; main(i,j){for(i=2;;i++){for(j=2;j&lt;i;j++){if(!(i%j)){j=0;break;}}if
</span><br>
<span class="quotelev2">&gt;&gt; (j){printf(&quot;%d\n&quot;,i);}}} /*Dmitri Gribenko &lt;gribozavr_at_[hidden]&gt;*/
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Previous message:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>In reply to:</strong> <a href="12138.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
<li><strong>Reply:</strong> <a href="12140.php">Ralph Castain: "Re: [OMPI devel] mpi/java question"</a>
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
