<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 10:30:18 2010" -->
<!-- isoreceived="20100115153018" -->
<!-- sent="Fri, 15 Jan 2010 10:30:13 -0500" -->
<!-- isosent="20100115153013" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="1DD2C8C7-0499-47EF-BA87-D359E53BF52D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="68119efe1001150507n1e446bc2i83816ab709185591_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 10:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 15, 2010, at 8:07 AM, Andreea Costea wrote:
<br>
<p><span class="quotelev1">&gt; - I wanted to update to version 1.4.1 and I uninstalled previous version like this: make uninstall, and than manually deleted all the left over files. the directory where I installed was /usr/local
</span><br>
<p>I'll let Josh answer your CR questions, but I did want to ask about this point.  AFAIK, &quot;make uninstall&quot; removes *all* Open MPI files.  For example:
<br>
<p>-----
<br>
[7:25] $ cd /path/to/my/OMPI/tree
<br>
[7:25] $ make install &gt; /dev/null
<br>
[7:26] $ find /tmp/bogus/ -type f | wc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;646     646   28082
<br>
[7:26] $ make uninstall &gt; /dev/null
<br>
[7:27] $ find /tmp/bogus/ -type f | wc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0       0       0
<br>
[7:27] $ 
<br>
-----
<br>
<p>I realize that some *directories* are left in $prefix, but there should be no *files* left.  Are you seeing something different?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
