<?
$subject_val = "Re: [OMPI users] flex.exe";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 22 08:08:19 2010" -->
<!-- isoreceived="20100122130819" -->
<!-- sent="Fri, 22 Jan 2010 14:07:15 +0100" -->
<!-- isosent="20100122130715" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flex.exe" -->
<!-- id="4B59A303.4070606_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="58D723FE08DC6A4398E6596E38F3FA170566BA_at_XMB-RCD-205.cisco.com" -->
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
<strong>Date:</strong> 2010-01-22 08:07:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>Previous message:</strong> <a href="11853.php">Andreas Sch&#228;fer: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11852.php">Jeff Squyres (jsquyres): "Re: [OMPI users] flex.exe"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that should work but only with newer version of flex, I didn't 
<br>
think about it before. But the windows flex.exe should still be 
<br>
available for svn checkout build.
<br>
<p><p>Thanks,
<br>
Shiqing
<br>
<p><p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What prevents us from generating the code during make dist time and 
</span><br>
<span class="quotelev1">&gt; therefore not shipping flex.exe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -jms
</span><br>
<span class="quotelev1">&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: Shiqing Fan &lt;fan_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Fri Jan 22 03:56:52 2010
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, that's not true, we did ship the flex-generated code a time ago, but
</span><br>
<span class="quotelev1">&gt; as that part of code changes sometimes, we decided to generate it during
</span><br>
<span class="quotelev1">&gt; compilation time, and the flex.exe came with the first support of
</span><br>
<span class="quotelev1">&gt; Windows (CMake).
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
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Don't we ship the flex-generated code in the tarball anyway?  If so, 
</span><br>
<span class="quotelev1">&gt; why do we ship flex.exe?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 21, 2010, at 12:14 PM, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have to agree with the two requests here. Having either a windows 
</span><br>
<span class="quotelev1">&gt; tarball or a windows build tools tarball doesn't seem too burdensom, 
</span><br>
<span class="quotelev1">&gt; and could even be done automatically at make dist time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: users-bounces_at_[hidden] &lt;users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Thu Jan 21 10:05:03 2010
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: Re: [OMPI users] flex.exe
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am Donnerstag, den 21.01.2010, 11:52 -0500 schrieb Michael Di Domenico:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; openmpi-1.4.1/contrib/platform/win32/bin/flex.exe
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I understand this file might be required for building on windows,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; since I'm not I can just delete the file without issue.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; However, for those of us under import restrictions, where binaries are
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; not allowed in, this file causes me to open the tarball and delete the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; file (not a big deal, i know, i know).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; But, can I put up a vote for a pure source only tree?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;      
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm very much in favor of that since we can't ship this binary in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Debian. We'd have to delete it from the tarball and repack it with 
</span><br>
<span class="quotelev1">&gt; every
</span><br>
<span class="quotelev3">&gt; &gt;&gt; release which is quite cumbersome. If these tools could be shipped in a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; separate tarball that would be great!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Best regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Manuel
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
</span><br>
<span class="quotelev1">&gt; High Performance Computing           Tel.: +49 711 685 87234
</span><br>
<span class="quotelev1">&gt;   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
</span><br>
<span class="quotelev1">&gt; Address:Allmandring 30               email: fan_at_[hidden]   
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
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
<li><strong>Next message:</strong> <a href="11855.php">Ashley Pittman: "Re: [OMPI users] 1.4 OpenMPI build not working well with TotalView on Darwin"</a>
<li><strong>Previous message:</strong> <a href="11853.php">Andreas Sch&#228;fer: "Re: [OMPI users] flex.exe"</a>
<li><strong>In reply to:</strong> <a href="11852.php">Jeff Squyres (jsquyres): "Re: [OMPI users] flex.exe"</a>
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
