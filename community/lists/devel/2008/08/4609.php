<?
$subject_val = "[OMPI devel] IOF and scalability";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 19:39:59 2008" -->
<!-- isoreceived="20080827233959" -->
<!-- sent="Wed, 27 Aug 2008 17:39:49 -0600" -->
<!-- isosent="20080827233949" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IOF and scalability" -->
<!-- id="75485D8D-34B1-4B9B-A916-4409CDD7E161_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] IOF and scalability<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-27 19:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4608.php">Ralph Castain: "[OMPI devel] Platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
<li><strong>Reply:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>As some of you may remember, I am in the process of rewriting the IOF  
<br>
subsystem. While working my way through the revisions, I discovered  
<br>
something about the current IOF that significantly impacts  
<br>
scalability. Since I know some people retain interest in that area, I  
<br>
thought I would pass the observations along.
<br>
<p>When an orted fork/exec's an application process, it automatically  
<br>
wires up the IOF for that process. In the current system, that entails  
<br>
sending a minimum of three messages to mpirun for each process, each  
<br>
message in turn generating an &quot;ack&quot; message back to the orted. Thus,  
<br>
during launch, the IOF is sending more than 6*nprocs messages across  
<br>
the OOB.
<br>
<p>Unfortunately, this is all done outside of our daemon collective  
<br>
system, so every message is handled independently on both ends. As you  
<br>
can imagine, mpirun gets somewhat deluged for large jobs. With the  
<br>
advent of the orte_routed framework, at least these messages don't  
<br>
create new TCP connections - but they do force mpirun to deal with a  
<br>
large number of inbound messages.
<br>
<p>Lest someone think the original authors were &quot;stupid&quot;, let me hasten  
<br>
to point out that they wrote this system to a clear set of  
<br>
requirements focused on creating a generic RTE - i.e., one not  
<br>
tailored to OMPI's specific needs. Thus, the system was designed to  
<br>
support capabilities we don't need, and couldn't take advantage of any  
<br>
knowledge of the end-state OMPI was trying to achieve.
<br>
<p>As an example of the impact, on RoadRunner, the current IOF results in  
<br>
the transmission of over 72,000 messages between procs and mpirun  
<br>
during startup of a petaflop application - just to wireup the IOF.
<br>
<p>In the rewrite, I am taking advantage of knowing OMPI's desired final  
<br>
configuration to eliminate -all- of these communications. Should  
<br>
improve things considerably - hope to have it completed in a week or  
<br>
two, though it won't come into the trunk until we release 1.3.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4610.php">George Bosilca: "Re: [OMPI devel] Possible buffer overrun bug in opal_free_list_grow, called by MPI::Init"</a>
<li><strong>Previous message:</strong> <a href="4608.php">Ralph Castain: "[OMPI devel] Platform files"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
<li><strong>Reply:</strong> <a href="4611.php">Tim Mattox: "Re: [OMPI devel] IOF and scalability"</a>
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
