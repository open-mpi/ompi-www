<?
$subject_val = "[OMPI devel] Nearly unlimited growth of pml free list";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 10:09:16 2013" -->
<!-- isoreceived="20130911140916" -->
<!-- sent="Wed, 11 Sep 2013 16:22:31 +0200" -->
<!-- isosent="20130911142231" -->
<!-- name="Max Staufer" -->
<!-- email="max.staufer_at_[hidden]" -->
<!-- subject="[OMPI devel] Nearly unlimited growth of pml free list" -->
<!-- id="52307CA7.4030300_at_gmx.net" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Nearly unlimited growth of pml free list<br>
<strong>From:</strong> Max Staufer (<em>max.staufer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 10:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12882.php">Micha&#197;&#130; Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Maybe reply:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as I already asked in the users list, I was told thats not the 
<br>
right place to ask, I came across a &quot;missbehaviour&quot; of openmpi
<br>
version 1.4.5 and 1.6.5 alike.
<br>
<p>the mca_pml_ob1_send function keeps allocating memory in the pml free 
<br>
list. It does that indefinitly. In my case the list
<br>
grew to about 100Gb.
<br>
<p>I can controll the maximum using the pml_ob1_free_list_max parameter, 
<br>
but then the application just stops working when this number of entries 
<br>
in the list is reached.
<br>
<p>The interesting part is that the growth only happens in a single place 
<br>
in the code, which is RECURSIVE SUBROUTINE.
<br>
<p>And the called function is an MPI_ALLREDUCE(... MPI_SUM)
<br>
<p>Apparently its not easy to create a test program that shows the same 
<br>
behaviour, just recursion is not enought.
<br>
<p>Is there a mca parameter that allows to limit the total list size 
<br>
without making the app. stop ?
<br>
<p>or is there a way to enforce the lock on the free list entries ?
<br>
<p>Thanks for all the help
<br>
<p>Max
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Previous message:</strong> <a href="12882.php">Micha&#197;&#130; Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Reply:</strong> <a href="12884.php">Rolf vandeVaart: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
<li><strong>Maybe reply:</strong> <a href="12888.php">Max Staufer: "Re: [OMPI devel] Nearly unlimited growth of pml free list"</a>
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
