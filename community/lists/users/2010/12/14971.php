<?
$subject_val = "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 17:16:10 2010" -->
<!-- isoreceived="20101201221610" -->
<!-- sent="Wed, 1 Dec 2010 22:16:25 -0000" -->
<!-- isosent="20101201221625" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] win: mpic++ -showme reports duplicate .libs" -->
<!-- id="005801cb91a5$65e6ffa0$31b4fee0$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CF63172.1020400_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] win: mpic++ -showme reports duplicate .libs<br>
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 17:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14972.php">Hicham Mouline: "[OMPI users] win: cmake: release+debug"</a>
<li><strong>Previous message:</strong> <a href="14970.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>In reply to:</strong> <a href="14961.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Reply:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 01 December 2010 11:29
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Cc: Hicham Mouline
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] win: mpic++ -showme reports duplicate .libs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Hicham,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for noticing it. It's now been fixed on trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Shiqing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2010-12-1 10:02 AM, Hicham Mouline wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpic++ -showme:link
</span><br>
<span class="quotelev2">&gt; &gt; /TP /EHsc /link /LIBPATH:&quot;C:/Program Files (x86)/openmpi/lib&quot;
</span><br>
<span class="quotelev1">&gt; libmpi.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-pal.lib libopen-rte.lib libmpi_cxx.lib libmpi.lib libopen-
</span><br>
<span class="quotelev1">&gt; pal.lib
</span><br>
<span class="quotelev2">&gt; &gt; libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; reports using the 4 mpi libs twice.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've followed the cmake way in README.windows.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this intended or have I wronged somewhere?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; rds,
</span><br>
<p>That was fast. I'm glad these are sorted quickly.
<br>
This is used by FindMPI module in cmake which is hopefully being extended by
<br>
the maintainer after some emails, to work on windows as well.
<br>
<p>regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14972.php">Hicham Mouline: "[OMPI users] win: cmake: release+debug"</a>
<li><strong>Previous message:</strong> <a href="14970.php">Jeff Squyres: "Re: [OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<li><strong>In reply to:</strong> <a href="14961.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Reply:</strong> <a href="14975.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
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
