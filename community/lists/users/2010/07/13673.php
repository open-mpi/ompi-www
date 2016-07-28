<?
$subject_val = "Re: [OMPI users] How to checkpoint atomic function in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 17:35:04 2010" -->
<!-- isoreceived="20100716213504" -->
<!-- sent="Fri, 16 Jul 2010 17:34:59 -0400" -->
<!-- isosent="20100716213459" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to checkpoint atomic function in OpenMPI" -->
<!-- id="FD2863C7-3889-4DF2-8DD9-AFEEDAA9EECB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinZBxMyuLHI1qvPhTVAJeKOCGS2hzJFnBQlgAid_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to checkpoint atomic function in OpenMPI<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 17:34:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2010, at 5:26 AM, Nguyen Toan wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have a MPI program as follows:
</span><br>
<span class="quotelev1">&gt; -------------------
</span><br>
<span class="quotelev1">&gt; int main(){
</span><br>
<span class="quotelev1">&gt;    MPI_Init();
</span><br>
<span class="quotelev1">&gt;    ......
</span><br>
<span class="quotelev1">&gt;    for (i=0; i&lt;10000; i++) {
</span><br>
<span class="quotelev1">&gt;       my_atomic_func();
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    ...
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; --------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The runtime of this program mainly involves in running the loop and my_atomic_func() takes a little bit long. 
</span><br>
<span class="quotelev1">&gt; Here I want my_atomic_func() to be operated atomically, but the timing of checkpointing (by running ompi-checkpoint command) may be in the middle of my_atomic_func() operation and hence ompi-restart may fail to restart correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question is:
</span><br>
<span class="quotelev1">&gt; + At the checkpoint time (executing ompi-checkpoint), is there a way to let OpenMPI wait until my_atomic_func()  finishes its operation?
</span><br>
<p>We do not currently have an external function to declare a critical section during which a checkpoint should not be taken. I filed a ticket to make one available. The link is below if you would like to follow its progress:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2487">https://svn.open-mpi.org/trac/ompi/ticket/2487</a>
<br>
<p>I have an MPI Extension interface for C/R that I will be bringing into the trunk in the next few weeks. I should be able to extend it to include this feature. But I can't promise a deadline, just that I will update the ticket when it is available.
<br>
<p>In the mean time you might try to use the BLCR interface to define critical sections. If you are using the C/R thread then this may work (though I have not tried it):
<br>
&nbsp;&nbsp;cr_enter_cs()
<br>
&nbsp;&nbsp;cr_leave_cs()
<br>
<p><span class="quotelev1">&gt; + How does ompi-checkpoint operate to checkpoint MPI threads? 
</span><br>
<p>We depend on the Checkpoint/Restart Service (e.g., BLCR) to capture the whole process image including all threads. So BLCR will capture the state of all threads when we take the process checkpoint.
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nguyen Toan
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
<li><strong>Next message:</strong> <a href="13674.php">Josh Hursey: "Re: [OMPI users] ompi-restart failed"</a>
<li><strong>Previous message:</strong> <a href="13672.php">Josh Hursey: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/06/13320.php">Nguyen Toan: "[OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="13746.php">Nguyen Toan: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
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
