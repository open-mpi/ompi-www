<?
$subject_val = "[OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 11:54:40 2007" -->
<!-- isoreceived="20071115165440" -->
<!-- sent="Thu, 15 Nov 2007 08:54:34 -0800" -->
<!-- isosent="20071115165434" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="[OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="df8c8a6d0711150854o2e2d4249q304e328a406ed2cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Suggestions on multi-compiler/multi-mpi build?<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 11:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm trying to set up a cluster for a group of users with very
<br>
different needs.  So far, it looks like I need gcc, pgi, and intel to
<br>
work with openmpi and mpich, with each user able to control what
<br>
combination they get.  This is turning out to be much more difficult
<br>
than I expected.
<br>
<p>Someone has pointed me to enviornment-modules (&quot;Modules&quot;), which looks
<br>
like it will be a critical part of the solution.  I even noticed that
<br>
the provided openmpi.spec file has some direct support for modules,
<br>
which makes me quite happy!
<br>
<p>However, I still have many questions about how to set things up.
<br>
<p>First, I get the impression that openmpi will need to be compiled with
<br>
each compiler that will use it.  If this is true, I'm not quite sure
<br>
how to go about it.  I could install in different directories for the
<br>
user commands, but what about the libraries?  I don't think I have a
<br>
feesable way of selecting which library to use on the fly on the
<br>
entire cluster for each user, so it seems like it would be better to
<br>
have all the libraries available.  In addition, I will need RPMs to
<br>
deploy efficiently on the cluster.  I suspect I can change the
<br>
versioning info and build with each compiler, but at this point, I
<br>
don't even know how to reliably select what compiler rpmbuild will use
<br>
(I've only succeeded in using gcc).
<br>
<p>Finally, using modules, how do I set it up so that if a user changes
<br>
compilers, but stays with openmpi, it will load the correct openmpi
<br>
paths?  I know I can set up the openmpi module file to load after the
<br>
compiler module and based on that select different paths based on the
<br>
currently-loaded compiler module.  If the user changes the compiler
<br>
module, will that cause the mpi module to also be reloaded so the new
<br>
settings will be loaded?  Or do I need this at all?
<br>
<p>Thanks for all your help!
<br>
--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Previous message:</strong> <a href="4479.php">Tim Prins: "Re: [OMPI users] OpenMPI - compilation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
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
