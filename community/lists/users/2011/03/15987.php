<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 21:19:28 2011" -->
<!-- isoreceived="20110325011928" -->
<!-- sent="Thu, 24 Mar 2011 21:19:22 -0400" -->
<!-- isosent="20110325011922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="78481C77-C694-4CAB-A4C9-22BAA1EBB5A6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D8B5927.16066.8BFCE56E_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 21:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15986.php">Dmitry N. Mikushin: "[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>In reply to:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2011, at 2:45 PM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your information. For my Open MPI installation, actually 
</span><br>
<span class="quotelev1">&gt; the executables such as mpirun and orted are dependent on those 
</span><br>
<span class="quotelev1">&gt; dynamic intel libraries, when I use ldd on mpirun, some dynamic 
</span><br>
<span class="quotelev1">&gt; libraries show up. I am trying to make these open mpi executables 
</span><br>
<span class="quotelev1">&gt; statically linked with these intel libraries, but it shows no progress 
</span><br>
<span class="quotelev1">&gt; even if I use &quot;--with-gnu-ld&quot; with specific static intel libraries set in 
</span><br>
<span class="quotelev1">&gt; LIBS when I configure open mpi 1.4.3 installation. It seems there 
</span><br>
<span class="quotelev1">&gt; are something for the compiling process of open mpi 1.4.3 that I do 
</span><br>
<span class="quotelev1">&gt; not have control, or I just missed something. I will try different 
</span><br>
<span class="quotelev1">&gt; things, and will report here once I have a confirmative conclusion. 
</span><br>
<span class="quotelev1">&gt; However, any hints or information on how to make open mpi 
</span><br>
<span class="quotelev1">&gt; executables statically linked to intel libs through intel compilers are 
</span><br>
<span class="quotelev1">&gt; very welcomed. Thanks!
</span><br>
<p>I have a dim recollection of some intel compiler command line flag that says &quot;staticially link in the intel libraries&quot;.  -Bstatic-intel, or something like that...?  Googling around and/or checking the icc docs would probably reveal the true name of this option.  Pass it in to configure via LDFLAGS, like this:
<br>
<p>./configure LDFLAGS=-Bstatic-intel ...other-configure-options...
<br>
<p>Also, as Mac noted, if you --disable-shared / --enable-static, then all of OMPI s built statically with no shared libraries, which should (as Mac confirms) also remove the dependency at run time on the intel shared libraries.
<br>
<p><span class="quotelev1">&gt; As for the issue that environment variables set in a script do not 
</span><br>
<span class="quotelev1">&gt; propagate to remote slave nodes, I use rsh connection for 
</span><br>
<span class="quotelev1">&gt; simplicity. If I set PATH and LD_LIBRARY_PATH in ~/.bashrc 
</span><br>
<span class="quotelev1">&gt; (which shared by all nodes, master or slave), my MPI application 
</span><br>
<span class="quotelev1">&gt; does work as expected, and this confirms Ralph's suggestions. 
</span><br>
<span class="quotelev1">&gt; The thing is that I just want to avoid set the environment variables in 
</span><br>
<span class="quotelev1">&gt; .bashrc or .porfile file, but instead, set them in the script, and want 
</span><br>
<span class="quotelev1">&gt; these environment variables propagating to other slave nodes 
</span><br>
<span class="quotelev1">&gt; when I do mpirun, as I could do for MPICH. I also try use the prefix 
</span><br>
<span class="quotelev1">&gt; path before mpirun when I do mpirun, as suggested by Jeff, it does 
</span><br>
<span class="quotelev1">&gt; not work either. Any hints to solve this issue?
</span><br>
<p>The prefix method for Open MPI will set the PATH and LD_LIBRARY_PATH on remote nodes only; it won't propagate arbitrary environment variables to the remote nodes.
<br>
<p>For propagating arbitrary environment variables, use mpirun's -x option.  See mpirun(1).  Let us know if that works for you.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15988.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent	to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15986.php">Dmitry N. Mikushin: "[OMPI users] OpenMPI-PGI: /usr/bin/ld: Warning: size of symbol `#' changed from # in #.o to # in #.so"</a>
<li><strong>In reply to:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16316.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
