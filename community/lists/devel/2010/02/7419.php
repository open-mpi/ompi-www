<?
$subject_val = "[OMPI devel] RFC: Processor affinity hardware thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 13:27:33 2010" -->
<!-- isoreceived="20100211182733" -->
<!-- sent="Thu, 11 Feb 2010 13:27:25 -0500" -->
<!-- isosent="20100211182725" -->
<!-- name="Terry.Dontje_at_[hidden]" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Processor affinity hardware thread support" -->
<!-- id="4B744C0D.8010803_at_Sun.COM" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Processor affinity hardware thread support<br>
<strong>From:</strong> <a href="mailto:Terry.Dontje_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20RFC:%20Processor%20affinity%20hardware%20thread%20support"><em>Terry.Dontje_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-02-11 13:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add hardware thread support to processor affinity components and 
<br>
new options to orterun.
<br>
<p>WHY: OMPI currently does not correctly recognize processors that support 
<br>
hardware threads.  In cases where the user uses the mpirun options 
<br>
-bind-to-* and -by-* processes are bound to the first thread on each 
<br>
core.  In cases where the user specify cores to bind to in the rankfile 
<br>
those numbers are interpreted as thread ids as opposed to core ids.  
<br>
These ill side affects can lead to confusion as to which resources 
<br>
processes in a job are bound to and in the worse case a user could end 
<br>
up unknowingly oversubscribing resources.
<br>
<p>WHERE: orte/mca/rmaps, orte/mca/odls, orte/util/hostfile, 
<br>
orte/tools/orterun/orterun.c, opal/mca/paffinity   
<br>
<p>WHEN: 03/15/10
<br>
<p>TIMEOUT: 02/24/10
<br>
-----
<br>
The current OMPI paffinity implementation uses PLPA to set bindings of 
<br>
processes to cores or sockets.  In systems that support hardware 
<br>
threads, however, PLPA looks at a hardware thread as a core and in 
<br>
certain cases may not be able to completely map all hardware threads.  
<br>
This happens because the paffinity framework does not recognize hardware 
<br>
threads. 
<br>
<p>I propose support such that hardware thread resources can be identified 
<br>
and have processes bound to them.  (Note: we plan on creating a new 
<br>
paffinity component using the hwloc api as opposed to extending the PLPA 
<br>
component)
<br>
<p>Once the paffinity framework supports hardware threads I would like to 
<br>
propose the following defaults and new options that will support 
<br>
hardware threads.  I think we should first implement the &quot;Defaults&quot; 
<br>
section, put it back, and then start on new options and 
<br>
rankfile/hostfile fields.
<br>
<p>Defaults:
<br>
<p>In the case of no process binding we maintain the current rule of not 
<br>
doing anything.
<br>
<p>When -bind-to-core or a core binding defined in the rankfile, the MPI 
<br>
process will
<br>
be bound to all hardware threads on a core (the OS will manage the 
<br>
scheduling of processes between hardware threads).  This is similar to 
<br>
the how OMPI handles scheduling of processes on core when 
<br>
-bind-to-socket option is specified to mpirun.
<br>
<p>New Options to mpirun:
<br>
<p>1.  -bind-to-thread - Bind processes to hardware threads, analogous to 
<br>
-bind-to-core and -bind-to-socket
<br>
2.  -threads-per-proc - Use the number of threads per process if used 
<br>
with one of the -bind-to* options
<br>
3.  -bythread - Associate processes with successive hardware threads if 
<br>
used with one of the bind-to-* options.
<br>
4.  -num-threads -  Specify the number of hardware threads per core (for 
<br>
cases where Open MPI doesn't already know this information)
<br>
<p><p>New Fields to Rankfiles:
<br>
<p>We'll be adding a third field in the slot specification of the Rankfile. 
<br>
So a rankfile entry that has 3 fields specified for a slot the last 
<br>
field is the hardware thread id.  Otherwise it is assumed that hardware 
<br>
thread scheduling is left up to the OS.
<br>
rank 0=aa slot=1:0:0-3
<br>
rank 1=bb slot=0:0
<br>
rank 2=cc slot=1-2
<br>
<p>So in the case of rank 0 the process is bound to socket 1, core 0 and 
<br>
hardware threads 0-3.
<br>
In the case of rank 1 it is bound to socket 0, core 0 and hardware 
<br>
thread scheduling is left to the OS.
<br>
In the case of rank 2 it is bound to cores 1 and 2 hardware thread 
<br>
scheduling is left to the OS.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7420.php">Lisandro Dalcin: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7418.php">George Bosilca: "Re: [OMPI devel] failure withzero-lengthReduce()andbothsbuf=rbuf=NULL"</a>
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
