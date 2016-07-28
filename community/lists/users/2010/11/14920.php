<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 15:48:08 2010" -->
<!-- isoreceived="20101129204808" -->
<!-- sent="Mon, 29 Nov 2010 14:47:57 -0600" -->
<!-- isosent="20101129204757" -->
<!-- name="Nehemiah Dacres" -->
<!-- email="dacresni_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express" -->
<!-- id="AANLkTimnQ7eRrXWEs2Xk0fY385xzQX2dm3fQKsg+gqpc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikqLvrcZG8SwgOZh6ZH+54va3ta7eEXJsbP96GG_at_mail.gmail.com" -->
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
<strong>From:</strong> Nehemiah Dacres (<em>dacresni_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 15:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Previous message:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
it may have been that  I didn't set ld_library_path
<br>
<p>On Mon, Nov 29, 2010 at 2:36 PM, Nehemiah Dacres &lt;dacresni_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; thank you, you have been doubly helpful, but I am having linking errors and
</span><br>
<span class="quotelev1">&gt; I do not know what the solaris studio compiler's preferred linker is. The
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the configure statement was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/state/partition1/apps/sunmpi/ --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt; --with-sge --enable-static --enable-sparse-groups
</span><br>
<span class="quotelev1">&gt; CC=/opt/oracle/solstudio12.2/bin/suncc
</span><br>
<span class="quotelev1">&gt; CXX=/opt/oracle/solstudio12.2/bin/sunCC
</span><br>
<span class="quotelev1">&gt; F77=/opt/oracle/solstudio12.2/bin/sunf77
</span><br>
<span class="quotelev1">&gt; FC=/opt/oracle/solstudio12.2/bin/sunf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    compile statement was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make all install 2&gt;errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     error below is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; am I doing this wrong? are any of those configure flags unnecessary or
</span><br>
<span class="quotelev1">&gt; inappropriate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to compile openmpi to work with the solaris studio express  or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; solaris studio. This is a different version than is installed on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rockscluster 5.2  and would like to know if there any gotchas or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; flags I should use to get it working or portable to nodes on the cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Software-wise,  it is a fairly homogeneous environment with only slight
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variations on the hardware side which could be isolated (machinefile flag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and what-not)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please advise
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nehemiah
</span><br>
<span class="quotelev2">&gt;&gt; I just answered your email to the OpenMPI list.
</span><br>
<span class="quotelev2">&gt;&gt; I want to add that if you build OpenMPI with Torque support,
</span><br>
<span class="quotelev2">&gt;&gt; the machine file for each is not needed, it is provided by Torque.
</span><br>
<span class="quotelev2">&gt;&gt; I believe the same is true for SGE (but I don't use SGE).
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nehemiah I. Dacres
</span><br>
<span class="quotelev1">&gt; System Administrator
</span><br>
<span class="quotelev1">&gt; Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Nehemiah I. Dacres
System Administrator
Advanced Technology Group Saint Louis University
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Previous message:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>In reply to:</strong> <a href="14919.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>Reply:</strong> <a href="14927.php">Gus Correa: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
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
