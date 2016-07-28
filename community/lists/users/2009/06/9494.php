<?
$subject_val = "Re: [OMPI users] Problem getting OpenMPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 06:50:25 2009" -->
<!-- isoreceived="20090602105025" -->
<!-- sent="Tue, 2 Jun 2009 03:50:20 -0700 (PDT)" -->
<!-- isosent="20090602105020" -->
<!-- name="Jeff Layton" -->
<!-- email="laytonjb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem getting OpenMPI to run" -->
<!-- id="686939.37288.qm_at_web80706.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A242D50.1010302_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem getting OpenMPI to run<br>
<strong>From:</strong> Jeff Layton (<em>laytonjb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 06:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>Previous message:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
<li><strong>In reply to:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9734.php">Prentice Bisbal: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe,
<br>
<p>You are correct this is a ROCKS cluster. I didn't use the the --sge option when building (I tend to stay more generic, but I should have done that).
<br>
<p>Not sure of the OFED release but I don't admin this cluster and the owners are picky about upgrades (tends to break Lustre).
<br>
<p>BTW - the problem was solved. There was a configuration error for the specific queue. It was found and fixed and things seem to be running normally.
<br>
<p>Thanks for help and I'm sorry for disturbing everyone. I wasn't familiar enough with the error messages to tell if it was OpenMPI or SGE.
<br>
<p>TIA!
<br>
<p>Jeff
<br>
<p><p><p><p><p>________________________________
<br>
From: Joe Landman &lt;landman_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Sent: Monday, June 1, 2009 3:34:40 PM
<br>
Subject: Re: [OMPI users] Problem getting OpenMPI to run
<br>
<p>Jeff Layton wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 1, 2009, at 2:04 PM, Jeff Layton wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: executing task of job 3084 failed: execution daemon on host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;compute-2-2.local&quot; didn't accept task
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an error message from the resource manager/scheduler -- not from OMPI (i.e., OMPI tried to launch a process on a node and the launch failed because something rejected it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which one are you using?
</span><br>
<p>When you built Open-MPI, did you use the
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--with-sge
<br>
<p>switch?  Or if this is an OFED release, is it possible that this wasn't specified?
<br>
<p>FWIW, this looks like a Rocks compute node (&quot;compute-2-2.local&quot; gives that away).  The OFED Rolls in Rocks have had a few issues in the past with how they were built, so you may be running into that.  If you didn't build it yourself, I'd suggest at least giving that a try.
<br>
<p>Alternatively, OFED-1.4 is pretty good.  Has a later version of Open-MPI than 1.3.x
<br>
<p>Joe
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SGE
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
<p><p>-- Joseph Landman, Ph.D
<br>
Founder and CEO
<br>
Scalable Informatics,
<br>
email: landman_at_[hidden]
<br>
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://scalableinformatics.com/jackrabbit">http://scalableinformatics.com/jackrabbit</a>
<br>
phone: +1 734 786 8423 x121
<br>
fax  : +1 866 888 3112
<br>
cell : +1 734 612 4615
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9494/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9495.php">Jeff Squyres: "Re: [OMPI users] Fedora install problem"</a>
<li><strong>Previous message:</strong> <a href="9493.php">jacob Balthazor: "[OMPI users] Fedora install problem"</a>
<li><strong>In reply to:</strong> <a href="9489.php">Joe Landman: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9734.php">Prentice Bisbal: "Re: [OMPI users] Problem getting OpenMPI to run"</a>
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
