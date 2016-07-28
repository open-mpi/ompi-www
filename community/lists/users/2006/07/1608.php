<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 11 14:47:41 2006" -->
<!-- isoreceived="20060711184741" -->
<!-- sent="Tue, 11 Jul 2006 14:47:29 -0400" -->
<!-- isosent="20060711184729" -->
<!-- name="John Robinson" -->
<!-- email="jr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Info for MPI_Open_port" -->
<!-- id="44B3F241.60704_at_vertica.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> John Robinson (<em>jr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-11 14:47:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1643.php">Robert Latham: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>I really was responding to the original poster, not to you.
<br>
<p>The MPI port should be treated as an opaque object, really, right?
<br>
<p>I was also wondering whether the user was worried about the TCP port
<br>
that MPI daemons use to communicate with each other (assuming there
<br>
are daemons involved), but i didn't want to go there.  ;-)
<br>
<p>thanks,
<br>
/jr
<br>
<pre>
---
Edgar Gabriel wrote:
&gt; John Robinson wrote:
&gt; 
&gt;&gt;The MPI publish/lookup calls should handle this, if OpenMPI has them.  I 
&gt;&gt;haven't tried this with OpenMPI yet, but it claims MPI-2 compilance, 
&gt;&gt;right?  ;-)
&gt; 
&gt; 
&gt; of course, but MPI does not say what an MPI port has to be. For Open MPI 
&gt; this is *not* equal to a TCP port number... So you can open a port, 
&gt; publish it, and another process can look this port-name up
&gt; 
&gt; 
&gt;&gt;/jr
&gt;&gt;---
&gt;&gt;Ralph H Castain wrote:
&gt;&gt;
&gt;&gt;&gt;On 7/11/06 11:59 AM, &quot;Edgar Gabriel&quot; &lt;gabriel_at_[hidden]&gt; wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Abhishek Agarwal wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Hello,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Is there a way of providing a specific port number in MPI_Info
&gt;&gt;&gt;&gt;&gt;when using a MPI_Open_port command so that clients know which
&gt;&gt;&gt;&gt;&gt;port number to connect.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;the MPI port-name in Open MPI has nothing to do with a TCP port
&gt;&gt;&gt;&gt;number. The port-name right now is a combination of the process
&gt;&gt;&gt;&gt;name ( a tuple of cell id, job id and process id) and a tag used
&gt;&gt;&gt;&gt;for the communication.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Maybe somebody from the RTE group could comment on whether there is
&gt;&gt;&gt;&gt;a possibility to specify a specific port number for OOB
&gt;&gt;&gt;&gt;communication, I am not aware of any right now...
&gt;&gt;&gt;
&gt;&gt;&gt;I'm afraid not - the port number for OOB communications is determined
&gt;&gt;&gt; dynamically be each process, and then communicated between them.
&gt;&gt;&gt;
&gt;&gt;&gt;I'm not sure what your intended purpose is here, of course, but you
&gt;&gt;&gt;don't need to worry about your process being able to &quot;talk&quot; via the
&gt;&gt;&gt;OOB - it's all done automatically during launch.
&gt;&gt;&gt;
&gt;&gt;&gt;Ralph
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;&gt;Thanks Edgar
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Do advice of any solution so that we can create the portname
&gt;&gt;&gt;&gt;&gt;inside the client once we know the port number of server.
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;Thanks Abhishek
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;_______________________________________________ users mailing
&gt;&gt;&gt;&gt;&gt;list users_at_[hidden] 
&gt;&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;_______________________________________________ users mailing list 
&gt;&gt;&gt;&gt;users_at_[hidden] 
&gt;&gt;&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;_______________________________________________ users mailing list 
&gt;&gt;&gt;users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1609.php">George Bosilca: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>Previous message:</strong> <a href="1607.php">Abhishek Agarwal: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<li><strong>In reply to:</strong> <a href="1606.php">Edgar Gabriel: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1643.php">Robert Latham: "Re: [OMPI users] MPI_Info for MPI_Open_port"</a>
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
