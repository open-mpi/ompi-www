<?
$subject_val = "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 20:55:04 2013" -->
<!-- isoreceived="20130530005504" -->
<!-- sent="Thu, 30 May 2013 00:54:57 +0000" -->
<!-- isosent="20130530005457" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0CA06658_at_HDXDSP53.us.lmco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F64A570_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 20:54:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You steered me right.  The PGI support representative said, regarding 13.4:
<br>
<p>This is a known issue where there's a compatibility issue with the &quot;stddef.h&quot; header file we ship and GCC 4.6/4.7. We were able to fix the problem in the 13.5 compilers (TPR#19320)&#160;
<br>
<p>If you can't download and install 13.5, please send a note to PGI Customer Service (trs_at_[hidden]) and they should be able to get you the updated file.&#160;
<br>
<p><p><p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Jeff Squyres (jsquyres) [jsquyres_at_[hidden]]
<br>
Sent: Wednesday, May 29, 2013 3:31 PM
<br>
To: Open MPI Users
<br>
Subject: EXTERNAL: Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4
<br>
<p>Edwin --
<br>
<p>Can you ask PGI support about this?  I swear that the PGI compiler suite has supported offsetof before.
<br>
<p><p>On May 29, 2013, at 5:26 PM, &quot;Blosch, Edwin L&quot; &lt;edwin.l.blosch_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m having trouble building OpenMPI 1.6.4 with PGI 13.4. Suggestions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; checking alignment of double... 8
</span><br>
<span class="quotelev1">&gt; checking alignment of long double... 8
</span><br>
<span class="quotelev1">&gt; checking alignment of float _Complex... 4
</span><br>
<span class="quotelev1">&gt; checking alignment of double _Complex... 8
</span><br>
<span class="quotelev1">&gt; checking alignment of long double _Complex... 8
</span><br>
<span class="quotelev1">&gt; checking alignment of void *... 8
</span><br>
<span class="quotelev1">&gt; checking for C bool type... no
</span><br>
<span class="quotelev1">&gt; checking size of _Bool... 1
</span><br>
<span class="quotelev1">&gt; checking for inline... inline
</span><br>
<span class="quotelev1">&gt; checking for C/C++ restrict keyword... __restrict
</span><br>
<span class="quotelev1">&gt; checking for weak symbol support... yes
</span><br>
<span class="quotelev1">&gt; checking for functional offsetof macro... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Your compiler does not support offsetof macro
</span><br>
<span class="quotelev1">&gt; configure: error: Configure: Cannot continue
</span><br>
<span class="quotelev1">&gt; + '[' 1 = 0 ']'
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
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21988.php">Siegmar Gross: "Re: [OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<li><strong>In reply to:</strong> <a href="21983.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21986.php">Thompson, Matt (GSFC-610.1)[SCIENCE SYSTEMS AND APPLICATIONS INC]: "Re: [OMPI users] Problem building OpenMPI 1.6.4 with PGI 13.4"</a>
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
