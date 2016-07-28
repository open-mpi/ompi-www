<?
$subject_val = "[OMPI devel] 1.3.1 -- bad MTT from Cisco";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 21:13:29 2009" -->
<!-- isoreceived="20090311011329" -->
<!-- sent="Tue, 10 Mar 2009 21:13:23 -0400" -->
<!-- isosent="20090311011323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.3.1 -- bad MTT from Cisco" -->
<!-- id="6D85BFAE-F9C3-4DD1-8C1A-E7956AF5FB97_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.3.1 -- bad MTT from Cisco<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 21:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5602.php">Jeff Squyres: "[OMPI devel] SVN is back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh -- I'm seeing intermittent sm btl failures on Cisco 1.3.1 MTT.  :- 
<br>
(  I can't reproduce them manually, but they seem to only happen in a  
<br>
very small fraction of overall MTT runs.  I'm seeing at least 3  
<br>
classes of errors:
<br>
<p>1. btl_sm_add_procs.c:529 which is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mca_btl_sm_component.fifo[j][my_smp_rank].head_lock !=  
<br>
NULL) {
<br>
<p>j = 3, my_smp_rank = 1.  mca_btl_sm_component.fifo[j][my_smp_rank]  
<br>
appears to have a valid value in it (i.e., .fifo[3][0] = x, .fifo[3] 
<br>
[1] = x+offset, .fifo[3][2] = x+2*offset, .fifo[3][3] = x+3*offset.   
<br>
But gdb says:
<br>
<p>(gdb) print mca_btl_sm_component.fifo[j][my_smp_rank]
<br>
Cannot access memory at address 0x2a96b73050
<br>
<p>I see a fair number of these errors.  This is unbelievable to me; if  
<br>
we have a problem in the startup of the sm btl, how on earth has it  
<br>
escaped for so long?
<br>
<p>2. btl_sm_component.c:430 which is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg-&gt;cbfunc(&amp;mca_btl_sm.super, hdr-&gt;tag, &amp;(Frag.base),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg-&gt;cbdata);
<br>
<p>reg-&gt;cbfunc == NULL in this case.  I only see a few of these.
<br>
<p>3. ompi_fifo.h:422 which is this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return_value = ompi_cb_fifo_read_from_tail(&amp;fifo-&gt;tail-&gt;cb_fifo,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fifo-&gt;tail-&gt;cb_overflow, &amp;queue_empty);
<br>
<p>fifo-&gt;tail points to memory that gdb says we cannot access.  I only  
<br>
see a few of these.
<br>
<p>I'm running on RHEL4U6 with a variety of different classes of Xeon  
<br>
machines.  In one particular run, they were slightly older Xeon  
<br>
machines, 2 core/2 socket machines.
<br>
<p>I also found a segv in ibm/environment/finalize where a strlen() was  
<br>
segv'ing, but I'm unable to diagnose that any further because the  
<br>
char* argument passed to an asprintf() is the return value of a  
<br>
function that should *never* be NULL.  :-\
<br>
<p>The one thing that these failures have in common is that they all  
<br>
appear to be compiled by icc.  Here's the configure line:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CC=icc CXX=icpc F77=ifort FC=ifort &quot;CFLAGS=-g -wd188&quot; --enable- 
<br>
picky --enable-debug --enable-mpirun-prefix-by-default --disable-dlopen
<br>
<p>Here's a run line, but the MCA parameters appear to vary wildly in  
<br>
terms of which tests are failing (remember that I run 20+ variants of  
<br>
each test at Cisco):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 8 --mca btl_openib_device_type ib --mca btl  
<br>
sm,openib,self pt2pt/allocmem
<br>
<p>Here's a slice of an MTT report that shows the problem:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mtt/index.php?do_redir=970">http://www.open-mpi.org/mtt/index.php?do_redir=970</a>
<br>
<p>(ignore any &quot;svbu-mpiXXX - daemon did not report back when launched&quot;  
<br>
errors; that's SLURM mucking up)
<br>
<p>I'm digging further...  But help on this would be appreciated...
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Previous message:</strong> <a href="5602.php">Jeff Squyres: "[OMPI devel] SVN is back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5604.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
<li><strong>Reply:</strong> <a href="5605.php">Jeff Squyres: "Re: [OMPI devel] 1.3.1 -- bad MTT from Cisco"</a>
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
