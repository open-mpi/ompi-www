<?
$subject_val = "Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 02:17:42 2014" -->
<!-- isoreceived="20141011061742" -->
<!-- sent="Sat, 11 Oct 2014 09:17:40 +0300" -->
<!-- isosent="20141011061740" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation" -->
<!-- id="CAAO1KyYO842N5zxcY67M_GC-3N4A-VaEFUwcGPYdKOWx==f06w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5438406E.8050307_at_cs.umd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building on a host with a shoddy OpenFabrics installation<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-11 02:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>Previous message:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>In reply to:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
yep - you can compile OFED/MOFED in the $HOME/ofed dir and point OMPI
<br>
configure to it with &quot;--with-verbs=/path/to/ofed/install&quot;.
<br>
<p>You can download and
<br>
compile &quot;libibverbs&quot;,&quot;libibumad&quot;,&quot;libibmad&quot;,&quot;librdmacm&quot;,&quot;opensm&quot;,&quot;infiniband-diags&quot;
<br>
packages only with custom prefix.
<br>
<p>M
<br>
<p>On Fri, Oct 10, 2014 at 11:24 PM, Gary Jackson &lt;garyj_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to build OpenMPI on a cluster that has InfiniBand adapters and
</span><br>
<span class="quotelev1">&gt; at least enough of OpenFabrics to have working IPoIB. But some things are
</span><br>
<span class="quotelev1">&gt; missing, like infiniband/verbs.h. Is it possible to build OpenMPI with a
</span><br>
<span class="quotelev1">&gt; working openib btl on a host like this? For instance, can I do a partial
</span><br>
<span class="quotelev1">&gt; installation of the necessary libraries and headers of OFED in to my home
</span><br>
<span class="quotelev1">&gt; directory so I can get this working? I do not have root authority on these
</span><br>
<span class="quotelev1">&gt; hosts, so doing a correct installation of OFED is sadly not a possibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gary
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/">http://www.open-mpi.org/community/lists/users/2014/10/</a>
</span><br>
<span class="quotelev1">&gt; 25486.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25488/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>Previous message:</strong> <a href="25487.php">Atsugua Ada: "Re: [OMPI users] Derived data in Java"</a>
<li><strong>In reply to:</strong> <a href="25486.php">Gary Jackson: "[OMPI users] Building on a host with a shoddy OpenFabrics installation"</a>
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
