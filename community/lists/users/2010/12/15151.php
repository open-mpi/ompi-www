<?
$subject_val = "Re: [OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 18:42:11 2010" -->
<!-- isoreceived="20101215234211" -->
<!-- sent="Wed, 15 Dec 2010 18:42:00 -0500" -->
<!-- isosent="20101215234200" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault" -->
<!-- id="4D095248.3030706_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 18:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vaz, Guilherme wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04 systems 
</span><br>
<span class="quotelev1">&gt; (32 or 64bit). My code worked in Ubuntu8.04 and works in RedHat based 
</span><br>
<span class="quotelev1">&gt; systems, with slightly different version changes on mkl and ifort. There 
</span><br>
<span class="quotelev1">&gt; were no changes in the source code.
</span><br>
<span class="quotelev1">&gt; The problem is that the application works for small cell sizes per core, 
</span><br>
<span class="quotelev1">&gt; but not for large cell sizes per core. And it always works for 1 core. 
</span><br>
<span class="quotelev1">&gt; Example: a grid with 1.2Million cells does not work with mpiexec -n 4 
</span><br>
<span class="quotelev1">&gt; &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there 
</span><br>
<span class="quotelev1">&gt; is a maximum of cell/core. And it works with &lt;my_app&gt;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a stack size (or any memory problem)? Should I set the ulimit -s 
</span><br>
<span class="quotelev1">&gt; unlimited not only on my bashrc but also in the ssh environment (and 
</span><br>
<span class="quotelev1">&gt; how)? Or is something else?
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
<span class="quotelev1">&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev1">&gt; CFD Researcher
</span><br>
<span class="quotelev1">&gt; Research &amp; Development 	
</span><br>
<span class="quotelev1">&gt; *MARIN*
</span><br>
<span class="quotelev1">&gt; 	2, Haagsteeg 	
</span><br>
<span class="quotelev1">&gt; E G.Vaz_at_[hidden] &lt;mailto:G.Vaz_at_[hidden]&gt; 	P.O. Box 28 	T +31 317 49 39 11
</span><br>
<span class="quotelev1">&gt; 	6700 AA Wageningen 	F +31 317 49 32 45
</span><br>
<span class="quotelev1">&gt; T  +31 317 49 33 25 	The Netherlands 	I  www.marin.nl &lt;<a href="http://www.marin.nl">http://www.marin.nl</a>&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p>Hi Guilherme
<br>
<p>Can you estimate how much memory each run configuration requires,
<br>
and if the problem fits your computer's RAM?
<br>
(with some slack for OS, MPI, etc)
<br>
To check directly your guess of getting out of memory,
<br>
and if the program starts swapping,
<br>
login to the compute node or nodes and use &quot;top&quot;.
<br>
<p>Hard to tell the cause of segfault with this information only.
<br>
It could come from a limited stack, it could be from small RAM when you
<br>
run in one computer only, it could be a bug in the code.
<br>
<p>On RedHat/Fedora/CentOs
<br>
you can set the stack to unlimited on /etc/security/limits.conf,
<br>
maybe the same in Ubuntu.
<br>
'man limits.conf' may help.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15152.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
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
