<?
$subject_val = "[OMPI users] Problem including C MPI code from C++ using C linkage";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 31 17:39:20 2010" -->
<!-- isoreceived="20100831213920" -->
<!-- sent="Tue, 31 Aug 2010 15:39:16 -0600" -->
<!-- isosent="20100831213916" -->
<!-- name="Patrik Jonsson" -->
<!-- email="code_at_[hidden]" -->
<!-- subject="[OMPI users] Problem including C MPI code from C++ using C linkage" -->
<!-- id="AANLkTima3+FbYywHN200SszqOVBgrudr=PzbYQY2wQgE_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.860.1283290368.7839.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Problem including C MPI code from C++ using C linkage<br>
<strong>From:</strong> Patrik Jonsson (<em>code_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-31 17:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14144.php">mohamed makhyoun: "[OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>Previous message:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm have a C MPI code that I need to link into my C++ code. As usual,
<br>
from my C++ code, I do
<br>
<p>extern &quot;C&quot; {
<br>
#include &quot;c-code.h&quot;
<br>
}
<br>
<p>where c-code.h includes, among other things, mpi.h.
<br>
<p>This doesn't work, because it appears mpi.h tries to detect whether
<br>
it's being compiled as C or C++ and includes mpicxx.h if the language
<br>
is C++. The problem is that that doesn't work in C linkage, so the
<br>
compilation dies with errors like:
<br>
<p>mpic++ &#160;-I. -I$HOME/include/libPJutil -I$HOME/code/arepo -m32
<br>
arepotest.cc -I$HOME/include -I/sw/include -L/sw/lib
<br>
-L$HOME/code/arepo -larepo -lhdf5 &#160;-lgsl -lgmp -lmpi
<br>
In file included from /usr/include/c++/4.2.1/map:65,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from /sw/include/openmpi/ompi/mpi/cxx/mpicxx.h:36,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from /sw/include/mpi.h:1886,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from /Users/patrik/code/arepo/allvars.h:23,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from /Users/patrik/code/arepo/proto.h:2,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from arepo_grid.h:36,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; from arepotest.cc:3:
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:134: error: template with C linkage
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:145: error: declaration of C
<br>
function 'const std::_Rb_tree_node_base* std::_Rb_tree_increment(const
<br>
std::_Rb_tree_node_base*)' conflicts with
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:142: error: previous
<br>
declaration 'std::_Rb_tree_node_base*
<br>
std::_Rb_tree_increment(std::_Rb_tree_node_base*)' here
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:151: error: declaration of C
<br>
function 'const std::_Rb_tree_node_base* std::_Rb_tree_decrement(const
<br>
std::_Rb_tree_node_base*)' conflicts with
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:148: error: previous
<br>
declaration 'std::_Rb_tree_node_base*
<br>
std::_Rb_tree_decrement(std::_Rb_tree_node_base*)' here
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:153: error: template with C linkage
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:223: error: template with C linkage
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:298: error: template with C linkage
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:304: error: template with C linkage
<br>
/usr/include/c++/4.2.1/bits/stl_tree.h:329: error: template with C linkage
<br>
etc. etc.
<br>
<p>It seems a bit presumptuous of mpi.h to just include mpicxx.h just
<br>
because __cplusplus is defined, since that makes it impossible to link
<br>
C MPI code from C++.
<br>
<p>I've had to resort to something like
<br>
<p>#ifdef __cplusplus
<br>
#undef __cplusplus
<br>
#include &lt;mpi.h&gt;
<br>
#define __cplusplus
<br>
#else
<br>
#include &lt;mpi.h&gt;
<br>
#endif
<br>
<p>in c-code.h, which seems to work but isn't exactly smooth. Is there
<br>
another way around this, or has linking C MPI code with C++ never come
<br>
up before?
<br>
<p>Thanks,
<br>
<p>/Patrik Jonsson
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14144.php">mohamed makhyoun: "[OMPI users] compilation error using pgf90 ver 9.0"</a>
<li><strong>Previous message:</strong> <a href="14142.php">Gus Correa: "Re: [OMPI users] Fwd: Problems with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14159.php">Lisandro Dalcin: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/09/14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
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
