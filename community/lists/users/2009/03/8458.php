<?
$subject_val = "[OMPI users] problems with MPI_Loockup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 09:50:14 2009" -->
<!-- isoreceived="20090316135014" -->
<!-- sent="Mon, 16 Mar 2009 14:50:09 +0100" -->
<!-- isosent="20090316135009" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="[OMPI users] problems with MPI_Loockup_name" -->
<!-- id="6546e7be0903160650n3b27484ci72f82d16b712a8ea_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] problems with MPI_Loockup_name<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 09:50:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using the OpenMPI version 1.3 downloaded directly from the site.
<br>
<p>I want to establish a client/server connection among two local processes (in
<br>
the same machine).
<br>
I wrote a simple publisher combining  MPI_Open_port / MPI_Publish_name /
<br>
MPI_Comm_accept and a connector with MPI_Lookup_name / MPI_Comm_connect as
<br>
can be seen in attachment.
<br>
An error of Invalid name argument (also in attachment) is reached in
<br>
MPI_Lookup_name, but I was execute the same test with LAM/MPI and it works
<br>
well.
<br>
<p>I did not find references to this error in OpenMPI lists.
<br>
Please, someone may help me with this problem?
<br>
<p>Thank you in advance!
<br>
M&#225;rcia Cristina Cera.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8458/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8458/connect-accept.tar.gz">connect-accept.tar.gz</a>
</ul>
<!-- attachment="connect-accept.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8459.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>Previous message:</strong> <a href="8457.php">Samuel Sarholz: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
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
