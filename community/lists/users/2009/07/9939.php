<?
$subject_val = "[OMPI users] Python Binding problem with openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 12:54:42 2009" -->
<!-- isoreceived="20090713165442" -->
<!-- sent="Mon, 13 Jul 2009 12:53:54 -0400" -->
<!-- isosent="20090713165354" -->
<!-- name="Evans, Thomas M." -->
<!-- email="evanstm_at_[hidden]" -->
<!-- subject="[OMPI users] Python Binding problem with openmpi-1.3.2" -->
<!-- id="C680DEE2.4D08%evanstm_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Python Binding problem with openmpi-1.3.2<br>
<strong>From:</strong> Evans, Thomas M. (<em>evanstm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 12:53:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9938.php">Warner Yuen: "[OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Maybe reply:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've been using openmpi-1.2.x for 2 years to dynamically create python
<br>
bindings for my application code.  I've just downloaded and installed
<br>
openmpi-1.3.2, and I now get the following error when trying to run python
<br>
with one of my bindings:
<br>
<p>/data/python/current/bin/python: symbol lookup error:
<br>
/data/mpi/gcc-4.3.2/openmpi-1.3.2/lib/openmpi/mca_paffinity_linux.so:
<br>
undefined symbol: mca_base_param_reg_int
<br>
<p>All of my regular executables work fine.
<br>
<p>To build one of my bindings I use the following configure line:
<br>
<p>mpic++  -pthread -shared -Xlinker
<br>
-R/data/vendors/gcc/silo/lib/:/data/vendors/gsl-1.9/lib/:/data/mpi/gcc-4.3.2
<br>
/openmpi-1.3.2/lib:/data/gcc/current/lib:/home/9te/work/Sn/build/debug/denov
<br>
o/src/pykba:/home/9te/work/Sn/build/debug/denovo/src/pykba/..:/home/9te/work
<br>
/Sn/build/debug/lib -o _hybrid.so hybrid_wrap.o SC.pt.o Database.o denovo.o
<br>
Mavric_Parser.o Source.o Mat.o Objects.o Map.o Viz.o Angles.o MC_Manager.o
<br>
WW.o Problem_Output.o -L/home/9te/work/Sn/build/debug/lib -ldenovo_kba_utils
<br>
-ldenovo_kba -ldenovo_source -ldenovo_material -ldenovo_angle
<br>
-ldenovo_database -ldenovo_meshing -ldenovo_utils -ldenovo_comm
<br>
-ldenovo_harness -ldenovo_release -L/data/vendors/gcc/trilinos/ompicxx/lib/
<br>
-lamesos -laztecoo -lepetraext -lepetra -lteuchos -ltriutils
<br>
-L/data/vendors/gsl-1.9/lib/ -lgsl -lgslcblas -L/data/vendors/gcc/atlas/lib/
<br>
-llapack -lf77blas -lcblas -latlas -L/data/vendors/gcc/silo/lib/ -lsiloh5
<br>
-L/data/vendors/gcc/hdf5/lib/ -lhdf5 -lz
<br>
-L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc/i686-pc-linux-gnu/4.3.2
<br>
-L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc
<br>
-L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc/i686-pc-linux-gnu/4.3.2/../../..
<br>
-lgfortranbegin -lgfortran -lm -lgcc_s   -lm
<br>
<p>I noticed on the mail archive a post related to this issue back in 2005 (
<br>
From: Jeff Squyres (jsquyres_at_[hidden]) Date: 2005-09-15 15:32:21);
<br>
however, I am assuming that this issue has been resolved since then.  Is
<br>
there something I need to do extra?  I know the symbol in question is
<br>
defined in libopen-pal.so, so it does exist, and mpic++ does include it on
<br>
the link-line.  As mentioned in the older post, LD_LIBRARY_PATH tinkering
<br>
will not fix the problem.  Any help is greatly appreciated.
<br>
<p>Tom 
<br>
<pre>
-- 
Tom Evans
Radiation Transport and Shielding
Nuclear Science and Technology Division
------------------------------------------------
(865) 576-3535     Oak Ridge National Laboratory
(865) 574-9619 fax PO Box 2008 MS6172
evanstm_at_[hidden]   Oak Ridge, TN 37831-6170
www.ornl.gov/sci/radiation_transport_criticality
------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9940.php">Mark Borgerding: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>Previous message:</strong> <a href="9938.php">Warner Yuen: "[OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Reply:</strong> <a href="9942.php">Rainer Keller: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<li><strong>Maybe reply:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
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
