<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 30 13:01:16 2014" -->
<!-- isoreceived="20141230180116" -->
<!-- sent="Tue, 30 Dec 2014 13:01:04 -0500" -->
<!-- isosent="20141230180104" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="54A2E860.1060009_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="72AAB83113C15C4CBB7CDE3037A199CB8B45E639_at_BEXGW-H20514.local.bibalex.dom" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-30 13:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Waleed
<br>
<p>Even before any OFED upgrades, you could try the items
<br>
in the list below.
<br>
I have OMPI 1.6.5 and 1.8.3 working with an older OFED version,
<br>
with those settings.
<br>
That is not really OMPI fault, but Infinband/OFED's.
<br>
<p>1) Make sure your locked memory is set to unlimited in
<br>
/etc/security/limits.conf
<br>
<p>For instance:
<br>
<p>*		soft	memlock		unlimited
<br>
*		hard	memlock		unlimited
<br>
<p><p>2) If you are using a queue system, make sure it sets the
<br>
locked memory to unlimited, so that all child processes
<br>
(including your mpiexec and mpi executable) will get it.
<br>
<p>For instance, in Torque /etc/init.d/pbs_mom
<br>
or in /etc/sysconfig/pbs_mom:
<br>
<p># locked memory
<br>
ulimit -l unlimited
<br>
<p>3) Add the parameters below to
<br>
/etc/modprobe.d/mlx4_core.conf
<br>
<p>options mlx4_core log_num_mtt=22 log_mtts_per_seg=1
<br>
<p>Do this with care, as the settings vary according to the physical RAM.
<br>
In addition,  the parameters seem to have been deprecated in 3.X 
<br>
kernels, which makes this tricky.
<br>
<p>See these FAQs:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>***
<br>
Having said that, a question remains unanswered:
<br>
Why is Infiniband such a nightmare?
<br>
***
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 12/30/2014 09:16 AM, Waleed Lotfy wrote:
<br>
<span class="quotelev1">&gt; Thank Devendar for your response.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll test it on a new installation with OFED 2.3.2 and OMPI v1.6.5. If it didn't work I'll give 1.8.4 a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help and I'll get back to you with hopefully good results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Waleed Lotfy
</span><br>
<span class="quotelev1">&gt; Bibliotheca Alexandrina
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Deva [devendar.bureddy_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 29, 2014 8:29 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Icreasing OFED registerable memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Waleed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is highly recommended to upgrade to latest OFED.  Meanwhile, Can you try latest OMPI release (v1.8.4), where this warning is ignored on older OFEDs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Dec 28, 2014 at 6:03 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&lt;mailto:Waleed.Lotfy_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I have a bunch of 8 GB memory nodes in a cluster who were lately
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
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Local host:              comp022.local
</span><br>
<span class="quotelev1">&gt;    Registerable memory:     8192 MiB
</span><br>
<span class="quotelev1">&gt;    Total memory:            16036 MiB
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
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">http://www.open-mpi.org/community/lists/users/2014/12/26076.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26088.php">http://www.open-mpi.org/community/lists/users/2014/12/26088.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26088.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26090.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
