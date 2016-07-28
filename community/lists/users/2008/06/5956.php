<?
$subject_val = "Re: [OMPI users] Problem with getting started [solved]";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:18:12 2008" -->
<!-- isoreceived="20080621131812" -->
<!-- sent="Sat, 21 Jun 2008 09:18:04 -0400" -->
<!-- isosent="20080621131804" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with getting started [solved]" -->
<!-- id="EF1246FA-F660-4AA1-8A7E-302E0F01FB40_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200806130812.32771.manuel.freiberger_at_tugraz.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with getting started [solved]<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Previous message:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>In reply to:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It could also have been that you didn't have exactly matching  
<br>
installations on both machines.  Even if they were the same version,  
<br>
if they weren't configured / installed the same way on both machines,  
<br>
this could have led to problems.  Also be sure that either the MPI  
<br>
application is compatible / runnable on both systems or you have a  
<br>
separate MPI application binary for each system (e.g., to account for  
<br>
glibc and other differences between your two OS's).
<br>
<p>Running in heterogeneous situations like that is quite difficult to  
<br>
do, and not for the meek.  :-)
<br>
<p><p>On Jun 13, 2008, at 2:12 AM, Manuel Freiberger wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, actually I'm quite sure that it was not the firewall because I  
</span><br>
<span class="quotelev1">&gt; had to
</span><br>
<span class="quotelev1">&gt; turn it off as otherwise no connection could be established. So my
</span><br>
<span class="quotelev1">&gt;  iptables --list
</span><br>
<span class="quotelev1">&gt; returns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on both machines. After reinstalling OMPI, I did not make any  
</span><br>
<span class="quotelev1">&gt; changes to the
</span><br>
<span class="quotelev1">&gt; firewall but now it works without problems. Probably installing the  
</span><br>
<span class="quotelev1">&gt; library
</span><br>
<span class="quotelev1">&gt; with exactly the same configuration (same --prefix and so on) did  
</span><br>
<span class="quotelev1">&gt; the trick.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But nonetheless, thank you very much for your hint! :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Manuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thursday 12 June 2008 18:23, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; are You sure it was not a Firewall issue on the Suse 10.2?
</span><br>
<span class="quotelev2">&gt;&gt; If there are any connections from the Gentoo machine trying to  
</span><br>
<span class="quotelev2">&gt;&gt; access the
</span><br>
<span class="quotelev2">&gt;&gt; orted on the Suse, check in /var/log/firewall.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the time being, try stopping the firewall by (as root) with
</span><br>
<span class="quotelev2">&gt;&gt; /etc/init.d/SuSEfirewall2_setup stop
</span><br>
<span class="quotelev2">&gt;&gt; and test whether it works ,-]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Rainer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Donnerstag, 12. Juni 2008, Manuel Freiberger wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I found the problem. I reinstallen OMPI on both PCs but this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only locally in the users home directory. Now, the sample code works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; perfectly. I'm not sure where the error really was located. It  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that it was a problem with the Gentoo installation because OMPI is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still
</span><br>
<span class="quotelev3">&gt;&gt;&gt; marked unstable in portage (~x86 keyword).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Manuel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wednesday 11 June 2008 18:52, Manuel Freiberger wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello everybody!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all I wanted to point out that I'm beginner regarding  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and all I try to achieve is to get a simple program working on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; two PCs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So far I've installed openMPI 1.2.6 on two PCs (one running  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenSUSE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 10.2, the other one Gentoo).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I set up two identical users on both systems and made sure that I  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make an SSH connection between them using private/public key
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; authentication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Next I ran the command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun -np 2 --hostfile myhosts uptime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which gave the result
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  6:41pm  up 1 day  5:16,  4 users,  load average: 0.00, 0.07, 0.17
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 18:43:45 up  7:36,  6 users,  load average: 0.00, 0.02, 0.05
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so I concluded that MPI should work in principle.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Next I tried the following code which I copied from Boost.MPI:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- snip
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  int rank;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  if (rank == 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    std::cout &lt;&lt; &quot;Rank 0 is going to send&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int value = 17;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int result = MPI_Send(&amp;value, 1, MPI_INT, 1, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (result == MPI_SUCCESS)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      std::cout &lt;&lt; &quot;Rank 0 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  else if (rank == 1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    std::cout &lt;&lt; &quot;Rank 1 is waiting for answer&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int value;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int result = MPI_Recv(&amp;value, 1, MPI_INT, 0, 0, MPI_COMM_WORLD,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 			  &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if (result == MPI_SUCCESS &amp;&amp; value == 17)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      std::cout &lt;&lt; &quot;Rank 1 OK!&quot; &lt;&lt; std::endl;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---- snap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Starting a parallel job using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun -np 2 --hostfile myhosts mpi-test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the answer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Rank 0 is going to send
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Rank 1 is waiting for answer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Rank 0 OK!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and than the program locks. So the strange thing is that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; obviously the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; recv()-command is blocking, which is what I do not understand.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could anybody provide some hints, where I should start looking  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mistake? Any help is welcome!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Manuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Manuel Freiberger
</span><br>
<span class="quotelev1">&gt; Institute of Medical Engineering
</span><br>
<span class="quotelev1">&gt; Graz University of Technology
</span><br>
<span class="quotelev1">&gt; manuel.freiberger_at_[hidden]
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5957.php">Jeff Squyres: "Re: [OMPI users] weird problem with passing data between nodes"</a>
<li><strong>Previous message:</strong> <a href="5955.php">Jeff Squyres: "Re: [OMPI users] parallel AMBER &amp; PBS issue"</a>
<li><strong>In reply to:</strong> <a href="5871.php">Manuel Freiberger: "Re: [OMPI users] Problem with getting started [solved]"</a>
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
