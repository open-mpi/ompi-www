<?
$subject_val = "Re: [OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 11:02:08 2014" -->
<!-- isoreceived="20140410150208" -->
<!-- sent="Thu, 10 Apr 2014 11:02:00 -0400" -->
<!-- isosent="20140410150200" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Extent of Distributed Array Type?" -->
<!-- id="CAN+evmnTaAHu+HJ-a55u+WsWJUkOJFSs+TF2tTwfPWxap2FDMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FCED38A3-FA1A-4140-9A59-494F93A713CE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Extent of Distributed Array Type?<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 11:02:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay. Thanks for having a look Ralph!
<br>
<p>For future reference, is there a better process I can go through if I find
<br>
bugs like this that makes sure they don't get forgotten?
<br>
<p>Thanks,
<br>
Richard
<br>
<p><p>On 10 April 2014 00:39, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Wow - that's an ancient one. I'll see if it can be applied to 1.8.1. These
</span><br>
<span class="quotelev1">&gt; things don't automatically go across - it requires that someone file a
</span><br>
<span class="quotelev1">&gt; request to move it - and I think this commit came into the trunk after we
</span><br>
<span class="quotelev1">&gt; branched for the 1.7 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 9, 2014, at 12:05 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I ever replied to this to say that the patch works perfectly
</span><br>
<span class="quotelev1">&gt; (very belatedly)!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I just wanted to ask what the progress of getting this into a
</span><br>
<span class="quotelev1">&gt; released version is? I'm not particularly sure on the details on the
</span><br>
<span class="quotelev1">&gt; OpenMPI development process - I've noticed that it's still in the SVN
</span><br>
<span class="quotelev1">&gt; trunk, but hasn't made it into any of the intervening releases (neither
</span><br>
<span class="quotelev1">&gt; stables 1.6.2-, 1.8; nor feature releases 1.7 onwards). Will this end up in
</span><br>
<span class="quotelev1">&gt; the 1.9 series?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 24 July 2012 19:02, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks George, I'm glad it wasn't just me being crazy. I'll try and test
</span><br>
<span class="quotelev2">&gt;&gt; that one soon.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Richard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tuesday, 24 July, 2012 at 6:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for identifying this issue and for the short example. I can
</span><br>
<span class="quotelev2">&gt;&gt; confirm your original understanding was right, the upper bound should be
</span><br>
<span class="quotelev2">&gt;&gt; identical on all ranks. I just pushed a patch (r26862), let me know if this
</span><br>
<span class="quotelev2">&gt;&gt; fixes your issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Previous message:</strong> <a href="24136.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24130.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
