<?
$subject_val = "[OMPI users] location of ompi libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 18:58:39 2010" -->
<!-- isoreceived="20101004225839" -->
<!-- sent="Mon, 04 Oct 2010 15:58:34 -0700" -->
<!-- isosent="20101004225834" -->
<!-- name="David Turner" -->
<!-- email="dpturner_at_[hidden]" -->
<!-- subject="[OMPI users] location of ompi libraries" -->
<!-- id="4CAA5C1A.3080305_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI users] location of ompi libraries<br>
<strong>From:</strong> David Turner (<em>dpturner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 18:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In Open MPI 1.4.1, the directory lib/openmpi contains about 130
<br>
entries, including such things as mca_btl_openib.so.  In my
<br>
build of Open MPI 1.4.2, lib/openmpi contains exactly three
<br>
items:
<br>
libompi_dbg_msgq.a  libompi_dbg_msgq.la  libompi_dbg_msgq.so
<br>
<p>I have searched my 1.4.2 installation for mca_btl_openib.so,
<br>
to no avail.  And yet, 1.4.2 seems to work &quot;fine&quot;.  Is my
<br>
installation broken, or is the organization significantly
<br>
different between the two versions?  A quick scan of the
<br>
release notes didn't help.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Best regards,
David Turner
User Services Group        email: dpturner_at_[hidden]
NERSC Division             phone: (510) 486-4027
Lawrence Berkeley Lab        fax: (510) 486-4316
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14389.php">Storm Zhang: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14387.php">Ralph Castain: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
<li><strong>Reply:</strong> <a href="14392.php">Jeff Squyres: "Re: [OMPI users] location of ompi libraries"</a>
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
