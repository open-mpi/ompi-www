<?
$subject_val = "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 19:51:14 2010" -->
<!-- isoreceived="20100212005114" -->
<!-- sent="Thu, 11 Feb 2010 17:51:04 -0700" -->
<!-- isosent="20100212005104" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h" -->
<!-- id="A2AA218A-29BB-4D95-908A-50BD66CFC29B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201002111845.05743.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 19:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7433.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2010, at 4:45 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; hmm, I don't really care about the name itselve.
</span><br>
<span class="quotelev1">&gt; As Jeff mentioned, we'd have a &quot;abstraction break&quot; either way.
</span><br>
<p>There is no abstraction break - I talked to Jeff about it and cleared up the confusion. The OMPI code will have an install line that installs the opal file in a to-be-determined place where mpi.h can include it. No &quot;mpi&quot; references required in OPAL.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question I have, why does orte_info need to include the information, which 
</span><br>
<span class="quotelev1">&gt; compiler it was compiled with ;-)?
</span><br>
<p>Because people create cross-compiled versions, use module files to define which one they are using, etc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We basically only care to warn users about a typical MPI-user compilation 
</span><br>
<span class="quotelev1">&gt; mismatch (C gcc+ Fortran pgf77).
</span><br>
<p>Not quite correct - you need to know that it was built to cross-compile vs native.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, I would rather keep it as is...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thursday 11 February 2010 12:33:28 pm Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Rename ompi/include/mpi_portable_platform.h to be
</span><br>
<span class="quotelev2">&gt;&gt; opal/include/opal_portable_platform.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY:   The file includes definitions and macros that identify the compiler
</span><br>
<span class="quotelev2">&gt;&gt; used to build the system, etc. The contents actually have nothing specific
</span><br>
<span class="quotelev2">&gt;&gt; to do with MPI.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHEN:    Weekend of Feb 20th
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to rationalize the ompi_info system so that people who build
</span><br>
<span class="quotelev2">&gt;&gt; different layers can still get a report of the MCA params, build
</span><br>
<span class="quotelev2">&gt;&gt; configuration, etc. for the layers they build. Thus, there would be an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_info&quot; and &quot;opal_info&quot; capability. Each would report not only the
</span><br>
<span class="quotelev2">&gt;&gt; info for their own layer, but the layer(s) below. So ompi_info remains
</span><br>
<span class="quotelev2">&gt;&gt; unchanged, orte_info reports ORTE and OPAL info, etc.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem I encountered is that the referenced file is required for the
</span><br>
<span class="quotelev2">&gt;&gt; various &quot;info&quot; tools, but it exists in the MPI layer. Since the file is
</span><br>
<span class="quotelev2">&gt;&gt; only accessed at build time, I can go ahead and reference it from within
</span><br>
<span class="quotelev2">&gt;&gt; &quot;orte_info&quot; and &quot;opal_info&quot;, but it does somewhat break the abstraction
</span><br>
<span class="quotelev2">&gt;&gt; barrier to do so.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given that the info in the file has nothing to do with MPI itself, it
</span><br>
<span class="quotelev2">&gt;&gt; seemed reasonable to move it to opal...barring arguments to the contrary.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7435.php">Ralf Wildenhues: "Re: [OMPI devel] RFC: Adding -DOPEN_MPI=1 to mpif77 and mpif90"</a>
<li><strong>Previous message:</strong> <a href="7433.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
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
