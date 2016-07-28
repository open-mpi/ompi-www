<?
$subject_val = "Re: [OMPI users] Finalize() does not return";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 13 15:20:12 2013" -->
<!-- isoreceived="20130813192012" -->
<!-- sent="Tue, 13 Aug 2013 15:20:11 -0400" -->
<!-- isosent="20130813192011" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Finalize() does not return" -->
<!-- id="520A86EB.8020409_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC2A0FA9-B9AE-4A02-B3FE-A56D4070DA48_at_mimectl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Finalize() does not return<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-13 15:20:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>As you said, pending prior communication,
<br>
is a candidate.
<br>
Another that I saw is MPI_Finalize inside a conditional,
<br>
where the condition may or may not be met by all ranks:
<br>
if (condition) {
<br>
MPI_Finalize();
<br>
}
<br>
<p>Regardless of the cause,
<br>
to check the ranks that reach MPI_Finalize,
<br>
did you try the old-fashioned printf commands right before
<br>
MPI_Finalize?
<br>
Something like this:
<br>
<p>printf(&quot;Rank %d before MPI_Finalize\n&quot;,myrank);
<br>
fflush(stdout);
<br>
MPI_Finalize();
<br>
<p>or Fortran:
<br>
<p>print *, 'Rank ', myrank, ' before MPI_Finalize'
<br>
call flush(6)
<br>
call MPI_Finalize(ierror)
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p>On 08/13/2013 02:51 PM, Hazelrig, Chris CTR (US) wrote:
<br>
<span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI 1.4.3-1.1.el6 on RedHawk Linux 6.0.1 (Glacier) /
</span><br>
<span class="quotelev1">&gt; RedHat Enterprise Linux Workstation Release 6.1 (Santiago). I am
</span><br>
<span class="quotelev1">&gt; currently working through some issues that I encountered after upgrading
</span><br>
<span class="quotelev1">&gt; from RedHawk 5.2 / RHEL 5.2 and OpenMPI 1.4.3-1 (openmpi-gcc_1.4.3-1).
</span><br>
<span class="quotelev1">&gt; It seems that since the upgrades my software does not return from the
</span><br>
<span class="quotelev1">&gt; call to the Finalize() routine. All threads enter the Finalize() routine
</span><br>
<span class="quotelev1">&gt; and never return. I wrote a simple test program to try to simplify
</span><br>
<span class="quotelev1">&gt; troubleshooting and Finalize() works as expected, i.e., all threads
</span><br>
<span class="quotelev1">&gt; return from the Finalize() call. This suggests the problem is in my
</span><br>
<span class="quotelev1">&gt; code. I have searched the man pages and user forums to no avail. Has
</span><br>
<span class="quotelev1">&gt; anyone else encountered this problem? What could cause such behavior? I
</span><br>
<span class="quotelev1">&gt; wondered if maybe there is still some prior communication that was left
</span><br>
<span class="quotelev1">&gt; unfinished, but I believe I have verified that is not the case, plus my
</span><br>
<span class="quotelev1">&gt; understanding of how Finalize() works is that it would error/exception
</span><br>
<span class="quotelev1">&gt; out in such a situation rather than just sit there, but I could be wrong.
</span><br>
<span class="quotelev1">&gt; Not sure what additional information may be needed by the community to
</span><br>
<span class="quotelev1">&gt; aid in troubleshooting, but will be happy to provide whatever else is
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Chris Hazelrig
</span><br>
<span class="quotelev1">&gt; SimTech
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
<li><strong>Previous message:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<li><strong>In reply to:</strong> <a href="22489.php">Hazelrig, Chris CTR (US): "[OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22491.php">Hazelrig, Chris CTR (US): "Re: [OMPI users] Finalize() does not return"</a>
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
