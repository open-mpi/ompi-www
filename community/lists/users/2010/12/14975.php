<?
$subject_val = "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  2 05:35:33 2010" -->
<!-- isoreceived="20101202103533" -->
<!-- sent="Thu, 02 Dec 2010 11:37:42 +0100" -->
<!-- isosent="20101202103742" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] win: mpic++ -showme reports duplicate .libs" -->
<!-- id="4CF776F6.6000303_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="005801cb91a5$65e6ffa0$31b4fee0$_at_org" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-02 05:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
<li><strong>In reply to:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hicham,
<br>
<p>I'm afraid that I was wrong per last email. The trunk doesn't have this 
<br>
problem, it's only for 1.4 branch. I'll make a ticket to fix it. Thanks 
<br>
a lot.
<br>
<p>Regards,
<br>
Shiqing
<br>
<p>On 2010-12-1 11:16 PM, Hicham Mouline wrote:
<br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Shiqing Fan [mailto:fan_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 01 December 2010 11:29
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Hicham Mouline
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] win: mpic++ -showme reports duplicate .libs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Hicham,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for noticing it. It's now been fixed on trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Shiqing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 2010-12-1 10:02 AM, Hicham Mouline wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpic++ -showme:link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /TP /EHsc /link /LIBPATH:&quot;C:/Program Files (x86)/openmpi/lib&quot;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-pal.lib libopen-rte.lib libmpi_cxx.lib libmpi.lib libopen-
</span><br>
<span class="quotelev2">&gt;&gt; pal.lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libopen-rte.lib advapi32.lib Ws2_32.lib shlwapi.lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reports using the 4 mpi libs twice.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've followed the cmake way in README.windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this intended or have I wronged somewhere?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rds,
</span><br>
<span class="quotelev1">&gt; That was fast. I'm glad these are sorted quickly.
</span><br>
<span class="quotelev1">&gt; This is used by FindMPI module in cmake which is hopefully being extended by
</span><br>
<span class="quotelev1">&gt; the maintainer after some emails, to work on windows as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; regards,
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14976.php">Benjamin Toueg: "[OMPI users] Scalability issue"</a>
<li><strong>Previous message:</strong> <a href="14974.php">Shiqing Fan: "Re: [OMPI users] win: cmake: release+debug"</a>
<li><strong>In reply to:</strong> <a href="14971.php">Hicham Mouline: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
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
