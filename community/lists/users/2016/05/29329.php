<?
$subject_val = "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 30 20:12:41 2016" -->
<!-- isoreceived="20160531001241" -->
<!-- sent="Tue, 31 May 2016 09:12:36 +0900" -->
<!-- isosent="20160531001236" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System does not detect the files located in the &amp;quot;lib&amp;quot; directory" -->
<!-- id="d15e27b8-6069-2d1a-62a6-e3fdf46df489_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BLU183-W477A03C9EA8888562453B3D7450_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-30 20:12:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Reply:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>in your .bashrc, Open MPI environment (PATH and LD_LIBRARY_PATH) is set 
<br>
at the very end.
<br>
<p>i do not know who invokes mpicc, but it is very likely invoked *before* 
<br>
the environment is set.
<br>
<p>/* note this might not be the mpicc you expect */
<br>
<p>i would first double check
<br>
<p>~/OpenFOAM/OpenFOAM-v3.0+/etc/bashrc
<br>
<p><p>note if you configure Open MPI with --enable-mpirun-prefix-by-default, 
<br>
you will not have to set LD_LIBRARY_PATH anymore.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/31/2016 5:03 AM, Blair Climenhaga wrote:
<br>
<span class="quotelev1">&gt; Hello Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attempted to upgrade my Open MPI to version 1.10.2 however 
</span><br>
<span class="quotelev1">&gt; after following the build steps on the FAQ page 
</span><br>
<span class="quotelev1">&gt; (<a href="https://www.open-mpi.org/faq/?category=building">https://www.open-mpi.org/faq/?category=building</a>) I receive the 
</span><br>
<span class="quotelev1">&gt; following error at the top of every terminal I open, &quot;mpicc: error 
</span><br>
<span class="quotelev1">&gt; while loading shared libraries: libopen-pal.so.13: cannot open shared 
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory&quot;. I have attached a compressed 
</span><br>
<span class="quotelev1">&gt; folder (.zip) that helps explain step-by-step what I did during 
</span><br>
<span class="quotelev1">&gt; installation. If anyone could spot what I did wrong or what I should 
</span><br>
<span class="quotelev1">&gt; try next to fix this problem I would greatly appreciate the help. 
</span><br>
<span class="quotelev1">&gt; Thank you to everyone in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Blair
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29328.php">http://www.open-mpi.org/community/lists/users/2016/05/29328.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29330.php">Gilles Gouaillardet: "Re: [OMPI users] Broadcast faster than barrier"</a>
<li><strong>Previous message:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>In reply to:</strong> <a href="29328.php">Blair Climenhaga: "[OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
<li><strong>Reply:</strong> <a href="29336.php">Blair Climenhaga: "Re: [OMPI users] System does not detect the files located in the &quot;lib&quot; directory"</a>
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
