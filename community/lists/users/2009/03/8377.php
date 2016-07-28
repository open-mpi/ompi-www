<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 10 11:48:08 2009" -->
<!-- isoreceived="20090310154808" -->
<!-- sent="Tue, 10 Mar 2009 17:48:02 +0200" -->
<!-- isosent="20090310154802" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_fre" -->
<!-- id="453d39990903100848p761db574m231b6b0a64acd7b0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="479445.52411.qm_at_web76214.mail.sg1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-10 11:48:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Previous message:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Maybe reply:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
can you try Open MPI 1.3,
<br>
<p>Lenny.
<br>
<p>On 3/10/09, Tee Wen Kai &lt;teewenkai_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using version 1.2.8.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Wenkai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On *Mon, 9/3/09, Ralph Castain &lt;rhc_at_[hidden]&gt;* wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;
</span><br>
<span class="quotelev1">&gt; MPI_Info_free
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Monday, 9 March, 2009, 7:42 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you tell us what version of Open MPI you are using? It would help us
</span><br>
<span class="quotelev1">&gt; to provide you with advice.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mar 9, 2009, at 2:18 AM, Tee Wen Kai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a program that allow user to enter their choice of operation. For
</span><br>
<span class="quotelev1">&gt; example, when the user enter '4', the program will enter a function which
</span><br>
<span class="quotelev1">&gt; will spawn some other programs stored in the same directory. When the user
</span><br>
<span class="quotelev1">&gt; enter '5', the program will enter another function to request all spawned
</span><br>
<span class="quotelev1">&gt; processes to exit. Therefore, initially only one process which act as the
</span><br>
<span class="quotelev1">&gt; controller is spawned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My MPI_Info_create and MPI_Comm_spawn_multiple are called in a function.
</span><br>
<span class="quotelev1">&gt; Everything is working fine except when I tried to free the MPI_Info in the
</span><br>
<span class="quotelev1">&gt; function by calling MPI_Info_free, I have segmentation fault error. The
</span><br>
<span class="quotelev1">&gt; second problem is when i do the spawning once and exit the controller
</span><br>
<span class="quotelev1">&gt; program with MPI_Finalize, the program exited normally. But when spawning is
</span><br>
<span class="quotelev1">&gt; done more than once and exit the controller program with MPI_Finalize, there
</span><br>
<span class="quotelev1">&gt; is segmentation fault. I also realize that when the spawed processes exit,
</span><br>
<span class="quotelev1">&gt; the 'orted' process is still running. Thus, when multiple
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn_multiple are called, there will be multiple 'orted'
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you and hope someone has a solution to my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Wenkai
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; New Email names for you!
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://sg.rd.yahoo.com/sg/mail/domainchoice/mail/signature/*http://mail.promotions.yahoo.com/newdomains/sg/">http://sg.rd.yahoo.com/sg/mail/domainchoice/mail/signature/*http://mail.promotions.yahoo.com/newdomains/sg/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Get the Email name you've always wanted on the new @ymail and @rocketmail.
</span><br>
<span class="quotelev1">&gt; Hurry before someone else
</span><br>
<span class="quotelev1">&gt; does!_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;<a href="http://sg.mc762.mail.yahoo.com/mc/compose?to=users&#64;open-mpi.org">http://sg.mc762.mail.yahoo.com/mc/compose?to=users&#64;open-mpi.org</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Inline Attachment Follows-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;<a href="http://sg.mc762.mail.yahoo.com/mc/compose?to=users&#64;open-mpi.org">http://sg.mc762.mail.yahoo.com/mc/compose?to=users&#64;open-mpi.org</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;  Adding more friends is quick and easy.&lt;<a href="http://sg.rd.yahoo.com/sg/mail/trueswitch/mailtagline/*http://www.trueswitch.com/yahoo-sg/">http://sg.rd.yahoo.com/sg/mail/trueswitch/mailtagline/*http://www.trueswitch.com/yahoo-sg/</a>&gt;
</span><br>
<span class="quotelev1">&gt; Import them over to Yahoo! Mail today!
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8378.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI program getting stuck at poll()"</a>
<li><strong>Previous message:</strong> <a href="8376.php">Igor Kozin: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>In reply to:</strong> <a href="8373.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Maybe reply:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
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
