<?
$subject_val = "Re: [OMPI devel] regression with derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 03:32:11 2014" -->
<!-- isoreceived="20140508073211" -->
<!-- sent="Thu, 08 May 2014 16:32:22 +0900" -->
<!-- isosent="20140508073222" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] regression with derived datatypes" -->
<!-- id="536B3306.4010908_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkUXSZdb1THU92fyYbHmPWDBXNXjsyvhG+VM+7z8ErDJTA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] regression with derived datatypes<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 03:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>you do not need any hardware, just download MPSS from Intel and install it.
<br>
make sure the mic kernel module is loaded *and* you can read/write to the
<br>
newly created /dev/mic/* devices.
<br>
<p>/* i am now running this on a virtual machine with no MIC whatsoever */
<br>
<p>i was able to improve things a bit for the new attached test case
<br>
/* send MPI_PACKED / recv newtype */
<br>
with the attached unpack.patch.
<br>
<p>it has to be applied on r31678 (aka the latest checkout of the v1.8 branch)
<br>
<p>with this patch (zero regression test so far, it might solve one problem
<br>
but break anything else !)
<br>
<p>mpirun -np 2 -host localhost --mca btl,scif,vader ./test_scif2
<br>
works fine :-)
<br>
<p>but
<br>
<p>mpirun -np 2 -host localhost --mca btl scif,vader ./test_scif2
<br>
still crashes (and it did not crash before r31496)
<br>
<p>i will provide the output you requested shortly
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14744/test_scif2.c">test_scif2.c</a>
</ul>
<!-- attachment="test_scif2.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14744/unpack.patch">unpack.patch</a>
</ul>
<!-- attachment="unpack.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="14743.php">George Bosilca: "Re: [OMPI devel] regression with derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
<li><strong>Reply:</strong> <a href="14745.php">Hjelm, Nathan T: "Re: [OMPI devel] regression with derived datatypes"</a>
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
