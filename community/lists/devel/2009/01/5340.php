<?
$subject_val = "[OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 14:30:54 2009" -->
<!-- isoreceived="20090130193054" -->
<!-- sent="Fri, 30 Jan 2009 14:30:49 -0500" -->
<!-- isosent="20090130193049" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="200901301430.49974.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Move of ompi_bitmap_t<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 14:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5339.php">Rainer Keller: "[OMPI devel] Change of API in mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5350.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5352.php">Smith, Jerry Don II: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5356.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On behalf of Laurent Broto
<br>
<p>RFC: Move of ompi_bitmap_t
<br>
<p>WHAT: Move ompi_bitmap_t into opal or onet-layer 
<br>
<p>WHY: Remove dependency on ompi-layer.
<br>
<p>WHERE: ompi/class
<br>
<p>WHEN: Open MPI-1.4 
<br>
&nbsp;
<br>
TIMEOUT: February 3, 2009. 
<br>
<p>-------------------------------------
<br>
Details:
<br>
WHY:
<br>
The ompi_bitmap_t is being used in various places within opal/orte/ompi. With 
<br>
the proposed splitting of BTLs into a separate library, we are currently 
<br>
investigating several of the differences between ompi/class/* and opal/class/*
<br>
<p>One of the items is the ompi_bitmap_t which is quite similar to the 
<br>
opal_bitmap_t.
<br>
The question is, whether we can remove favoring a solution just in opal.
<br>
<p>WHAT:
<br>
The data structures in the opal-version are the same, 
<br>
so is the interface,
<br>
the implementation is *almost* the same....
<br>
<p>The difference is the Fortran handles ;-]!
<br>
<p>Maybe we're missing something but could we have a discussion, on why Fortran 
<br>
sizes are playing a role here, and if this is a hard requirement, how we could 
<br>
settle that into that current interface (possibly without a notion of Fortran, 
<br>
but rather, set some upper limit that the bitmap may grow to?) 
<br>
<p>With best regards,
<br>
Laurent and Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: (865) 241-6293
Oak Ridge National Lab          Fax: (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5339.php">Rainer Keller: "[OMPI devel] Change of API in mpool"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5350.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5352.php">Smith, Jerry Don II: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5356.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
