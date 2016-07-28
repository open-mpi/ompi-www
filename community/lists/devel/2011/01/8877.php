<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 16 04:12:37 2011" -->
<!-- isoreceived="20110116091237" -->
<!-- sent="Sun, 16 Jan 2011 11:12:30 +0200" -->
<!-- isosent="20110116091230" -->
<!-- name="Doron Shoham" -->
<!-- email="doron.ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="AANLkTinWCtyOwd1UwLkpjzMb=ezWNqujeBC7QO8_Df_x_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0EE251B7-252D-48C7-B486-5D3D2F30A767_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.3 hangs in gather<br>
<strong>From:</strong> Doron Shoham (<em>doron.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-16 04:12:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8871.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8883.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>The gather hangs only in liner_sync algorithm but works with
<br>
basic_linear and binomial algorithms.
<br>
The gather algorithm is choosen dynamiclly depanding on block size and
<br>
communicator size.
<br>
So, in the beginning, binomial algorithm is chosen (communicator size
<br>
is larger then 60).
<br>
When increasing the message size, the liner_sync algorithm is chosen
<br>
(with small_segment_size).
<br>
When debugging on the cluster I saw that the linear_sync function is
<br>
called in endless loop with segment size of 1024.
<br>
This explain why hang occure in the middle of the run.
<br>
<p>I still don't understand why does RDMACM solve it or what causes
<br>
liner_sync hangs.
<br>
<p>Again, in 1.5 it doesn't hang (maybe timing is different?).
<br>
I'm still trying to understand what are the diffrences in those areas
<br>
between 1.4.3 and 1.5
<br>
<p><p>BTW,
<br>
Choosing RDMACM fixes hangs and performance issues in all collective operations.
<br>
<p>Thanks,
<br>
Doron
<br>
<p><p>On Thu, Jan 13, 2011 at 9:44 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; RDMACM creates the same QPs with the same tunings as OOB, so I don't see how CPC may effect on performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2011, at 2:15 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +1 on what Pasha said -- if using rdmacm fixes the problem, then there's something else nefarious going on...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to check padb with your hangs to see where all the processes are hung to see if anything obvious jumps out. &#160;I'd be surprised if there's a bug in the oob cpc; it's been around for a long, long time; it should be pretty stable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do we create QP's differently between oob and rdmacm, such that perhaps they are &quot;better&quot; (maybe better routed, or using a different SL, or ...) when created via rdmacm?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 12, 2011, at 12:12 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RDMACM or OOB can not effect on performance of this benchmark, since they are not involved in communication. So I'm not sure that the performance changes that you see are related to connection manager changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; About oob - I'm not aware about hangs issue there, the code is very-very old, we did not touch it for a long time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Application Performance Tools Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Computer Science and Math Division
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email: shamisp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 12, 2011, at 8:45 AM, Doron Shoham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the first problem, I can see that when using rdmacm as openib oob
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get much better performence results (and no hangs!).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -display-map -np 64 -machinefile voltairenodes -mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sm,self,openib -mca btl_openib_connect_rdmacm_priority 100
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; imb/src/IMB-MPI1 gather -npmin 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #bytes &#160; &#160; &#160;#repetitions &#160; &#160; &#160; &#160;t_min[usec] &#160; &#160; t_max[usec] &#160; &#160; t_avg[usec]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0 &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;0.04 &#160; &#160; &#160; &#160;0.05 &#160; &#160; &#160; &#160;0.05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;19.64 &#160; &#160; &#160; 19.69 &#160; &#160; &#160; 19.67
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;19.97 &#160; &#160; &#160; 20.02 &#160; &#160; &#160; 19.99
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;21.86 &#160; &#160; &#160; 21.96 &#160; &#160; &#160; 21.89
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;22.87 &#160; &#160; &#160; 22.94 &#160; &#160; &#160; 22.90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16 &#160; &#160; &#160;1000 &#160; &#160; &#160; &#160;24.71 &#160; &#160; &#160; 24.80 &#160; &#160; &#160; 24.76
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32 &#160; &#160; &#160;1000 &#160; &#160; &#160; &#160;27.23 &#160; &#160; &#160; 27.32 &#160; &#160; &#160; 27.27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 64 &#160; &#160; &#160;1000 &#160; &#160; &#160; &#160;30.96 &#160; &#160; &#160; 31.06 &#160; &#160; &#160; 31.01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 128 &#160; &#160; 1000 &#160; &#160; &#160; &#160;36.96 &#160; &#160; &#160; 37.08 &#160; &#160; &#160; 37.02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 256 &#160; &#160; 1000 &#160; &#160; &#160; &#160;42.64 &#160; &#160; &#160; 42.79 &#160; &#160; &#160; 42.72
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 512 &#160; &#160; 1000 &#160; &#160; &#160; &#160;60.32 &#160; &#160; &#160; 60.59 &#160; &#160; &#160; 60.46
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1024 &#160; &#160;1000 &#160; &#160; &#160; &#160;82.44 &#160; &#160; &#160; 82.74 &#160; &#160; &#160; 82.59
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2048 &#160; &#160;1000 &#160; &#160; &#160; &#160;497.66 &#160; &#160; &#160;499.62 &#160; &#160; &#160;498.70
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4096 &#160; &#160;1000 &#160; &#160; &#160; &#160;684.15 &#160; &#160; &#160;686.47 &#160; &#160; &#160;685.33
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8192 &#160; &#160;519 &#160; &#160; &#160; &#160; 544.07 &#160; &#160; &#160;546.68 &#160; &#160; &#160;545.85
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 16384 &#160; 519 &#160; &#160; &#160; &#160; 653.20 &#160; &#160; &#160;656.23 &#160; &#160; &#160;655.27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 32768 &#160; 519 &#160; &#160; &#160; &#160; 704.48 &#160; &#160; &#160;707.55 &#160; &#160; &#160;706.60
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 65536 &#160; 519 &#160; &#160; &#160; &#160; 918.00 &#160; &#160; &#160;922.12 &#160; &#160; &#160;920.86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 131072 &#160;320 &#160; &#160; &#160; &#160; 2414.08 &#160; &#160; 2422.17 &#160; &#160; 2418.20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 262144 &#160;160 &#160; &#160; &#160; &#160; 4198.25 &#160; &#160; 4227.58 &#160; &#160; 4213.19
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 524288 &#160;80 &#160; &#160; &#160; &#160; &#160;7333.04 &#160; &#160; 7503.99 &#160; &#160; 7438.18
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1048576 40 &#160; &#160; &#160; &#160; &#160;13692.60 &#160; &#160;14150.20 &#160; &#160;13948.75
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2097152 20 &#160; &#160; &#160; &#160; &#160;30377.34 &#160; &#160;32679.15 &#160; &#160;31779.86
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4194304 10 &#160; &#160; &#160; &#160; &#160;61416.70 &#160; &#160;71012.50 &#160; &#160;68380.04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How can the oob cause the hang? Isn't it only used to bring up the connection?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the oob has any part of the connections were made?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dororn
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, Jan 11, 2011 at 2:58 PM, Doron Shoham &lt;doron.ompi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; All machines on the setup are IDataPlex with Nehalem 12 cores per node, 24GB &#160;memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#183; &#160; &#160; &#160; &#160; Problem 1 &#150; OMPI 1.4.3 hangs in gather:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;m trying to run IMB and gather operation with OMPI 1.4.3 (Vanilla).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It happens when np &gt;= 64 and message size exceed 4k:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile voltairenodes -mca btl sm,self,openib &#160;imb/src-1.4.2/IMB-MPI1 gather &#150;npmin 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; voltairenodes consists of 64 machines.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Benchmarking Gather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # #processes = 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; #bytes #repetitions &#160;t_min[usec] &#160;t_max[usec] &#160;t_avg[usec]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;0 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160; 0.02 &#160; &#160; &#160; &#160; 0.02 &#160; &#160; &#160; &#160; 0.02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;1 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;14.02 &#160; &#160; &#160; &#160;14.16 &#160; &#160; &#160; &#160;14.09
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;2 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;12.87 &#160; &#160; &#160; &#160;13.08 &#160; &#160; &#160; &#160;12.93
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;4 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;14.29 &#160; &#160; &#160; &#160;14.43 &#160; &#160; &#160; &#160;14.34
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;8 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;16.03 &#160; &#160; &#160; &#160;16.20 &#160; &#160; &#160; &#160;16.11
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 16 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;17.54 &#160; &#160; &#160; &#160;17.74 &#160; &#160; &#160; &#160;17.64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 32 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;20.49 &#160; &#160; &#160; &#160;20.62 &#160; &#160; &#160; &#160;20.53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 64 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;23.57 &#160; &#160; &#160; &#160;23.84 &#160; &#160; &#160; &#160;23.70
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;128 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;28.02 &#160; &#160; &#160; &#160;28.35 &#160; &#160; &#160; &#160;28.18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;256 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;34.78 &#160; &#160; &#160; &#160;34.88 &#160; &#160; &#160; &#160;34.80
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;512 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;46.34 &#160; &#160; &#160; &#160;46.91 &#160; &#160; &#160; &#160;46.60
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 1024 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; &#160;63.96 &#160; &#160; &#160; &#160;64.71 &#160; &#160; &#160; &#160;64.33
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 2048 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; 460.67 &#160; &#160; &#160; 465.74 &#160; &#160; &#160; 463.18
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 4096 &#160; &#160; &#160; &#160; &#160;331 &#160; &#160; &#160; 637.33 &#160; &#160; &#160; 643.99 &#160; &#160; &#160; 640.75
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This the padb output:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; padb &#150;A &#150;x &#150;Ormgr=mpirun &#150;tree:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =~=~=~=~=~=~=~=~=~=~=~= PuTTY log 2011.01.06 14:33:17 =~=~=~=~=~=~=~=~=~=~=~=
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; R (running) : [1,3-6,8,10-13,16-20,23-28,30-32,34-42,44-45,47-49,51-53,56-59,61-63]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; S (sleeping) : [0,2,7,9,14-15,21-22,29,33,43,46,50,54-55,60]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; IMB_init_buffers_iter() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;IMB_gather() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160;PMPI_Gather() at pgather.c:175
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160;mca_coll_sync_gather() at coll_sync_gather.c:46
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;[0,3-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;mca_pml_ob1_recv() at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;[1] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;mca_pml_ob1_send() at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;[2] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;-----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160;ompi_request_default_wait() at request/req_wait.c:37
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160;ompi_request_wait_completion() at ../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;opal_condition_wait() at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; btl_openib_async_thread() at btl_openib_async.c:344
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;poll() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; start_thread() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; service_thread_start() at btl_openib_fd.c:427
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;select() at ?:?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -bash-3.2$
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When running again padb after couple of minutes, I can see that the total number of processes remain in the same position but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different processes are at different positions.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For example, this is the diff between two padb outputs:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Warning, remote process state differs across ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; state : ranks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -R (running) : [0,2-4,6-13,16-18,20-21,28-31,33-36,38-56,58,60,62-63]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -S (sleeping) : [1,5,14-15,19,22-27,32,37,57,59,61]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +R (running) : [2,5-14,16-23,25,28-40,42-48,50-51,53-58,61,63]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +S (sleeping) : [0-1,3-4,15,24,26-27,41,49,52,59-60,62]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -13,21 +13,21 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_coll_sync_gather() at coll_sync_gather.c:46
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - [0,3-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + [0-5,8-63] (62 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_pml_ob1_recv() at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - [1] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + [6] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_pml_ob1_send() at pml_ob1_isend.c:125
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - [2] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; + [7] (1 processes)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ompi_request_default_wait() at request/req_wait.c:37
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Choosing different gather algorithm seems to bypass the hang.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I&#146;ve used the following mca parameters:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --mca coll_tuned_gather_algorithm 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Actually, both dec_fixed and basic_linear works while binomial and linear_sync doesn&#146;t.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With OMPI 1.5 it doesn&#146;t hangs (with all gather algorithms) and it much faster (the number of repetitions is much higher):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # Benchmarking Gather
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # #processes = 64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; #bytes #repetitions &#160;t_min[usec] &#160;t_max[usec] &#160;t_avg[usec]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;0 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160; 0.02 &#160; &#160; &#160; &#160; 0.03 &#160; &#160; &#160; &#160; 0.02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;1 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;18.50 &#160; &#160; &#160; &#160;18.55 &#160; &#160; &#160; &#160;18.53
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;2 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;18.17 &#160; &#160; &#160; &#160;18.25 &#160; &#160; &#160; &#160;18.22
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;4 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;19.04 &#160; &#160; &#160; &#160;19.10 &#160; &#160; &#160; &#160;19.07
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; &#160;8 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;19.60 &#160; &#160; &#160; &#160;19.67 &#160; &#160; &#160; &#160;19.64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 16 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;21.39 &#160; &#160; &#160; &#160;21.47 &#160; &#160; &#160; &#160;21.43
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 32 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;24.83 &#160; &#160; &#160; &#160;24.91 &#160; &#160; &#160; &#160;24.87
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160; 64 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;27.35 &#160; &#160; &#160; &#160;27.45 &#160; &#160; &#160; &#160;27.40
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;128 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;33.23 &#160; &#160; &#160; &#160;33.34 &#160; &#160; &#160; &#160;33.29
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;256 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;41.24 &#160; &#160; &#160; &#160;41.39 &#160; &#160; &#160; &#160;41.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; &#160;512 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;52.62 &#160; &#160; &#160; &#160;52.81 &#160; &#160; &#160; &#160;52.71
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 1024 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; &#160;73.20 &#160; &#160; &#160; &#160;73.46 &#160; &#160; &#160; &#160;73.32
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 2048 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 416.36 &#160; &#160; &#160; 418.04 &#160; &#160; &#160; 417.22
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 4096 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 638.54 &#160; &#160; &#160; 640.70 &#160; &#160; &#160; 639.65
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160; 8192 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 506.26 &#160; &#160; &#160; 506.97 &#160; &#160; &#160; 506.63
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160;16384 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 600.63 &#160; &#160; &#160; 601.40 &#160; &#160; &#160; 601.02
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160;32768 &#160; &#160; &#160; &#160; 1000 &#160; &#160; &#160; 639.52 &#160; &#160; &#160; 640.34 &#160; &#160; &#160; 639.93
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; &#160;65536 &#160; &#160; &#160; &#160; &#160;640 &#160; &#160; &#160; 914.22 &#160; &#160; &#160; 916.02 &#160; &#160; &#160; 915.13
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; 131072 &#160; &#160; &#160; &#160; &#160;320 &#160; &#160; &#160;2287.37 &#160; &#160; &#160;2295.18 &#160; &#160; &#160;2291.35
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; 262144 &#160; &#160; &#160; &#160; &#160;160 &#160; &#160; &#160;4041.36 &#160; &#160; &#160;4070.58 &#160; &#160; &#160;4056.27
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160; 524288 &#160; &#160; &#160; &#160; &#160; 80 &#160; &#160; &#160;7292.35 &#160; &#160; &#160;7463.27 &#160; &#160; &#160;7397.14
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160;1048576 &#160; &#160; &#160; &#160; &#160; 40 &#160; &#160; 13647.15 &#160; &#160; 14107.15 &#160; &#160; 13905.29
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160;2097152 &#160; &#160; &#160; &#160; &#160; 20 &#160; &#160; 30625.00 &#160; &#160; 32635.45 &#160; &#160; 31815.36
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160; &#160;4194304 &#160; &#160; &#160; &#160; &#160; 10 &#160; &#160; 63543.01 &#160; &#160; 70987.49 &#160; &#160; 68680.48
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#183; &#160; &#160; &#160; &#160; Problem 2 &#150; segmentation fault with OMPI 1.4.3/1.5 and IMB gather np=768:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When trying to run the same command but with np=768 I get segmentation fault:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/bin/mpirun -np 768 -machinefile voltairenodes -mca btl sm,self,openib -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_gather_algorithm 1 imb/src/IMB-MPI1 gather -npmin 768 -mem 1.6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This happens in OMPI 1.4.3 and 1.5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] Failing at address: 0x2aab4a204000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 0] /lib64/libpthread.so.0 [0x366aa0e7c0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 1] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(ompi_convertor_unpack+0x15f) [0x2b077882282e]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 2] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9e1672]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 3] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9dd0b6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 4] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_btl_sm.so [0x2b077c459d87]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 5] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0xbe) [0x2b0778d845b8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 6] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6d62]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 7] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6ba7]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 8] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6a90]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 9] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d298dc5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [10] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d2990d3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [11] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d286e9b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [12] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_sync.so [0x2b077d07e96c]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [13] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(PMPI_Gather+0x55e) [0x2b077883ec9a]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [14] imb/src/IMB-MPI1(IMB_gather+0xe8) [0x40a088]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [15] imb/src/IMB-MPI1(IMB_init_buffers_iter+0x28a) [0x405baa]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [16] imb/src/IMB-MPI1(main+0x30f) [0x40362f]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [17] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3669e1d994]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] [18] imb/src/IMB-MPI1 [0x403269]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compa163:20249] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas? More debuggin tips?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Doron
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Previous message:</strong> <a href="8876.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>In reply to:</strong> <a href="8871.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8878.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8883.php">Terry Dontje: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
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
