<?
$subject_val = "Re: [OMPI users] qsub error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 07:50:21 2013" -->
<!-- isoreceived="20130216125021" -->
<!-- sent="Sat, 16 Feb 2013 12:50:16 +0000" -->
<!-- isosent="20130216125016" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub error" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F436A8_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAM=Ogijfft6WODCRr+=6neXuOcNY7DsBWcWpEyjihcptVOMVkg_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 07:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>In reply to:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Reply:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad you got it working!
<br>
<p>On Feb 15, 2013, at 6:53 PM, Erik Nelson &lt;nelsonerikd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I may have deleted any responses to this message. In either case, we appear to have fixed the problem 
</span><br>
<span class="quotelev1">&gt; by installing a more current version of openmpi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 14, 2013 at 2:27 PM, Erik Nelson &lt;nelsonerikd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm encountering an error using qsub that none of us can figure out. MPI C++ programs seem to 
</span><br>
<span class="quotelev1">&gt; run fine when executed from the command line, but for some reason when I submit them through 
</span><br>
<span class="quotelev1">&gt; the queue I get a strange error message ..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-3-12.local][[58672,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] 
</span><br>
<span class="quotelev1">&gt; connect() to 2002:8170:6c2f:b:21d:9ff:fefd:7d94 failed: Permission denied (13)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the compute node 3-12 doesn't matter (the error can generate from any of the nodes, and I'm 
</span><br>
<span class="quotelev1">&gt; guessing that 3-12 is the parent node here). 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To check if there was some problem with my own code, I created a simple 'hello world' program 
</span><br>
<span class="quotelev1">&gt; (see attached files).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, the program runs fine from the command line but fails in qsub with the same sort of error 
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have included (i) the code (ii) the job script for qsub, and (iii) the &quot;.o&quot; file from qsub for the 
</span><br>
<span class="quotelev1">&gt; &quot;hello world&quot; program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These don't look like MPI errors, but rather some conflict with, maybe, secure communication
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>In reply to:</strong> <a href="21416.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Reply:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
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
