<?
$subject_val = "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 10:29:30 2011" -->
<!-- isoreceived="20110705142930" -->
<!-- sent="Tue, 5 Jul 2011 08:29:22 -0600" -->
<!-- isosent="20110705142922" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)" -->
<!-- id="5F4D6E82-D5A6-4C87-AC07-7432FE507B9C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1309860931.32416.28.camel_at_psalliote" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 10:29:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I very much doubt we have Tile support as it hasn't come up before. If you look in opal/asm/base, you'll see a MIPS.asm that contains the MIPS code - perhaps you could use that as a starting point?
<br>
<p>I didn't write any of that code, but I think if you poke around that directory looking for &quot;MIPS&quot; you'll see what needs to be done.
<br>
<p><p>On Jul 5, 2011, at 4:15 AM, Charles Bouillaguet wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have gotten our hands on  a machine with a bunch of TilePro64
</span><br>
<span class="quotelev1">&gt; processors (which seems to be a MIPS-like architecture). It runs linux,
</span><br>
<span class="quotelev1">&gt; has gcc, and I was only dreaming to compile openmpi on it. However
</span><br>
<span class="quotelev1">&gt; compilation fails with the errir &quot;no atomic primitives available for
</span><br>
<span class="quotelev1">&gt; tile-unknown-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was wondering whether this problem has arisen already? If not, I would
</span><br>
<span class="quotelev1">&gt; be willing to try to address it and write the corresponding assembly
</span><br>
<span class="quotelev1">&gt; code in opal/asm/..., but in this case I would really appreciate some
</span><br>
<span class="quotelev1">&gt; guidance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Charles Bouillaguet
</span><br>
<span class="quotelev1">&gt; <a href="http://www.di.ens.fr/~bouillaguet/">http://www.di.ens.fr/~bouillaguet/</a>
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
<li><strong>Next message:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Previous message:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="16815.php">Charles Bouillaguet: "[OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
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
