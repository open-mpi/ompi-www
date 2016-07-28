<?
$subject_val = "[OMPI devel] configure question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 13:03:36 2010" -->
<!-- isoreceived="20100216180336" -->
<!-- sent="Tue, 16 Feb 2010 13:03:30 -0500" -->
<!-- isosent="20100216180330" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="[OMPI devel] configure question" -->
<!-- id="DDDF665F-1B98-4219-8B80-44F487C3ACE0_at_computer.org" -->
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
<strong>Subject:</strong> [OMPI devel] configure question<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 13:03:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Previous message:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Reply:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Reply:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I run configure under Snow Leopard (this is OMPI 1.3.4), I get the following:
<br>
<p>checking if C and Fortran 77 are link compatible... no
<br>
**********************************************************************
<br>
It appears that your Fortran 77 compiler is unable to link against
<br>
object files created by your C compiler.  This typically indicates
<br>
one of a few possibilities:
<br>
<p>&nbsp;&nbsp;- A conflict between CFLAGS and FFLAGS
<br>
&nbsp;&nbsp;- A problem with your compiler installation(s)
<br>
&nbsp;&nbsp;- Different default build options between compilers (e.g., C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;building for 32 bit and Fortran building for 64 bit)
<br>
&nbsp;&nbsp;- Incompatible compilers
<br>
<p>Such problems can usually be solved by picking compatible compilers
<br>
and/or CFLAGS and FFLAGS.  More information (including exactly what
<br>
command was given to the compilers and what error resulted when the
<br>
commands were executed) is available in the config.log file in this
<br>
directory.
<br>
**********************************************************************
<br>
configure: error: C and Fortran 77 compilers are not link compatible.  Can not continue.
<br>
<p>Anyone know of the top of their head what these options would be, or even if it is possible?
<br>
<p>Thanks,
<br>
Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Previous message:</strong> <a href="7439.php">Jeff Squyres: "[OMPI devel] 1.5.0 could be soon"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Reply:</strong> <a href="7441.php">Barrett, Brian W: "Re: [OMPI devel] configure question"</a>
<li><strong>Reply:</strong> <a href="7442.php">Ralf Wildenhues: "Re: [OMPI devel] configure question"</a>
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
