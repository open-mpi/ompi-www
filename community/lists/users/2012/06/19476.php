<?
$subject_val = "Re: [OMPI users] testing for openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 06:51:25 2012" -->
<!-- isoreceived="20120607105125" -->
<!-- sent="Thu, 7 Jun 2012 03:51:18 -0700" -->
<!-- isosent="20120607105118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testing for openMPI" -->
<!-- id="0EFE63D3-66B6-4734-B311-23C261653E31_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FD085EA.9030403_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] testing for openMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 06:51:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19477.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19475.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19474.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19475.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Exxxcellent.
<br>
<p>Good luck!
<br>
<p><p>On Jun 7, 2012, at 3:43 AM, Duke wrote:
<br>
<p><span class="quotelev1">&gt; On 6/7/12 5:32 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Check to ensure that you have firewalls disabled between your two machines; that's a common cause of hanging (i.e., Open MPI is trying to open connections and/or send data between your two nodes, and the packets are getting black-holed at the other side).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI needs to be able to communicate on random TCP ports between all machines that will be used in MPI jobs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!!! After switching iptables off on all the machines, I got it working:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -np 8 --machinefile /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 0 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 1 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 2 on host hp430a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 3 on host hp430a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 4 on host hp430a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 5 on host hp430a
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 6 on host hp430b
</span><br>
<span class="quotelev1">&gt; Hello world!  I am process number: 7 on host hp430b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks so much for all the answers/suggestions. I am excited now :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 7, 2012, at 3:06 AM, Duke wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somehow the verbose flag (-v) did not work for me. I tried --debug-daemon and got:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun --debug-daemons -np 3 --machinefile /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon was launched on hp430a - beginning to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [[34432,0],1] checking in as pid 3011 on host hp430a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stuck here&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Somehow the program got stuck when checking on hosts. The secure log on hp430a showed that mpiuser logged in just fine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tail /var/log/secure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jun  7 17:07:31 hp430a sshd[3007]: Accepted publickey for mpiuser from 192.168.0.101 port 34037 ssh2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jun  7 17:07:31 hp430a sshd[3007]: pam_unix(sshd:session): session opened for user mpiuser by (uid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea where/how/what to process/check?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/7/12 4:38 PM, Duke wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Jingha,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 6/7/12 4:28 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Duke,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Welcome to the forum.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The way openmpi schedules by default is to fill all the slots in a host, before moving on to next host.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Check this link for some info:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for quick answer. I checked the FAQ, and tried with processes more than 2, but somehow it got stalled:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --machinefile /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried --host flag and it got stalled as well:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --host hp430a,hp430b ./test/mpihello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My configuration must be wrong somewhere. Anyidea how I can check the system?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jingcha
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Thu, Jun 7, 2012 at 2:11 AM, Duke&lt;duke.lists_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Please be gentle to the newest member of openMPI, I am totally new to this field. I just built a test cluster with 3 boxes on Scientific Linux 6.2 and openMPI (Open MPI 1.5.3), and I wanted to test how the cluster works but I cant figure out what was/is happening. On my master node, I have the hostfile:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ cat .mpi_hostfile
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; # The Hostfile for Open MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fantomfs40a slots=2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hp430a slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hp430b slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To test, I used the following c code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ cat test/mpihello.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* program hello */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /* Adapted from mpihello.f by drs */
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  char hostname[256];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  gethostname(hostname,255);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;, rank, hostname);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and then compiled and ran:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpicc -o test/mpihello test/mpihello.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -np 2 --machinefile /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello world!  I am process number: 0 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello world!  I am process number: 1 on host fantomfs40a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately the result did not show what I wanted. I expected to see somethign like:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello world!  I am process number: 0 on host hp430a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello world!  I am process number: 1 on host hp430b
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anybody has any idea what I am doing wrong?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you in advance,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19477.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19475.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19474.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19475.php">TERRY DONTJE: "Re: [OMPI users] testing for openMPI"</a>
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
