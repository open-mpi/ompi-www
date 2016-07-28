<?
$subject_val = "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  7 09:34:49 2013" -->
<!-- isoreceived="20130307143449" -->
<!-- sent="Thu, 7 Mar 2013 14:34:44 +0000" -->
<!-- isosent="20130307143444" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F861C2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AAFB8159-6AB9-4067-8212-9DE3FA5F0191_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-07 09:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 7, 2013, at 9:31 AM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; [root_at_tesla examples]# echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; /opt/scyld/openmpi/1.6.4/gnu/lib
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_tesla examples]# which mpicc
</span><br>
<span class="quotelev2">&gt;&gt; /opt/scyld/openmpi/1.6.4/gnu/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_tesla examples]# mpicc -o hello_c hello_c.c
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/ccuZg1I9.o: In function `main':
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.c:(.text+0x1d): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.c:(.text+0x2b): undefined reference to `ompi_mpi_comm_world'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the output if you compile in addition with -v (verbose)?
</span><br>
<p>Also, what's the output if you use --showme?  I'd like to see the underlying command that is being used.
<br>
<p>When you successfully compile/link hello_cxx, what does &quot;ldd hello_cxx&quot; show?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Previous message:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>In reply to:</strong> <a href="21508.php">Reuti: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
<li><strong>Reply:</strong> <a href="21510.php">Limin Gu: "Re: [OMPI users] openmpi-1.6.4 mpicc fails to compile hello_c.c"</a>
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
