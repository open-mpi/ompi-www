<?
$subject_val = "Re: [OMPI devel] How to debug segv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 14:21:52 2012" -->
<!-- isoreceived="20120425182152" -->
<!-- sent="Wed, 25 Apr 2012 14:21:45 -0400" -->
<!-- isosent="20120425182145" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How to debug segv" -->
<!-- id="78875782-B4A6-4EFC-ACDA-6B7EF60CAFA1_at_eecs.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F983B9D.5090305_at_mail.huji.ac.il" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 14:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10932.php">Shamis, Pavel: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2012, at 13:59 , Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; I guess you are right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I started looking into the communication passing between processes and I may have found a problem with the way I handle &quot;reserved&quot; data requested at prepare_src()... I've tried to write pretty much the same as TCP (the relevant code is around &quot;if(opal_convertor_need_buffers(convertor))&quot;) and when I copy the buffered data to (frag+1) the program works. When I try to optimize the code by allowing the segment to point to the original location, I get MPI_ERR_TRUNCATE. I've printed out the data sent and recieved, and what I got (&quot;[]&quot; for sent, &quot;&lt;&gt;&quot; for received, running osu_latency) is appended below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Question is: Where is the code which is responsible for writing the reserved data?
</span><br>
<p>It is the PML headers. Based on the error you reported OMPI is complaining about truncated data on an MPI_Barrier &#133; that's quite bad as the barrier is one of the few operations that do not manipulate any data. I guess the PML headers are not located at the expected displacement in the fragment, so the PML is using wrong values.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Always assume opal_convertor_need_buffers - works (97 is the application data, preceded by 14 reserved bytes):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,1,0,0,0,89,-112,97,97,97,97,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,1,0,0,0,1,0,0,0,89,-112,97,97,97,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,0,0,0,0,1,0,0,0,90,-112,97,97,97,97,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,0,0,0,0,1,0,0,0,90,-112,97,97,97,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,1,0,0,0,90,-112,97,97,97,97,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,1,0,0,0,1,0,0,0,90,-112,97,97,97,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,0,0,0,0,1,0,0,0,91,-112,97,97,97,97,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,0,0,0,0,1,0,0,0,91,-112,97,97,97,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,1,0,0,0,91,-112,97,97,97,97,]
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Detect when not opal_convertor_need_buffers - fails:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,0,0,0,0,1,0,0,0,-15,85,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,0,0,0,0,1,0,0,0,-15,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,1,0,0,0,-15,85,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,1,0,0,0,1,0,0,0,-15,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,0,0,0,0,1,0,0,0,-14,85,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,0,0,0,0,1,0,0,0,-14,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,1,0,0,0,-14,85,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,1,0,0,0,1,0,0,0,-14,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,1,0,0,0,-16,-1,-1,-1,-13,85,]
</span><br>
<span class="quotelev1">&gt; 1                       453.26
</span><br>
<span class="quotelev1">&gt; [65,0,0,0,0,0,0,0,-16,-1,-1,-1,-13,85,]
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,0,0,0,0,-16,-1,-1,-1,-13,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; &lt;65,0,0,0,1,0,0,0,-16,-1,-1,-1,-13,85,97,&gt;
</span><br>
<span class="quotelev1">&gt; [singularity:13509] *** An error occurred in MPI_Barrier
</span><br>
<span class="quotelev1">&gt; [singularity:13509] *** reported by process [2239889409,140733193388033]
</span><br>
<span class="quotelev1">&gt; [singularity:13509] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [singularity:13509] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [singularity:13509] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [singularity:13509] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [singularity:13507] 1 more process has sent help message help-mpi-errors.txt / mpi_errors_are_fatal
</span><br>
<span class="quotelev1">&gt; [singularity:13507] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/mpi/osu-micro-benchmarks-3.5.2$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/25/2012 04:35 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Alex,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You got the banner of the FT benchmark, so I guess at least the rank 0 successfully completed the MPI_Init call. This is a hint that you should investigate more into the point-to-point logic of your mosix BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 25, 2012, at 09:30 , Alex Margolin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NAS Parallel Benchmarks 3.3 -- FT Benchmark
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No input file inputft.data. Using compiled defaults
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Size                :   64x  64x  64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Iterations          :              6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Number of processes :              4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Processor array     :         1x   4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Layout type         :             1D
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
<li><strong>Next message:</strong> <a href="10934.php">Leif Lindholm: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10932.php">Shamis, Pavel: "Re: [OMPI devel] How to debug segv"</a>
<li><strong>In reply to:</strong> <a href="10931.php">Alex Margolin: "Re: [OMPI devel] How to debug segv"</a>
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
