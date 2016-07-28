<?
$subject_val = "Re: [OMPI users] Mellanox/Voltaire FCA support";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  4 11:41:42 2011" -->
<!-- isoreceived="20110904154142" -->
<!-- sent="Sun, 4 Sep 2011 19:41:38 +0400" -->
<!-- isosent="20110904154138" -->
<!-- name="Andrew Senin" -->
<!-- email="andrew.senin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mellanox/Voltaire FCA support" -->
<!-- id="CAN7Cqrcy2euXe5vSz9iuZfJU2kRb=WWKxi03m9MA8ev--gBz4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="77486CDD5CFC9449BEE3C555886D8A90014DA5_at_G9W0339.americas.hpqcorp.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mellanox/Voltaire FCA support<br>
<strong>From:</strong> Andrew Senin (<em>andrew.senin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-04 11:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17146.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] Mellanox/Voltaire FCA support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>You should compile OpenMPI with the &quot;--with-fca=&lt;path_to_fca&gt;&quot; option. Then
<br>
you can configure it the the following mca runtime options:
<br>
coll_fca_enable - whether or not fca is enabled
<br>
coll_fca_np - from which np to use fca
<br>
coll_fca_enable_barrier
<br>
coll_fca_enable_bcast
<br>
...
<br>
<p>See more options with ompi_info --all | grep fca command.
<br>
<p>Regards,
<br>
Andrew Senin.
<br>
<p>On Fri, Sep 2, 2011 at 10:18 PM, Konz, Jeffrey (SSA Solution Centers) &lt;
<br>
jeffrey.konz_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that OpenMPI 1.5.x supports the Mellanox/Voltaire FCA MPI Collective
</span><br>
<span class="quotelev1">&gt; Accelerator.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are any special OpenMPI builb options required to use this?
</span><br>
<span class="quotelev1">&gt; Is the feature runtime selectable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Jeff
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17151.php">Ake Sandgren: "[OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>Previous message:</strong> <a href="17149.php">Yevgeny Kliteynik: "Re: [OMPI users] btl_openib_ipaddr_include broken in 1.4.4rc2?"</a>
<li><strong>In reply to:</strong> <a href="17146.php">Konz, Jeffrey (SSA Solution Centers): "[OMPI users] Mellanox/Voltaire FCA support"</a>
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
