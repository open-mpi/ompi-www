<?
$subject_val = "Re: [OMPI devel] verbs and oob_ub breakage?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 14:48:16 2015" -->
<!-- isoreceived="20150225194816" -->
<!-- sent="Wed, 25 Feb 2015 19:48:13 +0000" -->
<!-- isosent="20150225194813" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] verbs and oob_ub breakage?" -->
<!-- id="8477B60C-F5D9-4539-85F7-F4775D006C21_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17aejnMgY8mO1iznYfjKvD6XeiLnNydESMfYENC-cfGwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] verbs and oob_ub breakage?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 14:48:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>In reply to:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, I had a typo in an m4 section of code.  I'm making a new tarball now.
<br>
<p><span class="quotelev1">&gt; On Feb 25, 2015, at 2:41 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On several systems where Jeff's tarball for pr410 ran fine yesterday, I am seeing errors in today's tarball related to either libverbs or mca_oob_ud.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Issue #1:
</span><br>
<span class="quotelev1">&gt; On Solaris verbs support is now rejected at configure time.
</span><br>
<span class="quotelev1">&gt; Configure output appears below as &quot;1)&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Issue #2:
</span><br>
<span class="quotelev1">&gt; On Linux I get undefined symbols at either build time (from oob_ud_component.o when static linking orte-cean) or at runtime (dynamic linker again complaining about undefined symbol(s) in mca_oob_ud.so).  In both cases I would venture a guess that some linker option (-L or -l ?) is missing.
</span><br>
<span class="quotelev1">&gt; Outputs appear below as &quot;2a)&quot; and &quot;2b)&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am currently assuming these failures with Jeff's tarball for PR410 reflect recent changes in 'master' (e.g. I assume Jeff rebased his branch since the previous tarballs), but I don't have time to confirm that.  I believe that the failure in the static linking case eliminates Jeff's dlopen-related work from consideration as a root cause, but I could certainly be mistaken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If these two issues are known, or have already been fixed in 'master', then just say so and I'll drop this.
</span><br>
<span class="quotelev1">&gt; Otherwise, let me know what additional files/output you want to see and who to send it to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Configure output from Solaris-11 on x86-64,using Gnu compilers:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component common:verbs (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component common:verbs compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking if want to add padding to the openib BTL control header... no
</span><br>
<span class="quotelev1">&gt; checking for fcntl.h... (cached) yes
</span><br>
<span class="quotelev1">&gt; checking sys/poll.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking sys/poll.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for sys/poll.h... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking infiniband/verbs.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for infiniband/verbs.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library without search path
</span><br>
<span class="quotelev1">&gt; checking for library containing ibv_open_device... -libverbs
</span><br>
<span class="quotelev1">&gt; checking number of arguments to ibv_create_cq... unknown
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Can not determine number of args to ibv_create_cq.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Not building component.
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if ConnectIB XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if dynamic SL is enabled... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Verbs support requested (via --with-verbs) but not found.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: If you are using libibverbs v1.0 (i.e., OFED v1.0 or v1.1), you *MUST* have both the libsysfs headers and libraries installed.  Later versions of libibverbs do not require libsysfs.
</span><br>
<span class="quotelev1">&gt; configure: error: Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2a) Failure at build time on Linux with &quot;--enable-static --disable-shared&quot; (truncated):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../libtool  --tag=CC   --mode=link gcc -std=gnu99  -g -finline-functions -fno-strict-aliasing -pthread   -o orte-clean orte-clean.o ../../../orte/libopen-rte.la ../../../opal/libopen-pal.la -lrt -lm -lutil 
</span><br>
<span class="quotelev1">&gt;   -lrt -lm -lutillibtool: link: gcc -std=gnu99 -g -finline-functions -fno-strict-aliasing -pthread -o orte-clean orte-clean.o  
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a -L/usr/syscom/opt/torque/4.1.4/lib /usr/syscom/opt/torque/4.1.4/lib/libtorqu
</span><br>
<span class="quotelev1">&gt; e.so -lxml2 -lz -lcrypto -lssl -lpthread /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/BLD/opal/.libs/libopen-pal.a ../../../opal/.libs/libopen-pal.a -ldl -lrt -lm -lutil -pthread -Wl,-rpath
</span><br>
<span class="quotelev1">&gt;  -Wl,/usr/syscom/opt/torque/4.1.4/lib -Wl,-rpath -Wl,/usr/syscom/opt/torque/4.1.4/lib
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(oob_ud_component.o): In function `mca_oob_ud_device_setup':/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:220: undefined reference to `ibv_open_device'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:228: undefined reference to `ibv_query_device'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:236: undefined reference to `ibv_create_comp_channel'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:244: undefined reference to `ibv_alloc_pd'
</span><br>
<span class="quotelev1">&gt; ../../../orte/.libs/libopen-rte.a(oob_ud_component.o): In function `mca_oob_ud_component_startup':
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-static/openmpi-gitclone/orte/mca/oob/ud/oob_ud_component.c:291: undefined reference to `ibv_get_device_list'
</span><br>
<span class="quotelev1">&gt; [and many more]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2b)  Failure at run time on Linux with only &quot;normal&quot; configure options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl sm,self -np 2 examples/ring_c'
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-icc-11.1/INST/bin/mpirun: symbol lookup error: /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-pr410-v2-linux-x86_64-icc-11.1/INST/lib/openmpi/mca_oob_ud.so: undefined symbol: ibv_get_device_list
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17041.php">http://www.open-mpi.org/community/lists/devel/2015/02/17041.php</a>
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
<li><strong>Next message:</strong> <a href="17043.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
<li><strong>In reply to:</strong> <a href="17041.php">Paul Hargrove: "[OMPI devel] verbs and oob_ub breakage?"</a>
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
