<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:53:35 2006" -->
<!-- isoreceived="20060711185335" -->
<!-- sent="Tue, 11 Jul 2006 14:53:24 -0400" -->
<!-- isosent="20060711185324" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="8D71A3B2-7856-47BA-B5A4-7E3674C65048_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY112-F297E3F386465D388A22A9E9E680_at_phx.gbl" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 14:53:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard definition of a port is not the one you expect. It  
<br>
is nothing like a TCP port, even if they support similar operations  
<br>
(open and close). This port is an opaque value (however MPI stadard  
<br>
define it as being a TEXT) than will be used internally by the MPI  
<br>
library in order to allow you to connect to the remote application.  
<br>
Moreover, contrary to other MPI library, Open MPI allow you to  
<br>
publish and connect over networks that are not Ethernet based (such  
<br>
as Myrinet, Infiniband ...).
<br>
<p>If you want to know how to find such a port once it is published by  
<br>
one MPI application read the MPI_Lookup_name (<a href="http://www.ualberta.ca/">http://www.ualberta.ca/</a> 
<br>
AICT/RESEARCH/LinuxClusters/doc/mpich2/www3/MPI_Lookup_name.html).
<br>
<p>&nbsp;&nbsp;&nbsp;Good luck,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Jul 11, 2006, at 2:40 PM, Abhishek Agarwal wrote:
<br>
<p><span class="quotelev1">&gt; I have a seprate process which is not linked to this process and hence
</span><br>
<span class="quotelev1">&gt; doesnot know anything about this MPI process. I wants to receive  
</span><br>
<span class="quotelev1">&gt; some data
</span><br>
<span class="quotelev1">&gt; for this server process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence I wanted to know if i could specify a specific port. I have used
</span><br>
<span class="quotelev1">&gt; MPI_publish and it seem to work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advice further is there is a way to start a service at a  
</span><br>
<span class="quotelev1">&gt; particular
</span><br>
<span class="quotelev1">&gt; port.
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
<span class="quotelev2">&gt;&gt; From: Edgar Gabriel &lt;gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_Info for MPI_Open_port
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 11 Jul 2006 13:29:53 -0500
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; John Robinson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The MPI publish/lookup calls should handle this, if OpenMPI has  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them.  I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; haven't tried this with OpenMPI yet, but it claims MPI-2 compilance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; right?  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; of course, but MPI does not say what an MPI port has to be. For  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; this is *not* equal to a TCP port number... So you can open a port,
</span><br>
<span class="quotelev2">&gt;&gt; publish it, and another process can look this port-name up
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /jr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Abhishek Agarwal wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a way of providing a specific port number in MPI_Info
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when using a MPI_Open_port command so that clients know which
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; port number to connect.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the MPI port-name in Open MPI has nothing to do with a TCP port
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number. The port-name right now is a combination of the process
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; name ( a tuple of cell id, job id and process id) and a tag used
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for the communication.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maybe somebody from the RTE group could comment on whether  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; there is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a possibility to specify a specific port number for OOB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; communication, I am not aware of any right now...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm afraid not - the port number for OOB communications is  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; determined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  dynamically be each process, and then communicated between them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure what your intended purpose is here, of course, but you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; don't need to worry about your process being able to &quot;talk&quot; via the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OOB - it's all done automatically during launch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Do advice of any solution so that we can create the portname
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; inside the client once we know the port number of server.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks Abhishek
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; list users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/">http://www.open-mpi.org/mailman/listinfo.cgi/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev2">&gt;&gt; Department of Computer Science          email:gabriel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
</span><br>
<span class="quotelev2">&gt;&gt; Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="1610.php">Daryl W. Grunau: "Re: [OMPI users] OMPI 1.1 build failure with Intel 9.0"</a>
<li><strong>Previous message:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1608.php">John Robinson: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
