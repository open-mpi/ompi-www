<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 30 09:19:45 2014" -->
<!-- isoreceived="20141230141945" -->
<!-- sent="Tue, 30 Dec 2014 14:16:09 +0000" -->
<!-- isosent="20141230141609" -->
<!-- name="Waleed Lotfy" -->
<!-- email="Waleed.Lotfy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="72AAB83113C15C4CBB7CDE3037A199CB8B45E639_at_BEXGW-H20514.local.bibalex.dom" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CABB+w0T=MY=aVrqLky1Xg+OdfRrq5gFgDjWNzu+g1tRfwG5ECw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-12-30 09:16:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26087.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank Devendar for your response.
<br>
<p>I'll test it on a new installation with OFED 2.3.2 and OMPI v1.6.5. If it didn't work I'll give 1.8.4 a try.
<br>
<p>Thank you for your help and I'll get back to you with hopefully good results.
<br>
<p>Waleed Lotfy
<br>
Bibliotheca Alexandrina
<br>
________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Deva [devendar.bureddy_at_[hidden]]
<br>
Sent: Monday, December 29, 2014 8:29 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Icreasing OFED registerable memory
<br>
<p>Hi Waleed,
<br>
<p>It is highly recommended to upgrade to latest OFED.  Meanwhile, Can you try latest OMPI release (v1.8.4), where this warning is ignored on older OFEDs
<br>
<p>-Devendar
<br>
<p>On Sun, Dec 28, 2014 at 6:03 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&lt;mailto:Waleed.Lotfy_at_[hidden]&gt;&gt; wrote:
<br>
I have a bunch of 8 GB memory nodes in a cluster who were lately
<br>
upgraded to 16 GB. When I run any jobs I get the following warning:
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to
<br>
only
<br>
allow registering part of your physical memory.  This can cause MPI jobs
<br>
to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>This may be caused by your OpenFabrics vendor limiting the amount of
<br>
physical memory that can be registered.  You should investigate the
<br>
relevant Linux kernel module parameters that control how much physical
<br>
memory can be registered, and increase them to allow registering all
<br>
physical memory on your machine.
<br>
<p>See this Open MPI FAQ item for more information on these Linux kernel
<br>
module
<br>
parameters:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;Local host:              comp022.local
<br>
&nbsp;&nbsp;Registerable memory:     8192 MiB
<br>
&nbsp;&nbsp;Total memory:            16036 MiB
<br>
<p>Your MPI job will continue, but may be behave poorly and/or hang.
<br>
--------------------------------------------------------------------------
<br>
<p>Searching for a fix to this issue, I found that I have to set
<br>
log_num_mtt within the kernel module, so I added this line to
<br>
modprobe.conf:
<br>
<p>options mlx4_core log_num_mtt=21
<br>
<p>But then ib0 interface fails to start showing this error:
<br>
ib_ipoib device ib0 does not seem to be present, delaying
<br>
initialization.
<br>
<p>Reducing the value of log_num_mtt to 20, allows ib0 to start but shows
<br>
the registerable memory of 8 GB warning.
<br>
<p>I am using OFED 1.3.1, I know it is pretty old and we are planning to
<br>
upgrade soon.
<br>
<p>Output on all nodes for 'ompi_info  -v ompi full --parsable':
<br>
<p>ompi:version:full:1.2.7
<br>
ompi:version:svn:r19401
<br>
orte:version:full:1.2.7
<br>
orte:version:svn:r19401
<br>
opal:version:full:1.2.7
<br>
opal:version:svn:r19401
<br>
<p>Any help would be appreciated.
<br>
<p>Waleed Lotfy
<br>
Bibliotheca Alexandrina
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/26076.php">http://www.open-mpi.org/community/lists/users/2014/12/26076.php</a>
<br>
<p><p><p><pre>
--
-Devendar
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26087.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26086.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26089.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
