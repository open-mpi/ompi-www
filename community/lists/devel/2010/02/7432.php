<?
$subject_val = "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 18:44:52 2010" -->
<!-- isoreceived="20100211234452" -->
<!-- sent="Thu, 11 Feb 2010 18:45:05 -0500" -->
<!-- isosent="20100211234505" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h" -->
<!-- id="201002111845.05743.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="003ADC3A-4655-4EB5-BAB7-97859A853F60_at_open-mpi.org" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 18:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7433.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
hmm, I don't really care about the name itselve.
<br>
As Jeff mentioned, we'd have a &quot;abstraction break&quot; either way.
<br>
<p>The question I have, why does orte_info need to include the information, which 
<br>
compiler it was compiled with ;-)?
<br>
<p>We basically only care to warn users about a typical MPI-user compilation 
<br>
mismatch (C gcc+ Fortran pgf77).
<br>
<p>So, I would rather keep it as is...
<br>
<p><p>Regards,
<br>
Rainer
<br>
<p><p><p>On Thursday 11 February 2010 12:33:28 pm Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; WHAT: Rename ompi/include/mpi_portable_platform.h to be
</span><br>
<span class="quotelev1">&gt;  opal/include/opal_portable_platform.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY:   The file includes definitions and macros that identify the compiler
</span><br>
<span class="quotelev1">&gt;  used to build the system, etc. The contents actually have nothing specific
</span><br>
<span class="quotelev1">&gt;  to do with MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN:    Weekend of Feb 20th
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to rationalize the ompi_info system so that people who build
</span><br>
<span class="quotelev1">&gt;  different layers can still get a report of the MCA params, build
</span><br>
<span class="quotelev1">&gt;  configuration, etc. for the layers they build. Thus, there would be an
</span><br>
<span class="quotelev1">&gt;  &quot;orte_info&quot; and &quot;opal_info&quot; capability. Each would report not only the
</span><br>
<span class="quotelev1">&gt;  info for their own layer, but the layer(s) below. So ompi_info remains
</span><br>
<span class="quotelev1">&gt;  unchanged, orte_info reports ORTE and OPAL info, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem I encountered is that the referenced file is required for the
</span><br>
<span class="quotelev1">&gt;  various &quot;info&quot; tools, but it exists in the MPI layer. Since the file is
</span><br>
<span class="quotelev1">&gt;  only accessed at build time, I can go ahead and reference it from within
</span><br>
<span class="quotelev1">&gt;  &quot;orte_info&quot; and &quot;opal_info&quot;, but it does somewhat break the abstraction
</span><br>
<span class="quotelev1">&gt;  barrier to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given that the info in the file has nothing to do with MPI itself, it
</span><br>
<span class="quotelev1">&gt;  seemed reasonable to move it to opal...barring arguments to the contrary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7433.php">Eugene Loh: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Previous message:</strong> <a href="7431.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>In reply to:</strong> <a href="7417.php">Ralph Castain: "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7434.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
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
