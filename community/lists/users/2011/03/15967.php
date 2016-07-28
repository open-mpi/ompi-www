<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 13:43:46 2011" -->
<!-- isoreceived="20110322174346" -->
<!-- sent="Tue, 22 Mar 2011 13:43:21 -0400" -->
<!-- isosent="20110322174321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="7040E9B0-4A8F-402C-9AB7-FAC98A377FD6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D870AA2.23623.7B2A2DCA_at_localhost" -->
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
<strong>Date:</strong> 2011-03-22 13:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15968.php">Abdul Rahman Riza: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15966.php">Prentice Bisbal: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 21, 2011, at 8:21 AM, yanyg_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; The issue is that I am trying to build open mpi 1.4.3 with intel 
</span><br>
<span class="quotelev1">&gt; compiler libraries statically linked to it, so that when we run 
</span><br>
<span class="quotelev1">&gt; mpirun/orterun, it does not need to dynamically load any intel 
</span><br>
<span class="quotelev1">&gt; libraries. But what I got is mpirun always asks for some intel 
</span><br>
<span class="quotelev1">&gt; library(e.g. libsvml.so) if I do not put intel library path on library 
</span><br>
<span class="quotelev1">&gt; search path($LD_LIBRARY_PATH). I checked the open mpi user 
</span><br>
<span class="quotelev1">&gt; archive, it seems only some kind user mentioned to use
</span><br>
<span class="quotelev1">&gt; &quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what I did,
</span><br>
<span class="quotelev1">&gt; but it seems not working, and I did not get any confirmation whether 
</span><br>
<span class="quotelev1">&gt; or not this works for anyone else from the user archive. could 
</span><br>
<span class="quotelev1">&gt; anyone help me on this? thanks!
</span><br>
<p>Is it Open MPI's executables that require the intel shared libraries at run time, or your application?  Keep in mind the difference:
<br>
<p>1. Compile/link flags that you specify to OMPI's configure script are used to compile/link Open MPI itself (including executables such as mpirun).
<br>
<p>2. mpicc (and friends) use a similar-but-different set of flags to compile and link MPI applications.  Specifically, we try to use the minimal set of flags necessary to compile/link, and let the user choose to add more flags if they want to.  See this FAQ entry for more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-after-v1.0</a>
<br>
<p><span class="quotelev1">&gt; (2) After compiling and linking our in-house codes  with open mpi 
</span><br>
<span class="quotelev1">&gt; 1.4.3, we want to make a minimal list of executables for our codes 
</span><br>
<span class="quotelev1">&gt; with some from open mpi 1.4.3 installation, without any dependent 
</span><br>
<span class="quotelev1">&gt; on external setting such as environment variables, etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I orgnize my directory as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; parent---
</span><br>
<span class="quotelev1">&gt;            |
</span><br>
<span class="quotelev1">&gt; 		package
</span><br>
<span class="quotelev1">&gt; 		|
</span><br>
<span class="quotelev1">&gt;  		bin  
</span><br>
<span class="quotelev1">&gt; 		|
</span><br>
<span class="quotelev1">&gt; 		lib
</span><br>
<span class="quotelev1">&gt; 		|
</span><br>
<span class="quotelev1">&gt; 		tools
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In package/ directory are executables from our codes. bin/ has 
</span><br>
<span class="quotelev1">&gt; mpirun and orted, copied from openmpi installation. lib/ includes 
</span><br>
<span class="quotelev1">&gt; open mpi libraries, and intel libraries. tools/ includes some c-shell 
</span><br>
<span class="quotelev1">&gt; scripts to launch mpi jobs, which uses mpirun in bin/.
</span><br>
<p>FWIW, you can use the following OMPI options to configure to eliminate all the OMPI plugins (i.e., locate all that code up in libmpi and friends, vs. being standalone-DSOs):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--disable-shared --enable-static
<br>
<p>This will make libmpi.a (vs. libmpi.so and a bunch of plugins) which your application can statically link against.  But it does make a larger executable.  Alternatively, you can:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--disable-dlopen
<br>
<p>(instead of disable-shared/enable-static) which will make a giant libmpi.so (vs. libmpi.so and all the plugin DSOs).  So your MPI app will still dynamically link against libmpi, but all the plugins will be physically located in libmpi.so vs. being dlopen'ed at run time.
<br>
<p><span class="quotelev1">&gt; The parent/ directory is on a NFS shared by all nodes of the 
</span><br>
<span class="quotelev1">&gt; cluster. In ~/.bashrc(shared by all nodes too), I clear PATH and 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH without direct to any directory of open mpi 
</span><br>
<span class="quotelev1">&gt; 1.4.3 installation. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, if I set above bin/ directory  to PATH and lib/ 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH in ~/.bashrc, our parallel codes(starting by the 
</span><br>
<span class="quotelev1">&gt; C shell script in tools/) run AS EXPECTED without any problem, so 
</span><br>
<span class="quotelev1">&gt; that I set other things right.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then again, to avoid modifying ~/.bashrc or ~/.profile, I set bin/ to 
</span><br>
<span class="quotelev1">&gt; PATH and lib/ to LD_LIBRARY_PATH in the C shell script under 
</span><br>
<span class="quotelev1">&gt; tools/ directory, as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; setenv PATH /path/to/bin:$PATH
</span><br>
<span class="quotelev1">&gt; setenv LD_LIBRARY_PATH /path/to/lib:$LD_LIBRARY_PATH
</span><br>
<p>Instead, you might want to try:
<br>
<p>&nbsp;&nbsp;&nbsp;/path/to/mpirun ...
<br>
<p>which will do the same thing as mpirun's --prefix option (see mpirun(1) for details here), and/or use the --enable-mpi-prefix-by-default configure option.  This option, as is probably pretty obvious :-), makes mpirun behave as if the --prefix option was specified on the command line, with an argument equal to the $prefix from configure.
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
<li><strong>Next message:</strong> <a href="15968.php">Abdul Rahman Riza: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>Previous message:</strong> <a href="15966.php">Prentice Bisbal: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15922.php">yanyg_at_[hidden]: "[OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
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
