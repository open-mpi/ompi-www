<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 08:25:46 2007" -->
<!-- isoreceived="20070717122546" -->
<!-- sent="Tue, 17 Jul 2007 15:25:39 +0300" -->
<!-- isosent="20070717122539" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_init_Segmentation Fault" -->
<!-- id="20070717122539.GG5125_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="24C808F7-1D4E-4649-A74C-E4FB0A6FBA6F_at_cisco.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 08:25:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 17, 2007 at 07:17:58AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Unfortunately, this looks like a problem with your gcc installation  
</span><br>
<span class="quotelev1">&gt; -- a compiler should never seg fault when it's trying to compile C  
</span><br>
<span class="quotelev1">&gt; source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: the file in question that it's trying to compile is actually  
</span><br>
<span class="quotelev1">&gt; from GNU Libtool (which is included in Open MPI).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should probably investigate your C compiler to ensure that it's  
</span><br>
<span class="quotelev1">&gt; working properly.
</span><br>
gcc SEGV usually a first sign of faulty memory. Run memtest ASAP.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 17, 2007, at 7:06 AM, Igor Miskovski wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When i try to install OpenMPI on Linux Suse 10.2 on AMDX2 Dual Core  
</span><br>
<span class="quotelev2">&gt; &gt; processor i get the following message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Entering directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt; &gt; if /bin/sh ./libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev2">&gt; &gt; I. -I. -I.  - 
</span><br>
<span class="quotelev2">&gt; &gt; D                                                            
</span><br>
<span class="quotelev2">&gt; &gt; LT_CONFIG_H='&lt; config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./ 
</span><br>
<span class="quotelev2">&gt; &gt; libltdl   - 
</span><br>
<span class="quotelev2">&gt; &gt; O3                                                            - 
</span><br>
<span class="quotelev2">&gt; &gt; DNDEBUG  -MT dlopen.lo -MD -MP -MF &quot;.deps/dlopen.Tpo&quot; -c -o  
</span><br>
<span class="quotelev2">&gt; &gt; dlopen.lo `test - 
</span><br>
<span class="quotelev2">&gt; &gt; f                                                             
</span><br>
<span class="quotelev2">&gt; &gt; 'loaders/dlopen.c' || echo './'`loaders/dlopen.c; \
</span><br>
<span class="quotelev2">&gt; &gt;         then mv -f &quot;.deps/dlopen.Tpo&quot; &quot;.deps/dlopen.Plo&quot;; else rm - 
</span><br>
<span class="quotelev2">&gt; &gt; f &quot;.deps/ 
</span><br>
<span class="quotelev2">&gt; &gt; dlop                                                            
</span><br>
<span class="quotelev2">&gt; &gt; en.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev2">&gt; &gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I. &quot;-DLT_CONFIG_H=&lt;  
</span><br>
<span class="quotelev2">&gt; &gt; config.h&gt;&quot; - 
</span><br>
<span class="quotelev2">&gt; &gt; D                                                           LTDL - 
</span><br>
<span class="quotelev2">&gt; &gt; I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT dlopen.lo  
</span><br>
<span class="quotelev2">&gt; &gt; -MD -M                                                           P - 
</span><br>
<span class="quotelev2">&gt; &gt; MF .deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
</span><br>
<span class="quotelev2">&gt; &gt; loaders/dlopen.c: In function 'dlopen_LTX_get_vtable':
</span><br>
<span class="quotelev2">&gt; &gt; loaders/dlopen.c:84: internal compiler error: Segmentation fault
</span><br>
<span class="quotelev2">&gt; &gt; Please submit a full bug report,
</span><br>
<span class="quotelev2">&gt; &gt; with preprocessed source if appropriate.
</span><br>
<span class="quotelev2">&gt; &gt; See &lt;URL: <a href="http://bugs.opensuse.org">http://bugs.opensuse.org</a>&gt; for instructions.
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [dlopen.lo] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/home/igor/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can somebody help me?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Igor Miskovski
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3690.php">Bill Johnstone: "[OMPI users] mpirun hanging followup"</a>
<li><strong>Previous message:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
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
