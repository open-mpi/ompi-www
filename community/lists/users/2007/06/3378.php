<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  5 18:42:16 2007" -->
<!-- isoreceived="20070605224216" -->
<!-- sent="Tue, 5 Jun 2007 15:42:04 -0700" -->
<!-- isosent="20070605224204" -->
<!-- name="Ben Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="20070605224204.GB959_at_dancer.ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7955DEAC-B1FC-4246-BFC1-21EF0F991D7C_at_cisco.com" -->
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
<strong>From:</strong> Ben Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-05 18:42:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff is right-- if you've already confirmed ompi,
<br>
just use the ompi specific arguments to get the
<br>
MPI LDFLAGS out. I withdraw the comment about adding
<br>
a feature to ompi_info.
<br>
<p>It is unfortunate, but true, that the mpi compiler wrappers
<br>
give no hint of the existence of -show, --showme:link, etc
<br>
before passing on the --help argument to the underlying
<br>
compilers.
<br>
<p>Granted on a proper installation, 'man mpif90' will tell
<br>
you about the -show switches, but there's an awful lot
<br>
of private installations of mpi where $mpiprefix/man
<br>
doesn't end up in the manpath and $mpiprefix/bin doesn't
<br>
end up in the regular PATH.
<br>
<p>Ben
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3379.php">smairal_at_[hidden]: "[OMPI users] OpenMPI with multiple threads (MPI_THREAD_MULTIPLE)"</a>
<li><strong>Previous message:</strong> <a href="3377.php">Lie-Quan Lee: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
