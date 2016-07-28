<?
$subject_val = "Re: [OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 12:04:21 2014" -->
<!-- isoreceived="20140410160421" -->
<!-- sent="Thu, 10 Apr 2014 12:04:17 -0400" -->
<!-- isosent="20140410160417" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Extent of Distributed Array Type?" -->
<!-- id="CAN+evmnfh16GZh9RzWsyB2HO4TY8khvS-arUuM+F63p+SBxV0g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71CC2462-B6D7-4B7D-A02A-47E9E23D549D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-04-10 12:04:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph! In future, I'll try and remember to follow up on these things
<br>
:)
<br>
<p>Cheers,
<br>
Richard
<br>
<p><p>On 10 April 2014 11:16, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not really - it's the responsibility of the developer to file the CMR.
</span><br>
<span class="quotelev1">&gt; Some folks are good about it, and some aren't. In this case, however, I
</span><br>
<span class="quotelev1">&gt; suspect it didn't happen because we didn't hear back that the patch fixed
</span><br>
<span class="quotelev1">&gt; the problem and was therefore correct  :-/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 10, 2014, at 8:02 AM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay. Thanks for having a look Ralph!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For future reference, is there a better process I can go through if I find
</span><br>
<span class="quotelev1">&gt; bugs like this that makes sure they don't get forgotten?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10 April 2014 00:39, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Wow - that's an ancient one. I'll see if it can be applied to 1.8.1.
</span><br>
<span class="quotelev2">&gt;&gt; These things don't automatically go across - it requires that someone file
</span><br>
<span class="quotelev2">&gt;&gt; a request to move it - and I think this commit came into the trunk after we
</span><br>
<span class="quotelev2">&gt;&gt; branched for the 1.7 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 9, 2014, at 12:05 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I ever replied to this to say that the patch works perfectly
</span><br>
<span class="quotelev2">&gt;&gt; (very belatedly)!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However I just wanted to ask what the progress of getting this into a
</span><br>
<span class="quotelev2">&gt;&gt; released version is? I'm not particularly sure on the details on the
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI development process - I've noticed that it's still in the SVN
</span><br>
<span class="quotelev2">&gt;&gt; trunk, but hasn't made it into any of the intervening releases (neither
</span><br>
<span class="quotelev2">&gt;&gt; stables 1.6.2-, 1.8; nor feature releases 1.7 onwards). Will this end up in
</span><br>
<span class="quotelev2">&gt;&gt; the 1.9 series?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 24 July 2012 19:02, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Thanks George, I'm glad it wasn't just me being crazy. I'll try and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; test that one soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Richard
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tuesday, 24 July, 2012 at 6:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Richard,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for identifying this issue and for the short example. I can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confirm your original understanding was right, the upper bound should be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; identical on all ranks. I just pushed a patch (r26862), let me know if this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fixes your issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24140/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24141.php">Victor Vysotskiy: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24139.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>In reply to:</strong> <a href="24138.php">Ralph Castain: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
