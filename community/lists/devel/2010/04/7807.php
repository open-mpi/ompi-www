<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:12:15 2010" -->
<!-- isoreceived="20100426181215" -->
<!-- sent="Mon, 26 Apr 2010 23:42:08 +0530 (IST)" -->
<!-- isosent="20100426181208" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="185775.15824.qm_at_web8701.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="ED69DAEC-17BA-4658-AEFF-6432D25B8D6F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] How is a MPI process launched ?<br>
<strong>From:</strong> Leo P. (<em>leo_7892003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>In reply to:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph, 

Thank you for  your response. Really appreciate it as usual. :)

It depends - if you have an environment like slurm, sge, or torque, then we use that to launch our daemons on each node. Otherwise, we default to using ssh.


Once the daemons are launched, we then tell the daemons what processes each is to run. So it is a two-stage launch procedure.

Ralph after starting the orte_deamon  
	1. what is the role of ssh then ?
	2. Also i am assuming HNP is created  before using ssh. Am i right ?
	3. Also Ralph i would to know how i can tell the  daemon to run a process ?
Ralph i am tying to create run a simple experiment where i can create a simple process between two computer using SSH module without using mpirun. I would to hack the mpi library so that i can send a simple &quot;Hello World &quot; from process A running in computer A to process B running in computer B. I would be create both the process  myself. HOPE I AM BEING CLEAR. 

Basically what i am saying is i would to create the MPI_COMM_WORLD comprising of two process Process A and Process B. For that i would to create a functions called Create_Process_A and Create_Process_B and Send_Message by utilizing Open MPI source code.

Also, I know i should be looking into PLM subsystem, RMAPS subsystem, ODLS subsystem, and ORTED subsystem. But Ralph if you guide me a bit i can finish the experiment with less sleepless night, headache, and stress.

Leo P


On Apr 26, 2010, at 2:22 AM, Leo P. wrote:

Hi everyone, 
&gt;
&gt;
&gt;I wanted to know how OpenMPI launches a MPI  process in a cluster environment. I am assuming if the process lifecycle management it will be using rsh.
&gt;
&gt;
&gt;
&gt;
&gt;Anyhelp would be greatly appreciated. 
&gt;
&gt;
&gt;_______________________________________________
&gt;devel mailing list
&gt;devel_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7808.php">Rolf vandeVaart: "[OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7806.php">Ralph Castain: "Re: [OMPI devel] 1.5 branch broken"</a>
<li><strong>In reply to:</strong> <a href="7805.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
