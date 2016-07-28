<?
$subject_val = "Re: [OMPI users] Network connection check";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 10:25:33 2009" -->
<!-- isoreceived="20090723142533" -->
<!-- sent="Thu, 23 Jul 2009 19:55:26 +0530" -->
<!-- isosent="20090723142526" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Network connection check" -->
<!-- id="fa4af8200907230725g6454e11i4556fac7a088e800_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2099DEF0-9851-4D69-970B-FB50AFCF705D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Network connection check<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 10:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all Jeff, Jody, Prentice and Bogdan for your invaluable
<br>
clarification, solution and suggestion,
<br>
<p>Open MPI should return a failure if TCP connectivity is lost, even with a
<br>
<span class="quotelev1">&gt; non-blocking point-to-point operation.  The failure should be returned in
</span><br>
<span class="quotelev1">&gt; the call to MPI_TEST (and friends).
</span><br>
<p><p>even if MPI_TEST is a local operation?
<br>
<p><p><span class="quotelev1">&gt;  So I'm not sure your timeout has meaning here -- if you reach the timeout,
</span><br>
<span class="quotelev1">&gt; I think it simply means that the MPI communication has not completed yet.
</span><br>
<span class="quotelev1">&gt;  It does not necessarily mean that the MPI communication has failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>you are absolutely correct., but the job should be done before it expires.
<br>
that's the reason I am using TIMEOUT.
<br>
<p>So the conclusion is :
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI doesn't provide any standard way to check reachability and/or health
</span><br>
<span class="quotelev1">&gt; of a peer process.
</span><br>
<p><p>That's what I wanted to confirm. And to find out the solution, if any, or
<br>
any alternative.
<br>
<p>So now I think, I should go for Jody's approach
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about you start your MPI program from a shell script that does the
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Reads a text file containing the names of all the possible candidates
</span><br>
<span class="quotelev1">&gt;  for MPI nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Loops through the list of names from (1) and pings each machine to
</span><br>
<span class="quotelev1">&gt; see if it's alive. If the host is pingable, then write it's name to a
</span><br>
<span class="quotelev1">&gt; different text file which will be host as the machine file for the
</span><br>
<span class="quotelev1">&gt; mpirun command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Call mpirun using the machine file generated in (2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I am assuming processes have been launched successfully.
<br>
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10061/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10060.php">Bogdan Costescu: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10055.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10062.php">Craig Tierney: "[OMPI users] Problem launching jobs in SGE (with loose integration), OpenMPI 1.3.3"</a>
<li><strong>Reply:</strong> <a href="10063.php">Durga Choudhury: "Re: [OMPI users] Network connection check"</a>
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
