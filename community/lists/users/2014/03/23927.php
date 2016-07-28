<?
$subject_val = "Re: [OMPI users] Segmentation Fault";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 21 14:47:19 2014" -->
<!-- isoreceived="20140321184719" -->
<!-- sent="Fri, 21 Mar 2014 11:47:18 -0700" -->
<!-- isosent="20140321184718" -->
<!-- name="Madison Stemm" -->
<!-- email="astromaddie_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation Fault" -->
<!-- id="CABKoLWUhTsNjw+t36ce2oPx1G=8379vZJxs0XwxzUSU1VHuFWA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFqWg=TFxGjPc7p_-aj27Nh7rEMd6hjHAOxUNeUvFPcZFv4kBg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation Fault<br>
<strong>From:</strong> Madison Stemm (<em>astromaddie_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-21 14:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="23926.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Madhurima,
<br>
<p>I'm also having this issue. While I can't provide any assistance, I'd be
<br>
interested in being kept abreast of any solution as it may assist me as
<br>
well.
<br>
<p>~Maddie
<br>
<p><p>On Fri, Mar 21, 2014 at 12:26 AM, madhurima madhunapanthula &lt;
<br>
erankimadhu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iam trying to link the jumpshot libraries with the graph500 (mpi_tuned_2d
</span><br>
<span class="quotelev1">&gt; sources).
</span><br>
<span class="quotelev1">&gt; After linkin the libraries and executing mpirun with the
</span><br>
<span class="quotelev1">&gt; graph500_mpi_custome_n binaries Iam getting the following segmenation fault.
</span><br>
<span class="quotelev1">&gt; I have no clue as to where the issue is. When I dont link the jumpshot
</span><br>
<span class="quotelev1">&gt; libraries with the Graph500(mpi_tuned_2d) sources the binaries run without
</span><br>
<span class="quotelev1">&gt; segfault error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] Failing at address: 0x694930
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 0] /lib64/libpthread.so.0() [0x30a5a0f710]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 1] ./graph500_mpi_custom_8(MPI_Testany+0xfc)
</span><br>
<span class="quotelev1">&gt; [0x425d3f]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 2]
</span><br>
<span class="quotelev1">&gt; ./graph500_mpi_custom_8(_Z7run_bfslPlRK12bfs_settings+0x1619) [0x41d909]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 3] ./graph500_mpi_custom_8(main+0xcd7) [0x40fef7]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 4] /lib64/libc.so.6(__libc_start_main+0xfd)
</span><br>
<span class="quotelev1">&gt; [0x30a521ed1d]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] [ 5] ./graph500_mpi_custom_8() [0x40eca9]
</span><br>
<span class="quotelev1">&gt; [mercado-26:14493] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Please guide me in fixing this issue
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lokah samasta sukhinobhavanthu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Madhurima
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
<p><p><p><pre>
-- 
*Madison Stemm*
*Assistant Researcher*
Planetary Sciences Group
<a href="http://planets.ucf.edu">http://planets.ucf.edu</a>
*Department of PhysicsUniversity of Central Florida*
Mobile: (407) 227-9913
Preferred Email: astromaddie_at_[hidden]
University Email: Madison.Stemm_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23928.php">Vince Grimes: "[OMPI users] Call stack upon MPI routine error"</a>
<li><strong>Previous message:</strong> <a href="23926.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>In reply to:</strong> <a href="23909.php">madhurima madhunapanthula: "[OMPI users] Segmentation Fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23933.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation Fault"</a>
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
