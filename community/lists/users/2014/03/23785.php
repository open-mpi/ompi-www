<?
$subject_val = "[OMPI users] SIGSEV when running OMPI Java binding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 10 00:05:32 2014" -->
<!-- isoreceived="20140310040532" -->
<!-- sent="Mon, 10 Mar 2014 00:05:31 -0400" -->
<!-- isosent="20140310040531" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEV when running OMPI Java binding" -->
<!-- id="CA+ssbKWXFvCjJBWL0L+XsVJaRHOB2Y1GzjOXfw0mnWKJ6HKmdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEV when running OMPI Java binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-10 00:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23786.php">tmishima_at_[hidden]: "[OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23784.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have 8 nodes each with 2 quad core sockets. Also, the nodes have IB
<br>
connectivity. I am trying to run OMPI Java binding in OMPI trunk revision
<br>
30301 with 8 procs per node totaling 64 procs. This gives a SIGSEV error as
<br>
below.
<br>
<p>I wonder if you have any suggestion to resolve this?
<br>
<p>Thank you,
<br>
Saliya
<br>
<p># A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0x000000313867b75b, pid=12229, tid=47864973515072
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b118) (build
<br>
1.8.0-ea-b118)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b60 mixed mode
<br>
linux-amd64 compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.6+0x7b75b]  memcpy+0x15b
<br>
<p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23786.php">tmishima_at_[hidden]: "[OMPI users] incorrect verbose output in bind_downwards"</a>
<li><strong>Previous message:</strong> <a href="23784.php">Gus Correa: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>Reply:</strong> <a href="23787.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
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
