<?
$subject_val = "[OMPI devel] ticket #972";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 15:21:13 2008" -->
<!-- isoreceived="20080729192113" -->
<!-- sent="Tue, 29 Jul 2008 15:20:54 -0400" -->
<!-- isosent="20080729192054" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] ticket #972" -->
<!-- id="488F6D96.2070804_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] ticket #972<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-29 15:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Previous message:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Reply:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, we've pinged ticket #972 several times to see if the issue it covers 
<br>
has been fixed and have not really gotten a response in the last few 
<br>
months.  While talking with Jeff about a recent thread on the users list 
<br>
about this issue he has found the code in btl_tcp_proc.c that determines 
<br>
whether the tcp btl can be used has changed significantly between 1.2 
<br>
and 1.3.  So a question is has these changes changed the rules of 
<br>
whether connections between two nodes should use the tcp btl as 
<br>
described on the FAQ?  If so we should update the FAQ.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Previous message:</strong> <a href="4484.php">Jeff Squyres: "Re: [OMPI devel] trunk hangs since r19010"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
<li><strong>Reply:</strong> <a href="4486.php">Jeff Squyres: "[OMPI devel] TCP BTL routability (was: ticket #972)"</a>
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
