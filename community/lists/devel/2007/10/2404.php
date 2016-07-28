<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  8 14:11:33 2007" -->
<!-- isoreceived="20071008181133" -->
<!-- sent="Mon, 08 Oct 2007 14:11:42 -0400" -->
<!-- isosent="20071008181142" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Non-blocking modex" -->
<!-- id="470A72DE.3030706_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="470A6F03.4080000_at_open-mpi.org" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-08 14:11:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2403.php">Brian Barrett: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so (in fact the bookkeeping overhead of the non-blocking
<br>
receive is a slight detriment).
<br>
<p>Right now modex information is only exchanged during init and during
<br>
spawn/dynamics operations (and I do not see that changing at any point
<br>
soon). So I think the only use of the non-blocking receive would be to
<br>
ask for the information before the exchange has been done. I don't know
<br>
if this is helpful to anyone. My guess is not since no one does it.
<br>
<p>Tim
<br>
<p>Andrew Friedley wrote:
<br>
<span class="quotelev1">&gt; Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am working on implementing the RSL. Part of this is changing the modex 
</span><br>
<span class="quotelev2">&gt;&gt; to use the process attribute system in the RSL. I had designed this 
</span><br>
<span class="quotelev2">&gt;&gt; system to to include a non-blocking interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I have looked again and noticed that nobody is using the 
</span><br>
<span class="quotelev2">&gt;&gt; non-blocking modex receive. Because of this I am inclined to not have 
</span><br>
<span class="quotelev2">&gt;&gt; such an interface in the RSL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hmm, would using a non-blocking modex recv improve performance in any 
</span><br>
<span class="quotelev1">&gt; way, or have any other useful impacts?  If so, I would use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
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
<li><strong>Next message:</strong> <a href="2405.php">Josh Hursey: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>Previous message:</strong> <a href="2403.php">Brian Barrett: "Re: [OMPI devel] Non-blocking modex"</a>
<li><strong>In reply to:</strong> <a href="2402.php">Andrew Friedley: "Re: [OMPI devel] Non-blocking modex"</a>
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
