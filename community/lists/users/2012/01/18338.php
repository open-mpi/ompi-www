<?
$subject_val = "Re: [OMPI users] MPI_AllGather null terminator character";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 10:05:38 2012" -->
<!-- isoreceived="20120131150538" -->
<!-- sent="Tue, 31 Jan 2012 16:05:32 +0100" -->
<!-- isosent="20120131150532" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_AllGather null terminator character" -->
<!-- id="CAJNPZUV+31eEoioHPtAjVa_+KKYanhpZaDmwUCtF5ReN_NJUPw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="327DFA19-BFF5-4781-A006-694E07F1160B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_AllGather null terminator character<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 10:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok Jeff, thanks very much for your support!
<br>
<p>Regards,
<br>
<p>2012/1/31 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On Jan 31, 2012, at 3:59 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have very interesting news. I recompiled OpenMPI 1.4.4 enabling the
</span><br>
<span class="quotelev1">&gt; memchecker.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now the warning on strcmp is disappeared also without buffers
</span><br>
<span class="quotelev1">&gt; initializations using memset!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So the warning is a false positive? My simple code is safe?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you were using IB as the network transport, yes, it's a false positive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With memchecker enabled, Open MPI will *always* tell Valgrind that the
</span><br>
<span class="quotelev1">&gt; entire contents of the buffer are defined, even when the data is coming
</span><br>
<span class="quotelev1">&gt; from an OS-bypass transport (such as an OpenFabrics-based device, like IB).
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
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18337.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="18332.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
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
