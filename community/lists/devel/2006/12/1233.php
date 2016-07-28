<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 18:05:05 2006" -->
<!-- isoreceived="20061211230505" -->
<!-- sent="Mon, 11 Dec 2006 15:04:59 -0800" -->
<!-- isosent="20061211230459" -->
<!-- name="Roland Dreier" -->
<!-- email="rdreier_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Init() corrupts argc on Linux" -->
<!-- id="ada4ps211b8.fsf_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C8A1DC74-C965-4F65-A2A7-4D6F05764CF6_at_cisco.com" -->
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
<strong>From:</strong> Roland Dreier (<em>rdreier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-11 18:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Previous message:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2"> &gt; &gt; Breakpoint 1, main (argc=1, argv=0xbf81fae4) at mpitest.c:6
</span><br>
<span class="quotelev2"> &gt; &gt; 6               MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2"> &gt; &gt; (gdb) p argc
</span><br>
<span class="quotelev2"> &gt; &gt; $1 = 1
</span><br>
<span class="quotelev2"> &gt; &gt; (gdb) n
</span><br>
<span class="quotelev2"> &gt; &gt; 7               MPI_Finalize();
</span><br>
<span class="quotelev2"> &gt; &gt; (gdb) p argc
</span><br>
<span class="quotelev2"> &gt; &gt; Cannot access memory at address 0x0
</span><br>
<span class="quotelev2"> &gt; &gt; (gdb)
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
<span class="quotelev1"> &gt; That's very odd.  I don't see where this is happening in the code --  
</span><br>
<span class="quotelev1"> &gt; we literally never assign that value.  Can you run this through  
</span><br>
<span class="quotelev1"> &gt; valgrind and see if there's something else going on?
</span><br>
<p>It seems extremely likely that this is some sort of gdb or toolchain
<br>
bug.  MPI_Init is passed &amp;argc, so it could easily corrupt the value
<br>
in argc, but I don't see how it could change the address of the
<br>
parameter argc itself.
<br>
<p>&nbsp;- R.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1234.php">Jeff Squyres: "Re: [OMPI devel] issues with mpirun --prefix syntax"</a>
<li><strong>Previous message:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
<li><strong>In reply to:</strong> <a href="1232.php">Jeff Squyres: "Re: [OMPI devel] MPI_Init() corrupts argc on Linux"</a>
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
