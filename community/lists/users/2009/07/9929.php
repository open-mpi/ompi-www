<?
$subject_val = "Re: [OMPI users] Help: HPL Compile Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 08:34:41 2009" -->
<!-- isoreceived="20090712123441" -->
<!-- sent="Sun, 12 Jul 2009 20:34:36 +0800" -->
<!-- isosent="20090712123436" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: HPL Compile Problems" -->
<!-- id="289665360907120534w115ef24fwa4d06e67ee14e7c2_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A59D36A.30001_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: HPL Compile Problems<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 08:34:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Jul 12, 2009 at 8:13 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can ignore MP... if you set the compiler and linker to mpicc. In my
</span><br>
<span class="quotelev1">&gt; makefile for hpl I have
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - MPI directories - library ------------------------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # MPinc tells the &#160;C &#160;compiler where to find the Message Passing library
</span><br>
<span class="quotelev1">&gt; # header files, &#160;MPlib &#160;is defined &#160;to be the name of &#160;the library to be
</span><br>
<span class="quotelev1">&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; MPdir &#160; &#160; &#160; &#160;=
</span><br>
<span class="quotelev1">&gt; MPinc &#160; &#160; &#160; &#160;=
</span><br>
<span class="quotelev1">&gt; MPlib &#160; &#160; &#160; &#160;=
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # - Compilers / linkers - Optimization flags ---------------------------
</span><br>
<span class="quotelev1">&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; CC &#160; &#160; &#160; &#160; &#160; = $(HOME)/openmpi-1.3.2/bin/mpicc
</span><br>
<span class="quotelev1">&gt; CCNOOPT &#160; &#160; &#160;= $(HPL_DEFS)
</span><br>
<span class="quotelev1">&gt; CCFLAGS &#160; &#160; &#160;= $(HPL_DEFS) -fomit-frame-pointer -O3 -funroll-loops -W -Wall
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; LINKER &#160; &#160; &#160; = $(HOME)/openmpi-1.3.2/bin/mpicc
</span><br>
<span class="quotelev1">&gt; LINKFLAGS &#160; &#160;= $(CCFLAGS)
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ARCHIVER &#160; &#160; = ar
</span><br>
<span class="quotelev1">&gt; ARFLAGS &#160; &#160; &#160;= r
</span><br>
<span class="quotelev1">&gt; RANLIB &#160; &#160; &#160; = echo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpicc wrapper will take care of including the correct libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lee Amy wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use OpenMPI 1.3.2 and HPL-2.0 to measure clusters performance.
</span><br>
<span class="quotelev2">&gt;&gt; However I encountered a problem when I compile the HPL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how to fill up the MPlib variable item because the
</span><br>
<span class="quotelev2">&gt;&gt; default value is $(MPdir)/lib/libmpich.a. Obviously I have to choose a
</span><br>
<span class="quotelev2">&gt;&gt; file from OpenMPI to replace it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # - Message Passing library (MPI) --------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # MPinc tells the &#160;C &#160;compiler where to find the Message Passing library
</span><br>
<span class="quotelev2">&gt;&gt; # header files, &#160;MPlib &#160;is defined &#160;to be the name of &#160;the library to be
</span><br>
<span class="quotelev2">&gt;&gt; # used. The variable MPdir is only used for defining MPinc and MPlib.
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; MPdir &#160; &#160; &#160; &#160;= /usr/local/openmpi
</span><br>
<span class="quotelev2">&gt;&gt; MPinc &#160; &#160; &#160; &#160;= -I$(MPdir)/include
</span><br>
<span class="quotelev2">&gt;&gt; MPlib &#160; &#160; &#160; &#160;= $(MPdir)/lib/libmpich.a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could anyone tell me how to fix that problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Amy Lee
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
Thanks. Your solution is great. And I found that if I use libmpi.so
<br>
HPL could also compile well.
<br>
<p>Regards,
<br>
<p>Amy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9930.php">Klymak Jody: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<li><strong>Previous message:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>In reply to:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
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
