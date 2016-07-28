<?
$subject_val = "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 21:33:25 2009" -->
<!-- isoreceived="20090312013325" -->
<!-- sent="Thu, 12 Mar 2009 09:33:18 +0800 (SGT)" -->
<!-- isosent="20090312013318" -->
<!-- name="Tee Wen Kai" -->
<!-- email="teewenkai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_fre" -->
<!-- id="694092.26215.qm_at_web76210.mail.sg1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Problem with MPI_Comm_spawn_multiple &amp;amp; MPI_Info_fre" -->
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
<strong>From:</strong> Tee Wen Kai (<em>teewenkai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 21:33:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Previous message:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Reply:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&#160;
<br>
I tried to run with open MPI 1.3 but encouter the following error message:
<br>
&#160;
<br>
LOCAL DAEMON SPAWN IS CURRENTLY UNSUPPORTED
<br>
&#160;
<br>
May I know what I should do with this error as the program used to be able to spawn the programs using MPI_Comm_spawn_multiple correctly without this error with version 1.2.8.
<br>
&#160;
<br>
Thank you.
<br>
&#160;
<br>
Regards,
<br>
Wenkai
<br>
<p>--- On Tue, 10/3/09, Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt; wrote:
<br>
<p><p>From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Tuesday, 10 March, 2009, 11:48 PM
<br>
<p><p><p>can you try Open MPI 1.3,&#160;
<br>
Lenny.
<br>
<p>On 3/10/09, Tee Wen Kai &lt;teewenkai_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p>Hi,
<br>
&#160;
<br>
I am using version 1.2.8.
<br>
&#160;
<br>
Thank you.
<br>
&#160;
<br>
Regards,
<br>
Wenkai
<br>
<p>--- On Mon, 9/3/09, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><p>From: Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_free
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, 9 March, 2009, 7:42 PM
<br>
<p><p>Could you tell us what version of Open MPI you are using? It would help us to provide you with advice. 
<br>
<p><p>Thanks
<br>
Ralph
<br>
<p><p><p><p>On Mar 9, 2009, at 2:18 AM, Tee Wen Kai wrote:
<br>
<p><p><p><p><p><p><p>Hi,
<br>
&#160;
<br>
I have a program that allow user to enter their choice of operation. For example, when the user enter '4', the program will enter a function which will spawn some other programs stored in the same directory. When the user enter '5', the program will enter another function to request all spawned processes to exit. Therefore, initially only one process which act as the controller is spawned.
<br>
&#160;
<br>
My MPI_Info_create and MPI_Comm_spawn_multiple are called in&#160;a function. Everything is working fine except when I tried to free the MPI_Info in the function by calling MPI_Info_free, I have segmentation fault error. The second problem is when i do the spawning once and exit the controller program with MPI_Finalize, the program exited normally. But when spawning is done more than once and exit the controller program with MPI_Finalize, there is segmentation fault. I also realize that when the spawed processes exit, the 'orted' process is still running. Thus, when multiple MPI_Comm_spawn_multiple are called, there will be multiple 'orted' processes.
<br>
&#160;
<br>
Thank you and hope someone has a solution to my problem.
<br>
&#160;
<br>
Regards,
<br>
Wenkai
<br>
<p><p>New Email names for you! 
<br>
Get the Email name you've always wanted on the new @ymail and @rocketmail.
<br>
Hurry before someone else does!_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>Adding more friends is quick and easy.
<br>
Import them over to Yahoo! Mail today!
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>-----Inline Attachment Follows-----
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      New Email names for you! 
Get the Email name you&amp;#39;ve always wanted on the new @ymail and @rocketmail. 
Hurry before someone else does!
<a href="http://mail.promotions.yahoo.com/newdomains/sg/">http://mail.promotions.yahoo.com/newdomains/sg/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Previous message:</strong> <a href="8402.php">Mostyn Lewis: "[OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>Maybe in reply to:</strong> <a href="8377.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
<li><strong>Reply:</strong> <a href="8404.php">Ralph Castain: "Re: [OMPI users] Problem with MPI_Comm_spawn_multiple &amp; MPI_Info_fre"</a>
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
