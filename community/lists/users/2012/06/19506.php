<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:13:52 2012" -->
<!-- isoreceived="20120612181352" -->
<!-- sent="Tue, 12 Jun 2012 14:13:47 -0400" -->
<!-- isosent="20120612181347" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB40187A468_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAOf_+-U4eKwCHLOVm=uRRsTU8cKnFhPC17Owbq1FEZvCu5wgPA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)<br>
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Help%20with%20buidling%20MPI(Error:%20mpi.h%20not%20found)"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-12 14:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19505.php">Jingcha Joba: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19505.php">Jingcha Joba: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no include folder in openmpi-1.6.
<br>
<p>I have only config, contrib, examples, ompi, opal, orte and test
<br>
<p>&nbsp;
<br>
<p><pre>
--
Vimal
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Jingcha Joba
Sent: Tuesday, June 12, 2012 2:01 PM
To: Open MPI Users
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
 
mpi.h shoud be located under &lt;path_where_openmpi_is_instaled&gt;/include/
 
When you compile your hello.c include that path with -I.
 
On Tue, Jun 12, 2012 at 10:25 AM, &lt;VimalMathew_at_[hidden]&gt; wrote:
Hi,
 
I was directed to the OpenMPI website from the Boost Libraries page to
install an MPI Installation.
I've followed all the steps in the installation guide to configure and
build MPI. When I try to compile the hello.c program which contains
&lt;mpi.h&gt;.
I get an error message saying mpi.h does not exist
I've attached the config.log, config.out, make.out , ompi_info all and
make-install.out files.
 
Any help will be greatly appreciated!
 
Thanks,
Vimal Mathew
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19506/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19505.php">Jingcha Joba: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19505.php">Jingcha Joba: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
