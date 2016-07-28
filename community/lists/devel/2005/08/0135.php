<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 12 15:13:35 2005" -->
<!-- isoreceived="20050812201335" -->
<!-- sent="Fri, 12 Aug 2005 14:13:29 -0600" -->
<!-- isosent="20050812201329" -->
<!-- name="Nathan DeBardeleben" -->
<!-- email="ndebard_at_[hidden]" -->
<!-- subject="OMPI 32bit on a 64bit Linux box" -->
<!-- id="42FD02E9.4060902_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Nathan DeBardeleben (<em>ndebard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-12 15:13:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Brian Barrett: "Re:  build warnings.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've got a 64bit Linux (SUSE) box here.  For a variety of reasons 
<br>
(Java, JNI, linking in with OMPI libraries, etc which I won't get into) 
<br>
I need to compile OMPI 32 bit (or get 64bit versions of a lot of other 
<br>
libraries).
<br>
I get various compile errors when I try different things, but first let 
<br>
me explain the system we have:
<br>
<p><span class="quotelev1">&gt; [sparkplug]~/ompi &gt; uname -a
</span><br>
<span class="quotelev1">&gt; Linux sparkplug 2.6.10 #4 SMP Wed Jan 26 11:50:00 MST 2005 x86_64 
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt;
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; cat /etc/issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Welcome to SuSE Linux 9.1 (x86-64) - Kernel \r (\l).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [sparkplug]~/ompi &gt; 
</span><br>
<p>I tried the obvious:
<br>
<p><span class="quotelev1">&gt; ./configure CFLAGS=-m32 FFLAGS=-m32 .. &lt;other args&gt;
</span><br>
<p>The make then bailed out with compile errors:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  gcc -m32 -g -Wall -Wundef -Wno-long-long -Wsign-compare -Wmissing- 
</span><br>
<span class="quotelev1">&gt; prototypes -Wstrict-prototypes -Wcomment -pedantic -Werror- 
</span><br>
<span class="quotelev1">&gt; implicit-function-declaration -fno-strict-aliasing -c atomic-asm.s  -o 
</span><br>
<span class="quotelev1">&gt; atomic-asm.o
</span><br>
<span class="quotelev1">&gt; atomic-asm.s: Assembler messages:
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:6: Error: suffix or operands invalid for `push'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:7: Error: suffix or operands invalid for `movq'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:16: Error: suffix or operands invalid for `push'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:17: Error: suffix or operands invalid for `movq'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:26: Error: suffix or operands invalid for `push'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:27: Error: suffix or operands invalid for `movq'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:36: Error: suffix or operands invalid for `push'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:37: Error: suffix or operands invalid for `movq'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:38: Error: `-8(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:39: Error: `-12(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:40: Error: `-16(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:41: Error: `-16(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:42: Error: `-8(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:43: Error: `-12(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:45: Error: `(%rdx)' is not a valid 32 bit base/index  
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:47: Error: `-24(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:48: Error: `-24(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:49: Error: `-28(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:50: Error: `-28(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:51: Error: `-12(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:54: Error: `-28(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:55: Error: `-28(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:64: Error: suffix or operands invalid for `push'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:65: Error: suffix or operands invalid for `movq'
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:66: Error: `-8(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:67: Error: `-16(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:68: Error: `-24(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:69: Error: `-24(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:70: Error: `-8(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:71: Error: `-16(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:73: Error: `(%rdx)' is not a valid 32 bit base/index  
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:76: Error: `-32(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:77: Error: `-32(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; atomic-asm.s:78: Error: `-16(%rbp)' is not a valid 32 bit base/ index 
</span><br>
<span class="quotelev1">&gt; expression
</span><br>
<span class="quotelev1">&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/ndebard/ompi/opal/asm'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/ndebard/ompi/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>Greg Watson then suggested I add to me configure:
<br>
<p><span class="quotelev1">&gt; --build=i586-suse-linux
</span><br>
<p>That got the Make further, but now it dies saying:
<br>
<p><span class="quotelev1">&gt; /usr/lib64/gcc-lib/x86_64-suse-linux/3.3.3/../../../../x86_64-suse-linux/bin/ld: 
</span><br>
<span class="quotelev1">&gt; warning: i386 architecture of input file 
</span><br>
<span class="quotelev1">&gt; `../../../opal/.libs/libopal.a(memory.o)' is incompatible with 
</span><br>
<span class="quotelev1">&gt; i386:x86-64 output
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.a(mca_io_romio_dist_ad_nfs_read.o)(.text+0x106e): 
</span><br>
<span class="quotelev1">&gt; In function `mca_io_romio_dist_ADIOI_NFS_ReadStrided':
</span><br>
<span class="quotelev1">&gt; /home/ndebard/ompi/ompi/mca/io/romio/romio-dist/adio/ad_nfs/mca_io_romio_dist_ad_nfs_read.c:230: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `__divdi3'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.a(mca_io_romio_dist_ad_nfs_read.o)(.text+0x108f):/home/ndebard/ompi/ompi/mca/io/romio/romio-dist/adio/ad_nfs/mca_io_romio_dist_ad_nfs_read.c:231: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `__moddi3'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.a(mca_io_romio_dist_ad_nfs_write.o)(.text+0xf76): 
</span><br>
<span class="quotelev1">&gt; In function `mca_io_romio_dist_ADIOI_NFS_WriteStrided':
</span><br>
<span class="quotelev1">&gt; /home/ndebard/ompi/ompi/mca/io/romio/romio-dist/adio/ad_nfs/mca_io_romio_dist_ad_nfs_write.c:268: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `__divdi3'
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.a(mca_io_romio_dist_ad_nfs_write.o)(.text+0xf97):/home/ndebard/ompi/ompi/mca/io/romio/romio-dist/adio/ad_nfs/mca_io_romio_dist_ad_nfs_write.c:269: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `__moddi3'
</span><br>
<p>This goes on and on and on actually.  And the 'is incompatible with 
<br>
i386:x86-64 output' looks to be repeated for every line before this 
<br>
error which actually caused the Make to bomb.
<br>
<p>Any suggestions at all?  Surely someone must have tried to force OMPI to 
<br>
build in 32bit mode on a 64bit machine.
<br>
<p><pre>
-- 
-- Nathan
Correspondence
---------------------------------------------------------------------
Nathan DeBardeleben, Ph.D.
Los Alamos National Laboratory
Parallel Tools Team
High Performance Computing Environments
phone: 505-667-3428
email: ndebard_at_[hidden]
---------------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0134.php">Brian Barrett: "Re:  build warnings.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Reply:</strong> <a href="0136.php">Brian Barrett: "Re:  OMPI 32bit on a 64bit Linux box"</a>
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
