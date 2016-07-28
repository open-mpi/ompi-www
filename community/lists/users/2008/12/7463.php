<?
$subject_val = "Re: [OMPI users] undefined symbol: MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 13:45:49 2008" -->
<!-- isoreceived="20081208184549" -->
<!-- sent="Mon, 8 Dec 2008 13:45:43 -0500" -->
<!-- isosent="20081208184543" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] undefined symbol: MPI_Send" -->
<!-- id="ea86ce220812081045u732d6ea4x4aab25bddb07013e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27329b10812080635k7d1e2359i1bee62d8349cdd1f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] undefined symbol: MPI_Send<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-08 13:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7453.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Heitor,
<br>
We need more information to be able to answer your question,
<br>
such as what version of Open MPI are you using, and what
<br>
kind of OS/machine are you running on, and what kind of network, etc.
<br>
Please follow the directions on this webpage for getting help:
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>On Mon, Dec 8, 2008 at 9:35 AM, Heitor Florido &lt;heitorflorido_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My program keeps throwing this error after I created a child process with
</span><br>
<span class="quotelev1">&gt; MPI_comm_spawn:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./../../Desktop/computacaoDistribuida/src/server/server: symbol lookup
</span><br>
<span class="quotelev1">&gt; error: ./../../Desktop/computacaoDistribuida/src/server/server: undefined
</span><br>
<span class="quotelev1">&gt; symbol: MPI_Send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've already used MPI_Send on other parts of the program...
</span><br>
<span class="quotelev1">&gt; I've tried to print the message recieved from child process, but a similar
</span><br>
<span class="quotelev1">&gt; message appears:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./../../Desktop/computacaoDistribuida/src/server/server: symbol lookup
</span><br>
<span class="quotelev1">&gt; error: ./../../Desktop/computacaoDistribuida/src/server/server: undefined
</span><br>
<span class="quotelev1">&gt; symbol: printf, version GLIBC_2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This printf is executed if MPI_Comm_spawn returned MPI_SUCESS, so I guess
</span><br>
<span class="quotelev1">&gt; this is working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It appears that my libs (glibc, mpi) were unload after the MPI_comm_spawn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone knows what's this??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Heitor Florido
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7464.php">douglas.guptill_at_[hidden]: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>Previous message:</strong> <a href="7462.php">Eugene Loh: "Re: [OMPI users] trouble using --mca mpi_yield_when_idle 1"</a>
<li><strong>In reply to:</strong> <a href="7453.php">Heitor Florido: "[OMPI users] undefined symbol: MPI_Send"</a>
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
