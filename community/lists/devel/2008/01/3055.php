<?
$subject_val = "[OMPI devel] carto [moved from ompi-core]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 26 15:13:08 2008" -->
<!-- isoreceived="20080126201308" -->
<!-- sent="Sat, 26 Jan 2008 15:13:00 -0500 (Eastern Standard Time)" -->
<!-- isosent="20080126201300" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] carto [moved from ompi-core]" -->
<!-- id="alpine.WNT.1.00.0801261512100.1836_at_alander" -->
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
<strong>Subject:</strong> [OMPI devel] carto [moved from ompi-core]<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-26 15:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3056.php">George Bosilca: "Re: [OMPI devel] [devel-core] carto (fwd)"</a>
<li><strong>Previous message:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the file directory in the carto framework the carto_file_lex.c is
<br>
included in the svn. This is the only place where this happens. It might
<br>
be a good idea, but I think we should be consistent everywhere.
<br>
<p>Therefore, the first question is: should we generate the .c from the .l
<br>
every time, or should we provide directly the .c in the svn ? In the case
<br>
we choose the second option, I prefer if we use one of the latest (and
<br>
greatest) versions of flex, as it generate more &quot;-pedantic&quot; friendly code,
<br>
and the code is actually even capable on compiling on Windows.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3056.php">George Bosilca: "Re: [OMPI devel] [devel-core] carto (fwd)"</a>
<li><strong>Previous message:</strong> <a href="3054.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17250"</a>
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
