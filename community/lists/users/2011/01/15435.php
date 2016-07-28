<?
$subject_val = "Re: [OMPI users] Argument parsing issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 27 09:06:42 2011" -->
<!-- isoreceived="20110127140642" -->
<!-- sent="Thu, 27 Jan 2011 15:06:35 +0100" -->
<!-- isosent="20110127140635" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Argument parsing issue" -->
<!-- id="AANLkTimwGOSfv5fu=mzsRDrbRDeS_izxQ4Me4zBb8VrL_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="03F5387F-8AFA-4970-A5E3-83D8841FFE7C_at_cisco.com" -->
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
<strong>Date:</strong> 2011-01-27 09:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15434.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15434.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15442.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15442.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok Jeff,
<br>
<p>explain me where is the code and i'll try to fix it.
<br>
<p>Thanks a lot.
<br>
<p>2011/1/27 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; I found the code in OMPI that is dropping the quoting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: it *is* OMPI that is dropping your quoting / splitting &quot;foo
</span><br>
<span class="quotelev1">&gt; bar&quot; into 2 arguments when re-execing totalview.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me see if I can gin up a patch...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 27, 2011, at 7:42 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem is that mpirun regenerates itself to exec a command of
</span><br>
<span class="quotelev1">&gt; &quot;totalview mpirun ....&quot;, and the quotes are lost in the process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just start your debugged job with &quot;totalview mpirun ...&quot; and it should
</span><br>
<span class="quotelev1">&gt; work fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 27, 2011, at 3:00 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem is how mpirun scan input parameters when Totalview is
</span><br>
<span class="quotelev1">&gt; invoked.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; There is some wrong behaviour in the middle :(
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2011/1/27 Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 27.01.2011 um 10:32 schrieb Gabriele Fatigati:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Mm,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; doing as you suggest the output is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; b
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &quot;c
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; d&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Whoa - your applications without the debugger is running fine - so I
</span><br>
<span class="quotelev1">&gt; don't think that it's a problem with `mpirun` per se.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The same happens with single quotes inside double quotes?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; and not:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; b
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; &quot;c d&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 2011/1/27 Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Am 27.01.2011 um 09:48 schrieb Gabriele Fatigati:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Dear OpenMPI users and developers,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; i'm using OpenMPI 1.4.3 and Intel compiler. My simple application
</span><br>
<span class="quotelev1">&gt; require 3 line arguments to work. If i use the follow command:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; mpirun -np 2 ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; It works well.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Debugging my application with Totalview:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; mpirun -np 2 --debug  ./a.out a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Argument parsing doesn't work well. Arguments passed are:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; a b c d
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; this double expansion can happen with certain wrappers (also with
</span><br>
<span class="quotelev1">&gt; queuing system this happens sometimes). What you can try is:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; $ mpirun -np 2 --debug ./a.out a b &quot;'c d'&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; $ mpirun -np 2 --debug ./a.out a b &quot;\&quot;c d\&quot;&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; and not
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; a b &quot;c d&quot;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; I think there is an issue in parsing the arguments invoking
</span><br>
<span class="quotelev1">&gt; Totalview. Is this a bug into mpirun or i need to do it in other way?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Thanks in forward.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Parallel programmer
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Supercomputing Group
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15436.php">Kirk Stako: "[OMPI users] allow job to survive process death"</a>
<li><strong>Previous message:</strong> <a href="15434.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>In reply to:</strong> <a href="15434.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15442.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
<li><strong>Reply:</strong> <a href="15442.php">Jeff Squyres: "Re: [OMPI users] Argument parsing issue"</a>
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
