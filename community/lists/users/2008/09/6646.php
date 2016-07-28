<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 21 23:05:58 2008" -->
<!-- isoreceived="20080922030558" -->
<!-- sent="Sun, 21 Sep 2008 20:05:54 -0700 (PDT)" -->
<!-- isosent="20080922030554" -->
<!-- name="Shafagh Jafer" -->
<!-- email="barfy27_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="80146.55658.qm_at_web34807.mail.mud.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="48535380809211852x44280c46tede3bf7174b089e8_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] conflict among differenv MPIs<br>
<strong>From:</strong> Shafagh Jafer (<em>barfy27_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-21 23:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried this, but didn't help :-( could any one help please???
<br>
<p>--- On Sun, 9/21/08, Brian Harker &lt;brian.harker_at_[hidden]&gt; wrote:
<br>
<p>From: Brian Harker &lt;brian.harker_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] conflict among differenv MPIs
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Sunday, September 21, 2008, 6:52 PM
<br>
<p>Just specify where each individual MPI distribution's stuff is on the
<br>
command line when you compile with mpicc *.c -I$MPICH_HOME/include or
<br>
mpicc *.c -I$OPENMPI_HOME/include where the &quot;HOME&quot; directories were
<br>
specified with --prefix= when you installed.  Hope this helps.  This
<br>
works for me.  Hope this helps.  Cheers!
<br>
<p>On Sun, Sep 21, 2008 at 7:37 PM, Shafagh Jafer &lt;barfy27_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have both openmpi and MPICH on my cluster, the problem is that mpi.h of
</span><br>
<span class="quotelev1">&gt; MPICH is in /usr/local/include and I dont have permission to rename or
</span><br>
<span class="quotelev1">&gt; remove it from there. In my source code I am including the mpi.h of
</span><br>
openmpi
<br>
<span class="quotelev1">&gt; and this works fine, but then mpi.h itself includes mpicxx.h which it
</span><br>
again
<br>
<span class="quotelev1">&gt; includes openmpi's mpi.h and this is my problem becase the system goes
</span><br>
and
<br>
<span class="quotelev1">&gt; takes the mpi.h file of MPICH which is in /usr/local/include and thus i
</span><br>
get
<br>
<span class="quotelev1">&gt; errors segfaults! I am using mpicc wrapper to compile my code and i think
</span><br>
my
<br>
<span class="quotelev1">&gt; problem is due to having other mpi.h files. Am I right?? What should I do
</span><br>
to
<br>
<span class="quotelev1">&gt; make /usr/local/include in-accesible from my code??? Please help me!
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
Cheers,
Brian
brian.harker_at_[hidden]
&quot;In science, there is only physics; all the rest is
stamp-collecting.&quot;
 -Ernest Rutherford
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
      
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6646/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6647.php">Sofia Aparicio Secanellas: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>In reply to:</strong> <a href="6645.php">Brian Harker: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6649.php">Robert Kubrick: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
