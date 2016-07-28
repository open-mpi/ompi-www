<?
$subject_val = "Re: [OMPI users] Extent of Distributed Array Type?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 00:40:00 2014" -->
<!-- isoreceived="20140410044000" -->
<!-- sent="Wed, 9 Apr 2014 21:39:11 -0700" -->
<!-- isosent="20140410043911" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Extent of Distributed Array Type?" -->
<!-- id="FCED38A3-FA1A-4140-9A59-494F93A713CE_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAN+evm=JsL9H3oWJwOr7Apeq0NW8WqbeMDmP8z66SJM+y1Yp7g_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 00:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>In reply to:</strong> <a href="24127.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - that's an ancient one. I'll see if it can be applied to 1.8.1. These things don't automatically go across - it requires that someone file a request to move it - and I think this commit came into the trunk after we branched for the 1.7 series.
<br>
<p><p>On Apr 9, 2014, at 12:05 PM, Richard Shaw &lt;jrs65_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm not sure I ever replied to this to say that the patch works perfectly (very belatedly)!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However I just wanted to ask what the progress of getting this into a released version is? I'm not particularly sure on the details on the OpenMPI development process - I've noticed that it's still in the SVN trunk, but hasn't made it into any of the intervening releases (neither stables 1.6.2-, 1.8; nor feature releases 1.7 onwards). Will this end up in the 1.9 series?
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
<span class="quotelev1">&gt; Thanks George, I'm glad it wasn't just me being crazy. I'll try and test that one soon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Richard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tuesday, 24 July, 2012 at 6:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Richard,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for identifying this issue and for the short example. I can confirm your original understanding was right, the upper bound should be identical on all ranks. I just pushed a patch (r26862), let me know if this fixes your issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     george.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24130/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24131.php">Victor Vysotskiy: "[OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24129.php">Filippo Spiga: "Re: [OMPI users] OpenMPI 1.8.0 + PGI 13.6 = undeclared variable __LDBL_MANT_DIG__"</a>
<li><strong>In reply to:</strong> <a href="24127.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
<li><strong>Reply:</strong> <a href="24137.php">Richard Shaw: "Re: [OMPI users] Extent of Distributed Array Type?"</a>
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
