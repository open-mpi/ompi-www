<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 07:43:47 2006" -->
<!-- isoreceived="20060508114347" -->
<!-- sent="Mon, 8 May 2006 13:43:38 +0200" -->
<!-- isosent="20060508114338" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] [SPAM:### 81%] Re: typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="6B524107-8843-4A7B-9D5F-CD2E23B60F82_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445F2B6A.9080001_at_cs.kuleuven.be" -->
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
<strong>Date:</strong> 2006-05-08 07:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2006, at 1:28 PM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; I searched the entire code for other references to 'LSFLAGS', but  
</span><br>
<span class="quotelev1">&gt; couldn't find any.
</span><br>
<span class="quotelev1">&gt; This probably means LSFLAGS is a typo? (After all, S is next to D  
</span><br>
<span class="quotelev1">&gt; on the keyboard ;-)
</span><br>
<span class="quotelev1">&gt; Anyway, changing LSFLAGS to LDFLAGS makes everything work again.
</span><br>
<p>Yes, this is a bug -- it should be LDFLAGS instead of LSFLAGS.  I'll  
<br>
fix that today and get it pushed out into our release branches so  
<br>
that both 1.0.3 and 1.1 will contain the fix.
<br>
<p><span class="quotelev1">&gt; PS. Shouldn't configure warn if no io mca can be built?
</span><br>
<span class="quotelev1">&gt; Granted, configure cannot know if another one can be loaded  
</span><br>
<span class="quotelev1">&gt; dynamically later on,
</span><br>
<span class="quotelev1">&gt; but I did specify --enable-io-romio (which actually is the  
</span><br>
<span class="quotelev1">&gt; default), so an error/warning
</span><br>
<span class="quotelev1">&gt; would be a appreciated. Otherwise, if you happen to miss the one- 
</span><br>
<span class="quotelev1">&gt; line output in
</span><br>
<span class="quotelev1">&gt; the total configure output mentioning that romio will not be built,  
</span><br>
<span class="quotelev1">&gt; you end up
</span><br>
<span class="quotelev1">&gt; with an MPI implementation returning an error code for every  
</span><br>
<span class="quotelev1">&gt; MPI_File call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only found out that no MPI-IO was being included in Open MPI  
</span><br>
<span class="quotelev1">&gt; after trying to debug a non-existent
</span><br>
<span class="quotelev1">&gt; function ;-)
</span><br>
<p>We go back and forth on this one, actually.  We don't want Open MPI  
<br>
to fail to configure if there is no I/O component available, in part  
<br>
because developer testing builds generally don't want to wait for  
<br>
ROMIO to build.
<br>
<p>However, we really *should* abort configure and warn the user if -- 
<br>
enable-io-romio is given and ROMIO fails to configure.  I will fix  
<br>
this with the LDFLAGS fix.  I'll let you know when the fixes become  
<br>
available
<br>
<p><p>Thanks,
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
<li><strong>Next message:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Previous message:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0856.php">Dries Kimpe: "[OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>Reply:</strong> <a href="0858.php">Ralf Wildenhues: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
