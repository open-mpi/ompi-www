<?
$subject_val = "[OMPI users] Question on MPI_Ssend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 13 05:02:16 2011" -->
<!-- isoreceived="20110913090216" -->
<!-- sent="Tue, 13 Sep 2011 10:02:11 +0100 (BST)" -->
<!-- isosent="20110913090211" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Question on MPI_Ssend" -->
<!-- id="1315904531.86189.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AD49F45C-F873-4382-8AF5-8430DBF43EF6_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> [OMPI users] Question on MPI_Ssend<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-13 05:02:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone,

I have a rather large network application, which runs on cluster of Linux machines.

I am using MPI_Ssend and a corresponding a MPI_Recv. I notice that 
whenever MPI_Recv starts waiting firs, and then MPI_Ssend is posted, the MPI calls just block. This, of course results in non-coherent 
application behavior. 


Am I missing something? If yes, how do I find out where I am going wrong?

I tried VampirTrace but I am having trouble making shared libraries, and 
when the application runs I get assertion errors which leads to signal 6 (abort).

Thanks for any help.


Best,

Devendra Rai
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17247/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17248.php">Peter Kjellström: "Re: [OMPI users] #cpus/socket"</a>
<li><strong>Previous message:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>In reply to:</strong> <a href="17245.php">Reuti: "Re: [OMPI users] Question on using rsh"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
<li><strong>Reply:</strong> <a href="17249.php">Jeff Squyres: "Re: [OMPI users] Question on MPI_Ssend"</a>
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
