<?
$subject_val = "Re: [OMPI users] openib component not available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 07:45:46 2014" -->
<!-- isoreceived="20140724114546" -->
<!-- sent="Thu, 24 Jul 2014 14:45:43 +0300" -->
<!-- isosent="20140724114543" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib component not available" -->
<!-- id="CAAO1KybGGZpckPz6qKT+yGYL3bYYs+pzgfrD8wkW8-5RhG8cNA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAFqWg=TOV1LFnS-31MnUO95cqMLPkwm0SJB_smJd+XbiNX--UQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib component not available<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 07:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24862.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The openib btl is not compatible with &quot;thread multiple&quot; paradigm.
<br>
You need to use mxm (lib on top of verbs) for ompi and threads.
<br>
<p>mxm is part of MOFED or you can download HPCX package (tarball of ompi +
<br>
mxm) from <a href="http://mellanox.com/products/hpcx">http://mellanox.com/products/hpcx</a>
<br>
<p>M
<br>
<p><p>On Thu, Jul 24, 2014 at 1:06 PM, madhurima madhunapanthula &lt;
<br>
erankimadhu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to setup openmpi 1.8.1 on a system with infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The configure option I am using is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure  --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After installation,  it is not showing any openib BTL component when I use
</span><br>
<span class="quotelev1">&gt; the command:
</span><br>
<span class="quotelev1">&gt; 'ompi_info --param btl openib'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the same machine, I have also installed openmpi 1.6.5. When i issue the
</span><br>
<span class="quotelev1">&gt; command 'ompi_info --param btl openib' from this setup, it lists many
</span><br>
<span class="quotelev1">&gt; openib components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Should I use any flag/option to enable openib in openmpi1.8.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lokah samasta sukhinobhavanthu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Madhurima
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/07/24861.php">http://www.open-mpi.org/community/lists/users/2014/07/24861.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24863/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24864.php">Jeff Hammond: "[OMPI users] configure fails to detect missing libcrypto"</a>
<li><strong>Previous message:</strong> <a href="24862.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="24861.php">madhurima madhunapanthula: "[OMPI users] openib component not available"</a>
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
