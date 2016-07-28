<?
$subject_val = "[OMPI users] equivalent to mpichgm --gm-recv blocking?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 16:23:51 2008" -->
<!-- isoreceived="20080317202351" -->
<!-- sent="Mon, 17 Mar 2008 13:23:38 -0700" -->
<!-- isosent="20080317202338" -->
<!-- name="Siekas, Greg" -->
<!-- email="greg.siekas_at_[hidden]" -->
<!-- subject="[OMPI users] equivalent to mpichgm --gm-recv blocking?" -->
<!-- id="258BABDDC780384FBF0FF15CCFDFABE104EE192C_at_XCH-NW-7V2.nw.nos.boeing.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] equivalent to mpichgm --gm-recv blocking?<br>
<strong>From:</strong> Siekas, Greg (<em>greg.siekas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 16:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5218.php">Audet, Martin: "[OMPI users] RE :  RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5216.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<li><strong>Reply:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With mpichgm, we can set --gm-recv blocking.  From the mpichgm README.
<br>
&nbsp;
<br>
&nbsp;&nbsp;--gm-recv &lt;m&gt;   Specifies the receive mode &lt;polling&gt;, &lt;blocking&gt; or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;hybrid&gt;, &lt;polling&gt; is the default.
<br>
<p>Is it possible to get the same blocking behavior with openmpi?  I'm
<br>
having a difficult time getting this to work properly.  The application
<br>
is spinning on sched_yield which takes up a cpu core.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5218.php">Audet, Martin: "[OMPI users] RE :  RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5216.php">Edgar Gabriel: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
<li><strong>Reply:</strong> <a href="5240.php">Patrick Geoffray: "Re: [OMPI users] equivalent to mpichgm --gm-recv blocking?"</a>
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
