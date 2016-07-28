<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1052, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 11:19:09 2008" -->
<!-- isoreceived="20081031151909" -->
<!-- sent="Fri, 31 Oct 2008 11:18:41 -0400" -->
<!-- isosent="20081031151841" -->
<!-- name="Allan Menezes" -->
<!-- email="amenezes007_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1052, Issue 1" -->
<!-- id="BLU0-SMTP576436F2929DAA91FF51288200_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="mailman.4387.1225457336.16379.users_at_open-mpi.org" -->
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
<strong>From:</strong> Allan Menezes (<em>amenezes007_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-31 11:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Reply:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt;than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   1. Openmpi ver1.3beta1 (Allan Menezes)
</span><br>
<span class="quotelev1">&gt;   2. Re: Openmpi ver1.3beta1 (Ralph Castain)
</span><br>
<span class="quotelev1">&gt;   3. Re: Equivalent .h files (Benjamin Lamptey)
</span><br>
<span class="quotelev1">&gt;   4. Re: Equivalent .h files (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;   5. ompi-checkpoint is hanging (Matthias Hovestadt)
</span><br>
<span class="quotelev1">&gt;   6. unsubscibe (Bertrand P. S. Russell)
</span><br>
<span class="quotelev1">&gt;   7. Re: ompi-checkpoint is hanging (Tim Mattox)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 1
</span><br>
<span class="quotelev1">&gt;Date: Fri, 31 Oct 2008 02:06:09 -0400
</span><br>
<span class="quotelev1">&gt;From: Allan Menezes &lt;amenezes007_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;BLU0-SMTP224B5E356302AC7AA4481088200_at_phx.gbl&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;    I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev1">&gt;./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads 
</span><br>
<span class="quotelev1">&gt;--with-threads=posix --disable-ipv6
</span><br>
<span class="quotelev1">&gt;I have six nodes x1..6
</span><br>
<span class="quotelev1">&gt;I distributed the /opt/openmpi13b1 with scp to all other nodes from the 
</span><br>
<span class="quotelev1">&gt;head node
</span><br>
<span class="quotelev1">&gt;When i run the following command:
</span><br>
<span class="quotelev1">&gt;mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1 
</span><br>
<span class="quotelev1">&gt;printing out the hostname of x1
</span><br>
<span class="quotelev1">&gt;But when i type
</span><br>
<span class="quotelev1">&gt;mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and does 
</span><br>
<span class="quotelev1">&gt;not give me any output
</span><br>
<span class="quotelev1">&gt;I have a 6 node intel quad core cluster with OSCAR and pci express 
</span><br>
<span class="quotelev1">&gt;gigabit ethernet for eth0
</span><br>
<span class="quotelev1">&gt;Can somebody advise?
</span><br>
<span class="quotelev1">&gt;Thank you very much.
</span><br>
<span class="quotelev1">&gt;Allan Menezes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 2
</span><br>
<span class="quotelev1">&gt;Date: Fri, 31 Oct 2008 02:41:59 -0600
</span><br>
<span class="quotelev1">&gt;From: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Openmpi ver1.3beta1
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;E8AF5AAF-99CB-4EFC-AA97-5385CE333AD2_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When you typed the --host x1 command, were you sitting on x1?  
</span><br>
<span class="quotelev1">&gt;Likewise, when you typed the --host x2 command, were you not on host x2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If the answer to both questions is &quot;yes&quot;, then my guess is that  
</span><br>
<span class="quotelev1">&gt;something is preventing you from launching a daemon on host x2. Try  
</span><br>
<span class="quotelev1">&gt;adding --leave-session-attached to your cmd line and see if any error  
</span><br>
<span class="quotelev1">&gt;messages appear. And check the FAQ for tips on how to setup for ssh  
</span><br>
<span class="quotelev1">&gt;launch (I'm assuming that is what you are using).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/?category=rsh">http://www.open-mpi.org/faq/?category=rsh</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 31, 2008, at 12:06 AM, Allan Menezes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Ralph,
<br>
&nbsp;&nbsp;&nbsp;Yes that is true I tried both commands on x1 and ver 1.28 works on 
<br>
the same setup without a problem.
<br>
Here is the output with the added 
<br>
<p>--leave-session-attached
<br>
<p>[allan_at_x1 ~]$ mpiexec --prefix /opt/openmpi13b2  
<br>
--leave-session-attached -host x2 hostname
<br>
[x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0] 
<br>
mca_oob_tcp_peer_try_connect: connect to 192.168.0.198:0 failed: Network 
<br>
is unreachable (101)
<br>
[x2.brampton.net:02236] [[1354,0],1]-[[1354,0],0] 
<br>
mca_oob_tcp_peer_try_connect: connect to 192.168.122.1:0 failed: Network 
<br>
is unreachable (101)
<br>
[x2.brampton.net:02236] [[1354,0],1] routed:binomial: Connection to 
<br>
lifeline [[1354,0],0] lost
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 7665) died unexpectedly with status 1 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpiexec: clean termination accomplished
<br>
<p>[allan_at_x1 ~]$
<br>
However my main eth0 IP is 192.168.1.1 and internet gate way is 192.168.0.1
<br>
Any solutions?
<br>
Allan Menezes
<br>
<p><p><p><span class="quotelev2">&gt;&gt;Hi,
</span><br>
<span class="quotelev2">&gt;&gt;  I built open mpi version 1.3b1 withe following cofigure command:
</span><br>
<span class="quotelev2">&gt;&gt;./configure --prefix=/opt/openmpi13b1 --enable-mpi-threads --with- 
</span><br>
<span class="quotelev2">&gt;&gt;threads=posix --disable-ipv6
</span><br>
<span class="quotelev2">&gt;&gt;I have six nodes x1..6
</span><br>
<span class="quotelev2">&gt;&gt;I distributed the /opt/openmpi13b1 with scp to all other nodes from  
</span><br>
<span class="quotelev2">&gt;&gt;the head node
</span><br>
<span class="quotelev2">&gt;&gt;When i run the following command:
</span><br>
<span class="quotelev2">&gt;&gt;mpirun --prefix /opt/openmpi13b1  --host x1 hostname it works on x1  
</span><br>
<span class="quotelev2">&gt;&gt;printing out the hostname of x1
</span><br>
<span class="quotelev2">&gt;&gt;But when i type
</span><br>
<span class="quotelev2">&gt;&gt;mpirun --prefix /opt/openmpi13b1 --host x2 hostname it hangs and  
</span><br>
<span class="quotelev2">&gt;&gt;does not give me any output
</span><br>
<span class="quotelev2">&gt;&gt;I have a 6 node intel quad core cluster with OSCAR and pci express  
</span><br>
<span class="quotelev2">&gt;&gt;gigabit ethernet for eth0
</span><br>
<span class="quotelev2">&gt;&gt;Can somebody advise?
</span><br>
<span class="quotelev2">&gt;&gt;Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;Allan Menezes
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 3
</span><br>
<span class="quotelev1">&gt;Date: Fri, 31 Oct 2008 09:48:43 +0000
</span><br>
<span class="quotelev1">&gt;From: &quot;Benjamin Lamptey&quot; &lt;bllamptey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Equivalent .h files
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Message-ID:
</span><br>
<span class="quotelev1">&gt;	&lt;71ec5a370810310248g91a4d9ftca708e6e6306d0c9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello again,
</span><br>
<span class="quotelev1">&gt;I have to be more specific with my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1) I am using the Mac OS X (Leopard) operating system.
</span><br>
<span class="quotelev1">&gt;When I do uname -a, I get Darwin Kernel Version 9.5.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2) My code if fortran 90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3) I tried using the mpif90 wrapper and I got the following message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;xxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt;Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev1">&gt;xxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4) I have the g95 compiler installed. So when I try using the
</span><br>
<span class="quotelev1">&gt;g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following mesage:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;xxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev1">&gt;Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev1">&gt;make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev1">&gt;xxxxxxxxxxxxxxx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5) What are people's experience in this case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<span class="quotelev1">&gt;Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey &lt;bllamptey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally
</span><br>
<span class="quotelev2">&gt;&gt;&quot;included&quot; at
</span><br>
<span class="quotelev2">&gt;&gt;the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks
</span><br>
<span class="quotelev2">&gt;&gt;Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;-------------- next part --------------
</span><br>
<span class="quotelev1">&gt;HTML attachment scrubbed and removed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Message: 4
</span><br>
<span class="quotelev1">&gt;Date: Fri, 31 Oct 2008 06:51:01 -0400
</span><br>
<span class="quotelev1">&gt;From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Equivalent .h files
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Message-ID: &lt;A493DF4D-3DFF-46E4-8C90-D3771527379D_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The Open MPI that ships with Leopard does not include Fortran support  
</span><br>
<span class="quotelev1">&gt;because OS X does not ship with a Fortran compiler (this was Apple's  
</span><br>
<span class="quotelev1">&gt;decision, not ours).  If you have Fortran MPI applications, you'll  
</span><br>
<span class="quotelev1">&gt;need to a) download and install your own Fortran compiler (e.g., <a href="http://hpc.sf.net/">http://hpc.sf.net/</a>) 
</span><br>
<span class="quotelev1">&gt;, and b) install your own copy Open MPI that includes Fortran support  
</span><br>
<span class="quotelev1">&gt;(e.g., install it to /opt/openmpi or somesuch -- I do not recommend  
</span><br>
<span class="quotelev1">&gt;installing it over the system-installed Open MPI).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Once you do this, mpif90 should work as expected, and statements like  
</span><br>
<span class="quotelev1">&gt;&quot;use mpi&quot; or &quot;include &quot;mpifh.&quot;&quot; should function properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Oct 31, 2008, at 5:48 AM, Benjamin Lamptey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Hello again,
</span><br>
<span class="quotelev2">&gt;&gt;I have to be more specific with my problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;1) I am using the Mac OS X (Leopard) operating system.
</span><br>
<span class="quotelev2">&gt;&gt;When I do uname -a, I get Darwin Kernel Version 9.5.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2) My code if fortran 90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;3) I tried using the mpif90 wrapper and I got the following message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;xxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;mpif90  -c -O3   /Users/lamptey/projectb/src/blag_real_burnmpi.f90
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev2">&gt;&gt;Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;xxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;4) I have the g95 compiler installed. So when I try using the
</span><br>
<span class="quotelev2">&gt;&gt;g95, (with include &quot;mpif.h&quot; or 'mpif.h'), I get the following mesage:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;xxxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;g95 -fno-pic -c -O3   /Users/lamptey/projectb/src/ 
</span><br>
<span class="quotelev2">&gt;&gt;blag_real_burnmpi.f90
</span><br>
<span class="quotelev2">&gt;&gt;Error: Can't open included file 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt;make: *** [blag_real_burnmpi.o] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;xxxxxxxxxxxxxxx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;5) What are people's experience in this case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks
</span><br>
<span class="quotelev2">&gt;&gt;Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;On Thu, Oct 30, 2008 at 2:33 PM, Benjamin Lamptey  
</span><br>
<span class="quotelev2">&gt;&gt;&lt;bllamptey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;Hello,
</span><br>
<span class="quotelev2">&gt;&gt;I am new at using open-mpi and will like to know something basic.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;What is the equivalent of the &quot;mpif.h&quot; in open-mpi which is normally  
</span><br>
<span class="quotelev2">&gt;&gt;&quot;included&quot; at
</span><br>
<span class="quotelev2">&gt;&gt;the beginning of mpi codes (fortran in this case).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I shall appreciate that for cpp as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Thanks
</span><br>
<span class="quotelev2">&gt;&gt;Ben
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7158.php">Antonio Molins: "[OMPI users] MPI_Type_create_darray causes MPI_File_set_view to crash when ndims=2, array_of_gsizes[0]&gt;array_of_gsizes[1]"</a>
<li><strong>Previous message:</strong> <a href="7156.php">Matthias Hovestadt: "Re: [OMPI users] ompi-checkpoint is hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
<li><strong>Reply:</strong> <a href="7159.php">Ralph Castain: "Re: [OMPI users] users Digest, Vol 1052, Issue 1"</a>
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
