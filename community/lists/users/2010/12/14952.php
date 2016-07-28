<?
$subject_val = "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 05:47:10 2010" -->
<!-- isoreceived="20101201104710" -->
<!-- sent="Wed, 01 Dec 2010 11:49:33 +0100" -->
<!-- isosent="20101201104933" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3" -->
<!-- id="4CF6283D.6030108_at_hlrs.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="002f01cb9121$aed8e770$0c8ab650$_at_org" -->
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
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 05:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14953.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14951.php">Hicham Mouline: "[OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>In reply to:</strong> <a href="14950.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Hicham,
<br>
<p><span class="quotelev1">&gt; I've had this issue with -np 3 : -np 3 but not with -np 2: -np 2 or 
</span><br>
<span class="quotelev1">&gt; -np 1: -np 4 or other combinations.
</span><br>
<span class="quotelev1">&gt; I've also rebuilt from vs2008 with the libs advapi32.lib Ws2_32.lib 
</span><br>
<span class="quotelev1">&gt; shlwapi.lib as visible in the text file: 
</span><br>
<span class="quotelev1">&gt; share\openmpi\mpic++.exe-wrapper-data.txt, and the problem seemed to 
</span><br>
<span class="quotelev1">&gt; stop happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so now it is working.
</span><br>
Great! But I don't see the cause of the problem. If it's missing the 
<br>
linking libraries, the compiler should already complain at linking time.
<br>
<p><span class="quotelev1">&gt; I assume I will be able to do this on several windows boxes? Do they 
</span><br>
<span class="quotelev1">&gt; need to be all 32bit or 64bit or can I mix?
</span><br>
Yes, you can mix 32 and 64 bit, but you have to take care of the 
<br>
executables on each machine. And for running on multiple windows boxes, 
<br>
please refer to the windows readme file. In order to simplify the WMI 
<br>
configuration process, you may also use the small tool I attached for 
<br>
configure users (change the file extension to .exe):
<br>
<p>Syntax: wmi-config &lt;add|del&gt; &lt;domain1\username1&gt; [&lt;domain2\username2&gt;] ...
<br>
<p>For example:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wmi-config add LOCAL_COMPUTER\user
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wmi-config add DOMAIN1\user1 DOMAIN2\user2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;wmi-config del DOMAIN1\user1
<br>
<p><p>Regards,
<br>
Shiqing
<br>
<p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart

</pre>
<p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="../../att-14952/wmi-config.ex_">wmi-config.ex_</a>
</ul>
<!-- attachment="wmi-config.ex_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14953.php">Shiqing Fan: "Re: [OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>Previous message:</strong> <a href="14951.php">Hicham Mouline: "[OMPI users] win: mpic++ -showme reports duplicate .libs"</a>
<li><strong>In reply to:</strong> <a href="14950.php">Hicham Mouline: "Re: [OMPI users] failure to launch MPMD program on win32 w 1.4.3"</a>
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
