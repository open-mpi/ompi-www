<?
$subject_val = "Re: [OMPI users] MPI_Lookup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 12:04:50 2009" -->
<!-- isoreceived="20090609160450" -->
<!-- sent="Tue, 9 Jun 2009 10:04:45 -0600" -->
<!-- isosent="20090609160445" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Lookup_name" -->
<!-- id="71d2d8cc0906090904n561e0f82lae15b7f657aefe1f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A2E86A7.2020802_at_polytech.univ-mrs.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Lookup_name<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 12:04:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<li><strong>In reply to:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Reply:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It works fine, but you didn't specify the ompi-server uri correctly. On the
<br>
mpirun cmd line, you needed to specify it as &quot;file:test&quot; so we know that it
<br>
is a filename and not something else. Here is the mpirun help output:
<br>
<p>&quot;Specify the URI of the Open MPI server, or the name of the file (specified
<br>
as file:filename) that contains that info&quot;
<br>
<p>As given below, we attempted to use a uri of &quot;test&quot;, which provides a
<br>
meaningless contact point. I'll try to provide a more informative error
<br>
message, though, as the current one is rather useless, I must admit. :-/
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Tue, Jun 9, 2009 at 9:58 AM, Yann JOBIC &lt;jobic_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to get MPI_Lookup_name working.
</span><br>
<span class="quotelev1">&gt; The codes are working fine with mpich2.
</span><br>
<span class="quotelev1">&gt; I'm using ompi-1.3.2 (r21054, from the tar version)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the error message :
</span><br>
<span class="quotelev1">&gt; [homard:26336] *** An error occurred in MPI_Lookup_name
</span><br>
<span class="quotelev1">&gt; [homard:26336] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [homard:26336] *** MPI_ERR_NAME: invalid name argument
</span><br>
<span class="quotelev1">&gt; [homard:26336] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The method i used :
</span><br>
<span class="quotelev1">&gt; TERM1 : ompi-server -d --report-uri test
</span><br>
<span class="quotelev1">&gt; TERM2 : mpirun -ompi-server test -np 1 server
</span><br>
<span class="quotelev1">&gt; TERM3 : mpirun -ompi-server test -np 1 client
</span><br>
<span class="quotelev1">&gt; Then i've got the error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the codes :
</span><br>
<span class="quotelev1">&gt; <a href="http://www.latp.univ-mrs.fr/~jobic/server.c<http://www.latp.univ-mrs.fr/%7Ejobic/server.c">http://www.latp.univ-mrs.fr/~jobic/server.c<http://www.latp.univ-mrs.fr/%7Ejobic/server.c</a>&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.latp.univ-mrs.fr/~jobic/client.c<http://www.latp.univ-mrs.fr/%7Ejobic/client.c">http://www.latp.univ-mrs.fr/~jobic/client.c<http://www.latp.univ-mrs.fr/%7Ejobic/client.c</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have some strange errors, like :
</span><br>
<span class="quotelev1">&gt; [homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rml_base_contact.c at line 153
</span><br>
<span class="quotelev1">&gt; [homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; rml_oob_contact.c at line 55
</span><br>
<span class="quotelev1">&gt; [homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file
</span><br>
<span class="quotelev1">&gt; base/rml_base_contact.c at line 91
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you succeed in making MPI_Lookup_name work ??
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ___________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yann JOBIC
</span><br>
<span class="quotelev1">&gt; HPC engineer
</span><br>
<span class="quotelev1">&gt; Polytech Marseille DME
</span><br>
<span class="quotelev1">&gt; IUSTI-CNRS UMR 6595
</span><br>
<span class="quotelev1">&gt; Technop&#244;le de Ch&#226;teau Gombert
</span><br>
<span class="quotelev1">&gt; 5 rue Enrico Fermi
</span><br>
<span class="quotelev1">&gt; 13453 Marseille cedex 13
</span><br>
<span class="quotelev1">&gt; Tel : (33) 4 91 10 69 39
</span><br>
<span class="quotelev1">&gt;  ou  (33) 4 91 10 69 43
</span><br>
<span class="quotelev1">&gt; Fax : (33) 4 91 10 69 69
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9579/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<li><strong>In reply to:</strong> <a href="9578.php">Yann JOBIC: "[OMPI users] MPI_Lookup_name"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Reply:</strong> <a href="9580.php">jobic: "Re: [OMPI users] MPI_Lookup_name"</a>
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
