<?
$subject_val = "[OMPI devel] Bug in man page of MPI_Type_create_hindexed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 16 07:55:08 2014" -->
<!-- isoreceived="20140416115508" -->
<!-- sent="Wed, 16 Apr 2014 13:55:06 +0200" -->
<!-- isosent="20140416115506" -->
<!-- name="Bastian Beischer" -->
<!-- email="bastian.beischer_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug in man page of MPI_Type_create_hindexed" -->
<!-- id="CAK9AuB_fsfiyMGo63QJ5NArAyknobxwmH4RJqXPdM8uNdNTBfw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Bug in man page of MPI_Type_create_hindexed<br>
<strong>From:</strong> Bastian Beischer (<em>bastian.beischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-16 07:55:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14539.php">Ralph Castain: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>Reply:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>In open-mpi version 1.8 the man page of MPI_Type_create_hindexed gives this
<br>
declaration of the function:
<br>
<p>int MPI_Type_create_hindexed(int count, const int array_of_blocklengths[],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;const int array_of_displacements[], MPI_Datatype oldtype,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype *newtype)
<br>
<p>However I think the array_of_displacements should be of type MPI_Aint?
<br>
<p>This was relevant to me because I wanted to create a datatype with large
<br>
offsets &gt; INT_MAX and I didn't know I could use MPI_Type_create_hindexed
<br>
until a colleague pointed me to the MPI standard which says that the
<br>
displacements are of type MPI_Aint.
<br>
<p>Cheers
<br>
Bastian
<br>
<p><pre>
-- 
Bastian Beischer
RWTH Aachen University of Technology
@RWTH Aachen
Office: 28 C 203
Phone: +49-241-80-27205
E-mail: beischer_at_[hidden]
Address: I. Physikalisches Institut B, Sommerfeldstr. 14, D-52074 Aachen
@CERN
Office: Bdg 32-4-B12
Phone: +41-22-76-75750
E-mail: bastian.beischer_at_[hidden]
Address: CERN, CH-1211 Geneve 23
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14541.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update SLURM FAQ entry?"</a>
<li><strong>Previous message:</strong> <a href="14539.php">Ralph Castain: "Re: [OMPI devel] 1-question developer poll"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
<li><strong>Reply:</strong> <a href="14552.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Bug in man page of MPI_Type_create_hindexed"</a>
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
