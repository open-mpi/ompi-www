<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  3 08:14:38 2007" -->
<!-- isoreceived="20070503121438" -->
<!-- sent="Thu, 3 May 2007 14:14:47 +0200" -->
<!-- isosent="20070503121447" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI compiling error" -->
<!-- id="20070503121447.GZ14385_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4639CE27.1040409_at_ufe.cz" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-03 08:14:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, May 03, 2007 at 01:57:27PM +0200, Chaloupka Zden?k wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt;     MPI_Init(&amp;argv, &amp;argc);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [chaloz_at_chaloupka src]$ mpicc main.cc
</span><br>
<span class="quotelev1">&gt; /tmp/ccBJb7ZI.o: In function
</span><br>
<span class="quotelev1">&gt; `__static_initialization_and_destruction_0(int,
</span><br>
<span class="quotelev1">&gt; int)':main.cc:(.text+0x23): undefined reference to
</span><br>
<span class="quotelev1">&gt; `std::ios_base::Init::Init()'
</span><br>
<p>You have C code, but your filename tells the compiler it is C++.
<br>
<p>Rename main.cc to main.c, this should fix your problem.
<br>
<p>(or use mpic++ instead of mpicc)
<br>
<p><p>HTH
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3192.php">Chudin, Eugene: "[OMPI users] Valgrind and openmpi"</a>
<li><strong>Previous message:</strong> <a href="3190.php">Bert Wesarg: "Re: [OMPI users] MPI compiling error"</a>
<li><strong>In reply to:</strong> <a href="3189.php">Chaloupka Zden&#236;k: "[OMPI users] MPI compiling error"</a>
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
