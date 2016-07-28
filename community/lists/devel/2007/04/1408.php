<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 12 13:21:06 2007" -->
<!-- isoreceived="20070412172106" -->
<!-- sent="Thu, 12 Apr 2007 11:20:35 -0600" -->
<!-- isosent="20070412172035" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]" -->
<!-- id="8D2FD037-EC02-4B8E-8855-71F2546312D6_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3BF6DE3D-E1F2-49C0-9B70-3B506D1D62E7_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-12 13:20:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1407.php">Paul Weber: "[OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>In reply to:</strong> <a href="1407.php">Paul Weber: "[OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, that eliminates the easy ones.  MPI_Cartdim_get isn't one of  
<br>
the more popular functions, so it's probably a bug in there.  Would  
<br>
it be possible to get access to the code?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><p>On Apr 11, 2007, at 4:20 PM, Paul Weber wrote:
<br>
<p><span class="quotelev1">&gt; David,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's some more info.  Looks like he is using the correct modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks -- Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Original Message --------
</span><br>
<span class="quotelev1">&gt; Subject: 	Re: [CIC600000217180] Still having strange MPI errors on  
</span><br>
<span class="quotelev1">&gt; coyote...
</span><br>
<span class="quotelev1">&gt; Date: 	Wed, 11 Apr 2007 16:15:40 -0600
</span><br>
<span class="quotelev1">&gt; From: 	Erik Holmstrom &lt;erikh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: 	consult_at_[hidden]
</span><br>
<span class="quotelev1">&gt; References: 	&lt;200704112126.l3BLQFoO010297_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had the following modules loaded:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [erikh_at_cy-c3 vasp.4.6_mpi]$ module list
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;   1) atlas/3.6.0         2) fftw/2.1.5          3) pgi/  
</span><br>
<span class="quotelev1">&gt; 6.1-5           4) openmpi/1.1.2-pgi
</span><br>
<span class="quotelev1">&gt; [erikh_at_cy-c3 vasp.4.6_mpi]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also attached the makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; Erik
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.Coyote.pgi&gt;
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
<span class="quotelev1">&gt; On Apr 11, 2007, at 15:26 15, consult_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From:    pmw
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Erik,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell us exactly what modules you compiled your code with?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks -- Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Original Problem Statement:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get the following errors from MPI on coyote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20434] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20434] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20438] *** An error occurred in MPI_Cartdim_get
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20438] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20438] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; [n237:20438] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; 3 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This was when I used the PGI compiler and MPI modules. I get similar
</span><br>
<span class="quotelev2">&gt;&gt; error messages when I use the intel compiler and MPI modules. Any
</span><br>
<span class="quotelev2">&gt;&gt; idea what could be my problem??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; Erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Erik Holmstrom
</span><br>
<span class="quotelev2">&gt;&gt; T-1, Los Alamos National Laboratory, MS B221
</span><br>
<span class="quotelev2">&gt;&gt; P.O. Box 1663
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos, NM 87545
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tel:  +1 505 667 6637
</span><br>
<span class="quotelev2">&gt;&gt; Fax: +1 505 606 0917
</span><br>
<span class="quotelev2">&gt;&gt; &lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt; Weber Paul M.
</span><br>
<span class="quotelev2">&gt;&gt; CCN-7 High Performance Computing    |   consult_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Mail Stop B-251                  |   (505) 665-4444
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Lab     |   (505) 665-6647  (fax)
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos,  NM  87545     |
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
</span><br>
<span class="quotelev1">&gt; Erik Holmstrom
</span><br>
<span class="quotelev1">&gt; T-1, Los Alamos National Laboratory, MS B221
</span><br>
<span class="quotelev1">&gt; P.O. Box 1663
</span><br>
<span class="quotelev1">&gt; Los Alamos, NM 87545
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tel:  +1 505 667 6637
</span><br>
<span class="quotelev1">&gt; Fax: +1 505 606 0917
</span><br>
<span class="quotelev1">&gt; &lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1409.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1407.php">Paul Weber: "[OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>In reply to:</strong> <a href="1407.php">Paul Weber: "[OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
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
