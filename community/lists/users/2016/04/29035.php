<?
$subject_val = "Re: [OMPI users] OpenSHMEM - Undesired Result !!";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 10:50:54 2016" -->
<!-- isoreceived="20160426145054" -->
<!-- sent="26 Apr 2016 14:49:25 -0000" -->
<!-- isosent="20160426144925" -->
<!-- name="RYAN RAY" -->
<!-- email="ryan.ray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenSHMEM - Undesired Result !!" -->
<!-- id="1461161709.S.11110.8682.f4-234-246.1461682165.11225_at_webmail.rediffmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkW7Pt+aD1KfGqcQgXCXQ30cy2BBCHgm83-Sp3E=qjZg=Q_at_mail.gmail.com" -->
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
<strong>From:</strong> RYAN RAY (<em>ryan.ray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 10:49:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George
<br>
<p>Thanks for the reply. The code is working properly by uncommenting the barrier.
<br>
<p>Regards
<br>
<p>Ryan
<br>
<p><p>On Wed, 20 Apr 2016 19:45:09 +0530 George Bosilca  wrote
<br>
<span class="quotelev1">&gt;Ryan,
</span><br>
What you witness in your execution is that your execution over 2 processes drifted by 49 iterations. Because your example avoid any synchronization call, your processes are not synchronized and therefore any output (in increment of quatum) is correct. As Gilles suggested, enabling the shmem_barrier before the printf will guarantee that all processes are at the same spot, thus all remote (and local) AMO are completed, and therefore the result will be the expected value.
<br>
&#194;&#160; George.
<br>
<p>On Wed, Apr 20, 2016 at 1:33 PM, Gilles Gouaillardet  wrote:
<br>
Ryan,
<br>
what if you uncomment the barrier before printf ?
<br>
I can see a scenario in which printf is invoked on rank 0 before all shmem_long_add have started/completed on rank 1
<br>
Cheers,
<br>
Gilles
<br>
On Wednesday, April 20, 2016, RYAN RAY  wrote:
<br>
While executing the code in the file exp4.c (Attached) we faced undesired result. This code allows all PEs to add a 'quantum' value to a variable on a particular host. But in some cases few of these 'quantum' values are lost. I have attached the file and a screenshot of the output. In the screenshot the last execution is missing 49 quantums. I will be obliged if you could explain to me why this is happenning.
<br>
<p>Regards,
<br>
Ryan Ray
<br>
Get your own FREE website,  FREE domain &amp; FREE mobile app with Company email. &#194;&#160;Know More &gt;
<br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28980.php">http://www.open-mpi.org/community/lists/users/2016/04/28980.php</a>
<br>
<p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28982.php">http://www.open-mpi.org/community/lists/users/2016/04/28982.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29035/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29036.php">Dave Love: "Re: [OMPI users] Ubuntu and LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<li><strong>In reply to:</strong> <a href="28982.php">George Bosilca: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29034.php">RYAN RAY: "Re: [OMPI users] OpenSHMEM - Undesired Result !!"</a>
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
