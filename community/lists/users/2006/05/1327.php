<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 30 15:41:53 2006" -->
<!-- isoreceived="20060530194153" -->
<!-- sent="Tue, 30 May 2006 15:41:32 -0400" -->
<!-- isosent="20060530194132" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support (g95) not installing" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FDDCE_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Fortran support (g95) not installing" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-30 15:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This unfortunately reflects the broken status of the F90 bindings on the
<br>
1.1 branch.  
<br>
&nbsp;
<br>
I have just committed a whole pile of F90 fixes to the trunk and the
<br>
v1.1 branch that will show up in tonight's nightly snapshots.  As far as
<br>
we can tell, these fixes make everything better for all compilers that
<br>
we could test (with some additional notes about the NAG compiler -- see
<br>
the README).
<br>
&nbsp;
<br>
<p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Terry Reeves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Friday, May 26, 2006 8:36 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Fortran support (g95) not installing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Actually there was further output. I've done this too many times
<br>
and I didn't verify that make.out ended where my screen output ended. I
<br>
have included make.out with the extra error messages appended. Meanwhile
<br>
I'm going to try using fink as someone suggested g9 from that route
<br>
might work. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1328.php">Michael Kluskens: "[OMPI users] MPI_REDUCE vs. MPI_IN_PLACE vs. F90 Interfaces"</a>
<li><strong>Previous message:</strong> <a href="1326.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Maybe in reply to:</strong> <a href="1313.php">Terry Reeves: "Re: [OMPI users] Fortran support (g95) not installing"</a>
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
