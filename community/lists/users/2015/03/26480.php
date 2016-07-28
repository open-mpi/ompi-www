<?
$subject_val = "Re: [OMPI users] Questions regarding xpmem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 12:56:53 2015" -->
<!-- isoreceived="20150316165653" -->
<!-- sent="Mon, 16 Mar 2015 10:56:52 -0600" -->
<!-- isosent="20150316165652" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions regarding xpmem" -->
<!-- id="20150316165652.GK14275_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5507059A.8030007_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions regarding xpmem<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-16 12:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26479.php">Tobias Kloeffel: "[OMPI users] Questions regarding xpmem"</a>
<li><strong>In reply to:</strong> <a href="26479.php">Tobias Kloeffel: "[OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What program are you using for the benchmark? Are you using the xpmem
<br>
branch in my github? For my testing I used a stock ubuntu 3.13 kernel
<br>
but I have not full stress-tested my xpmem branch.
<br>
<p>I will see if I can reproduce and fix the hang.
<br>
<p>-Nathan
<br>
<p>On Mon, Mar 16, 2015 at 05:32:26PM +0100, Tobias Kloeffel wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; currently I am benchmarking the different single copy mechanisms
</span><br>
<span class="quotelev1">&gt; knem/cma/xpmem on a Xeon E5 V3 machine.
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.8.4 with the CMA patch for vader.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While it turns out that xpmem is the clear winner (reproducing Nathan
</span><br>
<span class="quotelev1">&gt; Hjelm's results) I always ran into a problem at the mpi finalizing step. At
</span><br>
<span class="quotelev1">&gt; this step, at least one process hangs, and can't be killed anymore. To get
</span><br>
<span class="quotelev1">&gt; rid of the hanging process, the server has to be rebooted.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The applications finish successfully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, I can't find any further development of the xpmem module. Is
</span><br>
<span class="quotelev1">&gt; this bug known to anyone? What kernel versions do you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tested kernel versions:
</span><br>
<span class="quotelev1">&gt; 3.11.25-desktop (openSUSE)
</span><br>
<span class="quotelev1">&gt; 3.18.9 (vanilla)
</span><br>
<span class="quotelev1">&gt; 3.19.1 (vanilla)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; M.Sc. Tobias Kl&#246;ffel
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; Interdisciplinary Center for Molecular Materials (ICMM)
</span><br>
<span class="quotelev1">&gt; and Computer-Chemistry-Center (CCC)
</span><br>
<span class="quotelev1">&gt; Department Chemie und Pharmazie
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev1">&gt; N&#228;gelsbachstr. 25
</span><br>
<span class="quotelev1">&gt; D-91052 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Room: 2.307
</span><br>
<span class="quotelev1">&gt; Phone: +49 (0) 9131 / 85 - 20421
</span><br>
<span class="quotelev1">&gt; Fax: +49 (0) 9131 / 85 - 26565
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; Department of Materials Science and Engineering
</span><br>
<span class="quotelev1">&gt; Institute I: General Materials Properties
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg
</span><br>
<span class="quotelev1">&gt; Martensstr. 5, D-91058 Erlangen, Germany
</span><br>
<span class="quotelev1">&gt; Office 3.40
</span><br>
<span class="quotelev1">&gt; Phone: (+49) 9131 85 27 -486
</span><br>
<span class="quotelev1">&gt; <a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; E-mail: tobias.kloeffel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26479.php">http://www.open-mpi.org/community/lists/users/2015/03/26479.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26480/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26481.php">Davide Cesari: "Re: [OMPI users] Custom MPI_DATA_TYPE with allocatable arrays in fortran derived data type"</a>
<li><strong>Previous message:</strong> <a href="26479.php">Tobias Kloeffel: "[OMPI users] Questions regarding xpmem"</a>
<li><strong>In reply to:</strong> <a href="26479.php">Tobias Kloeffel: "[OMPI users] Questions regarding xpmem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26483.php">Tobias Kloeffel: "Re: [OMPI users] Questions regarding xpmem"</a>
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
