<?
$subject_val = "Re: [OMPI users] Copying installed runtimes to another machine and using it";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 23 05:41:16 2013" -->
<!-- isoreceived="20130423094116" -->
<!-- sent="Tue, 23 Apr 2013 11:41:00 +0200" -->
<!-- isosent="20130423094100" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Copying installed runtimes to another machine and using it" -->
<!-- id="D651F328-2309-4AAE-9623-C78E9B0F67B8_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJb0vwmfpQCiihAjM7=TGsG+9R2e7dN4xuVWc6vqpHrA703mGg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Copying installed runtimes to another machine and using it<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-23 05:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21768.php">&#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 23.04.2013 um 03:39 schrieb Manee:
<br>
<p><span class="quotelev1">&gt; When I copy my OpenMPI installed directory to another computer (the runtime files), and point PATH and LD_LIBRARY_PATH to this installed folder (to make mpirun point to the copied folder's bin), it does not seem to run (it's not supposed to run because I compiled it on a different machine with a different prefix and just copying the runtimes). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to compile the libraries such that it could be copied to a different machine and be used? 
</span><br>
<p>It's necessary to set OPAL_PREFIX to the path of the Open MPI copy before executing `mpiexec`.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; MM
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
<li><strong>Next message:</strong> <a href="21770.php">Nick Edmonds: "Re: [OMPI users] Using Boost::Thread for multithreading within OpenMPI processes"</a>
<li><strong>Previous message:</strong> <a href="21768.php">&#208;&#148;&#208;&#181;&#209;&#128;&#208;&#177;&#209;&#131;&#208;&#189;&#208;&#190;&#208;&#178;&#208;&#184;&#209;&#135; &#208;&#144;&#208;&#189;&#208;&#180;&#209;&#128;&#208;&#181;&#208;&#185;: "Re: [OMPI users] OpenMPI at scale on Cray XK7"</a>
<li><strong>In reply to:</strong> <a href="21767.php">Manee: "[OMPI users] Copying installed runtimes to another machine and using it"</a>
<!-- nextthread="start" -->
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
