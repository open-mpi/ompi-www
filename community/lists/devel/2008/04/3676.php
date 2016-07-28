<?
$subject_val = "[OMPI devel] Memchecker errors on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 10:28:09 2008" -->
<!-- isoreceived="20080407142809" -->
<!-- sent="Mon, 07 Apr 2008 08:27:47 -0600" -->
<!-- isosent="20080407142747" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Memchecker errors on trunk" -->
<!-- id="C41F8B83.CF9F%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Memchecker errors on trunk<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-07 10:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>We have a problem this morning on the trunk - recent commits r18084-7
<br>
involving the ompi/include/ompi/memchecker.h file contain arithmetic
<br>
involving a void* pointer and other problems:
<br>
<p>../../../../ompi/include/ompi/memchecker.h: In function
<br>
'memchecker_convertor_call':
<br>
../../../../ompi/include/ompi/memchecker.h:46: warning: ISO C90 forbids
<br>
mixed declarations and code
<br>
../../../../ompi/include/ompi/memchecker.h:47: warning: ISO C90 forbids
<br>
mixed declarations and code
<br>
../../../../ompi/include/ompi/memchecker.h:56: warning: pointer of type
<br>
'void *' used in arithmetic
<br>
../../../../ompi/include/ompi/memchecker.h:45: warning: unused variable
<br>
'pStack'
<br>
<p>Shiqing: could you please fix this?
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Previous message:</strong> <a href="3675.php">Gleb Natapov: "Re: [OMPI devel] Affect of compression on modex and launch messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
<li><strong>Reply:</strong> <a href="3677.php">George Bosilca: "Re: [OMPI devel] Memchecker errors on trunk"</a>
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
