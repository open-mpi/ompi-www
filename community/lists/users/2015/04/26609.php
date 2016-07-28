<?
$subject_val = "Re: [OMPI users] Hang in MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr  4 21:22:19 2015" -->
<!-- isoreceived="20150405012219" -->
<!-- sent="Sun, 5 Apr 2015 03:22:28 +0200" -->
<!-- isosent="20150405012228" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hang in MPI_Send" -->
<!-- id="20150405012228.GA2984_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAATkYOXVrf7Gn6kFR4Gst5EKJ_15ZShqruZwq-MoEOeANVABgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hang in MPI_Send<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-04 21:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26610.php">Hamidreza Anvari: "[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is difficult to answer without a code sample to reproduce. Could
<br>
you submit a minimal program which reproduces this behavior?
<br>
<p>Cheers
<br>
-Andreas
<br>
<p><p>On 17:18 Sat 04 Apr     , Subhra Mazumdar wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run my mpi job with openmpi 1.8.4, it hangs in the following stack:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  0x00007fe59e07b264 in __lll_lock_wait () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007fe59e076508 in _L_lock_854 () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x00007fe59e0763d7 in pthread_mutex_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #3  0x00007fe598543341 in mca_btl_vader_component_progress () from
</span><br>
<span class="quotelev1">&gt; /root/openmpi-1.8.4/openmpinstall/lib/openmpi/mca_btl_vader.so
</span><br>
<span class="quotelev1">&gt; #4  0x00007fe59c4932ca in opal_progress () from
</span><br>
<span class="quotelev1">&gt; /root/openmpi-1.8.4/openmpinstall/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt; #5  0x00007fe597f012c5 in mca_pml_ob1_send () from
</span><br>
<span class="quotelev1">&gt; /root/openmpi-1.8.4/openmpinstall/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; #6  0x00007fe59e2fe902 in PMPI_Send () from
</span><br>
<span class="quotelev1">&gt; ./openmpi-1.8.4/openmpinstall/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone seen this? I am using MPI_THREAD_MULTIPLE for mpi init since my mpi
</span><br>
<span class="quotelev1">&gt; processes are multithreaded. I also checked that I got the same level as
</span><br>
<span class="quotelev1">&gt; requested (MPI_THREAD_MULTIPLE) during init and I had compiled openmpi to
</span><br>
<span class="quotelev1">&gt; enable threading.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Subhra.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26608.php">http://www.open-mpi.org/community/lists/users/2015/04/26608.php</a>
</span><br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26609/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26610.php">Hamidreza Anvari: "[OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
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
