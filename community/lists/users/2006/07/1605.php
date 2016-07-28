<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:19:47 2006" -->
<!-- isoreceived="20060711181947" -->
<!-- sent="Tue, 11 Jul 2006 14:19:35 -0400" -->
<!-- isosent="20060711181935" -->
<!-- name="John Robinson" -->
<!-- email="jr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="44B3EBB7.4010105_at_vertica.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0D944D6.355E%rhc_at_lanl.gov" -->
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
<strong>From:</strong> John Robinson (<em>jr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 14:19:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI publish/lookup calls should handle this, if OpenMPI has them.  I 
<br>
haven't tried this with OpenMPI yet, but it claims MPI-2 compilance, 
<br>
right?  ;-)
<br>
<p>/jr
<br>
<pre>
---
Ralph H Castain wrote:
&gt; On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
&gt; 
&gt; 
&gt;&gt; Abhishek Agarwal wrote:
&gt;&gt; 
&gt;&gt;&gt; Hello,
&gt;&gt;&gt; 
&gt;&gt;&gt; Is there a way of providing a specific port number in MPI_Info
&gt;&gt;&gt; when using a MPI_Open_port command so that clients know which
&gt;&gt;&gt; port number to connect.
&gt;&gt; 
&gt;&gt; the MPI port-name in Open MPI has nothing to do with a TCP port
&gt;&gt; number. The port-name right now is a combination of the process
&gt;&gt; name ( a tuple of cell id, job id and process id) and a tag used
&gt;&gt; for the communication.
&gt;&gt; 
&gt;&gt; Maybe somebody from the RTE group could comment on whether there is
&gt;&gt; a possibility to specify a specific port number for OOB
&gt;&gt; communication, I am not aware of any right now...
&gt; 
&gt; 
&gt; I'm afraid not - the port number for OOB communications is determined
&gt;  dynamically be each process, and then communicated between them.
&gt; 
&gt; I'm not sure what your intended purpose is here, of course, but you
&gt; don't need to worry about your process being able to &quot;talk&quot; via the
&gt; OOB - it's all done automatically during launch.
&gt; 
&gt; Ralph
&gt; 
&gt; 
&gt; 
&gt;&gt; Thanks Edgar
&gt;&gt; 
&gt;&gt; 
&gt;&gt;&gt; Do advice of any solution so that we can create the portname
&gt;&gt;&gt; inside the client once we know the port number of server.
&gt;&gt;&gt; 
&gt;&gt;&gt; Thanks Abhishek
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________ users mailing
&gt;&gt;&gt; list users_at_[hidden] 
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; _______________________________________________ users mailing list 
&gt;&gt; users_at_[hidden] 
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________ users mailing list 
&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1604.php">Ralph H Castain: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
