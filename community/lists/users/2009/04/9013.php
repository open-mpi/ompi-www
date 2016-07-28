<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 21 14:15:18 2009" -->
<!-- isoreceived="20090421181518" -->
<!-- sent="Tue, 21 Apr 2009 14:15:08 -0400" -->
<!-- isosent="20090421181508" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="49EE0D2C.3010904_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="a599d60e0904210804u7da78aa3y137ef3d381711dc7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with running openMPI program<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-21 14:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ankush
<br>
<p>Ankush Kaul wrote:
<br>
<span class="quotelev1">&gt; @Eugene
</span><br>
<span class="quotelev1">&gt; they are ok but we wanted something better, which would more clearly 
</span><br>
<span class="quotelev1">&gt; show de diff in using a single pc and the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Prakash
</span><br>
<span class="quotelev1">&gt; i had prob with running de programs as they were compiling using mpcc n 
</span><br>
<span class="quotelev1">&gt; not mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @gus
</span><br>
<span class="quotelev1">&gt; we are tryin 2 figure out de hpl config, its quite complicated, 
</span><br>
<p>I sent you some sketchy instructions to build HPL,
<br>
on my last message to this thread.
<br>
I built HPL and run it here yesterday that way.
<br>
Did you try my suggestions?
<br>
Where did you get stuck?
<br>
<p><span class="quotelev1">&gt; also de 
</span><br>
<span class="quotelev1">&gt; locate command lists lots of confusing results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I would say the list is just long, not really confusing.
<br>
You can  find what you need if you want.
<br>
Pipe the output of locate through &quot;more&quot;, and search carefully.
<br>
If you are talking about BLAS try &quot;locate libblas.a&quot; and
<br>
&quot;locate libgoto.a&quot;.
<br>
Those are the libraries you need, and if they are not there
<br>
you need to install one of them.
<br>
Read my previous email for details.
<br>
I hope it will help you get HPL working, if you are interested on HPL.
<br>
<p>I hope this helps.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><span class="quotelev1">&gt; @jeff
</span><br>
<span class="quotelev1">&gt; i think u are correct we may have installed openmpi without VT support, 
</span><br>
<span class="quotelev1">&gt; but is there anythin we can do now???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One more thing I found this program but dont know how to run it : 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cis.udel.edu/~pollock/367/manual/node35.html">http://www.cis.udel.edu/~pollock/367/manual/node35.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 2 all u guys 4 putting in so much efforts to help us out.
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
<li><strong>Next message:</strong> <a href="9014.php">George Bosilca: "Re: [OMPI users] COMM_ACCEPT/COMM_CONNECT: what BTL will the	connected processes use?"</a>
<li><strong>Previous message:</strong> <a href="9012.php">Jeff Squyres: "Re: [OMPI users] Why do I only see 1 process running? Please help!"</a>
<li><strong>In reply to:</strong> <a href="9006.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9018.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
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
