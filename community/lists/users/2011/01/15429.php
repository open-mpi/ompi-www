<?
$subject_val = "Re: [OMPI users] Argument parsing issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 04:32:14 2011" -->
<!-- isoreceived="20110127093214" -->
<!-- sent="Thu, 27 Jan 2011 10:32:09 +0100" -->
<!-- isosent="20110127093209" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Argument parsing issue" -->
<!-- id="AANLkTi=yWO2rOXUD3dEXrgO76DT+F3tLajc4FGjVdvie_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D225A66C-FB21-41C9-BB91-16C98985D50A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Argument parsing issue<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-27 04:32:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm,
<br>
<p>doing as you suggest the output is:
<br>
<p>a
<br>
b
<br>
&quot;c
<br>
d&quot;
<br>
<p>and not:
<br>
<p>a
<br>
b
<br>
&quot;c d&quot;
<br>
<p>2011/1/27 Reuti &lt;reuti_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 27.01.2011 um 09:48 schrieb Gabriele Fatigati:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'm using OpenMPI 1.4.3 and Intel compiler. My simple application require
</span><br>
<span class="quotelev1">&gt; 3 line arguments to work. If i use the follow command:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It works well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Debugging my application with Totalview:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 --debug  ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Argument parsing doesn't work well. Arguments passed are:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a b c d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this double expansion can happen with certain wrappers (also with queuing
</span><br>
<span class="quotelev1">&gt; system this happens sometimes). What you can try is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --debug ./a.out a b &quot;'c d'&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 2 --debug ./a.out a b &quot;\&quot;c d\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and not
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a b &quot;c d&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think there is an issue in parsing the arguments invoking Totalview. Is
</span><br>
<span class="quotelev1">&gt; this a bug into mpirun or i need to do it in other way?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in forward.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15429/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Previous message:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15428.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15430.php">Reuti: "Re: [OMPI users] Argument parsing issue"</a>
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
