<?
$subject_val = "Re: [OMPI users] Question about openmpi and msc nastran";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 09:51:52 2008" -->
<!-- isoreceived="20081021135152" -->
<!-- sent="Tue, 21 Oct 2008 06:50:21 -0700" -->
<!-- isosent="20081021135021" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about openmpi and msc nastran" -->
<!-- id="260B5BEEF399B143A0F6E5D1D73ED2311EFD5F_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6c11f45e0810210126r1dabb422x2d7b49689a6294f2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about openmpi and msc nastran<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-21 09:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7046.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pedro,
<br>
<p>&nbsp;
<br>
<p>Please send me the first 60 lines of an F06 file ( for a serial run ).
<br>
I need to know
<br>
<p>the specific version you have.
<br>
<p>&nbsp;
<br>
<p>Can you also please send me the output from &quot;ls -l
<br>
/msc/nastran/msc2007/linux864&quot;
<br>
<p>&nbsp;
<br>
<p>Also, you might want to e-mail me directly, since this issue is more
<br>
application
<br>
<p>dependent than OpenMPI dependent.
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Joe Griffin
<br>
<p>joe.griffin_at_[hidden]
<br>
<p>(714) 445-5636
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Pedro G
<br>
Sent: Tuesday, October 21, 2008 1:27 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Question about openmpi and msc nastran
<br>
<p>&nbsp;
<br>
<p>I tried that configuration but I got a nastran error. It seems it hasn't
<br>
got an analyzer for open proc.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;a.solver=/msc/nastran/msc2007/linux8664/analysis.dmp.open
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This file does not exist.
<br>
<p>How can I get it?
<br>
&nbsp;
<br>
<p>On 10/20/08, Joe Griffin &lt;joe.griffin_at_[hidden]&gt; wrote: 
<br>
<p>Pedro,
<br>
<p>&nbsp;
<br>
<p>If you used &quot;openmpi=yes&quot; then you will also need to specify
<br>
&quot;proc=open&quot;.  I believe that was
<br>
<p>the specification in 2007.0.3.
<br>
<p>&nbsp;
<br>
<p>Regards,
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Pedro G
<br>
Sent: Monday, October 20, 2008 5:18 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Question about openmpi and msc nastran
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>On 10/20/08, Reuti &lt;reuti_at_[hidden]&gt; wrote: 
<br>
<p>Hi,
<br>
<p>Am 20.10.2008 um 12:18 schrieb Pedro G:
<br>
<p>I would like to know if Msc Nastran supports openmpi.
<br>
<p>I have been searching in google about Nastran and Openmpi but I couldn't
<br>
find if it works or not.
<br>
<p>Now I'm using lam/mpi for nastran parallel jobs, but I have some
<br>
problems with lam, nastran and sge, so I'd like to upgrade to openmpi.
<br>
<p><p>do you have the source code of the application? If you have only the
<br>
binary compiled for LAM, then you can't do anything to change. You
<br>
checked the LAM/MPI Howto at the SGE website?
<br>
<p>&nbsp;
<br>
<p>No, I don't have the source code, the application seems to be able to
<br>
work with openmpi since it has an option openmpi=yes in the command
<br>
line, but I couldn't make it to work. Anyway, I think it is not fully
<br>
supported yet since there is nothing about that option in the user
<br>
manual
<br>
<p>&nbsp;
<br>
<p>About LAM/MPI I have already read the howto and did a tight integration.
<br>
The problem is that Msc Nastran in parallel jobs start a new lam
<br>
environment getting out of control of sge.
<br>
<p>&nbsp;
<br>
<p>I contacted with Nastran and they told that was a LAM/MPI or SGE
<br>
problem.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- Reuti
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7058.php">SLIM H.A.: "[OMPI users] ga-4.1 on mx segmentation violation"</a>
<li><strong>Previous message:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<li><strong>In reply to:</strong> <a href="7056.php">Pedro G: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7046.php">Joe Griffin: "Re: [OMPI users] Question about openmpi and msc nastran"</a>
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
