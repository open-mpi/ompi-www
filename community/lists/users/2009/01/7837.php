<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:41:59 2009" -->
<!-- isoreceived="20090126194159" -->
<!-- sent="Mon, 26 Jan 2009 14:41:46 -0500" -->
<!-- isosent="20090126194146" -->
<!-- name="Don Kerr" -->
<!-- email="Don.Kerr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="497E11FA.8090502_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CECDAC1A-3041-4943-BB8E-61A33046BD18_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Heterogeneous OpenFabrics hardware<br>
<strong>From:</strong> Don Kerr (<em>Don.Kerr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:41:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7838.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Did IWG say anything about there being a chip set issue?    Example what 
<br>
if a vender, say Sun, wraps Mellanox  chips and on its own HCAs, would 
<br>
Mellanox HCA and Sun HCA work together?
<br>
<p>-DON
<br>
<p>On 01/26/09 14:19, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked me 
</span><br>
<span class="quotelev1">&gt; to bring a question to the Open MPI user and developer communities: is 
</span><br>
<span class="quotelev1">&gt; anyone interested in having a single MPI job span HCAs or RNICs from 
</span><br>
<span class="quotelev1">&gt; multiple vendors?  (pardon the cross-posting, but I did want to ask 
</span><br>
<span class="quotelev1">&gt; each group separately -- because the answers may be different)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The interop testing lab at the University of New Hampshire 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a>) discovered that most 
</span><br>
<span class="quotelev1">&gt; (all?) MPI implementations fail when having a single MPI job span HCAs 
</span><br>
<span class="quotelev1">&gt; from multiple vendors and/or span RNICs from multiple vendors.  I 
</span><br>
<span class="quotelev1">&gt; don't remember the exact details (and they may not be public, anyway), 
</span><br>
<span class="quotelev1">&gt; but I'm pretty sure that OMPI failed when used with QLogic and 
</span><br>
<span class="quotelev1">&gt; Mellanox HCAs in a single MPI job.  This is fairly unsurprising, given 
</span><br>
<span class="quotelev1">&gt; how we tune Open MPI's use of OpenFabrics-capable hardware based on 
</span><br>
<span class="quotelev1">&gt; our .ini file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is: does anyone want/need to support jobs that span 
</span><br>
<span class="quotelev1">&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7838.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7836.php">Jeff Squyres: "Re: [OMPI users] MPI_THREAD_MULTIPLE not provided"</a>
<li><strong>In reply to:</strong> <a href="7834.php">Jeff Squyres: "[OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Reply:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
