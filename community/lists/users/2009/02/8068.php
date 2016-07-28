<?
$subject_val = "Re: [OMPI users] MPI_Test bug?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 19:04:40 2009" -->
<!-- isoreceived="20090214000440" -->
<!-- sent="Fri, 13 Feb 2009 14:16:33 -0800" -->
<!-- isosent="20090213221633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test bug?" -->
<!-- id="5E49665E-03AF-4E27-9F9D-E170399054E6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0902050237q5fde6f1aidd0ddb741e27e13e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Test bug?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 17:16:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8069.php">Francesco Pietra: "[OMPI users] support for gamess us?"</a>
<li><strong>Previous message:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; I was fully occupied by MPI Forum  
<br>
activities over the past week or so.
<br>
<p>It is quite possible that the reason for the multiple tests is OMPI's  
<br>
lazy wireup scheme.  Making an openfabrics connection likely requires  
<br>
multiple passes down through OMPI's progression engine (there's some  
<br>
back-n-forth of information exchange to establish the openfabrics  
<br>
connection before MPI traffic will flow).
<br>
<p>If you do some warmup sends before your test, the connection should be  
<br>
fully established and then eager messages should flow like you expect;  
<br>
i.e., if you do a short send, an MPI_Test right after it should mark  
<br>
its completion, etc.
<br>
<p>But just to be clear -- the specific behaviors of this kind of stuff  
<br>
is very MPI-implementation specific.  You should not code your  
<br>
application to rely on MPI_Test completing the first time for &quot;short&quot;  
<br>
messages because all kinds of things can change in an MPI's  
<br>
progression engine, etc.
<br>
<p><p>On Feb 5, 2009, at 2:37 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI developer,
</span><br>
<span class="quotelev1">&gt; i have found a very strange behaviour of MPI_Test. I'm using OpenMPI
</span><br>
<span class="quotelev1">&gt; 1.2 over Infiniband interconnection net.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to implement net check with a series of MPI_Irecv and
</span><br>
<span class="quotelev1">&gt; MPI_Send  beetwen processors, testing with MPI_Wait the end of Irecv.
</span><br>
<span class="quotelev1">&gt; For strange reasons, i've noted that, when i launch the test in one
</span><br>
<span class="quotelev1">&gt; node, it works well. If i launch over 2 or more procs over different
</span><br>
<span class="quotelev1">&gt; nodes, MPI_Test fails many time before to tell that the IRecv is
</span><br>
<span class="quotelev1">&gt; finished.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried that it fails also after one minutes, with very small
</span><br>
<span class="quotelev1">&gt; buffer( less than eager limit). It's impossible that the communication
</span><br>
<span class="quotelev1">&gt; is pending after one minutes, with 10 integer sended. To solve this,
</span><br>
<span class="quotelev1">&gt; I need to implement a loop over MPI_Test, and only after 3 or 4
</span><br>
<span class="quotelev1">&gt; MPI_Test it returns that IRecv finished successful. Is it possible
</span><br>
<span class="quotelev1">&gt; that MPI_Test needs to call many time also if the communication is
</span><br>
<span class="quotelev1">&gt; already finished?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In attach you have my simple C test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt; &lt;mpi_test5.c&gt;_______________________________________________
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8069.php">Francesco Pietra: "[OMPI users] support for gamess us?"</a>
<li><strong>Previous message:</strong> <a href="8067.php">Gary Draving: "Re: [OMPI users] /usr/bin/ld: skipping incompatible /usr/local/lib/libgcc_s.so when searching for -lgcc_s"</a>
<li><strong>In reply to:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
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
