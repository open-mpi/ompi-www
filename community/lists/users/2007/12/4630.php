<?
$subject_val = "[OMPI users] what is MPI_IN_PLACE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 05:58:42 2007" -->
<!-- isoreceived="20071211105842" -->
<!-- sent="11 Dec 2007 10:56:30 -0000" -->
<!-- isosent="20071211105630" -->
<!-- name="Neeraj Chourasia" -->
<!-- email="neeraj_ch1_at_[hidden]" -->
<!-- subject="[OMPI users] what is MPI_IN_PLACE" -->
<!-- id="20071211105630.20938.qmail_at_webmail8.rediffmail.com" -->
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
<strong>Subject:</strong> [OMPI users] what is MPI_IN_PLACE<br>
<strong>From:</strong> Neeraj Chourasia (<em>neeraj_ch1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 05:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,&amp;nbsp;&amp;nbsp;&amp;nbsp; While going through collective algorithms, I came across preprocessor directive MPI_IN_PLACE which is (void *)1. Its always being compared against source buffer(sbuf). My question is when MPI_IN_PLACE == sbuf condition would be true. As far as i understand, sbuf is the address of source buffer, which every node has to transfer to remaining nodes based on recursive doubling or say bruck algo. And it can never be equal to (void *)1. Any help is appreciated.RegardsNeeraj
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4630/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="4629.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="4631.php">George Bosilca: "Re: [OMPI users] what is MPI_IN_PLACE"</a>
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
