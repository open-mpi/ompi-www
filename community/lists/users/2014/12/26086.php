<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 29 13:29:37 2014" -->
<!-- isoreceived="20141229182937" -->
<!-- sent="Mon, 29 Dec 2014 10:29:36 -0800" -->
<!-- isosent="20141229182936" -->
<!-- name="Deva" -->
<!-- email="devendar.bureddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="CABB+w0T=MY=aVrqLky1Xg+OdfRrq5gFgDjWNzu+g1tRfwG5ECw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="72AAB83113C15C4CBB7CDE3037A199CB8B45E569_at_BEXGW-H20514.local.bibalex.dom" -->
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
<strong>Subject:</strong> Re: [OMPI users] Icreasing OFED registerable memory<br>
<strong>From:</strong> Deva (<em>devendar.bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-29 13:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26087.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>In reply to:</strong> <a href="26076.php">Waleed Lotfy: "[OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Waleed,
<br>
<p>It is highly recommended to upgrade to latest OFED.  Meanwhile, Can you try
<br>
latest OMPI release (v1.8.4), where this warning is ignored on older OFEDs
<br>
<p>-Devendar
<br>
<p>On Sun, Dec 28, 2014 at 6:03 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I have a bunch of 8 GB memory nodes in a cluster who were lately
</span><br>
<span class="quotelev1">&gt; upgraded to 16 GB. When I run any jobs I get the following warning:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI jobs
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:              comp022.local
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     8192 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            16036 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Searching for a fix to this issue, I found that I have to set
</span><br>
<span class="quotelev1">&gt; log_num_mtt within the kernel module, so I added this line to
</span><br>
<span class="quotelev1">&gt; modprobe.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; options mlx4_core log_num_mtt=21
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But then ib0 interface fails to start showing this error:
</span><br>
<span class="quotelev1">&gt; ib_ipoib device ib0 does not seem to be present, delaying
</span><br>
<span class="quotelev1">&gt; initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reducing the value of log_num_mtt to 20, allows ib0 to start but shows
</span><br>
<span class="quotelev1">&gt; the registerable memory of 8 GB warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using OFED 1.3.1, I know it is pretty old and we are planning to
</span><br>
<span class="quotelev1">&gt; upgrade soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output on all nodes for 'ompi_info  -v ompi full --parsable':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r19401
</span><br>
<span class="quotelev1">&gt; orte:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt; orte:version:svn:r19401
</span><br>
<span class="quotelev1">&gt; opal:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt; opal:version:svn:r19401
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Waleed Lotfy
</span><br>
<span class="quotelev1">&gt; Bibliotheca Alexandrina
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">http://www.open-mpi.org/community/lists/users/2014/12/26076.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-Devendar
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26086/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26087.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26085.php">Diego Avesani: "Re: [OMPI users] ISEND + IRECV in a cycle stuck"</a>
<li><strong>In reply to:</strong> <a href="26076.php">Waleed Lotfy: "[OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
