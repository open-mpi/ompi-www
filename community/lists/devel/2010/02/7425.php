<?
$subject_val = "[OMPI devel] documenting the PMPI profiling interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 16:11:22 2010" -->
<!-- isoreceived="20100211211122" -->
<!-- sent="Thu, 11 Feb 2010 13:13:09 -0800" -->
<!-- isosent="20100211211309" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] documenting the PMPI profiling interface" -->
<!-- id="4B7472E5.9060404_at_sun.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] documenting the PMPI profiling interface<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 16:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7424.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
In the MPI standard, the portion discussing the PMPI profiling
interface says:<br>
<br>
&nbsp;&nbsp;&nbsp;&nbsp; 3. document the implementation of different language<br>
&nbsp;&nbsp;&nbsp;&nbsp; bindings of the <font face="sans-serif"> MPI</font> interface if
they are layered on top<br>
&nbsp;&nbsp;&nbsp;&nbsp; of each other, so that the profiler developer knows<br>
&nbsp;&nbsp;&nbsp;&nbsp; whether she must implement the profile interface for<br>
&nbsp;&nbsp;&nbsp;&nbsp; each binding, or can economise by implementing it<br>
&nbsp;&nbsp;&nbsp;&nbsp; only for the lowest level routines. <br>
<br>
<a class="moz-txt-link-freetext"
 href="http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313">http://www.mpi-forum.org/docs/mpi22-report/node313.htm#Node313</a><br>
<br>
Do we have such documentation anywhere?&nbsp; I don't see this in the OMPI
FAQ.<br>
<br>
I played with this some.&nbsp; I wrote a Fortran program that called
MPI_Send.&nbsp; I wrote a Fortran wrapper that intercepted MPI_Send and
called PMPI_Send.&nbsp; I wrote a C wrapper that did the same thing.&nbsp; It
appears that both wrappers got called.&nbsp; So, it looks like we should
advise users to provide *only* C wrappers (unless they *also* want to
intercept at the Fortran level).<br>
<br>
Yes/no?<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7426.php">Jeff Squyres: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<li><strong>Previous message:</strong> <a href="7424.php">Ralph Castain: "Re: [OMPI devel] RFC: Rename ompi/include/mpi_portable_platform.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
<li><strong>Reply:</strong> <a href="7427.php">Jeff Squyres: "Re: [OMPI devel] documenting the PMPI profiling interface"</a>
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
