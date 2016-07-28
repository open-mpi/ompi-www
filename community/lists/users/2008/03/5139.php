<?
$subject_val = "[OMPI users] General Design Question";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 13:07:34 2008" -->
<!-- isoreceived="20080305180734" -->
<!-- sent="Wed, 5 Mar 2008 12:07:24 -0600" -->
<!-- isosent="20080305180724" -->
<!-- name="Samir Faci" -->
<!-- email="samir.list_at_[hidden]" -->
<!-- subject="[OMPI users] General Design Question" -->
<!-- id="1e6142750803051007g24d4b1f0u79c2dcb33c3f183_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] General Design Question<br>
<strong>From:</strong> Samir Faci (<em>samir.list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 13:07:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5138.php">Sacerdoti, Federico: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Reply:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a small program that I'd like to use two level of parallelization.
<br>
<p>I'm doing some image analysis where I'd like to have the image analsys being
<br>
parallized and the search through a collection of images.
<br>
<p>Currently I have a custum C++ class that does the image manipulation on each
<br>
file I'm looking at.
<br>
<p>so.. basic pseudo code
<br>
<p>main:
<br>
<p>&nbsp;&nbsp;&nbsp;get src image
<br>
&nbsp;&nbsp;&nbsp;process image
<br>
<p><p>&nbsp;&nbsp;&nbsp;compare src to dst (and repeat for 1 of 1000 different dst objects)
<br>
<p><p>the search seems easy enough to parallelize, but I would need to do the
<br>
image analysis split among processors.  Would there be any problems with
<br>
having MPI initiated and finalized within a class?
<br>
<p>sorry if this is confusing, just wanted to run my ideas by some far more
<br>
capable individuals, making sure my approach makes some sense.
<br>
<p>Thanks again,
<br>
<p><pre>
--
Samir
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5140.php">Frank Tabakin: "Re: [OMPI users] Problems Compiling gfortran on mac os-x 10.5.3"</a>
<li><strong>Previous message:</strong> <a href="5138.php">Sacerdoti, Federico: "Re: [OMPI users] slurm and all-srun orterun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
<li><strong>Reply:</strong> <a href="5144.php">Jeff Squyres: "Re: [OMPI users] General Design Question"</a>
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
