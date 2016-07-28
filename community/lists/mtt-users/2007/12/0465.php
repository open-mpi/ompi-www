<?
$subject_val = "[MTT users] SVN URLs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 06:34:32 2007" -->
<!-- isoreceived="20071220113432" -->
<!-- sent="Thu, 20 Dec 2007 06:34:27 -0500" -->
<!-- isosent="20071220113427" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] SVN URLs" -->
<!-- id="E48BAAD1-533E-4087-994C-F0019ECDD90B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [MTT users] SVN URLs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-20 06:34:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Ethan Mallove: "Re: [MTT users] MTT database access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: per my post to the OMPI devel list, I discovered the &quot;svnsync&quot;  
<br>
command yesterday.  svnsync allows you to mirror an entire SVN  
<br>
repository in a read-only fashion; I mirrored the ompi-tests  
<br>
repository locally at Cisco.  A one-line cron job keeps my ompi-tests  
<br>
SVN repo mirror up to date every night.
<br>
<p>Having a local mirror of ompi-tests allowed me to change my MTT INI  
<br>
file to have file:// SVN urls (vs. https:// URLs).  Not only did this  
<br>
make the ompi-tests checkouts [much] faster, I also was able to stop  
<br>
using the MTT lock daemon (*).  Hence, my SVN checkouts are no longer  
<br>
serialized -- which had been causing significant delays when the &quot;test  
<br>
get&quot; phases of many MTT jobs were running at more-or-less the same time.
<br>
<p>(*) I had to use the lock MTT daemon because the Cisco engineering lab  
<br>
network is sanboxed; I have to use one of several proxies to be able  
<br>
to download from the greater internet.  The MTT lock server protected  
<br>
resetting the proxy server entry in the $HOME/.subversion/servers  
<br>
file.  The process is:
<br>
<p>- get the MTT lock on that file
<br>
- change the proxy entry in that file
<br>
- do the SVN checkout (loop to try all proxies in the presence of  
<br>
failure)
<br>
- reset the proxy entry back to its original value
<br>
- release the MTT lock on that file
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Previous message:</strong> <a href="0464.php">Ethan Mallove: "Re: [MTT users] MTT database access"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
<li><strong>Reply:</strong> <a href="0466.php">Ethan Mallove: "Re: [MTT users] SVN URLs"</a>
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
