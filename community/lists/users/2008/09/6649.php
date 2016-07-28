<?
$subject_val = "Re: [OMPI users] conflict among differenv MPIs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 08:49:51 2008" -->
<!-- isoreceived="20080922124951" -->
<!-- sent="Mon, 22 Sep 2008 08:48:11 -0400" -->
<!-- isosent="20080922124811" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] conflict among differenv MPIs" -->
<!-- id="933761B1-E915-49F8-BDF8-9BC5265B1B24_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="80146.55658.qm_at_web34807.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 08:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6650.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Recompile your own version of openmpi in a local directory, set your  
<br>
PATH to your local openmpi install.
<br>
<p>export PATH=/my/openmpi/install/include:/usr/local/include
<br>
<p>mpicxx -show
<br>
<p>On Sep 21, 2008, at 11:05 PM, Shafagh Jafer wrote:
<br>
<p><span class="quotelev1">&gt; I have tried this, but didn't help :-( could any one help please???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Sun, 9/21/08, Brian Harker &lt;brian.harker_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: Brian Harker &lt;brian.harker_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] conflict among differenv MPIs
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Sunday, September 21, 2008, 6:52 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just specify where each individual MPI distribution's stuff is on the
</span><br>
<span class="quotelev1">&gt; command line when you compile with mpicc *.c -I$MPICH_HOME/include or
</span><br>
<span class="quotelev1">&gt; mpicc *.c -I$OPENMPI_HOME/include where the &quot;HOME&quot; directories were
</span><br>
<span class="quotelev1">&gt; specified with --prefix= when you installed.  Hope this helps.  This
</span><br>
<span class="quotelev1">&gt; works for me.  Hope this helps.  Cheers!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Sep 21, 2008 at 7:37 PM, Shafagh Jafer &lt;barfy27_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have both openmpi and MPICH on my cluster, the problem is that  
</span><br>
<span class="quotelev1">&gt; mpi.h of
</span><br>
<span class="quotelev2">&gt; &gt; MPICH is in /usr/local/include and I dont have permission to  
</span><br>
<span class="quotelev1">&gt; rename or
</span><br>
<span class="quotelev2">&gt; &gt; remove it from there. In my source code I am including the mpi.h of
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev2">&gt; &gt; and this works fine, but then mpi.h itself includes mpicxx.h  
</span><br>
<span class="quotelev1">&gt; which it
</span><br>
<span class="quotelev1">&gt; again
</span><br>
<span class="quotelev2">&gt; &gt; includes openmpi's mpi.h and this is my problem becase the system  
</span><br>
<span class="quotelev1">&gt; goes
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt; takes the mpi.h file of MPICH which is in /usr/local/include and  
</span><br>
<span class="quotelev1">&gt; thus i
</span><br>
<span class="quotelev1">&gt; get
</span><br>
<span class="quotelev2">&gt; &gt; errors segfaults! I am using mpicc wrapper to compile my code and  
</span><br>
<span class="quotelev1">&gt; i think
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev2">&gt; &gt; problem is due to having other mpi.h files. Am I right?? What  
</span><br>
<span class="quotelev1">&gt; should I do
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt; make /usr/local/include in-accesible from my code??? Please help me!
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; brian.harker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In science, there is only physics; all the rest is
</span><br>
<span class="quotelev1">&gt; stamp-collecting.&quot;
</span><br>
<span class="quotelev1">&gt;  -Ernest Rutherford
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6650.php">Jeff Squyres: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6648.php">Jeff Squyres: "Re: [OMPI users] Mpirun don't execute"</a>
<li><strong>In reply to:</strong> <a href="6646.php">Shafagh Jafer: "Re: [OMPI users] conflict among differenv MPIs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
<li><strong>Reply:</strong> <a href="6651.php">Jeff Squyres: "Re: [OMPI users] conflict among differenv MPIs"</a>
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
