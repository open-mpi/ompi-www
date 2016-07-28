<?
$subject_val = "Re: [OMPI devel] BW benchmark hangs after r 18551";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 09:13:07 2008" -->
<!-- isoreceived="20080617131307" -->
<!-- sent="Tue, 17 Jun 2008 16:12:57 +0300" -->
<!-- isosent="20080617131257" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BW benchmark hangs after r 18551" -->
<!-- id="453d39990806170612k2fe33156o7cfb2059baa12a8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F978D61-A9CC-4F08-AFAA-C945CD997144_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BW benchmark hangs after r 18551<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-17 09:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4142.php">Terry Dontje: "[OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It seems like we have 2 bugs here.
<br>
1. After commiting NUMA awareness we see seqf
<br>
2. Before commiting NUMA r18656 we see application hangs.
<br>
3. I checked both it with and without sendi, same results.
<br>
4. It hangs most of the times, but sometimes large msg ( &gt;1M ) are working.
<br>
<p><p>I will keep investigating :)
<br>
<p><p>VER=TRUNK; //home/USERS/lenny/OMPI_ORTE_${VER}/bin/mpicc -o mpi_p_${VER}
<br>
/opt/vltmpi/OPENIB/mpi/examples/mpi_p.c ;
<br>
/home/USERS/lenny/OMPI_ORTE_${VER}/bin/mpirun -np 100 -hostfile hostfile_w
<br>
./mpi_p_${VER} -t bw -s 4000000
<br>
[witch17:09798] *** Process received signal ***
<br>
[witch17:09798] Signal: Segmentation fault (11)
<br>
[witch17:09798] Signal code: Address not mapped (1)
<br>
[witch17:09798] Failing at address: (nil)
<br>
[witch17:09798] [ 0] /lib64/libpthread.so.0 [0x2b1d13530c10]
<br>
[witch17:09798] [ 1]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/openmpi/mca_btl_sm.so [0x2b1d1557a68a]
<br>
[witch17:09798] [ 2]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/openmpi/mca_bml_r2.so [0x2b1d14e1b12f]
<br>
[witch17:09798] [ 3]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libopen-pal.so.0(opal_progress+0x5a)
<br>
[0x2b1d12f6a6da]
<br>
[witch17:09798] [ 4] /home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libmpi.so.0
<br>
[0x2b1d12cafd28]
<br>
[witch17:09798] [ 5]
<br>
/home/USERS/lenny/OMPI_ORTE_TRUNK/lib/libmpi.so.0(PMPI_Waitall+0x91)
<br>
[0x2b1d12cd9d71]
<br>
[witch17:09798] [ 6] ./mpi_p_TRUNK(main+0xd32) [0x401ca2]
<br>
[witch17:09798] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x2b1d13657154]
<br>
[witch17:09798] [ 8] ./mpi_p_TRUNK [0x400ea9]
<br>
[witch17:09798] *** End of error message ***
<br>
[witch1:24955]
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 62 with PID 9798 on node witch17 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
witch1:/home/USERS/lenny/TESTS/NUMA #
<br>
witch1:/home/USERS/lenny/TESTS/NUMA #
<br>
witch1:/home/USERS/lenny/TESTS/NUMA #
<br>
witch1:/home/USERS/lenny/TESTS/NUMA # VER=18551;
<br>
//home/USERS/lenny/OMPI_ORTE_${VER}/bin/mpicc -o mpi_p_${VER}
<br>
/opt/vltmpi/OPENIB/mpi/examples/mpi_p.c ;
<br>
/home/USERS/lenny/OMPI_ORTE_${VER}/bin/mpirun -np 100 -hostfile hostfile_w
<br>
./mpi_p_${VER} -t bw -s 4000000
<br>
BW (100) (size min max avg)  4000000    654.496755      2121.899985
<br>
1156.171067
<br>
witch1:/home/USERS/lenny/TESTS/NUMA
<br>
#
<br>
<p><p><p><p>On Tue, Jun 17, 2008 at 2:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Lenny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess you're running the latest version. If not, please update, Galen and
</span><br>
<span class="quotelev1">&gt; myself corrected some bugs last week. If you're using the latest (and
</span><br>
<span class="quotelev1">&gt; greatest) then ... well I imagine there is at least one bug left.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a quick test you can do. In the btl_sm.c in the module structure
</span><br>
<span class="quotelev1">&gt; at the beginning of the file, please replace the sendi function by NULL. If
</span><br>
<span class="quotelev1">&gt; this fix the problem, then at least we know that it's a sm send immediate
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2008, at 7:54 AM, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem running BW benchmark on 100 rank cluster after r18551.
</span><br>
<span class="quotelev2">&gt;&gt; The BW is mpi_p that runs mpi_bandwidth with 100K between all pairs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 100 -hostfile hostfile_w  ./mpi_p_18549 -t bw -s 100000
</span><br>
<span class="quotelev2">&gt;&gt; BW (100) (size min max avg)  100000     576.734030      2001.882416
</span><br>
<span class="quotelev2">&gt;&gt; 1062.698408
</span><br>
<span class="quotelev2">&gt;&gt; #mpirun -np 100 -hostfile hostfile_w ./mpi_p_18551 -t bw -s 100000
</span><br>
<span class="quotelev2">&gt;&gt; mpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt; ( it hangs even after 10 hours ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It doesn't happen if I run --bynode or btl openib,self only.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lenny.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4142.php">Terry Dontje: "[OMPI devel] iprobe and opal_progress"</a>
<li><strong>Previous message:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<li><strong>In reply to:</strong> <a href="4140.php">George Bosilca: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4160.php">Lenny Verkhovsky: "Re: [OMPI devel] BW benchmark hangs after r 18551"</a>
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
