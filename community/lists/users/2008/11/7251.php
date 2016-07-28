<?
$subject_val = "Re: [OMPI users] dual cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 00:38:46 2008" -->
<!-- isoreceived="20081110053846" -->
<!-- sent="Sun, 9 Nov 2008 23:38:28 -0600" -->
<!-- isosent="20081110053828" -->
<!-- name="Hodgess, Erin" -->
<!-- email="HodgessE_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual cores" -->
<!-- id="70A5AC06FDB5E54482D19E1C04CDFCF303F74EC5_at_BALI.uhd.campus" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5800DF2C-DFEA-4E67-9731-8D41AC8C878D_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] dual cores<br>
<strong>From:</strong> Hodgess, Erin (<em>HodgessE_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 00:38:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
great!
<br>
<p>Thanks,
<br>
Erin
<br>
<p><p>Erin M. Hodgess, PhD
<br>
Associate Professor
<br>
Department of Computer and Mathematical Sciences
<br>
University of Houston - Downtown
<br>
mailto: hodgesse_at_[hidden]
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] on behalf of Brock Palen
<br>
Sent: Sun 11/9/2008 11:21 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] dual cores
<br>
&nbsp;
<br>
Run 'top' For long running applications you should see 4 processes  
<br>
each at 50%  (4*50=200% two cpus).
<br>
<p>You are ok, your hello_c did what it should, each of thoese 'hello's  
<br>
could have came from any of the two cpus.
<br>
<p>Also if your only running on your local machine, you don't need a  
<br>
hostfile, and -byslot is meaningless in this case,
<br>
<p>mpirun -np 4 ./hello_c
<br>
<p>Would work just fine.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Nov 10, 2008, at 12:05 AM, Hodgess, Erin wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI gurus:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have just installed Open MPI this evening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a dual core laptop and I would like to have both cores running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the following my-hosts file:
</span><br>
<span class="quotelev1">&gt; localhost slots=2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and here is the command and output:
</span><br>
<span class="quotelev1">&gt;  mpirun --hostfile my-hosts -np 4 --byslot hello_c |sort
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev1">&gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev1">&gt; hodgesse_at_erinstoy:~/Desktop/openmpi-1.2.8/examples&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How do I know if both cores are running, please?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; Erin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev1">&gt; Associate Professor
</span><br>
<span class="quotelev1">&gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; University of Houston - Downtown
</span><br>
<span class="quotelev1">&gt; mailto: hodgesse_at_[hidden]
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<br><hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7251/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>Previous message:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<li><strong>In reply to:</strong> <a href="7250.php">Brock Palen: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
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
