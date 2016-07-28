<?
$subject_val = "Re: [OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 09:47:07 2009" -->
<!-- isoreceived="20090803134707" -->
<!-- sent="Mon, 3 Aug 2009 07:47:02 -0600" -->
<!-- isosent="20090803134702" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="71d2d8cc0908030647i3d78c003hbf64bd4190045343_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c19fcadc0908030629q342d034aib6b2a16e326e1cdd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two remote machines - asymmetric behavior<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 09:47:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are both correct. If you simply type &quot;mpirun pvserver&quot;, then we will
<br>
execute pvserver on whatever machine is local.
<br>
<p>However, if you type &quot;mpirun -n 1 -H host1 pvserver&quot;, then we will start
<br>
pvserver on the specified host. Note that mpirun will still be executing on
<br>
your local machine - but pvserver will be running on the specified host.
<br>
<p>Ralph
<br>
<p><p>On Mon, Aug 3, 2009 at 7:29 AM, David Doria
<br>
&lt;daviddoria+openmpi_at_[hidden]&lt;daviddoria%2Bopenmpi_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm a newbie, so forgive me if I ask something stupid:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; why are You running ssh command before mpirun command? I'm interested in
</span><br>
<span class="quotelev2">&gt;&gt; setting up a paraview server on a LAN to pos-tprocess OpenFOAM
</span><br>
<span class="quotelev2">&gt;&gt; simulation data.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just a total newbish comment: doesn't the mpirun in fact call for the
</span><br>
<span class="quotelev2">&gt;&gt; ssh anyway? And if pvserver is to be run on multiple machines and is
</span><br>
<span class="quotelev2">&gt;&gt; programmed in Open MPI shouldn't
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np procNumber -H host1,host2,host3 pvserver
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; be enough to get it going, as well as any other parallel program? Again,
</span><br>
<span class="quotelev2">&gt;&gt; please excuse my newbiness.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tomislav
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tomislav,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As is probably apparent from my email(s), I am very new to all of this as
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my understanding, to start the server on cloud3 from my machine
</span><br>
<span class="quotelev1">&gt; (daviddoria), you must use the command
</span><br>
<span class="quotelev1">&gt; ssh cloud3 mpirun pvserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you use simply
</span><br>
<span class="quotelev1">&gt; mpirun pvserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that will start the server on daviddoria.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone confirm or deny?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10190/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10191.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10193.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
