<?
$subject_val = "[OMPI users] Allgather in OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 12:09:00 2014" -->
<!-- isoreceived="20141028160900" -->
<!-- sent="Tue, 28 Oct 2014 17:08:59 +0100" -->
<!-- isosent="20141028160859" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="[OMPI users] Allgather in OpenMPI 1.4.3" -->
<!-- id="544FBF9B.7000901_at_in.tum.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Allgather in OpenMPI 1.4.3<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 12:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I know 1.4.3 is really old but I am currently stuck with it. However, 
<br>
there seems to be a bug in Allgather.
<br>
<p>I have attached the source of an example program.
<br>
<p>The output I would expect is:
<br>
<span class="quotelev1">&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev1">&gt; 0 0 1 2
</span><br>
<span class="quotelev1">&gt; 1 0 1 2
</span><br>
<span class="quotelev1">&gt; 2 0 1 2
</span><br>
<span class="quotelev1">&gt; 3 0 1 2
</span><br>
<span class="quotelev1">&gt; 4 0 1 2
</span><br>
<p>But what I get is different results when I run the program multiple times:
<br>
<span class="quotelev1">&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev1">&gt; 0 0 1 2
</span><br>
<span class="quotelev1">&gt; 1 0 1 2
</span><br>
<span class="quotelev1">&gt; 2 0 1 2
</span><br>
<span class="quotelev1">&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev1">&gt; 4 0 1 2
</span><br>
<span class="quotelev1">&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev1">&gt; 0 0 1 2
</span><br>
<span class="quotelev1">&gt; 1 0 1 2
</span><br>
<span class="quotelev1">&gt; 2 0 1 2
</span><br>
<span class="quotelev1">&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev1">&gt; 4 3000 3001 3002
</span><br>
<p>This bug is probably already fixed. Does anybody know in which version?
<br>
<p>Best regards,
<br>
Sebastian
<br>
<p><pre>
-- 
Sebastian Rettenberger, M.Sc.
Technische Universit&#195;&#164;t M&#195;&#188;nchen
Department of Informatics
Chair of Scientific Computing
Boltzmannstrasse 3, 85748 Garching, Germany
<a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25633/test.cpp">test.cpp</a>
</ul>
<!-- attachment="test.cpp" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25633/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25634.php">Marco Atzeri: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<li><strong>Previous message:</strong> <a href="25632.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Possible Memory Leak in simple PingPong-Routine with OpenMPI 1.8.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
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
