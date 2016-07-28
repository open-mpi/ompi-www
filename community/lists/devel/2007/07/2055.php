<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 31 14:41:50 2007" -->
<!-- isoreceived="20070731184150" -->
<!-- sent="Tue, 31 Jul 2007 14:41:41 -0400" -->
<!-- isosent="20070731184141" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin" -->
<!-- id="97B5FD4C-FCD7-4E81-8D6A-C140C5AF9E90_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46A9FF06.5060705_at_fastmail.fm" -->
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
<strong>Date:</strong> 2007-07-31 14:41:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2054.php">Dries Kimpe: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew,
<br>
<p>Thanks for the info. I fix this problem in the 1.3 release. If you  
<br>
download the nightly build after revision 15711, it will be corrected.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 27, 2007, at 10:19 AM, Andrew Lofthouse wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just built and installed openmpi-1.2.3 on cygwin.  It seems that
</span><br>
<span class="quotelev1">&gt; most files depend on opal/mca/timer/windows/timer_windows.h, but
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/windows/timer_windows_component.c depends on
</span><br>
<span class="quotelev1">&gt; opal/timer/windows/timer_windows_component.h (which doesn't exist).  I
</span><br>
<span class="quotelev1">&gt; simply copied timer_windows.h to timer_windows_component.h and it  
</span><br>
<span class="quotelev1">&gt; built
</span><br>
<span class="quotelev1">&gt; correctly.  I haven't yet compiled any MPI applications to check  
</span><br>
<span class="quotelev1">&gt; correct
</span><br>
<span class="quotelev1">&gt; operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; AJL
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2056.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2054.php">Dries Kimpe: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>In reply to:</strong> <a href="2030.php">Andrew Lofthouse: "[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
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
