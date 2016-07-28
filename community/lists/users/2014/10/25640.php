<?
$subject_val = "Re: [OMPI users] Allgather in OpenMPI 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 11:03:24 2014" -->
<!-- isoreceived="20141029150324" -->
<!-- sent="Wed, 29 Oct 2014 15:03:23 +0000" -->
<!-- isosent="20141029150323" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Allgather in OpenMPI 1.4.3" -->
<!-- id="449115F1-99C0-41B6-A1B3-22A0403628EE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="544FBF9B.7000901_at_in.tum.de" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 11:03:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25641.php">Siegmar Gross: "[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Previous message:</strong> <a href="25639.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10Sparc"</a>
<li><strong>In reply to:</strong> <a href="25633.php">Sebastian Rettenberger: "[OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you at least upgrade to 1.4.5?  That's the last release in the 1.4.x series.
<br>
<p>Note that you can always install Open MPI as a normal/non-root user (e.g., install it into your $HOME, or some such).
<br>
<p><p>On Oct 28, 2014, at 12:08 PM, Sebastian Rettenberger &lt;rettenbs_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know 1.4.3 is really old but I am currently stuck with it. However, there seems to be a bug in Allgather.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the source of an example program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output I would expect is:
</span><br>
<span class="quotelev2">&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 3 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 4 0 1 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But what I get is different results when I run the program multiple times:
</span><br>
<span class="quotelev2">&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev2">&gt;&gt; 4 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; rettenbs_at_hpcsccs4:/tmp$ mpiexec -np 5 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 0 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 1 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 2 0 1 2
</span><br>
<span class="quotelev2">&gt;&gt; 3 2000 2001 2002
</span><br>
<span class="quotelev2">&gt;&gt; 4 3000 3001 3002
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This bug is probably already fixed. Does anybody know in which version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sebastian Rettenberger, M.Sc.
</span><br>
<span class="quotelev1">&gt; Technische Universit&#228;t M&#252;nchen
</span><br>
<span class="quotelev1">&gt; Department of Informatics
</span><br>
<span class="quotelev1">&gt; Chair of Scientific Computing
</span><br>
<span class="quotelev1">&gt; Boltzmannstrasse 3, 85748 Garching, Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www5.in.tum.de/">http://www5.in.tum.de/</a>
</span><br>
<span class="quotelev1">&gt; &lt;test.cpp&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25633.php">http://www.open-mpi.org/community/lists/users/2014/10/25633.php</a>
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
<li><strong>Next message:</strong> <a href="25641.php">Siegmar Gross: "[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Previous message:</strong> <a href="25639.php">Siegmar Gross: "Re: [OMPI users] SIGBUS in openmpi-dev-178-ga16c1e4 on Solaris 10Sparc"</a>
<li><strong>In reply to:</strong> <a href="25633.php">Sebastian Rettenberger: "[OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>Reply:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
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
