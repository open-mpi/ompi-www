<?
$subject_val = "Re: [OMPI users] Checkpointing configuration problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 16:34:30 2009" -->
<!-- isoreceived="20090501203430" -->
<!-- sent="Fri, 1 May 2009 16:34:24 -0400" -->
<!-- isosent="20090501203424" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpointing configuration problem" -->
<!-- id="33405144-3E10-464A-B0FF-3630FDCB7B7F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="502034.11158.qm_at_web31007.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpointing configuration problem<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 16:34:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
<li><strong>Previous message:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<li><strong>In reply to:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try replacing &quot;--enable-MPI-thread&quot; with &quot;--enable-mpi-threads&quot;. That  
<br>
should fix it.
<br>
<p>-- Josh
<br>
<p><p>On May 1, 2009, at 4:17 PM, Kritiraj Sajadah wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;             I am trying to install openmpi 1.3 on my laptop. I  
</span><br>
<span class="quotelev1">&gt; successfully installed BLCR in /usr/local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When installing openmpi using the following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/usr/local --with-ft=cr --enable-ft-thread -- 
</span><br>
<span class="quotelev1">&gt; enable-MPI-thread --with-blcr=/usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; == System-specific tests
</span><br>
<span class="quotelev1">&gt; ====================================================================== 
</span><br>
<span class="quotelev1">&gt; ======
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking if want fault tolerance thread... Must enable progress or  
</span><br>
<span class="quotelev1">&gt; MPI threads to use this option
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Help please.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Raj
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
<li><strong>Previous message:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<li><strong>In reply to:</strong> <a href="9162.php">Kritiraj Sajadah: "[OMPI users] Checkpointing configuration problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9164.php">Yaakoub El Khamra: "Re: [OMPI users] Checkpointing configuration problem"</a>
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
