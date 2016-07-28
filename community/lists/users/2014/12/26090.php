<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 31 02:21:52 2014" -->
<!-- isoreceived="20141231072152" -->
<!-- sent="Wed, 31 Dec 2014 07:18:12 +0000" -->
<!-- isosent="20141231071812" -->
<!-- name="Waleed Lotfy" -->
<!-- email="Waleed.Lotfy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="72AAB83113C15C4CBB7CDE3037A199CB8B45E665_at_BEXGW-H20514.local.bibalex.dom" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54A2E860.1060009_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Waleed Lotfy (<em>Waleed.Lotfy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-31 02:18:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Gus for your help.

We have been working on upgrading OFED and OMPI last few days, so I don't have access to nodes running the outdated OFED at the moment and the updated ones should be ready to test today.

I remember checking limits.conf and setting it to unlimited but the warning kept showing up.

We use grid engine and I set the memory unlimited. However, I don't think the scheduler has anything to do with the problem since I tried to run an MPI job directly and the same warning appeared.

Adding these parameters yielded an error for the option 'log_mtts_per_seg', I can't recall the error exactly but it was something like option not recognized or not supported. And setting 'log_num_mtt', as mentioned before, causes ib0 interface to fail.

I'll report back what happens on the updated versions.

Waleed Lotfy
Bibliotheca Alexandrina
________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Gus Correa [gus_at_[hidden]]
Sent: Tuesday, December 30, 2014 8:01 PM
To: Open MPI Users
Subject: Re: [OMPI users] Icreasing OFED registerable memory

Hi Waleed

Even before any OFED upgrades, you could try the items
in the list below.
I have OMPI 1.6.5 and 1.8.3 working with an older OFED version,
with those settings.
That is not really OMPI fault, but Infinband/OFED's.

1) Make sure your locked memory is set to unlimited in
/etc/security/limits.conf

For instance:

*               soft    memlock         unlimited
*               hard    memlock         unlimited


2) If you are using a queue system, make sure it sets the
locked memory to unlimited, so that all child processes
(including your mpiexec and mpi executable) will get it.

For instance, in Torque /etc/init.d/pbs_mom
or in /etc/sysconfig/pbs_mom:

# locked memory
ulimit -l unlimited

3) Add the parameters below to
/etc/modprobe.d/mlx4_core.conf

options mlx4_core log_num_mtt=22 log_mtts_per_seg=1

Do this with care, as the settings vary according to the physical RAM.
In addition,  the parameters seem to have been deprecated in 3.X
kernels, which makes this tricky.

See these FAQs:

<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-user</a>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages-more</a>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>

***
Having said that, a question remains unanswered:
Why is Infiniband such a nightmare?
***

I hope this helps,
Gus Correa

On 12/30/2014 09:16 AM, Waleed Lotfy wrote:
&gt; Thank Devendar for your response.
&gt;
&gt; I'll test it on a new installation with OFED 2.3.2 and OMPI v1.6.5. If it didn't work I'll give 1.8.4 a try.
&gt;
&gt; Thank you for your help and I'll get back to you with hopefully good results.
&gt;
&gt; Waleed Lotfy
&gt; Bibliotheca Alexandrina
&gt; ________________________________
&gt; From: users [users-bounces_at_[hidden]] on behalf of Deva [devendar.bureddy_at_[hidden]]
&gt; Sent: Monday, December 29, 2014 8:29 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Icreasing OFED registerable memory
&gt;
&gt; Hi Waleed,
&gt;
&gt; It is highly recommended to upgrade to latest OFED.  Meanwhile, Can you try latest OMPI release (v1.8.4), where this warning is ignored on older OFEDs
&gt;
&gt; -Devendar
&gt;
&gt; On Sun, Dec 28, 2014 at 6:03 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&lt;mailto:Waleed.Lotfy_at_[hidden]&gt;&gt; wrote:
&gt; I have a bunch of 8 GB memory nodes in a cluster who were lately
&gt; upgraded to 16 GB. When I run any jobs I get the following warning:
&gt; --------------------------------------------------------------------------
&gt; WARNING: It appears that your OpenFabrics subsystem is configured to
&gt; only
&gt; allow registering part of your physical memory.  This can cause MPI jobs
&gt; to
&gt; run with erratic performance, hang, and/or crash.
&gt;
&gt; This may be caused by your OpenFabrics vendor limiting the amount of
&gt; physical memory that can be registered.  You should investigate the
&gt; relevant Linux kernel module parameters that control how much physical
&gt; memory can be registered, and increase them to allow registering all
&gt; physical memory on your machine.
&gt;
&gt; See this Open MPI FAQ item for more information on these Linux kernel
&gt; module
&gt; parameters:
&gt;
&gt;      <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
&gt;
&gt;    Local host:              comp022.local
&gt;    Registerable memory:     8192 MiB
&gt;    Total memory:            16036 MiB
&gt;
&gt; Your MPI job will continue, but may be behave poorly and/or hang.
&gt; --------------------------------------------------------------------------
&gt;
&gt; Searching for a fix to this issue, I found that I have to set
&gt; log_num_mtt within the kernel module, so I added this line to
&gt; modprobe.conf:
&gt;
&gt; options mlx4_core log_num_mtt=21
&gt;
&gt; But then ib0 interface fails to start showing this error:
&gt; ib_ipoib device ib0 does not seem to be present, delaying
&gt; initialization.
&gt;
&gt; Reducing the value of log_num_mtt to 20, allows ib0 to start but shows
&gt; the registerable memory of 8 GB warning.
&gt;
&gt; I am using OFED 1.3.1, I know it is pretty old and we are planning to
&gt; upgrade soon.
&gt;
&gt; Output on all nodes for 'ompi_info  -v ompi full --parsable':
&gt;
&gt; ompi:version:full:1.2.7
&gt; ompi:version:svn:r19401
&gt; orte:version:full:1.2.7
&gt; orte:version:svn:r19401
&gt; opal:version:full:1.2.7
&gt; opal:version:svn:r19401
&gt;
&gt; Any help would be appreciated.
&gt;
&gt; Waleed Lotfy
&gt; Bibliotheca Alexandrina
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">http://www.open-mpi.org/community/lists/users/2014/12/26076.php</a>
&gt;
&gt;
&gt;
&gt; --
&gt;
&gt;
&gt; -Devendar
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26088.php">http://www.open-mpi.org/community/lists/users/2014/12/26088.php</a>
&gt;

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26089.php">http://www.open-mpi.org/community/lists/users/2014/12/26089.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26091.php">Diego Avesani: "[OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
