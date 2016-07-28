<?
$subject_val = "Re: [MTT devel] Extracting transparent data from OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 13:06:36 2008" -->
<!-- isoreceived="20080206180636" -->
<!-- sent="Wed, 6 Feb 2008 13:06:23 -0500" -->
<!-- isosent="20080206180623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Extracting transparent data from OMPI" -->
<!-- id="02E5BB60-7099-44FA-AC6D-F752A4DC8569_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 13:06:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 6, 2008, at 10:54 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So to be clear: does the network field not give you what you need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The network field gives us exactly what we want. The problem is that
</span><br>
<span class="quotelev1">&gt; it is not filled in when we run &quot;mpirun foo&quot; since we do not specify
</span><br>
<span class="quotelev1">&gt; the BTLs on the command line (unless the INI explicitly specifies it).
</span><br>
<p>There's an OMPI:: funclet for parsing and filling this in:
<br>
<p>network = &amp;MPI::OMPI::find_network(&amp;test_command_line(),  
<br>
&amp;test_executable())
<br>
<p><p><span class="quotelev1">&gt; The problems becomes further complicated when you run something like
</span><br>
<span class="quotelev1">&gt; &quot;mpirun -mca btl openib,tcp,self&quot; where the 'tcp' BTL is not going to
</span><br>
<span class="quotelev1">&gt; be used due to exclusivity (at least that is what I'm told), so we
</span><br>
<span class="quotelev1">&gt; miss report the BTLs used in this case.
</span><br>
<p>True.  I don't think that MTT can figure that out, though -- this is a  
<br>
case of a user error, IMHO.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; For the configure options we *could* parse the config.log to extract
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this data. The question is, if we did this, what do we want to look?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And is this something we want to do? Is there another way?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think having a network-like field for the MPI install section might
</span><br>
<span class="quotelev2">&gt;&gt; be good, and possibly have an OMPI:: funclet to automatically do the
</span><br>
<span class="quotelev2">&gt;&gt; parsing.  But we need to be mindful of MPIs that won't have a
</span><br>
<span class="quotelev2">&gt;&gt; configure script, so what information goes there might be dubious (or
</span><br>
<span class="quotelev2">&gt;&gt; just empty?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah I think an Open MPI specific function should do the parsing since
</span><br>
<span class="quotelev1">&gt; the configure options we want to grab will be specific to Open MPI. I
</span><br>
<span class="quotelev1">&gt; think in the case of no configure script it would just be empty.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev3">&gt;&gt;&gt; For the BTL(s)/MTL this is a much more subtle question since this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; depends on the connectivity of the interfaces on a machine, and the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runtime selection logic. If we added a parameter to mpirun (e.g. &quot;--
</span><br>
<span class="quotelev3">&gt;&gt;&gt; showme connectivity&quot;) that displayed connectivity information to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdout (or a file) would this be useful? What should it look like?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ya, this is on my to-do list.  IB CM stuff in the openib BTL has been
</span><br>
<span class="quotelev2">&gt;&gt; consuming my time recently (much more complicated than I originally
</span><br>
<span class="quotelev2">&gt;&gt; thought); I swear I'll be getting to the connectivity map issue  
</span><br>
<span class="quotelev2">&gt;&gt; before
</span><br>
<span class="quotelev2">&gt;&gt; v1.3...
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
<p>I could swear that there was a ticket about this, but now I can't find  
<br>
it.  :-\  I'll go file one now...
<br>
<p>Here we go: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1207">https://svn.open-mpi.org/trac/ompi/ticket/1207</a>
<br>
<p>I put down some thoughts there.  Let's move on from there...
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
<li><strong>Next message:</strong> <a href="0237.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Ethan Mallove: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<li><strong>In reply to:</strong> <a href="0234.php">Josh Hursey: "Re: [MTT devel] Extracting transparent data from OMPI"</a>
<!-- nextthread="start" -->
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
