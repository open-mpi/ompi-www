<?
$subject_val = "Re: [OMPI devel] Possible memory leak";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 09:03:00 2010" -->
<!-- isoreceived="20100901130300" -->
<!-- sent="Wed, 1 Sep 2010 06:02:11 -0700" -->
<!-- isosent="20100901130211" -->
<!-- name="ananda.mudar_at_[hidden]" -->
<!-- email="ananda.mudar_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible memory leak" -->
<!-- id="1E3BF6B8D1243842A175F7C7069EB0E7082D019A_at_usa-mv-msg.wipro.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Possible memory leak" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible memory leak<br>
<strong>From:</strong> <a href="mailto:ananda.mudar_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20Possible%20memory%20leak"><em>ananda.mudar_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-09-01 09:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Sylvain
<br>
<p>Thanks for your explanation.
<br>
<p>I tried using -mca coll basic,sync option also and I still see the same
<br>
issue ie; the process size increases at an alarming rate. As you see, I
<br>
am not allocating any memory inside my program.
<br>
<p>Regards
<br>
<p>Ananda
<br>
<p>------------------- Original Message --------------------------------
<br>
<p>Subject: Re: [OMPI devel] Possible memory leak
<br>
From: Sylvain Jeaugey (sylvain.jeaugey_at_[hidden])
<br>
Date: 2010-09-01 04:07:36 
<br>
<p>*	Next message: Chris Samuel: &quot;[OMPI devel] OMPI 1.5 twitter
<br>
notification plugin probably broken by switch to OAUTH&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/09/8435.php">http://www.open-mpi.org/community/lists/devel/2010/09/8435.php</a>&gt;  
<br>
*	Previous message: Larry Baker: &quot;[OMPI devel] Fwd: Fwd: 1.5rc5
<br>
has been posted&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8433.php">http://www.open-mpi.org/community/lists/devel/2010/08/8433.php</a>&gt;  
<br>
*	In reply to: ananda.mudar_at_[hidden]: &quot;[OMPI devel] Possible
<br>
memory leak&quot;
<br>
&lt;<a href="http://www.open-mpi.org/community/lists/devel/2010/08/8431.php">http://www.open-mpi.org/community/lists/devel/2010/08/8431.php</a>&gt;  
<br>
<p>________________________________
<br>
<p>Hi ananda, 
<br>
<p>I didn't try to run your program, but this seems logical to me. 
<br>
<p>The problem with calling MPI_Bcast repeatedly is that you may have an 
<br>
infinite desynchronization between the sender and the receiver(s). 
<br>
MPI_Bcast is an unidirectional operation. It does not necessary block 
<br>
until the receiver(s) gets the message, hence causing a huge number of 
<br>
messages to be buffered (and in the case of ft-enable-cr, I guess 
<br>
everything is saved until an operation going the other way is done). 
<br>
<p>To &quot;solve&quot; this issue, the sync collective component has been created to
<br>
<p>perform a barrier every N operations. So, running with -mca coll 
<br>
basic,sync should make the problem disappear. I don't think it is really
<br>
a 
<br>
memory leak, the memory used is needed (in case of fault) and should be 
<br>
freed at the next operation going the other way (reduce, barrier, 
<br>
recv/send). 
<br>
<p>This seems to be the classical problem of MPI_Bcast benchmarks. Real 
<br>
applications usually don't suffer this kind of problems. 
<br>
<p>Sylvain 
<br>
<p>On Tue, 31 Aug 2010, ananda.mudar_at_[hidden] wrote: 
<br>
<p><span class="quotelev1">&gt; Hi 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run the attached program with the following arguments, the size
</span><br>
of MPI processes keep increasing alarmingly (I saw that the size grew
<br>
from 18M to 12G in under 10 minutes) making me suspect that there is a
<br>
major memory leak: 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -am ft-enable-cr --mca coll basic -np 2 &lt;name of the
</span><br>
executable&gt; 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I run this program without checkpoint control ie; remove &quot;-am
</span><br>
ft-enable-cr&quot;, the size of MPI processes stays constant. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also if I run this program without setting &quot;--mca coll basic&quot;, the
</span><br>
size of the MPI processes stays constant. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set the mca parameter to &quot;--mca coll basic&quot; during my debugging
</span><br>
attempts of the problem related to checkpointing the program that has
<br>
repetitive MPI_Bcast() calls. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI, I am using OpenMPI v1.4.2 with BLCR 0.8.2 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; Ananda 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ananda B Mudar, PMP 
</span><br>
<span class="quotelev1">&gt; Senior Technical Architect 
</span><br>
<span class="quotelev1">&gt; Wipro Technologies 
</span><br>
<span class="quotelev1">&gt; Ph: 972 765 8093 begin_of_the_skype_highlighting              972 765
</span><br>
8093      end_of_the_skype_highlighting 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please do not print this email unless it is absolutely necessary. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The information contained in this electronic message and any
</span><br>
attachments to this message are intended for the exclusive use of the
<br>
addressee(s) and may contain proprietary, confidential or privileged
<br>
information. If you are not the intended recipient, you should not
<br>
disseminate, distribute or copy this e-mail. Please notify the sender
<br>
immediately and destroy all copies of this message and any attachments. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WARNING: Computer viruses can be transmitted via email. The recipient
</span><br>
should check this email and any attachments for the presence of viruses.
<br>
The company accepts no liability for any damage caused by any virus
<br>
transmitted by this email. 
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; www.wipro.com 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>Ananda B Mudar, PMP
<br>
<p>Senior Technical Architect
<br>
<p>Wipro Technologies
<br>
<p>Ph: 972 765 8093
<br>
<p>ananda.mudar_at_[hidden]
<br>
<p>&nbsp;
<br>
<p><p>Please do not print this email unless it is absolutely necessary. 

The information contained in this electronic message and any attachments to this message are intended for the exclusive use of the addressee(s) and may contain proprietary, confidential or privileged information. If you are not the intended recipient, you should not disseminate, distribute or copy this e-mail. Please notify the sender immediately and destroy all copies of this message and any attachments. 

WARNING: Computer viruses can be transmitted via email. The recipient should check this email and any attachments for the presence of viruses. The company accepts no liability for any damage caused by any virus transmitted by this email. 

www.wipro.com
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8437.php">Scott Atchley: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8435.php">Chris Samuel: "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/08/8431.php">ananda.mudar_at_[hidden]: "[OMPI devel] Possible memory leak"</a>
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
