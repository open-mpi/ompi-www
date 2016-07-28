<?
$subject_val = "Re: [OMPI devel] some questions regarding the portals modules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  9 17:23:32 2010" -->
<!-- isoreceived="20100709212332" -->
<!-- sent="Fri, 9 Jul 2010 23:23:04 +0200" -->
<!-- isosent="20100709212304" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] some questions regarding the portals modules" -->
<!-- id="4C379338.3000707_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8724FB53-F1F8-4421-A4C4-79BCE838BD09_at_ornl.gov" -->
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
<strong>From:</strong> Jerome Soumagne (<em>soumagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-09 17:23:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>In reply to:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ken,
<br>
<p>I thank you a lot for your reply, I will think about it and do some more 
<br>
tests. I was only thinking about using MPI threads, but yes as you say 
<br>
if two threads are scheduled on the same core, that wouldn't be pretty 
<br>
at all. I can probably do some more tests of that functionality, but I 
<br>
don't expect to have great results.
<br>
<p>I'm not sure to correctly understand what you say about the spawn. I 
<br>
found a presentation on the web from Richard Graham saying that the 
<br>
spawn functionality was implemented as well as it says in this 
<br>
presentation that you get a full MPI 2 support on the Cray XT. When I 
<br>
said that I had problems with the MPI_Comm_accept/connect functions, I 
<br>
meant that I actually get errors when I try to do a &quot;simple&quot; 
<br>
MPI_Open_port, do you know where I can find in the code whether this 
<br>
function is implemented or not? If it is implemented, knowing where it 
<br>
is defined would help me to find the origin of my problem and possibly 
<br>
extend the support of this functionality (if it is feasible). I would 
<br>
like to be able to link two different jobs together using these 
<br>
functions, ie. creating a communicator between the jobs.
<br>
<p>Thanks,
<br>
<p>Jerome
<br>
<p>On 07/09/2010 07:16 PM, Matney Sr, Kenneth D. wrote:
<br>
<span class="quotelev1">&gt; Hello Jerome,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first one is simple.  portals is not thead-safe on the Cray XT.  As, I recall,
</span><br>
<span class="quotelev1">&gt; only the master thread can post an event. although any thread can receive
</span><br>
<span class="quotelev1">&gt; the event.  Although, i might have it backwards.  It has been a couple of years
</span><br>
<span class="quotelev1">&gt; since I played with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The second one depends on how you use your Cray XT.  In our case, the machine
</span><br>
<span class="quotelev1">&gt; is used as process-per-core; i.e., not as a collection of SMPs.  For performance
</span><br>
<span class="quotelev1">&gt; reasons, you definitely do not want MPI threads.  Also, since it is run process-per-core,
</span><br>
<span class="quotelev1">&gt; there is nothing to be gained with progress threads.  Portals events will generate a kernel
</span><br>
<span class="quotelev1">&gt; level interrupt.  Whether you can run the XT as a cluster of SMPs is another question
</span><br>
<span class="quotelev1">&gt; entirely.  We really have not tried this in the context of OMPI.  But, in conjunction with
</span><br>
<span class="quotelev1">&gt; portals, this might open a &quot;can of worms&quot;.  For example, any thread can be run on any
</span><br>
<span class="quotelev1">&gt; core.  But the portals ID for a thread will be the NID/PID pair for that core.  If two threads
</span><br>
<span class="quotelev1">&gt; get scheduled to the same core, it would not be pretty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could see lots of reasons why spawn might fail.  First, it is run on a compute node.
</span><br>
<span class="quotelev1">&gt; There is no way for a compute node to run a process on another compute node.
</span><br>
<span class="quotelev1">&gt; Also, there will be no rank/size initialization forthcoming from ALPS.  So, even if
</span><br>
<span class="quotelev1">&gt; it got past this, it would be running on the same node as its parent.
</span><br>
<span class="quotelev1">&gt; -- Ken Matney, Sr.
</span><br>
<span class="quotelev1">&gt;     Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 9, 2010, at 7:53 AM, Jerome Soumagne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said in the previous e-mail, we've recently installed OpenMPI on a Cray XT5 machine, and we therefore use the portals and the alps libraries. Thanks for providing the configuration script from Jaguar, this was very helpful, it had just to be slightly adapted in order to use the latest CNL version installed on this machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some questions though regarding the use of the portals btl and mtl components. I noticed that when I compiled OpenMPI with mpi-thread support enabled and ran a job, the portals components did not want to initialize due to these funny lines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./mtl_portals_component.c
</span><br>
<span class="quotelev1">&gt; 182     /* we don't run with no stinkin' threads */
</span><br>
<span class="quotelev1">&gt; 183     if (enable_progress_threads || enable_mpi_threads) return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to know why are mpi threads disabled since threads are supported on the XT5, does the btl/mtl require to have thread-safety implemented or something like that or is it because of the portals library itself ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would also like to use the MPI_Comm_accept/connect functions, it seems that it's not possible to do that using the portals mtl even if the spawn seems to be supported, did I do something wrong or is it really not supported?
</span><br>
<span class="quotelev1">&gt; In this case, is it possible to extend this module to support these functions? We could help in doing that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like also to know, are there any plans for creating a module in order to use the DMAPP interface for the Gemini interconnect?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jerome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; J&#233;r&#244;me Soumagne
</span><br>
<span class="quotelev1">&gt; Scientific Computing Research Group
</span><br>
<span class="quotelev1">&gt; CSCS, Swiss National Supercomputing Centre
</span><br>
<span class="quotelev1">&gt; Galleria 2, Via Cantonale  | Tel: +41 (0)91 610 8258
</span><br>
<span class="quotelev1">&gt; CH-6928 Manno, Switzerland | Fax: +41 (0)91 610 8282
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ATT00001..txt&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Previous message:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>In reply to:</strong> <a href="8167.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
<li><strong>Reply:</strong> <a href="8169.php">Ralph Castain: "Re: [OMPI devel] some questions regarding the portals modules"</a>
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
