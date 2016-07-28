<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:31:21 2006" -->
<!-- isoreceived="20060711183121" -->
<!-- sent="Tue, 11 Jul 2006 13:29:53 -0500" -->
<!-- isosent="20060711182953" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="44B3EE21.7000409_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44B3EBB7.4010105_at_vertica.com" -->
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
<strong>Date:</strong> 2006-07-11 14:29:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Robinson wrote:
<br>
<span class="quotelev1">&gt; The MPI publish/lookup calls should handle this, if OpenMPI has them.  I 
</span><br>
<span class="quotelev1">&gt; haven't tried this with OpenMPI yet, but it claims MPI-2 compilance, 
</span><br>
<span class="quotelev1">&gt; right?  ;-)
</span><br>
<p>of course, but MPI does not say what an MPI port has to be. For Open MPI 
<br>
this is *not* equal to a TCP port number... So you can open a port, 
<br>
publish it, and another process can look this port-name up
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /jr
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Abhishek Agarwal wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way of providing a specific port number in MPI_Info
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when using a MPI_Open_port command so that clients know which
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; port number to connect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI port-name in Open MPI has nothing to do with a TCP port
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number. The port-name right now is a combination of the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; name ( a tuple of cell id, job id and process id) and a tag used
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the communication.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe somebody from the RTE group could comment on whether there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a possibility to specify a specific port number for OOB
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication, I am not aware of any right now...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid not - the port number for OOB communications is determined
</span><br>
<span class="quotelev2">&gt;&gt;  dynamically be each process, and then communicated between them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure what your intended purpose is here, of course, but you
</span><br>
<span class="quotelev2">&gt;&gt; don't need to worry about your process being able to &quot;talk&quot; via the
</span><br>
<span class="quotelev2">&gt;&gt; OOB - it's all done automatically during launch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do advice of any solution so that we can create the portname
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; inside the client once we know the port number of server.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks Abhishek
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; list users_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1605.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
