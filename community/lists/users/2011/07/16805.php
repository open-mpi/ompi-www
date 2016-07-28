<?
$subject_val = "Re: [OMPI users] Open-MPI maffinity policy";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  2 16:37:49 2011" -->
<!-- isoreceived="20110702203749" -->
<!-- sent="Sat, 2 Jul 2011 15:37:40 -0500" -->
<!-- isosent="20110702203740" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI maffinity policy" -->
<!-- id="FC660240-F004-4CBC-A28C-F6958203ADC4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik53gB1mnAaohmKGi0EvqAWJKLNYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI maffinity policy<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-02 16:37:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Reply:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Libnuma will be used automatically if you use a paffonity setting. 
<br>
<p>But note that it only applies to internal memory in OMPI - I don't remember the version offhand, but late in the 1.5 series we set the general affinity policy for all memory (possibly the unreleased 1.5.4?). 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jun 30, 2011, at 8:31 PM, &quot;Qasim Ali&quot; &lt;qasimali_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed open-mpi with the libnuma library using the --with-libnuma. Everything installed fine. When I do 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./ompi_info |grep maffinity
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt;            MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I see two policies here. first_use and libnuma
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two questions regarding these:
</span><br>
<span class="quotelev1">&gt; 1. Which policy will be used in my MPI application?
</span><br>
<span class="quotelev1">&gt; 2. Do I have to specify maffinity when using mpirun command or the open-mpi runtime will automatically use the allocation policy (first_use or libnuma?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Qasim
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
<li><strong>Next message:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Previous message:</strong> <a href="16804.php">Jeff Squyres (jsquyres): "Re: [OMPI users] The hostfile  could not be found"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16797.php">Qasim Ali: "[OMPI users] Open-MPI maffinity policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Reply:</strong> <a href="16806.php">Qasim Ali: "Re: [OMPI users] Open-MPI maffinity policy"</a>
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
