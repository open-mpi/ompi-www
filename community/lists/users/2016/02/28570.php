<?
$subject_val = "Re: [OMPI users] Help on Windows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 18:26:55 2016" -->
<!-- isoreceived="20160223232655" -->
<!-- sent="Wed, 24 Feb 2016 08:26:53 +0900" -->
<!-- isosent="20160223232653" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on Windows" -->
<!-- id="56CCEABD.7020100_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAPsJ1NbLv1yRU+NM2U07gbWS5r8agRHYRmw2qRDUETmWDQukaA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-23 18:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<li><strong>In reply to:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Reply:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Walt,
<br>
<p>generally speaking, that kind of things happen when you are using a 
<br>
wireless network and/or a firewall.
<br>
<p>so i recommend you first try to disconnect all your networks and see how 
<br>
things get improved
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2/24/2016 5:08 AM, Walt Brainerd wrote:
<br>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/02/28569.php">http://www.open-mpi.org/community/lists/users/2016/02/28569.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28570/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Previous message:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<li><strong>In reply to:</strong> <a href="28569.php">Walt Brainerd: "[OMPI users] Help on Windows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
<li><strong>Reply:</strong> <a href="28571.php">Walt Brainerd: "Re: [OMPI users] Help on Windows"</a>
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
