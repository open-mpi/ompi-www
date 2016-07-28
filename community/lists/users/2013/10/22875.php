<?
$subject_val = "Re: [OMPI users] ofed installation";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 17:36:00 2013" -->
<!-- isoreceived="20131030213600" -->
<!-- sent="Wed, 30 Oct 2013 14:36:00 -0700" -->
<!-- isosent="20131030213600" -->
<!-- name="Robo Beans" -->
<!-- email="robobeans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ofed installation" -->
<!-- id="CAK7N9poqZh-tas46CcDhMa112VJPozQ53TXpM1QRf=76kkc=iQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB73286347F_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>From:</strong> Robo Beans (<em>robobeans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 17:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22874.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>In reply to:</strong> <a href="22873.php">Elken, Tom: "Re: [OMPI users] ofed installation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks guys for your time.
<br>
<p>I have latest version of kernel and kernel-devel
<br>
(kernel-2.6.32-358.23.2.el6.x86_64 and kernel-devel-2.6.32-358.23.2.el6.x86_64)
<br>
but i believe ofed installer was looking for base version of kernel and
<br>
kernel-devel (2.6.32-358.el6.x86_64)
<br>
<p>root_at_scc-10-2-xx-xx:/opt/OFED-1.5.3.2# *rpm -qa | grep &quot;kernel&quot;*
<br>
kernel-devel-2.6.32-358.23.2.el6.x86_64
<br>
kernel-firmware-2.6.32-358.23.2.el6.noarch
<br>
dracut-kernel-004-303.el6.noarch
<br>
kernel-2.6.32-358.el6.x86_64
<br>
kernel-headers-2.6.32-358.23.2.el6.x86_64
<br>
kernel-2.6.32-358.14.1.el6.x86_64
<br>
kernel-2.6.32-358.23.2.el6.x86_64
<br>
<p>In order to take care of this error
<br>
&quot;/lib/modules/2.6.32-358.el6.x86_64/build/scripts
<br>
is required to build kernel-ib RPM.&quot;
<br>
<p>I had to rollback to  &quot;kernel-devel-2.6.32-358.el6.x86_64.rpm&quot;
<br>
<p>&nbsp;*rpm -Uvh --oldpackage kernel-devel-2.6.32-358.el6.x86_64.rpm*
<br>
<p><p><p>Robo
<br>
<p><p>On Wed, Oct 30, 2013 at 2:24 PM, Elken, Tom &lt;tom.elken_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Just to give a quick pointer&#133;  RHEL 6.4 is pretty new, and OFED 1.5.3.2
</span><br>
<span class="quotelev1">&gt; is pretty old, so that is likely the root of your issue.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the first OFED that supported RHEL 6.4 , which is roughly =
</span><br>
<span class="quotelev1">&gt; CentOS 6.4, is OFED 3.5-1:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/OFED/ofed-3.5-1/">http://www.openfabrics.org/downloads/OFED/ofed-3.5-1/</a> ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What also might work for you (with newer packages and more bug fixes is
</span><br>
<span class="quotelev1">&gt; 3.5-2 RC2 from ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.openfabrics.org/downloads/OFED/ofed-3.5-2/">http://www.openfabrics.org/downloads/OFED/ofed-3.5-2/</a> ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Tom****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Robo
</span><br>
<span class="quotelev1">&gt; Beans
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, October 30, 2013 1:30 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] ofed installation****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did try ofed forum:
</span><br>
<span class="quotelev1">&gt; <a href="https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882">https://www.openfabrics.org/forum/7-installation/882-ofed-1532.html#882</a>***
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but was wondering if group members faced similar issue as well while
</span><br>
<span class="quotelev1">&gt; installing ofed and what steps they followed to resolve it? Thanks!****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 30, 2013 at 1:22 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:**
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks to me like that's an error from the OFED installer, not something
</span><br>
<span class="quotelev1">&gt; from OMPI. Have you tried their mailing list?****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2013, at 1:05 PM, Robo Beans &lt;robobeans_at_[hidden]&gt; wrote:****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello everyone,****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to install ofed-1.5.3.2 on centos 6.4 using install.plprovided but getting following error:
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /lib/modules/2.6.32-358.el6.x86_64/build/scripts is required to build
</span><br>
<span class="quotelev1">&gt; kernel-ib RPM.****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; // info. about current kernel****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *$ uname -a*****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux scc-10-2-xx-xx-xyz.com 2.6.32-358.el6.x86_64 #1 SMP Fri Feb 22
</span><br>
<span class="quotelev1">&gt; 00:31:26 UTC 2013 x86_64 x86_64 x86_64 GNU/Linux****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If possible, could someone from the group please direct me what needs to
</span><br>
<span class="quotelev1">&gt; be done to resolve this issue? Thanks!****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robo****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ** **
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** **
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22875/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22876.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22874.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>In reply to:</strong> <a href="22873.php">Elken, Tom: "Re: [OMPI users] ofed installation"</a>
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
