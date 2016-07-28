<?
$subject_val = "Re: [OMPI users] Regarding the problem while connecting to nodes present in a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 07:42:44 2012" -->
<!-- isoreceived="20120424114244" -->
<!-- sent="Tue, 24 Apr 2012 07:42:39 -0400" -->
<!-- isosent="20120424114239" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the problem while connecting to nodes present in a cluster" -->
<!-- id="707F6043-F9FB-4803-BB61-742DE6A1B174_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3BA+Mc+4StN_2rLV0voTWpx1VsmB+TWGRq5bxtGz7DJnw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the problem while connecting to nodes present in a cluster<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 07:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you are using LAM/MPI.  This list is for supporting Open MPI, a wholly different MPI software implementation.  However, speaking as one of the core LAM/MPI developers, I'll tell you that you should uninstall LAM and install Open MPI install.  We abandoned LAM/MPI several years ago.
<br>
<p>Second, you need to setup your ssh to allow you to login to remote machines without entering a password or passphrase (both LAM/MPI and Open MPI require this).  Google around; there are many web-based tutorials on how to do this.
<br>
<p>Good luck.
<br>
<p><p>On Apr 24, 2012, at 4:51 AM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I have installed MPI and when i tried to run MPI parallelly on all the nodes, that while MPI is looking to establish connection i have been getting the following error 
</span><br>
<span class="quotelev1">&gt; &quot;ERROR: LAM/MPI unexpectedly received the following on stderr:Permission denied (publickey,gssapi-with-mic).&quot; so any one could help in solving this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanking you.
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
<li><strong>Next message:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>Previous message:</strong> <a href="19087.php">TERRY DONTJE: "Re: [OMPI users] HRM problem"</a>
<li><strong>In reply to:</strong> <a href="19084.php">seshendra seshu: "[OMPI users] Regarding the problem while connecting to nodes present in a cluster"</a>
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
