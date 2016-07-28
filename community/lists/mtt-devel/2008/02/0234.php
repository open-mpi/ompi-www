<?
$subject_val = "Re: [MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 10:54:07 2008" -->
<!-- isoreceived="20080206155407" -->
<!-- sent="Wed, 6 Feb 2008 10:54:05 -0500" -->
<!-- isosent="20080206155405" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Extracting transparent data from OMPI" -->
<!-- id="7E76FEAD-8655-4B32-A8E4-538077A514D2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A48007CC-147C-48B7-9A55-CBAA725A0506_at_cisco.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 10:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0236.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2008, at 10:25 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 31, 2008, at 5:07 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the visualization it would be really nice to see how well  
</span><br>
<span class="quotelev2">&gt;&gt; tested a
</span><br>
<span class="quotelev2">&gt;&gt; particular interconnect, resource manager, and/or 'feature' is when
</span><br>
<span class="quotelev2">&gt;&gt; ramping up to a release. However these peices of information are hard
</span><br>
<span class="quotelev2">&gt;&gt; to obtain, and in some cases quantify (e.g., what do we mean by
</span><br>
<span class="quotelev2">&gt;&gt; testing a 'feature'?).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thinking about this it occurred to me that what we really need is for
</span><br>
<span class="quotelev2">&gt;&gt; OMPI to tell MTT what it is doing for some of these cases.
</span><br>
<span class="quotelev2">&gt;&gt; Two examples, MTT cannot tell:
</span><br>
<span class="quotelev2">&gt;&gt; - which set of compile time options are enabled/disabled
</span><br>
<span class="quotelev2">&gt;&gt; automatically
</span><br>
<span class="quotelev2">&gt;&gt;   e.g. [ &quot;./configure --with-foo&quot; vs &quot;./configure&quot;]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, this could be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - which BTL(s) or MTL are used to run a test
</span><br>
<span class="quotelev2">&gt;&gt;   e.g. [ &quot;mpirun -mca btl tcp,self foo&quot; vs. &quot;mpirun foo&quot;]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't we offer this in a limited way right now with the &quot;network&quot;
</span><br>
<span class="quotelev1">&gt; field in the MPI details section?  I think we hesitated to put OMPI-
</span><br>
<span class="quotelev1">&gt; specific semantics on that field -- e.g., whether you're using the MX
</span><br>
<span class="quotelev1">&gt; BTL or MTL is an OMPI issue; you're still using the MX protocol/ 
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose we could agument those strings in the OMPI case: mx:mtl and
</span><br>
<span class="quotelev1">&gt; mx:btl, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So to be clear: does the network field not give you what you need?
</span><br>
<p>The network field gives us exactly what we want. The problem is that  
<br>
it is not filled in when we run &quot;mpirun foo&quot; since we do not specify  
<br>
the BTLs on the command line (unless the INI explicitly specifies it).  
<br>
The problems becomes further complicated when you run something like  
<br>
&quot;mpirun -mca btl openib,tcp,self&quot; where the 'tcp' BTL is not going to  
<br>
be used due to exclusivity (at least that is what I'm told), so we  
<br>
miss report the BTLs used in this case.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the configure options we *could* parse the config.log to extract
</span><br>
<span class="quotelev2">&gt;&gt; this data. The question is, if we did this, what do we want to look?
</span><br>
<span class="quotelev2">&gt;&gt; And is this something we want to do? Is there another way?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think having a network-like field for the MPI install section might
</span><br>
<span class="quotelev1">&gt; be good, and possibly have an OMPI:: funclet to automatically do the
</span><br>
<span class="quotelev1">&gt; parsing.  But we need to be mindful of MPIs that won't have a
</span><br>
<span class="quotelev1">&gt; configure script, so what information goes there might be dubious (or
</span><br>
<span class="quotelev1">&gt; just empty?).
</span><br>
<p>Yeah I think an Open MPI specific function should do the parsing since  
<br>
the configure options we want to grab will be specific to Open MPI. I  
<br>
think in the case of no configure script it would just be empty.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the BTL(s)/MTL this is a much more subtle question since this
</span><br>
<span class="quotelev2">&gt;&gt; depends on the connectivity of the interfaces on a machine, and the
</span><br>
<span class="quotelev2">&gt;&gt; runtime selection logic. If we added a parameter to mpirun (e.g. &quot;--
</span><br>
<span class="quotelev2">&gt;&gt; showme connectivity&quot;) that displayed connectivity information to
</span><br>
<span class="quotelev2">&gt;&gt; stdout (or a file) would this be useful? What should it look like?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ya, this is on my to-do list.  IB CM stuff in the openib BTL has been
</span><br>
<span class="quotelev1">&gt; consuming my time recently (much more complicated than I originally
</span><br>
<span class="quotelev1">&gt; thought); I swear I'll be getting to the connectivity map issue before
</span><br>
<span class="quotelev1">&gt; v1.3...
</span><br>
<p>Is there a bug about this somewhere? There is a slim chance that I  
<br>
(maybe Tim P) could help with this effort as well in the near term  
<br>
(next month). For the simple case we could just dump the connectivity  
<br>
information from Rank 0, then the more complex case will be full  
<br>
mapping.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have talked about some of this in the past, but I could not find a
</span><br>
<span class="quotelev2">&gt;&gt; Bug talking about it in MTT.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you think about this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0236.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
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
