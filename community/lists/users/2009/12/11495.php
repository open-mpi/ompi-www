<?
$subject_val = "[OMPI users] OMPI 1.4: connectivity_c fails, ring_c and hello_c work";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 18:54:56 2009" -->
<!-- isoreceived="20091209235456" -->
<!-- sent="Wed, 9 Dec 2009 15:54:32 -0800" -->
<!-- isosent="20091209235432" -->
<!-- name="Matthew MacManes" -->
<!-- email="macmanes_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI 1.4: connectivity_c fails, ring_c and hello_c work" -->
<!-- id="76aeda4a0912091554o271750b9gac839e2a4d92e52e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OMPI 1.4: connectivity_c fails, ring_c and hello_c work<br>
<strong>From:</strong> Matthew MacManes (<em>macmanes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 18:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11494.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What is the difference between connectivity_c and ring_c or hello_c? Under
<br>
what circumstances should one fail and not the others...
<br>
<p>I am having a huge problem with openMPI, and trying to get to the bottom of
<br>
it by understanding the differences between the example files, connectivity,
<br>
hello, and ring.
<br>
<p>1st off, ring_c and hello_c seem to work fine with up to -np 250
<br>
<p>connectivity_c works reliably when -np &lt;5, but less that 30% of the time
<br>
when -np &gt;6.  When it does not work, it just hangs.. no output..  here is a
<br>
screenshot of TOP with mpirun -np 8 connectivity_c hanging..
<br>
<p><a href="http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394">http://picasaweb.google.com/macmanes/DropBox?authkey=Gv1sRgCLKokNOVqo7BYw#5413382182027669394</a>
<br>
<p>Under what circumstances should this happen?
<br>
<p>I am using Ubuntu 9.10, kernel 2.6.31-16, Nehelem processors.
<br>
Hyperthreading is enabled.
<br>
<p>Thanks!
<br>
_________________________________
<br>
Matthew MacManes
<br>
PhD Candidate
<br>
University of California- Berkeley
<br>
Museum of Vertebrate Zoology
<br>
Phone: 510-495-5833
<br>
Lab Website: <a href="http://ib.berkeley.edu/labs/lacey">http://ib.berkeley.edu/labs/lacey</a>
<br>
Personal Website: <a href="http://macmanes.com/">http://macmanes.com/</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11496.php">Gus Correa: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11494.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
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
