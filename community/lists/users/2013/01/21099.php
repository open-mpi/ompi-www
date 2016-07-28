<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 17:39:47 2013" -->
<!-- isoreceived="20130110223947" -->
<!-- sent="Thu, 10 Jan 2013 23:39:40 +0100" -->
<!-- isosent="20130110223940" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="407FC234-0938-4F17-A9D4-FF3BD2C45450_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380B0A2B_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 17:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>In reply to:</strong> <a href="21095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A little bit of google shows that this is a known issue. ldrex and strex are not included in the default instruction set gcc uses (arm6). One has to add the compile flag &quot;-march=argv6k&quot; to successfully compiles.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: For more info: <a href="http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250">http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250</a>
<br>
<p><p>On Jan 10, 2013, at 16:20 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mmmm.  Let's rope in our ARM expert here...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leif, do you know what the issue is here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 3, 2013, at 4:28 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am going to compile OpenMPI 1.6.3 in Raspberry Pi and encounter following errors.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Entering directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt;  CC     class/opal_bitmap.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC     class/opal_free_list.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC     class/opal_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC     class/opal_list.lo
</span><br>
<span class="quotelev2">&gt;&gt;  CC     class/opal_object.lo
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccniCtj0.s: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccniCtj0.s:83: Error: selected processor does not support ARM mode `ldrex r3,[r1]'
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccniCtj0.s:86: Error: selected processor does not support ARM mode `strex r4,r0,[r1]'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [class/opal_object.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone have any idea to fix that issue?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Fedora 17 rootfs and kernel version is &quot;Linux fedora-arm 3.6.11+ #1 PREEMPT Wed Jan 2 15:14:23 CST 2013 armv6l armv6l armv6l GNU/Linux&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eric Lee
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Previous message:</strong> <a href="21098.php">Ralph Castain: "Re: [OMPI users] problem: help-hostfile.txt: Too many open files in system."</a>
<li><strong>In reply to:</strong> <a href="21095.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21100.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
