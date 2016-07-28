<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 13:22:03 2013" -->
<!-- isoreceived="20130911172203" -->
<!-- sent="Wed, 11 Sep 2013 13:22:02 -0400" -->
<!-- isosent="20130911172202" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378920122.21905.20755993.0E87C30A_at_webmail.messagingengine.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F88D8E2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-09-11 13:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 11, 2013, at 12:26, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Sep 10, 2013, at 2:33 PM, Hugo Gagnon
</span><br>
<span class="quotelev1">&gt; &lt;opensource.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I only get the correct output when I use the more &quot;conventional&quot; syntax:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is a_loc?  I'm assuming you know it can't be the same buffer as a.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; However, I get the wrong output when I use MPI_IN_PLACE:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is definitely a puzzle, because I just installed gcc 4.8.1 on my
</span><br>
<span class="quotelev1">&gt; 10.8.4 OS X MBP,
</span><br>
<p>I also just recompiled gcc 4.8.1_3 from MacPorts, and will recompile
<br>
openmpi 1.6.5 myself rather than using MacPorts' version.  May I ask
<br>
what are the exact options you passed to ./configure?
<br>
<p>I'll let you know if that fixes the problem.  Thank you.
<br>
<p>&nbsp;compiled OMPI 1.6.5 from the open-mpi.org web site, and
<br>
<span class="quotelev1">&gt; ran the test program, and I get the correct answers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [6:23] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpif90 in_place.f90
</span><br>
<span class="quotelev1">&gt; [6:23] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;            0           4           6
</span><br>
<span class="quotelev1">&gt;            1           4           6
</span><br>
<span class="quotelev1">&gt; [6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 3 ./a.out
</span><br>
<span class="quotelev1">&gt;            0           7          10
</span><br>
<span class="quotelev1">&gt;            1           7          10
</span><br>
<span class="quotelev1">&gt;            2           7          10
</span><br>
<span class="quotelev1">&gt; [6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 ./a.out
</span><br>
<span class="quotelev1">&gt;            0          10          14
</span><br>
<span class="quotelev1">&gt;            1          10          14
</span><br>
<span class="quotelev1">&gt;            2          10          14
</span><br>
<span class="quotelev1">&gt;            3          10          14
</span><br>
<span class="quotelev1">&gt; [6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc --version
</span><br>
<span class="quotelev1">&gt; gcc-mp-4.8 (MacPorts gcc48 4.8.1_3) 4.8.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is
</span><br>
<span class="quotelev1">&gt; NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpif90 --version
</span><br>
<span class="quotelev1">&gt; GNU Fortran (MacPorts gcc48 4.8.1_3) 4.8.1
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2013 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
</span><br>
<span class="quotelev1">&gt; You may redistribute copies of GNU Fortran
</span><br>
<span class="quotelev1">&gt; under the terms of the GNU General Public License.
</span><br>
<span class="quotelev1">&gt; For more information about these matters, see the file named COPYING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since I'm unable to replicate the problem, can you dig into the OMPI
</span><br>
<span class="quotelev1">&gt; internals and see what's going wrong (e.g., via gdb or some other
</span><br>
<span class="quotelev1">&gt; debugger)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22641.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22643.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
