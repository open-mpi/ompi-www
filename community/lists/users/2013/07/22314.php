<?
$subject_val = "Re: [OMPI users] using the xrc queues";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 10 19:24:15 2013" -->
<!-- isoreceived="20130710232415" -->
<!-- sent="Wed, 10 Jul 2013 19:24:09 -0400" -->
<!-- isosent="20130710232409" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using the xrc queues" -->
<!-- id="07EA957F-FE6C-43A0-A819-EB750930AB9A_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51D71F94.7020905_at_nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] using the xrc queues<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-10 19:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Previous message:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ben,
<br>
<p>You may try to disable registration cache,  it may relieve pressure on memory resources. 
<br>
--mca mpi_leave_pinned 0
<br>
<p>You may find a bit more details here: <a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
<p>Using the option you may observe drop in BW performance.
<br>
<p>Regards,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Computer Science Research Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jul 5, 2013, at 3:33 PM, Ben &lt;Benjamin.M.Auer_at_[hidden]&gt; wrote:
&gt; I'm part of a team that maintains a global climate model running under 
&gt; mpi. Recently we have been trying it out with different mpi stacks
&gt; at high resolution/processor counts.
&gt; At one point in the code there is a large number of mpi_isends/mpi_recv 
&gt; (tens to hundreds of thousands) when data distributed across all mpi 
&gt; processes must be collective on a particular processor or processors be 
&gt; transformed to a new resolution before writing. At first the model was
&gt; crashing with a message:
&gt; &quot;A process failed to create a queue pair. This usually means either the 
&gt; device has run out of queue pairs (too many connections) or there are 
&gt; insufficient resources available to allocate a queue pair (out of 
&gt; memory). The latter can happen if either 1) insufficient memory is 
&gt; available, or 2) no more physical memory can be registered with the device.&quot;
&gt; when it hit the part of code with the send/receives. Watching the node 
&gt; memory in an xterm I could see the memory skyrocket and fill the node.
&gt; 
&gt; Somewhere we found a suggestion try using the xrc queues 
&gt; (<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc">http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc</a>) to get around 
&gt; this problem and indeed running with
&gt; 
&gt; setenv OMPI_MCA_btl_openib_receive_queues 
&gt; &quot;X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32&quot;
&gt; mpirun --bind-to-core -np numproc ./app
&gt; 
&gt; allowed the model to successfully run. It still seems to use a large 
&gt; amount of memory when it writes (on the order of several Gb). Does 
&gt; anyone have any  suggestions on how to perhaps tweak the settings to 
&gt; help with memory use.
&gt; 
&gt; -- 
&gt; Ben Auer, PhD   SSAI, Scientific Programmer/Analyst
&gt; NASA GSFC,  Global Modeling and Assimilation Office
&gt; Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD  20771
&gt; Phone: 301-286-9176               Fax: 301-614-6246
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22315.php">Don Warren: "[OMPI users] Open MPI 1.6.5 &quot;make all&quot; fails on Win7 with &quot;system cannot find file specified&quot;"</a>
<li><strong>Previous message:</strong> <a href="22313.php">Tim Carlson: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
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
