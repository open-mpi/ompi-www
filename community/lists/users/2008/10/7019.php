<?
$subject_val = "Re: [OMPI users] Debian MPI -- mpirun missing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 12:30:45 2008" -->
<!-- isoreceived="20081017163045" -->
<!-- sent="Sat, 18 Oct 2008 03:30:35 +1100" -->
<!-- isosent="20081017163035" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debian MPI -- mpirun missing" -->
<!-- id="1224261035.5841.35.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="18680.47428.420995.768246_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debian MPI -- mpirun missing<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 12:30:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; Well when I use Open MPI I go with the new convention and call orterun
</span><br>
<span class="quotelev1">&gt; instead of mpirun. I think you should have.  Maybe a local alias in your
</span><br>
<span class="quotelev1">&gt; ~/.bashrc can do the trick.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Current packages do have mpirun.openmpi but we were unable to devise a
</span><br>
<span class="quotelev1">&gt; bullet-proof scheme between lam, mpich and Open MPI for sharing / updating /
</span><br>
<span class="quotelev1">&gt; ... the alternatives links as there are sublte differences that prevent us
</span><br>
<span class="quotelev1">&gt; from switching all these aliases consistently.
</span><br>
<p>Eh?  Surely it's a simple case of conflict?  If you want multiple
<br>
packages providing similar functionality, it's up to you to specify how
<br>
the user should chose which one they want to run.  Breaking any
<br>
particular package (or all packages) seems like a particularly poor
<br>
choice, but that's only my opinion.
<br>
<p>I would argue that orterun is a very long way from a &quot;new convention&quot;.
<br>
I'd draw attention to section 8.8 of the MPI 2.1 standard.
<br>
<p>But again, this is a discussion for the Debian list.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7020.php">Ethan Mallove: "Re: [OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7018.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>Reply:</strong> <a href="7021.php">Dirk Eddelbuettel: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
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
