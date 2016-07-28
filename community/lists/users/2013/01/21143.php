<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 04:04:35 2013" -->
<!-- isoreceived="20130117090435" -->
<!-- sent="Thu, 17 Jan 2013 17:04:29 +0800" -->
<!-- isosent="20130117090429" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="CAOJJ1ZqyB-4faNkwwkoo+NawOvzqJAsWYfjBhM0EinyxthuPkA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380B3A11_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 04:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21111.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, sorry to reply this thread so late. I tried and it works well.
<br>
However, it takes me about 12 hrs to compile he while package so I
<br>
gonna cross-compile in my laptop w/ proper toolchain I created. Here's
<br>
the command line I used.
<br>
<p>./configure --build=x86_64-redhat-linux
<br>
--host=arm-unknown-linux-gnueabi CFLAGS=&quot;-Ofast -mfpu=vfp
<br>
-mfloat-abi=hard -march=armv6zk -mtune=arm1176jzf-s&quot;
<br>
<p>......
<br>
<p>*** Assembler
<br>
checking dependency style of arm-unknown-linux-gnueabi-gcc... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)...
<br>
/home/huli/Projects/arm-devel/bin/arm-unknown-linux-gnueabi-nm -B
<br>
checking the name lister
<br>
(/home/huli/Projects/arm-devel/bin/arm-unknown-linux-gnueabi-nm -B)
<br>
interface... BSD nm
<br>
checking for fgrep... /bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... yes
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... #
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
configure: error: No atomic primitives available for arm-unknown-linux-gnueabi
<br>
<p>......
<br>
<p>Do we have any way to fix that?
<br>
<p>Thanks.
<br>
<p>On Sat, Jan 12, 2013 at 3:14 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Ok, I was able to configure and run successfully on my Raspberry Pi with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ./configure CCASFLAGS=-march=armv7-a ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that something we should put on a FAQ page?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 11, 2013, at 7:11 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This one belong to arm7 instruction set. Please try one of the following `armv7', `armv7-a', `armv7-r'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 11, 2013, at 00:38 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sadly, none of these solutions worked for me on my RPi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-mcpu=arm1176jzf-s
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-march=armv6zk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ make CCASFLAGS=-march=argv6k
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cc1: error: bad value (argv6k) for -march switch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Although I'm using a bit different system than the original user cited (I'm running the latest Raspbian distro):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux raspberrypi 3.2.27+ #250 PREEMPT Thu Oct 18 19:03:02 BST 2012 armv6l GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pi_at_raspberrypi ~/openmpi-1.6.3/opal/asm $ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc (Debian 4.6.3-12+rpi1) 4.6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 10, 2013, at 5:39 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A little bit of google shows that this is a known issue. ldrex and strex are not included in the default instruction set gcc uses (arm6). One has to add the compile flag &quot;-march=argv6k&quot; to successfully compiles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; George.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS: For more info: <a href="http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250">http://www.raspberrypi.org/phpBB3/viewtopic.php?f=9&amp;t=4256&amp;start=250</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 10, 2013, at 16:20 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Mmmm.  Let's rope in our ARM expert here...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Leif, do you know what the issue is here?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 3, 2013, at 4:28 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I am going to compile OpenMPI 1.6.3 in Raspberry Pi and encounter following errors.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Entering directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC     class/opal_bitmap.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC     class/opal_free_list.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC     class/opal_hash_table.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC     class/opal_list.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; CC     class/opal_object.lo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/ccniCtj0.s: Assembler messages:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/ccniCtj0.s:83: Error: selected processor does not support ARM mode `ldrex r3,[r1]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /tmp/ccniCtj0.s:86: Error: selected processor does not support ARM mode `strex r4,r0,[r1]'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: *** [class/opal_object.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[2]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make[1]: Leaving directory `/root/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can anyone have any idea to fix that issue?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm using Fedora 17 rootfs and kernel version is &quot;Linux fedora-arm 3.6.11+ #1 PREEMPT Wed Jan 2 15:14:23 CST 2013 armv6l armv6l armv6l GNU/Linux&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Eric Lee
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21144.php">borja mf: "Re: [OMPI users] Error running program : mca_oob_tcp_msg_send_handler: writev:failed: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="21142.php">Karos Lotfifar: "Re: [OMPI users] Problem with mpirun for java codes"</a>
<li><strong>In reply to:</strong> <a href="21111.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
