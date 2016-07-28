<?
$subject_val = "Re: [OMPI users] using the xrc queues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  9 16:10:34 2013" -->
<!-- isoreceived="20130709201034" -->
<!-- sent="Tue, 9 Jul 2013 23:10:29 +0300" -->
<!-- isosent="20130709201029" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using the xrc queues" -->
<!-- id="CAAO1KyZj0Fy2=FSyL-rNWyHMbsADKvs+APRcTAYLjY50nHdCKg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-09 16:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22310.php">Tim Carlson: "[OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22308.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I would suggest use MXM (part of mofed, can be downloaded as standalone rpm
<br>
from <a href="http://mellanox.com/products/mxm">http://mellanox.com/products/mxm</a> for ofed)
<br>
<p>It uses UD (constant memory footprint) and should provide good performance.
<br>
The next MXM v2.0 will support RC and DC (reliable UD) as well.
<br>
<p>Once mxm is installed from rpm (or extracted elsewhere from rpm-&gt;tarball) -
<br>
you can point ompi configure with &quot;--with-mxm=/path/to/mxm&quot;)
<br>
Regards
<br>
M
<br>
<p><p>On Fri, Jul 5, 2013 at 10:33 PM, Ben &lt;Benjamin.M.Auer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm part of a team that maintains a global climate model running under
</span><br>
<span class="quotelev1">&gt; mpi. Recently we have been trying it out with different mpi stacks
</span><br>
<span class="quotelev1">&gt; at high resolution/processor counts.
</span><br>
<span class="quotelev1">&gt; At one point in the code there is a large number of mpi_isends/mpi_recv
</span><br>
<span class="quotelev1">&gt; (tens to hundreds of thousands) when data distributed across all mpi
</span><br>
<span class="quotelev1">&gt; processes must be collective on a particular processor or processors be
</span><br>
<span class="quotelev1">&gt; transformed to a new resolution before writing. At first the model was
</span><br>
<span class="quotelev1">&gt; crashing with a message:
</span><br>
<span class="quotelev1">&gt; &quot;A process failed to create a queue pair. This usually means either the
</span><br>
<span class="quotelev1">&gt; device has run out of queue pairs (too many connections) or there are
</span><br>
<span class="quotelev1">&gt; insufficient resources available to allocate a queue pair (out of memory).
</span><br>
<span class="quotelev1">&gt; The latter can happen if either 1) insufficient memory is available, or 2)
</span><br>
<span class="quotelev1">&gt; no more physical memory can be registered with the device.&quot;
</span><br>
<span class="quotelev1">&gt; when it hit the part of code with the send/receives. Watching the node
</span><br>
<span class="quotelev1">&gt; memory in an xterm I could see the memory skyrocket and fill the node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somewhere we found a suggestion try using the xrc queues (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?**category=openfabrics#ib-xrc<http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc">http://www.open-mpi.org/faq/?**category=openfabrics#ib-xrc<http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc</a>&gt;)
</span><br>
<span class="quotelev1">&gt; to get around this problem and indeed running with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenv OMPI_MCA_btl_openib_receive_**queues &quot;X,128,256,192,128:X,2048,256,
</span><br>
<span class="quotelev1">&gt; **128,32:X,12288,256,128,32:X,**65536,256,128,32&quot;
</span><br>
<span class="quotelev1">&gt; mpirun --bind-to-core -np numproc ./app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allowed the model to successfully run. It still seems to use a large
</span><br>
<span class="quotelev1">&gt; amount of memory when it writes (on the order of several Gb). Does anyone
</span><br>
<span class="quotelev1">&gt; have any  suggestions on how to perhaps tweak the settings to help with
</span><br>
<span class="quotelev1">&gt; memory use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ben Auer, PhD   SSAI, Scientific Programmer/Analyst
</span><br>
<span class="quotelev1">&gt; NASA GSFC,  Global Modeling and Assimilation Office
</span><br>
<span class="quotelev1">&gt; Code 610.1, 8800 Greenbelt Rd, Greenbelt, MD  20771
</span><br>
<span class="quotelev1">&gt; Phone: 301-286-9176               Fax: 301-614-6246
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/**mailman/listinfo.cgi/users<http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22309/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22310.php">Tim Carlson: "[OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>Previous message:</strong> <a href="22308.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22253.php">Ben: "[OMPI users] using the xrc queues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22314.php">Shamis, Pavel: "Re: [OMPI users] using the xrc queues"</a>
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
