<?
$subject_val = "Re: [OMPI users] Allgather in OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 13:49:50 2014" -->
<!-- isoreceived="20141030174950" -->
<!-- sent="Thu, 30 Oct 2014 18:49:48 +0100" -->
<!-- isosent="20141030174948" -->
<!-- name="Sebastian Rettenberger" -->
<!-- email="rettenbs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in OpenMPI 1.4.3" -->
<!-- id="54527A3C.6040202_at_in.tum.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="449115F1-99C0-41B6-A1B3-22A0403628EE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Allgather in OpenMPI 1.4.3<br>
<strong>From:</strong> Sebastian Rettenberger (<em>rettenbs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 13:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25645.php">Brice Goglin: "[OMPI users] engineer position on hwloc+netloc"</a>
<li><strong>In reply to:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since I can't upgrade the system packages anyway (due to dependencies), 
<br>
I installed version 1.8.3. The bug is fixed in this version.
<br>
<p>Thank you
<br>
Sebastian
<br>
<p>On 29.10.2014 16:03, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Can you at least upgrade to 1.4.5?  That's the last release in the 1.4.x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you can always install Open MPI as a normal/non-root user (e.g., install it into your $HOME, or some such).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2014, at 12:08 PM, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know 1.4.3 is really old but I am currently stuck with it. However, there seems to be a bug in Allgather.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached the source of an example program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output I would expect is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But what I get is different results when I run the program multiple times:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 3000 3001 3002
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This bug is probably already fixed. Does anybody know in which version?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev2">&gt;&gt; Technische Universit&#195;&#164;t M&#195;&#188;nchen
</span><br>
<span class="quotelev2">&gt;&gt; Department of Informatics
</span><br>
<span class="quotelev2">&gt;&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev2">&gt;&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25633.php">http://www.open-mpi.org/community/lists/users/2014/10/25633.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Sebastian Rettenberger, M.Sc.
Technische Universit&#195;&#164;t M&#195;&#188;nchen
Department of Informatics
Chair of Scientific Computing
Boltzmannstrasse 3, 85748 Garching, Germany
<a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25646/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25645.php">Brice Goglin: "[OMPI users] engineer position on hwloc+netloc"</a>
<li><strong>In reply to:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
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
