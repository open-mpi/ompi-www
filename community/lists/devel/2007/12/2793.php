<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:36:47 2007" -->
<!-- isoreceived="20071211163647" -->
<!-- sent="Tue, 11 Dec 2007 08:36:42 -0800" -->
<!-- isosent="20071211163642" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="475EBC9A.1070006_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20071211162328.GI3360_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 11:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Possibly, though I have results from a benchmark I've written indicating 
<br>
the reordering happens at the sender.  I believe I found it was due to 
<br>
the QP striping trick I use to get more bandwidth -- if you back down to 
<br>
one QP (there's a define in the code you can change), the reordering 
<br>
rate drops.
<br>
<p>Also I do not make any recursive calls to progress -- at least not 
<br>
directly in the BTL; I can't speak for the upper layers.  The reason I 
<br>
do many completions at once is that it is a big help in turning around 
<br>
receive buffers, making it harder to run out of buffers and drop frags. 
<br>
&nbsp;&nbsp;I want to say there was some performance benefit as well but I can't 
<br>
say for sure.
<br>
<p>Andrew
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Tue, Dec 11, 2007 at 08:03:52AM -0800, Andrew Friedley wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Try UD, frags are reordered at a very high rate so should be a good test.
</span><br>
<span class="quotelev1">&gt; Good Idea I'll try this. BTW I thing the reason for such a high rate of
</span><br>
<span class="quotelev1">&gt; reordering in UD is that it polls for MCA_BTL_UD_NUM_WC completions
</span><br>
<span class="quotelev1">&gt; (500) and process them one by one and if progress function is called
</span><br>
<span class="quotelev1">&gt; recursively next 500 completion will be reordered versus previous
</span><br>
<span class="quotelev1">&gt; completions (reordering happens on a receiver, not sender).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Andrew
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gleb,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I would suggest that before this is checked in this be tested on a system
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that has N-way network parallelism, where N is as large as you can find.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is a key bit of code for MPI correctness, and out-of-order operations
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will break it, so you want to maximize the chance for such operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/11/07 10:54 AM, &quot;Gleb Natapov&quot; &lt;glebn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    I did a rewrite of matching code in OB1. I made it much simpler and 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; times smaller (which is good, less code - less bugs). I also got rid
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of huge macros - very helpful if you need to debug something. There
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is no performance degradation, actually I even see very small performance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; improvement. I ran MTT with this patch and the result is the same as on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk. I would like to commit this to the trunk. The patch is attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for everybody to try.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gleb.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2792.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Reply:</strong> <a href="2794.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
