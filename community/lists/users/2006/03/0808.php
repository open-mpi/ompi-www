<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  9 21:13:53 2006" -->
<!-- isoreceived="20060310021353" -->
<!-- sent="Thu, 9 Mar 2006 21:13:46 -0500" -->
<!-- isosent="20060310021346" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90" -->
<!-- id="1812A3BE-CD04-4077-ABDB-B2A77600BE42_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s5ugyr1ries9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-09 21:13:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 3, 2006, at 10:50 AM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 02 Mar 2006 03:55:46 -0700, Jeff Squyres &lt;jsquyres_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, I have been unable to get OpenMPI to compile with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGI 6.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (but it does finish ./configure; it breaks during 'make').
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide some details on what is going wrong?
</span><br>
<span class="quotelev2">&gt;&gt; We currently only have PGI 5.2 and 6.0 to test with.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  I refuse :p
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attatched is a tar.bz2 with the config.log and the output of 'make'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wouldn't doubt it if it's just a problem with the way I have PGI  
</span><br>
<span class="quotelev1">&gt; 6.1 set up; I just haven't had time to investigate it yet.
</span><br>
<p>I think I have this fixed on the trunk.  It looks like PGI tried to  
<br>
make the 6.1 compilers support GCC inline assembly, but it doesn't  
<br>
look like it's 100% correct, so for now we disabled our inline  
<br>
assembly support with PGI 6.1, so it will use the non-inlined  
<br>
version, just like the other versions of the PGI compilers.
<br>
<p>Any tarball on the trunk after r9240 should have the fix.  I've asked  
<br>
that this gets pushed into the 1.0 branch to become part of Open MPI  
<br>
1.0.2.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Tom Rosmond: "Re: [OMPI users] Myrinet on linux cluster"</a>
<li><strong>In reply to:</strong> <a href="0771.php">Troy Telford: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
<li><strong>Reply:</strong> <a href="0809.php">Greg Lindahl: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90"</a>
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
