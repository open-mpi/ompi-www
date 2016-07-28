<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 18 14:19:58 2005" -->
<!-- isoreceived="20050718191958" -->
<!-- sent="Mon, 18 Jul 2005 15:18:14 -0400" -->
<!-- isosent="20050718191814" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  OMPI_MCA_ptl_base_exclude=sm" -->
<!-- id="DEB8130E-70FB-4F8E-A10B-8767C927198B_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6D8ED0B8-FCAB-410D-AB60-01109432F03F_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-07-18 14:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>In reply to:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are several possibilities to make this option the default one.  
<br>
The simplest one is to use the mca-params.conf file. In your home  
<br>
directory create a .openmpi directory and inside create a file called  
<br>
mca-params.conf. You can add in this file all options that you want  
<br>
to be the default behavior of your OMPI.
<br>
<p>Here is mine:
<br>
component_show_load_errors=0
<br>
ptl_tcp_if_include=eth0
<br>
ptl_tcp_if_exclude=lo
<br>
ptl_base_include=tcp,self
<br>
pml=uniq
<br>
mpi_yield_when_idle = 0
<br>
mpi_event_tick_rate=0
<br>
<p>Notice that you don't have to add the OMPI_MCA in the beginning. You  
<br>
can add whatever you want just pick the name as printed by the  
<br>
ompi_info tool.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 18, 2005, at 2:49 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Currently I have to set this environment variable on bproc/x86_64 or
</span><br>
<span class="quotelev1">&gt; mpirun just hangs. Would it be possible to make this the default
</span><br>
<span class="quotelev1">&gt; setting until it's fixed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li><strong>Next message:</strong> <a href="0033.php">Josh Hursey: "FYI: Failing intel tests"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Jeff Squyres: "Re:  July meeting"</a>
<li><strong>In reply to:</strong> <a href="0027.php">Greg Watson: "OMPI_MCA_ptl_base_exclude=sm"</a>
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
