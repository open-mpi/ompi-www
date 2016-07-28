<?
$subject_val = "Re: [OMPI users] how to SPMD on openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 06:37:11 2009" -->
<!-- isoreceived="20091001103711" -->
<!-- sent="Thu, 1 Oct 2009 16:06:47 +0530" -->
<!-- isosent="20091001103647" -->
<!-- name="ankur pachauri" -->
<!-- email="ankurpachauri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to SPMD on openmpi" -->
<!-- id="bccd656d0910010336x7ec45328rae8f3096ee9d7b32_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="fa4af8200910010223x1449f7a5u9c1997d84c61e2dc_at_mail.gmail.com" -->
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
<strong>From:</strong> ankur pachauri (<em>ankurpachauri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 06:36:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Previous message:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10842.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Reply:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi vipin,
<br>
<p>thanks for the answer but one thing more, do openmpi had bit different
<br>
library functions than mpi or it's usage is different (such as i'll have to
<br>
use ompi_** insted of mpi_** functions)
<br>
<p><p>thanks in advance
<br>
<p>On Thu, Oct 1, 2009 at 2:53 PM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ankur,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; try this command,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ mpirun -np 2 -host firstHostIp,secondHostIp a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for details read manual page for &quot;mpirun&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ man mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 30, 2009 at 3:22 PM, ankur pachauri &lt;ankurpachauri_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been able to install open mpi on two independent machines having FC
</span><br>
<span class="quotelev2">&gt;&gt; 10. The simple hello world programms are running fine on the independent
</span><br>
<span class="quotelev2">&gt;&gt; machines....But can any one pls help me by letting me know how to connect
</span><br>
<span class="quotelev2">&gt;&gt; the two machines and run a common program between the two....how do we a do
</span><br>
<span class="quotelev2">&gt;&gt; a lamboot -v lamhosts in case of openmpi?
</span><br>
<span class="quotelev2">&gt;&gt; How do we get the open mpi running on the two computers simultaneously and
</span><br>
<span class="quotelev2">&gt;&gt; excute a common program on the two machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ankur Pachauri.
</span><br>
<span class="quotelev2">&gt;&gt; 09927590910
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Research Scholar,
</span><br>
<span class="quotelev2">&gt;&gt; software engineering.
</span><br>
<span class="quotelev2">&gt;&gt; Department of Mathematics
</span><br>
<span class="quotelev2">&gt;&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev2">&gt;&gt; Dayalbagh,
</span><br>
<span class="quotelev2">&gt;&gt; AGRA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
Ankur Pachauri.
09927590910
Research Scholar,
software engineering.
Department of Mathematics
Dayalbagh Educational Institute
Dayalbagh,
AGRA
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10844/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>Previous message:</strong> <a href="10843.php">Sangamesh B: "[OMPI users] job fails with &quot;Signal: Bus error (7)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10842.php">vipin kumar: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
<li><strong>Reply:</strong> <a href="10846.php">Jeff Squyres: "Re: [OMPI users] how to SPMD on openmpi"</a>
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
