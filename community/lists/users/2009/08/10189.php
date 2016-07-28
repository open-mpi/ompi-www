<?
$subject_val = "Re: [OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 09:29:20 2009" -->
<!-- isoreceived="20090803132920" -->
<!-- sent="Mon, 3 Aug 2009 09:29:16 -0400" -->
<!-- isosent="20090803132916" -->
<!-- name="David Doria" -->
<!-- email="daviddoria+openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="c19fcadc0908030629q342d034aib6b2a16e326e1cdd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A76E46F.5080802_at_gmx.com" -->
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
<strong>From:</strong> David Doria (<em>daviddoria+openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 09:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I'm a newbie, so forgive me if I ask something stupid:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; why are You running ssh command before mpirun command? I'm interested in
</span><br>
<span class="quotelev1">&gt; setting up a paraview server on a LAN to pos-tprocess OpenFOAM
</span><br>
<span class="quotelev1">&gt; simulation data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just a total newbish comment: doesn't the mpirun in fact call for the
</span><br>
<span class="quotelev1">&gt; ssh anyway? And if pvserver is to be run on multiple machines and is
</span><br>
<span class="quotelev1">&gt; programmed in Open MPI shouldn't
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np procNumber -H host1,host2,host3 pvserver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; be enough to get it going, as well as any other parallel program? Again,
</span><br>
<span class="quotelev1">&gt; please excuse my newbiness.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tomislav
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Tomislav,
<br>
<p>As is probably apparent from my email(s), I am very new to all of this as
<br>
well.
<br>
<p><span class="quotelev1">&gt;From my understanding, to start the server on cloud3 from my machine
</span><br>
(daviddoria), you must use the command
<br>
ssh cloud3 mpirun pvserver
<br>
<p>If you use simply
<br>
mpirun pvserver
<br>
<p>that will start the server on daviddoria.
<br>
<p>Can anyone confirm or deny?
<br>
<p>Thanks,
<br>
<p>David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>In reply to:</strong> <a href="10188.php">Tomislav Maric: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10190.php">Ralph Castain: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
