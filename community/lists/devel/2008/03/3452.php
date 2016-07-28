<?
$subject_val = "[OMPI devel] rankfile questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 09:32:16 2008" -->
<!-- isoreceived="20080318133216" -->
<!-- sent="Tue, 18 Mar 2008 09:32:04 -0400" -->
<!-- isosent="20080318133204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] rankfile questions" -->
<!-- id="3A3BFE61-63F1-47B7-96E1-3793360E1F02_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] rankfile questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 09:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3451.php">George Bosilca: "Re: [OMPI devel] bml_r2_btl.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Maybe reply:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that rankfile didn't compile properly on some platforms and  
<br>
issued warnings on other platforms.  Thanks to Ralph for cleaning it  
<br>
up...
<br>
<p>1. I see a getenv(&quot;slot_list&quot;) in the MPI side of the code; it looks  
<br>
like $slot_list is set by the odls for the MPI process.  Why isn't it  
<br>
an MCA parameter?  That's what all other values passed by the orted to  
<br>
the MPI process appear to be.
<br>
<p>2. I see that ompi_mpi_params.c is now registering 2 rmaps-level MCA  
<br>
parameters.  Why?  Shouldn't these be in ORTE somewhere?
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
<li><strong>Next message:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Previous message:</strong> <a href="3451.php">George Bosilca: "Re: [OMPI devel] bml_r2_btl.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3453.php">Jeff Squyres: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Maybe reply:</strong> <a href="3473.php">Lenny Verkhovsky: "Re: [OMPI devel] rankfile questions"</a>
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
