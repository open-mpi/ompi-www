<?
$subject_val = "Re: [OMPI users] Problem including C MPI code from C++ using C linkage";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 23:48:29 2010" -->
<!-- isoreceived="20100902034829" -->
<!-- sent="Thu, 2 Sep 2010 00:48:24 -0300" -->
<!-- isosent="20100902034824" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem including C MPI code from C++ using C linkage" -->
<!-- id="AANLkTimFidnOZ=49WgD9xWXiq25rPmLVQuyYN59Dsaeq_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTima3+FbYywHN200SszqOVBgrudr=PzbYQY2wQgE_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem including C MPI code from C++ using C linkage<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 23:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14143.php">Patrik Jonsson: "[OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 31 August 2010 18:39, Patrik Jonsson &lt;code_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm have a C MPI code that I need to link into my C++ code. As usual,
</span><br>
<span class="quotelev1">&gt; from my C++ code, I do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; extern &quot;C&quot; {
</span><br>
<span class="quotelev1">&gt; #include &quot;c-code.h&quot;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>#include &lt;mpi.h&gt;
<br>
extern &quot;C&quot; {
<br>
#include &quot;c-code.h&quot;
<br>
}
<br>
<p>Would that be enough?
<br>
<p><span class="quotelev1">&gt; where c-code.h includes, among other things, mpi.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This doesn't work, because it appears mpi.h tries to detect whether
</span><br>
<span class="quotelev1">&gt; it's being compiled as C or C++ and includes mpicxx.h if the language
</span><br>
<span class="quotelev1">&gt; is C++. The problem is that that doesn't work in C linkage, so the
</span><br>
<span class="quotelev1">&gt; compilation dies with errors like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++ &#194;&#160;-I. -I$HOME/include/libPJutil -I$HOME/code/arepo -m32
</span><br>
<span class="quotelev1">&gt; arepotest.cc -I$HOME/include -I/sw/include -L/sw/lib
</span><br>
<span class="quotelev1">&gt; -L$HOME/code/arepo -larepo -lhdf5 &#194;&#160;-lgsl -lgmp -lmpi
</span><br>
<span class="quotelev1">&gt; In file included from /usr/include/c++/4.2.1/map:65,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from /sw/include/openmpi/ompi/mpi/cxx/mpicxx.h:36,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from /sw/include/mpi.h:1886,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from /Users/patrik/code/arepo/allvars.h:23,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from /Users/patrik/code/arepo/proto.h:2,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from arepo_grid.h:36,
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; from arepotest.cc:3:
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:134: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:145: error: declaration of C
</span><br>
<span class="quotelev1">&gt; function 'const std::_Rb_tree_node_base* std::_Rb_tree_increment(const
</span><br>
<span class="quotelev1">&gt; std::_Rb_tree_node_base*)' conflicts with
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:142: error: previous
</span><br>
<span class="quotelev1">&gt; declaration 'std::_Rb_tree_node_base*
</span><br>
<span class="quotelev1">&gt; std::_Rb_tree_increment(std::_Rb_tree_node_base*)' here
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:151: error: declaration of C
</span><br>
<span class="quotelev1">&gt; function 'const std::_Rb_tree_node_base* std::_Rb_tree_decrement(const
</span><br>
<span class="quotelev1">&gt; std::_Rb_tree_node_base*)' conflicts with
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:148: error: previous
</span><br>
<span class="quotelev1">&gt; declaration 'std::_Rb_tree_node_base*
</span><br>
<span class="quotelev1">&gt; std::_Rb_tree_decrement(std::_Rb_tree_node_base*)' here
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:153: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:223: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:298: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:304: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; /usr/include/c++/4.2.1/bits/stl_tree.h:329: error: template with C linkage
</span><br>
<span class="quotelev1">&gt; etc. etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems a bit presumptuous of mpi.h to just include mpicxx.h just
</span><br>
<span class="quotelev1">&gt; because __cplusplus is defined, since that makes it impossible to link
</span><br>
<span class="quotelev1">&gt; C MPI code from C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've had to resort to something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef __cplusplus
</span><br>
<span class="quotelev1">&gt; #undef __cplusplus
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #define __cplusplus
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in c-code.h, which seems to work but isn't exactly smooth. Is there
</span><br>
<span class="quotelev1">&gt; another way around this, or has linking C MPI code with C++ never come
</span><br>
<span class="quotelev1">&gt; up before?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /Patrik Jonsson
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<li><strong>Previous message:</strong> <a href="14158.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_accept and MPI_Comm_connect both use 100% one cpu core. Is it a bug?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/08/14143.php">Patrik Jonsson: "[OMPI users] Problem including C MPI code from C++ using C linkage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14160.php">Jeff Squyres: "Re: [OMPI users] Problem including C MPI code from C++ using C linkage"</a>
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
