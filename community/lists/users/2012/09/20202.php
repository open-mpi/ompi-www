<?
$subject_val = "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 12 12:38:03 2012" -->
<!-- isoreceived="20120912163803" -->
<!-- sent="Wed, 12 Sep 2012 18:37:48 +0200" -->
<!-- isosent="20120912163748" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1" -->
<!-- id="5050BA5C.8080702_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C15A7748-7422-498D-882D-FE4F6BB73142_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-12 12:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20203.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20201.php">George Bosilca: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20200.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 12/09/2012 17:57, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Here's the r numbers with notable MX changes recently:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/26698">https://svn.open-mpi.org/trac/ompi/changeset/26698</a>
</span><br>
<p>Reverting this one fixes the problem.
<br>
And adding --mca mtl ^mx to the command works too (Doug, can you try that?)
<br>
<p>The problem is that the MTL component calls ompi_common_mx_initialize()
<br>
only once in component_init() but it calls finalize() twice: once in
<br>
component_close() and once in ompi_mtl_mx_finalize(). The attached patch
<br>
seems to work.
<br>
<p>Signed-off-by: Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20202/fix_mtl_finalize.patch">fix_mtl_finalize.patch</a>
</ul>
<!-- attachment="fix_mtl_finalize.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20203.php">Brian Budge: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="20201.php">George Bosilca: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>In reply to:</strong> <a href="20200.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20207.php">Jeff Squyres: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
<li><strong>Reply:</strong> <a href="20212.php">Douglas Eadline: "Re: [OMPI users] [omx-devel] Open-mx issue with ompi 1.6.1"</a>
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
