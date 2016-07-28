<?
$subject_val = "Re: [OMPI users] Question on virtual memory allocated";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 15:53:34 2010" -->
<!-- isoreceived="20100515195334" -->
<!-- sent="Sat, 15 May 2010 21:53:29 +0200" -->
<!-- isosent="20100515195329" -->
<!-- name="Olivier Riff" -->
<!-- email="oliriff_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on virtual memory allocated" -->
<!-- id="AANLkTikXPRCSfRAQxbgB-WsZtejWUI3wOqmwDaPnCYh0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D1DE5D2-5B09-47D1-B5B9-2DE5EED24BEF_at_cisco.com" -->
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
<strong>From:</strong> Olivier Riff (<em>oliriff_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 15:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13055.php">awwase: "[OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff for your explaination. It is much clearer now.
<br>
<p>Best regards.
<br>
<p>Olivier
<br>
<p>2010/5/15 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On May 12, 2010, at 8:19 AM, Olivier Riff wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; What I do not understand is where the value of 2104m for the virtual
</span><br>
<span class="quotelev1">&gt; memory comes from.
</span><br>
<span class="quotelev2">&gt; &gt; When I add the value of Mem used (777848k) to the value of the cache
</span><br>
<span class="quotelev1">&gt; (339184k) : the amount is by far inferior to the Virtual memory (2104m).
</span><br>
<span class="quotelev2">&gt; &gt; Are here part of the memory allocated by the clients taken into account ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, top only shows the data from one machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where are physically allocated these 2104m of data ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They may be in physical memory and may also be swapped out on disk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that the virtual memory encompasses *all* memory for an
</span><br>
<span class="quotelev1">&gt; application -- its code and its data.  Hence, this also includes shared
</span><br>
<span class="quotelev1">&gt; libraries (which may be shared amongst several processes on the same
</span><br>
<span class="quotelev1">&gt; machine), process-specific instructions, process-specific data, and shared
</span><br>
<span class="quotelev1">&gt; process data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13055.php">awwase: "[OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13053.php">Ralph Castain: "Re: [OMPI users] getc in openmpi"</a>
<li><strong>In reply to:</strong> <a href="13047.php">Jeff Squyres: "Re: [OMPI users] Question on virtual memory allocated"</a>
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
