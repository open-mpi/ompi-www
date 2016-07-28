<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:30:09 2010" -->
<!-- isoreceived="20101129213009" -->
<!-- sent="Mon, 29 Nov 2010 16:29:59 -0500" -->
<!-- isosent="20101129212959" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express" -->
<!-- id="4CF41B57.5030206_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTimnQ7eRrXWEs2Xk0fY385xzQX2dm3fQKsg+gqpc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:29:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nehemiah
<br>
<p>Hard to tell, I never tried Sun/Oracle Studio compilers.
<br>
However, the Intel compilers, for instance, require you to setup
<br>
environment variables that include PATH and LD_LIBRARY_PATH at least.
<br>
Would this be the case with Sun Studio?
<br>
Do you have its full environment set?
<br>
<p>As for the error message,
<br>
indeed, &quot;man ld&quot; doesn't show &quot;-path&quot; as a possible option.
<br>
Would this be a &quot;Solaris thing&quot;, perhaps an option
<br>
to the Solaris linker?
<br>
<p>For what it is worth, OpenMPI compiles with gcc,g++ and gfortran,
<br>
which may be a workaround for you, if you want to stick to free compilers.
<br>
Likewise, it also compiles with Open64 compilers, although later
<br>
on I had trouble with the Open64 Fortran compiler (not to compile 
<br>
OpenMPI, but MPI applications).
<br>
Do you have any specific requirement for Sun/Oracle software?
<br>
<p>OpenMPI also compiles with Intel and PGI compilers,
<br>
but those aren't free.
<br>
<p>Finally, make sure you are passing the Sun compilers to the OpenMPI
<br>
configure script correctly.
<br>
Somehow your warning messages are labeled &quot;f90&quot;, not &quot;sunf90&quot; as I
<br>
would expect, but this may be just the way Sun decided to spell their
<br>
own error messages.
<br>
<p>If you are in Rocks, better install the compilers in /share/apps,
<br>
not in /opt as it is now.
<br>
That will make the Sun compilers and their possible shared libraries 
<br>
available to all nodes.
<br>
/share/apps is the right place to install mostly anything that doesn't
<br>
come in the Rocks/CentOS distribution.
<br>
<p>Good luck,
<br>
Gus Correa
<br>
<p><p>Nehemiah Dacres wrote:
<br>
<span class="quotelev1">&gt; it may have been that  I didn't set ld_library_path
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 29, 2010 at 2:36 PM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thank you, you have been doubly helpful, but I am having linking errors and
</span><br>
<span class="quotelev2">&gt;&gt; I do not know what the solaris studio compiler's preferred linker is. The
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the configure statement was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/state/partition1/apps/sunmpi/ --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --with-sge --enable-static --enable-sparse-groups
</span><br>
<span class="quotelev2">&gt;&gt; CC=/opt/oracle/solstudio12.2/bin/suncc
</span><br>
<span class="quotelev2">&gt;&gt; CXX=/opt/oracle/solstudio12.2/bin/sunCC
</span><br>
<span class="quotelev2">&gt;&gt; F77=/opt/oracle/solstudio12.2/bin/sunf77
</span><br>
<span class="quotelev2">&gt;&gt; FC=/opt/oracle/solstudio12.2/bin/sunf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    compile statement was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make all install 2&gt;errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     error below is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt; otherwise
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev2">&gt;&gt; make[4]: *** [libmpi_f90.la] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; am I doing this wrong? are any of those configure flags unnecessary or
</span><br>
<span class="quotelev2">&gt;&gt; inappropriate
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nehemiah Dacres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to compile openmpi to work with the solaris studio express  or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solaris studio. This is a different version than is installed on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rockscluster 5.2  and would like to know if there any gotchas or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flags I should use to get it working or portable to nodes on the cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Software-wise,  it is a fairly homogeneous environment with only slight
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variations on the hardware side which could be isolated (machinefile flag
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and what-not)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please advise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Nehemiah
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just answered your email to the OpenMPI list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to add that if you build OpenMPI with Torque support,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machine file for each is not needed, it is provided by Torque.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I believe the same is true for SGE (but I don't use SGE).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt; System Administrator
</span><br>
<span class="quotelev2">&gt;&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Previous message:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14930.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
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
