<?
$subject_val = "Re: [OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 09:07:30 2008" -->
<!-- isoreceived="20080909130730" -->
<!-- sent="Tue, 9 Sep 2008 09:07:24 -0400" -->
<!-- isosent="20080909130724" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI ABI on Linux" -->
<!-- id="960A6088-C7E9-4391-9AFF-38CBC4A85BFA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EFE1AD09-4220-4BC9-8375-DC467F563B3B_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI ABI on Linux<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 09:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph; that helps explain things.
<br>
<p>I did promise the ABI working group that I would ask the OMPI  
<br>
community to see if anyone wanted to work with Intel on the proof of  
<br>
concept.  Let's put a finite end date on the CFP so that I can report  
<br>
back to them: COB this Thursday, Oct 11, 2008.
<br>
<p>Thanks.
<br>
<p><p><p>On Sep 9, 2008, at 9:03 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Just for clarification: we had a little internal discussion here  
</span><br>
<span class="quotelev1">&gt; about this topic. I fear LANL's interest in this may be somewhat  
</span><br>
<span class="quotelev1">&gt; misunderstood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, a few users here have expressed that it would be  
</span><br>
<span class="quotelev1">&gt; &quot;convenient&quot; if they could switch MPI implementations without  
</span><br>
<span class="quotelev1">&gt; recompiling - that is our complete level of interest in this topic.  
</span><br>
<span class="quotelev1">&gt; There are no plans to request this in future procurements, no  
</span><br>
<span class="quotelev1">&gt; willingness or interest in devoting LANL resources to accomplishing  
</span><br>
<span class="quotelev1">&gt; it. We have much higher priorities than this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If others in the community have some interest in pursuing it, they  
</span><br>
<span class="quotelev1">&gt; are welcome to do so. We are not discouraging anyone from doing so -  
</span><br>
<span class="quotelev1">&gt; just making our position on this clear so people can understand why  
</span><br>
<span class="quotelev1">&gt; we aren't stepping forward on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2008, at 6:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2008, at 2:45 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; At the MPI Forum meeting in Dublin, the MPI ABI meeting was...  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; er...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shall we say, &quot;spirited.&quot;  :-)  Both the benefits and drawbacks  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI ABI are widely contended (it's a surprisingly complex topic).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it sounds quite daunting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - If it is ever completed, MPI ABI compliance will be a separate  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; entity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the MPI 2.x and 3.x standards.  ABI compliance will be a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkmark
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for an MPI implementation, but will be unrelated to an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementation's
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.1, 2.2, 3.0, ...etc. compliance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can that be possible?   An MPI ABI will have to be versioned in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same way that the API is versioned.  You can have an ABI version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for each API version though, I guess.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is correct.  My first statement wasn't entirely correct --  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;unrelated&quot; is probably not quite the correct word.  Each ABI  
</span><br>
<span class="quotelev2">&gt;&gt; version will be tied to a specific API version.  What I was trying  
</span><br>
<span class="quotelev2">&gt;&gt; to say is that an implementation can be claim to be API compliant,  
</span><br>
<span class="quotelev2">&gt;&gt; even if it's not ABI compliant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And of course the MPI C++ ABI will require specifying a C++ ABI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (which, for Windows, means specifying the compiler and possibly its
</span><br>
<span class="quotelev3">&gt;&gt;&gt; major release number used), but this is venturing off into details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not just Windows, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ditto for Fortran.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4639.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
