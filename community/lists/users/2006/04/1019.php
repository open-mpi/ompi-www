<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 11 15:19:54 2006" -->
<!-- isoreceived="20060411191954" -->
<!-- sent="Tue, 11 Apr 2006 15:19:43 -0400 (EDT)" -->
<!-- isosent="20060411191943" -->
<!-- name="Hugh Merz" -->
<!-- email="merz_at_[hidden]" -->
<!-- subject="[OMPI users] Intel EM64T Compiler error on Opteron" -->
<!-- id="Pine.LNX.4.63.0604111321230.3122_at_porcupine.cita.utoronto.ca" -->
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
<strong>From:</strong> Hugh Merz (<em>merz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-11 15:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Reply:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe reply:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to build OpenMPI v1.0.2 (stable) on an Opteron using the v8.1 Intel EM64T compilers:
<br>
<p>Intel(R) C Compiler for Intel(R) EM64T-based applications, Version 8.1 Build 20041123 Package ID: l_cce_pc_8.1.024
<br>
Intel(R) Fortran Compiler for Intel(R) EM64T-based applications, Version 8.1 Build 20041123 Package ID: l_fce_pc_8.1.024
<br>
<p>The compiler core dumps during make with:
<br>
<p>&nbsp;&nbsp;icc -DHAVE_CONFIG_H -I. -I. -I../../include -I../../include -DOMPI_PKGDATADIR=\&quot;/scratch/merz//share/openmpi\&quot; -I../../include -I../.. -I../.. -I../../include -I../../opal -I../../orte -I../../ompi -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT cmd_line.lo -MD -MP -MF .deps/cmd_line.Tpo -c cmd_line.c  -fPIC -DPIC -o .libs/cmd_line.o
<br>
icc: error: /opt/intel_cce_80/bin/mcpcom: core dumped
<br>
icc: error: Fatal error in /opt/intel_cce_80/bin/mcpcom, terminated by unknown signal(139)
<br>
<p>I couldn't find any other threads in the mailing list concerning usage of the Intel EM64T compilers - has anyone successfully compiled OpenMPI using this combination?  It also occurs on the Athlon 64 processor.  Logs attached.
<br>
<p>Thanks,
<br>
<p>Hugh
<br>

<br><hr>
<ul>
<li>APPLICATION/X-BZIP2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1019/openmpi_1.0.2_logs.tar.bz2">openmpi_1.0.2_logs.tar.bz2</a>
</ul>
<!-- attachment="openmpi_1.0.2_logs.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">Ralph Castain: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<li><strong>Previous message:</strong> <a href="1018.php">David Gunter: "Re: [OMPI users] Building 32-bit OpenMPI package for 64-bit Opteron platform"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Reply:</strong> <a href="1024.php">Troy Telford: "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
<li><strong>Maybe reply:</strong> <a href="1029.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Intel EM64T Compiler error on Opteron"</a>
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
