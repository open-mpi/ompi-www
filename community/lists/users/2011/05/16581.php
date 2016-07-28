<?
$subject_val = "Re: [OMPI users] Error: Entry Point Not Found";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:26:49 2011" -->
<!-- isoreceived="20110520012649" -->
<!-- sent="Thu, 19 May 2011 21:26:43 -0400" -->
<!-- isosent="20110520012643" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: Entry Point Not Found" -->
<!-- id="F830EC35-FC9B-4801-B2A3-50F54D2152A4_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="644498.38669.qm_at_web111805.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: Entry Point Not Found<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2011, at 10:54 AM, Zhangping Wei wrote:
<br>
<p><span class="quotelev1">&gt; 4, I use command window to run it in this way: &#145;mpirun &#150;n 4  **.exe &#145;,then I met the error: &#145;entry point not found: the procedure entry point inet_pton could not be located in the dynamic link library WS2_32.dll&#146;
</span><br>
<p>Unfortunately our Windows developer/maintainer is out for a little while (he's getting married); he pretty much did the Windows stuff by himself, so none of the rest of us know much about it.  :(
<br>
<p>inet_pton is a standard function call relating to IP addresses that we use in the internals of OMPI; I'm not sure why it wouldn't be found on Windows XP (Shiqing did cite that the OMPI Windows port should work on Windows XP).  
<br>
<p>This post seems to imply that inet_ntop is only available on Vista and above:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://social.msdn.microsoft.com/Forums/en-US/vcgeneral/thread/e40465f2-41b7-4243-ad33-15ae9366f4e6/">http://social.msdn.microsoft.com/Forums/en-US/vcgeneral/thread/e40465f2-41b7-4243-ad33-15ae9366f4e6/</a>
<br>
<p>So perhaps Shiqing needs to put in some kind of portability workaround for OMPI, and the current binaries won't actually work for XP...?
<br>
<p>I can't say that for sure because I really know very little about Windows; we'll unfortunately have to wait until he returns to get a definitive answer.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16582.php">Jeff Squyres: "Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer XE 2011 (aka 12.0)"</a>
<li><strong>Previous message:</strong> <a href="16580.php">Jeff Squyres: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
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
