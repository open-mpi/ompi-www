<?
$subject_val = "[OMPI devel] Proc modex change";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 14:03:35 2008" -->
<!-- isoreceived="20080320180335" -->
<!-- sent="Thu, 20 Mar 2008 13:03:26 -0500 (CDT)" -->
<!-- isosent="20080320180326" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Proc modex change" -->
<!-- id="Pine.LNX.4.64.0803201300430.10931_at_marvin.we-be-smart.org" -->
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
<strong>Subject:</strong> [OMPI devel] Proc modex change<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-20 14:03:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3483.php">Ralph H Castain: "[OMPI devel] RFC: Removal of orte_sys_info structure"</a>
<li><strong>Previous message:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
<li><strong>Reply:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>Does anyone know why we go through the modex receive and for the local 
<br>
process in ompi_proc_get_info()?  It doesn't seem like it's necessary, and 
<br>
it causes some problems on platforms that don't implement the modex (since 
<br>
it zeros out useful information determined during the init step).  If no 
<br>
one has any objections, I'd like to commit the attached patch that fixes 
<br>
that problem.
<br>
<p><p>Thanks,
<br>
<p>Brian
<br>

<br><hr>
<ul>
<li>TEXT/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3482/proc_local_no_modex.diff">proc_local_no_modex.diff</a>
</ul>
<!-- attachment="proc_local_no_modex.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3483.php">Ralph H Castain: "[OMPI devel] RFC: Removal of orte_sys_info structure"</a>
<li><strong>Previous message:</strong> <a href="3481.php">Ralf Wildenhues: "Re: [OMPI devel] Libtool for 1.3 / trunk builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
<li><strong>Reply:</strong> <a href="3525.php">Jeff Squyres: "Re: [OMPI devel] Proc modex change"</a>
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
