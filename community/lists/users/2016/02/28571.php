<?
$subject_val = "Re: [OMPI users] Help on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 19:19:23 2016" -->
<!-- isoreceived="20160224001923" -->
<!-- sent="Tue, 23 Feb 2016 17:19:22 -0700" -->
<!-- isosent="20160224001922" -->
<!-- name="Walt Brainerd" -->
<!-- email="walt.brainerd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Windows" -->
<!-- id="CAPsJ1NZ6vkzfvxEQnb4Gxhvaey1_Yv8gS9Phf+dM=JonO0=f5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="56CCEABD.7020100_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on Windows<br>
<strong>From:</strong> Walt Brainerd (<em>walt.brainerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 19:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>In reply to:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gilles! It's amazing to get such help.
<br>
<p>It seems to work when I unplugged the ethernet
<br>
and have the wireless on, but I will check it out
<br>
further (including the firewall situation) to pin it down.
<br>
<p>&nbsp;time mpirun -np 4 ./a
<br>
&nbsp;Hello from           1 out of           4 images.
<br>
&nbsp;Hello from           2 out of           4 images.
<br>
&nbsp;Hello from           3 out of           4 images.
<br>
&nbsp;Hello from           4 out of           4 images.
<br>
<p>real    0m0.774s   &lt;&lt;&lt;&lt;-----------------------------------------------
<br>
user    0m0.341s
<br>
sys     0m0.933s
<br>
<p>On Tue, Feb 23, 2016 at 4:26 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Walt,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; generally speaking, that kind of things happen when you are using a
</span><br>
<span class="quotelev1">&gt; wireless network and/or a firewall.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so i recommend you first try to disconnect all your networks and see how
</span><br>
<span class="quotelev1">&gt; things get improved
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/24/2016 5:08 AM, Walt Brainerd wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running up-to-date cygwin on W10 on a 4x i5 processor,
</span><br>
<span class="quotelev1">&gt; including gcc 5.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I built libcaf_mpi.a provided by OpenCoarrays.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat hello.f90
</span><br>
<span class="quotelev1">&gt; program hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    print *, &quot;Hello from&quot;, this_image(), &amp;
</span><br>
<span class="quotelev1">&gt;             &quot;out of&quot;, num_images(), &quot;images.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled the hello.f90 with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpifort -fcoarray=lib hello.f90 libcaf_mpi.a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and ran it with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ time mpirun -np 4 ./a
</span><br>
<span class="quotelev1">&gt;  Hello from           1 out of           4 images.
</span><br>
<span class="quotelev1">&gt;  Hello from           2 out of           4 images.
</span><br>
<span class="quotelev1">&gt;  Hello from           3 out of           4 images.
</span><br>
<span class="quotelev1">&gt;  Hello from           4 out of           4 images.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; real    0m42.733s           !!!!!!!!!!!!!!!!!!!!! &lt;--------------------
</span><br>
<span class="quotelev1">&gt; user    0m0.201s
</span><br>
<span class="quotelev1">&gt; sys     0m0.934s
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I am getting this long startup delay. The same thing
</span><br>
<span class="quotelev1">&gt; happens with other coarray programs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas? BTW, I know almost nothing about MPI :-(.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Walt Brainerd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28569.php">http://www.open-mpi.org/community/lists/users/2016/02/28569.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/02/28570.php">http://www.open-mpi.org/community/lists/users/2016/02/28570.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Walt Brainerd
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28572.php">Eva: "[OMPI users] openmpi-1.10.2rc3 is slower than 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
<li><strong>In reply to:</strong> <a href="28570.php">Gilles Gouaillardet: "Re: [OMPI users] Help on Windows"</a>
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
