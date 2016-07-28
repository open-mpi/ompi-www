<?
$subject_val = "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 10:29:48 2014" -->
<!-- isoreceived="20140826142948" -->
<!-- sent="Tue, 26 Aug 2014 14:29:47 +0000" -->
<!-- isosent="20140826142947" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5" -->
<!-- id="424675BF-044C-4A0A-BEBC-AF5167F2BC3B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E876DEF4-FFF2-48F1-8159-E8C96F4DCCEF_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 10:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25150.php">Ralph Castain: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>In reply to:</strong> <a href="25150.php">Ralph Castain: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Reply:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to elaborate: as the error message implies, this error message was put there specifically to ensure that the Fortran compiler works before continuing any further.  If the Fortran compiler is busted, configure exits with this help message.
<br>
<p>You can either fix your Fortran compiler, or use --disable-mpi-fortran to disable all Fortran support from Open MPI (and therefore this &quot;test whether the Fortran compiler works&quot; test will be skipped).
<br>
<p>Here's the specific log section showing the failure:
<br>
<p>-----
<br>
configure:32389: checking if Fortran compiler works
<br>
configure:32418: gfortran -o conftest    conftest.f  &gt;&amp;5
<br>
configure:32418: $? = 0
<br>
configure:32418: ./conftest
<br>
./conftest: error while loading shared libraries: libquadmath.so.0: wrong ELF class: ELFCLASS32
<br>
configure:32418: $? = 127
<br>
configure: program exited with status 127
<br>
configure: failed program was:
<br>
|       program main
<br>
|
<br>
|       end
<br>
configure:32434: result: no
<br>
configure:32448: error: Could not run a simple Fortran program.  Aborting.
<br>
-----
<br>
<p><p>On Aug 26, 2014, at 10:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Looks like there is something wrong with your gfortran install:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Fortran compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking whether ln -s works... yes
</span><br>
<span class="quotelev1">&gt; checking if Fortran compiler works... no
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; * It appears that your Fortran compiler is unable to produce working
</span><br>
<span class="quotelev1">&gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev1">&gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev1">&gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev1">&gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev1">&gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev1">&gt; * available in the config.log file in the Open MPI build directory.
</span><br>
<span class="quotelev1">&gt; **********************************************************************
</span><br>
<span class="quotelev1">&gt; configure: error: Could not run a simple Fortran program.  Aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I can compile and run on my CentOS6.5 system just fine. I have gfortran 4.4.7 installed on it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2014, at 2:59 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have problems in compilation of openmpi-1.8.1 on Linux machine. Kindly see the logs attached.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;configure.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25147.php">http://www.open-mpi.org/community/lists/users/2014/08/25147.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25150.php">http://www.open-mpi.org/community/lists/users/2014/08/25150.php</a>
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
<li><strong>Next message:</strong> <a href="25152.php">Benjamin Giehle: "[OMPI users] OpenMPI Remote Execution Problem (Application does not start)"</a>
<li><strong>Previous message:</strong> <a href="25150.php">Ralph Castain: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>In reply to:</strong> <a href="25150.php">Ralph Castain: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<li><strong>Reply:</strong> <a href="25156.php">Syed Ahsan Ali: "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
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
