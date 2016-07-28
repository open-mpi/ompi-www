<?
$subject_val = "Re: [OMPI users] Problem with running openMPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 02:04:40 2009" -->
<!-- isoreceived="20090422060440" -->
<!-- sent="Wed, 22 Apr 2009 11:34:36 +0530" -->
<!-- isosent="20090422060436" -->
<!-- name="Ankush Kaul" -->
<!-- email="ankush.rkaul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with running openMPI program" -->
<!-- id="a599d60e0904212304p34389434h59151c27204484dd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49EE0D2C.3010904_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ankush Kaul (<em>ankush.rkaul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 02:04:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are facing another problem, we were tryin to install different
<br>
benchmarking packages
<br>
<p>now whenever we try to run *mpirun* command (which was working perfectly
<br>
before) we get this error:
<br>
*usr/local/bin/mpdroot: open failed for root's mpd conf filempdtrace
<br>
(__init__ 1190): forked process failed; status=255*
<br>
<p>whats the problem here?
<br>
<p><p><p>On Tue, Apr 21, 2009 at 11:45 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ankush
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ankush Kaul wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Eugene
</span><br>
<span class="quotelev2">&gt;&gt; they are ok but we wanted something better, which would more clearly show
</span><br>
<span class="quotelev2">&gt;&gt; de diff in using a single pc and the cluster.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Prakash
</span><br>
<span class="quotelev2">&gt;&gt; i had prob with running de programs as they were compiling using mpcc n
</span><br>
<span class="quotelev2">&gt;&gt; not mpicc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @gus
</span><br>
<span class="quotelev2">&gt;&gt; we are tryin 2 figure out de hpl config, its quite complicated,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I sent you some sketchy instructions to build HPL,
</span><br>
<span class="quotelev1">&gt; on my last message to this thread.
</span><br>
<span class="quotelev1">&gt; I built HPL and run it here yesterday that way.
</span><br>
<span class="quotelev1">&gt; Did you try my suggestions?
</span><br>
<span class="quotelev1">&gt; Where did you get stuck?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; also de locate command lists lots of confusing results.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I would say the list is just long, not really confusing.
</span><br>
<span class="quotelev1">&gt; You can  find what you need if you want.
</span><br>
<span class="quotelev1">&gt; Pipe the output of locate through &quot;more&quot;, and search carefully.
</span><br>
<span class="quotelev1">&gt; If you are talking about BLAS try &quot;locate libblas.a&quot; and
</span><br>
<span class="quotelev1">&gt; &quot;locate libgoto.a&quot;.
</span><br>
<span class="quotelev1">&gt; Those are the libraries you need, and if they are not there
</span><br>
<span class="quotelev1">&gt; you need to install one of them.
</span><br>
<span class="quotelev1">&gt; Read my previous email for details.
</span><br>
<span class="quotelev1">&gt; I hope it will help you get HPL working, if you are interested on HPL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  @jeff
</span><br>
<span class="quotelev2">&gt;&gt; i think u are correct we may have installed openmpi without VT support,
</span><br>
<span class="quotelev2">&gt;&gt; but is there anythin we can do now???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One more thing I found this program but dont know how to run it :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cis.udel.edu/~pollock/367/manual/node35.html">http://www.cis.udel.edu/~pollock/367/manual/node35.html</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks 2 all u guys 4 putting in so much efforts to help us out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9017.php">Terry Frankcombe: "Re: [OMPI users] 100% CPU doing nothing!?"</a>
<li><strong>In reply to:</strong> <a href="9013.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9019.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Reply:</strong> <a href="9027.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
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
