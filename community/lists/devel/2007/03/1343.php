<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar  6 09:06:40 2007" -->
<!-- isoreceived="20070306140640" -->
<!-- sent="Tue, 06 Mar 2007 15:06:14 +0100" -->
<!-- isosent="20070306140614" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()" -->
<!-- id="45ED7556.5070005_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220703060543xc6ca1abxf2dcf76bd0f4671d_at_mail.gmail.com" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-06 09:06:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>Previous message:</strong> <a href="1342.php">Tim Mattox: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1342.php">Tim Mattox: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>Reply:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>this is realy sad, version 1.1.2 works quite good with threads (multiple
<br>
threads which starts mpi requests), only 1 of 10 (or even less) kills with
<br>
a SIGSEGV. And this this simple test program works even longer.
<br>
<p>Bert
<br>
<p>Tim Mattox wrote:
<br>
<span class="quotelev1">&gt; Hi Bert Wesarg,
</span><br>
<span class="quotelev1">&gt; Thank you for your quick testing of 1.2rc1.  1.2 is expected to fail when
</span><br>
<span class="quotelev1">&gt; using MPI_THREAD_MULTIPLE.  I suspect that a working and tested
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE will be one of our goals for 1.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 3/6/07, Bert Wesarg &lt;wesarg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I followed the call to test the rc1, but a simple test programm hangs, but
</span><br>
<span class="quotelev2">&gt;&gt; non deterministic. all but one orted have quit. but no cpu eating from
</span><br>
<span class="quotelev2">&gt;&gt; orted or mpirun.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test system is a xeon cluster with myrinet interconnect.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the outouts are splited into two mails (100kb limit)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bert Wesarg
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>Previous message:</strong> <a href="1342.php">Tim Mattox: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<li><strong>In reply to:</strong> <a href="1342.php">Tim Mattox: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple MPI_thread_init()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
<li><strong>Reply:</strong> <a href="1344.php">Jeff Squyres: "Re: [OMPI devel] 1.2rc1: hangs non deterministic with simple	MPI_thread_init()"</a>
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
