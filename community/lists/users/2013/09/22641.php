<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 11 12:26:38 2013" -->
<!-- isoreceived="20130911162638" -->
<!-- sent="Wed, 11 Sep 2013 16:26:37 +0000" -->
<!-- isosent="20130911162637" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F88D8E2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1378816401.7190.20161869.75BFD8B0_at_webmail.messagingengine.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-11 12:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>In reply to:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 10, 2013, at 2:33 PM, Hugo Gagnon &lt;opensource.openmpi_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; I only get the correct output when I use the more &quot;conventional&quot; syntax:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>

<br>
What is a_loc?  I'm assuming you know it can't be the same buffer as a.
<br>

<br>
<span class="quotelev1">&gt; However, I get the wrong output when I use MPI_IN_PLACE:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>

<br>
This is definitely a puzzle, because I just installed gcc 4.8.1 on my 10.8.4 OS X MBP, compiled OMPI 1.6.5 from the open-mpi.org web site, and ran the test program, and I get the correct answers:
<br>

<br>
-----
<br>
[6:23] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpif90 in_place.f90
<br>
[6:23] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 2 ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           4           6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           4           6
<br>
[6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 3 ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           7          10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           7          10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2           7          10
<br>
[6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpirun -np 4 ./a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0          10          14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1          10          14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2          10          14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3          10          14
<br>
[6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpicc --version
<br>
gcc-mp-4.8 (MacPorts gcc48 4.8.1_3) 4.8.1
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>

<br>
[6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; mpif90 --version
<br>
GNU Fortran (MacPorts gcc48 4.8.1_3) 4.8.1
<br>
Copyright (C) 2013 Free Software Foundation, Inc.
<br>

<br>
GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
<br>
You may redistribute copies of GNU Fortran
<br>
under the terms of the GNU General Public License.
<br>
For more information about these matters, see the file named COPYING
<br>

<br>
[6:24] jsquyres-mac:~/mpi &#226;&#157;&#175;&#226;&#157;&#175;&#226;&#157;&#175; 
<br>
-----
<br>

<br>
Since I'm unable to replicate the problem, can you dig into the OMPI internals and see what's going wrong (e.g., via gdb or some other debugger)?
<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Max number of processes per host for an OMPI run?"</a>
<li><strong>In reply to:</strong> <a href="22634.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22642.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
