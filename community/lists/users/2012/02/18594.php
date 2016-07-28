<?
$subject_val = "Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 29 07:04:29 2012" -->
<!-- isoreceived="20120229120429" -->
<!-- sent="Wed, 29 Feb 2012 06:38:46 -0500" -->
<!-- isosent="20120229113846" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB" -->
<!-- id="92BC6D99-B11A-4CE9-AA96-C3A34E70C636_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1330511994.6291.YahooMailNeo_at_web161702.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-29 06:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Previous message:</strong> <a href="18593.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18591.php">adrian sabou: "[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 29, 2012, at 5:39 AM, adrian sabou wrote:
<br>
<p><span class="quotelev1">&gt; I am experiencing a rather unpleasant issue with a simple OpenMPI app. I have 4 nodes communicating with a central node. Performance is good and the application behaves as it should. (i.e. performance steadily decreases as I increase the work size). My problem is that immediately after messages passed between nodes become larger that 128 KB performance drops suddenly in an unexpected way. I have done some research and tried to modify various eager limits, without any success. I am a beginner in OpenMPI and I can't seem to figure out this issue. I am hopping that one of you might shed some light on this situation. My OpenMPI version is 1.5.4 on Ubuntu Server 10.04 64 bit. Any help is welcome. Thanks.
</span><br>
<p>Lots of things can be a factor here (I assume you're using TCP over Ethernet?):
<br>
<p>- are you using a network switch or hub?
<br>
- what kind of switch/hub is it? (switch quality can have a *lot* to do with network performance, and I don't say that just because of my employer :-) )
<br>
- is this a point-to-point pattern, or are multiple nodes communicating simultaneously?  (I'm asking about network contention)
<br>
- how many procs are you running on each node?  Are they all communicating simultaneously from each node?
<br>
- is the performance degradation only when communicating over TCP?  Or does it happen when communicating over shared memory?  Or both?
<br>
<p>I think you probably want to test what happens with a simple point-to-point benchmark between two peers on different nodes, and observe the performance there.  If you have a problem on your network or setup, you'll see it there.  Then expand your testing to include multiple procs simultaneously (e.g., running the same 2-proc point-to-point benchmark multiple times simultaneously) and see what happens.
<br>
<p>If all that looks good, then start looking hard at your application communication pattern.  When you hit 128 KB message size, are you exhausting cache sizes, or creating some other kind of algorithmic congestion?  Look for things like this.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18595.php">Jeffrey Squyres: "Re: [OMPI users] IMB-OpenMPI on Centos 6"</a>
<li><strong>Previous message:</strong> <a href="18593.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<li><strong>In reply to:</strong> <a href="18591.php">adrian sabou: "[OMPI users] Drastic OpenMPI performance reduction when message exeeds 128 KB"</a>
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
