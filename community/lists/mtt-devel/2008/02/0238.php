<?
$subject_val = "Re: [MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 13:47:45 2008" -->
<!-- isoreceived="20080206184745" -->
<!-- sent="Wed, 6 Feb 2008 13:47:16 -0500" -->
<!-- isosent="20080206184716" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Extracting transparent data from OMPI" -->
<!-- id="7641D10B-1A93-4EFD-9E1E-5186F2FFDB47_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5231FAF4-89BA-46BC-9210-8AD6A951E6EA_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-02-06 13:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If this is going to be an OMPI-module-specific field, then running  
<br>
ompi_info is fine.  But doesn't the GNU configure MTT module already  
<br>
have the configure command line?
<br>
<p><p>On Feb 6, 2008, at 1:44 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2008, at 11:32 AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For the configure options we *could* parse the config.log to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; extract
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this data. The question is, if we did this, what do we want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; look?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; And is this something we want to do? Is there another way?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think having a network-like field for the MPI install section
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be good, and possibly have an OMPI:: funclet to automatically do  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parsing.  But we need to be mindful of MPIs that won't have a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure script, so what information goes there might be dubious
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just empty?).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yeah I think an Open MPI specific function should do the parsing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure options we want to grab will be specific to Open  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; think in the case of no configure script it would just be empty.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The info we are looking for in config.log is not available
</span><br>
<span class="quotelev2">&gt;&gt; in ompi_info? Parsing config.log throws a monkey wrench into
</span><br>
<span class="quotelev2">&gt;&gt; an AlreadyInstalled testing scenario.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I haven't looked to see for sure what the difference between the two
</span><br>
<span class="quotelev1">&gt; would be. But if ompi_info provides the information that we need, then
</span><br>
<span class="quotelev1">&gt; we can use it. Otherwise then we should try to parse config.log if it
</span><br>
<span class="quotelev1">&gt; is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we are doing an MPI Install and the build fails (due to maybe an
</span><br>
<span class="quotelev1">&gt; enabled feature) then we will have to depend upon parsing config.log
</span><br>
<span class="quotelev1">&gt; to see exactly which fields are available since ompi_info will not be
</span><br>
<span class="quotelev1">&gt; available to us at this point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
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
<li><strong>Next message:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Reply:</strong> <a href="0239.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
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
