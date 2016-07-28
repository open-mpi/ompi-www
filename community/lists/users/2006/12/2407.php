<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 29 15:37:01 2006" -->
<!-- isoreceived="20061229203701" -->
<!-- sent="Fri, 29 Dec 2006 20:36:59 +0000" -->
<!-- isosent="20061229203659" -->
<!-- name="Benjamin" -->
<!-- email="open-mpi.org.antis_at_[hidden]" -->
<!-- subject="[OMPI users] Compile problem - _S_empty_rep_storage" -->
<!-- id="45957C6B.9000304_at_ooooooooo.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Benjamin (<em>open-mpi.org.antis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-29 15:36:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Previous message:</strong> <a href="2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Reply:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm a lam user looking to switch to openmpi, and having trouble 
<br>
compiling. I hope someone here can give me a hint!
<br>
<p>So configure works fine, as does make up to this point:
<br>
<p>g++ -O3 -DNDEBUG -fno-inline -pthread -o .libs/ompi_info components.o 
<br>
ompi_info.o output.o param.o version.o -Wl,--export-dynamic  
<br>
../../../ompi/.libs/libmpi.so 
<br>
/&lt;homedir&gt;/programs/openmpi-1.1.2/orte/.libs/liborte.so 
<br>
/&lt;homedir&gt;/programs/openmpi-1.1.2/opal/.libs/libopal.so -ldl -lnsl 
<br>
-lutil -lm -Wl,--rpath -Wl,/&lt;homedir&gt;/programs/openmpi/lib
<br>
<p>components.o(.text+0xf9): In function `ompi_info::open_components()':
<br>
: undefined reference to `std::basic_string&lt;char, 
<br>
std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;::_Rep::_S_empty_rep_storage'
<br>
<p>components.o(.text+0x118): In function `ompi_info::open_components()':
<br>
: undefined reference to `std::basic_string&lt;char, 
<br>
std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt;::_Rep::_S_empty_rep_storage'
<br>
<p>... and so on, several hundred errors complaining about a lack of 
<br>
_S_empty_rep_storage in various places. This seems to be a common error 
<br>
when I've done a web search, however I can find no working solutions.
<br>
<p>Thanks in advance for any help that can be offered, no matter how small.
<br>
<p>Cheers,
<br>
Ben.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Previous message:</strong> <a href="2406.php">Michael Marti: "[OMPI users] openmpi / mpirun problem on aix: poll failed with errno=25, opal_event_loop: ompi_evesel-&gt;dispatch() failed."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
<li><strong>Reply:</strong> <a href="2408.php">Brian W. Barrett: "Re: [OMPI users] Compile problem - _S_empty_rep_storage"</a>
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
