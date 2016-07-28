<?
$subject_val = "Re: [OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 11:25:52 2012" -->
<!-- isoreceived="20120110162552" -->
<!-- sent="Tue, 10 Jan 2012 08:25:48 -0800" -->
<!-- isosent="20120110162548" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="23F6A326-CB15-4DAB-A8A1-56A7ECE88055_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+H1izP57fha=HZqa6RX0FTQ=A39ou4qb6Xzoy=CWdNPf9Skrg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 11:25:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="18121.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18121.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This may be a dumb question, but are you 100% sure that the input values are correct?
<br>
<p>On Jan 10, 2012, at 8:16 AM, Anas Al-Trad wrote:
<br>
<p><span class="quotelev1">&gt;  Hi Ralph, I changed the intel icc module from 12.1.0 to 11.1.069, the previous default one used at a Neolith Cluster. I submitted the job and I still waiting for the result. Here is the message of the segmentation fault:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n764:29867] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n764:29867] Signal: Floating point exception (8)
</span><br>
<span class="quotelev1">&gt; [n764:29867] Signal code: Integer divide-by-zero (1)
</span><br>
<span class="quotelev1">&gt; [n764:29867] Failing at address: 0x2ba640e74627
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 0] /lib64/libc.so.6 [0x2ba641e162d0]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 1] /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_coords+0x43) [0x2ba640e74627]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 2] /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(mca_topo_base_cart_sub+0x1d5) [0x2ba640e74acd]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 3] /software/mpi/openmpi/1.4.1/i101011/lib/libmpi.so.0(MPI_Cart_sub+0x35) [0x2ba640e472d9]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 4] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(Compute_SUMMA1+0x226) [0x4088da]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 5] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(variant_run+0xb2) [0x409058]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 6] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o(main+0xf90) [0x40eeba]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2ba641e03994]
</span><br>
<span class="quotelev1">&gt; [n764:29867] [ 8] /home/x_anaal/thesis/cimple/tst_chng_p/v5/r2/output.o [0x403fd9]
</span><br>
<span class="quotelev1">&gt; [n764:29867] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when I run my application, sometimes I get this error and sometimes it is stuck in the middle.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18123.php">Shiqing Fan: "Re: [OMPI users] Problem launching application on windows"</a>
<li><strong>Previous message:</strong> <a href="18121.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>In reply to:</strong> <a href="18121.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18124.php">Anas Al-Trad: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
