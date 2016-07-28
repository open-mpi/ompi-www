<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 05:20:18 2010" -->
<!-- isoreceived="20100426092018" -->
<!-- sent="Mon, 26 Apr 2010 10:20:12 +0100" -->
<!-- isosent="20100426092012" -->
<!-- name="Conboy, James" -->
<!-- email="Jim.Conboy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="D4E586A8BEF6CA469914A0AFC782E27201C3E7_at_ntsrv-exch02.jetnet.jet.efda.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3404FF7F-2192-4DFB-98D5-94E7BA19AEA6_at_pittman.co.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Conboy, James (<em>Jim.Conboy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 05:20:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12778.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Have you checked your compiler switches ??  Some have options to
<br>
perform IEEE arithmetic, which is supposed to give identical results -
<br>
eg 
<br>
<p>pgf95 
<br>
<p>-Kieee -Knoieee (default)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Perform floating-point operations in strict conformance with the
<br>
IEEE 754 standard.  Some optimizations are disabled with -Kieee, and a
<br>
more accurate math library is used.  The default -Knoieee uses faster
<br>
but very slightly less accurate methods.
<br>
<p>Lahey  ( lf95 ):
<br>
<p>--[n]ap
<br>
Arithmetic Precision
<br>
Compile only. Default: --nap
<br>
Specify --ap to guarantee the consistency of REAL and COMPLEX
<br>
calculations, regardless
<br>
of optimization level; user variables are not assigned to registers...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;We have found these necessary for regression testing codes -
<br>
otherwise, very minor processor differences will generate different
<br>
rounding errors ( without any assistance from MPI )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jim Conboy ( Culham Ctr for Fusion Energy )
<br>
<p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Ashley Pittman
<br>
Sent: 26 April 2010 09:02
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu,Debian
<br>
and CentOS
<br>
<p><p><p>On 25 Apr 2010, at 22:27, Asad Ali wrote:
<br>
<p><span class="quotelev1">&gt; Yes I use different machines such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; machine 1 uses AMD Opterons. (Fedora)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; machine 2 and 3 use Intel Xeons. (CentOS)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; machine 4 uses slightly older Intel Xeons. (Debian)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Only machine 1 gives correct results.  While CentOS and Debian results
</span><br>
<p><span class="quotelev1">&gt; are same but are wrong and different from those of machine 1.
</span><br>
<p>Have you verified the are actually wrong or are they just different?
<br>
It's actually perfectly possible for the same program to get different
<br>
results from run to run even on the same hardware and the same OS.  All
<br>
floating point operations by the MPI library are expected to be
<br>
deterministic but changing the process layout or and MPI settings can
<br>
affect this and of course anything the application does can introduce
<br>
differences as well.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
_______________________________________________
users mailing list
users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Previous message:</strong> <a href="12778.php">Timur Magomedov: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="12776.php">Ashley Pittman: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
