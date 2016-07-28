<?
$subject_val = "Re: [OMPI users] Newbie question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 06:28:43 2011" -->
<!-- isoreceived="20110111112843" -->
<!-- sent="Tue, 11 Jan 2011 06:28:35 -0500" -->
<!-- isosent="20110111112835" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie question" -->
<!-- id="4D2C3EE3.7030409_at_oracle.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="C951335A.DB8A%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 06:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15338.php">Jeff Squyres: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15336.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] [Open MPI] #2681: ompi-server publish name broken in 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So are you trying to start an mpi job that one process is one executable 
<br>
and the other process(es) are something else?  If so, you probably want 
<br>
to use a multiple app context.  If you look at  FAQ question 7. How do I 
<br>
run an MPMD MPI Job at <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a> 
<br>
this should answer your question below I believe.
<br>
<p>--td
<br>
<p>On 01/11/2011 01:06 AM, Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am afraid your terse response doesn&#146;t shed much light.  What I need 
</span><br>
<span class="quotelev1">&gt; is &#147;hosts&#148;
</span><br>
<span class="quotelev1">&gt; parameter I can use to mpi.spawn.Rslaves() function.  Can you explain 
</span><br>
<span class="quotelev1">&gt; or better
</span><br>
<span class="quotelev1">&gt; yet give an example as to how I can get this via mpirun?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at mpirun man page, I found an example:
</span><br>
<span class="quotelev1">&gt;   mpirun &#150;H aa,aa,bb  ./a.out
</span><br>
<span class="quotelev1">&gt; and similar ones.  But they all execute a program (like a.out above). 
</span><br>
<span class="quotelev1">&gt;  That&#146;&#146;s not
</span><br>
<span class="quotelev1">&gt; what I want.  What I want is to spawn a bunch of R slaves to other 
</span><br>
<span class="quotelev1">&gt; machines on
</span><br>
<span class="quotelev1">&gt; the network.  I can spawn R slaves, as many as I like, to the local 
</span><br>
<span class="quotelev1">&gt; machine, but
</span><br>
<span class="quotelev1">&gt; I don&#146;t know how to do this with machines on the network.  That&#146;s what 
</span><br>
<span class="quotelev1">&gt; &#147;hosts&#148;
</span><br>
<span class="quotelev1">&gt; parameter of mpi.spawn.Rslaves() enables me to do, I think.  If I can 
</span><br>
<span class="quotelev1">&gt; do that, then
</span><br>
<span class="quotelev1">&gt; Rmpi has function(s) to send command to each of the spawned slaves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is how can I get open MPI to give me those &#147;hosts&#148; parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/10/11 8:14 PM, &quot;pooja varshneya&quot; &lt;pooja.varshneya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You can use mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Mon, Jan 10, 2011 at 8:04 PM, Tena Sakai
</span><br>
<span class="quotelev1">&gt;     &lt;tsakai_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am an mpi newbie.  My open MPI is v 1.4.3, which I compiled
</span><br>
<span class="quotelev1">&gt;         on a linux machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I am using a language called R, which has an mpi
</span><br>
<span class="quotelev1">&gt;         interface/package.
</span><br>
<span class="quotelev1">&gt;         It appears that it is happy, on the surface, with the open MPI
</span><br>
<span class="quotelev1">&gt;         I installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         There is an R function called mpi.spawn.Rslaves().  An argument to
</span><br>
<span class="quotelev1">&gt;         this function is nslaves.  I can issue, for example,
</span><br>
<span class="quotelev1">&gt;           mpi.spawn.Rslaves( nslaves=20 )
</span><br>
<span class="quotelev1">&gt;         And it spawns 20 slave processes.  The trouble is that it is
</span><br>
<span class="quotelev1">&gt;         all on the
</span><br>
<span class="quotelev1">&gt;         same node as that of the master.  I want, instead, these 20
</span><br>
<span class="quotelev1">&gt;         (or more)
</span><br>
<span class="quotelev1">&gt;         slaves spawned on other machines on the network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         It so happens the mpi.spawn.Rslaves() has an extra argument called
</span><br>
<span class="quotelev1">&gt;         hosts.  Here&#146;s the definition of hosts from the api document:
</span><br>
<span class="quotelev1">&gt;         &#147;NULL or
</span><br>
<span class="quotelev1">&gt;         LAM node numbers to specify where R slaves to be spawned.&#148;  I have
</span><br>
<span class="quotelev1">&gt;         no idea what LAM node is, but there  is a funciton called
</span><br>
<span class="quotelev1">&gt;         lamhosts().
</span><br>
<span class="quotelev1">&gt;         which returns a bit verbose message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           It seems that there is no lamd running on the host
</span><br>
<span class="quotelev1">&gt;         compute-0-0.local.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           This indicates that the LAM/MPI runtime environment is not
</span><br>
<span class="quotelev1">&gt;         operating.
</span><br>
<span class="quotelev1">&gt;           The LAM/MPI runtime environment is necessary for the
</span><br>
<span class="quotelev1">&gt;         &quot;lamnodes&quot; command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           Please run the &quot;lamboot&quot; command the start the LAM/MPI runtime
</span><br>
<span class="quotelev1">&gt;           environment.  See the LAM/MPI documentation for how to invoke
</span><br>
<span class="quotelev1">&gt;           &quot;lamboot&quot; across multiple machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Here&#146;s my question.  Is there such command as lamboot in open
</span><br>
<span class="quotelev1">&gt;         MPI 1.4.3?
</span><br>
<span class="quotelev1">&gt;         Or am I using a wrong mpi software?  In a FAQ I read that
</span><br>
<span class="quotelev1">&gt;         there are other
</span><br>
<span class="quotelev1">&gt;         MPI software (FT-mpi, LA-mpi, LAM-mpi), but I had notion that
</span><br>
<span class="quotelev1">&gt;         open MPI
</span><br>
<span class="quotelev1">&gt;         is to have functionalities of all.  Is this a wrong impression?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Thank you for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Tena Sakai
</span><br>
<span class="quotelev1">&gt;         tsakai_at_[hidden] &lt;<a href="http://tsakai&#64;gallo.ucsf.edu">http://tsakai&#64;gallo.ucsf.edu</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15337/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-15337/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15338.php">Jeff Squyres: "Re: [OMPI users] Newbie question"</a>
<li><strong>Previous message:</strong> <a href="15336.php">Bernard Secher - SFME/LGLS: "Re: [OMPI users] [Open MPI] #2681: ompi-server publish name broken in 1.5.x"</a>
<li><strong>In reply to:</strong> <a href="15334.php">Tena Sakai: "Re: [OMPI users] Newbie question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15335.php">Siegmar Gross: "Re: [OMPI users] Newbie question"</a>
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
