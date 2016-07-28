<?
$subject_val = "Re: [OMPI devel] How is a MPI process launched ?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 23:28:17 2010" -->
<!-- isoreceived="20100427032817" -->
<!-- sent="Mon, 26 Apr 2010 21:28:06 -0600" -->
<!-- isosent="20100427032806" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] How is a MPI process launched ?" -->
<!-- id="5EAAB7C6-1565-4D48-8543-789DFFAFDBB3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="651701.5322.qm_at_web8703.mail.in.yahoo.com" -->
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
<strong>Date:</strong> 2010-04-26 23:28:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 26, 2010, at 9:05 PM, Leo P. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some reason why you don't just use MPI_Comm_spawn? This is precisely what it was created to do. You can still execute it from a singleton, if you don't want to start your first process via mpirun (and is there some reason why you don't use mpirun???).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The reason  why i am  using MPI_Comm_spawn and singleton is i am going to route the MPI Communication (btl and OOB) from another computer before it reaches it intended destination. :)
</span><br>
<p>Others have done this - the OOB is simple, but the btl is not easy. I'll suggest they contact you.
<br>
<p>I honestly don't think you understand how the OOB, comm_spawn, and singletons work. What you are trying to do for the OOB has already been done for you in the system as shipped today. All you need to do is start the &quot;ompi-server&quot; daemon where the two procs can both see it, and then use the patch I provided to the other people who were just asking about something like this.
<br>
<p>See the following thread:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2010/04/12763.php">http://www.open-mpi.org/community/lists/users/2010/04/12763.php</a>
<br>
<p>If this is a common desired feature, it would be simple to apply my patch to the devel trunk and the other releases.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, you -could- hack the MPI code to do this. Starting from scratch, with little knowledge of the code base - figure on taking awhile. I could probably come up with a way to do it, but this would have to be a very low priority for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am  trying to learn the OpenMPI code base and i know its going to take time. Now i need to understand how the processes are started and made part of MPI_Comm_World. I really want to do this but i need help. If you can suggest how this can be done, i would really appreciate a lot.
</span><br>
<p>See the above thread - you'll still need to route the BTL, but at least the launch and wireup are resolved.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Leo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Tue, 27 April, 2010 6:44:49 AM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] How is a MPI process launched ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ummmm....I sincerely hope you are kidding :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some reason why you don't just use MPI_Comm_spawn? This is precisely what it was created to do. You can still execute it from a singleton, if you don't want to start your first process via mpirun (and is there some reason why you don't use mpirun???).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, you -could- hack the MPI code to do this. Starting from scratch, with little knowledge of the code base - figure on taking awhile. I could probably come up with a way to do it, but this would have to be a very low priority for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2010, at 12:12 PM, Leo P. wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for  your response. Really appreciate it as usual. :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It depends - if you have an environment like slurm, sge, or torque, then we use that to launch our daemons on each node. Otherwise, we default to using ssh.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Once the daemons are launched, we then tell the daemons what processes each is to run. So it is a two-stage launch procedure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph after starting the orte_deamon  
</span><br>
<span class="quotelev2">&gt;&gt; what is the role of ssh then ?
</span><br>
<span class="quotelev2">&gt;&gt; Also i am assuming HNP is created  before using ssh. Am i right ?
</span><br>
<span class="quotelev2">&gt;&gt; Also Ralph i would to know how i can tell the  daemon to run a process ?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph i am tying to create run a simple experiment where i can create a simple process between two computer using SSH module without using mpirun. I would to hack the mpi library so that i can send a simple &quot;Hello World &quot; from process A running in computer A to process B running in computer B. I would be create both the process  myself. HOPE I AM BEING CLEAR. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Basically what i am saying is i would to create the MPI_COMM_WORLD comprising of two process Process A and Process B. For that i would to create a functions called Create_Process_A and Create_Process_B and Send_Message by utilizing Open MPI source code.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, I know i should be looking into PLM subsystem, RMAPS subsystem, ODLS subsystem, and ORTED subsystem. But Ralph if you guide me a bit i can finish the experiment with less sleepless night, headache, and stress.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Leo P
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 26, 2010, at 2:22 AM, Leo P. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wanted to know how OpenMPI launches a MPI  process in a cluster environment. I am assuming if the process lifecycle management it will be using rsh.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyhelp would be greatly appreciated. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7814.php">Ralph Castain: "Re: [OMPI devel] r23023 change to trunk causes problems with exit value"</a>
<li><strong>Previous message:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<li><strong>In reply to:</strong> <a href="7812.php">Leo P.: "Re: [OMPI devel] How is a MPI process launched ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7816.php">Jeff Squyres: "Re: [OMPI devel] How is a MPI process launched ?"</a>
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
