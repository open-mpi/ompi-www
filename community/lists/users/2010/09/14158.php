<?
$subject_val = "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 22:14:53 2010" -->
<!-- isoreceived="20100902021453" -->
<!-- sent="Wed, 1 Sep 2010 20:14:44 -0600" -->
<!-- isosent="20100902021444" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?" -->
<!-- id="4E4BC153-B4E3-43E2-B980-904DABE78B4E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C7EFCB1.2010201_at_163.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 22:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>In reply to:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not a bug - that is normal behavior. The processes are polling hard to establish the connections as quickly as possible.
<br>
<p><p>On Sep 1, 2010, at 7:24 PM, lyb wrote:
<br>
<p><span class="quotelev1">&gt; Hi, All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested two sample applications on Windows 2003 Server, one use MPI_Comm_accept and other use MPI_Comm_connect, 
</span><br>
<span class="quotelev1">&gt; when run into MPI_Comm_accept or MPI_Comm_connect, the application use 100% one cpu core.  Is it a bug or some wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested with three version including Version 1.4 (stable), Version 1.5 (prerelease) and trunk 23706 version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Open_port(MPI_INFO_NULL, port);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_accept( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,    &amp;client );
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; MPI_Comm_connect( port, MPI_INFO_NULL, 0, MPI_COMM_WORLD,    &amp;server );
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lyb
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14158/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>In reply to:</strong> <a href="14157.php">lyb: "[OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
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
