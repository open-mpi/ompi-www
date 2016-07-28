<?
$subject_val = "[OMPI users] orterun returns zero when it fails to find an executeable";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 08:03:27 2008" -->
<!-- isoreceived="20081208130327" -->
<!-- sent="Mon, 08 Dec 2008 13:03:22 +0000" -->
<!-- isosent="20081208130322" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI users] orterun returns zero when it fails to find an executeable" -->
<!-- id="493D1B1A.4050702_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI users] orterun returns zero when it fails to find an executeable<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 08:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7450.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>Reply:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice that bug ticket #954 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/954">https://svn.open-mpi.org/trac/ompi/ticket/954</a> has the very issue I'm 
<br>
encountering: I want to know when mpirun fails because of a missing 
<br>
executable during some automated tests.
<br>
<p>At the moment, nearly 2 years after the bug was reported, orterun/mpirun 
<br>
still returns a zero exit status even when it can't find the executable.
<br>
<p>I note that this was &quot;fixed&quot; 20 months ago in &quot;1.3&quot;. But there have been 
<br>
1.2.1, 1.2.2, .... 1.2.8 since this and still no 1.3!
<br>
<p>So here's my appeal for a 1.2 bugfix....
<br>
<p>Many thanks,
<br>
Simon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7452.php">Ralph Castain: "Re: [OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7450.php">Jens: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
<li><strong>Reply:</strong> <a href="7499.php">Jeff Squyres: "Re: [OMPI users] orterun returns zero when it fails to find an executeable"</a>
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
