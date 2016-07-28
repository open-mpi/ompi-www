<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 13:59:39 2006" -->
<!-- isoreceived="20060711175939" -->
<!-- sent="Tue, 11 Jul 2006 12:59:13 -0500" -->
<!-- isosent="20060711175913" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="44B3E6F1.2080108_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY112-F289A53F288385A1E6AB0009E680_at_phx.gbl" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 13:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhishek Agarwal wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way of providing a specific port number in MPI_Info when using a 
</span><br>
<span class="quotelev1">&gt; MPI_Open_port command so that clients know which port number to connect.
</span><br>
<p>the MPI port-name in Open MPI has nothing to do with a TCP port number. 
<br>
The port-name right now is a combination of the process name ( a tuple 
<br>
of cell id, job id and process id) and a tag used for the communication.
<br>
<p>Maybe somebody from the RTE group could comment on whether there is a 
<br>
possibility to specify a specific port number for OOB communication, I 
<br>
am not aware of any right now...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do advice of any solution so that we can create the portname inside the 
</span><br>
<span class="quotelev1">&gt; client once we know the port number of server.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Abhishek
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1602.php">George Bosilca: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>In reply to:</strong> <a href="1601.php">Abhishek Agarwal: "[OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
