<?
$subject_val = "Re: [OMPI users] Fw: Open SHMEM Error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  4 00:46:21 2016" -->
<!-- isoreceived="20160304054621" -->
<!-- sent="Fri, 4 Mar 2016 14:46:21 +0900" -->
<!-- isosent="20160304054621" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fw: Open SHMEM Error" -->
<!-- id="56D9212D.90907_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1456988179.S.21347.24038.f4-235-148.1456989355.13066_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fw: Open SHMEM Error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-04 00:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28622.php">RYAN RAY: "[OMPI users] Fw: Open SHMEM Error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan,
<br>
<p>do you really get a segmentation fault ?
<br>
<p>here is the message i have :
<br>
<p>-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
oshrun detected that one or more processes exited with non-zero status, 
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[23403,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
<p>the root cause is the test program ends with
<br>
return 1;
<br>
instead of
<br>
return 0;
<br>
<p>/* and i cannot figure out a rationale for that, i just replaced this 
<br>
with return 0; and that was fine*/
<br>
<p>fwiw, this examples use the deprecated start_pes(0) instead of shmem_init();
<br>
and there is no shmem_finalize();
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/3/2016 4:15 PM, RYAN RAY wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: &quot;RYAN RAY&quot; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Thu, 03 Mar 2016 12:26:19 +0530
</span><br>
<span class="quotelev1">&gt; To: &quot;announce &quot; announce_at_[hidden], &quot;ryan.ray &quot; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Open SHMEM Error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On trying a code specified in the manual&quot;OpenSHMEM Specification Draft 
</span><br>
<span class="quotelev1">&gt; &quot;asection8.16 example code , we are facing a problem.
</span><br>
<span class="quotelev1">&gt; The code is the c version of the example code for the callSHMEM_PTR.
</span><br>
<span class="quotelev1">&gt; We have written the code exactly as it is in the manual , but we are 
</span><br>
<span class="quotelev1">&gt; getting a segmentation fault.
</span><br>
<span class="quotelev1">&gt; The code , manual and error snapshots are attached in this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will be grateful if you can provide any solution to this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RYAN SAPTARSHI RAY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with 
</span><br>
<span class="quotelev1">&gt; Company email.
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt;*Know 
</span><br>
<span class="quotelev1">&gt; More &gt;* 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host">http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host</a>&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with 
</span><br>
<span class="quotelev1">&gt; Company email.
</span><br>
<span class="quotelev1">&gt; 	*Know More &gt;* 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host">http://track.rediff.com/click?url=___http://businessemail.rediff.com?sc_cid=sign-1-10-13___&amp;cmp=host&amp;lnk=sign-1-10-13&amp;nsrv1=host</a>&gt; 
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28622.php">http://www.open-mpi.org/community/lists/users/2016/03/28622.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Previous message:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28622.php">RYAN RAY: "[OMPI users] Fw: Open SHMEM Error"</a>
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
