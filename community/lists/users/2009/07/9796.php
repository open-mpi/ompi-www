<?
$subject_val = "Re: [OMPI users] Error connecting to nodes ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  2 04:12:34 2009" -->
<!-- isoreceived="20090702081234" -->
<!-- sent="Thu, 02 Jul 2009 17:12:28 +0900" -->
<!-- isosent="20090702081228" -->
<!-- name="Raymond Wan" -->
<!-- email="r.wan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error connecting to nodes ?" -->
<!-- id="4A4C6BEC.4070306_at_aist.go.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A4C449E.7070802_at_biggjapan.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error connecting to nodes ?<br>
<strong>From:</strong> Raymond Wan (<em>r.wan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-02 04:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Reply:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ashika,
<br>
<p><p>Ashika Umanga Umagiliya wrote:
<br>
<span class="quotelev1">&gt; In my MPI environment I have 3 Debian machines all setup openMPI in 
</span><br>
<span class="quotelev1">&gt; /usr/local/openMPI,
</span><br>
<span class="quotelev1">&gt; configured PATH and LD_LIBRARY_PATH correctly.
</span><br>
<span class="quotelev1">&gt; And I have also configured passwordless SSH login in each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I execute my application , it gives following error , what 
</span><br>
<span class="quotelev1">&gt; seems to be the problem ?
</span><br>
<p><p>Have you check whether or not mpirun works on a single machine (i.e., 
<br>
mpirun -np 4 -host localhost mandel)?  Did you install openmpi from 
<br>
source or via the apt-get package manager?  I used the pkg mgr and orted 
<br>
is located at /usr/bin/orted -- do you have this file on all 3 systems?
<br>
<p>And this is Debian stable?
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Previous message:</strong> <a href="9795.php">vipin kumar: "Re: [OMPI users] Spawning processes through MPI::Intracomm::Spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="9791.php">Ashika Umanga Umagiliya: "[OMPI users] Error connecting to nodes ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
<li><strong>Reply:</strong> <a href="9797.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Error connecting to nodes ?"</a>
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
