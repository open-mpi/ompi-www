<?
$subject_val = "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 11:16:00 2011" -->
<!-- isoreceived="20110802151600" -->
<!-- sent="Tue, 2 Aug 2011 15:15:34 +0000" -->
<!-- isosent="20110802151534" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)" -->
<!-- id="CA5D6F95.6802%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6618BBC5-8D24-44A4-A0B1-6B6F43855E3D_at_eecs.utk.edu" -->
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
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 11:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>Tile is based (loosely) on MIPS, but it's not quite the same.  The TilePro
<br>
only has a simple test-and-set instruction.
<br>
<p>I have getting Open MPI compiling on the Tilera on my todo list for
<br>
another project, so I may be able to make progress on that front over the
<br>
next couple of weeks.  We're not interested in performance just yet, so
<br>
I'm pretty sure it's not going to be the most performant implementation on
<br>
the planet when we first start.  Charles, would you be interested in
<br>
working on some performance work once I get the atomics working?  That
<br>
might be an &quot;easier&quot; place to start, as it's less build system gorp :).
<br>
<p>Brian
<br>
<p>On 8/2/11 7:48 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;Charles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm curious if you did manage to get Open MPI compile on the TilePro64?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Based on information gleaned from google, the Tile is supporting the MIPS
</span><br>
<span class="quotelev1">&gt;atomic operations, so this problem is just a matter of convincing the
</span><br>
<span class="quotelev1">&gt;Open MPI configure system to use the right asm file. You might want to
</span><br>
<span class="quotelev1">&gt;start looking at opal/asm/asm-data.txt to figure out how this is done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jul 5, 2011, at 16:29 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I very much doubt we have Tile support as it hasn't come up before. If
</span><br>
<span class="quotelev2">&gt;&gt;you look in opal/asm/base, you'll see a MIPS.asm that contains the MIPS
</span><br>
<span class="quotelev2">&gt;&gt;code - perhaps you could use that as a starting point?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I didn't write any of that code, but I think if you poke around that
</span><br>
<span class="quotelev2">&gt;&gt;directory looking for &quot;MIPS&quot; you'll see what needs to be done.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 5, 2011, at 4:15 AM, Charles Bouillaguet wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have gotten our hands on  a machine with a bunch of TilePro64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors (which seems to be a MIPS-like architecture). It runs linux,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has gcc, and I was only dreaming to compile openmpi on it. However
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation fails with the errir &quot;no atomic primitives available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tile-unknown-linux-gnu&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was wondering whether this problem has arisen already? If not, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be willing to try to address it and write the corresponding assembly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; code in opal/asm/..., but in this case I would really appreciate some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guidance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Charles Bouillaguet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.di.ens.fr/~bouillaguet/">http://www.di.ens.fr/~bouillaguet/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17013.php">Thatyene Louise Alves de Souza Ramos: "Re: [OMPI users] Problems with MPI_Iprobe"</a>
<li><strong>Previous message:</strong> <a href="17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>In reply to:</strong> <a href="17011.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
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
