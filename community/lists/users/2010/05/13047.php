<?
$subject_val = "Re: [OMPI users] Question on virtual memory allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 07:38:46 2010" -->
<!-- isoreceived="20100515113846" -->
<!-- sent="Sat, 15 May 2010 07:38:41 -0400" -->
<!-- isosent="20100515113841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on virtual memory allocated" -->
<!-- id="6D1DE5D2-5B09-47D1-B5B9-2DE5EED24BEF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinL9BJ1oSAvJXxTuBiQhucnFoiRdwDQPNLErYuW_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on virtual memory allocated<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 07:38:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>In reply to:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Reply:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2010, at 8:19 AM, Olivier Riff wrote:
<br>
<p><span class="quotelev1">&gt; What I do not understand is where the value of 2104m for the virtual memory comes from.
</span><br>
<span class="quotelev1">&gt; When I add the value of Mem used (777848k) to the value of the cache (339184k) : the amount is by far inferior to the Virtual memory (2104m).
</span><br>
<span class="quotelev1">&gt; Are here part of the memory allocated by the clients taken into account ?
</span><br>
<p>No, top only shows the data from one machine.
<br>
<p><span class="quotelev1">&gt; Where are physically allocated these 2104m of data ?
</span><br>
<p>They may be in physical memory and may also be swapped out on disk.
<br>
<p>Keep in mind that the virtual memory encompasses *all* memory for an application -- its code and its data.  Hence, this also includes shared libraries (which may be shared amongst several processes on the same machine), process-specific instructions, process-specific data, and shared process data.
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
<li><strong>Next message:</strong> <a href="13048.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.4.2 released"</a>
<li><strong>Previous message:</strong> <a href="13046.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-restart fails with &quot;found pid in use&quot;"</a>
<li><strong>In reply to:</strong> <a href="13027.php">Olivier Riff: "[OMPI users] Question on virtual memory allocated"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
<li><strong>Reply:</strong> <a href="13054.php">Olivier Riff: "Re: [OMPI users] Question on virtual memory allocated"</a>
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
