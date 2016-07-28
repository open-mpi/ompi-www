<?
$subject_val = "Re: [OMPI users] problems with MPI_Loockup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 11:44:20 2009" -->
<!-- isoreceived="20090316154420" -->
<!-- sent="Mon, 16 Mar 2009 16:44:13 +0100" -->
<!-- isosent="20090316154413" -->
<!-- name="Marcia Cristina Cera" -->
<!-- email="marcia.cristina.cera_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Loockup_name" -->
<!-- id="6546e7be0903160844o75b5b3c7m36ca845fb3978cfd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="585989A2-2960-461A-A9B2-8AC72028360E_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with MPI_Loockup_name<br>
<strong>From:</strong> Marcia Cristina Cera (<em>marcia.cristina.cera_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 11:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Helps a lot!
<br>
But the option &quot;--report-uri&quot; is unable to mpirun. After some searches in
<br>
OpenMPI lists I found a way to run:
<br>
<p>1) ompi-server -d --report-uri urifile &amp;  -----&gt; (must be always running)
<br>
2) mpirun -ompi-server file:urifile -np 1 publish-test
<br>
3) mpirun -ompi-server file:urifile -np 1 connect-test
<br>
<p>Thank you for the links.
<br>
M&#225;rcia.
<br>
<p>On Mon, Mar 16, 2009 at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Marcia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to tell the process doing the lookup the connection info for the
</span><br>
<span class="quotelev1">&gt; server that is hosting the published info. Otherwise, OMPI defaults to
</span><br>
<span class="quotelev1">&gt; looking for it on its own mpirun, where it won't be found in this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what you need to do (described in &quot;man mpirun&quot;):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. mpirun  -np 1 --report-uri uri-file publish-test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. mpirun  -np 1 --ompi-server file:uri-file connect-test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2009, at 7:50 AM, Marcia Cristina Cera wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using the OpenMPI version 1.3 downloaded directly from the site.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to establish a client/server connection among two local processes
</span><br>
<span class="quotelev2">&gt;&gt; (in the same machine).
</span><br>
<span class="quotelev2">&gt;&gt; I wrote a simple publisher combining  MPI_Open_port / MPI_Publish_name /
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_accept and a connector with MPI_Lookup_name / MPI_Comm_connect as
</span><br>
<span class="quotelev2">&gt;&gt; can be seen in attachment.
</span><br>
<span class="quotelev2">&gt;&gt; An error of Invalid name argument (also in attachment) is reached in
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Lookup_name, but I was execute the same test with LAM/MPI and it works
</span><br>
<span class="quotelev2">&gt;&gt; well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did not find references to this error in OpenMPI lists.
</span><br>
<span class="quotelev2">&gt;&gt; Please, someone may help me with this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you in advance!
</span><br>
<span class="quotelev2">&gt;&gt; M&#225;rcia Cristina Cera.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;connect-accept.tar.gz&gt;_______________________________________________
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8462/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8461.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8463.php">Ralph Castain: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
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
