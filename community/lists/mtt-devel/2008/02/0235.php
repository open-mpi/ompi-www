<?
$subject_val = "Re: [MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 11:33:08 2008" -->
<!-- isoreceived="20080206163308" -->
<!-- sent="Wed, 6 Feb 2008 11:32:55 -0500" -->
<!-- isosent="20080206163255" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Extracting transparent data from OMPI" -->
<!-- id="20080206163255.GN17034_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7E76FEAD-8655-4B32-A8E4-538077A514D2_at_open-mpi.org" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 11:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0236.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Feb/06/2008 10:54:05AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2008, at 10:25 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 31, 2008, at 5:07 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For the visualization it would be really nice to see how well  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tested a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; particular interconnect, resource manager, and/or 'feature' is when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ramping up to a release. However these peices of information are hard
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to obtain, and in some cases quantify (e.g., what do we mean by
</span><br>
<span class="quotelev3">&gt; &gt;&gt; testing a 'feature'?).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thinking about this it occurred to me that what we really need is for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI to tell MTT what it is doing for some of these cases.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Two examples, MTT cannot tell:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - which set of compile time options are enabled/disabled
</span><br>
<span class="quotelev3">&gt; &gt;&gt; automatically
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   e.g. [ &quot;./configure --with-foo&quot; vs &quot;./configure&quot;]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, this could be done.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - which BTL(s) or MTL are used to run a test
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   e.g. [ &quot;mpirun -mca btl tcp,self foo&quot; vs. &quot;mpirun foo&quot;]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Don't we offer this in a limited way right now with the &quot;network&quot;
</span><br>
<span class="quotelev2">&gt; &gt; field in the MPI details section?  I think we hesitated to put OMPI-
</span><br>
<span class="quotelev2">&gt; &gt; specific semantics on that field -- e.g., whether you're using the MX
</span><br>
<span class="quotelev2">&gt; &gt; BTL or MTL is an OMPI issue; you're still using the MX protocol/ 
</span><br>
<span class="quotelev2">&gt; &gt; network.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I suppose we could agument those strings in the OMPI case: mx:mtl and
</span><br>
<span class="quotelev2">&gt; &gt; mx:btl, for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So to be clear: does the network field not give you what you need?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The network field gives us exactly what we want. The problem is that  
</span><br>
<span class="quotelev1">&gt; it is not filled in when we run &quot;mpirun foo&quot; since we do not specify  
</span><br>
<span class="quotelev1">&gt; the BTLs on the command line (unless the INI explicitly specifies it).  
</span><br>
<span class="quotelev1">&gt; The problems becomes further complicated when you run something like  
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -mca btl openib,tcp,self&quot; where the 'tcp' BTL is not going to  
</span><br>
<span class="quotelev1">&gt; be used due to exclusivity (at least that is what I'm told), so we  
</span><br>
<span class="quotelev1">&gt; miss report the BTLs used in this case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For the configure options we *could* parse the config.log to extract
</span><br>
<span class="quotelev3">&gt; &gt;&gt; this data. The question is, if we did this, what do we want to look?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; And is this something we want to do? Is there another way?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think having a network-like field for the MPI install section might
</span><br>
<span class="quotelev2">&gt; &gt; be good, and possibly have an OMPI:: funclet to automatically do the
</span><br>
<span class="quotelev2">&gt; &gt; parsing.  But we need to be mindful of MPIs that won't have a
</span><br>
<span class="quotelev2">&gt; &gt; configure script, so what information goes there might be dubious (or
</span><br>
<span class="quotelev2">&gt; &gt; just empty?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah I think an Open MPI specific function should do the parsing since  
</span><br>
<span class="quotelev1">&gt; the configure options we want to grab will be specific to Open MPI. I  
</span><br>
<span class="quotelev1">&gt; think in the case of no configure script it would just be empty.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>The info we are looking for in config.log is not available
<br>
in ompi_info? Parsing config.log throws a monkey wrench into
<br>
an AlreadyInstalled testing scenario.
<br>
<p>-Ethan
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For the BTL(s)/MTL this is a much more subtle question since this
</span><br>
<span class="quotelev3">&gt; &gt;&gt; depends on the connectivity of the interfaces on a machine, and the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; runtime selection logic. If we added a parameter to mpirun (e.g. &quot;--
</span><br>
<span class="quotelev3">&gt; &gt;&gt; showme connectivity&quot;) that displayed connectivity information to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; stdout (or a file) would this be useful? What should it look like?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ya, this is on my to-do list.  IB CM stuff in the openib BTL has been
</span><br>
<span class="quotelev2">&gt; &gt; consuming my time recently (much more complicated than I originally
</span><br>
<span class="quotelev2">&gt; &gt; thought); I swear I'll be getting to the connectivity map issue before
</span><br>
<span class="quotelev2">&gt; &gt; v1.3...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a bug about this somewhere? There is a slim chance that I  
</span><br>
<span class="quotelev1">&gt; (maybe Tim P) could help with this effort as well in the near term  
</span><br>
<span class="quotelev1">&gt; (next month). For the simple case we could just dump the connectivity  
</span><br>
<span class="quotelev1">&gt; information from Rank 0, then the more complex case will be full  
</span><br>
<span class="quotelev1">&gt; mapping.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We have talked about some of this in the past, but I could not find a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Bug talking about it in MTT.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What do you think about this?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<li><strong>Next message:</strong> <a href="0236.php">Jeff Squyres: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
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
