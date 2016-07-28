<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 16:33:43 2008" -->
<!-- isoreceived="20081031203343" -->
<!-- sent="Fri, 31 Oct 2008 16:33:37 -0400" -->
<!-- isosent="20081031203337" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="6DB28C27-054C-4476-B43D-5CBBAB8A85D8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810311220y2907cebboa1f8b145916e9129_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 16:33:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2008, at 3:20 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev2">&gt;&gt; As Jeff mentioned this component is not required on Windows. You  
</span><br>
<span class="quotelev2">&gt;&gt; can disable
</span><br>
<span class="quotelev2">&gt;&gt; it completely in Open MPI and everything will continue to work  
</span><br>
<span class="quotelev2">&gt;&gt; correctly.
</span><br>
<span class="quotelev2">&gt;&gt; Please add --enable-mca-no-build=memory_mallopt o maybe the more  
</span><br>
<span class="quotelev2">&gt;&gt; generic (as
</span><br>
<span class="quotelev2">&gt;&gt; there is no need for any memory manager on Windows
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mca-no-build=memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tried, doesn't quite work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I configure with &quot;--enable-mca-no-build=memory&quot;, the config dies  
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  *** Final output
</span><br>
<span class="quotelev1">&gt;  configure: error: conditional &quot;OMPI_WANT_EXTERNAL_PTMALLOC2&quot; was
</span><br>
<span class="quotelev1">&gt; never defined.
</span><br>
<span class="quotelev1">&gt;  Usually this means the macro was only invoked conditionally.
</span><br>
<p>Ew, yoinks.  That's definitely a bug -- looks like we used an  
<br>
AM_CONDITIONAL inside the main configure.m4 for ptmalloc2; whoops (it  
<br>
needs to be inside MCA_memory_ptmalloc2_POST_CONFIG, not  
<br>
MCA_memory_ptmalloc2_CONFIG).  You're building up quite the bug list  
<br>
-- thanks for your patience!  It's probably unfortunately not that  
<br>
surprising, though, since we don't test on Cygwin at all... :-\
<br>
<p><span class="quotelev1">&gt; Now, if i try with &quot;--enable-mca-no-build=memory_mallopt&quot;, the
</span><br>
<span class="quotelev1">&gt; configuration script runs just fine, but the compilation dies when
</span><br>
<span class="quotelev1">&gt; compiling &quot;mca/paffinity/windows&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  libtool: compile:  gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include -I../../../..
</span><br>
<span class="quotelev1">&gt;  /ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -I../../../..
</span><br>
<span class="quotelev1">&gt; -D_REENTRANT -O3
</span><br>
<span class="quotelev1">&gt;  -DNDEBUG -finline-functions -fno-strict-aliasing -MT
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.lo -MD -MP -MF
</span><br>
<span class="quotelev1">&gt;  .deps/paffinity_windows_module.Tpo -c paffinity_windows_module.c
</span><br>
<span class="quotelev1">&gt; -DDLL_EXPORT -DPIC -o
</span><br>
<span class="quotelev1">&gt;  .libs/paffinity_windows_module.o
</span><br>
<span class="quotelev1">&gt;  paffinity_windows_module.c:44: error: parse error before &quot;sys_info&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  [... and then a bunch of messages after that, all related to
</span><br>
<span class="quotelev1">&gt; paffinity_windows_module.c, which...]
</span><br>
<span class="quotelev1">&gt;  [... I think are all related to this first one...]
</span><br>
<p>I do the build system stuff in OMPI, but this part is all George /  
<br>
Windows guys...  Perhaps this is a difference compiling between  
<br>
&quot;normal&quot; windows and Cygwin...?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7174.php">Gilbert Grosdidier: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<li><strong>Previous message:</strong> <a href="7172.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7166.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/11/7294.php">Neville Clark: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
