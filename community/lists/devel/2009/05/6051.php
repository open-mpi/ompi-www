<?
$subject_val = "[OMPI devel] totalview with OMPI 1.3 on rh5 linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 15 09:37:59 2009" -->
<!-- isoreceived="20090515133759" -->
<!-- sent="Fri, 15 May 2009 09:37:03 -0400" -->
<!-- isosent="20090515133703" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] totalview with OMPI 1.3 on rh5 linux" -->
<!-- id="4A0D6FFF.9020000_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] totalview with OMPI 1.3 on rh5 linux<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-15 09:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6050.php">Ashley Pittman: "[OMPI devel] Reading message queues?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Has anyone tried to run totalview with OMPI 1.3 on a RH5 linux system.  
<br>
I am seeing totalview unable to load libompi_dbg_msgq.so because 
<br>
ompi_free_list_grow is not found.  What's interesting is this same 
<br>
symbol is undefined for Solaris but things work.  Is ompi_free_list_grow 
<br>
actually used by libompi_dbg_msgq.so or is it some how pulled in as a 
<br>
side affect of including an ompi header file.
<br>
<p>Anyways, I am curious if anyone else is seeing this same issue or if I 
<br>
am building OMPI in a way that is causing this problem?
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Previous message:</strong> <a href="6050.php">Ashley Pittman: "[OMPI devel] Reading message queues?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>Reply:</strong> <a href="6052.php">Ralph Castain: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
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
