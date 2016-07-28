<?
$subject_val = "Re: [OMPI users] OpenSHMEM - Undesired Result !!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 07:33:08 2016" -->
<!-- isoreceived="20160420113308" -->
<!-- sent="Wed, 20 Apr 2016 20:33:07 +0900" -->
<!-- isosent="20160420113307" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenSHMEM - Undesired Result !!" -->
<!-- id="CAAkFZ5uqm1nc1o_664a_wqk_QRhjYwsE10KbsMqFuFX7Zk5AvA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1461150318.S.10.autosave.drafts.1461150636.2214_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenSHMEM - Undesired Result !!<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 07:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>Previous message:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan,
<br>
<p>what if you uncomment the barrier before printf ?
<br>
<p>I can see a scenario in which printf is invoked on rank 0 before all
<br>
shmem_long_add have started/completed on rank 1
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, April 20, 2016, RYAN RAY &lt;ryan.ray_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While executing the code in the file *exp4.c* (Attached) we faced
</span><br>
<span class="quotelev1">&gt; undesired result. This code allows all PEs to *add a 'quantum' value to a
</span><br>
<span class="quotelev1">&gt; variable on a particular host*. But in some cases few of these *'quantum'
</span><br>
<span class="quotelev1">&gt; values are lost*. I have attached the file and a screenshot of the
</span><br>
<span class="quotelev1">&gt; output. In the screenshot the last execution is missing 49 quantums. I will
</span><br>
<span class="quotelev1">&gt; be obliged if you could explain to me why this is happenning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ryan Ray
</span><br>
<span class="quotelev1">&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with
</span><br>
<span class="quotelev1">&gt; Company email.
</span><br>
<span class="quotelev1">&gt; *Know More &gt;*
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host">http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>Previous message:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28979.php">RYAN RAY: "[OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
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
