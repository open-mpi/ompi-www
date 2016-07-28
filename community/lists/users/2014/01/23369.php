<?
$subject_val = "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 16 13:52:07 2014" -->
<!-- isoreceived="20140116185207" -->
<!-- sent="Thu, 16 Jan 2014 18:52:05 +0000" -->
<!-- isosent="20140116185205" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper" -->
<!-- id="4036183C-9945-4928-AA9A-50733F89F3BF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="877ga2axt9.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-16 13:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed --
<br>
<p>Yes, you're right.  This is something Brian bugged me about a few months ago, and I'm sorry to say that it hasn't bubbled up high enough in my priority list to look into yet.  :-\
<br>
<p>The issue is that we decided to stop building the MPI C++ bindings by default on the trunk (this does not, and will not, affect v1.7/v1.7 -- the C++ bindings are still built by default over there).  We need to decouple the decision to build the C++ bindings from setting up the C++ wrapper compiler, and that just hasn't been done yet.
<br>
<p>A workaround for now is to --enable-mpi-cxx, which will setup the MPI C++ bindings and setup the mpicxx wrapper compiler properly.
<br>
<p><p>On Jan 14, 2014, at 7:33 PM, Jed Brown &lt;jedbrown_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; With ompi-git from Monday (7e023a4ebf1aeaa530f79027d00c1bdc16b215fd),
</span><br>
<span class="quotelev1">&gt; configure is putting &quot;compiler=no&quot; in
</span><br>
<span class="quotelev1">&gt; ompi/tools/wrappers/mpic++-wrapper-data.txt:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # There can be multiple blocks of configuration data, chosen by
</span><br>
<span class="quotelev1">&gt; # compiler flags (using the compiler_args key to chose which block
</span><br>
<span class="quotelev1">&gt; # should be activated.  This can be useful for multilib builds.  See the
</span><br>
<span class="quotelev1">&gt; # multilib page at:
</span><br>
<span class="quotelev1">&gt; #    <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a> 
</span><br>
<span class="quotelev1">&gt; # for more information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; project=Open MPI
</span><br>
<span class="quotelev1">&gt; project_short=OMPI
</span><br>
<span class="quotelev1">&gt; version=1.9a1
</span><br>
<span class="quotelev1">&gt; language=C++
</span><br>
<span class="quotelev1">&gt; compiler_env=CXX
</span><br>
<span class="quotelev1">&gt; compiler_flags_env=CXXFLAGS
</span><br>
<span class="quotelev1">&gt; compiler=no
</span><br>
<span class="quotelev1">&gt; preprocessor_flags=   
</span><br>
<span class="quotelev1">&gt; compiler_flags_prefix=
</span><br>
<span class="quotelev1">&gt; compiler_flags=-pthread 
</span><br>
<span class="quotelev1">&gt; linker_flags= -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags
</span><br>
<span class="quotelev1">&gt; # Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
</span><br>
<span class="quotelev1">&gt; # intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
</span><br>
<span class="quotelev1">&gt; # pulled in implicitly) because we intend MPI applications to only use
</span><br>
<span class="quotelev1">&gt; # the MPI API.
</span><br>
<span class="quotelev1">&gt; libs= -lmpi
</span><br>
<span class="quotelev1">&gt; libs_static= -lmpi -lopen-rte -lopen-pal -lm -lnuma -lpciaccess -ldl 
</span><br>
<span class="quotelev1">&gt; dyn_lib_file=libmpi.so
</span><br>
<span class="quotelev1">&gt; static_lib_file=libmpi.a
</span><br>
<span class="quotelev1">&gt; required_file=
</span><br>
<span class="quotelev1">&gt; includedir=${includedir}
</span><br>
<span class="quotelev1">&gt; libdir=${libdir}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This breaks the wrapper:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ /path/to/mpic++
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The Open MPI wrapper compiler was unable to find the specified compiler
</span><br>
<span class="quotelev1">&gt; no in your PATH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this compiler was either specified at configure time or in
</span><br>
<span class="quotelev1">&gt; one of several possible environment variables.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attaching logs because it's not obvious to me what is going wrong.
</span><br>
<span class="quotelev1">&gt; Automake-1.14.1 and autoconf-2.69.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.xz&gt;&lt;config.status.xz&gt;_______________________________________________
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23370.php">Saliya Ekanayake: "[OMPI users] How to use non-primitive types with Java binding"</a>
<li><strong>Previous message:</strong> <a href="23368.php">Christoph Niethammer: "Re: [OMPI users] Calling a variable from another processor"</a>
<li><strong>In reply to:</strong> <a href="23356.php">Jed Brown: "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
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
