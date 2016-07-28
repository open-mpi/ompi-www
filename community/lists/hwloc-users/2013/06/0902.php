<?
$subject_val = "Re: [hwloc-users] Open-mpi + hwloc ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 06:52:00 2013" -->
<!-- isoreceived="20130621105200" -->
<!-- sent="Fri, 21 Jun 2013 12:51:51 +0200" -->
<!-- isosent="20130621105151" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Open-mpi + hwloc ..." -->
<!-- id="51C43047.30609_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDE9F041.19793%solibakk_at_himolde.no" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Open-mpi + hwloc ...<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 06:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/08/0903.php">Jeff Squyres (jsquyres): "[hwloc-users] Migrating www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Solibakke Per Bjarte: "[hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>In reply to:</strong> <a href="0901.php">Solibakke Per Bjarte: "[hwloc-users] Open-mpi + hwloc ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
hwloc can only tell where CPU/device are, and place programs on the
<br>
right CPUs. hwloc isn't going to convert your parallel program into a
<br>
GPU program. If you want to use NVIDIA GPUs, you have to rewrite your
<br>
program using CUDA, OpenCL, or a high-level heterogeneous langage.
<br>
Brice
<br>
<p><p><p>Le 21/06/2013 12:04, Solibakke Per Bjarte a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been using OPEN-MPI for several years now on 8-16 CPU/Core
</span><br>
<span class="quotelev1">&gt; machines. I want to extend the usage to graphic-card devices
</span><br>
<span class="quotelev1">&gt; (NVIDIA-cards). Therefore,  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use open-mpi implementation on x number of CPU&#180;s working well
</span><br>
<span class="quotelev1">&gt; (linux/ubuntu):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The CPU installation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) makefile look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC       = mpic++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SDIR     = ./
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMPI     = /usr/lib/openmpi/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LMPI     = /usr/lib/openmpi/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ISCL     = $(HOME)/applik-libscl/libscl/gpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LSCL     = $(HOME)/applik-libscl/libscl/gpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IDIRS    = -I. -I$(SDIR) -I$(IMPI) -I$(ISCL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LDIRS    = -L$(LMPI) -L$(LSCL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CFLAGS   = -O -Wall -c  $(IDIRS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LFLAGS   = $(LDIRS)  -lscl -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello : hello.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       $(CC) -o hello hello.o $(LFLAGS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hello.o : $(SDIR)/hello.cpp $(HEADERS)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       $(CC) $(CFLAGS) $(SDIR)/hello.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; clean :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rm -f *.o core core.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; veryclean   :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rm -f *.o core core.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       rm -f  hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) and I  simultaneously compile and execute with the  sh-file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo &quot;localhost cpu=24&quot; &gt; OpenMPIhosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test -f hello.err  &amp;&amp; mv -f hello.err  hello.err.bak
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; test -f hello.out  &amp;&amp; mv -f hello.out  hello.out.bak
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make -f makefile.mpi.OpenMPI_1.4 &gt;hello.out 2&gt;&amp;1 &amp;&amp; \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   mpirun --hostfile OpenMPIhosts ${PWD}/hello &gt;&gt;hello.out 2&gt;hello.err
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RC=$?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; case $RC in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   0) exit 0 ;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   esac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now some questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this parallel program (hello) be extended by also using Graphic
</span><br>
<span class="quotelev1">&gt; processors card (i.e. Nvidia-cards) using hwloc = internal in version 
</span><br>
<span class="quotelev1">&gt; Open-mpi 1.7.1 (installation).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If yes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any changes in makefiles? Execute-files? Program-files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Suggestions for implementations are appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The graphic card devices should be the extensions of a machine's CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PBSolibakke
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Professor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2013/08/0903.php">Jeff Squyres (jsquyres): "[hwloc-users] Migrating www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="0901.php">Solibakke Per Bjarte: "[hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>In reply to:</strong> <a href="0901.php">Solibakke Per Bjarte: "[hwloc-users] Open-mpi + hwloc ..."</a>
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
