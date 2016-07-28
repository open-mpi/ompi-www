<?
$subject_val = "Re: [OMPI users] how to SPMD on openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 05:24:05 2009" -->
<!-- isoreceived="20091001092405" -->
<!-- sent="Thu, 1 Oct 2009 14:53:58 +0530" -->
<!-- isosent="20091001092358" -->
<!-- name="vipin kumar" -->
<!-- email="vipinkumar41_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to SPMD on openmpi" -->
<!-- id="fa4af8200910010223x1449f7a5u9c1997d84c61e2dc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="bccd656d0909300252h3fb887a6gf24bdb3f4dfb322_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to SPMD on openmpi<br>
<strong>From:</strong> vipin kumar (<em>vipinkumar41_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 05:23:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Reply:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankur,
<br>
<p>try this command,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpirun -np 2 -host firstHostIp,secondHostIp a.out
<br>
<p>for details read manual page for &quot;mpirun&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ man mpirun
<br>
<p><p>Regards,
<br>
<p><p>On Wed, Sep 30, 2009 at 3:22 PM, ankur pachauri &lt;ankurpachauri_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been able to install open mpi on two independent machines having FC
</span><br>
<span class="quotelev1">&gt; 10. The simple hello world programms are running fine on the independent
</span><br>
<span class="quotelev1">&gt; machines....But can any one pls help me by letting me know how to connect
</span><br>
<span class="quotelev1">&gt; the two machines and run a common program between the two....how do we a do
</span><br>
<span class="quotelev1">&gt; a lamboot -v lamhosts in case of openmpi?
</span><br>
<span class="quotelev1">&gt; How do we get the open mpi running on the two computers simultaneously and
</span><br>
<span class="quotelev1">&gt; excute a common program on the two machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ankur Pachauri.
</span><br>
<span class="quotelev1">&gt; 09927590910
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Scholar,
</span><br>
<span class="quotelev1">&gt; software engineering.
</span><br>
<span class="quotelev1">&gt; Department of Mathematics
</span><br>
<span class="quotelev1">&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev1">&gt; Dayalbagh,
</span><br>
<span class="quotelev1">&gt; AGRA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Vipin K.
Research Engineer,
C-DOTB, India
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10842/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>Previous message:</strong> <a href="10841.php">Constantinos Makassikis: "Re: [OMPI users] error in checkpointing an mpi application"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10828.php">ankur pachauri: "[OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Reply:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
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
