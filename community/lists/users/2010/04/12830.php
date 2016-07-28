<?
$subject_val = "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 02:55:33 2010" -->
<!-- isoreceived="20100428065533" -->
<!-- sent="Wed, 28 Apr 2010 08:55:27 +0200" -->
<!-- isosent="20100428065527" -->
<!-- name="Fabian H&#228;nsel" -->
<!-- email="fabtagon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS" -->
<!-- id="4BD7DBDF.1090706_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="g2q28d120cc1004272315w70c27019v1741c2dedd6b8716_at_mail.gmail.com" -->
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
<strong>From:</strong> Fabian H&#228;nsel (<em>fabtagon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 02:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12828.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12840.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ali,
<br>
<p><span class="quotelev1">&gt; I have solved that problem. I just removed the gcc flag -O3 from my 
</span><br>
<span class="quotelev1">&gt; compile script and the error vanished. However the speed of my code is 
</span><br>
<span class="quotelev1">&gt; also reduced to 50 iterations/minute from 70 iterations/minute, still 
</span><br>
<span class="quotelev1">&gt; not bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any alternative to -O3 flag?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried -O2 too but this also gives errors.
</span><br>
<p>You could try to set optimizations more fine-grained. Every -Osomething 
<br>
stands for a certain set of optimizations. Start with e.g. &quot;gcc -Q -O2 
<br>
--help=optimizers&quot; to see all available optimizations and which are 
<br>
enabled at -O2. Read about them on the gcc manpage. Disable those that 
<br>
decrease accuracy. Enable more from the O3 level if you like. Be aware 
<br>
that decreased accuracy is maybe the source of your described 
<br>
performance gain. As your algorithm seems to be quite (numerically) 
<br>
instable, an additional look into dokumentation regarding precision and 
<br>
general sources regarding numerical instablity might benefit you while 
<br>
estimating the effects of certain optimizations.
<br>
<p>Best regards
<br>
&nbsp;&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12831.php">Nguyen Kim Son: "Re: [OMPI users] mpirun works locally but not through network"</a>
<li><strong>Previous message:</strong> <a href="12829.php">kishore kumar: "[OMPI users] MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD with errorcode 0."</a>
<li><strong>In reply to:</strong> <a href="12828.php">Asad Ali: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12835.php">Tim Prince: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>Reply:</strong> <a href="12840.php">Dave Love: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
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
