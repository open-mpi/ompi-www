<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 18:38:36 2013" -->
<!-- isoreceived="20130110233836" -->
<!-- sent="Thu, 10 Jan 2013 23:38:31 +0000" -->
<!-- isosent="20130110233831" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B1E89_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="407FC234-0938-4F17-A9D4-FF3BD2C45450_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-10 18:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21101.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sadly, none of these solutions worked for me on my RPi:
<br>
<p>-----
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-mcpu=arm1176jzf-s
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
make: *** [atomic-asm.lo] Error 1
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-march=armv6zk
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
atomic-asm.S: Assembler messages:
<br>
atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
<br>
atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
<br>
make: *** [atomic-asm.lo] Error 1
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-march=argv6k
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
cc1: error: bad value (argv6k) for -march switch
<br>
make: *** [atomic-asm.lo] Error 1
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ 
<br>
-----
<br>
<p>Although I'm using a bit different system than the original user cited (I'm running the latest Raspbian distro):
<br>
<p>-----
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ uname -a
<br>
Linux raspberrypi 3.2.27+ #250 PREEMPT Thu Oct 18 19:03:02 BST 2012 armv6l GNU/Linux
<br>
pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ gcc --version
<br>
gcc (Debian 4.6.3-12+rpi1) 4.6.3
<br>
-----
<br>
<p>On Jan 10, 2013, at 5:39 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; A little bit of google shows that this is a known issue. ldrex and strex are not included in the default instruction set gcc uses (arm6). One has to add the compile flag &quot;-march=argv6k&quot; to successfully compiles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: For more info: <a href="http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250">http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2013, at 16:20 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mmmm.  Let's rope in our ARM expert here...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Leif, do you know what the issue is here?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 3, 2013, at 4:28 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am going to compile OpenMPI 1.6.3 in Raspberry Pi and encounter following errors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Entering directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     class/opal_bitmap.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     class/opal_free_list.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     class/opal_hash_table.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     class/opal_list.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     class/opal_object.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/ccniCtj0.s: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/ccniCtj0.s:83: Error: selected processor does not support ARM mode `ldrex r3,[r1]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/ccniCtj0.s:86: Error: selected processor does not support ARM mode `strex r4,r0,[r1]'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [class/opal_object.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone have any idea to fix that issue?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using Fedora 17 rootfs and kernel version is &quot;Linux fedora-arm 3.6.11+ #1 PREEMPT Wed Jan 2 15:14:23 CST 2013 armv6l armv6l armv6l GNU/Linux&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric Lee
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21101.php">Siegmar Gross: "[OMPI users] Error compiling openmpi-1.6.4a1r27766 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>In reply to:</strong> <a href="21099.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21102.php">George Bosilca: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
