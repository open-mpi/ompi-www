<?
$subject_val = "Re: [OMPI users] Question regarding SELF-checkpointing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  1 10:55:11 2011" -->
<!-- isoreceived="20110901145511" -->
<!-- sent="Thu, 1 Sep 2011 14:55:04 +0000" -->
<!-- isosent="20110901145504" -->
<!-- name="Faisal Shahzad" -->
<!-- email="itsfaisi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question regarding SELF-checkpointing" -->
<!-- id="SNT118-W517D52AFA39AEE0F464A2AD5190_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEnxMAc6z2JfYxZGsUEFxj2gUhUwmGqeTyjBdHd3D6GvOw_at_mail.gmail.com" -->
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
<strong>From:</strong> Faisal Shahzad (<em>itsfaisi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-01 10:55:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>In reply to:</strong> <a href="../../2011/08/17122.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
My version of OpenMPI is 1.5.3.I have attached a simple toy code. Which is actually modification of example given on the web <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php">http://osl.iu.edu/research/ft/ompi-cr/examples.php</a> .Mainly, i introduced some communication between processes and every process writes its separate checkpoint file.Here is my command line for running the job.                        &gt;&gt;    mpirun -np 48 -npernode 6 -bind-to-core -bycore -am ft-enable-cr --mca crs_self_prefix my_personal ./SELF_CR 5000
<br>
Also i have attached another file containing my MCA options from 'ompi_info'.
<br>
In this toy-code, problem is not too severe, so i used 48 or even 96 processes and many checkpoints to make problem appear. But i my actual code, perhaps due to more MPI calls, sometimes problem occur even within one node with only few (2-5) processes as well.
<br>
Hope to hear from you.Kind regards,Faisal Shahzad
<br>
<p><p><p><span class="quotelev1">&gt; Date: Wed, 31 Aug 2011 11:35:55 -0400
</span><br>
<span class="quotelev1">&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Question regarding SELF-checkpointing
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That seems like a bug to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using? How have you setup the C/R
</span><br>
<span class="quotelev1">&gt; functionality (what MCA options do you have set, what command line
</span><br>
<span class="quotelev1">&gt; options are you using)? Can you send a small reproducing application
</span><br>
<span class="quotelev1">&gt; that we can test against?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That should help us focus in on the problem a bit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Aug 31, 2011 at 6:36 AM, Faisal Shahzad &lt;itsfaisi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear Group,
</span><br>
<span class="quotelev2">&gt; &gt; I have a mpi-program in which every process is communicating with its
</span><br>
<span class="quotelev2">&gt; &gt; neighbors. When SELF-checkpointing, every process writes to a separate file.
</span><br>
<span class="quotelev2">&gt; &gt; Problem is that sometimes after making a checkpoint, program does not
</span><br>
<span class="quotelev2">&gt; &gt; continue again. Having more number of processes makes this problem severe.
</span><br>
<span class="quotelev2">&gt; &gt; With just 1 process (no communication), SEFL-checkpointing works normally
</span><br>
<span class="quotelev2">&gt; &gt; with no problem.
</span><br>
<span class="quotelev2">&gt; &gt; I have tried different '--mca btl' parameters (openib,tcp,sm,self), but
</span><br>
<span class="quotelev2">&gt; &gt; problem persists.
</span><br>
<span class="quotelev2">&gt; &gt; I would very much appreciate your support regarding it.
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; Faisal
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>

<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-17131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="../../att-17131/SELF_CR.c">SELF_CR.c</a>
</ul>
<!-- attachment="SELF_CR.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="../../att-17131/MCA_options.txt">MCA_options.txt</a>
</ul>
<!-- attachment="MCA_options.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17132.php">Fabien: "Re: [OMPI users] Mingw - Gfortran - Cmake : 'gettimeofday'"</a>
<li><strong>Previous message:</strong> <a href="17130.php">Randolph Pullen: "[OMPI users] High CPU usage with yield_when_idle =1 on CFS"</a>
<li><strong>In reply to:</strong> <a href="../../2011/08/17122.php">Josh Hursey: "Re: [OMPI users] Question regarding SELF-checkpointing"</a>
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
