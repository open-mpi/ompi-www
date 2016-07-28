<?
$subject_val = "Re: [OMPI users] problems with MPI_Loockup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 10:29:07 2009" -->
<!-- isoreceived="20090316142907" -->
<!-- sent="Mon, 16 Mar 2009 08:28:56 -0600" -->
<!-- isosent="20090316142856" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Loockup_name" -->
<!-- id="585989A2-2960-461A-A9B2-8AC72028360E_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6546e7be0903160650n3b27484ci72f82d16b712a8ea_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-03-16 10:28:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8458.php">Marcia Cristina Cera: "[OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Marcia
<br>
<p>You have to tell the process doing the lookup the connection info for  
<br>
the server that is hosting the published info. Otherwise, OMPI  
<br>
defaults to looking for it on its own mpirun, where it won't be found  
<br>
in this case.
<br>
<p>Here is what you need to do (described in &quot;man mpirun&quot;):
<br>
<p>1. mpirun  -np 1 --report-uri uri-file publish-test
<br>
<p>2. mpirun  -np 1 --ompi-server file:uri-file connect-test
<br>
<p><p>Hope that helps
<br>
Ralph
<br>
<p><p>On Mar 16, 2009, at 7:50 AM, Marcia Cristina Cera wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Previous message:</strong> <a href="8460.php">Prentice Bisbal: "Re: [OMPI users] Can't start program across network"</a>
<li><strong>In reply to:</strong> <a href="8458.php">Marcia Cristina Cera: "[OMPI users] problems with MPI_Loockup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
<li><strong>Reply:</strong> <a href="8462.php">Marcia Cristina Cera: "Re: [OMPI users] problems with MPI_Loockup_name"</a>
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
