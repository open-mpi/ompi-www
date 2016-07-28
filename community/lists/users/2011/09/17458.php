<?
$subject_val = "Re: [OMPI users] alternate PBS_NODEFILE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 28 07:45:05 2011" -->
<!-- isoreceived="20110928114505" -->
<!-- sent="Wed, 28 Sep 2011 13:44:58 +0200" -->
<!-- isosent="20110928114458" -->
<!-- name="Wiegers, Bert" -->
<!-- email="Bert.Wiegers_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alternate PBS_NODEFILE" -->
<!-- id="5C59564D023C844F9C20CCD32687E5F46C6AC5C8_at_SFREXMBX01.acds.t-systems-sfr.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="375BAC82-B0D0-42A5-B576-8A95FB4777B8_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Wiegers, Bert (<em>Bert.Wiegers_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-28 07:44:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>In reply to:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Reuti,
<br>
<p><span class="quotelev1">&gt; defining 12 slots and request the machines exclusive is not an option?
</span><br>
<p>I would like to.  Unfortunatly the system is productive (for 2 years now) and many 
<br>
scripts depend on this setup.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way to get it working otherwise is to unset $JOB_ID and so
</span><br>
<span class="quotelev1">&gt; on, so that Open MPI is not aware that it is running under PBS (or
</span><br>
<span class="quotelev1">&gt; disable the tm completely --without-tm if I'm not mistaken. But  then
</span><br>
<span class="quotelev1">&gt; you lose a tight integration (at least when you are running across
</span><br>
<span class="quotelev1">&gt; multiple nodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<p>Thanks for clarifying this.
<br>
<p>Bert
<br>
<p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17458/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17459.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>Previous message:</strong> <a href="17457.php">German Hoecht: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>In reply to:</strong> <a href="17452.php">Reuti: "Re: [OMPI users] alternate PBS_NODEFILE"</a>
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
