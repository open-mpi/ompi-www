<?
$subject_val = "Re: [OMPI users] opening a file with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 08:56:01 2013" -->
<!-- isoreceived="20130517125601" -->
<!-- sent="Fri, 17 May 2013 07:55:53 -0500" -->
<!-- isosent="20130517125553" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opening a file with MPI-IO" -->
<!-- id="519628D9.1000401_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5195F1B4.4030607_at_oma.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] opening a file with MPI-IO<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-17 08:55:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21929.php">Qamar Nazir: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you maybe detail more precisely what scenario you are particularly
<br>
worried about? I would think that the return code of the operation
<br>
should be reliable on whether opening the file successful or (i.e.
<br>
MPI_SUCCESS vs. anything else).
<br>
<p>Edgar
<br>
<p>On 5/17/2013 4:00 AM, Peter van Hoof wrote:
<br>
<span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been banging my head against the wall for some time to find a
</span><br>
<span class="quotelev1">&gt; reliable and portable way to determine if a call to MPI::File::Open()
</span><br>
<span class="quotelev1">&gt; was successful or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me give some background information first. We develop an open-source
</span><br>
<span class="quotelev1">&gt; astrophysical modeling code called Cloudy. This is used by many
</span><br>
<span class="quotelev1">&gt; scientists on a variety of platforms. We obviously have no control over
</span><br>
<span class="quotelev1">&gt; the MPI version that is installed on that platform, it may not even be
</span><br>
<span class="quotelev1">&gt; open-MPI. So what we need is a method that is supported by all MPI distros.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our code is written in C++, so we use the C++ version of the MPI and
</span><br>
<span class="quotelev1">&gt; MPI-IO libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Peter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21930/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21929.php">Qamar Nazir: "Re: [OMPI users] plm:tm: failed to spawn daemon, error code = 17000 Error when running jobs on 600 or more nodes"</a>
<li><strong>In reply to:</strong> <a href="21928.php">Peter van Hoof: "[OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21931.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
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
