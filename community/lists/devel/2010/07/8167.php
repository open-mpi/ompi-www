<?
$subject_val = "Re: [OMPI devel] some questions regarding the portals modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 13:16:29 2010" -->
<!-- isoreceived="20100709171629" -->
<!-- sent="Fri, 09 Jul 2010 13:16:24 -0400" -->
<!-- isosent="20100709171624" -->
<!-- name="Matney Sr, Kenneth D." -->
<!-- email="matneykdsr_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some questions regarding the portals modules" -->
<!-- id="8724FB53-F1F8-4421-A4C4-79BCE838BD09_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C370DCA.9000503_at_cscs.ch" -->
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
<strong>Subject:</strong> Re: [OMPI devel] some questions regarding the portals modules<br>
<strong>From:</strong> Matney Sr, Kenneth D. (<em>matneykdsr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 13:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8152.php">Jerome Soumagne: "[OMPI devel] some questions regarding the portals modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jerome,
<br>
<p>The first one is simple.  portals is not thead-safe on the Cray XT.  As, I recall,
<br>
only the master thread can post an event. although any thread can receive
<br>
the event.  Although, i might have it backwards.  It has been a couple of years
<br>
since I played with this.
<br>
<p>The second one depends on how you use your Cray XT.  In our case, the machine
<br>
is used as process-per-core; i.e., not as a collection of SMPs.  For performance
<br>
reasons, you definitely do not want MPI threads.  Also, since it is run process-per-core,
<br>
there is nothing to be gained with progress threads.  Portals events will generate a kernel
<br>
level interrupt.  Whether you can run the XT as a cluster of SMPs is another question
<br>
entirely.  We really have not tried this in the context of OMPI.  But, in conjunction with
<br>
portals, this might open a &quot;can of worms&quot;.  For example, any thread can be run on any
<br>
core.  But the portals ID for a thread will be the NID/PID pair for that core.  If two threads
<br>
get scheduled to the same core, it would not be pretty.
<br>
<p>I could see lots of reasons why spawn might fail.  First, it is run on a compute node.
<br>
There is no way for a compute node to run a process on another compute node.
<br>
Also, there will be no rank/size initialization forthcoming from ALPS.  So, even if
<br>
it got past this, it would be running on the same node as its parent.
<br>
-- Ken Matney, Sr.
<br>
&nbsp;&nbsp;&nbsp;Oak Ridge National Laboratory
<br>
<p><p>On Jul 9, 2010, at 7:53 AM, Jerome Soumagne wrote:
<br>
<p>Hi,
<br>
<p>As I said in the previous e-mail, we've recently installed OpenMPI on a Cray XT5 machine, and we therefore use the portals and the alps libraries. Thanks for providing the configuration script from Jaguar, this was very helpful, it had just to be slightly adapted in order to use the latest CNL version installed on this machine.
<br>
<p>I have some questions though regarding the use of the portals btl and mtl components. I noticed that when I compiled OpenMPI with mpi-thread support enabled and ran a job, the portals components did not want to initialize due to these funny lines:
<br>
<p>./mtl_portals_component.c
<br>
182     /* we don't run with no stinkin' threads */
<br>
183     if (enable_progress_threads || enable_mpi_threads) return NULL;
<br>
<p>I'd like to know why are mpi threads disabled since threads are supported on the XT5, does the btl/mtl require to have thread-safety implemented or something like that or is it because of the portals library itself ?
<br>
<p>I would also like to use the MPI_Comm_accept/connect functions, it seems that it's not possible to do that using the portals mtl even if the spawn seems to be supported, did I do something wrong or is it really not supported?
<br>
In this case, is it possible to extend this module to support these functions? We could help in doing that.
<br>
<p>I'd like also to know, are there any plans for creating a module in order to use the DMAPP interface for the Gemini interconnect?
<br>
<p>Thanks.
<br>
<p>Jerome
<br>
<p><p><pre>
--
J&#233;r&#244;me Soumagne
Scientific Computing Research Group
CSCS, Swiss National Supercomputing Centre
Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
&lt;ATT00001..txt&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8166.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8152.php">Jerome Soumagne: "[OMPI devel] some questions regarding the portals modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8168.php">Jerome Soumagne: "Re: [OMPI devel] some questions regarding the portals modules"</a>
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
