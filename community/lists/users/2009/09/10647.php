<?
$subject_val = "[OMPI users] Application hangs when checkpointing application (update)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 16:54:32 2009" -->
<!-- isoreceived="20090914205432" -->
<!-- sent="Mon, 14 Sep 2009 20:54:26 +0000 (GMT)" -->
<!-- isosent="20090914205426" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] Application hangs when checkpointing application (update)" -->
<!-- id="227552.36195.qm_at_web28305.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="28B124F2-3BCB-4A7A-99FF-8F120876A8DC_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI users] Application hangs when checkpointing application (update)<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 16:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10648.php">Dominik Táborský: "[OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Reply:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Thanks for the response. I am actually testing it on a single node (though in the near future i will run it on a set of nodes). Therefore, my application is running on the same machine as mpirun.
<br>
When I run the application and triggers the checkpointing mechanism from a seperate terminal, it checkpoints fine. 
<br>
<p>However, when I try to checkpoint it from within the main program as show below, it hangs.
<br>
<p>kind regards,
<br>
<p>Jean
<br>
<p><p>--- On Mon, 14/9/09, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p>From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Application hangs when checkpointing application (update)
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, 14 September, 2009, 1:27 PM
<br>
<p>Is your application running on the same machine as mpirun?
<br>
<p>How did you configure Open MPI? Note that is program will not work without the FT thread enabled, which would be one reason why it would seem to hang (since it is waiting for the application to enter the MPI library):
<br>
&#160; --enable-ft-thread --enable-mpi-threads
<br>
<p>I do not think the message that you saw is related. Often orte_checkpoint cannot figure out the jobid on first contact with the HNP/mpirun process, so this is displayed as an INVALID handle.
<br>
<p>-- Josh
<br>
<p>On Sep 11, 2009, at 9:50 AM, Jean Potsam wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I noticed that it hangs just before displaying the following while trying to checkpoint the application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ############################
</span><br>
<span class="quotelev1">&gt; [sun06:15252] orte_checkpoint: notify_hnp: Requested a checkpoint of jobid [INVALID]
</span><br>
<span class="quotelev1">&gt; ###############################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can it be related to the above?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;I wrote a small program with a function to trigger the checkpointing mechanism as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ############################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;signal.h&gt;
</span><br>
<span class="quotelev1">&gt; void trigger_checkpoint();
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; int rank,size;
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; trigger_checkpoint();
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;I am processor no %d of a total of %d procs \n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt; system(&quot;sleep 10&quot;);
</span><br>
<span class="quotelev1">&gt; printf(&quot;bye \n&quot;);
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void trigger_checkpoint()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;printf(&quot;hi\n&quot;);
</span><br>
<span class="quotelev1">&gt;&#160;&#160;&#160;system(&quot;ompi-checkpoint -v `pidof mpirun` &quot;);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; #############################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The application works fine on my laptop with ubuntu as the OS. However, when I tried running it on one of the machines at my uni, with suse linux installed, the application hangs as soon as the ompi-checkpoint is triggered. This is what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ##########################################################
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 1 procs
</span><br>
<span class="quotelev1">&gt; hi
</span><br>
<span class="quotelev1">&gt; I am processor no 0 of a total of 1 procs
</span><br>
<span class="quotelev1">&gt; [sun06:15426] orte_checkpoint: Checkpointing...
</span><br>
<span class="quotelev1">&gt; [sun06:15426]&#160; &#160; PID 15411
</span><br>
<span class="quotelev1">&gt; [sun06:15426]&#160; &#160; Connected to Mpirun [[12727,0],0]
</span><br>
<span class="quotelev1">&gt; [sun06:15426] orte_checkpoint: notify_hnp: Contact Head Node Process PID 15411
</span><br>
<span class="quotelev1">&gt; ###################################################
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does anyone has some ideas about this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jean.
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10648.php">Dominik Táborský: "[OMPI users] unable to access or execute"</a>
<li><strong>Previous message:</strong> <a href="10646.php">Andreas Haselbacher: "Re: [OMPI users] OpenMPI on OS X - file is not of required architecture"</a>
<li><strong>In reply to:</strong> <a href="10642.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
<li><strong>Reply:</strong> <a href="10673.php">Josh Hursey: "Re: [OMPI users] Application hangs when checkpointing application (update)"</a>
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
