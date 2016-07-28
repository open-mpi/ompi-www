<?
$subject_val = "Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 11:38:33 2009" -->
<!-- isoreceived="20090305163833" -->
<!-- sent="Thu, 05 Mar 2009 08:38:00 -0800" -->
<!-- isosent="20090305163800" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?" -->
<!-- id="49AFFFE8.1060209_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3C4D85A-FE49-4010-A68A-77C41168C72D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application	heavilyusing	MPI_Barrier?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 11:38:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8327.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; If you're exchanging data at the end of an iteration, then you  
</span><br>
<span class="quotelev1">&gt; effectively have a synchronization anyway -- no need for an extra  
</span><br>
<span class="quotelev1">&gt; barrier synchronization.
</span><br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Ummm....not to put gasoline on the fire, but...if the data exchange 
</span><br>
<span class="quotelev1">&gt; is  blocking, why do you need to call a barrier op first? Just use an  
</span><br>
<span class="quotelev1">&gt; appropriate blocking data exchange call (collective or whatever) and  
</span><br>
<span class="quotelev1">&gt; it will &quot;barrier&quot; anyway.
</span><br>
<p>I could also imagine processes interacting/communicating/whatever via 
<br>
some other mechanism than MPI calls.  Heck, OMPI itself is an example.  
<br>
Maybe they interact via a file system or something.
<br>
<p>Anyhow, I agree with the majority sentiment:  single raised eyebrow if 
<br>
there's an app that beats heavily on Barrier.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8327.php">Ralph Castain: "Re: [OMPI users] Run-time problem"</a>
<li><strong>Previous message:</strong> <a href="8325.php">justin oppenheim: "[OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8317.php">Jeff Squyres: "Re: [OMPI users] Any scientific application heavilyusing	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
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
