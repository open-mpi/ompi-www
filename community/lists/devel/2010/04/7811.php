<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 19:45:01 2010" -->
<!-- isoreceived="20100426234501" -->
<!-- sent="Mon, 26 Apr 2010 17:44:49 -0600" -->
<!-- isosent="20100426234449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="F5949F01-0464-4A1F-8421-6B61BF91944E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="185775.15824.qm_at_web8701.mail.in.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 19:44:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummmm....I sincerely hope you are kidding :-)
<br>
<p>Is there some reason why you don't just use MPI_Comm_spawn? This is precisely what it was created to do. You can still execute it from a singleton, if you don't want to start your first process via mpirun (and is there some reason why you don't use mpirun???).
<br>
<p>Yes, you -could- hack the MPI code to do this. Starting from scratch, with little knowledge of the code base - figure on taking awhile. I could probably come up with a way to do it, but this would have to be a very low priority for me.
<br>
<p><p>On Apr 26, 2010, at 12:12 PM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for  your response. Really appreciate it as usual. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends - if you have an environment like slurm, sge, or torque, then we use that to launch our daemons on each node. Otherwise, we default to using ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Once the daemons are launched, we then tell the daemons what processes each is to run. So it is a two-stage launch procedure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph after starting the orte_deamon  
</span><br>
<span class="quotelev1">&gt; what is the role of ssh then ?
</span><br>
<span class="quotelev1">&gt; Also i am assuming HNP is created  before using ssh. Am i right ?
</span><br>
<span class="quotelev1">&gt; Also Ralph i would to know how i can tell the  daemon to run a process ?
</span><br>
<span class="quotelev1">&gt; Ralph i am tying to create run a simple experiment where i can create a simple process between two computer using SSH module without using mpirun. I would to hack the mpi library so that i can send a simple &quot;Hello World &quot; from process A running in computer A to process B running in computer B. I would be create both the process  myself. HOPE I AM BEING CLEAR. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Basically what i am saying is i would to create the MPI_COMM_WORLD comprising of two process Process A and Process B. For that i would to create a functions called Create_Process_A and Create_Process_B and Send_Message by utilizing Open MPI source code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I know i should be looking into PLM subsystem, RMAPS subsystem, ODLS subsystem, and ORTED subsystem. But Ralph if you guide me a bit i can finish the experiment with less sleepless night, headache, and stress.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leo P
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2010, at 2:22 AM, Leo P. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to know how OpenMPI launches a MPI  process in a cluster environment. I am assuming if the process lifecycle management it will be using rsh.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyhelp would be greatly appreciated. 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Previous message:</strong> <a href="7810.php">Rolf vandeVaart: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>In reply to:</strong> <a href="7807.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>Reply:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
