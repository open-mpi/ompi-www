<?
$subject_val = "Re: [OMPI users] ScaLapack and BLACS on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 07:34:25 2008" -->
<!-- isoreceived="20080303123425" -->
<!-- sent="Mon, 03 Mar 2008 07:34:17 -0500" -->
<!-- isosent="20080303123417" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ScaLapack and BLACS on Leopard" -->
<!-- id="47CBF049.6020106_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.15.1204304424.26323.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ScaLapack and BLACS on Leopard<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 07:34:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5120.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What kind of system lib errors are you seeing and do you have a stack 
<br>
trace?  Note, I was trying something similar with Solaris and 64-bit on 
<br>
a SPARC machine and was seeing segv's inside the MPI Library due to a 
<br>
pointer being passed through an integer (thus dropping the upper 32 
<br>
bits).  Funny thing is it all works under Solaris on AMD64 or IA-64 
<br>
platforms. 
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt; Date: Thu, 28 Feb 2008 17:50:28 -0500
</span><br>
<span class="quotelev1">&gt; From: Gregory John Orris &lt;gregory.orris_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] ScaLapack and BLACS on Leopard
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;528FD4C0-6157-49CB-80E6-1C62684E4545_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone got ScaLapack and BLACS working and not just compiled under  
</span><br>
<span class="quotelev1">&gt; OSX10.5 in 64-bit mode?
</span><br>
<span class="quotelev1">&gt; The FAQ site directions were followed and every thing compiles just  
</span><br>
<span class="quotelev1">&gt; fine. But ALL of the single precision routines and many of the double  
</span><br>
<span class="quotelev1">&gt; precisions routines in the TESTING directory fail with system lib  
</span><br>
<span class="quotelev1">&gt; errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've gotten some interesting errors and am wondering what the magic  
</span><br>
<span class="quotelev1">&gt; touch is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5120.php">Sacerdoti, Federico: "[OMPI users] slurm and all-srun orterun"</a>
<li><strong>Previous message:</strong> <a href="5118.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.2.5 configure bug for POWERPC64 target"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/5099.php">Gregory John Orris: "[OMPI users] ScaLapack and BLACS on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5145.php">Terry Dontje: "Re: [OMPI users] ScaLapack and BLACS on Leopard"</a>
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
