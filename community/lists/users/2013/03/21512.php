<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 17:24:56 2013" -->
<!-- isoreceived="20130307222456" -->
<!-- sent="Thu, 7 Mar 2013 17:24:31 -0500" -->
<!-- isosent="20130307222431" -->
<!-- name="Limin Gu" -->
<!-- email="lgu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="CAAU_HgYLm-0wwp2k=rG_XBh2tJQVOHcN0Kx6J9pV+d8APwp5OQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F87B80_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c<br>
<strong>From:</strong> Limin Gu (<em>lgu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 17:24:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Mar 7, 2013 at 4:01 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn't sound right -- I don't think we changed how linking worked in
</span><br>
<span class="quotelev1">&gt; 1.6.3 and 1.6.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you sure that, on that same machine with MPICH installed in
</span><br>
<span class="quotelev1">&gt; /usr/lib64, you're also able to compile/link/use 1.6.3 properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, on the same system, 1.6.3 openmpi works with MPICH installed in
<br>
/usr/lib64
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A wild guess: you have some kind of linker configuration that is putting
</span><br>
<span class="quotelev1">&gt; /usr/lib64 ahead of -L-specified paths on the compiler command line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the same system,
</span><br>
with 1.6.3:
<br>
[root_at_tesla examples]# mpicc --showme hello_c.c
<br>
gcc hello_c.c -I/opt/scyld/openmpi/1.6.3/gnu/include -pthread
<br>
-L/opt/scyld/openmpi/1.6.3/gnu/lib -lmpi -libverbs -ldat -lrt -lnsl -lutil
<br>
-lm -ltorque -lm -lnuma -lrt -lnsl -lutil -lm
<br>
[root_at_tesla examples]#
<br>
<p>With 1.6.4:
<br>
[root_at_tesla examples]# mpicc --showme hello_c.c
<br>
gcc hello_c.c -I/opt/scyld/openmpi/1.6.4/gnu/include -pthread -L/usr/lib64
<br>
-Wl,-rpath -Wl,/usr/lib64 -L/opt/scyld/openmpi/1.6.4/gnu/lib -lmpi
<br>
-libverbs -ldat -lrt -lnsl -lutil -lm -ltorque -lm -lnuma -lrt -lnsl -lutil
<br>
-lm
<br>
[root_at_tesla examples]#
<br>
<p>So indeed, for 1.6.4, the linker is putting /usr/lib64 ahead of openmpi
<br>
library path, but I don't know why.
<br>
I used the same configure options when I did these builds. I didn't change
<br>
linker configuration from 1.6.3 to 1.6.4 either, the only difference I can
<br>
tell is the openmpi source code.
<br>
<p>Thank you!
<br>
<p>Limin
<br>
<p><p><pre>
--
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21513.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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
