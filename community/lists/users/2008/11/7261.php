<?
$subject_val = "Re: [OMPI users] dual cores";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 14:14:31 2008" -->
<!-- isoreceived="20081110191431" -->
<!-- sent="Mon, 10 Nov 2008 14:14:21 -0500" -->
<!-- isosent="20081110191421" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dual cores" -->
<!-- id="3188C884-B2C8-41BF-B5D1-FFBDFBAA6529_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990811100003tf631361i5be378525439da4d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 14:14:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7260.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There's also a great project at SourceForge called &quot;htop&quot; that is a  
<br>
&quot;better&quot; version of top.  It includes the ability to query for and set  
<br>
processor affinity for abitrary processes, colorized output, tree- 
<br>
based output (showing process hierarchies), etc.   It's pretty nice  
<br>
(IMHO):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://htop.sf.net/">http://htop.sf.net/</a>
<br>
<p><p>On Nov 10, 2008, at 3:03 AM, Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; you can also press &quot;f&quot; while&quot;top&quot; is running and choose option &quot;j&quot;
</span><br>
<span class="quotelev1">&gt;  this way you will see  what CPU is chosen under column P
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 10, 2008 at 7:38 AM, Hodgess, Erin &lt;HodgessE_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Brock Palen
</span><br>
<span class="quotelev1">&gt; Sent: Sun 11/9/2008 11:21 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] dual cores
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run 'top' For long running applications you should see 4 processes
</span><br>
<span class="quotelev1">&gt; each at 50%  (4*50=200% two cpus).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are ok, your hello_c did what it should, each of thoese 'hello's
</span><br>
<span class="quotelev1">&gt; could have came from any of the two cpus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also if your only running on your local machine, you don't need a
</span><br>
<span class="quotelev1">&gt; hostfile, and -byslot is meaningless in this case,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 ./hello_c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would work just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2008, at 12:05 AM, Hodgess, Erin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Open MPI gurus:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have just installed Open MPI this evening.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a dual core laptop and I would like to have both cores  
</span><br>
<span class="quotelev1">&gt; running.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the following my-hosts file:
</span><br>
<span class="quotelev2">&gt; &gt; localhost slots=2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and here is the command and output:
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun --hostfile my-hosts -np 4 --byslot hello_c |sort
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 0 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 1 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 2 of 4
</span><br>
<span class="quotelev2">&gt; &gt; Hello, world, I am 3 of 4
</span><br>
<span class="quotelev2">&gt; &gt; hodgesse_at_erinstoy:~/Desktop/openmpi-1.2.8/examples&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How do I know if both cores are running, please?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Erin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Erin M. Hodgess, PhD
</span><br>
<span class="quotelev2">&gt; &gt; Associate Professor
</span><br>
<span class="quotelev2">&gt; &gt; Department of Computer and Mathematical Sciences
</span><br>
<span class="quotelev2">&gt; &gt; University of Houston - Downtown
</span><br>
<span class="quotelev2">&gt; &gt; mailto: hodgesse_at_[hidden]
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7262.php">Oleg V. Zhylin: "Re: [OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>Previous message:</strong> <a href="7260.php">Ray Muno: "Re: [OMPI users] /dev/shm"</a>
<li><strong>In reply to:</strong> <a href="7252.php">Lenny Verkhovsky: "Re: [OMPI users] dual cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
<li><strong>Reply:</strong> <a href="7265.php">Hodgess, Erin: "Re: [OMPI users] dual cores"</a>
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
