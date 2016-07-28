<?
$subject_val = "Re: [OMPI users] MPI defined macro";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 07:14:10 2011" -->
<!-- isoreceived="20110823111410" -->
<!-- sent="Tue, 23 Aug 2011 07:14:05 -0400" -->
<!-- isosent="20110823111405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI defined macro" -->
<!-- id="02FFA68B-71CD-4248-ACA0-2BA268AF1A7C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJNPZUVQoyC6FSDajwamxfwUv3CyywPVSuVpB5G9B_DciZcRsA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI defined macro<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 07:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17081.php">Gabriele Fatigati: "[OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17081.php">Gabriele Fatigati: "[OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid not.  Sorry!  :-(
<br>
<p>We have the OPEN_MPI macro -- it'll be defined to 1 if you compile with Open MPI, but that doesn't really help your portability issue.  :-\
<br>
<p>On Aug 23, 2011, at 5:19 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPi users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is there some portable MPI macro to check if a code is compiled with MPI compiler? Something like _OPENMP for OpenMP codes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef _OPENMP
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it exist?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef MPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Previous message:</strong> <a href="17081.php">Gabriele Fatigati: "[OMPI users] MPI defined macro"</a>
<li><strong>In reply to:</strong> <a href="17081.php">Gabriele Fatigati: "[OMPI users] MPI defined macro"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
<li><strong>Reply:</strong> <a href="17083.php">Gabriele Fatigati: "Re: [OMPI users] MPI defined macro"</a>
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
