<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 10:20:03 2007" -->
<!-- isoreceived="20070727142003" -->
<!-- sent="Fri, 27 Jul 2007 10:19:50 -0400" -->
<!-- isosent="20070727141950" -->
<!-- name="Andrew Lofthouse" -->
<!-- email="loftyhauser_at_[hidden]" -->
<!-- subject="[OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin" -->
<!-- id="46A9FF06.5060705_at_fastmail.fm" -->
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
<strong>From:</strong> Andrew Lofthouse (<em>loftyhauser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 10:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>Reply:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've just built and installed openmpi-1.2.3 on cygwin.  It seems that 
<br>
most files depend on opal/mca/timer/windows/timer_windows.h, but 
<br>
opal/mca/timer/windows/timer_windows_component.c depends on 
<br>
opal/timer/windows/timer_windows_component.h (which doesn't exist).  I 
<br>
simply copied timer_windows.h to timer_windows_component.h and it built 
<br>
correctly.  I haven't yet compiled any MPI applications to check correct 
<br>
operation.
<br>
<p>Regards,
<br>
<p>AJL
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
<li><strong>Reply:</strong> <a href="2055.php">George Bosilca: "Re: [OMPI devel] minor bug report for building openmpi-1.2.3 on cygwin"</a>
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
