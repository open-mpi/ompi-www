<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 10:02:20 2006" -->
<!-- isoreceived="20060525140220" -->
<!-- sent="Thu, 25 May 2006 10:02:08 -0400" -->
<!-- isosent="20060525140208" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran support not installing" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C42A1_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Fortran support not installing" -->
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
<strong>Date:</strong> 2006-05-25 10:02:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I actually had to set FCFLAGS, not LDFLAGS, to get arbitrary flags
<br>
passed down to the Fortran tests in configure.
<br>
&nbsp;
<br>
Can you try that?  (I'm not 100% sure -- you may need to specify LDFLAGS
<br>
*and* FCFLAGS...?)
<br>
&nbsp;
<br>
We have made substantial improvements to the configure tests with
<br>
regards to the MPI F90 bindings in the upcoming 1.1 release.  Most of
<br>
the work is currently off in a temporary branch in our code repository
<br>
(meaning that it doesn't show up yet in the nightly trunk tarballs), but
<br>
it will hopefully be brought back to the trunk soon.
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden]
<br>
[mailto:users-bounces_at_[hidden]] On Behalf Of Terry Reeves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Wednesday, May 24, 2006 4:21 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Fortran support not installing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HI,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unfortunately using  lSystemStubs still failed during configure.
<br>
Output enclosed
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1294.php">Paul: "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Previous message:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1301.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
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
