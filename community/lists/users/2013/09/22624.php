<?
$subject_val = "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  8 15:36:23 2013" -->
<!-- isoreceived="20130908193623" -->
<!-- sent="Sun, 08 Sep 2013 21:36:20 +0200" -->
<!-- isosent="20130908193620" -->
<!-- name="Max Staufer" -->
<!-- email="max.staufer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory" -->
<!-- id="522CD1B4.9030107_at_gmx.net" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="[OMPI users] OMPI_LIST_GROW keeps allocating memory" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory<br>
<strong>From:</strong> Max Staufer (<em>max.staufer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-08 15:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22623.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Reply:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will  post a small example for testing.
<br>
<p>It is interesting to note though that this happens only
<br>
<p>when MPI_ALLREDUCE is called in a recursive kind of way. 
<br>
<p>Is there a possibility to limit the OMPI_free_list groth, via an --mca parameter ?
<br>
<p><p><p><p><p><p><p>Date: Sun, 08 Sep 2013 14:51:44 +0200
<br>
From: Max Staufer &lt;max.staufer_at_[hidden]&gt;
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] OMPI_LIST_GROW keeps allocating memory
<br>
Message-ID: &lt;522C72E0.9000301_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-15
<br>
<p>Hi All,
<br>
<p>&nbsp;&nbsp;using ompi 1.4.5 or 1.6.5 for that matter, I came across an
<br>
interesting thing
<br>
<p>when an MPI function is called from in a recusivly called subroutine
<br>
(Fortran Interface)
<br>
the MPI_ALLREDUCE function allocates memory in the OMPI_LIST_GROW functions.
<br>
<p>It does this indefinitly. In our case OMPI allocated 100GB.
<br>
<p>is there a method to limit this behaviour ?
<br>
<p>thanks
<br>
<p>Max
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22623.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Maybe in reply to:</strong> <a href="22622.php">Max Staufer: "[OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Reply:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
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
