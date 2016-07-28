<?
$subject_val = "Re: [OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 09:03:27 2008" -->
<!-- isoreceived="20080909130327" -->
<!-- sent="Tue, 9 Sep 2008 07:03:19 -0600" -->
<!-- isosent="20080909130319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI ABI on Linux" -->
<!-- id="EFE1AD09-4220-4BC9-8375-DC467F563B3B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7C4C4286-3BEA-41C7-8F05-993DCD22AF01_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-09 09:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4636.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4636.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just for clarification: we had a little internal discussion here about  
<br>
this topic. I fear LANL's interest in this may be somewhat  
<br>
misunderstood.
<br>
<p>Basically, a few users here have expressed that it would be  
<br>
&quot;convenient&quot; if they could switch MPI implementations without  
<br>
recompiling - that is our complete level of interest in this topic.  
<br>
There are no plans to request this in future procurements, no  
<br>
willingness or interest in devoting LANL resources to accomplishing  
<br>
it. We have much higher priorities than this one.
<br>
<p>If others in the community have some interest in pursuing it, they are  
<br>
welcome to do so. We are not discouraging anyone from doing so - just  
<br>
making our position on this clear so people can understand why we  
<br>
aren't stepping forward on it.
<br>
<p>Ralph
<br>
<p><p>On Sep 9, 2008, at 6:23 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 9, 2008, at 2:45 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At the MPI Forum meeting in Dublin, the MPI ABI meeting was... er...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shall we say, &quot;spirited.&quot;  :-)  Both the benefits and drawbacks of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI ABI are widely contended (it's a surprisingly complex topic).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it sounds quite daunting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - If it is ever completed, MPI ABI compliance will be a separate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; entity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the MPI 2.x and 3.x standards.  ABI compliance will be a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for an MPI implementation, but will be unrelated to an  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.1, 2.2, 3.0, ...etc. compliance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can that be possible?   An MPI ABI will have to be versioned in
</span><br>
<span class="quotelev2">&gt;&gt; the same way that the API is versioned.  You can have an ABI version
</span><br>
<span class="quotelev2">&gt;&gt; for each API version though, I guess.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is correct.  My first statement wasn't entirely correct --  
</span><br>
<span class="quotelev1">&gt; &quot;unrelated&quot; is probably not quite the correct word.  Each ABI  
</span><br>
<span class="quotelev1">&gt; version will be tied to a specific API version.  What I was trying  
</span><br>
<span class="quotelev1">&gt; to say is that an implementation can be claim to be API compliant,  
</span><br>
<span class="quotelev1">&gt; even if it's not ABI compliant.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And of course the MPI C++ ABI will require specifying a C++ ABI
</span><br>
<span class="quotelev2">&gt;&gt; (which, for Windows, means specifying the compiler and possibly its
</span><br>
<span class="quotelev2">&gt;&gt; major release number used), but this is venturing off into details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not just Windows, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ditto for Fortran.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4636.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4636.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4638.php">Jeff Squyres: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
