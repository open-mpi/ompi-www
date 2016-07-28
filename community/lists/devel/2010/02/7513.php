<?
$subject_val = "Re: [OMPI devel] question about pids";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 27 03:33:33 2010" -->
<!-- isoreceived="20100227083333" -->
<!-- sent="Sat, 27 Feb 2010 01:33:24 -0700" -->
<!-- isosent="20100227083324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question about pids" -->
<!-- id="7A0A80B9-453D-4362-95EB-B3E8266F1852_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="321CC113-9242-44F3-8284-7EE90B08CCC2_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question about pids<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-27 03:33:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>In reply to:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This look okay?
<br>
<p>Ralph:svn-trunk rhc$ mpirun -n 3 -xml -output-proctable hostname
<br>
&lt;mpirun&gt;
<br>
&lt;map&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;host name=&quot;Ralph&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;0&quot; pid=&quot;11313&quot; status=&quot;launched&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;1&quot; pid=&quot;11314&quot; status=&quot;launched&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;2&quot; pid=&quot;11315&quot; status=&quot;launched&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/host&gt;
<br>
&lt;/map&gt;
<br>
<p>&lt;stdout rank=&quot;1&quot;&gt;Ralph&amp;#010;&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;Ralph&amp;#010;&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;2&quot;&gt;Ralph&amp;#010;&lt;/stdout&gt;
<br>
&lt;/mpirun&gt;
<br>
<p>I added an mca parameter OMPI_MCA_orte_output_debugger_proctable, and a corresponding cmd line option --output-proctable. It basically just outputs the job map, but at a time when the pids are known and so will be included in the output.
<br>
<p><p>Added it to the trunk in r22725. We can adjust if you need something different.
<br>
<p><p>On Feb 26, 2010, at 7:03 AM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding a pid attribute to the process element would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 25, 2010, at 9:07 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Easy to do. I'll dump all the pids at the same time when the launch completes - effectively, it will be at the same point used by other debuggers to attach.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Have it for you in the trunk this weekend. Can you suggest an xml format you would like? Otherwise, I'll just use the current proc output (used in the map output) and add a &quot;pid&quot; field to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Feb 25, 2010 at 10:43 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We'd like this to be able to support attaching a debugger to the application. Would it be difficult to provide? We don't need the information all at once, each PID could be sent as the process launches (as long as the XML is correctly formatted) if that makes it any easier.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 23, 2010, at 3:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I don't see a way to currently do that - the rmaps display comes -before- process launch, so the pid will not be displayed.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do you need to see them? We'd have to add that output somewhere post-launch - perhaps when debuggers are initialized.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Feb 23, 2010, at 12:58 PM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I notice that you've got support in the XML output code to display the pids of the processes, but I can't see how to enable them. Can you give me any pointers?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7513/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7514.php">Ralph Castain: "Re: [OMPI devel] Rankfile related problems"</a>
<li><strong>Previous message:</strong> <a href="7512.php">Ralph Castain: "Re: [OMPI devel] Openmpi with slurm : salloc -c"</a>
<li><strong>In reply to:</strong> <a href="7506.php">Greg Watson: "Re: [OMPI devel] question about pids"</a>
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
