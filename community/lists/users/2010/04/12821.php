<?
$subject_val = "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:16:59 2010" -->
<!-- isoreceived="20100427141659" -->
<!-- sent="Tue, 27 Apr 2010 16:16:54 +0200" -->
<!-- isosent="20100427141654" -->
<!-- name="Frederik Himpe" -->
<!-- email="fhimpe_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI &amp;amp; SGE: bash errors at mpirun" -->
<!-- id="1272377814.14852.50.camel_at_defected" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="21FE040B-11B6-4FF0-AB92-B3A16C13F94B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun<br>
<strong>From:</strong> Frederik Himpe (<em>fhimpe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:16:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2010-04-27 at 07:52 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Looks to me like you have an error in the openmpi module file...
</span><br>
<p>I cannot trigger this error by running module add openmpi/gcc-4.4, so I
<br>
don't have the feeling the module file in itself is erroneous.
<br>
<p>Just in case, this is what it looks like:
<br>
<p>#%Module -*- tcl -*-
<br>
##
<br>
## dot modulefile
<br>
##
<br>
proc ModulesHelp { } {
<br>
&nbsp;&nbsp;global openmpiversion
<br>
<p>&nbsp;&nbsp;puts stderr &quot;\tAdds OpenMPI to your environment variables,&quot;
<br>
}
<br>
<p>module-whatis &quot;adds OpenMPI to your environment variables&quot;
<br>
<p>set              openmpiversion    1.4.1
<br>
set
<br>
root              /shared/apps/openmpi/gcc-4.4/$openmpiversion
<br>
<p>append-path      PATH              $root/bin
<br>
append-path      MANPATH           $root/man
<br>
setenv           MPI_HOME          $root
<br>
setenv           MPI_RUN           $root/bin/mpirun
<br>
<p>append-path      LD_RUN_PATH       $root/lib
<br>
append-path      LD_LIBRARY_PATH   $root/lib
<br>
<p><pre>
-- 
Frederik Himpe &lt;fhimpe_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12822.php">Nguyen Kim Son: "[OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12820.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12824.php">Dave Love: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
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
