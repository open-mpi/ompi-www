<?
$subject_val = "Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 22 09:15:56 2008" -->
<!-- isoreceived="20080422131556" -->
<!-- sent="Tue, 22 Apr 2008 08:15:48 -0500" -->
<!-- isosent="20080422131548" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling" -->
<!-- id="18445.58628.390899.491182_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="480D1130.9070609_at_polytechnique.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI + Ubuntu 7.10 puzzling<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-22 09:15:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5447.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 22 April 2008 at 00:12, Vincent Rotival wrote:
<br>
| Sorry to bother you all about that but I am quite lost with a puzzling 
<br>
| problem concerning openMPI + Ubuntu 7.10. I could not find similar 
<br>
| threads on the archive
<br>
[...]
<br>
| I am using openMPI version 1.2.6 (but same bug occured with 1.2.5), 
<br>
| which I compile directly from the source from www.openmpi.org 
<br>
| &lt;<a href="http://www.openmpi.org">http://www.openmpi.org</a>&gt;, with F90=ifort with Intel Fortran 10.1
<br>
<p>I can't speak to ifort, but as one of the Open MPI maintainers for Debian, I
<br>
can assure you that the 1.2.* series works just fine on Ubuntu ... if you
<br>
rebuild from current Debian sources. 
<br>
<p>I have forgotten what version of Open MPI made the 'freeze' for Ubuntu 7.10,
<br>
but it is probably something older if not even the 1.1.*.  I typically just
<br>
point my apt inputs to Debian unstable source (not binary packages) and then
<br>
fetch what I want to rebuild via 'apt-get source libopenmpi-dev'. That
<br>
requires some minimal Debian packaging skills you could learn from a number
<br>
of sources on the web,
<br>
<p>Now, if and when you rebuild from source, I would make sure that you do not
<br>
have 'native' Ubuntu Open MPI and LAM '-dev' packages installed to avoid the
<br>
header / library mismatch you seem to be experiencing.
<br>
<p>| I have not updated ifort since about 6 months, the only change between 
<br>
| last time I used MPI are small Ubuntu updates..... I can give you much 
<br>
| more complex codes which worked perfectly one week ago
<br>
<p>&quot;small&quot; Ubuntu updates?  When I roll my work machines to new Ubuntu releases,
<br>
it upgrades _hundreds_ of packages. Not what I call small.
<br>
<p>Hope this helps, Dirk
<br>
<p><p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5447.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5445.php">Tomas Ukkonen: "[OMPI users] Message compression in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5427.php">Vincent Rotival: "[OMPI users] openMPI + Ubuntu 7.10 puzzling"</a>
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
