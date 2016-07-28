<?
$subject_val = "Re: [OMPI users] How to enable progress threads in 1.6?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 13 10:30:02 2012" -->
<!-- isoreceived="20120613143002" -->
<!-- sent="Wed, 13 Jun 2012 08:29:54 -0600" -->
<!-- isosent="20120613142954" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to enable progress threads in 1.6?" -->
<!-- id="B3350D83-BCC0-4B7A-A56A-E033414946AE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E33B0810F4165748B761641D5721AC19011F3493EC90_at_MAILBOX2.ad.liu.se" -->
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
<strong>Date:</strong> 2012-06-13 10:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19531.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19529.php">Jeff Squyres: "Re: [OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>In reply to:</strong> <a href="19527.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Reply:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I understand the question - the progress thread option just enables async progress to be made. All MPI functions will progress whenever you call into the MPI library today - they just won't progress while you are, for example, running a non-MPI computation in your program.
<br>
<p><p>On Jun 13, 2012, at 8:21 AM, Filippo Donida wrote:
<br>
<p><span class="quotelev1">&gt; Any workaround?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Test as polling function?
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 13, 2012 4:12 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] How to enable progress threads in 1.6?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pretty sure we don't support progress threads in 1.6 - working on it for the future
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2012, at 7:49 AM, Filippo Donida wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried to enable progress thread by using the:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-threads --enable-progress-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; flags during compilation of OpenMPI 1.6 but I got a:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;configure: WARNING: unrecognized options: --enable-mpi-thread, --enable-progress-thread&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestion?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Filippo.
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
<li><strong>Next message:</strong> <a href="19531.php">Xuan Wang: "Re: [OMPI users] An idea about a semi-automatic optimized	parallel	I/O with Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19529.php">Jeff Squyres: "Re: [OMPI users] Plans for cmake with non-Windows?"</a>
<li><strong>In reply to:</strong> <a href="19527.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
<li><strong>Reply:</strong> <a href="19532.php">Filippo Donida: "Re: [OMPI users] How to enable progress threads in 1.6?"</a>
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
