<?
$subject_val = "[OMPI users] compile fail on 64bit AMD cluster with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 02:17:20 2008" -->
<!-- isoreceived="20080710061720" -->
<!-- sent="Wed, 9 Jul 2008 23:17:11 -0700" -->
<!-- isosent="20080710061711" -->
<!-- name="Tod A. Charles-Pascal" -->
<!-- email="tod_at_[hidden]" -->
<!-- subject="[OMPI users] compile fail on 64bit AMD cluster with intel compilers" -->
<!-- id="005e01c8e254$973f2fd0$c5bd8f70$_at_caltech.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] compile fail on 64bit AMD cluster with intel compilers<br>
<strong>From:</strong> Tod A. Charles-Pascal (<em>tod_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-10 02:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6037.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all:
<br>
<p>While attempting to compile openmip-1.2.6 on an 64bit AMD cluster with Intel
<br>
compilers (v 10.1.015 and v 9.1.038) make fails with the following error:
<br>
<p>Making all in datatype
<br>
<p>make[2]: Entering directory `/home/test/openmpi-1.2.7rc2/ompi/datatype'
<br>
<p>depbase=`echo dt_args.lo | sed 's|[^/]*$|.deps/&amp;|;s|\.lo$||'`;\
<br>
<p>/bin/sh ../../libtool --tag=CC   --mode=compile icc -DHAVE_CONFIG_H -I.
<br>
-I../../opal/include -I../../orte/include -I../../ompi/include   -I../..
<br>
-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -MT
<br>
dt_args.lo -MD -MP -MF $depbase.Tpo -c -o dt_args.lo dt_args.c &amp;&amp;\
<br>
<p>mv -f $depbase.Tpo $depbase.Plo
<br>
<p>libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include
<br>
-I../../orte/include -I../../ompi/include -I../.. -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread -MT dt_args.lo
<br>
-MD -MP -MF .deps/dt_args.Tpo -c dt_args.c  -fPIC -DPIC -o .libs/dt_args.o
<br>
<p>../../ompi/include/mpi.h(182): error: identifier &quot;ptrdiff_t&quot; is undefined
<br>
<p>&nbsp;&nbsp;typedef OMPI_PTRDIFF_TYPE MPI_Aint;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>The compile works with the native gcc type compilers. Have anyone
<br>
encountered this before? 
<br>
<p>&nbsp;
<br>
<p>Best,
<br>
<p>Tod
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6039.php">Romaric David: "Re: [OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6037.php">Jeff Squyres: "Re: [OMPI users] help me please, about Open MPI"</a>
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
