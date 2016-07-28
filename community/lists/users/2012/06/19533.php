<?
$subject_val = "Re: [OMPI users] How to enable progress threads in 1.6?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 10:43:05 2012" -->
<!-- isoreceived="20120613144305" -->
<!-- sent="Wed, 13 Jun 2012 08:42:59 -0600" -->
<!-- isosent="20120613144259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to enable progress threads in 1.6?" -->
<!-- id="A28E0301-1965-478D-A5E6-3A16FE22B63D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E33B0810F4165748B761641D5721AC19011F3493EC91_at_MAILBOX2.ad.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to enable progress threads in 1.6?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-13 10:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may hit some threading issues, but it's worth a try.
<br>
<p>On Jun 13, 2012, at 8:35 AM, Filippo Donida wrote:
<br>
<p><span class="quotelev1">&gt; My idea is to have a thread to be launched just after the MPI_Isend call with a fake MPI_Test function call, just to make the sending operation progressing. Do you think this may work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Filippo.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 4:29 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to enable progress threads in 1.6?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure I understand the question - the progress thread option just enables async progress to be made. All MPI functions will progress whenever you call into the MPI library today - they just won't progress while you are, for example, running a non-MPI computation in your program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 8:21 AM, Filippo Donida wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any workaround?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Test as polling function?
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, June 13, 2012 4:12 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] How to enable progress threads in 1.6?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Pretty sure we don't support progress threads in 1.6 - working on it for the future
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 13, 2012, at 7:49 AM, Filippo Donida wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to enable progress thread by using the:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-threads --enable-progress-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags during compilation of OpenMPI 1.6 but I got a:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;configure: WARNING: unrecognized options: --enable-mpi-thread, --enable-progress-thread&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestion?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Filippo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="19534.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>In reply to:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19588.php">Jeff Squyres: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
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
