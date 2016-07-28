<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 02:28:02 2005" -->
<!-- isoreceived="20050920072802" -->
<!-- sent="Tue, 20 Sep 2005 09:27:51 +0200" -->
<!-- isosent="20050920072751" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compile problem" -->
<!-- id="C8C7B681-9912-440F-B8FE-5F06F359DF9A_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7EF743C1-016E-4F15-868A-A0483CC9FB62_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 02:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Lisa Glendenning: "[O-MPI users] Compile problem"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Lisa Glendenning: "[O-MPI users] Compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<li><strong>Reply:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 19, 2005, at 11:39 PM, Lisa Glendenning wrote:
<br>
<p><span class="quotelev1">&gt; Output is attached.  The make failed (see the tail of make.LOG).  I  
</span><br>
<span class="quotelev1">&gt; am on a Mac OS 10.4, using the packaged gcc, and am attempting -- 
</span><br>
<span class="quotelev1">&gt; enable-static.  I previously got OpenMPI to build without the -- 
</span><br>
<span class="quotelev1">&gt; enable-static option.  I am using version 1.0a1r7423.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;output.tar.gz&gt;
</span><br>
<p>There is a linking issue with Open MPI on OS X when using static  
<br>
libraries.  The simple work around is to disable one of the  
<br>
components that causes a naming conflict.  If you add the option &quot;-- 
<br>
enable-mca-no-build=pml-uniq&quot; to configure and rebuild, you shouldn't  
<br>
run into any problems.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0152.php">Jeff Squyres: "Re: [O-MPI users] attempt to override read-only MCA parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>Previous message:</strong> <a href="0150.php">Lisa Glendenning: "[O-MPI users] Compile problem"</a>
<li><strong>In reply to:</strong> <a href="0150.php">Lisa Glendenning: "[O-MPI users] Compile problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
<li><strong>Reply:</strong> <a href="0154.php">Lisa Glendenning: "Re: [O-MPI users] Compile problem"</a>
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
