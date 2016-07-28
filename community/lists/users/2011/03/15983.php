<?
$subject_val = "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 24 14:52:38 2011" -->
<!-- isoreceived="20110324185238" -->
<!-- sent="Thu, 24 Mar 2011 12:52:29 -0600" -->
<!-- isosent="20110324185229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3" -->
<!-- id="FA6E8002-7130-4695-AB29-1784BC9EFEF0_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-24 14:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15985.php">McCalla, Mac: "Re: [OMPI users] intel compiler linking issue and issue ofenvironment variable on remote node, with open mpi 1.4.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 24, 2011, at 12:45 PM, yanyg_at_[hidden] wrote:
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
<p>I can't speak to this one, but perhaps Jeff can/will.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the issue that environment variables set in a script do not 
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
<p>You can use the -x option to mpirun:
<br>
<p>mpirun -x PATH -x LD_LIBRARY_PATH ...
<br>
<p>will pickup those envars and forward them. See &quot;mpirun -h&quot; for more info.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Yiguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 23 Mar 2011, at 12:00, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2011, at 8:21 AM, yanyg_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue is that I am trying to build open mpi 1.4.3 with intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler libraries statically linked to it, so that when we run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun/orterun, it does not need to dynamically load any intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries. But what I got is mpirun always asks for some intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library(e.g. libsvml.so) if I do not put intel library path on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; library search path($LD_LIBRARY_PATH). I checked the open mpi user
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive, it seems only some kind user mentioned to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;-i-static&quot;(in my case) or &quot;-static-intel&quot; in ldflags, this is what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I did, but it seems not working, and I did not get any confirmation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether or not this works for anyone else from the user archive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could anyone help me on this? thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is it Open MPI's executables that require the intel shared libraries
</span><br>
<span class="quotelev2">&gt;&gt; at run time, or your application?  Keep in mind the difference:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. Compile/link flags that you specify to OMPI's configure script are
</span><br>
<span class="quotelev2">&gt;&gt; used to compile/link Open MPI itself (including executables such as
</span><br>
<span class="quotelev2">&gt;&gt; mpirun).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. mpicc (and friends) use a similar-but-different set of flags to
</span><br>
<span class="quotelev2">&gt;&gt; compile and link MPI applications.  Specifically, we try to use the
</span><br>
<span class="quotelev2">&gt;&gt; minimal set of flags necessary to compile/link, and let the user
</span><br>
<span class="quotelev2">&gt;&gt; choose to add more flags if they want to.  See this FAQ entry for more
</span><br>
<span class="quotelev2">&gt;&gt; details:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-a">http://www.open-mpi.org/faq/?category=mpi-apps#override-wrappers-a</a>
</span><br>
<span class="quotelev2">&gt;&gt;    fter -v1.0
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (2) After compiling and linking our in-house codes  with open mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.4.3, we want to make a minimal list of executables for our codes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with some from open mpi 1.4.3 installation, without any dependent on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; external setting such as environment variables, etc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I orgnize my directory as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parent---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		package
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		|
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		bin  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		|
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		|
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In package/ directory are executables from our codes. bin/ has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun and orted, copied from openmpi installation. lib/ includes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open mpi libraries, and intel libraries. tools/ includes some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c-shell scripts to launch mpi jobs, which uses mpirun in bin/.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, you can use the following OMPI options to configure to eliminate
</span><br>
<span class="quotelev2">&gt;&gt; all the OMPI plugins (i.e., locate all that code up in libmpi and
</span><br>
<span class="quotelev2">&gt;&gt; friends, vs. being standalone-DSOs):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will make libmpi.a (vs. libmpi.so and a bunch of plugins) which
</span><br>
<span class="quotelev2">&gt;&gt; your application can statically link against.  But it does make a
</span><br>
<span class="quotelev2">&gt;&gt; larger executable.  Alternatively, you can:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    --disable-dlopen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (instead of disable-shared/enable-static) which will make a giant
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so (vs. libmpi.so and all the plugin DSOs).  So your MPI app
</span><br>
<span class="quotelev2">&gt;&gt; will still dynamically link against libmpi, but all the plugins will
</span><br>
<span class="quotelev2">&gt;&gt; be physically located in libmpi.so vs. being dlopen'ed at run time.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The parent/ directory is on a NFS shared by all nodes of the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster. In ~/.bashrc(shared by all nodes too), I clear PATH and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH without direct to any directory of open mpi 1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installation. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, if I set above bin/ directory  to PATH and lib/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH in ~/.bashrc, our parallel codes(starting by the C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell script in tools/) run AS EXPECTED without any problem, so that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I set other things right.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then again, to avoid modifying ~/.bashrc or ~/.profile, I set bin/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to PATH and lib/ to LD_LIBRARY_PATH in the C shell script under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tools/ directory, as:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv PATH /path/to/bin:$PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv LD_LIBRARY_PATH /path/to/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Instead, you might want to try:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   /path/to/mpirun ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; which will do the same thing as mpirun's --prefix option (see
</span><br>
<span class="quotelev2">&gt;&gt; mpirun(1) for details here), and/or use the
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-prefix-by-default configure option.  This option, as is
</span><br>
<span class="quotelev2">&gt;&gt; probably pretty obvious :-), makes mpirun behave as if the --prefix
</span><br>
<span class="quotelev2">&gt;&gt; option was specified on the command line, with an argument equal to
</span><br>
<span class="quotelev2">&gt;&gt; the $prefix from configure.
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15984.php">Ralph Castain: "Re: [OMPI users] keyval parser: error 1 reading	file	mpicc-wrapper-data.txt"</a>
<li><strong>Previous message:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15982.php">yanyg_at_[hidden]: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15985.php">McCalla, Mac: "Re: [OMPI users] intel compiler linking issue and issue ofenvironment variable on remote node, with open mpi 1.4.3"</a>
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
