<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 23:06:00 2010" -->
<!-- isoreceived="20100427030600" -->
<!-- sent="Tue, 27 Apr 2010 08:35:51 +0530 (IST)" -->
<!-- isosent="20100427030551" -->
<!-- name="Leo P." -->
<!-- email="leo_7892003_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="651701.5322.qm_at_web8703.mail.in.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F5949F01-0464-4A1F-8421-6B61BF91944E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-04-26 23:05:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,

Is there some reason why you don't just use MPI_Comm_spawn? This is precisely what it was created to do. You can still execute it from a singleton, if you don't want to start your first process via mpirun (and is there some reason why you don't use mpirun???).

The reason  why i am  using MPI_Comm_spawn and singleton is i am going to route the MPI Communication (btl and OOB) from another computer before it reaches it intended destination. :)

Yes, you -could- hack the MPI code to do this. Starting from scratch, with little knowledge of the code base - figure on taking awhile. I could probably come up with a way to do it, but this would have to be a very low priority for me.

I am  trying to learn the OpenMPI code base and i know its going to take time. Now i need to understand how the processes are started and made part of MPI_Comm_World. I really want to do this but i need help. If you can suggest how this can be done, i would really appreciate a lot.

Leo




________________________________
From: Ralph Castain &lt;rhc_at_[hidden]&gt;
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
Sent: Tue, 27 April, 2010 6:44:49 AM
Subject: Re: [OMPI devel] How is a MPI process launched ?

Ummmm....I sincerely hope you are kidding :-)

Is there some reason why you don't just use MPI_Comm_spawn? This is precisely what it was created to do. You can still execute it from a singleton, if you don't want to start your first process via mpirun (and is there some reason why you don't use mpirun???).

Yes, you -could- hack the MPI code to do this. Starting from scratch, with little knowledge of the code base - figure on taking awhile. I could probably come up with a way to do it, but this would have to be a very low priority for me.



On Apr 26, 2010, at 12:12 PM, Leo P. wrote:

Hi Ralph, 
&gt;
&gt;
&gt;Thank you for  your response. Really appreciate it as usual. :)
&gt;
&gt;It depends - if you have an environment like slurm, sge, or torque, then we use that to launch our daemons on each node. Otherwise, we default to using ssh.
&gt;
&gt;
&gt;Once the daemons are launched, we then tell the daemons what processes each is to run. So it is a two-stage launch procedure.
&gt;
&gt;
&gt;Ralph after starting the orte_deamon  
&gt;	1. what is the role of ssh then ?
&gt;	2. Also i am assuming HNP is created  before using ssh. Am i right ?
&gt;	3. Also Ralph i would to know how i can tell the  daemon to run a process ?
&gt;Ralph i am tying to create run a simple experiment where i can create a simple process between two computer using SSH module without using mpirun. I would to hack the mpi library so that i can send a simple &quot;Hello World &quot; from process A running in computer A to process B running in computer B. I would be create both the process  myself. HOPE I AM BEING CLEAR. 
&gt;
&gt;
&gt;Basically what i am saying is i would to create the MPI_COMM_WORLD comprising of two process Process A and Process B. For that i would to create a functions called Create_Process_A and Create_Process_B and Send_Message by utilizing Open MPI source code.
&gt;
&gt;
&gt;Also, I know i should be looking into PLM subsystem, RMAPS subsystem, ODLS subsystem, and ORTED subsystem. But Ralph if you guide me a bit i can finish the experiment with less sleepless night, headache, and stress.
&gt;
&gt;
&gt;Leo P
&gt;
&gt;
&gt;
&gt;
&gt;On Apr 26, 2010, at 2:22 AM, Leo P. wrote:
&gt;
&gt;Hi everyone, 
&gt;&gt;
&gt;&gt;
&gt;&gt;I wanted to know how OpenMPI launches a MPI  process in a cluster environment. I am assuming if the process lifecycle management it will be using rsh.
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;Anyhelp would be greatly appreciated. 
&gt;&gt;
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;devel mailing list
&gt;&gt;devel_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;
&gt;_______________________________________________
&gt;devel mailing list
&gt;devel_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>



<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7812/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7811.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7813.php">Ralph Castain: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
