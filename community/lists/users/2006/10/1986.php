<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 04:13:31 2006" -->
<!-- isoreceived="20061016081331" -->
<!-- sent="Mon, 16 Oct 2006 10:13:24 +0200" -->
<!-- isosent="20061016081324" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="1160986404.12245.51.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="C14B4E23.29CB2%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 04:13:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2006-10-06 at 00:04 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On 10/5/06 2:42 PM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; System: BLACS 1.1p3 on Debian Linux 3.1r3 on dual-opteron, gcc 3.3.5,
</span><br>
<span class="quotelev2">&gt; &gt; Intel ifort 9.0.32 all tests with 4 processors (comments below)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPi 1.1.1 patched and OpenMPI 1.1.2 patched:
</span><br>
<span class="quotelev2">&gt; &gt;    C &amp; F tests: no errors with default data set.  F test slowed down
</span><br>
<span class="quotelev2">&gt; &gt; in the middle of the tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good.  Can you expand on what you mean by &quot;slowed down&quot;?
</span><br>
<p>Lets add some more data to this...
<br>
BLACS 1.1p3
<br>
Ubuntu Dapper 6.06
<br>
dual opteron
<br>
gcc 4.0
<br>
gfortran 4.0 (for both f77 and f90)
<br>
standard tests with 4 tasks on one node (i.e. 2 tasks per cpu)
<br>
<p>OpenMPI 1.1.2rc3
<br>
The tests comes to a complete standstill at the integer bsbr tests
<br>
It consumes cpu all the time but nothing happens.
<br>
<p>Any ideas?
<br>
<p>configure params:
<br>
./configure --prefix=/lap/openmpi/1.1.2rc3/gcc-4.0-dbg
<br>
--with-tm=/lap/torque --with-pic --enable-mem-debug --enable-debug
<br>
--enable-picky --enable-cxx-exceptions --with-wrapper-fflags=-ff2c
<br>
--with-wrapper-fcflags=-ff2c
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<li><strong>In reply to:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1987.php">흆e Sandgren: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
