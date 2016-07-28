<?
$subject_val = "[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 22 19:13:22 2009" -->
<!-- isoreceived="20091123001322" -->
<!-- sent="Sun, 22 Nov 2009 19:13:13 -0500" -->
<!-- isosent="20091123001313" -->
<!-- name="Thomas CI Yoon" -->
<!-- email="workciyoon_at_[hidden]" -->
<!-- subject="[OMPI devel] OPEN-MPI Fault-Tolerance for GASNet" -->
<!-- id="0B23A2D43ABE4B09B023428AF5EEDD3A_at_CHANGILPC" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet<br>
<strong>From:</strong> Thomas CI Yoon (<em>workciyoon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-22 19:13:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7142.php">Jeff Squyres: "[OMPI devel] SC09 OMPI-related slides"</a>
<li><strong>Previous message:</strong> <a href="7140.php">Eugene Loh: "[OMPI devel] trac 2043"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all.
<br>
<p>Thanks to developers of OPEN-MPI for Fault-Tolerance, I can use the checkpoint/restart function very well for my MPI applications.  
<br>
But its checkpoint does not work for my GASNet applications which use the MPI conduit.
<br>
Is here anyone else to help me?
<br>
<p>I wrote some code with GASNet API (Global-Address Space Networking: <a href="http://gasnet.cs.berkeley.edu/">http://gasnet.cs.berkeley.edu/</a>)    and used MPI conduit for my gasnet application, so my program ran well with open-mpirun. Thus I thought that I could also use the transparent checkpoint/restart function supported by BLCR in Open-mpi. As opposed to my idea, it does not work and show the following error message.
<br>
--------------------------------------------------------------------------
<br>
Error: The process with PID 13896 is not checkpointable.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This could be due to one of the following:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- An application with this PID doesn't currently exist 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't checkpointable  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- The application with this PID isn't an OPAL application.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We were looking for the named files:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_write.13896
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/tmp/opal_cr_prog_read.13896
<br>
--------------------------------------------------------------------------
<br>
1 more process has sent help message help-opal-checkpoint.txt
<br>
Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help 
<br>
&nbsp;0] 13896) Step 53
<br>
&nbsp;0] 15100) Step 53
<br>
&nbsp;0] 13896) Step 54
<br>
&nbsp;0] 15100) Step 54
<br>
&nbsp;0] 13896) Step 55
<br>
<p>In my application, the MPI_Initialized() says it is initialized.
<br>
<p>Thank you for your reading and have a great day.
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7142.php">Jeff Squyres: "[OMPI devel] SC09 OMPI-related slides"</a>
<li><strong>Previous message:</strong> <a href="7140.php">Eugene Loh: "[OMPI devel] trac 2043"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/12/7164.php">Josh Hursey: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/01/7329.php">Chang IL Yoon: "Re: [OMPI devel] OPEN-MPI Fault-Tolerance for GASNet"</a>
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
