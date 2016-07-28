<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 13:17:03 2013" -->
<!-- isoreceived="20130307181703" -->
<!-- sent="Thu, 7 Mar 2013 13:16:39 -0500" -->
<!-- isosent="20130307181639" -->
<!-- name="Limin Gu" -->
<!-- email="lgu_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="CAAU_Hgar+y7oaAG7hWsnYAiNCFmMX5onyPPW13-zADR3b3jt4A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F861C2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-03-07 13:16:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff and Reuti, thank you for your responds.
<br>
<p>&quot;ldd hello_cxx&quot; gave me some clue, and I found it was linked to some mpich
<br>
library which was installed under/usr/lib64. When I removed mpich
<br>
libraries, and recompile, everything includes mpicc and mpirun worked fine.
<br>
<p>I didn't have that problem with eariler openmpi versions like 1.6.x and
<br>
1.5.x. I would like to keep mpich libraries on the system, is there any
<br>
confiure option I can use to make 1.6.4 library link the same as 1.6.3?
<br>
<p>Thanks again!
<br>
Limin
<br>
<p>On Thu, Mar 7, 2013 at 9:34 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 7, 2013, at 9:31 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_tesla examples]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/scyld/openmpi/1.6.4/gnu/lib
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_tesla examples]# which mpicc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /opt/scyld/openmpi/1.6.4/gnu/bin/mpicc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [root_at_tesla examples]# mpicc -o hello_c hello_c.c
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/ccuZg1I9.o: In function `main':
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hello_c.c:(.text+0x1d): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hello_c.c:(.text+0x2b): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is the output if you compile in addition with -v (verbose)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, what's the output if you use --showme?  I'd like to see the
</span><br>
<span class="quotelev1">&gt; underlying command that is being used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you successfully compile/link hello_cxx, what does &quot;ldd hello_cxx&quot;
</span><br>
<span class="quotelev1">&gt; show?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21509.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21511.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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
