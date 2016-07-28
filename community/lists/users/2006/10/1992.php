<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 16 18:11:54 2006" -->
<!-- isoreceived="20061016221154" -->
<!-- sent="Mon, 16 Oct 2006 18:11:45 -0400" -->
<!-- isosent="20061016221145" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem building static w/ 1.1.2_rc4" -->
<!-- id="BE612370-C197-4228-8B6F-7C3A635C4D12_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1160978605.9948.28.camel_at_localhost" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-16 18:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh and I spent some quality time on the phone today talking through  
<br>
this issue.  Here's some points (not in strict order):
<br>
<p>- &quot;--enable-static --enable-shared&quot; (either explicit or implicit)  
<br>
works fine -- it'll build both static and shared library versions of  
<br>
OMPI's libraries.  Unless otherwise specified, the OMPI executables  
<br>
will link against the shared libraries, but Libtool typically - 
<br>
rpath's in where the libraries build, so there's no need to set  
<br>
LD_LIBRARY_PATH to run them.
<br>
<p>- It turns out that there is a critical app at Sandia that *requires*  
<br>
-static to build (those crazy app writers!).  Sandia does have all  
<br>
the right .so libraries installed on all their nodes, so the warnings  
<br>
about dlopen() and gethostname() are all ok.
<br>
<p>- Sandia also does have all the Right .a libraries installed (e.g.,  
<br>
libsysfs.a, libdl.a, libc.a, libtorque.a, libibverbs.a, ...etc.).  So  
<br>
everything *should* compile properly to get a fully static executable.
<br>
<p>- Because horrid details that no one cares about, you can't compile  
<br>
MPI apps with -static *and* have Open MPI have an internal memory  
<br>
manager.  So it is necessary to configure OMPI with --without-memory- 
<br>
manager.  This is actually ok in OS-bypass network environments  
<br>
because OMPI defaults to never returning NIC-registered memory to the  
<br>
user (and therefore you don't need a memory manager).  If you want a  
<br>
memory manager, then you can't compile your MPI apps with -static;  
<br>
sorry, this is a limitation of Linux.
<br>
--&gt; Configuring OMPI with --without-memory-manager resolved all the  
<br>
duplicate symbol problems.
<br>
<p>- OMPI is not correctly determining that libsysfs is a dependency (I  
<br>
think because it's an implicit dependency from libibverbs).  Hence,  
<br>
compiling MPI applications with the wrapper results in missing  
<br>
symbols because the wrapper is not adding -lsysfs to the command  
<br>
line.  The workaround is to edit $prefix/share/openmpi/ 
<br>
mpi*wrapper.txt to add &quot;-lsysfs&quot; to the &quot;libs&quot; field (these files are  
<br>
what the wrapper compilers read to know how to build command lines  
<br>
for the underlying compiler).
<br>
--&gt; Hand-editing mpi*wrapper.txt to insert &quot;-lsysfs&quot; fixed the  
<br>
missing symbols problem.
<br>
<p>End of the day: Sandia was able to get a 100% static MPI application  
<br>
executable, although ld still emits a bunch of warnings (which are ok).
<br>
<p>=================
<br>
<p>This is probably FAQ fodder; I have some time on airplanes coming  
<br>
up.  I'll morph this material into stuff that is suitable for the FAQ.
<br>
<p><p><p>On Oct 16, 2006, at 2:03 AM, Josh England wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, 2006-10-15 at 23:31 -0600, Josh England wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, 2006-10-14 at 09:35 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given the messages from the linker and my prior mail, I'm not sure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that a) is possible -- it will require more poking around to know  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sure.  b) is definitely possible simply by using --enable-static and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then using &quot;mpicc&quot; (and friends) as normal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI will be built statically (to include torque and libibverbs,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming you have .a's versions of both of those), but as Scott
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mentioned, system libraries such as dl and sysfs will be linked
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dynamically.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OK.  I've got a build with --enable-static and --disable-shared,  
</span><br>
<span class="quotelev2">&gt;&gt; and I'm
</span><br>
<span class="quotelev2">&gt;&gt; still seeing the *exact* same behavior.  I cannot build a static  
</span><br>
<span class="quotelev2">&gt;&gt; library
</span><br>
<span class="quotelev2">&gt;&gt; either with mpicc or specifying a manual link line.  Note that this
</span><br>
<span class="quotelev2">&gt;&gt; appears to be a problem only with 1.1.2_rc4.  Open MPI version 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt; seems to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry.  I wrote too fast.  Version 1.1.1 actually *does not* work for
</span><br>
<span class="quotelev1">&gt; static builds either.  It exhibits the same problem described in the
</span><br>
<span class="quotelev1">&gt; original post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -JE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1993.php">Laurent.POREZ_at_[hidden]: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>Previous message:</strong> <a href="1991.php">Cupp, Matthew R: "Re: [OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<li><strong>In reply to:</strong> <a href="1985.php">Josh England: "Re: [OMPI users] problem building static w/ 1.1.2_rc4"</a>
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
