<?
$subject_val = "Re: [MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:26:01 2008" -->
<!-- isoreceived="20080206152601" -->
<!-- sent="Wed, 6 Feb 2008 10:25:14 -0500" -->
<!-- isosent="20080206152514" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Extracting transparent data from OMPI" -->
<!-- id="A48007CC-147C-48B7-9A55-CBAA725A0506_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5FCBC0B5-8A6B-4027-BFDB-5A4E71184218_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] Extracting transparent data from OMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 10:25:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2008, at 5:07 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; For the visualization it would be really nice to see how well tested a
</span><br>
<span class="quotelev1">&gt; particular interconnect, resource manager, and/or 'feature' is when
</span><br>
<span class="quotelev1">&gt; ramping up to a release. However these peices of information are hard
</span><br>
<span class="quotelev1">&gt; to obtain, and in some cases quantify (e.g., what do we mean by
</span><br>
<span class="quotelev1">&gt; testing a 'feature'?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thinking about this it occurred to me that what we really need is for
</span><br>
<span class="quotelev1">&gt; OMPI to tell MTT what it is doing for some of these cases.
</span><br>
<span class="quotelev1">&gt; Two examples, MTT cannot tell:
</span><br>
<span class="quotelev1">&gt;  - which set of compile time options are enabled/disabled  
</span><br>
<span class="quotelev1">&gt; automatically
</span><br>
<span class="quotelev1">&gt;    e.g. [ &quot;./configure --with-foo&quot; vs &quot;./configure&quot;]
</span><br>
<p>Yes, this could be done.
<br>
<p><span class="quotelev1">&gt;  - which BTL(s) or MTL are used to run a test
</span><br>
<span class="quotelev1">&gt;    e.g. [ &quot;mpirun -mca btl tcp,self foo&quot; vs. &quot;mpirun foo&quot;]
</span><br>
<p>Don't we offer this in a limited way right now with the &quot;network&quot;  
<br>
field in the MPI details section?  I think we hesitated to put OMPI- 
<br>
specific semantics on that field -- e.g., whether you're using the MX  
<br>
BTL or MTL is an OMPI issue; you're still using the MX protocol/network.
<br>
<p>I suppose we could agument those strings in the OMPI case: mx:mtl and  
<br>
mx:btl, for example.
<br>
<p>So to be clear: does the network field not give you what you need?
<br>
<p><span class="quotelev1">&gt; For the configure options we *could* parse the config.log to extract
</span><br>
<span class="quotelev1">&gt; this data. The question is, if we did this, what do we want to look?
</span><br>
<span class="quotelev1">&gt; And is this something we want to do? Is there another way?
</span><br>
<p>I think having a network-like field for the MPI install section might  
<br>
be good, and possibly have an OMPI:: funclet to automatically do the  
<br>
parsing.  But we need to be mindful of MPIs that won't have a  
<br>
configure script, so what information goes there might be dubious (or  
<br>
just empty?).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the BTL(s)/MTL this is a much more subtle question since this
</span><br>
<span class="quotelev1">&gt; depends on the connectivity of the interfaces on a machine, and the
</span><br>
<span class="quotelev1">&gt; runtime selection logic. If we added a parameter to mpirun (e.g. &quot;--
</span><br>
<span class="quotelev1">&gt; showme connectivity&quot;) that displayed connectivity information to
</span><br>
<span class="quotelev1">&gt; stdout (or a file) would this be useful? What should it look like?
</span><br>
<p>Ya, this is on my to-do list.  IB CM stuff in the openib BTL has been  
<br>
consuming my time recently (much more complicated than I originally  
<br>
thought); I swear I'll be getting to the connectivity map issue before  
<br>
v1.3...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have talked about some of this in the past, but I could not find a
</span><br>
<span class="quotelev1">&gt; Bug talking about it in MTT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you think about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/01/0232.php">Josh Hursey: "[MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
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
