<?
$subject_val = "Re: [OMPI users] Open SHMEM Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 15 06:14:38 2016" -->
<!-- isoreceived="20160315101438" -->
<!-- sent="Tue, 15 Mar 2016 19:14:36 +0900" -->
<!-- isosent="20160315101436" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open SHMEM Error" -->
<!-- id="CAAkFZ5tYxeyKbfrkPMoWCMqRrS1jL+MrioG7k9gAom4mZP1McA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1457070398.S.16915.21610.f4-234-246.1458033867.24892_at_webmail.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open SHMEM Error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-15 06:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28704.php">Husen R: "[OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ryan,
<br>
<p>can you please post your source code and hostfile ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, March 15, 2016, RYAN RAY &lt;ryan.ray_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the reply. After executing the code as you told I get the
</span><br>
<span class="quotelev1">&gt; output as shown in the attached snapshot.
</span><br>
<span class="quotelev1">&gt; So I am understanding that the code cannot remotely access the array at
</span><br>
<span class="quotelev1">&gt; PE1 from PE0. Can you please explain why this is happenning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Ryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Fri, 04 Mar 2016 11:16:38
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open SHMEM Error
</span><br>
<span class="quotelev1">&gt; Ryan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you really get a segmentation fault ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the message i have :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; oshrun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process name: [[23403,1],0]
</span><br>
<span class="quotelev1">&gt;   Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the root cause is the test program ends with
</span><br>
<span class="quotelev1">&gt; return 1;
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* and i cannot figure out a rationale for that, i just replaced this with
</span><br>
<span class="quotelev1">&gt; return 0; and that was fine*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fwiw, this examples use the deprecated start_pes(0) instead of
</span><br>
<span class="quotelev1">&gt; shmem_init();
</span><br>
<span class="quotelev1">&gt; and there is no shmem_finalize();
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
<span class="quotelev1">&gt; On 3/3/2016 4:15 PM, RYAN RAY wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1456988179.S.21347.24038.f4-235-148.1456989355.13066_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','1456988179.S.21347.24038.f4-235-148.1456989355.13066_at_[hidden]');&gt;&quot;
</span><br>
<span class="quotelev1">&gt; type=&quot;cite&quot;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: &quot;RYAN RAY&quot; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','ryan.ray_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thu, 03 Mar 2016 12:26:19 +0530
</span><br>
<span class="quotelev1">&gt; To: &quot;announce &quot; announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','announce_at_[hidden]');&gt;, &quot;ryan.ray &quot;
</span><br>
<span class="quotelev1">&gt; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','ryan.ray_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Open SHMEM Error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On trying a code specified in the manual&quot;OpenSHMEM Specification Draft &quot;a
</span><br>
<span class="quotelev1">&gt; section8.16 example code , we are facing a problem.
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
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=https%3A%2F%2Fsigads%2Erediff%2Ecom%2FRealMedia%2Fads%2Fclick%5Fnx%2Eads%2Fwww%2Erediffmail%2Ecom%2Fsignatureline%2Ehtm%40Middle%3F&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=86405da3ed8eb9005549e1536a8c08bb6cef0c3e&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Know More &gt;*
</span><br>
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=http%3A%2F%2Ftrack%2Erediff%2Ecom%2Fclick%3Furl%3D%5F%5F%5Fhttp%3A%2F%2Fbusinessemail%2Erediff%2Ecom%3Fsc%5Fcid%3Dsign%2D1%2D10%2D13%5F%5F%5F%26amp%3Bcmp%3Dhost%26amp%3Blnk%3Dsign%2D1%2D10%2D13%26amp%3Bnsrv1%3Dhost&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=387537254f7eee557c3b17544bd037e8098bd82e&gt;
</span><br>
<span class="quotelev1">&gt; Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app with
</span><br>
<span class="quotelev1">&gt; Company email.
</span><br>
<span class="quotelev1">&gt; *Know More &gt;*
</span><br>
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=http%3A%2F%2Ftrack%2Erediff%2Ecom%2Fclick%3Furl%3D%5F%5F%5Fhttp%3A%2F%2Fbusinessemail%2Erediff%2Ecom%3Fsc%5Fcid%3Dsign%2D1%2D10%2D13%5F%5F%5F%26amp%3Bcmp%3Dhost%26amp%3Blnk%3Dsign%2D1%2D10%2D13%26amp%3Bnsrv1%3Dhost&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=387537254f7eee557c3b17544bd037e8098bd82e&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription:  &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28622.php">http://www.open-mpi.org/community/lists/users/2016/03/28622.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28635.php">http://www.open-mpi.org/community/lists/users/2016/03/28635.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle">https://sigads.rediff.com/RealMedia/ads/click_nx.ads/www.rediffmail.com/signatureline.htm&#64;Middle</a>?&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28703/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28704.php">Husen R: "[OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28702.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
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
