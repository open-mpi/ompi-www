<?
$subject_val = "Re: [OMPI users] OpenSHMEM - Undesired Result !!";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 10:16:01 2016" -->
<!-- isoreceived="20160420141601" -->
<!-- sent="Wed, 20 Apr 2016 16:16:00 +0200" -->
<!-- isosent="20160420141600" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenSHMEM - Undesired Result !!" -->
<!-- id="CAMJJpkW7Pt+aD1KfGqcQgXCXQ30cy2BBCHgm83-Sp3E=qjZg=Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uqm1nc1o_664a_wqk_QRhjYwsE10KbsMqFuFX7Zk5AvA_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 10:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>In reply to:</strong> <a href="28980.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29035.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="29035.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan,
<br>
<p>What you witness in your execution is that your execution over 2 processes
<br>
drifted by 49 iterations. Because your example avoid any synchronization
<br>
call, your processes are not synchronized and therefore any output (in
<br>
increment of quatum) is correct. As Gilles suggested, enabling the
<br>
shmem_barrier before the printf will guarantee that all processes are at
<br>
the same spot, thus all remote (and local) AMO are completed, and therefore
<br>
the result will be the expected value.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Apr 20, 2016 at 1:33 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ryan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what if you uncomment the barrier before printf ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see a scenario in which printf is invoked on rank 0 before all
</span><br>
<span class="quotelev1">&gt; shmem_long_add have started/completed on rank 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, April 20, 2016, RYAN RAY &lt;ryan.ray_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While executing the code in the file *exp4.c* (Attached) we faced
</span><br>
<span class="quotelev2">&gt;&gt; undesired result. This code allows all PEs to *add a 'quantum' value to
</span><br>
<span class="quotelev2">&gt;&gt; a variable on a particular host*. But in some cases few of these *'quantum'
</span><br>
<span class="quotelev2">&gt;&gt; values are lost*. I have attached the file and a screenshot of the
</span><br>
<span class="quotelev2">&gt;&gt; output. In the screenshot the last execution is missing 49 quantums. I will
</span><br>
<span class="quotelev2">&gt;&gt; be obliged if you could explain to me why this is happenning.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Ryan Ray
</span><br>
<span class="quotelev2">&gt;&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with
</span><br>
<span class="quotelev2">&gt;&gt; Company email.
</span><br>
<span class="quotelev2">&gt;&gt; *Know More &gt;*
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host">http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host</a>&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28980.php">http://www.open-mpi.org/community/lists/users/2016/04/28980.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28982/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28981.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error for openmpi-dev-3868-g178c97b with Solaris"</a>
<li><strong>In reply to:</strong> <a href="28980.php">Gilles Gouaillardet: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29035.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>Reply:</strong> <a href="29035.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
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
