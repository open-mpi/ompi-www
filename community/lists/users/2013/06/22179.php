<?
$subject_val = "[OMPI users] MPI Finalize hangs!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 05:25:52 2013" -->
<!-- isoreceived="20130621092552" -->
<!-- sent="Fri, 21 Jun 2013 02:25:48 -0700 (PDT)" -->
<!-- isosent="20130621092548" -->
<!-- name="Mohamad Ali Rostami" -->
<!-- email="ma.rostami_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Finalize hangs!" -->
<!-- id="1371806748.82725.YahooMailNeo_at_web125702.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BOZO" -->
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
<strong>Subject:</strong> [OMPI users] MPI Finalize hangs!<br>
<strong>From:</strong> Mohamad Ali Rostami (<em>ma.rostami_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 05:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Reply:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there

My MPI program works completely without any problem in the interactive mode, i.e. before submitting to HPC. However when I submit it with &quot;bsub&quot;, everything works again until &quot;MPI_FINALIZE&quot; hangs and following error comes up:

mpirun noticed that process rank 2 with PID 8620 on node ... exited on signal 11 (Segmentation fault).

It is not for sure an error in the code because&#160;
I have commented all of the code (except MPI part) but the problem is still there. Then I think it can be from submitting the code, the bash script or compiling/linking libraries/headers.

Has anyone seen this error before? any idea to correct it?

Regards,
Ali

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22179/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Previous message:</strong> <a href="22178.php">Iliev, Hristo: "Re: [OMPI users] Trouble with Sending Multiple messages to the Same	Machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
<li><strong>Reply:</strong> <a href="22180.php">Matthieu Brucher: "Re: [OMPI users] MPI Finalize hangs!"</a>
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
