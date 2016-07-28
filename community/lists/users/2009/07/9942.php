<?
$subject_val = "Re: [OMPI users] Python Binding problem with openmpi-1.3.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 14:26:51 2009" -->
<!-- isoreceived="20090713182651" -->
<!-- sent="Mon, 13 Jul 2009 14:27:13 -0400" -->
<!-- isosent="20090713182713" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Python Binding problem with openmpi-1.3.2" -->
<!-- id="200907131427.13656.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C680DEE2.4D08%evanstm_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Python Binding problem with openmpi-1.3.2<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-13 14:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI users] OpenMPI SCI support"</a>
<li><strong>Previous message:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tom,
<br>
as discussed, the following threads may help You?
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/02/8158.php">http://www.open-mpi.org/community/lists/users/2009/02/8158.php</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically">http://www.open-mpi.org/faq/?category=running#loading-libmpi-dynamically</a>
<br>
<p>With best regards,
<br>
Rainer
<br>
<p><p>On Monday 13 July 2009 12:53:54 pm Evans, Thomas M. wrote:
<br>
<span class="quotelev1">&gt; I've been using openmpi-1.2.x for 2 years to dynamically create python
</span><br>
<span class="quotelev1">&gt; bindings for my application code.  I've just downloaded and installed
</span><br>
<span class="quotelev1">&gt; openmpi-1.3.2, and I now get the following error when trying to run python
</span><br>
<span class="quotelev1">&gt; with one of my bindings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /data/python/current/bin/python: symbol lookup error:
</span><br>
<span class="quotelev1">&gt; /data/mpi/gcc-4.3.2/openmpi-1.3.2/lib/openmpi/mca_paffinity_linux.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: mca_base_param_reg_int
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All of my regular executables work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To build one of my bindings I use the following configure line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpic++  -pthread -shared -Xlinker
</span><br>
<span class="quotelev1">&gt; -R/data/vendors/gcc/silo/lib/:/data/vendors/gsl-1.9/lib/:/data/mpi/gcc-4.3.
</span><br>
<span class="quotelev1">&gt;2
</span><br>
<span class="quotelev1">&gt; /openmpi-1.3.2/lib:/data/gcc/current/lib:/home/9te/work/Sn/build/debug/deno
</span><br>
<span class="quotelev1">&gt;v
</span><br>
<span class="quotelev1">&gt; o/src/pykba:/home/9te/work/Sn/build/debug/denovo/src/pykba/..:/home/9te/wor
</span><br>
<span class="quotelev1">&gt;k /Sn/build/debug/lib -o _hybrid.so hybrid_wrap.o SC.pt.o Database.o
</span><br>
<span class="quotelev1">&gt; denovo.o Mavric_Parser.o Source.o Mat.o Objects.o Map.o Viz.o Angles.o
</span><br>
<span class="quotelev1">&gt; MC_Manager.o WW.o Problem_Output.o -L/home/9te/work/Sn/build/debug/lib
</span><br>
<span class="quotelev1">&gt; -ldenovo_kba_utils -ldenovo_kba -ldenovo_source -ldenovo_material
</span><br>
<span class="quotelev1">&gt; -ldenovo_angle
</span><br>
<span class="quotelev1">&gt; -ldenovo_database -ldenovo_meshing -ldenovo_utils -ldenovo_comm
</span><br>
<span class="quotelev1">&gt; -ldenovo_harness -ldenovo_release -L/data/vendors/gcc/trilinos/ompicxx/lib/
</span><br>
<span class="quotelev1">&gt; -lamesos -laztecoo -lepetraext -lepetra -lteuchos -ltriutils
</span><br>
<span class="quotelev1">&gt; -L/data/vendors/gsl-1.9/lib/ -lgsl -lgslcblas
</span><br>
<span class="quotelev1">&gt; -L/data/vendors/gcc/atlas/lib/ -llapack -lf77blas -lcblas -latlas
</span><br>
<span class="quotelev1">&gt; -L/data/vendors/gcc/silo/lib/ -lsiloh5 -L/data/vendors/gcc/hdf5/lib/ -lhdf5
</span><br>
<span class="quotelev1">&gt; -lz
</span><br>
<span class="quotelev1">&gt; -L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc/i686-pc-linux-gnu/4.3.2
</span><br>
<span class="quotelev1">&gt; -L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc
</span><br>
<span class="quotelev1">&gt; -L/home/data/gcc/gcc-4.3.2/bin/../lib/gcc/i686-pc-linux-gnu/4.3.2/../../..
</span><br>
<span class="quotelev1">&gt; -lgfortranbegin -lgfortran -lm -lgcc_s   -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed on the mail archive a post related to this issue back in 2005 (
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres (jsquyres_at_[hidden]) Date: 2005-09-15 15:32:21);
</span><br>
<span class="quotelev1">&gt; however, I am assuming that this issue has been resolved since then.  Is
</span><br>
<span class="quotelev1">&gt; there something I need to do extra?  I know the symbol in question is
</span><br>
<span class="quotelev1">&gt; defined in libopen-pal.so, so it does exist, and mpic++ does include it on
</span><br>
<span class="quotelev1">&gt; the link-line.  As mentioned in the older post, LD_LIBRARY_PATH tinkering
</span><br>
<span class="quotelev1">&gt; will not fix the problem.  Any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9943.php">George Bosilca: "Re: [OMPI users] OpenMPI SCI support"</a>
<li><strong>Previous message:</strong> <a href="9941.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] 2 to 1 oversubscription"</a>
<li><strong>In reply to:</strong> <a href="9939.php">Evans, Thomas M.: "[OMPI users] Python Binding problem with openmpi-1.3.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9944.php">Neil Ludban: "Re: [OMPI users] Python Binding problem with openmpi-1.3.2"</a>
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
