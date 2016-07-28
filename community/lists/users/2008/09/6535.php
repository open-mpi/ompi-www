<?
$subject_val = "[OMPI users] errors returned from openmpi-1.2.7 source code";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 14 13:24:08 2008" -->
<!-- isoreceived="20080914172408" -->
<!-- sent="Sun, 14 Sep 2008 10:24:04 -0700 (PDT)" -->
<!-- isosent="20080914172404" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="[OMPI users] errors returned from openmpi-1.2.7 source code" -->
<!-- id="667902.66674.qm_at_web34807.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] errors returned from openmpi-1.2.7 source code<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-14 13:24:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6536.php">Shafagh Jafer: "Re: [OMPI users] ompi_info command not working"</a>
<li><strong>Previous message:</strong> <a href="6534.php">Josh Hursey: "Re: [OMPI users] dumping checkpoint at customized locations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I installed openmpi-1.2.7 and tested the hello_c and ring_c examples on single and multiple node and worked fine. However, when I use openmpi with my simulator (by replacing the old mpich path with the new openmpi ) I get many errors reported from &quot;/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/*.h&quot; . Please see the following snap shots:
<br>
&#160;
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: At top level:
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:79: non-member function `operator ompi_communicator_t *()' cannot have `const' method qualifier
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:79: `operator ompi_communicator_t *()' must be a nonstatic member function
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:79: `operator ompi_communicator_t *()' must take exactly one argument
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: In function `operator ompi_communicator_t *()':
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:79: warning: control reaches end of non-void function `operator ompi_communicator_t *()'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: At top level:
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:84: parse error before `protected'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:96: base class `Comm_Null' has incomplete type
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: In method `Comm::Comm(const Comm &amp;)':
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:153: `class Comm' has no member named `mpi_comm'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:153: type `Comm_Null' is not an immediate basetype for `Comm'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h: In method `Comm::Comm(ompi_communicator_t *)':
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/comm.h:155: type `Comm_Null' is not an immediate basetype for `Comm'
<br>
In file included from /nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/mpicxx.h:199,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from /nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/mpi.h:1795,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; from stdaload.cpp:33:
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h: At top level:
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h:27: parse error before `::'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h:28: parse error before `::'
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: `static' can only be specified for objects and functions
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: ANSI C++ forbids declaration `' with no type
<br>
/nfs/sjafer/phd/openMPI/openmpi-1.2.7/include/openmpi/ompi/mpi/cxx/win.h:93: confused by earlier errors, bailing out
<br>
make: *** [stdaload.o] Error 1
<br>
&#160;
<br>
Could someone please help me?? L
<br>
Thanks. 
<br>
&#160;


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6536.php">Shafagh Jafer: "Re: [OMPI users] ompi_info command not working"</a>
<li><strong>Previous message:</strong> <a href="6534.php">Josh Hursey: "Re: [OMPI users] dumping checkpoint at customized locations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Reply:</strong> <a href="6547.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
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
