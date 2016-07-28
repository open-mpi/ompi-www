<?
$subject_val = "Re: [OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 18:23:43 2010" -->
<!-- isoreceived="20101215232343" -->
<!-- sent="Wed, 15 Dec 2010 16:23:32 -0700" -->
<!-- isosent="20101215232332" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault" -->
<!-- id="7F4823DB-7CBA-4000-9244-906BDF06C97B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="528EE04830974E42B235D874D8EEAECB0552E1_at_MAR160N1.marin.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 18:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no idea what you mean by &quot;cell sizes per core&quot;. Certainly not any terminology within OMPI...
<br>
<p><p>On Dec 15, 2010, at 3:47 PM, Vaz, Guilherme wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04 systems (32 or 64bit). My code worked in Ubuntu8.04 and works in RedHat based systems, with slightly different version changes on mkl and ifort. There were no changes in the source code.
</span><br>
<span class="quotelev1">&gt; The problem is that the application works for small cell sizes per core, but not for large cell sizes per core. And it always works for 1 core. 
</span><br>
<span class="quotelev1">&gt; Example: a grid with 1.2Million cells does not work with mpiexec -n 4 &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there is a maximum of cell/core. And it works with &lt;my_app&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a stack size (or any memory problem)? Should I set the ulimit -s unlimited not only on my bashrc but also in the ssh environment (and how)? Or is something else?
</span><br>
<span class="quotelev1">&gt; Any clues/tips?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gui
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;imagec393d1.JPG&gt;&lt;image4c4685.JPG&gt;
</span><br>
<span class="quotelev1">&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CFD Researcher
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Research &amp; Development	
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MARIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2, Haagsteeg	
</span><br>
<span class="quotelev1">&gt; E G.Vaz_at_[hidden]	P.O. Box 28	T +31 317 49 39 11
</span><br>
<span class="quotelev1">&gt; 6700 AA Wageningen	F +31 317 49 32 45
</span><br>
<span class="quotelev1">&gt; T  +31 317 49 33 25	The Netherlands	I  www.marin.nl
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
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
