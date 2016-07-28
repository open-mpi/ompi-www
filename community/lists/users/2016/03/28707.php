<?
$subject_val = "Re: [OMPI users] Open SHMEM Error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 16 02:09:39 2016" -->
<!-- isoreceived="20160316060939" -->
<!-- sent="Wed, 16 Mar 2016 15:09:33 +0900" -->
<!-- isosent="20160316060933" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open SHMEM Error" -->
<!-- id="56E8F89D.7060202_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1458036888.S.22505.20857.f4-234-163.1458107980.9845_at_webmail.rediffmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-16 02:09:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28708.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Reply:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ray,
<br>
<p>from shmem_ptr man page :
<br>
<p>RETURN VALUES
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shmem_ptr returns a pointer to the data object on the specified 
<br>
remote PE. If target is not remotely accessible, a NULL pointer is returned.
<br>
<p>since you are running your application on two hosts and one task per 
<br>
host, the target is not remotely accessible, and hence the NULL pointer.
<br>
if you run two tasks on the same node, then the test should be fine.
<br>
<p>note openshmem does not provide a virtual shared memory system.
<br>
if you want to run across nodes, then you need to shmem_{get,put}
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/16/2016 2:59 PM, RYAN RAY wrote:
<br>
<span class="quotelev1">&gt; Dear Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the source code and the hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tue, 15 Mar 2016 15:44:48
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open SHMEM Error
</span><br>
<span class="quotelev1">&gt; Ryan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you please post your source code and hostfile ?
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
<span class="quotelev1">&gt; On Tuesday, March 15, 2016, RYAN RAY &lt;ryan.ray_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Gilles,
</span><br>
<span class="quotelev1">&gt;     Thanks for the reply. After executing the code as you told I get
</span><br>
<span class="quotelev1">&gt;     the output as shown in the attached snapshot.
</span><br>
<span class="quotelev1">&gt;     So I am understanding that the code cannot remotely access the
</span><br>
<span class="quotelev1">&gt;     array at PE1 from PE0. Can you please explain why this is happenning?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Regards,
</span><br>
<span class="quotelev1">&gt;     Ryan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     From: Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Sent: Fri, 04 Mar 2016 11:16:38
</span><br>
<span class="quotelev1">&gt;     To: Open MPI Users &lt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     Subject: Re: [OMPI users] Open SHMEM Error
</span><br>
<span class="quotelev1">&gt;     Ryan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     do you really get a segmentation fault ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     here is the message i have :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt;     a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;     -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     oshrun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev1">&gt;     status, thus causing
</span><br>
<span class="quotelev1">&gt;     the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Process name: [[23403,1],0]
</span><br>
<span class="quotelev1">&gt;       Exit code:    1
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the root cause is the test program ends with
</span><br>
<span class="quotelev1">&gt;     return 1;
</span><br>
<span class="quotelev1">&gt;     instead of
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* and i cannot figure out a rationale for that, i just replaced
</span><br>
<span class="quotelev1">&gt;     this with return 0; and that was fine*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fwiw, this examples use the deprecated start_pes(0) instead of
</span><br>
<span class="quotelev1">&gt;     shmem_init();
</span><br>
<span class="quotelev1">&gt;     and there is no shmem_finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/3/2016 4:15 PM, RYAN RAY wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         1456988179.S.21347.24038.f4-235-148.1456989355.13066_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;javascript:_e(%7B%7D,'cvml','1456988179.S.21347.24038.f4-235-148.1456989355.13066_at_[hidden]');&gt;&quot;
</span><br>
<span class="quotelev1">&gt;         type=&quot;cite&quot;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         From: &quot;RYAN RAY&quot; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;javascript:_e(%7B%7D,'cvml','ryan.ray_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;         Sent: Thu, 03 Mar 2016 12:26:19 +0530
</span><br>
<span class="quotelev1">&gt;         To: &quot;announce &quot; announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;javascript:_e(%7B%7D,'cvml','announce_at_[hidden]');&gt;,
</span><br>
<span class="quotelev1">&gt;         &quot;ryan.ray &quot; ryan.ray_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;javascript:_e(%7B%7D,'cvml','ryan.ray_at_[hidden]');&gt;
</span><br>
<span class="quotelev1">&gt;         Subject: Open SHMEM Error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On trying a code specified in the manual&quot;OpenSHMEM
</span><br>
<span class="quotelev1">&gt;         Specification Draft &quot;asection8.16 example code , we are facing
</span><br>
<span class="quotelev1">&gt;         a problem.
</span><br>
<span class="quotelev1">&gt;         The code is the c version of the example code for the
</span><br>
<span class="quotelev1">&gt;         callSHMEM_PTR.
</span><br>
<span class="quotelev1">&gt;         We have written the code exactly as it is in the manual , but
</span><br>
<span class="quotelev1">&gt;         we are getting a segmentation fault.
</span><br>
<span class="quotelev1">&gt;         The code , manual and error snapshots are attached in this mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I will be grateful if you can provide any solution to this
</span><br>
<span class="quotelev1">&gt;         problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         RYAN SAPTARSHI RAY
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *FREE* website, *FREE* domain &amp; *FREE* mobile app with Company
</span><br>
<span class="quotelev1">&gt;         email.
</span><br>
<span class="quotelev1">&gt;         &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=%2F%2Fwww%2Erediffmail%2Ecom%2Fcgi%2Dbin%2Fred%2Ecgi%3Fred%3Dhttps%253A%252F%252Fsigads%252Erediff%252Ecom%252FRealMedia%252Fads%252Fclick%255Fnx%252Eads%252Fwww%252Erediffmail%252Ecom%252Fsignatureline%252Ehtm%2540Middle%253F%26amp%3BisImage%3D0%26amp%3BBlockImage%3D0%26amp%3Brediffng%3D0%26amp%3Brogue%3D86405da3ed8eb9005549e1536a8c08bb6cef0c3e&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=5bd1dc3ef7ebf01a2a278d17db5e08d99e13084a&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *Know More &gt;*
</span><br>
<span class="quotelev1">&gt;     &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=%2F%2Fwww%2Erediffmail%2Ecom%2Fcgi%2Dbin%2Fred%2Ecgi%3Fred%3Dhttp%253A%252F%252Ftrack%252Erediff%252Ecom%252Fclick%253Furl%253D%255F%255F%255Fhttp%253A%252F%252Fbusinessemail%252Erediff%252Ecom%253Fsc%255Fcid%253Dsign%252D1%252D10%252D13%255F%255F%255F%2526amp%253Bcmp%253Dhost%2526amp%253Blnk%253Dsign%252D1%252D10%252D13%2526amp%253Bnsrv1%253Dhost%26amp%3BisImage%3D0%26amp%3BBlockImage%3D0%26amp%3Brediffng%3D0%26amp%3Brogue%3D387537254f7eee557c3b17544bd037e8098bd82e&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=eb5ab44b006904f043867a30af2ac4310a867217&gt;
</span><br>
<span class="quotelev1">&gt;     Get your own *FREE* website, *FREE* domain &amp; *FREE* mobile app
</span><br>
<span class="quotelev1">&gt;     with Company email.
</span><br>
<span class="quotelev1">&gt;     &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=https%3A%2F%2Fsigads%2Erediff%2Ecom%2FRealMedia%2Fads%2Fclick%5Fnx%2Eads%2Fwww%2Erediffmail%2Ecom%2Fsignatureline%2Ehtm%40Middle%3F&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=86405da3ed8eb9005549e1536a8c08bb6cef0c3e&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=https%3A%2F%2Fsigads%2Erediff%2Ecom%2FRealMedia%2Fads%2Fclick%5Fnx%2Eads%2Fwww%2Erediffmail%2Ecom%2Fsignatureline%2Ehtm%40Middle%3F&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=86405da3ed8eb9005549e1536a8c08bb6cef0c3e&gt;*Know 
</span><br>
<span class="quotelev1">&gt; More &gt;* 
</span><br>
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=%2F%2Fwww%2Erediffmail%2Ecom%2Fcgi%2Dbin%2Fred%2Ecgi%3Fred%3Dhttp%253A%252F%252Ftrack%252Erediff%252Ecom%252Fclick%253Furl%253D%255F%255F%255Fhttp%253A%252F%252Fbusinessemail%252Erediff%252Ecom%253Fsc%255Fcid%253Dsign%252D1%252D10%252D13%255F%255F%255F%2526amp%253Bcmp%253Dhost%2526amp%253Blnk%253Dsign%252D1%252D10%252D13%2526amp%253Bnsrv1%253Dhost%26amp%3BisImage%3D0%26amp%3BBlockImage%3D0%26amp%3Brediffng%3D0%26amp%3Brogue%3D387537254f7eee557c3b17544bd037e8098bd82e&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=eb5ab44b006904f043867a30af2ac4310a867217&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] Subscription: 
</span><br>
<span class="quotelev1">&gt; &lt;//www.rediffmail.com/cgi-bin/red.cgi?red=https%3A%2F%2Fsigads%2Erediff%2Ecom%2FRealMedia%2Fads%2Fclick%5Fnx%2Eads%2Fwww%2Erediffmail%2Ecom%2Fsignatureline%2Ehtm%40Middle%3F&amp;isImage=0&amp;BlockImage=0&amp;rediffng=0&amp;rogue=86405da3ed8eb9005549e1536a8c08bb6cef0c3e&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/03/28622.php">http://www.open-mpi.org/community/lists/users/2016/03/28622.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28703.php">http://www.open-mpi.org/community/lists/users/2016/03/28703.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28706.php">http://www.open-mpi.org/community/lists/users/2016/03/28706.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28707/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28708.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>In reply to:</strong> <a href="28706.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Reply:</strong> <a href="28723.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
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
