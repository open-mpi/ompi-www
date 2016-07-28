<?
$subject_val = "Re: [OMPI users] alternate PBS_NODEFILE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 27 15:17:29 2011" -->
<!-- isoreceived="20110927191729" -->
<!-- sent="Tue, 27 Sep 2011 21:17:14 +0200" -->
<!-- isosent="20110927191714" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alternate PBS_NODEFILE" -->
<!-- id="375BAC82-B0D0-42A5-B576-8A95FB4777B8_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5C59564D023C844F9C20CCD32687E5F46C6AC21A_at_SFREXMBX01.acds.t-systems-sfr.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] alternate PBS_NODEFILE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-27 15:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17451.php">German Hoecht: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17446.php">Wiegers, Bert: "[OMPI users] alternate PBS_NODEFILE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Reply:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.09.2011 um 16:00 schrieb Wiegers, Bert:
<br>
<p><span class="quotelev1">&gt; we have a clustersetup with all nodes  slot=1 (although 12 cores are  
</span><br>
<span class="quotelev1">&gt; present).
</span><br>
<span class="quotelev1">&gt; Now we would like to alternate the machinefile for a specific User.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found this hint:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tm">http://www.open-mpi.org/faq/?category=tm</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this still valid?
</span><br>
<span class="quotelev1">&gt; We have openMPI v 1.4.3 running.
</span><br>
<span class="quotelev1">&gt; Trying to generate an own machinefile seems to fail - so far.
</span><br>
<p>defining 12 slots and request the machines exclusive is not an option?
<br>
<p>The only way to get it working otherwise is to unset $JOB_ID and so  
<br>
on, so that Open MPI is not aware that it is running under PBS (or  
<br>
disable the tm completely --without-tm if I'm not mistaken. But  then  
<br>
you lose a tight integration (at least when you are running across  
<br>
multiple nodes).
<br>
<p>-- Reuti
<br>
<p><p><p><span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Bert
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Previous message:</strong> <a href="17451.php">German Hoecht: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17446.php">Wiegers, Bert: "[OMPI users] alternate PBS_NODEFILE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<li><strong>Reply:</strong> <a href="17458.php">Wiegers, Bert: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
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
