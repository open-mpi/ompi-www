<?
$subject_val = "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 22 18:05:32 2011" -->
<!-- isoreceived="20111122230532" -->
<!-- sent="Tue, 22 Nov 2011 23:05:26 +0000 (GMT)" -->
<!-- isosent="20111122230526" -->
<!-- name="Lukas Razik" -->
<!-- email="linux_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)" -->
<!-- id="1322003126.21595.YahooMailNeo_at_web24709.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4ECB7F35.9070300_at_oracle.com" -->
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
<strong>Date:</strong> 2011-11-22 18:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;On 11/22/2011 5:49 AM, TERRY DONTJE wrote:
</span><br>
<span class="quotelev1">&gt;The error you are seeing is usually indicative of some code operating on memory that isn't aligned properly for a SPARC instruction being used.&#160; The address that is causing the failure is odd aligned which is more than likely the culprit.&#160; If you have a core dump and can disassemble the code that is being ran at the time it probably will be some sort of instruction requiring an alignment.&#160; If the MPI you are using is something you built can you try and build OMPI with -g and get the line number in the PML that is failing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I haven't seen this type of error for some time but I do all of my
</span><br>
&#160;&#160;&#160;&#160;&#160; SPARC testing on Solaris with Solaris Studio Compilers.&#160; You may
<br>
&#160;&#160;&#160;&#160;&#160; want to try to compile the benchmark with &quot;-m32&quot; to see if that
<br>
&#160;&#160;&#160;&#160;&#160; helps.&#160; Though being an odd address I suspect it might not.&#160; If
<br>
&#160;&#160;&#160;&#160;&#160; you can use the Studio Compilers you could try giving the
<br>
&#160;&#160;&#160;&#160;&#160; compilers the -xmemalign=8i option when building the benchmark and
<br>
&#160;&#160;&#160;&#160;&#160; see if that resolves the issue.&#160; This would help to assure the
<br>
&#160;&#160;&#160;&#160;&#160; issue is just an alignment of data we are slicing and dicing as
<br>
&#160;&#160;&#160;&#160;&#160; opposed to wrongly addressing memory.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;After thinking about this you probably won't be able to use the Studio Compilers because they only support compiling on Linux with x86 platforms not Linux with SPARC.&#160; Not sure if gcc has anything like the xmemalign options.
</span><br>
<p><p>Hello Terry,
<br>
<p>we have no Solaris on the machines (anymore). The whole effort is to get Linux running on them...
<br>
With big help of Roland Dreier and patches of David Miller it seems as if the Infiniband drivers work on our SPARC64 machines with Debian now. The only big thing from the OFED which now lacks is OpenMPI.
<br>
<p><pre>
--
BTW:
With Debian's gcc (Debian 4.4.5-8) I've build this new environment:
- binutils-2.21.1 (from gnu.org)
- gcc-4.4.6 (from gnu.org)
- libtool-2.2.6b (from gnu.org)
This new environment I used to build:
- linux-2.6.39.4 (from kernel.org)
- OFED-1.5.3.2 with openmpi-1.4.3, the ofa kernel modules etc. (from openfabrics.org)
- openmpi-1.4.4 (from open-mpi.org)
---
You asked for debugging information. Here you can see a screen shot of kdbg with the stack, the line number etc.
<a href="http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png">http://net.razik.de/linux/T5120/kdbg-openmpi-1.4.4-osu_latency.png</a>
That's the backtrace of the core file made by gdb:
---
# gdb /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency core
&lt;snip&gt;
Reading symbols from /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency...(no debugging symbols found)...done.
[New LWP 54054]
[New LWP 54055]
[New LWP 54056]
[Thread debugging using libthread_db enabled]
Core was generated by `/usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency'.
Program terminated with signal 10, Bus error.
#0&#160; 0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
551&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; hdr-&gt;hdr_match.hdr_ctx = sendreq-&gt;req_send.req_base.req_comm-&gt;c_contextid;
(gdb) backtrace
#0&#160; 0xfffff8010229ba9c in mca_pml_ob1_send_request_start_copy (sendreq=0xb23200, bml_btl=0xb29050, size=0) at pml_ob1_sendreq.c:551
#1&#160; 0xfffff80102286d28 in mca_pml_ob1_send_request_start_btl (sendreq=0xb23200, bml_btl=0xb29050) at pml_ob1_sendreq.h:363
#2&#160; 0xfffff80102287050 in mca_pml_ob1_send_request_start (sendreq=0xb23200) at pml_ob1_sendreq.h:429
#3&#160; 0xfffff801022879ec in mca_pml_ob1_isend (buf=0x0, count=0, datatype=0xfffff80100290dc0, dst=1, tag=-16,
&#160;&#160;&#160; sendmode=MCA_PML_BASE_SEND_STANDARD, comm=0x201b50, request=0x7feffa130c8) at pml_ob1_isend.c:87
#4&#160; 0xfffff8010343d338 in ompi_coll_tuned_sendrecv_actual (sendbuf=0x0, scount=0, sdatatype=0xfffff80100290dc0, dest=1, stag=-16,
&#160;&#160;&#160; recvbuf=0x0, rcount=0, rdatatype=0xfffff80100290dc0, source=1, rtag=-16, comm=0x201b50, status=0x0) at coll_tuned_util.c:51
#5&#160; 0xfffff8010344fd94 in ompi_coll_tuned_barrier_intra_two_procs (comm=0x201b50, module=0xb2b070) at coll_tuned_barrier.c:258
#6&#160; 0xfffff8010343de94 in ompi_coll_tuned_barrier_intra_dec_fixed (comm=0x201b50, module=0xb2b070) at coll_tuned_decision_fixed.c:192
#7&#160; 0xfffff801000bfff0 in PMPI_Barrier (comm=0x201b50) at pbarrier.c:59
#8&#160; 0x0000000000100f3c in main ()
---
That's the belonging mpirun:
---
# /usr/mpi/gcc/openmpi-1.4.4/bin/mpirun -np 2 -host cluster1,cluster2 /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency
# OSU MPI Latency Test v3.1.1
# Size&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Latency (us)
[cluster1:54054] *** Process received signal ***
[cluster1:54054] Signal: Bus error (10)
[cluster1:54054] Signal code: Invalid address alignment (1)
[cluster1:54054] Failing at address: 0xad7393
[cluster1:54054] [ 0] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xed20) [0xfffff80102286d20]
[cluster1:54054] [ 1] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xf048) [0xfffff80102287048]
[cluster1:54054] [ 2] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xf9e4) [0xfffff801022879e4]
[cluster1:54054] [ 3] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x5330) [0xfffff8010343d330]
[cluster1:54054] [ 4] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x17d8c) [0xfffff8010344fd8c]
[cluster1:54054] [ 5] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x5e8c) [0xfffff8010343de8c]
[cluster1:54054] [ 6] /usr/mpi/gcc/openmpi-1.4.4/lib/libmpi.so.0(MPI_Barrier+0x164) [0xfffff801000bffe8]
[cluster1:54054] [ 7] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
[cluster1:54054] [ 8] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100c49240]
[cluster1:54054] [ 9] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
[cluster1:54054] *** End of error message ***
[cluster2:04708] *** Process received signal ***
[cluster2:04708] Signal: Bus error (10)
[cluster2:04708] Signal code: Invalid address alignment (1)
[cluster2:04708] Failing at address: 0xad7393
[cluster2:04708] [ 0] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xed20) [0xfffff80102286d20]
[cluster2:04708] [ 1] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xf048) [0xfffff80102287048]
[cluster2:04708] [ 2] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_pml_ob1.so(+0xf9e4) [0xfffff801022879e4]
[cluster2:04708] [ 3] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x5330) [0xfffff8010343d330]
[cluster2:04708] [ 4] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x17d8c) [0xfffff8010344fd8c]
[cluster2:04708] [ 5] /usr/mpi/gcc/openmpi-1.4.4/lib/openmpi/mca_coll_tuned.so(+0x5e8c) [0xfffff8010343de8c]
[cluster2:04708] [ 6] /usr/mpi/gcc/openmpi-1.4.4/lib/libmpi.so.0(MPI_Barrier+0x164) [0xfffff801000bffe8]
[cluster2:04708] [ 7] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(main+0x2b0) [0x100f34]
[cluster2:04708] [ 8] /lib64/libc.so.6(__libc_start_main+0x100) [0xfffff80100c49240]
[cluster2:04708] [ 9] /usr/mpi/gcc/openmpi-1.4.3/tests/osu_benchmarks-3.1.1/osu_latency(_start+0x2c) [0x100bac]
[cluster2:04708] *** End of error message ***
---
I hope this can help you. Otherwise please ask.
I'll provide all information as fast as I can.
Many thanks for you time!
Best regards,
Lukas
PS: The whole discussion you find here:
<a href="http://www.open-mpi.org/community/lists/devel/2011/11/subject.php">http://www.open-mpi.org/community/lists/devel/2011/11/subject.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10023.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>Previous message:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<li><strong>In reply to:</strong> <a href="10012.php">TERRY DONTJE: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10021.php">Lukas Razik: "Re: [OMPI devel] [BUG?] OpenMPI with openib on SPARC64: Signal: Bus error (10)"</a>
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
