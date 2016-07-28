<?
$subject_val = "[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 12:33:38 2010" -->
<!-- isoreceived="20100211173338" -->
<!-- sent="Thu, 11 Feb 2010 10:33:28 -0700" -->
<!-- isosent="20100211173328" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h" -->
<!-- id="003ADC3A-4655-4EB5-BAB7-97859A853F60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 12:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Rename ompi/include/mpi_portable_platform.h to be opal/include/opal_portable_platform.h
<br>
<p>WHY:   The file includes definitions and macros that identify the compiler used to build the system, etc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The contents actually have nothing specific to do with MPI.
<br>
<p>WHEN:    Weekend of Feb 20th
<br>
<p><p><p>I'm trying to rationalize the ompi_info system so that people who build different layers can still get a report of the MCA params, build configuration, etc. for the layers they build. Thus, there would be an &quot;orte_info&quot; and &quot;opal_info&quot; capability. Each would report not only the info for their own layer, but the layer(s) below. So ompi_info remains unchanged, orte_info reports ORTE and OPAL info, etc.
<br>
<p>The problem I encountered is that the referenced file is required for the various &quot;info&quot; tools, but it exists in the MPI layer. Since the file is only accessed at build time, I can go ahead and reference it from within &quot;orte_info&quot; and &quot;opal_info&quot;, but it does somewhat break the abstraction barrier to do so.
<br>
<p>Given that the info in the file has nothing to do with MPI itself, it seemed reasonable to move it to opal...barring arguments to the contrary.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7416.php">Christian Siebert: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7423.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Reply:</strong> <a href="7432.php">Rainer Keller: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
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
