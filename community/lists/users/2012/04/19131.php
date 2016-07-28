<?
$subject_val = "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 11:58:31 2012" -->
<!-- isoreceived="20120425155831" -->
<!-- sent="Wed, 25 Apr 2012 08:58:24 -0700" -->
<!-- isosent="20120425155824" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines" -->
<!-- id="AB716922-EB55-4775-A013-5E088F1E7474_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CA+vDB+M6OHijtndO10SvG32G5s2ErY_=6jB=mQZ4RNAEKw2swQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 11:58:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My bad. I did not read the bottom part of the email. 
<br>
Not sure If this would help, but can u try, --mca btl sm,self ?
<br>
<p><pre>
--
Sent from my iPhone
On Apr 24, 2012, at 3:46 PM, Kyle Boe &lt;boex0040_at_[hidden]&gt; wrote:
&gt; Right, I tried using a hostfile, and it made no difference. This is running OpenMPI 1.4.4 on CentOS 5.x machines. The original issue was an error trap built into my code, where it said one of the cores was asking for information it already owned. I'm sorry to be vague, but I can't share anything from the code in this forum. Basically, it is a CFD code, parallelized by splitting the grid points in the simulation up amongst the processors assigned to the job. As a pre-processing step, each processor must figure out which other processors it must communicate with by virtue of sharing neighboring gridpoints. The error I received told me that the grid points were not being split amongst different processors. I have used this exact same code using OpenMPI on other (larger) architectures, which, combined with the MPI error I shared before, leads me to believe I must have something not configured correctly, or there is some run time option I'm not setting properly, etc.
&gt; 
&gt; Thanks
&gt; 
&gt; Kyle
&gt; 
&gt; On Tue, Apr 24, 2012 at 4:15 PM, &lt;users-request_at_[hidden]&gt; wrote:
&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] MPI doesn't recognize multiple cores
&gt;        available on    multicore machines
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;F9D4FCE5-9974-4814-9BCF-A39124961B32_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=us-ascii
&gt; 
&gt; You don't need a hostfile to run multiple procs on the localhost.
&gt; 
&gt; What version of OMPI are you using? What was the original issue?
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19132.php">seshendra seshu: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>Previous message:</strong> <a href="19130.php">Lloyd Brown: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<li><strong>In reply to:</strong> <a href="19112.php">Kyle Boe: "Re: [OMPI users] MPI doesn't recognize multiple cores available on multicore machines"</a>
<!-- nextthread="start" -->
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
