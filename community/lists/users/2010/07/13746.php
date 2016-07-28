<?
$subject_val = "Re: [OMPI users] How to checkpoint atomic function in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 13:16:11 2010" -->
<!-- isoreceived="20100722171611" -->
<!-- sent="Fri, 23 Jul 2010 02:16:06 +0900" -->
<!-- isosent="20100722171606" -->
<!-- name="Nguyen Toan" -->
<!-- email="nguyentoan1508_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to checkpoint atomic function in OpenMPI" -->
<!-- id="AANLkTinDPDdOdkSz1q0QjzRQOTd4FuetHM-M6_JQ8HbH_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FD2863C7-3889-4DF2-8DD9-AFEEDAA9EECB_at_open-mpi.org" -->
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
<strong>From:</strong> Nguyen Toan (<em>nguyentoan1508_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 13:16:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Josh,
<br>
I hope to see this new API soon. Anyway, I will try these critical section
<br>
functions in BLCR. Thank you for the support.
<br>
<p>Best Regards,
<br>
Nguyen Toan
<br>
<p>On Sat, Jul 17, 2010 at 6:34 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 14, 2010, at 5:26 AM, Nguyen Toan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt; I have a MPI program as follows:
</span><br>
<span class="quotelev2">&gt; &gt; -------------------
</span><br>
<span class="quotelev2">&gt; &gt; int main(){
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Init();
</span><br>
<span class="quotelev2">&gt; &gt;    ......
</span><br>
<span class="quotelev2">&gt; &gt;    for (i=0; i&lt;10000; i++) {
</span><br>
<span class="quotelev2">&gt; &gt;       my_atomic_func();
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt;    ...
</span><br>
<span class="quotelev2">&gt; &gt;    MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;    return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; --------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The runtime of this program mainly involves in running the loop and
</span><br>
<span class="quotelev1">&gt; my_atomic_func() takes a little bit long.
</span><br>
<span class="quotelev2">&gt; &gt; Here I want my_atomic_func() to be operated atomically, but the timing of
</span><br>
<span class="quotelev1">&gt; checkpointing (by running ompi-checkpoint command) may be in the middle of
</span><br>
<span class="quotelev1">&gt; my_atomic_func() operation and hence ompi-restart may fail to restart
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So my question is:
</span><br>
<span class="quotelev2">&gt; &gt; + At the checkpoint time (executing ompi-checkpoint), is there a way to
</span><br>
<span class="quotelev1">&gt; let OpenMPI wait until my_atomic_func()  finishes its operation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do not currently have an external function to declare a critical section
</span><br>
<span class="quotelev1">&gt; during which a checkpoint should not be taken. I filed a ticket to make one
</span><br>
<span class="quotelev1">&gt; available. The link is below if you would like to follow its progress:
</span><br>
<span class="quotelev1">&gt;  <a href="https://svn.open-mpi.org/trac/ompi/ticket/2487">https://svn.open-mpi.org/trac/ompi/ticket/2487</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have an MPI Extension interface for C/R that I will be bringing into the
</span><br>
<span class="quotelev1">&gt; trunk in the next few weeks. I should be able to extend it to include this
</span><br>
<span class="quotelev1">&gt; feature. But I can't promise a deadline, just that I will update the ticket
</span><br>
<span class="quotelev1">&gt; when it is available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the mean time you might try to use the BLCR interface to define critical
</span><br>
<span class="quotelev1">&gt; sections. If you are using the C/R thread then this may work (though I have
</span><br>
<span class="quotelev1">&gt; not tried it):
</span><br>
<span class="quotelev1">&gt;  cr_enter_cs()
</span><br>
<span class="quotelev1">&gt;  cr_leave_cs()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; + How does ompi-checkpoint operate to checkpoint MPI threads?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We depend on the Checkpoint/Restart Service (e.g., BLCR) to capture the
</span><br>
<span class="quotelev1">&gt; whole process image including all threads. So BLCR will capture the state of
</span><br>
<span class="quotelev1">&gt; all threads when we take the process checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Nguyen Toan
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13746/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13747.php">Cristobal Navarro: "[OMPI users] Help on the big picture.."</a>
<li><strong>Previous message:</strong> <a href="13745.php">Nguyen Toan: "Re: [OMPI users] Question on checkpoint overhead in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="13673.php">Josh Hursey: "Re: [OMPI users] How to checkpoint atomic function in OpenMPI"</a>
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
