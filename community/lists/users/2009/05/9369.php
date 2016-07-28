<?
$subject_val = "Re: [OMPI users] could oversubscription clobber an executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 18 13:12:40 2009" -->
<!-- isoreceived="20090518171240" -->
<!-- sent="Mon, 18 May 2009 13:12:34 -0400" -->
<!-- isosent="20090518171234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] could oversubscription clobber an executable?" -->
<!-- id="D90EDAB3-ADE1-4CAE-BCEE-8CDEB5C702CB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CC66239A-BD37-4652-B23E-9186F5B9B452_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] could oversubscription clobber an executable?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-18 13:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is another option here -- Fortran compilers can aggressively  
<br>
move code around, particularly when it doesn't know about MPI inter- 
<br>
function dependencies.
<br>
<p>This usually only happens with non-blocking MPI communication  
<br>
functions, though.  Are you using those, perchance?
<br>
<p><p>On May 18, 2009, at 11:51 AM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 14, 2009, at 3:20 PM, Valmor de Almeida wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess another way to ask is: is it guaranteed that A and B are
</span><br>
<span class="quotelev2">&gt; &gt; contiguous?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and the MPI communication correctly sends the data?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what you're asking, but the code looks as though it ought
</span><br>
<span class="quotelev1">&gt; to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="9370.php">Gus Correa: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9368.php">Noam Bernstein: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9342.php">John Hearns: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
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
