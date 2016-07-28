<?
$subject_val = "[OMPI devel] PML Start error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 17:34:53 2009" -->
<!-- isoreceived="20090227223453" -->
<!-- sent="Fri, 27 Feb 2009 14:34:00 -0800" -->
<!-- isosent="20090227223400" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] PML Start error?" -->
<!-- id="49A86A58.9030509_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] PML Start error?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 17:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>Previous message:</strong> <a href="5534.php">Number Cruncher: "[OMPI devel] Minor patch for vtunify use of tolower()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Reply:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm looking at pml_ob1_start.c.  It loops over requests and starts 
<br>
them.  It makes some decision about whether an old request can be reused 
<br>
or if a new one must be allocated/initialized.  So, there is a variable 
<br>
named reuse_old_request.  It's initialized to &quot;true&quot;, but if a new 
<br>
request must be alloced/inited, then it's set to false.
<br>
<p>The thing is, this variable is initialized to true only once, at entry 
<br>
to the function and outside the loop over requests.  This strikes me as 
<br>
wrong.  It appears that if ever the variable is set to false, it will 
<br>
remain so until the end of the function.  I would think the intent is 
<br>
for the variable to be reset to true at the start of every iteration.
<br>
<p>Yes/no?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>Previous message:</strong> <a href="5534.php">Number Cruncher: "[OMPI devel] Minor patch for vtunify use of tolower()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
<li><strong>Reply:</strong> <a href="5537.php">Jeff Squyres: "Re: [OMPI devel] PML Start error?"</a>
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
