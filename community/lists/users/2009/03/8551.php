<?
$subject_val = "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 15:46:27 2009" -->
<!-- isoreceived="20090323194627" -->
<!-- sent="Mon, 23 Mar 2009 20:46:18 +0100" -->
<!-- isosent="20090323194618" -->
<!-- name="Olaf Lenz" -->
<!-- email="lenzo_at_[hidden]" -->
<!-- subject="[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)" -->
<!-- id="49C7E70A.4040003_at_mpip-mainz.mpg.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="84713330-4FF7-4A38-989C-5F046B9DF978_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)<br>
<strong>From:</strong> Olaf Lenz (<em>lenzo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 15:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Reply:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Sorry for taking up this old thread, but I think the solution is not yet 
<br>
satisfactory.
<br>
<p>To summarize the problem: OpenMPI has a plugin architecture. The plugins 
<br>
rely on the fact, that the OpenMPI library is loaded into the global 
<br>
namespace and are accessible to the plugins. If the mpi lib is 
<br>
dynamically loaded into a private namespace (as for example when using 
<br>
it in a python module), the plugins can't find the symbols of the library.
<br>
<p>So far, the suggested solution is, that the OpenMPI users should open 
<br>
libmpi.so into the global namespace to avoid the problem, or to compile 
<br>
OpenMPI using --enable-shared --enable-static. Both approaches have 
<br>
their problems, that I detail below.
<br>
<p>What I do not really get is why not to solve the problem on the side of 
<br>
OpenMPI. As far as I see it, this problem has already been discussed here:
<br>
<p><a href="http://www.open-mpi.org/community/lists/devel/2005/09/0359.php">http://www.open-mpi.org/community/lists/devel/2005/09/0359.php</a>
<br>
<p>and the solution that is described there still looks as though it should 
<br>
still work now, or shouldn't it? Just link all the OpenMPI plugins 
<br>
against the base OpenMPI libraries, and it should work. Or am I wrong?
<br>
<p>The problems with the suggested solutions:
<br>
<p>* Opening libmpi into the global namespace has exactly the problems that 
<br>
come with loading symbols into the global namespace. After all, there is 
<br>
some sense in not putting all symbols into the global namespace...
<br>
<p>* Furthermore, it requires the modification of the program/plugin 
<br>
loading the mpi library. In some cases, it might not be simple to do 
<br>
this modification, as it would have to be done in a package outside of 
<br>
the scope of the user. After all, some packages might decide better to 
<br>
ignore OpenMPI than to adapt their code to OpenMPI. So, I think it would 
<br>
be the best solution if OpenMPI would try to be as compatible to other 
<br>
MPI implementations as possible.
<br>
<p>* On many medium-size clusters, it is not easily possible for a user to 
<br>
install their own version of MPI, and the admins are often reluctant to 
<br>
install anything which is not of the shelf. Therefore, if it is 
<br>
necessary to compile OpenMPI with non-default flags to make it work with 
<br>
some plugin-enabled programs, I would guess, that this simply won't 
<br>
happen on many of this type of clusters.
<br>
<p><p>Olaf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8552.php">Shaun Jackman: "[OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/8186.php">Jeff Squyres: "Re: [OMPI users] Problems in 1.3 loading shared libs when usingVampirServer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
<li><strong>Reply:</strong> <a href="8582.php">Brian W. Barrett: "Re: [OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when usingVampirServer)"</a>
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
