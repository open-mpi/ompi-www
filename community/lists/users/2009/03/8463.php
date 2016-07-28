<?
$subject_val = "Re: [OMPI users] problems with MPI_Loockup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 11:47:43 2009" -->
<!-- isoreceived="20090316154743" -->
<!-- sent="Mon, 16 Mar 2009 09:47:33 -0600" -->
<!-- isosent="20090316154733" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Loockup_name" -->
<!-- id="100A2F0C-E093-4547-900D-6BD68D097B59_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6546e7be0903160844o75b5b3c7m36ca845fb3978cfd_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-16 11:47:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - you are quite correct. I had forgotten that option is coming in  
<br>
1.3.1, and wasn't in 1.3.0.
<br>
<p>Glad you found the other solution!
<br>
<p>Ralph
<br>
<p><p>On Mar 16, 2009, at 9:44 AM, Marcia Cristina Cera wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Helps a lot!
</span><br>
<span class="quotelev1">&gt; But the option &quot;--report-uri&quot; is unable to mpirun. After some  
</span><br>
<span class="quotelev1">&gt; searches in OpenMPI lists I found a way to run:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) ompi-server -d --report-uri urifile &amp;  -----&gt; (must be always  
</span><br>
<span class="quotelev1">&gt; running)
</span><br>
<span class="quotelev1">&gt; 2) mpirun -ompi-server file:urifile -np 1 publish-test
</span><br>
<span class="quotelev1">&gt; 3) mpirun -ompi-server file:urifile -np 1 connect-test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the links.
</span><br>
<span class="quotelev1">&gt; M&#225;rcia.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 16, 2009 at 3:28 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Marcia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You have to tell the process doing the lookup the connection info  
</span><br>
<span class="quotelev1">&gt; for the server that is hosting the published info. Otherwise, OMPI  
</span><br>
<span class="quotelev1">&gt; defaults to looking for it on its own mpirun, where it won't be  
</span><br>
<span class="quotelev1">&gt; found in this case.
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
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the OpenMPI version 1.3 downloaded directly from the site.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to establish a client/server connection among two local  
</span><br>
<span class="quotelev1">&gt; processes (in the same machine).
</span><br>
<span class="quotelev1">&gt; I wrote a simple publisher combining  MPI_Open_port /  
</span><br>
<span class="quotelev1">&gt; MPI_Publish_name / MPI_Comm_accept and a connector with  
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name / MPI_Comm_connect as can be seen in attachment.
</span><br>
<span class="quotelev1">&gt; An error of Invalid name argument (also in attachment) is reached  
</span><br>
<span class="quotelev1">&gt; in  MPI_Lookup_name, but I was execute the same test with LAM/MPI  
</span><br>
<span class="quotelev1">&gt; and it works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did not find references to this error in OpenMPI lists.
</span><br>
<span class="quotelev1">&gt; Please, someone may help me with this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; M&#225;rcia Cristina Cera.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;connect-accept.tar.gz&gt;_______________________________________________
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8463/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8464.php">Jeff Squyres: "Re: [OMPI users] tests for heterogenous installations?"</a>
<li><strong>Previous message:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>In reply to:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
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
