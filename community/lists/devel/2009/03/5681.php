<?
$subject_val = "Re: [OMPI devel] 1.3.1 fails with GM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 18:39:19 2009" -->
<!-- isoreceived="20090320223919" -->
<!-- sent="Fri, 20 Mar 2009 15:38:25 -0700" -->
<!-- isosent="20090320223825" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3.1 fails with GM" -->
<!-- id="49C41AE1.3030802_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49C3EE30.70409_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3.1 fails with GM<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 18:38:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<li><strong>Previous message:</strong> <a href="5680.php">Patrick Geoffray: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>In reply to:</strong> <a href="5680.php">Patrick Geoffray: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've just tested OMPI 1.3.1 w/ GM 2.0.19 and the &quot;ring&quot; test from LAM's 
<br>
examples directory.
<br>
I too see an early death.  The backtrace is shown below.
<br>
<p>-Paul
<br>
<p>$ mpirun  -mca btl gm,self -H pcp-i-1,pcp-i-2 ./ring
<br>
Rank 0 starting message around the ring -- 1st of 5
<br>
[pcp-i-1:27587] *** Process received signal ***
<br>
[pcp-i-1:27587] Signal: Segmentation fault (11)
<br>
[pcp-i-1:27587] Signal code: Address not mapped (1)
<br>
[pcp-i-1:27587] Failing at address: 0x5
<br>
[pcp-i-1:27587] [ 0] /lib/tls/libpthread.so.0 [0x401a38f0]
<br>
[pcp-i-1:27587] [ 1] 
<br>
/usr/local/pkg/gm-2.0.19-2.4.20-8smp//lib/libgm.so.0(gm_handle_sent_tokens+0x67) 
<br>
[0x404c6fbb]
<br>
[pcp-i-1:27587] [ 2] 
<br>
/usr/local/pkg/gm-2.0.19-2.4.20-8smp//lib/libgm.so.0(_gm_unknown+0x42f) 
<br>
[0x404cbf53]
<br>
[pcp-i-1:27587] [ 3] 
<br>
/usr/local/pkg/gm-2.0.19-2.4.20-8smp//lib/libgm.so.0(gm_unknown+0x20) 
<br>
[0x404cc068]
<br>
[pcp-i-1:27587] [ 4] 
<br>
/opt/pcp-i/usr/local/pkg/openmpi-1.3.1/lib/openmpi/mca_btl_gm.so(mca_btl_gm_component_progress+0xc2) 
<br>
[0x404b9c92]
<br>
[pcp-i-1:27587] [ 5] 
<br>
/opt/pcp-i/usr/local/pkg/openmpi-1.3.1/lib/libopen-pal.so.0(opal_progress+0x79) 
<br>
[0x40100c79]
<br>
[pcp-i-1:27587] [ 6] 
<br>
/opt/pcp-i/usr/local/pkg/openmpi-1.3.1/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_recv+0x225) 
<br>
[0x4049d9b5]
<br>
[pcp-i-1:27587] [ 7] 
<br>
/opt/pcp-i/usr/local/pkg/openmpi-1.3.1/lib/libmpi.so.0(PMPI_Recv+0x159) 
<br>
[0x40074ab9]
<br>
[pcp-i-1:27587] [ 8] ./ring(main+0xda) [0x8048876]
<br>
[pcp-i-1:27587] [ 9] /lib/tls/libc.so.6(__libc_start_main+0xe4) [0x42015704]
<br>
[pcp-i-1:27587] [10] ./ring(printf+0x31) [0x804870d]
<br>
[pcp-i-1:27587] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 27587 on node pcp-i-1 exited 
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p>Patrick Geoffray wrote:
<br>
<span class="quotelev1">&gt; Hi Christian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christian Siebert wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I just gave the new release 1.3.1 a go. While Ethernet and InfiniBand 
</span><br>
<span class="quotelev2">&gt;&gt; seem to work properly, I noticed that Myrinet/GM compiles fine but 
</span><br>
<span class="quotelev2">&gt;&gt; gives a segmentation violation in the first attempt to communicate 
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_Send in a simple &quot;hello world&quot; application). Is GM not supported 
</span><br>
<span class="quotelev2">&gt;&gt; anymore or is it just too old so that nobody tested it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GM itself is supported and maintenance releases are tested (no more 
</span><br>
<span class="quotelev1">&gt; development releases), but Open-MPI/GM is not tested at the moment. GM 
</span><br>
<span class="quotelev1">&gt; does not run on Myri-10G NICs, so we have to use a smaller pool of 
</span><br>
<span class="quotelev1">&gt; machines with Myrinet 2000 NICs in them. Human usage and MTT runs for 
</span><br>
<span class="quotelev1">&gt; Open-MPI/MX have priority and MTT for Open-MPI/GM has not run for a 
</span><br>
<span class="quotelev1">&gt; while :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We will try to resume MTT testing with Open-MPI/GM when we have the 
</span><br>
<span class="quotelev1">&gt; resources. In the meantime, we'll look into the segfault.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group                 Tel: +1-510-495-2352
HPC Research Department                   Fax: +1-510-486-6900
Lawrence Berkeley National Laboratory     
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5682.php">Samuel K. Gutierrez: "[OMPI devel] OMPI 1.3 - PERUSE peruse_comm_spec_t peer Negative Value"</a>
<li><strong>Previous message:</strong> <a href="5680.php">Patrick Geoffray: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
<li><strong>In reply to:</strong> <a href="5680.php">Patrick Geoffray: "Re: [OMPI devel] 1.3.1 fails with GM"</a>
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
