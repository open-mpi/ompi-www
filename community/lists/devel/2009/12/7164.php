<?
$subject_val = "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 10:42:53 2009" -->
<!-- isoreceived="20091201154253" -->
<!-- sent="Tue, 1 Dec 2009 10:42:50 -0500" -->
<!-- isosent="20091201154250" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="D2A6F2E9-24B7-44AD-AF40-112EC8CD3E20_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0B23A2D43ABE4B09B023428AF5EEDD3A_at_CHANGILPC" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 10:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7165.php">Jeff Squyres: "[OMPI devel] Doodle to discuss 2 MPI_Request changes"</a>
<li><strong>Previous message:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7141.php">Thomas CI Yoon: "[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas,
<br>
<p>I have not tried to use the checkpoint/restart feature with GASNet  
<br>
over MPI, so I cannot comment directly on how they interact. However,  
<br>
the combination should work as long as the proper arguments (-am ft- 
<br>
enable-cr) are passed along to the mpirun command, and Open MPI is  
<br>
configured properly.
<br>
<p>The error message that you copied seems to indicate that the local  
<br>
daemon on one of the nodes failed to start a checkpoint of the target  
<br>
application. Often this is caused by one of two things:
<br>
&nbsp;&nbsp;- Open MPI was not configured with the fault tolerance thread, and  
<br>
the application is waiting for a long time in a computation loop (not  
<br>
entering the MPI library).
<br>
&nbsp;&nbsp;- The '-am ft-enable-cr' flag was not provided to the mpirun  
<br>
process, so the MPI application did not activate the C/R specific code  
<br>
paths and is therefore denying the request to checkpoint.
<br>
<p>Can you send me a bit more information:
<br>
&nbsp;&nbsp;- What version of Open MPI are you using?
<br>
&nbsp;&nbsp;- How did you configure Open MPI?
<br>
&nbsp;&nbsp;- What arguments are being passed to 'mpirun' when running with  
<br>
GASNet?
<br>
&nbsp;&nbsp;- Do you have any environment variables/MCA parameters set for Open  
<br>
MPI?
<br>
<p>-- Josh
<br>
<p>On Nov 22, 2009, at 7:13 PM, Thomas CI Yoon wrote:
<br>
<p><span class="quotelev1">&gt; Dear all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the  
</span><br>
<span class="quotelev1">&gt; checkpoint/restart function very well for my MPI applications.
</span><br>
<span class="quotelev1">&gt; But its checkpoint does not work for my GASNet applications which  
</span><br>
<span class="quotelev1">&gt; use the MPI conduit.
</span><br>
<span class="quotelev1">&gt; Is here anyone else to help me?
</span><br>
<span class="quotelev1">&gt; I wrote some code with GASNet API (Global-Address Space Networking: <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>) 
</span><br>
<span class="quotelev1">&gt;     and used MPI conduit for my gasnet application, so my program  
</span><br>
<span class="quotelev1">&gt; ran well with open-mpirun. Thus I thought that I could also use the  
</span><br>
<span class="quotelev1">&gt; transparent checkpoint/restart function supported by BLCR in Open- 
</span><br>
<span class="quotelev1">&gt; mpi. As opposed to my idea, it does not work and show the following  
</span><br>
<span class="quotelev1">&gt; error message.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The process with PID 13896 is not checkpointable.
</span><br>
<span class="quotelev1">&gt;        This could be due to one of the following:
</span><br>
<span class="quotelev1">&gt;         - An application with this PID doesn't currently exist
</span><br>
<span class="quotelev1">&gt;         - The application with this PID isn't checkpointable
</span><br>
<span class="quotelev1">&gt;         - The application with this PID isn't an OPAL application.
</span><br>
<span class="quotelev1">&gt;        We were looking for the named files:
</span><br>
<span class="quotelev1">&gt;          /tmp/opal_cr_prog_write.13896
</span><br>
<span class="quotelev1">&gt;          /tmp/opal_cr_prog_read.13896
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 1 more process has sent help message help-opal-checkpoint.txt
</span><br>
<span class="quotelev1">&gt; Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 53
</span><br>
<span class="quotelev1">&gt;  0] 15100) Step 53
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 54
</span><br>
<span class="quotelev1">&gt;  0] 15100) Step 54
</span><br>
<span class="quotelev1">&gt;  0] 13896) Step 55
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my application, the MPI_Initialized() says it is initialized.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reading and have a great day.
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
<li><strong>Next message:</strong> <a href="7165.php">Jeff Squyres: "[OMPI devel] Doodle to discuss 2 MPI_Request changes"</a>
<li><strong>Previous message:</strong> <a href="7163.php">Jeff Squyres: "Re: [OMPI devel] Deadlocks with new (routed) orted launch algorithm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/11/7141.php">Thomas CI Yoon: "[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="7167.php">Paul H. Hargrove: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
