<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 28 09:10:29 2005" -->
<!-- isoreceived="20051028141029" -->
<!-- sent="Fri, 28 Oct 2005 09:10:27 -0500" -->
<!-- isosent="20051028141027" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin" -->
<!-- id="5D3712F8-1B8B-4D14-9669-487A6A6D41D3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1130419350.6264.6.camel_at_hubbard.hlphys.uni-linz.ac.at" -->
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
<strong>Date:</strong> 2005-10-28 09:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>In reply to:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 27, 2005, at 8:22 AM, Eugen Wintersberger wrote:
<br>
<p><span class="quotelev1">&gt; Second we have an SGI Origin at our university. After unpacking, the
</span><br>
<span class="quotelev1">&gt; configure command runs without any problems. But a subsequent make  
</span><br>
<span class="quotelev1">&gt; gives
</span><br>
<p><p><span class="quotelev1">&gt;         /bin/sh ../../libtool --mode=compile gcc   -O3 -DNDEBUG - 
</span><br>
<span class="quotelev1">&gt; fno-strict-aliasing -c -o atomic-asm.lo atomic-asm.s
</span><br>
<span class="quotelev1">&gt;  gcc -O3 -DNDEBUG -fno-strict-aliasing -c atomic-asm.s  -DPIC - 
</span><br>
<span class="quotelev1">&gt; o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; as: Error: /atomic-asm.s, line 146: Not all branch-label symbols  
</span><br>
<span class="quotelev1">&gt; were defined
</span><br>
<span class="quotelev1">&gt; as: Error: /atomic-asm.s, line 41: Label referenced but not  
</span><br>
<span class="quotelev1">&gt; defined: Lretry1
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev1">&gt; *** Error code 1 (bu21)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea why make breaks?
</span><br>
<p><p>This has been fixed in the subversion trunk.  It should be in the  
<br>
nightly snapshots for both the trunk and the 1.0  branch tonight.  It  
<br>
will be part of RC5 when that is rolled.
<br>
<p>Thanks for the bug report!
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
<li><strong>Next message:</strong> <a href="0243.php">Jeff Squyres: "Re: [O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Troy Telford: "[O-MPI users] Tests and Bugs (RC4):"</a>
<li><strong>In reply to:</strong> <a href="0238.php">Eugen Wintersberger: "[O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0409.php">Eugen Wintersberger: "Re: [O-MPI users] Compiling RC4 on Alpha56 and SGI Origin"</a>
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
