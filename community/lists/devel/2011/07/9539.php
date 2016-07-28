<?
$subject_val = "Re: [OMPI devel] orte question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 10:18:59 2011" -->
<!-- isoreceived="20110722141859" -->
<!-- sent="Fri, 22 Jul 2011 08:18:29 -0600" -->
<!-- isosent="20110722141829" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte question" -->
<!-- id="9F80FDD4-970E-4961-A1CE-72A10530812A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F8A1145E-9C62-4E97-9A69-A38F36B2DAE3_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 10:18:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9540.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 status"</a>
<li><strong>Previous message:</strong> <a href="9538.php">Greg Watson: "[OMPI devel] orte question"</a>
<li><strong>In reply to:</strong> <a href="9538.php">Greg Watson: "[OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...well, it looks like we could have made this nicer than we did :-/
<br>
<p>If you add --report-uri to the mpirun command line, you'll get back the uri for that mpirun. This has the form of &lt;jobid&gt;:&lt;uri&gt;. As the -h option indicates:
<br>
<p>&nbsp;&nbsp;-report-uri | --report-uri &lt;arg0&gt;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Printout URI on stdout [-], stderr [+], or a file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[anything else]
<br>
<p>The &quot;jobid&quot; required by the orte-ps command is the one reported there. We could easily add a --report-jobid option if that makes things easier.
<br>
<p>As to the difference in how orte-ps shows the jobid...well, that's probably historical. orte-ps uses an orte utility function to print the jobid, and that utility always shows the jobid in component form. Again, could add or just use the integer version.
<br>
<p><p>On Jul 22, 2011, at 7:01 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone know if it's possible to get the orte jobid from the mpirun command? If not, how are you supposed to get it to use with orte-ps? Also, orte-ps reports the jobid in [x,y] notation, but the jobid argument seems to be an integer. How does that work?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9540.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 status"</a>
<li><strong>Previous message:</strong> <a href="9538.php">Greg Watson: "[OMPI devel] orte question"</a>
<li><strong>In reply to:</strong> <a href="9538.php">Greg Watson: "[OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9541.php">Greg Watson: "Re: [OMPI devel] orte question"</a>
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
