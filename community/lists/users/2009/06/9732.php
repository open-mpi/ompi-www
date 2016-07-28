<?
$subject_val = "Re: [OMPI users] Open specific port TCP/IP in MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 26 09:57:36 2009" -->
<!-- isoreceived="20090626135736" -->
<!-- sent="Fri, 26 Jun 2009 07:57:21 -0600" -->
<!-- isosent="20090626135721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open specific port TCP/IP in MPI" -->
<!-- id="5D2931A7-93AC-43EA-B533-5A837AE31010_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1c92aaf50906260502j821631eua063b2cb3ec34fdd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open specific port TCP/IP in MPI<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-26 09:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9731.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9728.php">Nulik Nol: "[OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How are you trying to use this port? Are you expecting that to be the  
<br>
port used for MPI communications?
<br>
<p>We create the port string based on the actual TCP/IP contact info for  
<br>
this process on our out-of-band comm channel. This has nothing to do  
<br>
with whatever port might be used for MPI communication. So passing a  
<br>
port number in is meaningless and is ignored since the process isn't  
<br>
listening on that port.
<br>
<p>By the time you make this call, all of the ports for the process have  
<br>
already been defined and opened.
<br>
<p>What you need to do is use the static port params to set the port when  
<br>
you first execute. Then MPI_Open_port will wind up using it.
<br>
<p>The proper syntax for doing this depends on whether you are trying to  
<br>
set it for MPI comm or for OOB comm or both. Do an:
<br>
<p>ompi_info --param btl tcp
<br>
<p>to see how to set it for MPI comm, and
<br>
<p>ompi_info --param oob tcp
<br>
<p>to see how to set it for OOB comm. Make sure you specify a number of  
<br>
ports &gt;= #procs/node as each proc will open its own port! Also, note  
<br>
that you cannot specify which rank opens what port - they'll each just  
<br>
try the ports in the specified range until they get one.
<br>
<p>Ralph
<br>
<p>On Jun 26, 2009, at 6:02 AM, Nulik Nol wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; i would like to know if it is possible to make a client/server with
</span><br>
<span class="quotelev1">&gt; MPI where the application A (client) would connect to application B
</span><br>
<span class="quotelev1">&gt; (server) using a specific TCP/IP port ? I have tried this code but it
</span><br>
<span class="quotelev1">&gt; opens a port using some mysterious protocol (which looks like TIPC
</span><br>
<span class="quotelev1">&gt; btw), what is going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_niko code]# cat popserv.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define _PORT_NAME_ &quot;5555\0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc,char *argv[]){
</span><br>
<span class="quotelev1">&gt; int rank,numtasks;
</span><br>
<span class="quotelev1">&gt;    char myport[MPI_MAX_PORT_NAME]=_PORT_NAME_;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm intercomm;
</span><br>
<span class="quotelev1">&gt;    /* ... */
</span><br>
<span class="quotelev1">&gt;    printf(&quot;port name before the call: %s\n&quot;, myport);
</span><br>
<span class="quotelev1">&gt;    MPI_Open_port(MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;port name after the call: %s\n&quot;, myport);
</span><br>
<span class="quotelev1">&gt;    MPI_Publish_name(&quot;orion&quot;, MPI_INFO_NULL, myport);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_accept(myport, MPI_INFO_NULL, 0, MPI_COMM_SELF,  
</span><br>
<span class="quotelev1">&gt; &amp;intercomm);
</span><br>
<span class="quotelev1">&gt;    /* do something with intercomm */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; [root_at_niko code]# mpicc -I/usr/include/openmpi/1.2.4-gcc/
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/openmpi/1.2.4-gcc -lmpi -o popserv popserv.c
</span><br>
<span class="quotelev1">&gt; [root_at_niko code]# mpirun -np 1 ./popserv
</span><br>
<span class="quotelev1">&gt; port name before the call: 5555
</span><br>
<span class="quotelev1">&gt; port name after the call: 0.1.0:2000
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 18899 on node niko exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; [root_at_niko code]#
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any examples of a client/server TCP/IP application for Open  
</span><br>
<span class="quotelev1">&gt; MPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==================================
</span><br>
<span class="quotelev1">&gt; The power of zero is infinite
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
<li><strong>Next message:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Previous message:</strong> <a href="9731.php">Scott Atchley: "Re: [OMPI users] MX questions"</a>
<li><strong>In reply to:</strong> <a href="9728.php">Nulik Nol: "[OMPI users] Open specific port TCP/IP in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
<li><strong>Reply:</strong> <a href="9733.php">Nulik Nol: "Re: [OMPI users] Open specific port TCP/IP in MPI"</a>
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
