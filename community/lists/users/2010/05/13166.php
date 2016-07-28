<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 26 15:21:24 2010" -->
<!-- isoreceived="20100526192124" -->
<!-- sent="Wed, 26 May 2010 14:21:16 -0500" -->
<!-- isosent="20100526192116" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="4BFD74AC.8090504_at_gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E39211BA-3A58-4C79-B3DA-0A913029DCE9_at_open-mpi.org" -->
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
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-26 15:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>In reply to:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh
<br>
<p>thanks for the reply. pls see below ...
<br>
<p><p>On 05/26/10 09:24, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; (Sorry for the delay, I missed the C/R question in the mail)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 25, 2010, at 9:35 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 24, 2010, at 2:02 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | &gt; 2) I have installed blcr V0.8.2 but when I try to built OMPI and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I point to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | &gt; full installation it complains it cannot find it. Note that I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build BLCR with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | &gt; GCC but I am building OMPI with Intel compilers (V11.1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; |
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | Can you be more specific here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I pointed to the insatllation path for BLCR but config complained 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; couldn't find it. If BLCR is only needed for checkpoint / restart 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then we can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; leave without it. Is BLCR needed for suspend/resume of mpi jobs ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You mean suspend with ctrl-Z?  If so, correct -- BLCR is *only* used 
</span><br>
<span class="quotelev2">&gt;&gt; for checkpoint/restart.  Ctrl-Z just uses the SIGSTP functionality.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So BLCR is used for the checkpoint/restart functionality in Open MPI. 
</span><br>
<span class="quotelev1">&gt; We have a webpage with some more details and examples at the link below:
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/">http://osl.iu.edu/research/ft/ompi-cr/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should be able to suspend/resume an Open MPI job using 
</span><br>
<span class="quotelev1">&gt; SIGSTOP/SIGCONT without the C/R functionality. We have FAQ item that 
</span><br>
<span class="quotelev1">&gt; talks about how to enable this functionality:
</span><br>
<span class="quotelev1">&gt;   <a href="http://www.open-mpi.org/faq/?category=running#suspend-resume">http://www.open-mpi.org/faq/?category=running#suspend-resume</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can combine the C/R and the SIGSTOP/SIGCONT functionality so that 
</span><br>
<span class="quotelev1">&gt; when you 'suspend' a job a checkpoint is taken and the process is 
</span><br>
<span class="quotelev1">&gt; stopped. You can continue the job by sending SIGCONT as normal. 
</span><br>
<span class="quotelev1">&gt; Additionally, this way if the job needs to be terminated for some 
</span><br>
<span class="quotelev1">&gt; reason (e.g., memory footprint, maintenance), it can be safely 
</span><br>
<span class="quotelev1">&gt; terminated and restarted from the checkpoint. I have a example of how 
</span><br>
<span class="quotelev1">&gt; this works at the link below:
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop">http://osl.iu.edu/research/ft/ompi-cr/examples.php#uc-ckpt-stop</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as C/R integration with schedulers/resource managers, I know 
</span><br>
<span class="quotelev1">&gt; that the BLCR folks have been working with Torque to better integrate 
</span><br>
<span class="quotelev1">&gt; Open MPI+BLCR+Torque. If this is of interest, you might want to check 
</span><br>
<span class="quotelev1">&gt; with them on the progress of that project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
So suspend/resume of OpenMPI jobs does not require BLCR. OK so I will 
<br>
proceed w/o it.
<br>
<p>best regards,
<br>
<p>Michael
<br>
<p><p><span class="quotelev1">&gt; -- Josh
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
% -------------------------------------------------------------------- \
% Michael E. Thomadakis, Ph.D.  Senior Lead Supercomputer Engineer/Res \
% E-mail: miket AT tamu DOT edu                   Texas A&amp;M University \
% web:    <a href="http://alphamike.tamu.edu">http://alphamike.tamu.edu</a>              Supercomputing Center \
% Voice:  979-862-3931                    Teague Research Center, 104B \
% FAX:    979-847-8643                  College Station, TX 77843, USA \
% -------------------------------------------------------------------- \
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13166/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13165.php">Peter Thompson: "Re: [OMPI users] Building from the SRPM version creates an rpm with striped libraries"</a>
<li><strong>In reply to:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
