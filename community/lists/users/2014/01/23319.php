<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  3 18:44:40 2014" -->
<!-- isoreceived="20140103234440" -->
<!-- sent="Sat, 4 Jan 2014 01:44:19 +0200" -->
<!-- isosent="20140103234419" -->
<!-- name="&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan" -->
<!-- email="ozgur.pekcagliyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="CAA52m+M-CqkAxTg6wnRgnjxEJbK==XNsFVN70xM65bua6mfOhw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="COL126-W39C96819ED058BEC271AB5FECA0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to schedule an MPI tasks<br>
<strong>From:</strong> &#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan (<em>ozgur.pekcagliyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-03 18:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>It is against the idea of parallel computing but you can do something like
<br>
this
<br>
<p>if (rank == 0)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//do something
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int done = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send((void*)&amp;done, 1, MPI_INT, 1, 0, MPI_COMM_WORLD):
<br>
}
<br>
else if (rank == 1)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status * status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int start;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv((void*)&amp;start, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
<br>
status)://will wait till receive something from rank=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//do something
<br>
}
<br>
<p>Simply, just keep second program on waiting. This is the simplest solution
<br>
I can come up with :)
<br>
<p>On Fri, Jan 3, 2014 at 6:36 PM, Ng Shi Wei &lt;nsw_1216_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Reuti,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; May I know how to starts the second mpi program once the previous program
</span><br>
<span class="quotelev1">&gt; is finished? I am using Fedora Cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope you can provide me some guide on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Tue, 27 Aug 2013 08:56:26 +0200
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Unable to schedule an MPI tasks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 27.08.2013 um 03:45 schrieb Ng Shi Wei:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Due to the time constraints, I would like to run the mpi program by
</span><br>
<span class="quotelev1">&gt; scheduling the program to run on desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev1">&gt; However, it seems that the mpirun doesn't execute the mpi program at the
</span><br>
<span class="quotelev1">&gt; desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would like to ask is there any other method to schedule a program to
</span><br>
<span class="quotelev1">&gt; run ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For best, it can straight away starts the second mpi program once the
</span><br>
<span class="quotelev1">&gt; previous program is finished.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this a local machine just for you, a cluster for you or one shared by
</span><br>
<span class="quotelev1">&gt; several users?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You could also think of implementing a full blown queuingsystem like
</span><br>
<span class="quotelev1">&gt; SoGE <a href="https://arc.liv.ac.uk/trac/SGE">https://arc.liv.ac.uk/trac/SGE</a> or Torque
</span><br>
<span class="quotelev1">&gt; <a href="http://www.adaptivecomputing.com/products/open-source/torque/">http://www.adaptivecomputing.com/products/open-source/torque/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You don't have to think about a time when the job should start then
</span><br>
<span class="quotelev1">&gt; (even though this is possible with the -a option), but requesting the
</span><br>
<span class="quotelev1">&gt; intended number of cores will allow a job to run as soon as these resources
</span><br>
<span class="quotelev1">&gt; are available. I.e. you can submit several jobs at once but they will be
</span><br>
<span class="quotelev1">&gt; executed one after the other without oversubscribing the available
</span><br>
<span class="quotelev1">&gt; resources.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; NB: There is also the command `batch` in the at-suite to start the next
</span><br>
<span class="quotelev1">&gt; job when the load drops under a certain value.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shi Wei
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><p><pre>
-- 
&#195;&#150;zg&#195;&#188;r Pek&#195;&#167;a&#196;&#159;l&#196;&#177;yan
B.Sc. in Computer Engineering
M.Sc. in Computer Engineering
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23319/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="23320.php">Özgür Pekçağlıyan: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
