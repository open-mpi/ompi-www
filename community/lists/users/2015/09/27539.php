<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  4 04:23:48 2015" -->
<!-- isoreceived="20150904082348" -->
<!-- sent="Fri, 4 Sep 2015 10:23:46 +0200" -->
<!-- isosent="20150904082346" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAG8o1y54bMmCzw-0Zp_U8vo-z_=ZkJ5s_Gqc_FZFTxBFbGyBvw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAB2ovot8wK38rtUuoKRbEZ6ba29KakqjscFPJuQCbk6U9vqWQg_at_mail.gmail.com" -->
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
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-04 04:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
let's me check all your mail, because there are a lot of thing that I can
<br>
not understand.
<br>
<p>As soon as possible I will reply, hopefully.
<br>
<p><p><p>Diego
<br>
<p><p>On 3 September 2015 at 17:23, Bennet Fauber &lt;bennet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; There is also the package Lmod, which provides similar functionality
</span><br>
<span class="quotelev1">&gt; to environment modules.  It is maintained by TACC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.tacc.utexas.edu/research-development/tacc-projects/lmod">https://www.tacc.utexas.edu/research-development/tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I think the current source code is at
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/TACC/Lmod">https://github.com/TACC/Lmod</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- bennet
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 3, 2015 at 11:13 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2015, at 10:43 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I normaly use &quot;USE MPI&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is the answar fro intel HPC forum:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you are switching between intel and openmpi you must remember not to
</span><br>
<span class="quotelev1">&gt; mix environment.  You might use modules to manage this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the source of the confusion here might well be an overload of
</span><br>
<span class="quotelev1">&gt; the word &quot;modules&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the word &quot;module&quot; in the phrase &quot;You might use modules to manage
</span><br>
<span class="quotelev1">&gt; this&quot; is referring to *environment modules*, not *Fortran modules*.  I.e.:
</span><br>
<span class="quotelev1">&gt; <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where you can do stuff like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; # Use Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; $ module load openmpi
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc my_program.c
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; # Use __some_other_MPI__
</span><br>
<span class="quotelev2">&gt; &gt; $ module load othermpi
</span><br>
<span class="quotelev2">&gt; &gt; $ mpicc my_program.c
</span><br>
<span class="quotelev2">&gt; &gt; $ mpirun -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Environment modules are typically used to set things like PATH,
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH, and MANPATH.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think the poster on the Intel HPC forum was probably referring to you
</span><br>
<span class="quotelev1">&gt; using environment modules to switch your PATH / LD_LIBRARY_PATH / MANPATH
</span><br>
<span class="quotelev1">&gt; between Open MPI and Intel MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As the data types encodings differ, you must take care that all objects
</span><br>
<span class="quotelev1">&gt; are built against the same headers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here, the poster is essentially saying that if you want to use Open MPI,
</span><br>
<span class="quotelev1">&gt; you have to compile and mpirun with Open MPI.  And if you want to use Open
</span><br>
<span class="quotelev1">&gt; MPI, you have to (re)compile and mpirun with Intel MPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In short: Open MPI and Intel MPI are not binary compatible, and their
</span><br>
<span class="quotelev1">&gt; mpirun's are not compatible, either.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (note that this is an Open MPI mailing list; we can't answer questions
</span><br>
<span class="quotelev1">&gt; about Intel MPI here)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My point with &quot;use mpi&quot; was that you should try replacing &quot;include
</span><br>
<span class="quotelev1">&gt; 'mpif.h'&quot; with &quot;use mpi&quot; in your Fortran blocks.  Open MPI's &quot;use mpi&quot;
</span><br>
<span class="quotelev1">&gt; implementation will do a lot of compile-time type checking that &quot;include
</span><br>
<span class="quotelev1">&gt; 'mpif.h'&quot; will not.  Hence, it help determine if you're passing an
</span><br>
<span class="quotelev1">&gt; incorrect parameter to an MPI subroutine, for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27537.php">http://www.open-mpi.org/community/lists/users/2015/09/27537.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27538.php">http://www.open-mpi.org/community/lists/users/2015/09/27538.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27540.php">Lane, William: "Re: [OMPI users] Son of Grid Engine, Parallel Environments and OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
