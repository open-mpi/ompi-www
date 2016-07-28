<?
$subject_val = "[OMPI users] using the xrc queues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  5 15:33:50 2013" -->
<!-- isoreceived="20130705193350" -->
<!-- sent="Fri, 5 Jul 2013 15:33:40 -0400" -->
<!-- isosent="20130705193340" -->
<!-- name="Ben" -->
<!-- email="Benjamin.M.Auer_at_[hidden]" -->
<!-- subject="[OMPI users] using the xrc queues" -->
<!-- id="51D71F94.7020905_at_nasa.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] using the xrc queues<br>
<strong>From:</strong> Ben (<em>Benjamin.M.Auer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-05 15:33:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22252.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>Reply:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>Reply:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm part of a team that maintains a global climate model running under 
<br>
mpi. Recently we have been trying it out with different mpi stacks
<br>
at high resolution/processor counts.
<br>
At one point in the code there is a large number of mpi_isends/mpi_recv 
<br>
(tens to hundreds of thousands) when data distributed across all mpi 
<br>
processes must be collective on a particular processor or processors be 
<br>
transformed to a new resolution before writing. At first the model was
<br>
crashing with a message:
<br>
&quot;A process failed to create a queue pair. This usually means either the 
<br>
device has run out of queue pairs (too many connections) or there are 
<br>
insufficient resources available to allocate a queue pair (out of 
<br>
memory). The latter can happen if either 1) insufficient memory is 
<br>
available, or 2) no more physical memory can be registered with the device.&quot;
<br>
when it hit the part of code with the send/receives. Watching the node 
<br>
memory in an xterm I could see the memory skyrocket and fill the node.
<br>
<p>Somewhere we found a suggestion try using the xrc queues 
<br>
(<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc">http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc</a>) to get around 
<br>
this problem and indeed running with
<br>
<p>setenv OMPI_MCA_btl_openib_receive_queues 
<br>
&quot;X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32&quot;
<br>
mpirun --bind-to-core -np numproc ./app
<br>
<p>allowed the model to successfully run. It still seems to use a large 
<br>
amount of memory when it writes (on the order of several Gb). Does 
<br>
anyone have any  suggestions on how to perhaps tweak the settings to 
<br>
help with memory use.
<br>
<p><pre>
-- 
Ben Auer, PhD   SSAI, Scientific Programmer/Analyst
NASA GSFC,  Global Modeling and Assimilation Office
Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD  20771
Phone: 301-286-9176               Fax: 301-614-6246
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22254.php">Michael Thomadakis: "[OMPI users] How to select specific out of multiple interfaces for communication and support for heterogeneous fabrics"</a>
<li><strong>Previous message:</strong> <a href="22252.php">Jed O. Kaplan: "Re: [OMPI users] example program &quot;ring&quot; hangs when running across multiple hardware nodes (SOLVED)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>Reply:</strong> <a href="22309.php">Mike Dubman: "Re: [OMPI users] using the xrc queues"</a>
<li><strong>Reply:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
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
