<?
$subject_val = "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  2 12:03:52 2013" -->
<!-- isoreceived="20130902160352" -->
<!-- sent="Mon, 2 Sep 2013 18:03:51 +0200" -->
<!-- isosent="20130902160351" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output" -->
<!-- id="CALT_uBSaYHV0vyJmguupN_mQE5toD3i6KrMwPbO0FVAVi7YPNw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5220F52B.8080901_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-02 12:03:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/08/3859.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5775)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/08/3858.php">Brice Goglin: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Reply:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was rather thinking of allowing multiple instances of that option, one
</span><br>
<span class="quotelev1">&gt; line for each
</span><br>
<p>Perfect!
<br>
<p>&nbsp;Any better name than --annotate-legend ? --custom-legend ? --append-legend
<br>
<span class="quotelev1">&gt; ? --jirka ?
</span><br>
<p><p>I vote for
<br>
&nbsp;--append-legend
<br>
<p>Jirka
<br>
<p><p><p>On Fri, Aug 30, 2013 at 9:40 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I was rather thinking of allowing multiple instances of that option, one
</span><br>
<span class="quotelev1">&gt; line for each. It'd be easier to insert in the current code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any better name than --annotate-legend ? --custom-legend ? --append-legend
</span><br>
<span class="quotelev1">&gt; ? --jirka ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 30/08/2013 21:33, Jiri Hladky a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I like  --annotate-legend option very much. It's a flexible way how to
</span><br>
<span class="quotelev1">&gt; add the custom strings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Is it going to support multi line comments as well (by having \n in the
</span><br>
<span class="quotelev1">&gt; string)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Merci beaucoup !
</span><br>
<span class="quotelev1">&gt;  Jirka
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 30, 2013 at 6:58 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 30/08/2013 01:19, Christopher Samuel a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 28/08/13 02:19, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; The problem I have while playing with this is that it takes a lot
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; of space. Putting the entire uname on a single line will be
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; truncated when the topology drawing isn't large (on machines with 2
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; cores for instance). And using multiple lines would make the legend
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; huge.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Would there be any benefit of inserting it into the EXIF information
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for the image (every time) instead?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I looked at this but I couldn't find any generic way to do this with
</span><br>
<span class="quotelev2">&gt;&gt; Cairo unfortunately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing listhwloc-devel_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/08/3859.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5775)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/08/3858.php">Brice Goglin: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
<li><strong>Reply:</strong> <a href="3861.php">Christopher Samuel: "Re: [hwloc-devel] lstopo - please add the information about the kernel to the graphical output"</a>
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
