<?
$subject_val = "[OMPI devel] new paffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 11:42:19 2009" -->
<!-- isoreceived="20090512154219" -->
<!-- sent="Tue, 12 May 2009 11:42:14 -0400" -->
<!-- isosent="20090512154214" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] new paffinity" -->
<!-- id="1E2670D0-C172-465A-AE78-7B9DE7932B67_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] new paffinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-12 11:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just FYI: I can confirm that we're setting paffinity properly in the  
<br>
orted's:
<br>
<p>[8:38] svbu-mpi:~/svn/plpa % mpirun -np 3 --mca mpi_paffinity_alone 1  
<br>
plpa-taskset -p self
<br>
pid 12391's current affinity mask: 1
<br>
pid 12395's current affinity mask: 2
<br>
pid 12396's current affinity mask: 4
<br>
[8:41] svbu-mpi:~/svn/plpa %
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6010.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6008.php">Jeff Squyres: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
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
