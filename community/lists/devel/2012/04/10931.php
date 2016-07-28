<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 14:00:07 2012" -->
<!-- isoreceived="20120425180007" -->
<!-- sent="Wed, 25 Apr 2012 20:59:57 +0300" -->
<!-- isosent="20120425175957" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="4F983B9D.5090305_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67EE3D1E-5890-4343-AD19-5A73D47C5FDF_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How to debug segv<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 13:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10932.php">Shamis, Pavel: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10930.php">Nathan Hjelm: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess you are right.
<br>
<p>I started looking into the communication passing between processes and I 
<br>
may have found a problem with the way I handle &quot;reserved&quot; data requested 
<br>
at prepare_src()... I've tried to write pretty much the same as TCP (the 
<br>
relevant code is around &quot;if(opal_convertor_need_buffers(convertor))&quot;) 
<br>
and when I copy the buffered data to (frag+1) the program works. When I 
<br>
try to optimize the code by allowing the segment to point to the 
<br>
original location, I get MPI_ERR_TRUNCATE. I've printed out the data 
<br>
sent and recieved, and what I got (&quot;[]&quot; for sent, &quot;&lt;&gt;&quot; for received, 
<br>
running osu_latency) is appended below.
<br>
<p>Question is: Where is the code which is responsible for writing the 
<br>
reserved data?
<br>
<p>Thanks,
<br>
Alex
<br>
<p><p>Always assume opal_convertor_need_buffers - works (97 is the application 
<br>
data, preceded by 14 reserved bytes):
<br>
<p>...
<br>
[65,0,0,0,1,0,0,0,1,0,0,0,89,-112,97,97,97,97,]
<br>
&lt;65,0,0,0,1,0,0,0,1,0,0,0,89,-112,97,97,97,97,&gt;
<br>
[65,0,0,0,0,0,0,0,1,0,0,0,90,-112,97,97,97,97,]
<br>
&lt;65,0,0,0,0,0,0,0,1,0,0,0,90,-112,97,97,97,97,&gt;
<br>
[65,0,0,0,1,0,0,0,1,0,0,0,90,-112,97,97,97,97,]
<br>
&lt;65,0,0,0,1,0,0,0,1,0,0,0,90,-112,97,97,97,97,&gt;
<br>
[65,0,0,0,0,0,0,0,1,0,0,0,91,-112,97,97,97,97,]
<br>
&lt;65,0,0,0,0,0,0,0,1,0,0,0,91,-112,97,97,97,97,&gt;
<br>
[65,0,0,0,1,0,0,0,1,0,0,0,91,-112,97,97,97,97,]
<br>
...
<br>
<p>Detect when not opal_convertor_need_buffers - fails:
<br>
<p>...
<br>
[65,0,0,0,0,0,0,0,1,0,0,0,-15,85,]
<br>
&lt;65,0,0,0,0,0,0,0,1,0,0,0,-15,85,97,&gt;
<br>
[65,0,0,0,1,0,0,0,1,0,0,0,-15,85,]
<br>
&lt;65,0,0,0,1,0,0,0,1,0,0,0,-15,85,97,&gt;
<br>
[65,0,0,0,0,0,0,0,1,0,0,0,-14,85,]
<br>
&lt;65,0,0,0,0,0,0,0,1,0,0,0,-14,85,97,&gt;
<br>
[65,0,0,0,1,0,0,0,1,0,0,0,-14,85,]
<br>
&lt;65,0,0,0,1,0,0,0,1,0,0,0,-14,85,97,&gt;
<br>
[65,0,0,0,1,0,0,0,-16,-1,-1,-1,-13,85,]
<br>
1                       453.26
<br>
[65,0,0,0,0,0,0,0,-16,-1,-1,-1,-13,85,]
<br>
&lt;65,0,0,0,0,0,0,0,-16,-1,-1,-1,-13,85,97,&gt;
<br>
&lt;65,0,0,0,1,0,0,0,-16,-1,-1,-1,-13,85,97,&gt;
<br>
[singularity:13509] *** An error occurred in MPI_Barrier
<br>
[singularity:13509] *** reported by process [2239889409,140733193388033]
<br>
[singularity:13509] *** on communicator MPI_COMM_WORLD
<br>
[singularity:13509] *** MPI_ERR_TRUNCATE: message truncated
<br>
[singularity:13509] *** MPI_ERRORS_ARE_FATAL (processes in this 
<br>
communicator will now abort,
<br>
[singularity:13509] ***    and potentially your MPI job)
<br>
[singularity:13507] 1 more process has sent help message 
<br>
help-mpi-errors.txt / mpi_errors_are_fatal
<br>
[singularity:13507] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to 
<br>
see all help / error messages
<br>
alex_at_singularity:~/huji/benchmarks/mpi/osu-micro-benchmarks-3.5.2$
<br>
<p>On 04/25/2012 04:35 PM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Alex,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You got the banner of the FT benchmark, so I guess at least the rank 0 successfully completed the MPI_Init call. This is a hint that you should investigate more into the point-to-point logic of your mosix BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 25, 2012, at 09:30 , Alex Margolin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NAS Parallel Benchmarks 3.3 -- FT Benchmark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No input file inputft.data. Using compiled defaults
</span><br>
<span class="quotelev2">&gt;&gt; Size                :   64x  64x  64
</span><br>
<span class="quotelev2">&gt;&gt; Iterations          :              6
</span><br>
<span class="quotelev2">&gt;&gt; Number of processes :              4
</span><br>
<span class="quotelev2">&gt;&gt; Processor array     :         1x   4
</span><br>
<span class="quotelev2">&gt;&gt; Layout type         :             1D
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10932.php">Shamis, Pavel: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Previous message:</strong> <a href="10930.php">Nathan Hjelm: "Re: [OMPI devel] libevent socket code"</a>
<li><strong>In reply to:</strong> <a href="10924.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>Reply:</strong> <a href="10933.php">George Bosilca: "Re: [OMPI devel] How to debug segv"</a>
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
