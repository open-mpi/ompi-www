<?
$subject_val = "[OMPI devel] RFC: windows branch merge";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 16:59:51 2008" -->
<!-- isoreceived="20081210215951" -->
<!-- sent="Wed, 10 Dec 2008 22:59:45 +0100" -->
<!-- isosent="20081210215945" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: windows branch merge" -->
<!-- id="49403BD1.9030702_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: windows branch merge<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 16:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<li><strong>Previous message:</strong> <a href="5033.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris malloc.h issue)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We just now merged the windows branch into trunk, split into 4 patches 
<br>
(r20108 to r20111) to keep them separate. Although incoming changes to 
<br>
trunk incurred some compile errors on windows which we fixed, we tested 
<br>
the following before committing:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows x86-64, static libs compilation and running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Windows x86-64, shared libs compilation and running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Linux x86-64, compilation and running
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
Windows test was done using CMake, selecting C, C++ and Fortran. The 
<br>
ompi wrappers have been tested with Visual Studio, orte tools seem to 
<br>
work. The MCA components that working under Windows are now marked with 
<br>
file .windows in corresponding folders.
<br>
<p>To keep track of the proposed merge into a v1.3.x release, the ticket 
<br>
#1708 has been opened. If this is decided to be added to a later 
<br>
release, additional patches may be added to the ticket.
<br>
<p>Thank you very much.
<br>
<p><p>With Best Regards,
<br>
Rainer and Shiqing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5035.php">Ralph Castain: "[OMPI devel] 1.3 staging area?"</a>
<li><strong>Previous message:</strong> <a href="5033.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20003 (Solaris malloc.h issue)"</a>
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
