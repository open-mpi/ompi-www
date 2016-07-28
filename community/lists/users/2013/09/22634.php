<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 08:33:24 2013" -->
<!-- isoreceived="20130910123324" -->
<!-- sent="Tue, 10 Sep 2013 08:33:21 -0400" -->
<!-- isosent="20130910123321" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378816401.7190.20161869.75BFD8B0_at_webmail.messagingengine.com" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8797B0_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 08:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22635.php">Francesco Simula: "[OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22633.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I only get the correct output when I use the more &quot;conventional&quot; syntax:
<br>
<p>...
<br>
call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
<br>
...
<br>
<p>However, I get the wrong output when I use MPI_IN_PLACE:
<br>
<p>...
<br>
MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
<br>
...
<br>
<p>hence my question to this forum in the first place.
<br>
<p>I also tried the code snippet at
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1982">https://svn.open-mpi.org/trac/ompi/ticket/1982</a>
<br>
<p>and that doesn't work for me either, i.e. all I get is zeros.
<br>
<p><pre>
-- 
  Hugo Gagnon
On Tue, Sep 10, 2013, at 5:58, Jeff Squyres (jsquyres) wrote:
&gt; On Sep 7, 2013, at 5:14 AM, Hugo Gagnon
&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; $ openmpif90 test.f90
&gt; &gt; $ openmpirun -np 2 a.out
&gt; &gt;           0           4           6
&gt; &gt;           1           4           6
&gt; &gt; 
&gt; &gt; Now I'd be curious to know why your OpenMPI implementation handles
&gt; &gt; MPI_IN_PLACE correctly and not mine!
&gt; 
&gt; I don't understand -- this looks like the correct output to me.
&gt; 
&gt; Are you seeing some other problem?
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22635.php">Francesco Simula: "[OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>Previous message:</strong> <a href="22633.php">caohaijun: "Re: [OMPI users] how to build a relocatable OpenMPI RPM ?"</a>
<li><strong>In reply to:</strong> <a href="22632.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
