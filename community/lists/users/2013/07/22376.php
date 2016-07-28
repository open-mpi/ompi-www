<?
$subject_val = "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 23 22:01:00 2013" -->
<!-- isoreceived="20130724020100" -->
<!-- sent="Tue, 23 Jul 2013 22:00:56 -0400" -->
<!-- isosent="20130724020056" -->
<!-- name="David Stuebe" -->
<!-- email="stu3b3_at_[hidden]" -->
<!-- subject="[OMPI users] ompi_evesel-&amp;gt;dispatch() failed when running from Java Process Builder" -->
<!-- id="CAAr1QLL9U7HHtqmnfgf2tr+-sWBxnFvRA8ih6gXrYm4t2-tfAA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder<br>
<strong>From:</strong> David Stuebe (<em>stu3b3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-23 22:00:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
<li><strong>Previous message:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>Reply:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI
<br>
<p>I am trying to create a Java GUI to control and run an MPI application. I
<br>
can run an MPI process from my command line, but am unable to run via the
<br>
Java Process Builder.
<br>
<p>I get the following error immediately after the process starts:
<br>
<p>[SCI053_VM003:02928] ..\..\openmpi-1.6.4\opal\event\event.c:
<br>
ompi_evesel-&gt;dispatch() failed.
<br>
<p>I suspect there is an environment problem, but I am not sure how to
<br>
diagnose it. I have printed the environment seen by the java process
<br>
builder to the log as well as the environment seen by the mpiexec'd
<br>
process, but I see nothing amiss!?!?
<br>
<p>All the code and the output log are posted on
<br>
gist&lt;<a href="https://gist.github.com/dstuebe/6067520">https://gist.github.com/dstuebe/6067520</a>&gt;
<br>
<p>I am trying to run in a windows environment using OpenMPI 1.6.4 packaged
<br>
for MPI4PY
<br>
<a href="http://www.lfd.uci.edu/~gohlke/pythonlibs/#mpi4py">http://www.lfd.uci.edu/~gohlke/pythonlibs/#mpi4py</a>
<br>
<p>Please help
<br>
<p>David
<br>
<p>PS - I am able to run the Java program to launch and run the same code in
<br>
my MacOS environment, but there I use brew installed MPICH2.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22376/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
<li><strong>Previous message:</strong> <a href="22375.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>Reply:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
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
