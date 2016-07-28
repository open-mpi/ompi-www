<?
$subject_val = "Re: [OMPI users] Infiniband errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 10:38:45 2012" -->
<!-- isoreceived="20121219153845" -->
<!-- sent="Wed, 19 Dec 2012 16:38:30 +0100" -->
<!-- isosent="20121219153830" -->
<!-- name="Yann Droneaud" -->
<!-- email="ydroneaud_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Infiniband errors" -->
<!-- id="1355931510.2397.27.camel_at_test.quest-ce.net" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMvdAsKC43YgB_OO5C+MLY68w8mAqxYxjmkpZXA3Zy=7bHYCoA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Infiniband errors<br>
<strong>From:</strong> Yann Droneaud (<em>ydroneaud_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 10:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="21011.php">Shamis, Pavel: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="21005.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Reply:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le mercredi 19 d&#195;&#169;cembre 2012 &#195;&#160; 12:12 +0500, Syed Ahsan Ali a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Dear John
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I found this output of ibstatus on some nodes (most probably the
</span><br>
<span class="quotelev1">&gt; problem causing)
</span><br>
<span class="quotelev1">&gt; [root_at_compute-01-08 ~]# ibstatus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fatal error:  device '*': sys files not found
</span><br>
<span class="quotelev1">&gt; (/sys/class/infiniband/*/ports)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does this show any hardware or software issue?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<p>This is a software issue.
<br>
<p>Which Linux (lsb_release --all or cat /etc/redhat-release) and kernel
<br>
(uname -a) version are you using ?
<br>
<p>Which modules are loaded (lsmod) ?
<br>
<p>Is /sys mounted (mount and/or cat /proc/mounts) ?
<br>
<p>Regards.
<br>
<p><pre>
-- 
Yann Droneaud
OPTEYA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21013.php">Handerson, Steven: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="21011.php">Shamis, Pavel: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>In reply to:</strong> <a href="21005.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
<li><strong>Reply:</strong> <a href="21027.php">Syed Ahsan Ali: "Re: [OMPI users] Infiniband errors"</a>
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
