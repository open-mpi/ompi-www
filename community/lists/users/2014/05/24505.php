<?
$subject_val = "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 07:32:55 2014" -->
<!-- isoreceived="20140528113255" -->
<!-- sent="Wed, 28 May 2014 11:32:54 +0000" -->
<!-- isosent="20140528113254" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure openmpi 1.8.1 with intel compiler" -->
<!-- id="43FCCC3C-2CDB-4EE5-9846-E4D98AD4926A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU436-SMTP19083475E23A88899B5AC97CB250_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] configure openmpi 1.8.1 with intel compiler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 07:32:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24501.php">Lorenzo Don&#224;: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Reply:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your configure statement looks fine (note that you don't need the F77=ifort token, but it's harmless -- the FC=ifort token is the important one).
<br>
<p>Can you send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On May 28, 2014, at 2:15 AM, Lorenzo Don&#224; &lt;lorechimica91_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please can you help me to compile openmpi 1.8.1 with intel compiler??
</span><br>
<span class="quotelev1">&gt; i compiled it with this configuration ./configure FC=ifort CC=icc CXX=icpc F77=ifort --prefix=/Users/lorenzodona/openmpi-1.8.1
</span><br>
<span class="quotelev1">&gt; but when I try to use it for another program I found mpi support is broken..
</span><br>
<span class="quotelev1">&gt; Please can you help me to compile openmpi with intel in a correct way.
</span><br>
<span class="quotelev1">&gt; Thanks a lot for your patience with me and thanks to help me.
</span><br>
<span class="quotelev1">&gt; Dearly lorenzo
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
<li><strong>Next message:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="24504.php">Filippo Spiga: "Re: [OMPI users] Deadly warning &quot;Epoll ADD(4) on fd 2 failed.&quot; ?"</a>
<li><strong>In reply to:</strong> <a href="24501.php">Lorenzo Don&#224;: "[OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
<li><strong>Reply:</strong> <a href="24506.php">Lori 91: "Re: [OMPI users] configure openmpi 1.8.1 with intel compiler"</a>
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
