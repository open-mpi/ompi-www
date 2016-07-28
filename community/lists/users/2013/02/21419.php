<?
$subject_val = "Re: [OMPI users] qsub error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 12:48:06 2013" -->
<!-- isoreceived="20130216174806" -->
<!-- sent="Sat, 16 Feb 2013 11:48:01 -0600" -->
<!-- isosent="20130216174801" -->
<!-- name="Erik Nelson" -->
<!-- email="nelsonerikd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] qsub error" -->
<!-- id="CAM=OgigUueZ=tnT-9hjgav9y=_NL_in5JjHeSGU96XQMDuV4mA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC43F436A8_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-02-16 12:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<li><strong>Previous message:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>In reply to:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
yep, runs well now.
<br>
<p>On Sat, Feb 16, 2013 at 6:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Glad you got it working!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2013, at 6:53 PM, Erik Nelson &lt;nelsonerikd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I may have deleted any responses to this message. In either case, we
</span><br>
<span class="quotelev1">&gt; appear to have fixed the problem
</span><br>
<span class="quotelev2">&gt; &gt; by installing a more current version of openmpi.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Feb 14, 2013 at 2:27 PM, Erik Nelson &lt;nelsonerikd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm encountering an error using qsub that none of us can figure out. MPI
</span><br>
<span class="quotelev1">&gt; C++ programs seem to
</span><br>
<span class="quotelev2">&gt; &gt; run fine when executed from the command line, but for some reason when I
</span><br>
<span class="quotelev1">&gt; submit them through
</span><br>
<span class="quotelev2">&gt; &gt; the queue I get a strange error message ..
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; [compute-3-12.local][[58672,1],0][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect]
</span><br>
<span class="quotelev2">&gt; &gt; connect() to 2002:8170:6c2f:b:21d:9ff:fefd:7d94 failed: Permission
</span><br>
<span class="quotelev1">&gt; denied (13)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the compute node 3-12 doesn't matter (the error can generate from any of
</span><br>
<span class="quotelev1">&gt; the nodes, and I'm
</span><br>
<span class="quotelev2">&gt; &gt; guessing that 3-12 is the parent node here).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To check if there was some problem with my own code, I created a simple
</span><br>
<span class="quotelev1">&gt; 'hello world' program
</span><br>
<span class="quotelev2">&gt; &gt; (see attached files).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again, the program runs fine from the command line but fails in qsub
</span><br>
<span class="quotelev1">&gt; with the same sort of error
</span><br>
<span class="quotelev2">&gt; &gt; message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have included (i) the code (ii) the job script for qsub, and (iii) the
</span><br>
<span class="quotelev1">&gt; &quot;.o&quot; file from qsub for the
</span><br>
<span class="quotelev2">&gt; &gt; &quot;hello world&quot; program.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; These don't look like MPI errors, but rather some conflict with, maybe,
</span><br>
<span class="quotelev1">&gt; secure communication
</span><br>
<span class="quotelev2">&gt; &gt; across nodes.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there something simple I can do to fix this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, Erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Nelson
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard Hughes Medical Institute
</span><br>
<span class="quotelev2">&gt; &gt; 6001 Forest Park Blvd., Room ND10.124
</span><br>
<span class="quotelev2">&gt; &gt; Dallas, Texas 75235-9050
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; p : 214 645 5981
</span><br>
<span class="quotelev2">&gt; &gt; f : 214 645 5948
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
Erik Nelson
Howard Hughes Medical Institute
6001 Forest Park Blvd., Room ND10.124
Dallas, Texas 75235-9050
p : 214 645 5981
f : 214 645 5948
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21420.php">Mads Boye: "Re: [OMPI users] Compiling OpenMPI 1.6.3 for Intel Compiler	10.1	error"</a>
<li><strong>Previous message:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>In reply to:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
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
