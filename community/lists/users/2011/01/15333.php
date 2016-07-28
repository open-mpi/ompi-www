<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 10 23:15:04 2011" -->
<!-- isoreceived="20110111041504" -->
<!-- sent="Mon, 10 Jan 2011 23:14:58 -0500" -->
<!-- isosent="20110111041458" -->
<!-- name="pooja varshneya" -->
<!-- email="pooja.varshneya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="AANLkTinrgY1E0q2RHuVohwSX43dsXCuARkhJzHUre=6Q_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C950ECA9.DB74%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbie question<br>
<strong>From:</strong> pooja varshneya (<em>pooja.varshneya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-10 23:14:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use mpirun.
<br>
<p>On Mon, Jan 10, 2011 at 8:04 PM, Tena Sakai &lt;tsakai_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am an mpi newbie.  My open MPI is v 1.4.3, which I compiled
</span><br>
<span class="quotelev1">&gt; on a linux machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using a language called R, which has an mpi interface/package.
</span><br>
<span class="quotelev1">&gt; It appears that it is happy, on the surface, with the open MPI I installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an R function called mpi.spawn.Rslaves().  An argument to
</span><br>
<span class="quotelev1">&gt; this function is nslaves.  I can issue, for example,
</span><br>
<span class="quotelev1">&gt;   mpi.spawn.Rslaves( nslaves=20 )
</span><br>
<span class="quotelev1">&gt; And it spawns 20 slave processes.  The trouble is that it is all on the
</span><br>
<span class="quotelev1">&gt; same node as that of the master.  I want, instead, these 20 (or more)
</span><br>
<span class="quotelev1">&gt; slaves spawned on other machines on the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It so happens the mpi.spawn.Rslaves() has an extra argument called
</span><br>
<span class="quotelev1">&gt; hosts.  Here&#146;s the definition of hosts from the api document: &#147;NULL or
</span><br>
<span class="quotelev1">&gt; LAM node numbers to specify where R slaves to be spawned.&#148;  I have
</span><br>
<span class="quotelev1">&gt; no idea what LAM node is, but there  is a funciton called lamhosts().
</span><br>
<span class="quotelev1">&gt; which returns a bit verbose message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   It seems that there is no lamd running on the host compute-0-0.local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   This indicates that the LAM/MPI runtime environment is not operating.
</span><br>
<span class="quotelev1">&gt;   The LAM/MPI runtime environment is necessary for the &quot;lamnodes&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
</span><br>
<span class="quotelev1">&gt;   environment.  See the LAM/MPI documentation for how to invoke
</span><br>
<span class="quotelev1">&gt;   &quot;lamboot&quot; across multiple machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here&#146;s my question.  Is there such command as lamboot in open MPI 1.4.3?
</span><br>
<span class="quotelev1">&gt; Or am I using a wrong mpi software?  In a FAQ I read that there are other
</span><br>
<span class="quotelev1">&gt; MPI software (FT-mpi, LA-mpi, LAM-mpi), but I had notion that open MPI
</span><br>
<span class="quotelev1">&gt; is to have functionalities of all.  Is this a wrong impression?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<li><strong>In reply to:</strong> <a href="15332.php">Tena Sakai: "[OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<li><strong>Reply:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
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
