<?
$subject_val = "[OMPI users] Eager sending on InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 12:22:23 2016" -->
<!-- isoreceived="20160516162223" -->
<!-- sent="Mon, 16 May 2016 12:21:41 -0400" -->
<!-- isosent="20160516162141" -->
<!-- name="Xiaolong Cui" -->
<!-- email="sunshine870_at_[hidden]" -->
<!-- subject="[OMPI users] Eager sending on InfiniBand" -->
<!-- id="CAOEhc2Dm7yDcipQgnVrmKpbg6ysobSND2k-0tP8DQNoGS0qWEg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Eager sending on InfiniBand<br>
<strong>From:</strong> Xiaolong Cui (<em>sunshine870_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-16 12:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using Open MPI 1.8.6. I guess my question is related to the flow
<br>
control algorithm for small messages. The question is how to avoid the
<br>
sender being blocked by the receiver when using *openib* module for small
<br>
messages and using *blocking send*. I have looked through this FAQ(
<br>
<a href="https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">https://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>) but
<br>
didn't find the answer. My understanding of &quot;eager sending protocol&quot; is
<br>
that if a message is &quot;small&quot;, it will be transported to the receiver
<br>
immediately, even if the receiver is not ready. As a result, the sender
<br>
won't be blocked until the receiver posts the receive operation.
<br>
<p>I am trying to observe such behavior with a simple program of two MPI ranks
<br>
(attached). My confusion is that while I can see the behavior with &quot;vader&quot;
<br>
module (shared memory) when running the two ranks on the same node,
<br>
[output]
<br>
<p>[0] size = 16, loop = 78, *time = 0.00007*
<br>
<p>[1] size = 16, loop = 78, *time = 3.42426*
<br>
[/output]
<br>
but I cannot see it when running them on two nodes using the &quot;openib&quot;
<br>
module.
<br>
[output]
<br>
<p>[0] size = 16, loop = 78, *time = 3.42627*
<br>
<p>[1] size = 16, loop = 78, *time = 3.42426*
<br>
[/output]
<br>
<p>So anyone knows the reason? My runtime configuration is also attached.
<br>
Thanks!
<br>
<p>Sincerely,
<br>
Michael
<br>
<p><pre>
-- 
Xiaolong Cui (Michael)
Department of Computer Science
Dietrich School of Arts &amp; Science
University of Pittsburgh
Pittsburgh, PA 15260


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29224/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29224/configuration.txt">configuration.txt</a>
</ul>
<!-- attachment="configuration.txt" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29224/send_recv.c">send_recv.c</a>
</ul>
<!-- attachment="send_recv.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29225.php">Zabiziz Zaz: "Re: [OMPI users] ORTE has lost communication"</a>
<li><strong>Previous message:</strong> <a href="29223.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun invocation only works in debug mode, hangs in &quot;normal&quot; mode."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
<li><strong>Reply:</strong> <a href="29227.php">Nathan Hjelm: "Re: [OMPI users] Eager sending on InfiniBand"</a>
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
