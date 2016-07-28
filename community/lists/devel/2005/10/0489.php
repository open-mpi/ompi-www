<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 19:31:01 2005" -->
<!-- isoreceived="20051025003101" -->
<!-- sent="Mon, 24 Oct 2005 19:30:54 -0500" -->
<!-- isosent="20051025003054" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  ppc64 linux bustage?" -->
<!-- id="1069C41F-6E59-4543-9305-BC9D85AF1661_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051024235626.GR30127_at_kalmia.hozed.org" -->
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
<strong>Date:</strong> 2005-10-24 19:30:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0487.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 24, 2005, at 6:56 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev2">&gt;&gt; | *** GNU libltdl setup
</span><br>
<span class="quotelev2">&gt;&gt; | configure: OMPI configuring in opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt; | configure: running /bin/sh './configure'  --enable-ltdl- 
</span><br>
<span class="quotelev2">&gt;&gt; convenience --disable-ltdl-install --enable-shared --disable- 
</span><br>
<span class="quotelev2">&gt;&gt; static --cache-file=/dev/null --srcdir=.
</span><br>
<span class="quotelev2">&gt;&gt; | configure: /bin/sh './configure' *failed* for opal/libltdl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Troy, could you show opal/libltdl/config.log, or, if that does not
</span><br>
<span class="quotelev2">&gt;&gt; reveal anything suspicious, the corresponding part of toplevel
</span><br>
<span class="quotelev2">&gt;&gt; config.log (above message should be recorded there)?  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ARGGGG.. libltdl3-dev seemed to not be installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any way to make a check for this more explicit in autogen.sh?
</span><br>
<p>We don't use the system-installed libltdl, and always build our own.   
<br>
It looks like you should only need the libtool package, which we  
<br>
should check for already in autogen.sh.  Was there any useful error  
<br>
message along the way?
<br>
<p><p>Brian
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
<li><strong>Next message:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Previous message:</strong> <a href="0488.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0487.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
<li><strong>Reply:</strong> <a href="0490.php">Troy Benjegerdes: "Re:  ppc64 linux bustage?"</a>
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
