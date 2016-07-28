<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 21:39:36 2009" -->
<!-- isoreceived="20090312013936" -->
<!-- sent="Wed, 11 Mar 2009 19:39:25 -0600" -->
<!-- isosent="20090312013925" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_fre" -->
<!-- id="746DE7DE-0C97-4772-BBEC-7C47D506AF59_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="694092.26215.qm_at_web76210.mail.sg1.yahoo.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 21:39:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you perhaps send us the arguments you are giving to  
<br>
MPI_Comm_spawn_multiple? I think you definitely have a problem with  
<br>
the way you created the MPI_Info keys, and would like to see the code  
<br>
that is setting up the args and making the call.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Mar 11, 2009, at 7:33 PM, Tee Wen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to run with open MPI 1.3 but encouter the following error  
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; LOCAL DAEMON SPAWN IS CURRENTLY UNSUPPORTED
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May I know what I should do with this error as the program used to  
</span><br>
<span class="quotelev1">&gt; be able to spawn the programs using MPI_Comm_spawn_multiple  
</span><br>
<span class="quotelev1">&gt; correctly without this error with version 1.2.8.
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
<span class="quotelev1">&gt; --- On Tue, 10/3/09, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;  
</span><br>
<span class="quotelev1">&gt; MPI_Info_fre
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Tuesday, 10 March, 2009, 11:48 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you try Open MPI 1.3,
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/10/09, Tee Wen Kai &lt;teewenkai_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; --- On Mon, 9/3/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; Could you tell us what version of Open MPI you are using? It would  
</span><br>
<span class="quotelev1">&gt; help us to provide you with advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 9, 2009, at 2:18 AM, Tee Wen Kai wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a program that allow user to enter their choice of  
</span><br>
<span class="quotelev2">&gt;&gt; operation. For example, when the user enter '4', the program will  
</span><br>
<span class="quotelev2">&gt;&gt; enter a function which will spawn some other programs stored in the  
</span><br>
<span class="quotelev2">&gt;&gt; same directory. When the user enter '5', the program will enter  
</span><br>
<span class="quotelev2">&gt;&gt; another function to request all spawned processes to exit.  
</span><br>
<span class="quotelev2">&gt;&gt; Therefore, initially only one process which act as the controller  
</span><br>
<span class="quotelev2">&gt;&gt; is spawned.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My MPI_Info_create and MPI_Comm_spawn_multiple are called in a  
</span><br>
<span class="quotelev2">&gt;&gt; function. Everything is working fine except when I tried to free  
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_Info in the function by calling MPI_Info_free, I have  
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault error. The second problem is when i do the  
</span><br>
<span class="quotelev2">&gt;&gt; spawning once and exit the controller program with MPI_Finalize,  
</span><br>
<span class="quotelev2">&gt;&gt; the program exited normally. But when spawning is done more than  
</span><br>
<span class="quotelev2">&gt;&gt; once and exit the controller program with MPI_Finalize, there is  
</span><br>
<span class="quotelev2">&gt;&gt; segmentation fault. I also realize that when the spawed processes  
</span><br>
<span class="quotelev2">&gt;&gt; exit, the 'orted' process is still running. Thus, when multiple  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_spawn_multiple are called, there will be multiple 'orted'  
</span><br>
<span class="quotelev2">&gt;&gt; processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you and hope someone has a solution to my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Wenkai
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; New Email names for you!
</span><br>
<span class="quotelev2">&gt;&gt; Get the Email name you've always wanted on the new @ymail and  
</span><br>
<span class="quotelev2">&gt;&gt; @rocketmail.
</span><br>
<span class="quotelev2">&gt;&gt; Hurry before someone else does! 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Adding more friends is quick and easy.
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
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; New Email names for you!
</span><br>
<span class="quotelev1">&gt; Get the Email name you've always wanted on the new @ymail and  
</span><br>
<span class="quotelev1">&gt; @rocketmail.
</span><br>
<span class="quotelev1">&gt; Hurry before someone else does! 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8405.php">Sangamesh B: "Re: [OMPI users] Lower performance on a Gigabit node compared toinfiniband node"</a>
<li><strong>Previous message:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>In reply to:</strong> <a href="8403.php">Tee Wen Kai: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
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
