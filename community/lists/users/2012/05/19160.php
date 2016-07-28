<?
$subject_val = "Re: [OMPI users] Regarding mpi programming";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  1 09:41:32 2012" -->
<!-- isoreceived="20120501134132" -->
<!-- sent="Tue, 1 May 2012 06:41:28 -0700" -->
<!-- isosent="20120501134128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding mpi programming" -->
<!-- id="AE5B2AAF-FED6-446F-A9B6-615AB90DE2ED_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3D29AkPUDSOODRO1PztLW-ehE4A94=+riOE_r5oqa6QGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding mpi programming<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-01 09:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, that's not much of a description to go on to know where the problem is.  
<br>
<p>In general, you should look to ensure that:
<br>
<p>a) you are sending exactly what you think you are sending (e.g., print out a sample value or two before and/or after you send)
<br>
b) you are receiving exactly what you think you are receiving (e.g., print out the same sample value or two that you did on the send side after you receive)
<br>
<p>Also ensure that you're receiving from the right communicator/tag/source tuple.
<br>
<p><p>On Apr 29, 2012, at 5:09 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Iam using stacks to to store my spitted arrays , where it will store starting and ending position of main array, the problem is iam able to send the array from master to all nodes but at receiving side that is at slaves iam getting an size which is 0 or not the same size. so can any one help in solving this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19161.php">Jingcha Joba: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>Previous message:</strong> <a href="19159.php">Mohan L: "Re: [OMPI users] OpenMPI and CUDA on cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19153.php">seshendra seshu: "[OMPI users] Regarding mpi programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20511.php">Eric Chamberland: "[OMPI users] 2 GB limitation of MPI_File_write_all"</a>
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
