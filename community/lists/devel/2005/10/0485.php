<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 18:23:32 2005" -->
<!-- isoreceived="20051024232332" -->
<!-- sent="Tue, 25 Oct 2005 01:23:23 +0200" -->
<!-- isosent="20051024232323" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="20051024232323.GA26624_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E12B9F78-AE65-4ACF-85CB-976914382BB9_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 18:23:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0484.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0487.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Brian Barrett wrote on Tue, Oct 25, 2005 at 01:15:41AM CEST:
<br>
<span class="quotelev1">&gt; On Oct 24, 2005, at 6:07 PM, Troy Benjegerdes wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Oct 24, 2005 at 10:40:39AM -0500, Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Can you build dynamically and run &quot;ompi_info -all&quot; and send the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; results to the list?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To save list bandwidth..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://scl.ameslab.gov/~troy/ompi_debug/">http://scl.ameslab.gov/~troy/ompi_debug/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of ompi_info seems to indicate that Open MPI was unable to  
</span><br>
<span class="quotelev1">&gt; open any of its components.  Can you look in /usr/local/lib/openib  
</span><br>
<span class="quotelev1">&gt; and see if there are a bunch of .la and .so files in there?
</span><br>
<p>Quoting from above:
<br>
<p>| *** GNU libltdl setup
<br>
| configure: OMPI configuring in opal/libltdl
<br>
| configure: running /bin/sh './configure'  --enable-ltdl-convenience --disable-ltdl-install --enable-shared --disable-static --cache-file=/dev/null --srcdir=.
<br>
| configure: /bin/sh './configure' *failed* for opal/libltdl
<br>
<p>Troy, could you show opal/libltdl/config.log, or, if that does not
<br>
reveal anything suspicious, the corresponding part of toplevel
<br>
config.log (above message should be recorded there)?  Thanks.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0484.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0486.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0487.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
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
