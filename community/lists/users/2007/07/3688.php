<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 07:18:07 2007" -->
<!-- isoreceived="20070717111807" -->
<!-- sent="Tue, 17 Jul 2007 07:17:58 -0400" -->
<!-- isosent="20070717111758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_init_Segmentation Fault" -->
<!-- id="24C808F7-1D4E-4649-A74C-E4FB0A6FBA6F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4ebe5da0707170406j2c97f087v1aca004f9559492d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 07:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="3687.php">Igor Miskovski: "[OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="3687.php">Igor Miskovski: "[OMPI users] opal_init_Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, this looks like a problem with your gcc installation  
<br>
-- a compiler should never seg fault when it's trying to compile C  
<br>
source code.
<br>
<p>FWIW: the file in question that it's trying to compile is actually  
<br>
from GNU Libtool (which is included in Open MPI).
<br>
<p>You should probably investigate your C compiler to ensure that it's  
<br>
working properly.
<br>
<p><p>On Jul 17, 2007, at 7:06 AM, Igor Miskovski wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i try to install OpenMPI on Linux Suse 10.2 on AMDX2 Dual Core  
</span><br>
<span class="quotelev1">&gt; processor i get the following message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; if /bin/sh ./libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H - 
</span><br>
<span class="quotelev1">&gt; I. -I. -I.  - 
</span><br>
<span class="quotelev1">&gt; D                                                            
</span><br>
<span class="quotelev1">&gt; LT_CONFIG_H='&lt; config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./ 
</span><br>
<span class="quotelev1">&gt; libltdl   - 
</span><br>
<span class="quotelev1">&gt; O3                                                            - 
</span><br>
<span class="quotelev1">&gt; DNDEBUG  -MT dlopen.lo -MD -MP -MF &quot;.deps/dlopen.Tpo&quot; -c -o  
</span><br>
<span class="quotelev1">&gt; dlopen.lo `test - 
</span><br>
<span class="quotelev1">&gt; f                                                             
</span><br>
<span class="quotelev1">&gt; 'loaders/dlopen.c' || echo './'`loaders/dlopen.c; \
</span><br>
<span class="quotelev1">&gt;         then mv -f &quot;.deps/dlopen.Tpo&quot; &quot;.deps/dlopen.Plo&quot;; else rm - 
</span><br>
<span class="quotelev1">&gt; f &quot;.deps/ 
</span><br>
<span class="quotelev1">&gt; dlop                                                            
</span><br>
<span class="quotelev1">&gt; en.Tpo&quot;; exit 1; fi
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I. &quot;-DLT_CONFIG_H=&lt;  
</span><br>
<span class="quotelev1">&gt; config.h&gt;&quot; - 
</span><br>
<span class="quotelev1">&gt; D                                                           LTDL - 
</span><br>
<span class="quotelev1">&gt; I. -I. -Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT dlopen.lo  
</span><br>
<span class="quotelev1">&gt; -MD -M                                                           P - 
</span><br>
<span class="quotelev1">&gt; MF .deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
</span><br>
<span class="quotelev1">&gt; loaders/dlopen.c: In function 'dlopen_LTX_get_vtable':
</span><br>
<span class="quotelev1">&gt; loaders/dlopen.c:84: internal compiler error: Segmentation fault
</span><br>
<span class="quotelev1">&gt; Please submit a full bug report,
</span><br>
<span class="quotelev1">&gt; with preprocessed source if appropriate.
</span><br>
<span class="quotelev1">&gt; See &lt;URL: <a href="http://bugs.opensuse.org">http://bugs.opensuse.org</a>&gt; for instructions.
</span><br>
<span class="quotelev1">&gt; make[3]: *** [dlopen.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/igor/openmpi-1.2.3/opal'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can somebody help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Igor Miskovski
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="3687.php">Igor Miskovski: "[OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>In reply to:</strong> <a href="3687.php">Igor Miskovski: "[OMPI users] opal_init_Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="3689.php">Gleb Natapov: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
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
