<?
$subject_val = "Re: [OMPI users] How can I discover valid values for MCA parameters?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 12:13:18 2015" -->
<!-- isoreceived="20150529161318" -->
<!-- sent="Fri, 29 May 2015 10:13:16 -0600" -->
<!-- isosent="20150529161316" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How can I discover valid values for MCA parameters?" -->
<!-- id="20150529161316.GB93226_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25AE6277FDC12F408393C11ACE6C400F0CCD20A1_at_HDXDSP53.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How can I discover valid values for MCA parameters?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 12:13:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At the moment we only provide the list of possible values for emumerated
<br>
integers. If an integer is enumerated you will see something like this
<br>
in the ompi_info -a output:
<br>
<p>Valid values: 0:&quot;static&quot;, 1:&quot;sequential&quot;, 2:&quot;unknown-root&quot;
<br>
<p>I am hoping to expand this support to more variables in the future.
<br>
<p>BTW, verbosities generally range from 0 (none) to 100 (all). If I can
<br>
get agreement on standard values I may make an enumerator for those
<br>
parameters.
<br>
<p>-Nathan
<br>
<p>On Fri, May 29, 2015 at 04:05:57PM +0000, Blosch, Edwin L wrote:
<br>
<span class="quotelev1">&gt;    Sometimes I want to use one of the option flags, for example today it is
</span><br>
<span class="quotelev1">&gt;    mtl_mxm_verbose.  How do I discover the valid possible values of various
</span><br>
<span class="quotelev1">&gt;    MCA parameters?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I've tried ompi_info --all but it does not show the possible values, only
</span><br>
<span class="quotelev1">&gt;    the current value
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I've tried ompi_info --param &lt;framework&gt; all      but no matter what
</span><br>
<span class="quotelev1">&gt;    string I give for framework, I get no output at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26983.php">http://www.open-mpi.org/community/lists/users/2015/05/26983.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26984/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>Previous message:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<li><strong>In reply to:</strong> <a href="26983.php">Blosch, Edwin L: "[OMPI users] How can I discover valid values for MCA parameters?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26985.php">Blosch, Edwin L: "Re: [OMPI users] How can I discover valid values for MCA parameters?"</a>
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
