<?
$subject_val = "[hwloc-users] Open-mpi + hwloc ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 06:05:38 2013" -->
<!-- isoreceived="20130621100538" -->
<!-- sent="Fri, 21 Jun 2013 10:04:50 +0000" -->
<!-- isosent="20130621100450" -->
<!-- name="Solibakke Per Bjarte" -->
<!-- email="Per.B.Solibakke_at_[hidden]" -->
<!-- subject="[hwloc-users] Open-mpi + hwloc ..." -->
<!-- id="CDE9F041.19793%solibakk_at_himolde.no" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Open-mpi + hwloc ...<br>
<strong>From:</strong> Solibakke Per Bjarte (<em>Per.B.Solibakke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 06:04:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>Previous message:</strong> <a href="0900.php">Brice Goglin: "Re: [hwloc-users] hwloc on Xeon Phi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>Reply:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have been using OPEN-MPI for several years now on 8-16 CPU/Core machines. I want to extend the usage to graphic-card devices (NVIDIA-cards). Therefore,
<br>
<p>I use open-mpi implementation on x number of CPU&#180;s working well (linux/ubuntu):
<br>
<p>The CPU installation:
<br>
<p>1) makefile look like this:
<br>
<p>****
<br>
<p>CC       = mpic++
<br>
<p>SDIR     = ./
<br>
<p>IMPI     = /usr/lib/openmpi/include
<br>
<p>LMPI     = /usr/lib/openmpi/lib
<br>
<p>ISCL     = $(HOME)/applik-libscl/libscl/gpp
<br>
<p>LSCL     = $(HOME)/applik-libscl/libscl/gpp
<br>
<p>IDIRS    = -I. -I$(SDIR) -I$(IMPI) -I$(ISCL)
<br>
<p>LDIRS    = -L$(LMPI) -L$(LSCL)
<br>
<p>CFLAGS   = -O -Wall -c  $(IDIRS)
<br>
<p>LFLAGS   = $(LDIRS)  -lscl -lm
<br>
<p><p><p>hello : hello.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CC) -o hello hello.o $(LFLAGS)
<br>
<p><p><p>hello.o : $(SDIR)/hello.cpp $(HEADERS)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(CC) $(CFLAGS) $(SDIR)/hello.cpp
<br>
<p><p><p>clean :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f *.o core core.*
<br>
<p><p><p>veryclean   :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f *.o core core.*
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rm -f  hello
<br>
<p>*****
<br>
<p>2) and I  simultaneously compile and execute with the  sh-file:
<br>
<p><p>*****
<br>
<p>echo &quot;localhost cpu=24&quot; &gt; OpenMPIhosts
<br>
<p><p><p>test -f hello.err  &amp;&amp; mv -f hello.err  hello.err.bak
<br>
<p>test -f hello.out  &amp;&amp; mv -f hello.out  hello.out.bak
<br>
<p><p><p>make -f makefile.mpi.OpenMPI_1.4 &gt;hello.out 2&gt;&amp;1 &amp;&amp; \
<br>
<p>&nbsp;&nbsp;mpirun --hostfile OpenMPIhosts ${PWD}/hello &gt;&gt;hello.out 2&gt;hello.err
<br>
<p><p><p>RC=$?
<br>
<p><p><p>case $RC in
<br>
<p>&nbsp;&nbsp;0) exit 0 ;;
<br>
<p>&nbsp;&nbsp;esac
<br>
<p>exit 1;
<br>
<p><p>I have now some questions:
<br>
<p>Can this parallel program (hello) be extended by also using Graphic processors card (i.e. Nvidia-cards) using hwloc = internal in version  Open-mpi 1.7.1 (installation).
<br>
<p>If yes:
<br>
<p>Any changes in makefiles? Execute-files? Program-files?
<br>
<p>Suggestions for implementations are appreciated!
<br>
The graphic card devices should be the extensions of a machine's CPUs.
<br>
<p>Regards
<br>
PBSolibakke
<br>
Professor
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>Previous message:</strong> <a href="0900.php">Brice Goglin: "Re: [hwloc-users] hwloc on Xeon Phi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
<li><strong>Reply:</strong> <a href="0902.php">Brice Goglin: "Re: [hwloc-users] Open-mpi + hwloc ..."</a>
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
