<?
$subject_val = "Re: [OMPI users] MPI_Allreduce on local machine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 11:21:48 2010" -->
<!-- isoreceived="20100727152148" -->
<!-- sent="Tue, 27 Jul 2010 11:21:44 -0400" -->
<!-- isosent="20100727152144" -->
<!-- name="Hugo Gagnon" -->
<!-- email="sourceforge.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce on local machine" -->
<!-- id="1280244104.6708.1386982823_at_webmail.messagingengine.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100727122322.GA46442_at_mech-cluster241.men.bris.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce on local machine<br>
<strong>From:</strong> Hugo Gagnon (<em>sourceforge.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 11:21:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13800.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13798.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 08/02/2010)"</a>
<li><strong>In reply to:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I appreciate your replies but my question has to do with the function
<br>
MPI_Allreduce of OpenMPI built on a Mac OSX 10.6 with ifort (intel
<br>
fortran compiler).
<br>
<pre>
-- 
  Hugo Gagnon
On Tue, 27 Jul 2010 13:23 +0100, &quot;Anton Shterenlikht&quot;
&lt;mexas_at_[hidden]&gt; wrote:
&gt; On Tue, Jul 27, 2010 at 08:11:39AM -0400, Jeff Squyres wrote:
&gt; &gt; On Jul 26, 2010, at 11:06 PM, Hugo Gagnon wrote:
&gt; &gt; 
&gt; &gt; &gt;   8         integer, parameter :: dp = kind(1.d0)
&gt; &gt; &gt;   9         real(kind=dp) :: inside(5), outside(5)
&gt; &gt; 
&gt; &gt; I'm not a fortran expert -- is kind(1.d0) really double precision?  According to <a href="http://gcc.gnu.org/onlinedocs/gcc-3.4.6/g77/Kind-Notation.html">http://gcc.gnu.org/onlinedocs/gcc-3.4.6/g77/Kind-Notation.html</a>, kind(2) is double precision (but that's for a different compiler, and I don't quite grok the &quot;.d0&quot; notation).
&gt; 
&gt; *quote*
&gt; kind (x) has type default integer and value equal to the kind
&gt; type parameter value of x.
&gt; *end quote*
&gt; 
&gt; p. 161 from Metcalf et al (2007) Fortran 95/2003 explained.
&gt; 
&gt; % cat tmp.f90
&gt;         program z
&gt; 
&gt;         integer, parameter :: dp = kind(1.d0)
&gt;         real(kind=dp) :: inside(5), outside(5)
&gt; 
&gt;         write(*,*)dp
&gt; 
&gt;         end program z
&gt; % g95 -L/usr/local/lib tmp.f90
&gt; % ./a.out
&gt;  8
&gt; % 
&gt; 
&gt; Kind 8 is (on most arch) 8-byte real, i.e. typically
&gt; double precision.
&gt; 
&gt; -- 
&gt; Anton Shterenlikht
&gt; Room 2.6, Queen's Building
&gt; Mech Eng Dept
&gt; Bristol University
&gt; University Walk, Bristol BS8 1TR, UK
&gt; Tel: +44 (0)117 331 5944
&gt; Fax: +44 (0)117 929 4423
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13800.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13798.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 08/02/2010)"</a>
<li><strong>In reply to:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>Reply:</strong> <a href="13824.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
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
