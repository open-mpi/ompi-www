<?
$subject_val = "Re: [OMPI users] flex.exe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 03:57:54 2010" -->
<!-- isoreceived="20100122085754" -->
<!-- sent="Fri, 22 Jan 2010 09:56:52 +0100" -->
<!-- isosent="20100122085652" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flex.exe" -->
<!-- id="4B596854.9040308_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8F86C896-FF33-4EFB-8EEC-23B1B0367A88_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] flex.exe<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-22 03:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>No, that's not true, we did ship the flex-generated code a time ago, but 
<br>
as that part of code changes sometimes, we decided to generate it during 
<br>
compilation time, and the flex.exe came with the first support of 
<br>
Windows (CMake).
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Don't we ship the flex-generated code in the tarball anyway?  If so, why do we ship flex.exe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2010, at 12:14 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have to agree with the two requests here. Having either a windows tarball or a windows build tools tarball doesn't seem too burdensom, and could even be done automatically at make dist time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thu Jan 21 10:05:03 2010
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am Donnerstag, den 21.01.2010, 11:52 -0500 schrieb Michael Di Domenico:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.4.1/contrib/platform/win32/bin/flex.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand this file might be required for building on windows,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since I'm not I can just delete the file without issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, for those of us under import restrictions, where binaries are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not allowed in, this file causes me to open the tarball and delete the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file (not a big deal, i know, i know).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But, can I put up a vote for a pure source only tree?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; I'm very much in favor of that since we can't ship this binary in
</span><br>
<span class="quotelev2">&gt;&gt; Debian. We'd have to delete it from the tarball and repack it with every
</span><br>
<span class="quotelev2">&gt;&gt; release which is quite cumbersome. If these tools could be shipped in a
</span><br>
<span class="quotelev2">&gt;&gt; separate tarball that would be great!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt; Manuel
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
<li><strong>Previous message:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11848.php">Jeff Squyres: "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
<li><strong>Reply:</strong> <a href="11850.php">Ralph Castain: "Re: [OMPI users] flex.exe"</a>
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
