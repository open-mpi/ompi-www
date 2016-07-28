<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 12 17:58:53 2006" -->
<!-- isoreceived="20060412215853" -->
<!-- sent="Wed, 12 Apr 2006 15:58:25 -0600" -->
<!-- isosent="20060412215825" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.0.2 with Intel 9.0" -->
<!-- id="op.s7w0nnbzies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="443D643E.5030602_at_charter.net" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-12 17:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1041.php">Jeffrey B. Layton: "[OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Jeffrey B. Layton: "[OMPI users] Building 1.0.2 with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 12 Apr 2006 14:34:06 -0600, Jeffrey B. Layton  
<br>
&lt;laytonjb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good afternoon,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    While we're on the subject of building OpenMPI-1.0.2 with
</span><br>
<span class="quotelev1">&gt; Intel, I'm having trouble building OpenMPI-1.0.2 with Intel 9.0.
</span><br>
<p>I'm starting to wonder if I'm doing something magical; I've compiled Open  
<br>
MPI 1.0.2 with Intel 9.0 (EM64T version) with no problems.  I do use  
<br>
slightly different configure options, but you disable a few things I don't.
<br>
<p>/configure \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--prefix=/usr/x86_64-gcc3.3.3/openmpi-1.0.2 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mem-debug \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mem-profile \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-progress-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-shared \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-cxx-exceptions
<br>
<p>(Note that I'm not disabling ROMIO)
<br>
<p>But I can compile it fine with:
<br>
icc (ICC) 9.0 20060222
<br>
ifort (IFORT) 9.0 20060222
<br>
<pre>
-- 
Troy Telford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1041.php">Jeffrey B. Layton: "[OMPI users] Problem with 1.0.2 and PGI 6.0"</a>
<li><strong>In reply to:</strong> <a href="1040.php">Jeffrey B. Layton: "[OMPI users] Building 1.0.2 with Intel 9.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
<li><strong>Reply:</strong> <a href="1043.php">Jeffrey B. Layton: "Re: [OMPI users] Building 1.0.2 with Intel 9.0"</a>
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
