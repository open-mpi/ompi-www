<?
$subject_val = "[OMPI users]  Can't find libsvml in the execution";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 07:38:44 2009" -->
<!-- isoreceived="20090401113844" -->
<!-- sent="Wed, 1 Apr 2009 13:38:39 +0200" -->
<!-- isosent="20090401113839" -->
<!-- name="Marce" -->
<!-- email="marcemb_at_[hidden]" -->
<!-- subject="[OMPI users]  Can't find libsvml in the execution" -->
<!-- id="462af7860904010438j55637f03v3c525c777f2d8ad9_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users]  Can't find libsvml in the execution<br>
<strong>From:</strong> Marce (<em>marcemb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 07:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have compiled OpenMPI 1.2.7 with Intel Compilers (icc and ifort) in
<br>
a cluster with Centos 4.7. It was ok, but when I try to launch an
<br>
execution, mpirun can't find some libraries.
<br>
<p>When I check the linked libraries in the nodes, the output was:
<br>
<p>[marce_at_nodo1 ~]$ ldd /home/aplicaciones/openmpi-1.2.7/bin/mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt;
<br>
/home/aplicaciones/openmpi-1.2.7//lib/libopen-rte.so.0
<br>
(0x0000002a95557000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt;
<br>
/home/aplicaciones/openmpi-1.2.7//lib/libopen-pal.so.0
<br>
(0x0000002a956d6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00000033f6900000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000038c8900000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000038c8b00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x00000038c8100000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000002a95852000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x00000038c8d00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x00000038c7c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /opt/intel/fce/9.1.039/lib/libsvml.so (0x0000002a95960000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /opt/intel/fce/9.1.039/lib/libimf.so (0x0000002a95aa4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libirc.so =&gt; /opt/intel/fce/9.1.039/lib/libirc.so (0x0000002a95e0d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00000038c7a00000)
<br>
<p>(The same output in node2).
<br>
<p>But when I do the same operation to see the linked libraries from
<br>
node1 to node2:
<br>
<p>[marce_at_nodo1 ~]$ ssh nodo2 &quot;ldd /home/aplicaciones/openmpi-1.2.7/bin/mpirun&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt;
<br>
/home/aplicaciones/openmpi-1.2.7//lib/libopen-rte.so.0
<br>
(0x0000002a95557000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt;
<br>
/home/aplicaciones/openmpi-1.2.7//lib/libopen-pal.so.0
<br>
(0x0000002a956d6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003ddb500000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003d83b00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003d83900000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x0000003d83100000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x0000003d84a00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0 (0x0000003d83300000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x0000003d82c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003d82800000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libirc.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; not found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libirc.so =&gt; not found
<br>
<p>OpenMPI is installed in a shared filesystem (/home) and intel is
<br>
installed in the same path in all nodes (/opt/intel..).
<br>
<p>When I try to see the LD_LIBRARY_PATH in the nodes (local and over
<br>
ssh), all seems to be ok, it's the correct path and link to /opt/intel
<br>
and openmpi-1.2.7.
<br>
<p>How I can solve this issue? Where I have to set the LD_LIBRARY_PATH?
<br>
<p>Thanks for all!
<br>
<p>Regards
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8706.php">Jerome BENOIT: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
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
