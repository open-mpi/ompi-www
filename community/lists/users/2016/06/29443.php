<?
$subject_val = "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 16:13:01 2016" -->
<!-- isoreceived="20160614201301" -->
<!-- sent="Tue, 14 Jun 2016 16:13:00 -0400" -->
<!-- isosent="20160614201300" -->
<!-- name="Ryan Novosielski" -->
<!-- email="novosirj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Big jump from OFED 1.5.4.1 -&amp;gt; recent (stable). Any suggestions?" -->
<!-- id="5760654C.1020005_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="002201d1c660$c775c800$56615800$_at_soft-forge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?<br>
<strong>From:</strong> Ryan Novosielski (<em>novosirj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-14 16:13:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29437.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm pretty sure it is based on a version:
<br>
<p>[root_at_perceval2 prepJobs]# modinfo mlx4_core
<br>
filename:
<br>
/lib/modules/3.10.0-229.20.1.el7.x86_64/kernel/drivers/net/ethernet/mellanox/mlx4/mlx4_core.ko
<br>
version:        2.2-1
<br>
license:        Dual BSD/GPL
<br>
description:    Mellanox ConnectX HCA low-level driver
<br>
author:         Roland Dreier
<br>
rhelversion:    7.1
<br>
srcversion:     5151013CD3D852DD21274AB
<br>
...
<br>
intree:         Y
<br>
vermagic:       3.10.0-229.20.1.el7.x86_64 SMP mod_unload modversions
<br>
signer:         CentOS Linux kernel signing key
<br>
<p><p>On 06/14/2016 01:20 PM, Llolsten Kaonga wrote:
<br>
<span class="quotelev1">&gt; Hello Grigory,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure what Redhat does exactly but when you install the OS, there is
</span><br>
<span class="quotelev1">&gt; always an InfiniBand Support module during the installation process. We
</span><br>
<span class="quotelev1">&gt; never check/install that module when we do OS installations because it is
</span><br>
<span class="quotelev1">&gt; usually several versions of OFED behind (almost obsolete).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Grigory Shamov
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 14, 2016 12:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any
</span><br>
<span class="quotelev1">&gt; suggestions?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2016-06-14, 3:42 AM, &quot;users on behalf of Peter Kjellstr&#195;&#182;m&quot;
</span><br>
<span class="quotelev1">&gt; &lt;users-bounces_at_[hidden] on behalf of cap_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 13 Jun 2016 19:04:59 -0400
</span><br>
<span class="quotelev2">&gt;&gt; Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have not upgraded our OFED stack for a very long time, and still 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on an ancient version (1.5.4.1, yeah we know). We are now 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; considering a big jump from this version to a tested and stable 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recent version and would really appreciate any suggestions from the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; community.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some thoughts on the subject.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * Not installing an external ibstack is quite attractive imo.
</span><br>
<span class="quotelev2">&gt;&gt;  RHEL/CentOS stack (not based on any direct OFED version) works fine
</span><br>
<span class="quotelev2">&gt;&gt;  for us. It simplifies cluster maintenance (kernel updates etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am curious on how Redhat stack is &#194;&#179;not based on any direct OFED version&#194;&#178;? 
</span><br>
<span class="quotelev1">&gt; Doesn&#194;&#185;t Redhat just ship an old OFED build, or they do their own changes to
</span><br>
<span class="quotelev1">&gt; it like to the kernel?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Grigory Shamov
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Westgrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt; University of Manitoba
</span><br>
<span class="quotelev1">&gt; E2-588 EITC Building,
</span><br>
<span class="quotelev1">&gt; (204) 474-9625
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29436.php">http://www.open-mpi.org/community/lists/users/2016/06/29436.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29437.php">http://www.open-mpi.org/community/lists/users/2016/06/29437.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
____
|| \\UTGERS,     |---------------------------*O*---------------------------
||_// the State  |         Ryan Novosielski - novosirj_at_[hidden]
|| \\ University | Sr. Technologist - 973/972.0922 (2x0922) ~*~ RBHS Campus
||  \\    of NJ  | Office of Advanced Research Computing - MSB C630, Newark
     `'

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29443/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29444.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29442.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29437.php">Llolsten Kaonga: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29449.php">Peter Kjellström: "Re: [OMPI users] Big jump from OFED 1.5.4.1 -&gt; recent (stable). Any suggestions?"</a>
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
