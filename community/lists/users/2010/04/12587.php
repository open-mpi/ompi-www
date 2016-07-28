<?
$subject_val = "[OMPI users] orted: error while loading shared libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  8 09:09:11 2010" -->
<!-- isoreceived="20100408130911" -->
<!-- sent="Thu, 8 Apr 2010 14:06:01 +0100" -->
<!-- isosent="20100408130601" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] orted: error while loading shared libraries" -->
<!-- id="5504C1518E7EAE4C912A724C518C07929309F4_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] orted: error while loading shared libraries<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-08 09:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users
<br>
&nbsp;
<br>
We built OpenMPI 1.4.1 on a new cluster and get the following error message when starting a test job from the master node:
<br>
&nbsp;
<br>
ham4#mpirun -np 4 --host cn001 /path/hello
<br>
orted: error while loading shared libraries: libimf.so: cannot open shared object file: No such file or directory
<br>
&nbsp;
<br>
I found this advice for the intel compiler
<br>
&nbsp;
<br>
<a href="http://www.open-mpi.org/faq/?category=running#intel-compilers-static">http://www.open-mpi.org/faq/?category=running#intel-compilers-static</a>
<br>
&nbsp;
<br>
but for example
<br>
&nbsp;
<br>
ham4#ssh cn001 /path/hello
<br>
&nbsp;
<br>
works. I think this suggests something of the set up is still missing?
<br>
&nbsp;
<br>
I would be grateful for any advice
<br>
&nbsp;
<br>
Thanks
<br>
&nbsp;
<br>
Henk
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Previous message:</strong> <a href="12586.php">Serge: "Re: [OMPI users] OMPI 1.4.x ignores hostfile and launches all the processes on just one node in Grid Engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
<li><strong>Reply:</strong> <a href="12588.php">Jeff Squyres: "Re: [OMPI users] orted: error while loading shared libraries"</a>
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
