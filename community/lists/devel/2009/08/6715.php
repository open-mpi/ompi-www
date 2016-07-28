<?
$subject_val = "Re: [OMPI devel] RFC: convert send to ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 19:54:02 2009" -->
<!-- isoreceived="20090824235402" -->
<!-- sent="Mon, 24 Aug 2009 17:53:49 -0600" -->
<!-- isosent="20090824235349" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: convert send to ssend" -->
<!-- id="933FB066-D071-4ABC-B545-29AF455EDF6D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A93235C.6010402_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: convert send to ssend<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 19:53:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6716.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2009, at 5:33 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I know the approach &quot;because we can&quot;. We develop an MPI library,  
</span><br>
<span class="quotelev2">&gt;&gt; and we should keep it that way. Our main focus should not diverge  
</span><br>
<span class="quotelev2">&gt;&gt; to provide
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would join George in the minority on this one. &quot;Because we can&quot; is  
</span><br>
<span class="quotelev1">&gt; a slippery slope, there is value in keeping things simple, having  
</span><br>
<span class="quotelev1">&gt; less knobs and bells and whistles.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On this particular whistle, the user could add one line to his MPI  
</span><br>
<span class="quotelev1">&gt; code to define send to ssend and be done with it. If he does not  
</span><br>
<span class="quotelev1">&gt; have the code in the first place, there is nothing he can't do about  
</span><br>
<span class="quotelev1">&gt; it anyway. So, it's just a matter of convenience for a lazy user.
</span><br>
<p>Not quite that simple, Patrick. Think of things like MPI_Sendrecv,  
<br>
where the &quot;send&quot; call is below that of the user's code.
<br>
<p>Frankly, I'm surprised at the fuss this has kicked up. It is a barely  
<br>
a handful of lines of code, totally protected by a configure switch.
<br>
<p>If we spent this much effort arguing over every such small thing,  
<br>
nearly every configure option that currently exists would never have  
<br>
made it.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
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
<li><strong>Next message:</strong> <a href="6716.php">Chris Samuel: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Previous message:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>In reply to:</strong> <a href="6714.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
<li><strong>Reply:</strong> <a href="6717.php">Patrick Geoffray: "Re: [OMPI devel] RFC: convert send to ssend"</a>
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
