<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:06:49 2006" -->
<!-- isoreceived="20060711180649" -->
<!-- sent="Tue, 11 Jul 2006 12:06:46 -0600" -->
<!-- isosent="20060711180646" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="C0D944D6.355E%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44B3E6F1.2080108_at_cs.uh.edu" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 14:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Abhishek Agarwal wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way of providing a specific port number in MPI_Info when using a
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Open_port command so that clients know which port number to connect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the MPI port-name in Open MPI has nothing to do with a TCP port number.
</span><br>
<span class="quotelev1">&gt; The port-name right now is a combination of the process name ( a tuple
</span><br>
<span class="quotelev1">&gt; of cell id, job id and process id) and a tag used for the communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe somebody from the RTE group could comment on whether there is a
</span><br>
<span class="quotelev1">&gt; possibility to specify a specific port number for OOB communication, I
</span><br>
<span class="quotelev1">&gt; am not aware of any right now...
</span><br>
<p>I'm afraid not - the port number for OOB communications is determined
<br>
dynamically be each process, and then communicated between them.
<br>
<p>I'm not sure what your intended purpose is here, of course, but you don't
<br>
need to worry about your process being able to &quot;talk&quot; via the OOB - it's all
<br>
done automatically during launch.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do advice of any solution so that we can create the portname inside the
</span><br>
<span class="quotelev2">&gt;&gt; client once we know the port number of server.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Abhishek
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1603.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
