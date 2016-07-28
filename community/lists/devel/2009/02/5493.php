<?
$subject_val = "[OMPI devel] 1.3 runtime message ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 15:59:35 2009" -->
<!-- isoreceived="20090219205935" -->
<!-- sent="Thu, 19 Feb 2009 15:57:40 -0500" -->
<!-- isosent="20090219205740" -->
<!-- name="Jim Langston" -->
<!-- email="Jim.Langston_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3 runtime message ?" -->
<!-- id="499DC7C4.7070104_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3 runtime message ?<br>
<strong>From:</strong> Jim Langston (<em>Jim.Langston_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 15:57:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5492.php">Jeff Squyres: "Re: [OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After building 1.3, running the example I get this message:
<br>
<p>[[55888,1],0]: A high-performance Open MPI point-to-point messaging module
<br>
was unable to find any relevant network interfaces:
<br>
<p>Module: uDAPL
<br>
&nbsp;&nbsp;Host: alpha
<br>
<p>Another transport will be used instead, although this may result in
<br>
lower performance.
<br>
--------------------------------------------------------------------------
<br>
Hello, world, I am 0 of 2
<br>
Hello, world, I am 1 of 2
<br>
[alpha:09794] 1 more process has sent help message help-mpi-btl-base.txt 
<br>
/ btl:no-nics
<br>
[alpha:09794] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see 
<br>
all help / error messages
<br>
<p><p><p>Is there something I need to do at runtime to eliminate the 
<br>
point-to-point message ?
<br>
<p>Thanks,
<br>
<p>Jim
<br>
<p><pre>
-- 
/////////////////////////////////////////////
Jim Langston
Sun Microsystems, Inc.
(877) 854-5583 (AccessLine)
(513) 702-4741 (Cell)
AIM: jl9594
jim.langston_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Previous message:</strong> <a href="5492.php">Jeff Squyres: "Re: [OMPI devel] ORTE meeting Feb 25-27, 2008"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
<li><strong>Reply:</strong> <a href="5494.php">Don Kerr: "Re: [OMPI devel] 1.3 runtime message ?"</a>
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
