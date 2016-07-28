<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 11:23:44 2015" -->
<!-- isoreceived="20150903152344" -->
<!-- sent="Thu, 3 Sep 2015 11:23:43 -0400" -->
<!-- isosent="20150903152343" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAB2ovot8wK38rtUuoKRbEZ6ba29KakqjscFPJuQCbk6U9vqWQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8B8D6746-0F59-4FC0-BE0E-A0D9CE7FB063_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 11:23:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27537.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27537.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is also the package Lmod, which provides similar functionality
<br>
to environment modules.  It is maintained by TACC.
<br>
<p><a href="https://www.tacc.utexas.edu/research-development/tacc-projects/lmod">https://www.tacc.utexas.edu/research-development/tacc-projects/lmod</a>
<br>
<p>but I think the current source code is at
<br>
<p><a href="https://github.com/TACC/Lmod">https://github.com/TACC/Lmod</a>
<br>
<p>-- bennet
<br>
<p><p><p>On Thu, Sep 3, 2015 at 11:13 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Sep 3, 2015, at 10:43 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I normaly use &quot;USE MPI&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is the answar fro intel HPC forum:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you are switching between intel and openmpi you must remember not to mix environment.  You might use modules to manage this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the source of the confusion here might well be an overload of the word &quot;modules&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the word &quot;module&quot; in the phrase &quot;You might use modules to manage this&quot; is referring to *environment modules*, not *Fortran modules*.  I.e.: <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where you can do stuff like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; # Use Open MPI
</span><br>
<span class="quotelev1">&gt; $ module load openmpi
</span><br>
<span class="quotelev1">&gt; $ mpicc my_program.c
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Use __some_other_MPI__
</span><br>
<span class="quotelev1">&gt; $ module load othermpi
</span><br>
<span class="quotelev1">&gt; $ mpicc my_program.c
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 4 a.out
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Environment modules are typically used to set things like PATH, LD_LIBRARY_PATH, and MANPATH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the poster on the Intel HPC forum was probably referring to you using environment modules to switch your PATH / LD_LIBRARY_PATH / MANPATH between Open MPI and Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As the data types encodings differ, you must take care that all objects are built against the same headers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here, the poster is essentially saying that if you want to use Open MPI, you have to compile and mpirun with Open MPI.  And if you want to use Open MPI, you have to (re)compile and mpirun with Intel MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short: Open MPI and Intel MPI are not binary compatible, and their mpirun's are not compatible, either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (note that this is an Open MPI mailing list; we can't answer questions about Intel MPI here)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My point with &quot;use mpi&quot; was that you should try replacing &quot;include 'mpif.h'&quot; with &quot;use mpi&quot; in your Fortran blocks.  Open MPI's &quot;use mpi&quot; implementation will do a lot of compile-time type checking that &quot;include 'mpif.h'&quot; will not.  Hence, it help determine if you're passing an incorrect parameter to an MPI subroutine, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27537.php">http://www.open-mpi.org/community/lists/users/2015/09/27537.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27537.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27537.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27539.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
