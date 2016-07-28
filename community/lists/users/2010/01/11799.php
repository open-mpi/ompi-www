<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 10:47:42 2010" -->
<!-- isoreceived="20100115154742" -->
<!-- sent="Fri, 15 Jan 2010 23:47:37 +0800" -->
<!-- isosent="20100115154737" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001150747p23fac3e0j11fa8eb1db43262b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1DD2C8C7-0499-47EF-BA87-D359E53BF52D_at_cisco.com" -->
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
<strong>From:</strong> Andreea Costea (<em>andre.costea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 10:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's almost midnight here, so I left home, but I will try it tomorrow.
<br>
There were some directories left after &quot;make uninstall&quot;. I will give more
<br>
details tomorrow.
<br>
<p>Thanks Jeff,
<br>
Andreea
<br>
<p>On Fri, Jan 15, 2010 at 11:30 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 15, 2010, at 8:07 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; - I wanted to update to version 1.4.1 and I uninstalled previous version
</span><br>
<span class="quotelev1">&gt; like this: make uninstall, and than manually deleted all the left over
</span><br>
<span class="quotelev1">&gt; files. the directory where I installed was /usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll let Josh answer your CR questions, but I did want to ask about this
</span><br>
<span class="quotelev1">&gt; point.  AFAIK, &quot;make uninstall&quot; removes *all* Open MPI files.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [7:25] $ cd /path/to/my/OMPI/tree
</span><br>
<span class="quotelev1">&gt; [7:25] $ make install &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; [7:26] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev1">&gt;    646     646   28082
</span><br>
<span class="quotelev1">&gt; [7:26] $ make uninstall &gt; /dev/null
</span><br>
<span class="quotelev1">&gt; [7:27] $ find /tmp/bogus/ -type f | wc
</span><br>
<span class="quotelev1">&gt;      0       0       0
</span><br>
<span class="quotelev1">&gt; [7:27] $
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I realize that some *directories* are left in $prefix, but there should be
</span><br>
<span class="quotelev1">&gt; no *files* left.  Are you seeing something different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11799/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11800.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
