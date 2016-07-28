<?
$subject_val = "Re: [OMPI devel] MPI ABI on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 08:24:35 2008" -->
<!-- isoreceived="20080909122435" -->
<!-- sent="Tue, 9 Sep 2008 08:23:42 -0400" -->
<!-- isosent="20080909122342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI ABI on Linux" -->
<!-- id="7C4C4286-3BEA-41C7-8F05-993DCD22AF01_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080909064550.GA22882_at_ins.uni-bonn.de" -->
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
<strong>Date:</strong> 2008-09-09 08:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 9, 2008, at 2:45 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; At the MPI Forum meeting in Dublin, the MPI ABI meeting was... er...
</span><br>
<span class="quotelev2">&gt;&gt; shall we say, &quot;spirited.&quot;  :-)  Both the benefits and drawbacks of an
</span><br>
<span class="quotelev2">&gt;&gt; MPI ABI are widely contended (it's a surprisingly complex topic).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it sounds quite daunting.
</span><br>
<p>It is.  :-)
<br>
<p><span class="quotelev2">&gt;&gt; - If it is ever completed, MPI ABI compliance will be a separate  
</span><br>
<span class="quotelev2">&gt;&gt; entity
</span><br>
<span class="quotelev2">&gt;&gt; from the MPI 2.x and 3.x standards.  ABI compliance will be a  
</span><br>
<span class="quotelev2">&gt;&gt; checkmark
</span><br>
<span class="quotelev2">&gt;&gt; for an MPI implementation, but will be unrelated to an  
</span><br>
<span class="quotelev2">&gt;&gt; implementation's
</span><br>
<span class="quotelev2">&gt;&gt; 2.1, 2.2, 3.0, ...etc. compliance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can that be possible?   An MPI ABI will have to be versioned in
</span><br>
<span class="quotelev1">&gt; the same way that the API is versioned.  You can have an ABI version
</span><br>
<span class="quotelev1">&gt; for each API version though, I guess.
</span><br>
<p>That is correct.  My first statement wasn't entirely correct --  
<br>
&quot;unrelated&quot; is probably not quite the correct word.  Each ABI version  
<br>
will be tied to a specific API version.  What I was trying to say is  
<br>
that an implementation can be claim to be API compliant, even if it's  
<br>
not ABI compliant.
<br>
<p><span class="quotelev1">&gt; And of course the MPI C++ ABI will require specifying a C++ ABI
</span><br>
<span class="quotelev1">&gt; (which, for Windows, means specifying the compiler and possibly its
</span><br>
<span class="quotelev1">&gt; major release number used), but this is venturing off into details.
</span><br>
<p><p>Not just Windows, right?
<br>
<p>Ditto for Fortran.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Previous message:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>In reply to:</strong> <a href="4635.php">Ralf Wildenhues: "Re: [OMPI devel] MPI ABI on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
<li><strong>Reply:</strong> <a href="4637.php">Ralph Castain: "Re: [OMPI devel] MPI ABI on Linux"</a>
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
