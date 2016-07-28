<?
$subject_val = "Re: [OMPI users] qsub error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 15 18:53:08 2013" -->
<!-- isoreceived="20130215235308" -->
<!-- sent="Fri, 15 Feb 2013 17:53:03 -0600" -->
<!-- isosent="20130215235303" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub error" -->
<!-- id="CAM=Ogijfft6WODCRr+=6neXuOcNY7DsBWcWpEyjihcptVOMVkg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAM=Ogii1OVof5rw=-CQaQpN5rGOkFES7Vd5TzR-6J3AfDAOBeg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] qsub error<br>
<strong>From:</strong> Erik Nelson (<em>nelsonerikd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-15 18:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="21405.php">Erik Nelson: "[OMPI users] qsub error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>Reply:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I may have deleted any responses to this message. In either case, we appear
<br>
to have fixed the problem
<br>
by installing a more current version of openmpi.
<br>
<p><p>On Thu, Feb 14, 2013 at 2:27 PM, Erik Nelson &lt;nelsonerikd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm encountering an error using qsub that none of us can figure out. MPI
</span><br>
<span class="quotelev1">&gt; C++ programs seem to
</span><br>
<span class="quotelev1">&gt; run fine when executed from the command line, but for some reason when I
</span><br>
<span class="quotelev1">&gt; submit them through
</span><br>
<span class="quotelev1">&gt; the queue I get a strange error message ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [compute-3-12.local][[58672,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; connect() to 2002:8170:6c2f:b:21d:9ff:fefd:7d94 failed: Permission denied
</span><br>
<span class="quotelev1">&gt; (13)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the compute node 3-12 doesn't matter (the error can generate from any of
</span><br>
<span class="quotelev1">&gt; the nodes, and I'm
</span><br>
<span class="quotelev1">&gt; guessing that 3-12 is the parent node here).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To check if there was some problem with my own code, I created a simple
</span><br>
<span class="quotelev1">&gt; 'hello world' program
</span><br>
<span class="quotelev1">&gt; (see attached files).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, the program runs fine from the command line but fails in qsub with
</span><br>
<span class="quotelev1">&gt; the same sort of error
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have included (i) the code (ii) the job script for qsub, and (iii) the
</span><br>
<span class="quotelev1">&gt; &quot;.o&quot; file from qsub for the
</span><br>
<span class="quotelev1">&gt; &quot;hello world&quot; program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These don't look like MPI errors, but rather some conflict with, maybe,
</span><br>
<span class="quotelev1">&gt; secure communication
</span><br>
<span class="quotelev1">&gt; accross nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something simple I can do to fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Nelson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev1">&gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev1">&gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; p : 214 645 5981
</span><br>
<span class="quotelev1">&gt; f : 214 645 5948
</span><br>
<p><p><p><p><pre>
-- 
Erik Nelson
Howard Hughes Medical Institute
6001 Forest Park Blvd., Room ND10.124
Dallas, Texas 75235-9050
p : 214 645 5981
f : 214 645 5948
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21415.php">Maxime Boissonneault: "Re: [OMPI users] Very high latency with openib btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="21405.php">Erik Nelson: "[OMPI users] qsub error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>Reply:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
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
