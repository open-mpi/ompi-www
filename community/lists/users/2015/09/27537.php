<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 11:13:23 2015" -->
<!-- isoreceived="20150903151323" -->
<!-- sent="Thu, 3 Sep 2015 15:13:21 +0000" -->
<!-- isosent="20150903151321" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="8B8D6746-0F59-4FC0-BE0E-A0D9CE7FB063_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y5cqATwCY4o_5qokgSr0erjLX4JoSyOh4-q=n79yQsxTQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 11:13:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27536.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2015, at 10:43 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev1">&gt; I normaly use &quot;USE MPI&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the answar fro intel HPC forum:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are switching between intel and openmpi you must remember not to mix environment.  You might use modules to manage this.  
</span><br>
<p>I think the source of the confusion here might well be an overload of the word &quot;modules&quot;.
<br>
<p>I think the word &quot;module&quot; in the phrase &quot;You might use modules to manage this&quot; is referring to *environment modules*, not *Fortran modules*.  I.e.: <a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>Where you can do stuff like this:
<br>
<p>-----
<br>
# Use Open MPI
<br>
$ module load openmpi
<br>
$ mpicc my_program.c
<br>
$ mpirun -np 4 a.out
<br>
<p># Use __some_other_MPI__
<br>
$ module load othermpi
<br>
$ mpicc my_program.c
<br>
$ mpirun -np 4 a.out
<br>
-----
<br>
<p>Environment modules are typically used to set things like PATH, LD_LIBRARY_PATH, and MANPATH.
<br>
<p>I think the poster on the Intel HPC forum was probably referring to you using environment modules to switch your PATH / LD_LIBRARY_PATH / MANPATH between Open MPI and Intel MPI.
<br>
<p><span class="quotelev1">&gt; As the data types encodings differ, you must take care that all objects are built against the same headers.
</span><br>
<p>Here, the poster is essentially saying that if you want to use Open MPI, you have to compile and mpirun with Open MPI.  And if you want to use Open MPI, you have to (re)compile and mpirun with Intel MPI.
<br>
<p>In short: Open MPI and Intel MPI are not binary compatible, and their mpirun's are not compatible, either.
<br>
<p>(note that this is an Open MPI mailing list; we can't answer questions about Intel MPI here)
<br>
<p>My point with &quot;use mpi&quot; was that you should try replacing &quot;include 'mpif.h'&quot; with &quot;use mpi&quot; in your Fortran blocks.  Open MPI's &quot;use mpi&quot; implementation will do a lot of compile-time type checking that &quot;include 'mpif.h'&quot; will not.  Hence, it help determine if you're passing an incorrect parameter to an MPI subroutine, for example.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27536.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27538.php">Bennet Fauber: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
