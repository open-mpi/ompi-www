<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 10 18:59:54 2005" -->
<!-- isoreceived="20051010235954" -->
<!-- sent="Mon, 10 Oct 2005 16:59:50 -0700" -->
<!-- isosent="20051010235950" -->
<!-- name="Brooks Davis" -->
<!-- email="brooks_at_[hidden]" -->
<!-- subject="Re:  porting guide?" -->
<!-- id="20051010235950.GC3630_at_odin.ac.hmc.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D3C0C10-C521-4849-88E2-29F157C7F05F_at_open-mpi.org" -->
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
<strong>From:</strong> Brooks Davis (<em>brooks_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 18:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Oct 10, 2005 at 06:25:47PM -0500, Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; On Oct 10, 2005, at 6:12 PM, Brooks Davis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm looking at porting Open MPI to FreeBSD and am trying to get a  
</span><br>
<span class="quotelev2">&gt; &gt; handle
</span><br>
<span class="quotelev2">&gt; &gt; on the requirements.  The issue I'm hitting so far is the opal timer
</span><br>
<span class="quotelev2">&gt; &gt; code which won't finish configuration at the moment.  Where is the API
</span><br>
<span class="quotelev2">&gt; &gt; to implement documented?  Is there an intent to implement a sub- 
</span><br>
<span class="quotelev2">&gt; &gt; optimal
</span><br>
<span class="quotelev2">&gt; &gt; version with POSIX calls at some point?  If I understand the current
</span><br>
<span class="quotelev2">&gt; &gt; code correctly, something based on clock_gettime() and clock_getres()
</span><br>
<span class="quotelev2">&gt; &gt; should do it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are there other things I can expect to have to implement?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should actually be about it.  In theory, Open MPI should have  
</span><br>
<span class="quotelev1">&gt; fallen back to using gettimeofday().  Can you send the output of  
</span><br>
<span class="quotelev1">&gt; configure and the config.log file?  As for implementing a FreeBSD- 
</span><br>
<span class="quotelev1">&gt; specific timer component, if clock_gettime() and clock_getres()  
</span><br>
<span class="quotelev1">&gt; provide reasonably low perturbationtime reference, they would be be  
</span><br>
<span class="quotelev1">&gt; ideal.
</span><br>
<p>The configure output ends with:
<br>
<p>...
<br>
config.status: creating test/util/Makefile
<br>
config.status: creating include/ompi_config.h
<br>
config.status: creating include/mpi.h
<br>
config.status: include/mpi.h is unchanged
<br>
config.status: linking ./opal/mca/timer/base/timer_base_null.h to opal/mca/timer/base/base_impl.h
<br>
<p>I've attached gziped copies of the configure output and config.log.
<br>
<p>-- Brooks
<br>
<p><pre>
-- 
Any statement of the form &quot;X is the one, true Y&quot; is FALSE.
PGP fingerprint 655D 519C 26A7 82E7 2529  9BF0 5D8E 8BE9 F238 1AD4


</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-0436/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="../../att-0436/configure.out.gz">configure.out.gz</a>
</ul>
<!-- attachment="configure.out.gz" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0436/03-part">stored</a>
</ul>
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Previous message:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>In reply to:</strong> <a href="0435.php">Brian Barrett: "Re:  porting guide?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
<li><strong>Reply:</strong> <a href="0437.php">Brian Barrett: "Re:  porting guide?"</a>
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
