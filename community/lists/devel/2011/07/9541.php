<?
$subject_val = "Re: [OMPI devel] orte question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 22 17:57:41 2011" -->
<!-- isoreceived="20110722215741" -->
<!-- sent="Fri, 22 Jul 2011 17:57:31 -0400" -->
<!-- isosent="20110722215731" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte question" -->
<!-- id="2AE9C6C1-6282-4FFB-8E8E-1EF59821B640_at_computer.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9F80FDD4-970E-4961-A1CE-72A10530812A_at_open-mpi.org" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-22 17:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9542.php">Paul H. Hargrove: "[OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="9540.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 status"</a>
<li><strong>In reply to:</strong> <a href="9539.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I'd like three things :-)
<br>
<p>a) A --report-jobid option that prints the jobid on the first line in a form that can be passed to the -jobid option on ompi-ps. Probably tagging it in the output if -tag-output is enabled (e.g. jobid:&lt;jobid&gt;) would be a good idea.
<br>
<p>b) The orte-ps command output to use the same jobid format.
<br>
<p>c) A more easily parsable output format from ompi-ps. It doesn't need to be a full blown XML format, just something like the following would suffice:
<br>
<p>jobid:719585280:state:Running:slots:1:num procs:4
<br>
process_name:./x:rank:0:pid:3082:node:node1.com:state:Running
<br>
process_name:./x:rank:1:pid:4567:node:node5.com:state:Running
<br>
process_name:./x:rank:2:pid:2343:node:node4.com:state:Running
<br>
process_name:./x:rank:3:pid:3422:node:node7.com:state:Running
<br>
jobid:345346663:state:running:slots:1:num procs:2
<br>
process_name:./x:rank:0:pid:5563:node:node2.com:state:Running
<br>
process_name:./x:rank:1:pid:6677:node:node3.com:state:Running
<br>
<p>I'd be happy to help with any or all of these.
<br>
<p>Cheers,
<br>
Greg
<br>
<p>On Jul 22, 2011, at 10:18 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...well, it looks like we could have made this nicer than we did :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you add --report-uri to the mpirun command line, you'll get back the uri for that mpirun. This has the form of &lt;jobid&gt;:&lt;uri&gt;. As the -h option indicates:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -report-uri | --report-uri &lt;arg0&gt;  
</span><br>
<span class="quotelev1">&gt;                         Printout URI on stdout [-], stderr [+], or a file
</span><br>
<span class="quotelev1">&gt;                         [anything else]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;jobid&quot; required by the orte-ps command is the one reported there. We could easily add a --report-jobid option if that makes things easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As to the difference in how orte-ps shows the jobid...well, that's probably historical. orte-ps uses an orte utility function to print the jobid, and that utility always shows the jobid in component form. Again, could add or just use the integer version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 22, 2011, at 7:01 AM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know if it's possible to get the orte jobid from the mpirun command? If not, how are you supposed to get it to use with orte-ps? Also, orte-ps reports the jobid in [x,y] notation, but the jobid argument seems to be an integer. How does that work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="9542.php">Paul H. Hargrove: "[OMPI devel] &quot;The MPI_Init() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Previous message:</strong> <a href="9540.php">Jeff Squyres: "[OMPI devel] Open MPI v1.5 status"</a>
<li><strong>In reply to:</strong> <a href="9539.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
<li><strong>Reply:</strong> <a href="9543.php">Ralph Castain: "Re: [OMPI devel] orte question"</a>
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
