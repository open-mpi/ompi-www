<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1052, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:35:01 2008" -->
<!-- isoreceived="20081031153501" -->
<!-- sent="Fri, 31 Oct 2008 09:34:52 -0600" -->
<!-- isosent="20081031153452" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1052, Issue 1" -->
<!-- id="0CF28492-B13E-4F82-AC43-C1580F0794D1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BLU0-SMTP576436F2929DAA91FF51288200_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1052, Issue 1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the daemon isn't seeing the other interface address on  
<br>
host x2. Can you ssh to x2 and send the contents of ifconfig -a?
<br>
<p>Ralph
<br>
<p>On Oct 31, 2008, at 9:18 AM, Allan Menezes wrote:
<br>
<p><span class="quotelev1">&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    1. Openmpi ver1.3beta1 (Allan Menezes)
</span><br>
<span class="quotelev2">&gt;&gt;    2. Re: Openmpi ver1.3beta1 (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt;    3. Re: Equivalent .h files (Benjamin Lamptey)
</span><br>
<span class="quotelev2">&gt;&gt;    4. Re: Equivalent .h files (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt;&gt;    5. ompi-checkpoint is hanging (Matthias Hovestadt)
</span><br>
<span class="quotelev2">&gt;&gt;    6. unsubscibe (Bertrand P. S. Russell)
</span><br>
<span class="quotelev2">&gt;&gt;    7. Re: ompi-checkpoint is hanging (Tim Mattox)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 02:06:09 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Allan Menezes &lt;amenezes007_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;     I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; --with-threads=posix --disable-ipv6
</span><br>
<span class="quotelev2">&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev2">&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes from  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; head node
</span><br>
<span class="quotelev2">&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1
</span><br>
<span class="quotelev2">&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev2">&gt;&gt; But when i type
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and does
</span><br>
<span class="quotelev2">&gt;&gt; not give me any output
</span><br>
<span class="quotelev2">&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci express
</span><br>
<span class="quotelev2">&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev2">&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 02:41:59 -0600
</span><br>
<span class="quotelev2">&gt;&gt; From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;E8AF5AAF-99CB-4EFC-AA97-5385CE333AD2_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you typed the --host x1 command, were you sitting on x1?
</span><br>
<span class="quotelev2">&gt;&gt; Likewise, when you typed the --host x2 command, were you not on  
</span><br>
<span class="quotelev2">&gt;&gt; host x2?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the answer to both questions is &quot;yes&quot;, then my guess is that
</span><br>
<span class="quotelev2">&gt;&gt; something is preventing you from launching a daemon on host x2. Try
</span><br>
<span class="quotelev2">&gt;&gt; adding --leave-session-attached to your cmd line and see if any error
</span><br>
<span class="quotelev2">&gt;&gt; messages appear. And check the FAQ for tips on how to setup for ssh
</span><br>
<span class="quotelev2">&gt;&gt; launch (I'm assuming that is what you are using).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2008, at 12:06 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;    Yes that is true I tried both commands on x1 and ver 1.28 works  
</span><br>
<span class="quotelev1">&gt; on the same setup without a problem.
</span><br>
<span class="quotelev1">&gt; Here is the output with the added
</span><br>
<span class="quotelev1">&gt; --leave-session-attached
</span><br>
<span class="quotelev1">&gt; [allan_at_x1 ~]$ mpiexec --prefix /opt/openmpi13b2  --leave-session- 
</span><br>
<span class="quotelev1">&gt; attached -host x2 hostname
</span><br>
<span class="quotelev1">&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.0.198:0 failed:  
</span><br>
<span class="quotelev1">&gt; Network is unreachable (101)
</span><br>
<span class="quotelev1">&gt; [x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0]  
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_try_connect: connect to 192.168.122.1:0 failed:  
</span><br>
<span class="quotelev1">&gt; Network is unreachable (101)
</span><br>
<span class="quotelev1">&gt; [x2.brampton.net:02236] [[1354,0],1] routed:binomial: Connection to  
</span><br>
<span class="quotelev1">&gt; lifeline [[1354,0],0] lost
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid 7665) died unexpectedly with status 1 while attempting
</span><br>
<span class="quotelev1">&gt; to launch so we are aborting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed  
</span><br>
<span class="quotelev1">&gt; shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to  
</span><br>
<span class="quotelev1">&gt; have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that the job aborted, but has no info as to the  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec: clean termination accomplished
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [allan_at_x1 ~]$
</span><br>
<span class="quotelev1">&gt; However my main eth0 IP is 192.168.1.1 and internet gate way is  
</span><br>
<span class="quotelev1">&gt; 192.168.0.1
</span><br>
<span class="quotelev1">&gt; Any solutions?
</span><br>
<span class="quotelev1">&gt; Allan Menezes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads --with-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; threads=posix --disable-ipv6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have six nodes x1..6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I distributed the /opt/openmpi13b1 with scp to all other nodes from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the head node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i run the following command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printing out the hostname of x1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But when i type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not give me any output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a 6 node intel quad core cluster with OSCAR and pci express
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gigabit ethernet for eth0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can somebody advise?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Allan Menezes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 3
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 09:48:43 +0000
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Benjamin Lamptey&quot; &lt;bllamptey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Equivalent .h files
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;71ec5a370810310248g91a4d9ftca708e6e6306d0c9_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello again,
</span><br>
<span class="quotelev2">&gt;&gt; I have to be more specific with my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I am using the Mac OS X (Leopard) operating system.
</span><br>
<span class="quotelev2">&gt;&gt; When I do uname -a, I get Darwin Kernel Version 9.5.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) My code if fortran 90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) I tried using the mpif90 wrapper and I got the following message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt; mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) I have the g95 compiler installed. So when I try using the
</span><br>
<span class="quotelev2">&gt;&gt; g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following mesage:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xxxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt; g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/ 
</span><br>
<span class="quotelev2">&gt;&gt; blag_real_burnmpi.f90
</span><br>
<span class="quotelev2">&gt;&gt; Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; xxxxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5) What are people's experience in this case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey &lt;bllamptey_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;included&quot; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ben
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 4
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 31 Oct 2008 06:51:01 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Equivalent .h files
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;A493DF4D-3DFF-46E4-8C90-D3771527379D_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Open MPI that ships with Leopard does not include Fortran support
</span><br>
<span class="quotelev2">&gt;&gt; because OS X does not ship with a Fortran compiler (this was Apple's
</span><br>
<span class="quotelev2">&gt;&gt; decision, not ours).  If you have Fortran MPI applications, you'll
</span><br>
<span class="quotelev2">&gt;&gt; need to a) download and install your own Fortran compiler (e.g., <a href="http://hpc.sf.net/">http://hpc.sf.net/</a>)
</span><br>
<span class="quotelev2">&gt;&gt; , and b) install your own copy Open MPI that includes Fortran support
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., install it to /opt/openmpi or somesuch -- I do not recommend
</span><br>
<span class="quotelev2">&gt;&gt; installing it over the system-installed Open MPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Once you do this, mpif90 should work as expected, and statements like
</span><br>
<span class="quotelev2">&gt;&gt; &quot;use mpi&quot; or &quot;include &quot;mpifh.&quot;&quot; should function properly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 31, 2008, at 5:48 AM, Benjamin Lamptey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have to be more specific with my problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) I am using the Mac OS X (Leopard) operating system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I do uname -a, I get Darwin Kernel Version 9.5.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) My code if fortran 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) I tried using the mpif90 wrapper and I got the following message
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xxxxxxxxxxxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4) I have the g95 compiler installed. So when I try using the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mesage:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xxxxxxxxxxxxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; blag_real_burnmpi.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xxxxxxxxxxxxxxx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5) What are people's experience in this case?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ben
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;bllamptey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;included&quot; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ben
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7160.php">Rajesh Ramaya: "[OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>In reply to:</strong> <a href="7157.php">Allan Menezes: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<!-- nextthread="start" -->
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
