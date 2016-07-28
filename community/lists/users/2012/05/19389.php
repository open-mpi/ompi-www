<?
$subject_val = "[OMPI users] Gathering results of MPI_SCAN";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 09:56:45 2012" -->
<!-- isoreceived="20120529135645" -->
<!-- sent="Tue, 29 May 2012 21:56:41 +0800" -->
<!-- isosent="20120529135641" -->
<!-- name="Rohan Deshpande" -->
<!-- email="rohand87_at_[hidden]" -->
<!-- subject="[OMPI users] Gathering results of MPI_SCAN" -->
<!-- id="CAFAE9jh6wa_cPKrPF40ihNJuAupKJtymwYKSN6g2qQGBJqrpew_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Gathering results of MPI_SCAN<br>
<strong>From:</strong> Rohan Deshpande (<em>rohand87_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 09:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19388.php">Antonio Messina: "[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have this array [1 2 3 4 5 6 7 8 9] and i am performing scan operation on
<br>
that.
<br>
<p>I have 3 mpi tasks and each task gets 3 elements then each task calculates
<br>
its scan and returns result to master task
<br>
<p>task 0 - [1 2 3] =&gt; [1 3 6]
<br>
task 1 - [4 5 6 ] =&gt; [4 9 15]
<br>
task 2 - [7 8 9] =&gt; [7 15 24]
<br>
<p>Now task 0 gets all the results [1 3 6] [4 9 15] [7 15 24]
<br>
<p>How can I combine these results to produce final scan output?
<br>
<p>final scan output of array would be [1 3 6 10 15 21 28 36 45]
<br>
<p>can anyone help me please?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19389/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19390.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19388.php">Antonio Messina: "[OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
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
