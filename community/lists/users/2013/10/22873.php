<?
$subject_val = "Re: [OMPI users] ofed installation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 17:24:41 2013" -->
<!-- isoreceived="20131030212441" -->
<!-- sent="Wed, 30 Oct 2013 21:24:37 +0000" -->
<!-- isosent="20131030212437" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofed installation" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB73286347F_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAK7N9ppCMwK-UaeS7pdjaqVDGtPKiyDHrX61xiZFjDm5TV7cPw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ofed installation<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 17:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22874.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<li><strong>Reply:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to give a quick pointer...  RHEL 6.4 is pretty new, and OFED 1.5.3.2 is pretty old, so that is likely the root of your issue.
<br>
<p>I believe the first OFED that supported RHEL 6.4 , which is roughly = CentOS 6.4, is OFED 3.5-1:
<br>
<a href="http://www.openfabrics.org/downloads/OFED/ofed-3.5-1/">http://www.openfabrics.org/downloads/OFED/ofed-3.5-1/</a>
<br>
<p>What also might work for you (with newer packages and more bug fixes is 3.5-2 RC2 from
<br>
<a href="http://www.openfabrics.org/downloads/OFED/ofed-3.5-2/">http://www.openfabrics.org/downloads/OFED/ofed-3.5-2/</a>
<br>
<p>-Tom
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Robo Beans
<br>
Sent: Wednesday, October 30, 2013 1:30 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] ofed installation
<br>
<p>I did try ofed forum: <a href="https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882">https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882</a>
<br>
<p>but was wondering if group members faced similar issue as well while installing ofed and what steps they followed to resolve it? Thanks!
<br>
<p><p>Robo
<br>
<p>On Wed, Oct 30, 2013 at 1:22 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Looks to me like that's an error from the OFED installer, not something from OMPI. Have you tried their mailing list?
<br>
<p><p>On Oct 30, 2013, at 1:05 PM, Robo Beans &lt;robobeans_at_[hidden]&lt;mailto:robobeans_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hello everyone,
<br>
<p>I am trying to install ofed-1.5.3.2 on centos 6.4 using install.pl&lt;<a href="http://install.pl/">http://install.pl/</a>&gt; provided but getting following error:
<br>
<p>/lib/modules/2.6.32-358.el6.x86_64/build/scripts is required to build kernel-ib RPM.
<br>
<p>// info. about current kernel
<br>
<p>$ uname -a
<br>
<p>Linux scc-10-2-xx-xx-xyz.com&lt;<a href="http://scc-10-2-xx-xx-xyz.com/">http://scc-10-2-xx-xx-xyz.com/</a>&gt; 2.6.32-358.el6.x86_64 #1 SMP Fri Feb 22 00:31:26 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p><p><p>If possible, could someone from the group please direct me what needs to be done to resolve this issue? Thanks!
<br>
<p><p><p>Robo
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22873/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22874.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22872.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>In reply to:</strong> <a href="22867.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
<li><strong>Reply:</strong> <a href="22875.php">Robo Beans: "Re: [OMPI users] ofed installation"</a>
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
