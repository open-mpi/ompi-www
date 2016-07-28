<?
$subject_val = "Re: [OMPI users] PROBLEM WITH MPIRUN";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 29 10:48:51 2010" -->
<!-- isoreceived="20101129154851" -->
<!-- sent="Mon, 29 Nov 2010 10:48:46 -0500" -->
<!-- isosent="20101129154846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PROBLEM WITH MPIRUN" -->
<!-- id="31FB719B-02B8-4ED0-887B-3EDD63325EC0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=QQZojCcV7=f2AfF2ucnHyFZRcpPkdWKQeqztM_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PROBLEM WITH MPIRUN<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-29 10:48:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
<li><strong>Previous message:</strong> <a href="14895.php">Jeff Squyres: "Re: [OMPI users] ABOUT ERROR WITH MPIRUN"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Tushar Andriyas: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just replied on your previous thread -- sorry for the delay.
<br>
<p><p>On Nov 29, 2010, at 8:27 AM, Tushar Andriyas wrote:
<br>
<p><span class="quotelev1">&gt; and the openmpi-1.2.7-pgi??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 29, 2010 at 6:27 AM, Tushar Andriyas &lt;thugnomics28_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; The thing is I did not write the code myself and am just trying to get it to work. So, would it help if i change the version of the compiler or is that it happens with every pgi compiler suite??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sun, Nov 28, 2010 at 11:45 PM, Simon Hammond &lt;simon.hammond_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't usually an error - you get this by using conventional
</span><br>
<span class="quotelev1">&gt; Fortran exit methods. The Fortran stop means the program hit the exit
</span><br>
<span class="quotelev1">&gt; statements in the code. I have only had this with PGI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Si Hammond
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research Fellow &amp; Knowledge Transfer Associate
</span><br>
<span class="quotelev1">&gt; Performance Computing &amp; Visualisation
</span><br>
<span class="quotelev1">&gt; Department of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Warwick, UK, CV4 7AL
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 29 November 2010 04:56, Tushar Andriyas &lt;thugnomics28_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi there,
</span><br>
<span class="quotelev2">&gt; &gt; I have posted before about the problems that I am facing with mpirun. I have
</span><br>
<span class="quotelev2">&gt; &gt; gotten some help but right now i am stuck with an error message.....FORTRAN
</span><br>
<span class="quotelev2">&gt; &gt; STOP when I invoke mpirun......can someone help PLEASE!!!!!!
</span><br>
<span class="quotelev2">&gt; &gt; I m using openmpi-1.2.7-pgi and pgi-7.2 compiler.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14897.php">Gilbert Grosdidier: "Re: [OMPI users] mpool_sm_max_size disappeared ?"</a>
<li><strong>Previous message:</strong> <a href="14895.php">Jeff Squyres: "Re: [OMPI users] ABOUT ERROR WITH MPIRUN"</a>
<li><strong>In reply to:</strong> <a href="14891.php">Tushar Andriyas: "Re: [OMPI users] PROBLEM WITH MPIRUN"</a>
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
