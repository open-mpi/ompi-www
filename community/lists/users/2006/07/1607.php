<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:40:28 2006" -->
<!-- isoreceived="20060711184028" -->
<!-- sent="Tue, 11 Jul 2006 14:40:16 -0400" -->
<!-- isosent="20060711184016" -->
<!-- name="Abhishek Agarwal" -->
<!-- email="a_agarwal_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="BAY112-F297E3F386465D388A22A9E9E680_at_phx.gbl" -->
<!-- inreplyto="44B3EE21.7000409_at_cs.uh.edu" -->
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
<strong>From:</strong> Abhishek Agarwal (<em>a_agarwal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 14:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a seprate process which is not linked to this process and hence 
<br>
doesnot know anything about this MPI process. I wants to receive some data 
<br>
for this server process.
<br>
<p>Hence I wanted to know if i could specify a specific port. I have used 
<br>
MPI_publish and it seem to work fine.
<br>
<p>Please advice further is there is a way to start a service at a particular 
<br>
port.
<br>
<p>Thanks
<br>
Abhishek
<br>
<p><p><span class="quotelev1">&gt;From: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] MPI_Info for MPI_Open_port
</span><br>
<span class="quotelev1">&gt;Date: Tue, 11 Jul 2006 13:29:53 -0500
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;John Robinson wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The MPI publish/lookup calls should handle this, if OpenMPI has them.  I
</span><br>
<span class="quotelev2">&gt; &gt; haven't tried this with OpenMPI yet, but it claims MPI-2 compilance,
</span><br>
<span class="quotelev2">&gt; &gt; right?  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;of course, but MPI does not say what an MPI port has to be. For Open MPI
</span><br>
<span class="quotelev1">&gt;this is *not* equal to a TCP port number... So you can open a port,
</span><br>
<span class="quotelev1">&gt;publish it, and another process can look this port-name up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /jr
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Abhishek Agarwal wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Is there a way of providing a specific port number in MPI_Info
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; when using a MPI_Open_port command so that clients know which
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; port number to connect.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the MPI port-name in Open MPI has nothing to do with a TCP port
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; number. The port-name right now is a combination of the process
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; name ( a tuple of cell id, job id and process id) and a tag used
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for the communication.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Maybe somebody from the RTE group could comment on whether there is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; a possibility to specify a specific port number for OOB
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; communication, I am not aware of any right now...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm afraid not - the port number for OOB communications is determined
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  dynamically be each process, and then communicated between them.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm not sure what your intended purpose is here, of course, but you
</span><br>
<span class="quotelev3">&gt; &gt;&gt; don't need to worry about your process being able to &quot;talk&quot; via the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OOB - it's all done automatically during launch.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks Edgar
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Do advice of any solution so that we can create the portname
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; inside the client once we know the port number of server.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Thanks Abhishek
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; list users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;Assistant Professor
</span><br>
<span class="quotelev1">&gt;Department of Computer Science          email:gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
</span><br>
<span class="quotelev1">&gt;Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
</span><br>
<span class="quotelev1">&gt;Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Reply:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
