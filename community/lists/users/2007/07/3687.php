<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 17 07:06:28 2007" -->
<!-- isoreceived="20070717110628" -->
<!-- sent="Tue, 17 Jul 2007 13:06:24 +0200" -->
<!-- isosent="20070717110624" -->
<!-- name="Igor Miskovski" -->
<!-- email="igor.miskovski_at_[hidden]" -->
<!-- subject="[OMPI users] opal_init_Segmentation Fault" -->
<!-- id="b4ebe5da0707170406j2c97f087v1aca004f9559492d_at_mail.gmail.com" -->
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
<strong>From:</strong> Igor Miskovski (<em>igor.miskovski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-17 07:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="3686.php">Mohammad Huwaidi: "[OMPI users] Anything on fault tolerance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>When i try to install OpenMPI on Linux Suse 10.2 on AMDX2 Dual Core
<br>
processor i get the following message:
<br>
<p>make[3]: Entering directory `/home/igor/openmpi-1.2.3/opal/libltdl'
<br>
if /bin/sh ./libtool --tag=CC --mode=compile gcc -DHAVE_CONFIG_H -I. -I.
<br>
-I.  -D
<br>
LT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl -I./libltdl
<br>
-O3                                                            -DNDEBUG  -MT
<br>
dlopen.lo -MD -MP -MF &quot;.deps/dlopen.Tpo&quot; -c -o dlopen.lo `test
<br>
-f
<br>
'loaders/dlopen.c' || echo './'`loaders/dlopen.c; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;then mv -f &quot;.deps/dlopen.Tpo&quot; &quot;.deps/dlopen.Plo&quot;; else rm -f
<br>
&quot;.deps/dlop                                                           en.Tpo&quot;;
<br>
exit 1; fi
<br>
libtool: compile:  gcc -DHAVE_CONFIG_H -I. -I. -I. &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot;
<br>
-D                                                           LTDL -I. -I.
<br>
-Ilibltdl -I./libltdl -I./libltdl -O3 -DNDEBUG -MT dlopen.lo -MD
<br>
-M                                                           P -MF
<br>
.deps/dlopen.Tpo -c loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
<br>
loaders/dlopen.c: In function 'dlopen_LTX_get_vtable':
<br>
loaders/dlopen.c:84: internal compiler error: Segmentation fault
<br>
Please submit a full bug report,
<br>
with preprocessed source if appropriate.
<br>
See &lt;URL:<a href="http://bugs.opensuse.org">http://bugs.opensuse.org</a>&gt; for instructions.
<br>
make[3]: *** [dlopen.lo] Error 1
<br>
make[3]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
<br>
make[2]: *** [all] Error 2
<br>
make[2]: Leaving directory `/home/igor/openmpi-1.2.3/opal/libltdl'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/igor/openmpi-1.2.3/opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Can somebody help me?
<br>
<p>Thanks,
<br>
Igor Miskovski
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3687/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Previous message:</strong> <a href="3686.php">Mohammad Huwaidi: "[OMPI users] Anything on fault tolerance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
<li><strong>Reply:</strong> <a href="3688.php">Jeff Squyres: "Re: [OMPI users] opal_init_Segmentation Fault"</a>
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
