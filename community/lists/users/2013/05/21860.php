<?
$subject_val = "Re: [OMPI users] running openmpi with specified lib path";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  7 09:10:22 2013" -->
<!-- isoreceived="20130507131022" -->
<!-- sent="Tue, 7 May 2013 13:10:17 +0000" -->
<!-- isosent="20130507131017" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running openmpi with specified lib path" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F60A8D5_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5188E747.9090900_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running openmpi with specified lib path<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-07 09:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2013, at 7:36 AM, Duke Nguyen &lt;duke.lists_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So apparently openmpi 1.7.2 looks for the old library at
</span><br>
<span class="quotelev1">&gt; /usr/loca/lib/openmpi for 1.6.3 instead of at
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi.
</span><br>
<span class="quotelev1">&gt; Is there away to force openmpi 1.7.2 look at
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/openmpi-1.7.2r28341_composer_xe_2013.3.163/usr/local/lib/openmpi
</span><br>
<span class="quotelev1">&gt; first before looking at other locations?
</span><br>
<p><p>This is *usually* a problem of local settings.  Make sure you don't have both the 1.6 and 1.7 library directories listed in LD_LIBRARY_PATH, for example.
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
<li><strong>Next message:</strong> <a href="21861.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Previous message:</strong> <a href="21859.php">Reuti: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>In reply to:</strong> <a href="21858.php">Duke Nguyen: "[OMPI users] running openmpi with specified lib path"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
<li><strong>Reply:</strong> <a href="21864.php">Duke Nguyen: "Re: [OMPI users] running openmpi with specified lib path"</a>
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
