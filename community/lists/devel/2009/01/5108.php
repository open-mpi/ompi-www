<?
$subject_val = "[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 00:39:35 2009" -->
<!-- isoreceived="20090109053935" -->
<!-- sent="Thu, 8 Jan 2009 23:39:23 -0600" -->
<!-- isosent="20090109053923" -->
<!-- name="William Hachfeld" -->
<!-- email="wdh_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI Performance Problem with Open|SpeedShop" -->
<!-- id="47080911-2E83-4159-900A-4E57FC3A49A8_at_krellinst.org" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop<br>
<strong>From:</strong> William Hachfeld (<em>wdh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-09 00:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5109.php">Ralph Castain: "[OMPI devel] ORTE Dec 08 Design Meeting Notes"</a>
<li><strong>Previous message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI Developers,
<br>
<p>I am one of the developers on the Open|SpeedShop (<a href="http://www.openspeedshop.org/">http://www.openspeedshop.org/</a> 
<br>
) project. Lately I've been working on developing a new MRNet/Dyninst  
<br>
based daemon for Open|SS. The daemon is generally working, but I'm  
<br>
running into issue when using it with OpenMPI applications. Since I  
<br>
have zero knowledge of the internal workings of OpenMPI, I'm hoping  
<br>
one of you can provide me some ideas...
<br>
<p>My test application is SMG2000:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/smg/smg2000_readme.html">https://asc.llnl.gov/computing_resources/purple/archive/benchmarks/smg/smg2000_readme.html</a>
<br>
<p>built and run with OpenMPI v1.2.4 on the Yellowrail system at LANL.  
<br>
Yellowrail is a small-scale verison of the Roadrunner (<a href="http://www.lanl.gov/roadrunner/">http://www.lanl.gov/roadrunner/</a> 
<br>
) platform.
<br>
<p>If I run SMG2000 by itself on a single node (&quot;mpirun -np 8 smg2000 -n  
<br>
96 96 96&quot;), I find the job completes within one minute. If, however, I  
<br>
run SMG2000 in Open|SpeedShop with PC sampling enabled, the job runs  
<br>
and runs and runs. If I disable the PC sampling during the run, I find  
<br>
that the job quickly completes normally. Requesting the top ten  
<br>
functions from Open|SS, I find there is an inordinately large amount  
<br>
of time spent in the OpenMPI implementation:
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Exclusive CPU time
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in seconds.					Function (defining location)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;110.16						mca_btl_sm_component_progress (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;9.94						opal_progress (libopen-pal.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5.37						mca_bml_r2_progress (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.78						hypre_SMGResidual (smg2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.72						ompi_request_wait_all (libmpi.so.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.49						hypre_CyclicReduction (smg2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.31						hypre_StructVectorSetConstantValues (smg2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.31						hypre_StructMatrixSetBoxValues (smg2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.30						main (smg2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.20						hypre_SMG2BuildRAPSym (smg2000)
<br>
<p><p>The longer I let SMG2000 run under PC sampling, the more samples I see  
<br>
piled up inside OpenMPI functions. Clearly the Open|SS instrumentation  
<br>
is interfering with the proper execution of the application - the  
<br>
OpenMPI library specifically. But I have been unable to determine the  
<br>
mechanism by which this happens.
<br>
<p>To provide you with a little background on how Open|SS collects the PC  
<br>
sampling data... As I mentioned above, there is a daemon built on top  
<br>
of MRNet and Dyninst which runs on each node. This daemon uses Dyninst  
<br>
to attach to the processes in the MPI job and inserts instrumentation  
<br>
into them. This is accomplished via the ptrace() interface on Linux.  
<br>
The Open|SS daemon uses Dyninst to load a data collection DSO into  
<br>
each process. The PC sampling data collection DSO, when initialized,  
<br>
registers a SIGPROF signal handler within the process and then sets up  
<br>
a sampling timer via setitimer(). The timer is typically setup to  
<br>
trigger 100 or 1000 times per second. The SIGPROF handler is a highly  
<br>
optimized, short, bit of code that just squirrels the PC value away  
<br>
for later transport back to Open|SS.
<br>
<p>Can any of the OpenMPI developers speculate as to possible mechanisms  
<br>
by which the ptrace() attachment , signal handler, or timer  
<br>
registration and corresponding signal delivery could cause large  
<br>
amounts of time to be spent within the &quot;progress&quot; functions of the  
<br>
OpenMPI library with an apparent lack of any real progress? Any ideas/ 
<br>
information would be greatly appreciated.
<br>
<p><p>-- Bill Hachfeld, The Open|SpeedShop Project
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5108/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5109.php">Ralph Castain: "[OMPI devel] ORTE Dec 08 Design Meeting Notes"</a>
<li><strong>Previous message:</strong> <a href="5107.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<li><strong>Reply:</strong> <a href="5116.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
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
