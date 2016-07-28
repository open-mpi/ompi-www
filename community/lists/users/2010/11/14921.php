<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:13:20 2010" -->
<!-- isoreceived="20101129211320" -->
<!-- sent="Mon, 29 Nov 2010 16:13:15 -0500" -->
<!-- isosent="20101129211315" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express" -->
<!-- id="4CF4176B.7030409_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Previous message:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, it looks like ld is being called with the option -path, and your
<br>
linker doesn't use that switch. Grep you Makefile(s) for the string
<br>
&quot;-path&quot;. It's probably in a statement defining LDFLAGS somewhere.
<br>
<p>When you find it, replace it with the equivalent switch for your
<br>
compiler. You may be able to override it's value on the configure
<br>
command-line, which is usually easiest/best:
<br>
<p>./configure LDFLAGS=&quot;-notpath ... ... ...&quot;
<br>
<p><pre>
--
Prentice
Nehemiah Dacres wrote:
&gt; it may have been that  I didn't set ld_library_path
&gt; 
&gt; On Mon, Nov 29, 2010 at 2:36 PM, Nehemiah Dacres &lt;dacresni_at_[hidden]
&gt; &lt;mailto:dacresni_at_[hidden]&gt;&gt; wrote:
&gt; 
&gt;     thank you, you have been doubly helpful, but I am having linking
&gt;     errors and I do not know what the solaris studio compiler's
&gt;     preferred linker is. The
&gt; 
&gt;     the configure statement was
&gt; 
&gt;     ./configure --prefix=/state/partition1/apps/sunmpi/
&gt;     --enable-mpi-threads --with-sge --enable-static
&gt;     --enable-sparse-groups CC=/opt/oracle/solstudio12.2/bin/suncc
&gt;     CXX=/opt/oracle/solstudio12.2/bin/sunCC
&gt;     F77=/opt/oracle/solstudio12.2/bin/sunf77
&gt;     FC=/opt/oracle/solstudio12.2/bin/sunf90
&gt; 
&gt;        compile statement was
&gt; 
&gt;     make all install 2&gt;errors
&gt; 
&gt; 
&gt;         error below is
&gt; 
&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
&gt;     otherwise
&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
&gt;     otherwise
&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
&gt;     otherwise
&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
&gt;     otherwise
&gt;     f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
&gt;     otherwise
&gt;     /usr/bin/ld: unrecognized option '-path'
&gt;     /usr/bin/ld: use the --help option for usage information
&gt;     make[4]: *** [libmpi_f90.la &lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt;] Error 2
&gt;     make[3]: *** [all-recursive] Error 1
&gt;     make[2]: *** [all] Error 2
&gt;     make[1]: *** [all-recursive] Error 1
&gt;     make: *** [all-recursive] Error 1
&gt; 
&gt;     am I doing this wrong? are any of those configure flags unnecessary
&gt;     or inappropriate
&gt; 
&gt; 
&gt; 
&gt;     On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa &lt;gus_at_[hidden]
&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
&gt; 
&gt;         Nehemiah Dacres wrote:
&gt; 
&gt;             I want to compile openmpi to work with the solaris studio
&gt;             express  or
&gt;             solaris studio. This is a different version than is installed on
&gt;             rockscluster 5.2  and would like to know if there any
&gt;             gotchas or configure
&gt;             flags I should use to get it working or portable to nodes on
&gt;             the cluster.
&gt;             Software-wise,  it is a fairly homogeneous environment with
&gt;             only slight
&gt;             variations on the hardware side which could be isolated
&gt;             (machinefile flag
&gt;             and what-not)
&gt;             Please advise
&gt; 
&gt; 
&gt;         Hi Nehemiah
&gt;         I just answered your email to the OpenMPI list.
&gt;         I want to add that if you build OpenMPI with Torque support,
&gt;         the machine file for each is not needed, it is provided by Torque.
&gt;         I believe the same is true for SGE (but I don't use SGE).
&gt;         Gus Correa
&gt; 
&gt; 
&gt; 
&gt; 
&gt;     -- 
&gt;     Nehemiah I. Dacres
&gt;     System Administrator 
&gt;     Advanced Technology Group Saint Louis University
&gt; 
&gt; 
&gt; 
&gt; 
&gt; -- 
&gt; Nehemiah I. Dacres
&gt; System Administrator 
&gt; Advanced Technology Group Saint Louis University
&gt; 
&gt; 
&gt; ------------------------------------------------------------------------
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Previous message:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14920.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14922.php">Rolf vandeVaart: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
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
