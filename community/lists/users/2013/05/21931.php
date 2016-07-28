<?
$subject_val = "Re: [OMPI users] opening a file with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 17 08:58:43 2013" -->
<!-- isoreceived="20130517125843" -->
<!-- sent="Fri, 17 May 2013 07:58:38 -0500" -->
<!-- isosent="20130517125838" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opening a file with MPI-IO" -->
<!-- id="5196297E.10508_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="519628D9.1000401_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2013-05-17 08:58:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
wow, lets try again in english :-)
<br>
<p>can you maybe detail more precisely what scenario you are particularly
<br>
worried about? I would think that the return code of the operation
<br>
is reliable on whether opening the file was successful or not (i.e.
<br>
MPI_SUCCESS vs. anything else).
<br>
<p>Edgar
<br>
<p>On 5/17/2013 7:55 AM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; can you maybe detail more precisely what scenario you are particularly
</span><br>
<span class="quotelev1">&gt; worried about? I would think that the return code of the operation
</span><br>
<span class="quotelev1">&gt; should be reliable on whether opening the file successful or (i.e.
</span><br>
<span class="quotelev1">&gt; MPI_SUCCESS vs. anything else).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5/17/2013 4:00 AM, Peter van Hoof wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been banging my head against the wall for some time to find a
</span><br>
<span class="quotelev2">&gt;&gt; reliable and portable way to determine if a call to MPI::File::Open()
</span><br>
<span class="quotelev2">&gt;&gt; was successful or not.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me give some background information first. We develop an open-source
</span><br>
<span class="quotelev2">&gt;&gt; astrophysical modeling code called Cloudy. This is used by many
</span><br>
<span class="quotelev2">&gt;&gt; scientists on a variety of platforms. We obviously have no control over
</span><br>
<span class="quotelev2">&gt;&gt; the MPI version that is installed on that platform, it may not even be
</span><br>
<span class="quotelev2">&gt;&gt; open-MPI. So what we need is a method that is supported by all MPI distros.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our code is written in C++, so we use the C++ version of the MPI and
</span><br>
<span class="quotelev2">&gt;&gt; MPI-IO libraries.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Peter.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21931/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="21930.php">Edgar Gabriel: "Re: [OMPI users] opening a file with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="21932.php">Peter van Hoof: "Re: [OMPI users] opening a file with MPI-IO"</a>
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
