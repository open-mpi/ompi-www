<?
$subject_val = "Re: [OMPI users] Heterogeneous OpenFabrics hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:03:15 2009" -->
<!-- isoreceived="20090126200315" -->
<!-- sent="Mon, 26 Jan 2009 15:03:02 -0500" -->
<!-- isosent="20090126200302" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Heterogeneous OpenFabrics hardware" -->
<!-- id="A75FAF74-D882-49FC-8A56-DE7AB5252680_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497E11FA.8090502_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 15:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7838.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This scenario was not mentioned, but I'll bet it falls into the same  
<br>
general category.  If an HCA has different run-time characteristics,  
<br>
regardless of whether they are caused by the OEM or the reseller,  
<br>
that's probably &quot;heterogeneous enough&quot; for this discussion.
<br>
<p><p>On Jan 26, 2009, at 2:41 PM, Don Kerr wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did IWG say anything about there being a chip set issue?    Example  
</span><br>
<span class="quotelev1">&gt; what if a vender, say Sun, wraps Mellanox  chips and on its own  
</span><br>
<span class="quotelev1">&gt; HCAs, would Mellanox HCA and Sun HCA work together?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DON
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 01/26/09 14:19, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The Interop Working Group (IWG) of the OpenFabrics Alliance asked  
</span><br>
<span class="quotelev2">&gt;&gt; me to bring a question to the Open MPI user and developer  
</span><br>
<span class="quotelev2">&gt;&gt; communities: is anyone interested in having a single MPI job span  
</span><br>
<span class="quotelev2">&gt;&gt; HCAs or RNICs from multiple vendors?  (pardon the cross-posting,  
</span><br>
<span class="quotelev2">&gt;&gt; but I did want to ask each group separately -- because the answers  
</span><br>
<span class="quotelev2">&gt;&gt; may be different)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The interop testing lab at the University of New Hampshire (<a href="http://www.iol.unh.edu/services/testing/ofa/">http://www.iol.unh.edu/services/testing/ofa/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; ) discovered that most (all?) MPI implementations fail when having  
</span><br>
<span class="quotelev2">&gt;&gt; a single MPI job span HCAs from multiple vendors and/or span RNICs  
</span><br>
<span class="quotelev2">&gt;&gt; from multiple vendors.  I don't remember the exact details (and  
</span><br>
<span class="quotelev2">&gt;&gt; they may not be public, anyway), but I'm pretty sure that OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; failed when used with QLogic and Mellanox HCAs in a single MPI  
</span><br>
<span class="quotelev2">&gt;&gt; job.  This is fairly unsurprising, given how we tune Open MPI's use  
</span><br>
<span class="quotelev2">&gt;&gt; of OpenFabrics-capable hardware based on our .ini file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my question is: does anyone want/need to support jobs that span  
</span><br>
<span class="quotelev2">&gt;&gt; HCAs from multiple vendors and/or RNICs from multiple vendors?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="7840.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7838.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>In reply to:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7853.php">Samuel Sarholz: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
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
