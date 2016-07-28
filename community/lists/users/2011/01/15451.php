<?
$subject_val = "[OMPI users] maximising bandwidth";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 30 14:09:58 2011" -->
<!-- isoreceived="20110130190958" -->
<!-- sent="Sun, 30 Jan 2011 20:09:52 +0100" -->
<!-- isosent="20110130190952" -->
<!-- name="Toon Knapen" -->
<!-- email="toon.knapen_at_[hidden]" -->
<!-- subject="[OMPI users] maximising bandwidth" -->
<!-- id="4D45B780.2060509_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] maximising bandwidth<br>
<strong>From:</strong> Toon Knapen (<em>toon.knapen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-30 14:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>If I have a master-process that needs to send a chunk of (different) 
<br>
data to each of my N slave processes as fast as possible, would I 
<br>
receive the chunk in each of the slaves faster if the master would 
<br>
launch N threads each doing a blocking send or would it be better to 
<br>
launch N nonblocking sends in the master.
<br>
<p>I'm currently using OpenMPI on ethernet but might the approach be 
<br>
different with different types of networks ?
<br>
<p>thanks in advance,
<br>
<p>toon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Previous message:</strong> <a href="15450.php">David Zhang: "Re: [OMPI users] Building OpenMPI on Ubuntu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
<li><strong>Reply:</strong> <a href="15452.php">David Zhang: "Re: [OMPI users] maximising bandwidth"</a>
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
