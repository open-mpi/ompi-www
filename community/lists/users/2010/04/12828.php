<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 02:15:33 2010" -->
<!-- isoreceived="20100428061533" -->
<!-- sent="Wed, 28 Apr 2010 18:15:28 +1200" -->
<!-- isosent="20100428061528" -->
<!-- name="Asad Ali" -->
<!-- email="asad06_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="g2q28d120cc1004272315w70c27019v1741c2dedd6b8716_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BD717FA.4070002_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS<br>
<strong>From:</strong> Asad Ali (<em>asad06_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 02:15:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12830.php">Fabian Hänsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12830.php">Fabian Hänsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12838.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Many many thanks to all of you for your time, sincere help, useful tips and
<br>
advices.
<br>
I have solved that problem. I just removed the gcc flag -O3 from my compile
<br>
script and the error vanished. However the speed of my code is also reduced
<br>
to 50 iterations/minute from 70 iterations/minute, still not bad.
<br>
<p>Is there any alternative to -O3 flag?
<br>
<p>I tried -O2 too but this also gives errors.
<br>
I know this is now a non-openmpi problem but I know this is the forum of
<br>
experienced programmers so I hope you people would tolerate me and would
<br>
help me.
<br>
<p>Cheers,
<br>
<p>Asad
<br>
<p><p>On Wed, Apr 28, 2010 at 4:59 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dave Love wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa &lt;gus_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Or run a serial version on the same set of machines,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled in similar ways (compiler version, opt flags, etc)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the parallel versions, and compare results.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If the results don't differ, then you can start blaming MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That wouldn't show that there's actually any OpenMPI-specific problem,
</span><br>
<span class="quotelev2">&gt;&gt; though -- the parallelism potentially introduces indeterminacy.  [I
</span><br>
<span class="quotelev2">&gt;&gt; don't mean to imply Guy thinks otherwise, or that anyone has enough
</span><br>
<span class="quotelev2">&gt;&gt; information to guess what's actually happening.]  General discussion of
</span><br>
<span class="quotelev2">&gt;&gt; numerical issues and scientific computing war stories must be way
</span><br>
<span class="quotelev2">&gt;&gt; off-topic here...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; You are right.
</span><br>
<span class="quotelev1">&gt; Actually, on a case of an ocean model that I tested this way,
</span><br>
<span class="quotelev1">&gt; exactly the opposite happened.
</span><br>
<span class="quotelev1">&gt; The optimization flags were the main cause of changes in the results,
</span><br>
<span class="quotelev1">&gt; as expected.
</span><br>
<span class="quotelev1">&gt; Whether the code was compiled and run serial or parallel with MPI
</span><br>
<span class="quotelev1">&gt; made little difference (although it might).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, IMHO, this is not totally off topic.
</span><br>
<span class="quotelev1">&gt; I don't think it hurts the list protocol to have a relatively
</span><br>
<span class="quotelev1">&gt; lax criterion for what is on or off.
</span><br>
<span class="quotelev1">&gt; After all, the original question and the following
</span><br>
<span class="quotelev1">&gt; discussion was about whether MPI (OpenMPI in particular)
</span><br>
<span class="quotelev1">&gt; can affect or not numerical accuracy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
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
<p><p><p><pre>
-- 
&quot;Statistical thinking will one day be as necessary for efficient citizenship
as the ability to read and write.&quot; - H.G. Wells
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>Previous message:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12827.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12830.php">Fabian Hänsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12830.php">Fabian Hänsel: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12838.php">Gus Correa: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
