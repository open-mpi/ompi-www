<?
$subject_val = "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 16:16:44 2010" -->
<!-- isoreceived="20101129211644" -->
<!-- sent="Mon, 29 Nov 2010 16:16:33 -0500" -->
<!-- isosent="20101129211633" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express" -->
<!-- id="4CF41831.7090500_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF4176B.7030409_at_ias.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 16:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14923.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem looks a lot like a thread from earlier today.  Can you look 
<br>
at this
<br>
ticket and see if it helps?  It has a workaround documented in it.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2632">https://svn.open-mpi.org/trac/ompi/ticket/2632</a>
<br>
<p>Rolf
<br>
<p>On 11/29/10 16:13, Prentice Bisbal wrote:
<br>
<span class="quotelev1">&gt; No, it looks like ld is being called with the option -path, and your
</span><br>
<span class="quotelev1">&gt; linker doesn't use that switch. Grep you Makefile(s) for the string
</span><br>
<span class="quotelev1">&gt; &quot;-path&quot;. It's probably in a statement defining LDFLAGS somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you find it, replace it with the equivalent switch for your
</span><br>
<span class="quotelev1">&gt; compiler. You may be able to override it's value on the configure
</span><br>
<span class="quotelev1">&gt; command-line, which is usually easiest/best:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure LDFLAGS=&quot;-notpath ... ... ...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Prentice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nehemiah Dacres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; it may have been that  I didn't set ld_library_path
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Nov 29, 2010 at 2:36 PM, Nehemiah Dacres &lt;dacresni_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:dacresni_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     thank you, you have been doubly helpful, but I am having linking
</span><br>
<span class="quotelev2">&gt;&gt;     errors and I do not know what the solaris studio compiler's
</span><br>
<span class="quotelev2">&gt;&gt;     preferred linker is. The
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     the configure statement was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ./configure --prefix=/state/partition1/apps/sunmpi/
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-mpi-threads --with-sge --enable-static
</span><br>
<span class="quotelev2">&gt;&gt;     --enable-sparse-groups CC=/opt/oracle/solstudio12.2/bin/suncc
</span><br>
<span class="quotelev2">&gt;&gt;     CXX=/opt/oracle/solstudio12.2/bin/sunCC
</span><br>
<span class="quotelev2">&gt;&gt;     F77=/opt/oracle/solstudio12.2/bin/sunf77
</span><br>
<span class="quotelev2">&gt;&gt;     FC=/opt/oracle/solstudio12.2/bin/sunf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        compile statement was
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     make all install 2&gt;errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         error below is
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;     otherwise
</span><br>
<span class="quotelev2">&gt;&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;     otherwise
</span><br>
<span class="quotelev2">&gt;&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;     otherwise
</span><br>
<span class="quotelev2">&gt;&gt;     f90: Warning: Option -path passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;     otherwise
</span><br>
<span class="quotelev2">&gt;&gt;     f90: Warning: Option -soname passed to ld, if ld is invoked, ignored
</span><br>
<span class="quotelev2">&gt;&gt;     otherwise
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/bin/ld: unrecognized option '-path'
</span><br>
<span class="quotelev2">&gt;&gt;     /usr/bin/ld: use the --help option for usage information
</span><br>
<span class="quotelev2">&gt;&gt;     make[4]: *** [libmpi_f90.la &lt;<a href="http://libmpi_f90.la">http://libmpi_f90.la</a>&gt;] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;     make[3]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;     make[2]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt;&gt;     make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;     make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     am I doing this wrong? are any of those configure flags unnecessary
</span><br>
<span class="quotelev2">&gt;&gt;     or inappropriate
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Nov 29, 2010 at 2:06 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Nehemiah Dacres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I want to compile openmpi to work with the solaris studio
</span><br>
<span class="quotelev2">&gt;&gt;             express  or
</span><br>
<span class="quotelev2">&gt;&gt;             solaris studio. This is a different version than is installed on
</span><br>
<span class="quotelev2">&gt;&gt;             rockscluster 5.2  and would like to know if there any
</span><br>
<span class="quotelev2">&gt;&gt;             gotchas or configure
</span><br>
<span class="quotelev2">&gt;&gt;             flags I should use to get it working or portable to nodes on
</span><br>
<span class="quotelev2">&gt;&gt;             the cluster.
</span><br>
<span class="quotelev2">&gt;&gt;             Software-wise,  it is a fairly homogeneous environment with
</span><br>
<span class="quotelev2">&gt;&gt;             only slight
</span><br>
<span class="quotelev2">&gt;&gt;             variations on the hardware side which could be isolated
</span><br>
<span class="quotelev2">&gt;&gt;             (machinefile flag
</span><br>
<span class="quotelev2">&gt;&gt;             and what-not)
</span><br>
<span class="quotelev2">&gt;&gt;             Please advise
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi Nehemiah
</span><br>
<span class="quotelev2">&gt;&gt;         I just answered your email to the OpenMPI list.
</span><br>
<span class="quotelev2">&gt;&gt;         I want to add that if you build OpenMPI with Torque support,
</span><br>
<span class="quotelev2">&gt;&gt;         the machine file for each is not needed, it is provided by Torque.
</span><br>
<span class="quotelev2">&gt;&gt;         I believe the same is true for SGE (but I don't use SGE).
</span><br>
<span class="quotelev2">&gt;&gt;         Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     Nehemiah I. Dacres
</span><br>
<span class="quotelev2">&gt;&gt;     System Administrator 
</span><br>
<span class="quotelev2">&gt;&gt;     Advanced Technology Group Saint Louis University
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14922/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14923.php">Jeff Squyres: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<li><strong>In reply to:</strong> <a href="14921.php">Prentice Bisbal: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris	studio express"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
<li><strong>Reply:</strong> <a href="14926.php">Nehemiah Dacres: "Re: [OMPI users] [Rocks-Discuss] compiling Openmpi on solaris studio express"</a>
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
