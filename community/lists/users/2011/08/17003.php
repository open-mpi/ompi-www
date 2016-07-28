<?
$subject_val = "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 09:48:52 2011" -->
<!-- isoreceived="20110802134852" -->
<!-- sent="Tue, 2 Aug 2011 15:48:44 +0200" -->
<!-- isosent="20110802134844" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)" -->
<!-- id="6618BBC5-8D24-44A4-A0B1-6B6F43855E3D_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5F4D6E82-D5A6-4C87-AC07-7432FE507B9C_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="../../2011/07/16808.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Charles,
<br>
<p>I'm curious if you did manage to get Open MPI compile on the TilePro64? 
<br>
<p>Based on information gleaned from google, the Tile is supporting the MIPS atomic operations, so this problem is just a matter of convincing the Open MPI configure system to use the right asm file. You might want to start looking at opal/asm/asm-data.txt to figure out how this is done.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jul 5, 2011, at 16:29 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I very much doubt we have Tile support as it hasn't come up before. If you look in opal/asm/base, you'll see a MIPS.asm that contains the MIPS code - perhaps you could use that as a starting point?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't write any of that code, but I think if you poke around that directory looking for &quot;MIPS&quot; you'll see what needs to be done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 5, 2011, at 4:15 AM, Charles Bouillaguet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have gotten our hands on  a machine with a bunch of TilePro64
</span><br>
<span class="quotelev2">&gt;&gt; processors (which seems to be a MIPS-like architecture). It runs linux,
</span><br>
<span class="quotelev2">&gt;&gt; has gcc, and I was only dreaming to compile openmpi on it. However
</span><br>
<span class="quotelev2">&gt;&gt; compilation fails with the errir &quot;no atomic primitives available for
</span><br>
<span class="quotelev2">&gt;&gt; tile-unknown-linux-gnu&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering whether this problem has arisen already? If not, I would
</span><br>
<span class="quotelev2">&gt;&gt; be willing to try to address it and write the corresponding assembly
</span><br>
<span class="quotelev2">&gt;&gt; code in opal/asm/..., but in this case I would really appreciate some
</span><br>
<span class="quotelev2">&gt;&gt; guidance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Charles Bouillaguet
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.di.ens.fr/~bouillaguet/">http://www.di.ens.fr/~bouillaguet/</a>
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
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>In reply to:</strong> <a href="../../2011/07/16808.php">Ralph Castain: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="17004.php">Barrett, Brian W: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
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
