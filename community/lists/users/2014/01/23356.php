<?
$subject_val = "[OMPI users] CXX=no in config.status, breaks mpic++ wrapper";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 14 20:48:16 2014" -->
<!-- isoreceived="20140115014816" -->
<!-- sent="Tue, 14 Jan 2014 19:33:22 -0500" -->
<!-- isosent="20140115003322" -->
<!-- name="Jed Brown" -->
<!-- email="jedbrown_at_[hidden]" -->
<!-- subject="[OMPI users] CXX=no in config.status, breaks mpic++ wrapper" -->
<!-- id="877ga2axt9.fsf_at_jedbrown.org" -->
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
<strong>Subject:</strong> [OMPI users] CXX=no in config.status, breaks mpic++ wrapper<br>
<strong>From:</strong> Jed Brown (<em>jedbrown_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-14 19:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23357.php">Siegmar Gross: "[OMPI users] report for openmpi-1.9a1r30290"</a>
<li><strong>Previous message:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Reply:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With ompi-git from Monday (7e023a4ebf1aeaa530f79027d00c1bdc16b215fd),
<br>
configure is putting &quot;compiler=no&quot; in
<br>
ompi/tools/wrappers/mpic++-wrapper-data.txt:
<br>
<p># There can be multiple blocks of configuration data, chosen by
<br>
# compiler flags (using the compiler_args key to chose which block
<br>
# should be activated.  This can be useful for multilib builds.  See the
<br>
# multilib page at:
<br>
#    <a href="https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264">https://svn.open-mpi.org/trac/ompi/wiki/compilerwrapper3264</a> 
<br>
# for more information.
<br>
<p>project=Open MPI
<br>
project_short=OMPI
<br>
version=1.9a1
<br>
language=C++
<br>
compiler_env=CXX
<br>
compiler_flags_env=CXXFLAGS
<br>
compiler=no
<br>
preprocessor_flags=   
<br>
compiler_flags_prefix=
<br>
compiler_flags=-pthread 
<br>
linker_flags= -Wl,-rpath -Wl,@{libdir} -Wl,--enable-new-dtags
<br>
# Note that per <a href="https://svn.open-mpi.org/trac/ompi/ticket/3422">https://svn.open-mpi.org/trac/ompi/ticket/3422</a>, we
<br>
# intentionally only link in the MPI libraries (ORTE, OPAL, etc. are
<br>
# pulled in implicitly) because we intend MPI applications to only use
<br>
# the MPI API.
<br>
libs= -lmpi
<br>
libs_static= -lmpi -lopen-rte -lopen-pal -lm -lnuma -lpciaccess -ldl 
<br>
dyn_lib_file=libmpi.so
<br>
static_lib_file=libmpi.a
<br>
required_file=
<br>
includedir=${includedir}
<br>
libdir=${libdir}
<br>
<p><p>This breaks the wrapper:
<br>
<p>$ /path/to/mpic++
<br>
--------------------------------------------------------------------------
<br>
The Open MPI wrapper compiler was unable to find the specified compiler
<br>
no in your PATH.
<br>
<p>Note that this compiler was either specified at configure time or in
<br>
one of several possible environment variables.
<br>
--------------------------------------------------------------------------
<br>
<p><p>Attaching logs because it's not obvious to me what is going wrong.
<br>
Automake-1.14.1 and autoconf-2.69.
<br>
<p><p>

<br><p>
<p>
<br><hr>
<ul>
<li>application/x-xz attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23356/config.log.xz">config.log.xz</a>
</ul>
<!-- attachment="config.log.xz" -->
<hr>
<ul>
<li>application/x-xz attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23356/config.status.xz">config.status.xz</a>
</ul>
<!-- attachment="config.status.xz" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23356/03-part">stored</a>
</ul>
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23357.php">Siegmar Gross: "[OMPI users] report for openmpi-1.9a1r30290"</a>
<li><strong>Previous message:</strong> <a href="23355.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] OpenMPI with dual port Myrinet cards"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
<li><strong>Reply:</strong> <a href="23369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] CXX=no in config.status, breaks mpic++ wrapper"</a>
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
