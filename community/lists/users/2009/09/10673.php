<?
$subject_val = "Re: [OMPI users] Application hangs when checkpointing application (update)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 11:21:35 2009" -->
<!-- isoreceived="20090917152135" -->
<!-- sent="Thu, 17 Sep 2009 11:21:54 -0400" -->
<!-- isosent="20090917152154" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application hangs when checkpointing application (update)" -->
<!-- id="F172B622-9B25-4E7B-91B7-81827015DC5C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="227552.36195.qm_at_web28305.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application hangs when checkpointing application (update)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-17 11:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
<li><strong>In reply to:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. I'll try to take a look and see if I can reproduce today.
<br>
<p>-- Josh
<br>
<p>On Sep 14, 2009, at 4:54 PM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;            Thanks for the response. I am actually testing it on a  
</span><br>
<span class="quotelev1">&gt; single node (though in the near future i will run it on a set of  
</span><br>
<span class="quotelev1">&gt; nodes). Therefore, my application is running on the same machine as  
</span><br>
<span class="quotelev1">&gt; mpirun.
</span><br>
<span class="quotelev1">&gt; When I run the application and triggers the checkpointing mechanism  
</span><br>
<span class="quotelev1">&gt; from a seperate terminal, it checkpoints fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, when I try to checkpoint it from within the main program as  
</span><br>
<span class="quotelev1">&gt; show below, it hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; kind regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Mon, 14/9/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Application hangs when checkpointing  
</span><br>
<span class="quotelev1">&gt; application (update)
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, 14 September, 2009, 1:27 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is your application running on the same machine as mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How did you configure Open MPI? Note that is program will not work  
</span><br>
<span class="quotelev1">&gt; without the FT thread enabled, which would be one reason why it  
</span><br>
<span class="quotelev1">&gt; would seem to hang (since it is waiting for the application to enter  
</span><br>
<span class="quotelev1">&gt; the MPI library):
</span><br>
<span class="quotelev1">&gt;   --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not think the message that you saw is related. Often  
</span><br>
<span class="quotelev1">&gt; orte_checkpoint cannot figure out the jobid on first contact with  
</span><br>
<span class="quotelev1">&gt; the HNP/mpirun process, so this is displayed as an INVALID handle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 11, 2009, at 9:50 AM, Jean Potsam wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt; &gt;               I noticed that it hangs just before displaying the  
</span><br>
<span class="quotelev1">&gt; following while trying to checkpoint the application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ############################
</span><br>
<span class="quotelev2">&gt; &gt; [sun06:15252] orte_checkpoint: notify_hnp: Requested a checkpoint  
</span><br>
<span class="quotelev1">&gt; of jobid [INVALID]
</span><br>
<span class="quotelev2">&gt; &gt; ###############################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can it be related to the above?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Hi Everyone,
</span><br>
<span class="quotelev2">&gt; &gt;                     I wrote a small program with a function to  
</span><br>
<span class="quotelev1">&gt; trigger the checkpointing mechanism as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ############################################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; void trigger_checkpoint();
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; int rank,size;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank,  
</span><br>
<span class="quotelev1">&gt; size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; trigger_checkpoint();
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank,  
</span><br>
<span class="quotelev1">&gt; size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank,  
</span><br>
<span class="quotelev1">&gt; size);
</span><br>
<span class="quotelev2">&gt; &gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt; return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void trigger_checkpoint()
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   printf(&quot;hi\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;   system(&quot;ompi-checkpoint -v `pidof mpirun` &quot;);
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; #############################################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The application works fine on my laptop with ubuntu as the OS.  
</span><br>
<span class="quotelev1">&gt; However, when I tried running it on one of the machines at my uni,  
</span><br>
<span class="quotelev1">&gt; with suse linux installed, the application hangs as soon as the ompi- 
</span><br>
<span class="quotelev1">&gt; checkpoint is triggered. This is what I get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ##########################################################
</span><br>
<span class="quotelev2">&gt; &gt; I am processor no 0 of a total of 1 procs
</span><br>
<span class="quotelev2">&gt; &gt; hi
</span><br>
<span class="quotelev2">&gt; &gt; I am processor no 0 of a total of 1 procs
</span><br>
<span class="quotelev2">&gt; &gt; [sun06:15426] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev2">&gt; &gt; [sun06:15426]    PID 15411
</span><br>
<span class="quotelev2">&gt; &gt; [sun06:15426]    Connected to Mpirun [[12727,0],0]
</span><br>
<span class="quotelev2">&gt; &gt; [sun06:15426] orte_checkpoint: notify_hnp: Contact Head Node  
</span><br>
<span class="quotelev1">&gt; Process PID 15411
</span><br>
<span class="quotelev2">&gt; &gt; ###################################################
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; does anyone has some ideas about this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jean.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10674.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Multi-threading  with OpenMPI ?"</a>
<li><strong>Previous message:</strong> <a href="10672.php">Jeff Squyres: "Re: [OMPI users] OpenMPI much slower than Mpich2"</a>
<li><strong>In reply to:</strong> <a href="10647.php">Jean Potsam: "[OMPI users] Application hangs when checkpointing application (update)"</a>
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
