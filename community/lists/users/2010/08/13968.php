<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 00:10:22 2010" -->
<!-- isoreceived="20100811041022" -->
<!-- sent="Tue, 10 Aug 2010 21:10:18 -0700 (PDT)" -->
<!-- isosent="20100811041018" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="347514.18421.qm_at_web50807.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1281499073.5774.58.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 00:10:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13972.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13972.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sure, but broadcasts are faster - less reliable apparently, but much faster for large clusters.&#160; Jeff says that all OpenMPI calls are implemented with point to point B-tree style communications of log N transmissions
<br>
So I guess that altoall would be N log N
<br>
<p>--- On Wed, 11/8/10, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<p>From: Terry Frankcombe &lt;terry_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Bcast issue
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Wednesday, 11 August, 2010, 1:57 PM
<br>
<p>On Tue, 2010-08-10 at 19:09 -0700, Randolph Pullen wrote:
<br>
<span class="quotelev1">&gt; Jeff thanks for the clarification,
</span><br>
<span class="quotelev1">&gt; What I am trying to do is run N concurrent copies of a 1 to N data
</span><br>
<span class="quotelev1">&gt; movement program to affect an N to N solution.
</span><br>
<p>I'm no MPI guru, nor do I completely understand what you are doing, but
<br>
isn't this an allgather (or possibly an alltoall)?
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13967.php">Terry Frankcombe: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13972.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13972.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13973.php">Ashley Pittman: "Re: [OMPI users] MPI_Bcast issue"</a>
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
