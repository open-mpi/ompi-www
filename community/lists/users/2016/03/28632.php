<?
$subject_val = "Re: [OMPI users] Orted path with module manager on cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 18:40:51 2016" -->
<!-- isoreceived="20160303234051" -->
<!-- sent="Fri, 4 Mar 2016 08:40:51 +0900" -->
<!-- isosent="20160303234051" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Orted path with module manager on cluster" -->
<!-- id="56D8CB83.60000_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1457043723.11487.8.camel_at_accre.vanderbilt.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Orted path with module manager on cluster<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 18:40:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28633.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Davide,
<br>
<p>you can invoke `which mpirun` instead of mpirun, or mpirun --prefix=...
<br>
an other option is to rebuild OpenMPI with --enable-mpirun-prefix-by-default
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/4/2016 7:22 AM, Davide Vanzo wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI 1.10.2 with RoCE network support on our test 
</span><br>
<span class="quotelev1">&gt; cluster. On the cluster we use lmod to manage paths to different 
</span><br>
<span class="quotelev1">&gt; versions of softwares. The problem I have is that I receive the 
</span><br>
<span class="quotelev1">&gt; &quot;orted: command not found&quot; message given that the path to the orted 
</span><br>
<span class="quotelev1">&gt; binary is not exported to the other nodes where my run is launched via 
</span><br>
<span class="quotelev1">&gt; a non-interactive ssh connection. I temporarily solved the problem by 
</span><br>
<span class="quotelev1">&gt; exporting PATH with the correct path to orted on my .bashrc file but 
</span><br>
<span class="quotelev1">&gt; this is not obviously a solution.
</span><br>
<span class="quotelev1">&gt; Any idea how I can fix it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Davide
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28629.php">http://www.open-mpi.org/community/lists/users/2016/03/28629.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28632/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28633.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28631.php">Mark Santcroos: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28629.php">Davide Vanzo: "[OMPI users] Orted path with module manager on cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>Reply:</strong> <a href="28636.php">Davide Vanzo: "Re: [OMPI users] Orted path with module manager on cluster"</a>
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
