<?
$subject_val = "Re: [OMPI users] segmentation fault";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 18:45:44 2010" -->
<!-- isoreceived="20101215234544" -->
<!-- sent="Wed, 15 Dec 2010 18:45:33 -0500" -->
<!-- isosent="20101215234533" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault" -->
<!-- id="4D09531D.3020306_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F4823DB-7CBA-4000-9244-906BDF06C97B_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-12-15 18:45:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe a CFD jargon?
<br>
Perhaps the number (not size) of cells in a mesh/grid being handled
<br>
by each core/cpu?
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I have no idea what you mean by &quot;cell sizes per core&quot;. Certainly not any 
</span><br>
<span class="quotelev1">&gt; terminology within OMPI...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2010, at 3:47 PM, Vaz, Guilherme wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem with openmpi1.3, ifort+mkl v11.1 in Ubuntu10.04 
</span><br>
<span class="quotelev2">&gt;&gt; systems (32 or 64bit). My code worked in Ubuntu8.04 and works in 
</span><br>
<span class="quotelev2">&gt;&gt; RedHat based systems, with slightly different version changes on mkl 
</span><br>
<span class="quotelev2">&gt;&gt; and ifort. There were no changes in the source code.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that the application works for small cell sizes per 
</span><br>
<span class="quotelev2">&gt;&gt; core, but not for large cell sizes per core. And it always works for 1 
</span><br>
<span class="quotelev2">&gt;&gt; core. 
</span><br>
<span class="quotelev2">&gt;&gt; Example: a grid with 1.2Million cells does not work with mpiexec -n 4 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;my_app&gt; but it works with mpiexec -n 32 &lt;my_app&gt;. It seems that there 
</span><br>
<span class="quotelev2">&gt;&gt; is a maximum of cell/core. And it works with &lt;my_app&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a stack size (or any memory problem)? Should I set the ulimit 
</span><br>
<span class="quotelev2">&gt;&gt; -s unlimited not only on my bashrc but also in the ssh environment 
</span><br>
<span class="quotelev2">&gt;&gt; (and how)? Or is something else?
</span><br>
<span class="quotelev2">&gt;&gt; Any clues/tips?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gui
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;imagec393d1.JPG&gt;&lt;image4c4685.JPG&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dr. ir. Guilherme Vaz
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CFD Researcher
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt; Research &amp; Development	
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *MARIN*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	2, Haagsteeg	
</span><br>
<span class="quotelev2">&gt;&gt; E G.Vaz_at_[hidden] &lt;mailto:G.Vaz_at_[hidden]&gt;	P.O. Box 28	T +31 317 49 39 11
</span><br>
<span class="quotelev2">&gt;&gt; 	6700 AA Wageningen	F +31 317 49 32 45
</span><br>
<span class="quotelev2">&gt;&gt; T  +31 317 49 33 25	The Netherlands	I  www.marin.nl &lt;<a href="http://www.marin.nl">http://www.marin.nl</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15153.php">Jeff Squyres: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15151.php">Gus Correa: "Re: [OMPI users] segmentation fault"</a>
<li><strong>In reply to:</strong> <a href="15150.php">Ralph Castain: "Re: [OMPI users] segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
<li><strong>Reply:</strong> <a href="15164.php">Vaz, Guilherme: "Re: [OMPI users] segmentation fault"</a>
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
