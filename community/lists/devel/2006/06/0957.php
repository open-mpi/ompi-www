<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 30 09:08:42 2006" -->
<!-- isoreceived="20060630130842" -->
<!-- sent="Fri, 30 Jun 2006 07:08:45 -0600" -->
<!-- isosent="20060630130845" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] help - urgent" -->
<!-- id="C0CA7E7D.326F%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060630114523.31608.qmail_at_web60419.mail.yahoo.com" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-30 09:08:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
<li><strong>In reply to:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Amrita
<br>
<p>I&#185;m not entirely sure I understand your questions, but will try to answer
<br>
them below. If you can share what you are doing, we&#185;d be happy to provide
<br>
advice.
<br>
<p>Ralph
<br>
<p><p>On 6/30/06 5:45 AM, &quot;amrita mathuria&quot; &lt;amrita_mathuria18_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; hi...
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;     I am working with open mpi source code....
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; I want to know what is the role of daemons in the whole process...
</span><br>
<p>Generally, we use the host system's launch capability (rsh, ssh, SLURM,
<br>
etc.) to launch a daemon on every node that will be used for a job. The
<br>
daemons are then instructed to launch the application's processes on their
<br>
local node.
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; After mpirun launches the daemons and daemons launches the process on
</span><br>
<span class="quotelev1">&gt; different nodes.....
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Daemons are used to forward I/O between mpirun and the application
<br>
processes, and also monitor the state of the processes they launched. In
<br>
this latter case, the daemons specifically alert mpirun to abnormal
<br>
terminations. Other than that, the daemons don't really do anything after
<br>
launch.
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; And also do the mpirun interacts with the daemons after launching them....or
</span><br>
<span class="quotelev1">&gt; it directly interact with the processes when there is a need....?????
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Mpirun always interacts directly with the processes. The only exception is
<br>
when mpirun needs to order termination of the entire job (e.g., if the user
<br>
issues a ctrl-C) - in this case, the daemon can be ordered to &quot;kill&quot; the
<br>
local process.
<br>
&nbsp;&nbsp;
<br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; Amrita
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Want to be your own boss? Learn how on  Yahoo! Small Business.
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://us.rd.yahoo.com/evt=41244/*http://smallbusiness.yahoo.com/r-index">http://us.rd.yahoo.com/evt=41244/*http://smallbusiness.yahoo.com/r-index</a>&gt;
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/07/0958.php">George Bosilca: "[OMPI devel] orted problem"</a>
<li><strong>Previous message:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
<li><strong>In reply to:</strong> <a href="0956.php">amrita mathuria: "[OMPI devel] help - urgent"</a>
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
