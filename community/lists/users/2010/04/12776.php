<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 04:02:12 2010" -->
<!-- isoreceived="20100426080212" -->
<!-- sent="Mon, 26 Apr 2010 04:01:58 -0400" -->
<!-- isosent="20100426080158" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="3404FF7F-2192-4DFB-98D5-94E7BA19AEA6_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="m2g28d120cc1004251927h770e3818y4f162c44a5daec6f_at_mail.gmail.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 04:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12775.php">Sylvestre Ledru: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<li><strong>In reply to:</strong> <a href="12771.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25 Apr 2010, at 22:27, Asad Ali wrote:
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
<span class="quotelev1">&gt; Only machine 1 gives correct results.  While CentOS and Debian results are same but are wrong and different from those of machine 1.
</span><br>
<p>Have you verified the are actually wrong or are they just different?  It's actually perfectly possible for the same program to get different results from run to run even on the same hardware and the same OS.  All floating point operations by the MPI library are expected to be deterministic but changing the process layout or and MPI settings can affect this and of course anything the application does can introduce differences as well.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12777.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>Previous message:</strong> <a href="12775.php">Sylvestre Ledru: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and  CentOS"</a>
<li><strong>In reply to:</strong> <a href="12771.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12779.php">Conboy, James: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12780.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
