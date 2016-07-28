<?
$subject_val = "Re: [OMPI users] Fault Tolerant with openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 15:21:21 2011" -->
<!-- isoreceived="20110923192121" -->
<!-- sent="Fri, 23 Sep 2011 16:21:17 -0300" -->
<!-- isosent="20110923192117" -->
<!-- name="Guilherme V" -->
<!-- email="list.vilela_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fault Tolerant with openib" -->
<!-- id="CAB-q1Ys0WwF+FzWEoU28iVsiUg95ktwFsShg60dR3piVyriODQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAB-q1Yun+YnPiRo0V9RFFLGFB+myMnvXQXdisYE-HZ+H1AnkMQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fault Tolerant with openib<br>
<strong>From:</strong> Guilherme V (<em>list.vilela_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 15:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17414.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using version 1.4.3 and I forgot to tell that I have made a change in
<br>
the orterun.c line 792:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (ORTE_JOB_STATE_TERMINATED != exit_state) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0); /* patch*/
<br>
<p>Regards
<br>
<p><p><span class="quotelev1">&gt; What version of OMPI are you using? The job should terminate in either
</span><br>
case - what did you do to keep it running after node failure with tcp?
<br>
<p><span class="quotelev1">&gt;On Sep 23, 2011, at 12:34 PM, Guilherme V wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I want to know if anybody is having problems with fault tolerant job
</span><br>
using infiniband. When I run my job with tcp if anything happens with one
<br>
node, my job keeps running, but if I change my job to use infiniband if
<br>
anything happens with the infiniband (i.e cable problems) my job fails.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anybody knows if there is something different that need to be done when
</span><br>
using openib instead tcp?
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bellow a example of the message I'm receiving from the mpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Guilherme
</span><br>
<p><p>&lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17417/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17418.php">Josh Hursey: "Re: [OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>Previous message:</strong> <a href="17416.php">Dave Schulz: "[OMPI users] ompi-checkpoint problem on shared storage"</a>
<li><strong>In reply to:</strong> <a href="17414.php">Guilherme V: "[OMPI users] Fault Tolerant with openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
<li><strong>Reply:</strong> <a href="17419.php">Ralph Castain: "Re: [OMPI users] Fault Tolerant with openib"</a>
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
