<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 11 18:36:13 2007" -->
<!-- isoreceived="20070411223613" -->
<!-- sent="Wed, 11 Apr 2007 16:20:14 -0600" -->
<!-- isosent="20070411222014" -->
<!-- name="Paul Weber" -->
<!-- email="pmw_at_[hidden]" -->
<!-- subject="[OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]" -->
<!-- id="3BF6DE3D-E1F2-49C0-9B70-3B506D1D62E7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Paul Weber (<em>pmw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-11 18:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>Previous message:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>Reply:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David,
<br>
<p>Here's some more info.  Looks like he is using the correct modules.
<br>
<p>Thanks -- Paul
<br>
<p><p><p>-------- Original Message --------
<br>
Subject: 	Re: [CIC600000217180] Still having strange MPI errors on  
<br>
coyote...
<br>
Date: 	Wed, 11 Apr 2007 16:15:40 -0600
<br>
From: 	Erik Holmstrom &lt;erikh_at_[hidden]&gt;
<br>
To: 	consult_at_[hidden]
<br>
References: 	&lt;200704112126.l3BLQFoO010297_at_[hidden]&gt;
<br>
<p><p><p>I had the following modules loaded:
<br>
<p>[erikh_at_cy-c3 vasp.4.6_mpi]$ module list
<br>
Currently Loaded Modulefiles:
<br>
&nbsp;&nbsp;&nbsp;1) atlas/3.6.0         2) fftw/2.1.5          3) pgi/  
<br>
6.1-5           4) openmpi/1.1.2-pgi
<br>
[erikh_at_cy-c3 vasp.4.6_mpi]$
<br>
<p><p>I also attached the makefile
<br>
<p>/
<br>
Erik
<br>
<p><p><p><p><p><p><p><p>

<br><p>
<p><p><p><p><p><p>On Apr 11, 2007, at 15:26 15, consult_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; From:    pmw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell us exactly what modules you compiled your code with?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks -- Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Original Problem Statement:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the following errors from MPI on coyote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [n237:20434] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n237:20434] pls_bproc_orted: openpty failed, using pipes instead
</span><br>
<span class="quotelev1">&gt; [n237:20438] *** An error occurred in MPI_Cartdim_get
</span><br>
<span class="quotelev1">&gt; [n237:20438] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n237:20438] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [n237:20438] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; 3 processes killed (possibly by Open MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This was when I used the PGI compiler and MPI modules. I get similar
</span><br>
<span class="quotelev1">&gt; error messages when I use the intel compiler and MPI modules. Any
</span><br>
<span class="quotelev1">&gt; idea what could be my problem??
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; Weber Paul M.
</span><br>
<span class="quotelev1">&gt; CCN-7 High Performance Computing    |   consult_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Mail Stop B-251                  |   (505) 665-4444
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab     |   (505) 665-6647  (fax)
</span><br>
<span class="quotelev1">&gt; Los Alamos,  NM  87545     |
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
<br>
Erik Holmstrom
<br>
T-1, Los Alamos National Laboratory, MS B221
<br>
P.O. Box 1663
<br>
Los Alamos, NM 87545
<br>
<p>Tel:  +1 505 667 6637
<br>
Fax: +1 505 606 0917
<br>
&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;&lt;&gt;
<br>
<p><p><p><p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1407/make.Coyote.pgi">make.Coyote.pgi</a>
</ul>
<!-- attachment="make.Coyote.pgi" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>Previous message:</strong> <a href="1406.php">Josh Hursey: "Re: [OMPI devel] Aggregate MCA Parameter Sets"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
<li><strong>Reply:</strong> <a href="1408.php">Brian Barrett: "Re: [OMPI devel] [Fwd: Re: [CIC600000217180] Still having strange MPI errors on coyote...]"</a>
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
