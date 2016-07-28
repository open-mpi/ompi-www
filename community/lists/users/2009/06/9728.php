<?
$subject_val = "[OMPI users] Open specific port TCP/IP in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 08:02:12 2009" -->
<!-- isoreceived="20090626120212" -->
<!-- sent="Fri, 26 Jun 2009 08:02:07 -0400" -->
<!-- isosent="20090626120207" -->
<!-- name="Nulik Nol" -->
<!-- email="nuliknol_at_[hidden]" -->
<!-- subject="[OMPI users] Open specific port TCP/IP in MPI" -->
<!-- id="1c92aaf50906260502j821631eua063b2cb3ec34fdd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open specific port TCP/IP in MPI<br>
<strong>From:</strong> Nulik Nol (<em>nuliknol_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 08:02:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9729.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Previous message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI users] 50%performance	reduction	due	to	OpenMPI	v	1.3.2forcing allMPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i would like to know if it is possible to make a client/server with
<br>
MPI where the application A (client) would connect to application B
<br>
(server) using a specific TCP/IP port ? I have tried this code but it
<br>
opens a port using some mysterious protocol (which looks like TIPC
<br>
btw), what is going on?
<br>
<p>[root_at_niko code]# cat popserv.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define _PORT_NAME_ &quot;5555\0&quot;
<br>
<p>int main(int argc,char *argv[]){
<br>
int rank,numtasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char myport[MPI_MAX_PORT_NAME]=_PORT_NAME_;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* ... */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;port name before the call: %s\n&quot;, myport);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Open_port(MPI_INFO_NULL, myport);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;port name after the call: %s\n&quot;, myport);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Publish_name(&quot;orion&quot;, MPI_INFO_NULL, myport);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* do something with intercomm */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
[root_at_niko code]# mpicc -I/usr/include/openmpi/1.2.4-gcc/
<br>
-L/usr/lib64/openmpi/1.2.4-gcc -lmpi -o popserv popserv.c
<br>
[root_at_niko code]# mpirun -np 1 ./popserv
<br>
port name before the call: 5555
<br>
port name after the call: 0.1.0:2000
<br>
^Cmpirun: killing job...
<br>
<p>mpirun noticed that job rank 0 with PID 18899 on node niko exited on
<br>
signal 15 (Terminated).
<br>
[root_at_niko code]#
<br>
<p>Is there any examples of a client/server TCP/IP application for Open MPI ?
<br>
<p>Thanks in advance
<br>
<p><pre>
-- 
==================================
The power of zero is infinite
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9729.php">Dave Love: "Re: [OMPI users] MX questions"</a>
<li><strong>Previous message:</strong> <a href="9727.php">Jeff Squyres: "Re: [OMPI users] 50%performance	reduction	due	to	OpenMPI	v	1.3.2forcing allMPI	traffic over	Ethernet	instead	of	using	Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9732.php">Ralph Castain: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
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
