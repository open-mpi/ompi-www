<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 23 20:08:58 2011" -->
<!-- isoreceived="20111124010858" -->
<!-- sent="Thu, 24 Nov 2011 01:02:33 +0000 (GMT)" -->
<!-- isosent="20111124010233" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322096553.46879.YahooMailNeo_at_web24716.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ECD40DB.5090908_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)<br>
<strong>From:</strong> Lukas Razik (<em>linux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-23 20:02:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev3">&gt;&gt;&gt;Can you build OMPI as a 32 bit library and see if that works any better?
</span><br>
<span class="quotelev2">&gt;&gt;So you mean I shall leave the whole OFED stack as 64 bit and build only openmpi as 32 bit?
</span><br>
<span class="quotelev1">&gt;I believe the OFED user libraries will need to be 32 bit also or the 32 bit MPI libraries will not be able to use them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;How must I configure openmpi that it'll be definitely built as 32bit?
</span><br>
<span class="quotelev1">&gt;You need to change the CFLAGS, CXXFLAGS, FFLAGS and FCFLAGS in the configure line such that you replace &quot;-m64&quot; with &quot;-m32&quot; or just &quot;-m32&quot; if &quot;-m64&quot; is not there?
</span><br>
<p><p>Maybe that's interesting for the OFED guys:
<br>
To get OFED's 'install.pl' working with '--build32' on sparc64 I had to add the following lines (marked with +):
<br>
...
<br>
elsif ($arch eq &quot;ppc64&quot;) {
<br>
&#160;&#160;&#160; $target_cpu32 = 'ppc';
<br>
}
<br>
+elsif ($arch eq &quot;sparc64&quot;) {
<br>
+&#160;&#160;&#160; $target_cpu32 = 'sparc';
<br>
+}
<br>
...
<br>
After that the chosen libs from OFED were built as 32 and 64 bit versions.
<br>
<p><p>Hello Terry,
<br>
<p>I could build a 32 bit version of
<br>
- openmpi-1.4.4
<br>
- osu_benchmarks-3.1.1
<br>
and link them against the needed 32bit OFED libraries.
<br>
<p>But the problem is still the same. But anyway thanks for the good tip to try the 32 Bit version!
<br>
<p>That's the error message I get:
<br>
# /usr/mpi/gcc/openmpi-1.4.4/bin/mpirun -np 2 -host ib1,ib2 ~/razik/src/OFED-1.5.4-rc4/SRPMS/mpitests-3.2/osu_benchmarks-3.1.1/osu_latency
<br>
# OSU MPI Latency Test v3.1.1
<br>
# Size&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Latency (us)
<br>
[cluster1:61532] *** Process received signal ***
<br>
[cluster1:61532] Signal: Bus error (10)
<br>
[cluster1:61532] Signal code: Invalid address alignment (1)
<br>
[cluster1:61532] Failing at address: 0x898a53
<br>
[cluster1:61532] [ 0] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0x50e0) [0xf72090e0]
<br>
[cluster1:61532] [ 1] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x1750) [0xf6fe9750]
<br>
[cluster1:61532] [ 2] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x8e5c) [0xf6ff0e5c]
<br>
[cluster1:61532] [ 3] /usr/mpi/gcc/openmpi-1.4.4/lib/libmpi.so.0(PMPI_Barrier+0xc0) [0xf77b718c]
<br>
[cluster1:61532] [ 4] /root/razik/src/OFED-1.5.4-rc4/SRPMS/mpitests-3.2/osu_benchmarks-3.1.1/osu_latency(main+0x2c8) [0x10cb0]
<br>
[cluster1:61532] [ 5] /lib/libc.so.6(__libc_start_main+0x10c) [0xf73e464c]
<br>
[cluster1:61532] [ 6] /root/razik/src/OFED-1.5.4-rc4/SRPMS/mpitests-3.2/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x1090c]
<br>
[cluster1:61532] *** End of error message ***
<br>
[cluster2:07039] *** Process received signal ***
<br>
[cluster2:07039] Signal: Bus error (10)
<br>
[cluster2:07039] Signal code: Invalid address alignment (1)
<br>
[cluster2:07039] Failing at address: 0x898a53
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 61532 on node cluster1 exited on signal 10 (Bus error).
<br>
--------------------------------------------------------------------------
<br>
[cluster2:07039] [ 0] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0x50e0) [0xf77750e0]
<br>
[cluster2:07039] [ 1] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x1750) [0xf7555750]
<br>
[cluster2:07039] [ 2] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x8e5c) [0xf755ce5c]
<br>
[cluster2:07039] [ 3] /usr/mpi/gcc/openmpi-1.4.4/lib/libmpi.so.0(PMPI_Barrier+0xc0) [0xf7d3318c]
<br>
[cluster2:07039] [ 4] /root/razik/src/OFED-1.5.4-rc4/SRPMS/mpitests-3.2/osu_benchmarks-3.1.1/osu_latency(main+0x2c8) [0x10cb0]
<br>
[cluster2:07039] [ 5] /lib/libc.so.6(__libc_start_main+0x10c) [0xf796464c]
<br>
[cluster2:07039] [ 6] /root/razik/src/OFED-1.5.4-rc4/SRPMS/mpitests-3.2/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x1090c]
<br>
[cluster2:07039] *** End of error message ***
<br>
<p># ldd /usr/mpi/gcc/openmpi-1.4.4/bin/mpirun
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libopen-rte.so.0 =&gt; /usr/mpi/gcc/openmpi-1.4.4/lib/libopen-rte.so.0 (0xf7c18000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libopen-pal.so.0 =&gt; /usr/mpi/gcc/openmpi-1.4.4/lib/libopen-pal.so.0 (0xf7bbc000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libdl.so.2 =&gt; /lib/libdl.so.2 (0xf7b90000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libnsl.so.1 =&gt; /lib/libnsl.so.1 (0xf7b68000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libutil.so.1 =&gt; /lib/libutil.so.1 (0xf7b54000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libm.so.6 =&gt; /lib/libm.so.6 (0xf7a70000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xf7a44000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; libc.so.6 =&gt; /lib/libc.so.6 (0xf78c4000)
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160; /lib/ld-linux.so.2 (0x70000000)
<br>
<pre>
---
Best regards,
Lukas
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10036.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10034.php">Larry Baker: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10033.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10025.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
