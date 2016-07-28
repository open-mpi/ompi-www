<?
$subject_val = "Re: [OMPI users] Program abortion at a simple MPI_Get Programm";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 17 17:20:25 2014" -->
<!-- isoreceived="20140617212025" -->
<!-- sent="Tue, 17 Jun 2014 21:19:12 +0000" -->
<!-- isosent="20140617211912" -->
<!-- name="Florian Hahner" -->
<!-- email="home_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program abortion at a simple MPI_Get Programm" -->
<!-- id="76DAAE9E5453B643B37266E0F9FAC2E621B409A3_at_homeserver.homenet.local" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A80A6807-FF6E-4FA8-A6BE-9B52CF5DA80C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program abortion at a simple MPI_Get Programm<br>
<strong>From:</strong> Florian Hahner (<em>home_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-17 17:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24671.php">Pascal Paschos: "[OMPI users] make check with external libltdl"</a>
<li><strong>Previous message:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>In reply to:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your reply.
<br>
<p>I think its the best to give you the versions of the implementations I use
<br>
<p>OpenMPI 1.8.2 
<br>
MPICH 3.0.2
<br>
LAM MPI 7.1.5
<br>
<p>As you see in my program code, I use MPI_Win_get_attr to show the size of the window. Program crashes here. So I presume something went wrong at the WIN_Create call.
<br>
<p>I can comment out the MPI_Win_get_attr call, but then MPI_Get reads wrong data. I presume It reads somewhere outside the window because printf will show something like 2478000
<br>
<p>Mit freundlichen Gr&#252;&#223;en
<br>
<p>Florian Hahner
<br>
<p>-----Urspr&#252;ngliche Nachricht-----
<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von Jeff Squyres (jsquyres)
<br>
Gesendet: Dienstag, 17. Juni 2014 22:10
<br>
An: Open MPI User's List
<br>
Betreff: Re: [OMPI users] Program abortion at a simple MPI_Get Programm
<br>
<p>I'll let Nathan/others comment on the correctness of your program.
<br>
<p>What version of Open MPI are you using?  Be sure to use the latest to get the most correct one-sided implementation.
<br>
<p>Also, as one of the prior LAM/MPI developers, I must plead with you to stop using LAM/MPI.  We abandoned it many years ago in favor of Open MPI.  :-)
<br>
<p><p>On Jun 17, 2014, at 3:59 PM, Florian Hahner &lt;home_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello MPI users,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; first of all i want to introduce myself.  My name is Florian Hahner and I'm studying applied computer science in Fulda, Germany. In our class 'parallel computing' I'm working at a MPI-2 Project to show the benefits and the working method of one-sided communications.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I wrote a litte MPI program to demonstrate the mpi_get() function (see attachment).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The idea behind the program is that a master process with rank 0 fills an integer array with the size of MPI_Comm_size with values. The other processes should MPI_GET the value from this shared int array at the index of their rank.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We could compile the code, but execution will raise an error.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; We compile and run it with several MPI implementations (LAMMPI, MPICH ) and get every time errors. Host system is:  5.10 Generic_150400-10 sun4u sparc SUNW,SPARC-Enterprise Solaris
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; PS: I've some information are missing, please fill free to ask!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Best Regards
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Florian Hahner
</span><br>
<span class="quotelev1">&gt; &lt;beispiel2_flo.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24668.php">http://www.open-mpi.org/community/lists/users/2014/06/24668.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24669.php">http://www.open-mpi.org/community/lists/users/2014/06/24669.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24671.php">Pascal Paschos: "[OMPI users] make check with external libltdl"</a>
<li><strong>Previous message:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<li><strong>In reply to:</strong> <a href="24669.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24674.php">Siegmar Gross: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
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
