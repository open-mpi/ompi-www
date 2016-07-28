<?
$subject_val = "Re: [OMPI users] OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 30 03:22:56 2014" -->
<!-- isoreceived="20141230082256" -->
<!-- sent="Tue, 30 Dec 2014 17:22:47 +0900" -->
<!-- isosent="20141230082247" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Icreasing OFED registerable memory" -->
<!-- id="kek944bk0tiu21e9oke9lour.1419927767089_at_email.android.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] OMPI users] Icreasing OFED registerable memory" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Icreasing OFED registerable memory<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-30 03:22:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW ompi does not yet support XRC with OFED 3.12.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>Deva &lt;devendar.bureddy_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
<br>
<span class="quotelev1">&gt;Hi Waleed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It is highly recommended to upgrade to latest OFED.&#194;&#160; Meanwhile, Can you try latest OMPI release (v1.8.4), where this warning is ignored on older OFEDs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Devendar&#194;&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Sun, Dec 28, 2014 at 6:03 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I have a bunch of 8 GB memory nodes in a cluster who were lately
</span><br>
<span class="quotelev1">&gt;upgraded to 16 GB. When I run any jobs I get the following warning:
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;WARNING: It appears that your OpenFabrics subsystem is configured to
</span><br>
<span class="quotelev1">&gt;only
</span><br>
<span class="quotelev1">&gt;allow registering part of your physical memory.&#194;&#160; This can cause MPI jobs
</span><br>
<span class="quotelev1">&gt;to
</span><br>
<span class="quotelev1">&gt;run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt;physical memory that can be registered.&#194;&#160; You should investigate the
</span><br>
<span class="quotelev1">&gt;relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt;memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt;physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;See this Open MPI FAQ item for more information on these Linux kernel
</span><br>
<span class="quotelev1">&gt;module
</span><br>
<span class="quotelev1">&gt;parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; &#194;&#160; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;&#194;&#160; Local host:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; comp022.local
</span><br>
<span class="quotelev1">&gt;&#194;&#160; Registerable memory:&#194;&#160; &#194;&#160; &#194;&#160;8192 MiB
</span><br>
<span class="quotelev1">&gt;&#194;&#160; Total memory:&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; 16036 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Searching for a fix to this issue, I found that I have to set
</span><br>
<span class="quotelev1">&gt;log_num_mtt within the kernel module, so I added this line to
</span><br>
<span class="quotelev1">&gt;modprobe.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;options mlx4_core log_num_mtt=21
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;But then ib0 interface fails to start showing this error:
</span><br>
<span class="quotelev1">&gt;ib_ipoib device ib0 does not seem to be present, delaying
</span><br>
<span class="quotelev1">&gt;initialization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Reducing the value of log_num_mtt to 20, allows ib0 to start but shows
</span><br>
<span class="quotelev1">&gt;the registerable memory of 8 GB warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am using OFED 1.3.1, I know it is pretty old and we are planning to
</span><br>
<span class="quotelev1">&gt;upgrade soon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Output on all nodes for 'ompi_info&#194;&#160; -v ompi full --parsable':
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;ompi:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt;ompi:version:svn:r19401
</span><br>
<span class="quotelev1">&gt;orte:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt;orte:version:svn:r19401
</span><br>
<span class="quotelev1">&gt;opal:version:full:1.2.7
</span><br>
<span class="quotelev1">&gt;opal:version:svn:r19401
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any help would be appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Waleed Lotfy
</span><br>
<span class="quotelev1">&gt;Bibliotheca Alexandrina
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">http://www.open-mpi.org/community/lists/users/2014/12/26076.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
