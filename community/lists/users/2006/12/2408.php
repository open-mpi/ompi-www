<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Dec 30 10:28:40 2006" -->
<!-- isoreceived="20061230152840" -->
<!-- sent="Sat, 30 Dec 2006 08:28:33 -0700 (MST)" -->
<!-- isosent="20061230152833" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile problem - _S_empty_rep_storage" -->
<!-- id="42896.128.165.0.81.1167492513.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="45957C6B.9000304_at_ooooooooo.net" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-30 10:28:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Previous message:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>In reply to:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; g++ -O3 -DNDEBUG -fno-inline -pthread -o .libs/ompi_info components.o
</span><br>
<span class="quotelev1">&gt; ompi_info.o output.o param.o version.o -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so
</span><br>
<span class="quotelev1">&gt; /&lt;homedir&gt;/programs/openmpi-1.1.2/orte/.libs/liborte.so
</span><br>
<span class="quotelev1">&gt; /&lt;homedir&gt;/programs/openmpi-1.1.2/opal/.libs/libopal.so -ldl -lnsl
</span><br>
<span class="quotelev1">&gt; -lutil -lm -Wl,--rpath -Wl,/&lt;homedir&gt;/programs/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; components.o(.text+0xf9): In function `ompi_info::open_components()':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `std::basic_string&lt;char,
</span><br>
<span class="quotelev1">&gt; std::char_traits&lt;char&gt;, std::allocator&lt;char&gt;
</span><br>
<span class="quotelev2">&gt; &gt;::_Rep::_S_empty_rep_storage'
</span><br>
<p>Can you compile a simple (non-MPI) C++ program that uses part of the STL
<br>
(like std::string)?  Usually this points to an issue with the installation
<br>
of the GNU C++ compiler.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/01/2409.php">Jeff Squyres: "Re: [OMPI users] mpicc problems finding libraries (mostly)"</a>
<li><strong>Previous message:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>In reply to:</strong> <a href="2407.php">Benjamin: "[OMPI users] Compile problem - _S_empty_rep_storage"</a>
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
