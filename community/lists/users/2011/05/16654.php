<?
$subject_val = "Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 29 09:23:30 2011" -->
<!-- isoreceived="20110529132330" -->
<!-- sent="Sun, 29 May 2011 16:23:23 +0300" -->
<!-- isosent="20110529132323" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang" -->
<!-- id="4DE248CB.1090107_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinzhB4HNrEFHe=aSa77StNMUzX2vA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-29 09:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16655.php">Marcin Zielinski: "[OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gretchen,
<br>
<p>Could you please send stack-trace of the processes when it hangs? (with padb/gdb)
<br>
Does the same problem persist in small scale (2,3 nodes)?
<br>
What is the minimal setup that reproduces the problem?
<br>
<p>-- YK
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: *Gretchen* &lt;umassastrohpcc_at_[hidden] &lt;mailto:umassastrohpcc_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Mon, Mar 28, 2011 at 8:35 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] gadget2 infiniband openmpi hang
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The gadget code hangs at the same spot (i.e. number of steps completed AND same section of code) when I run with --mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; (code is doing  MPI_Sendrecv).
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Gretchen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Date: Thu, 17 Mar 2011 12:45:32 -0400
</span><br>
<span class="quotelev1">&gt;     From: Jeff Squyres &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] gadget2 infiniband openmpi hang
</span><br>
<span class="quotelev1">&gt;     To: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Message-ID: &lt;C03801DD-A057-4544-A365-F2483687926C_at_[hidden] &lt;mailto:C03801DD-A057-4544-A365-F2483687926C_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Are you able to run if you use --mca btl_openib_cpc_include rdmacm ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16655.php">Marcin Zielinski: "[OMPI users] running MPI application and using C/R OpenMPI 1.5.3"</a>
<li><strong>Previous message:</strong> <a href="16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
