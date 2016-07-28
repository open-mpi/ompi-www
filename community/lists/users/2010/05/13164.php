<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 26 10:24:19 2010" -->
<!-- isoreceived="20100526142419" -->
<!-- sent="Wed, 26 May 2010 10:24:16 -0400" -->
<!-- isosent="20100526142416" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="E39211BA-3A58-4C79-B3DA-0A913029DCE9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51CE91E4-CC4C-4476-BE68-6F776BF4F003_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-26 10:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Sorry for the delay, I missed the C/R question in the mail)
<br>
<p>On May 25, 2010, at 9:35 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 24, 2010, at 2:02 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; | &gt; 2) I have installed blcr V0.8.2 but when I try to built OMPI  
</span><br>
<span class="quotelev2">&gt;&gt; and I point to the
</span><br>
<span class="quotelev2">&gt;&gt; | &gt; full installation it complains it cannot find it. Note that I  
</span><br>
<span class="quotelev2">&gt;&gt; build BLCR with
</span><br>
<span class="quotelev2">&gt;&gt; | &gt; GCC but I am building OMPI with Intel compilers (V11.1)
</span><br>
<span class="quotelev2">&gt;&gt; |
</span><br>
<span class="quotelev2">&gt;&gt; | Can you be more specific here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I pointed to the insatllation path for BLCR but config complained  
</span><br>
<span class="quotelev2">&gt;&gt; that it
</span><br>
<span class="quotelev2">&gt;&gt; couldn't find it. If BLCR is only needed for checkpoint / restart  
</span><br>
<span class="quotelev2">&gt;&gt; then we can
</span><br>
<span class="quotelev2">&gt;&gt; leave without it. Is BLCR needed for suspend/resume of mpi jobs ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean suspend with ctrl-Z?  If so, correct -- BLCR is *only* used  
</span><br>
<span class="quotelev1">&gt; for checkpoint/restart.  Ctrl-Z just uses the SIGSTP functionality.
</span><br>
<p>So BLCR is used for the checkpoint/restart functionality in Open MPI.  
<br>
We have a webpage with some more details and examples at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
<br>
<p>You should be able to suspend/resume an Open MPI job using SIGSTOP/ 
<br>
SIGCONT without the C/R functionality. We have FAQ item that talks  
<br>
about how to enable this functionality:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#suspend-resume">http://www.open-mpi.org/faq/?category=running#suspend-resume</a>
<br>
<p>You can combine the C/R and the SIGSTOP/SIGCONT functionality so that  
<br>
when you 'suspend' a job a checkpoint is taken and the process is  
<br>
stopped. You can continue the job by sending SIGCONT as normal.  
<br>
Additionally, this way if the job needs to be terminated for some  
<br>
reason (e.g., memory footprint, maintenance), it can be safely  
<br>
terminated and restarted from the checkpoint. I have a example of how  
<br>
this works at the link below:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop">http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop</a>
<br>
<p>As far as C/R integration with schedulers/resource managers, I know  
<br>
that the BLCR folks have been working with Torque to better integrate  
<br>
Open MPI+BLCR+Torque. If this is of interest, you might want to check  
<br>
with them on the progress of that project.
<br>
<p>-- Josh
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>Previous message:</strong> <a href="13163.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13166.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
