<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 18 20:13:25 2007" -->
<!-- isoreceived="20070919001325" -->
<!-- sent="Tue, 18 Sep 2007 20:13:11 -0400" -->
<!-- isosent="20070919001311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] g4 mpicc error" -->
<!-- id="76D0008F-9356-41EB-B8E2-186AABBABB49_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070918173813.ej9kny7tw0sk0s0c_at_webmail.mines.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-18 20:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 18, 2007, at 7:38 PM, rokuingh_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I had to sudo make all install first of all, is this normal?
</span><br>
<p>It depends on where you install.  If you're installing into a  
<br>
directory to where your user does not have write permissions, then  
<br>
yes, you need to su or sudo to &quot;make install&quot;.
<br>
<p><span class="quotelev1">&gt; Next, i'm using an example code i found on the site somewhere, and  
</span><br>
<span class="quotelev1">&gt; my driver is the following line
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc mpiex.C -o mpiex
</span><br>
<p>Try using &quot;mpiCC&quot; or &quot;mpic++&quot; (the C++ compiler -- mpicc is the C  
<br>
compiler).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4039.php">Jeff Squyres: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
<li><strong>In reply to:</strong> <a href="4037.php">rokuingh_at_[hidden]: "[OMPI users] g4 mpicc error"</a>
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
