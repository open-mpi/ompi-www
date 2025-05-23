<?
$subject_val = "Re: [OMPI users] testing for openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  7 06:47:27 2012" -->
<!-- isoreceived="20120607104727" -->
<!-- sent="Thu, 07 Jun 2012 06:47:28 -0400" -->
<!-- isosent="20120607104728" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] testing for openMPI" -->
<!-- id="4FD086C0.9070808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FD07D0D.2090307_at_gmx.com" -->
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
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-07 06:47:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19476.php">Jeff Squyres: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19474.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another sanity think to try is see if you can run your test program on 
<br>
just one of the nodes?  If that works more than likely MPI is having 
<br>
issues setting up connections between the nodes.
<br>
<p>--td
<br>
<p>On 6/7/2012 6:06 AM, Duke wrote:
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow the verbose flag (-v) did not work for me. I tried 
</span><br>
<span class="quotelev1">&gt; --debug-daemon and got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_fantomfs40a ~]$ mpirun --debug-daemons -np 3 --machinefile 
</span><br>
<span class="quotelev1">&gt; /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev1">&gt; Daemon was launched on hp430a - beginning to initialize
</span><br>
<span class="quotelev1">&gt; Daemon [[34432,0],1] checking in as pid 3011 on host hp430a
</span><br>
<span class="quotelev1">&gt; &lt;stuck here&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow the program got stuck when checking on hosts. The secure log 
</span><br>
<span class="quotelev1">&gt; on hp430a showed that mpiuser logged in just fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tail /var/log/secure
</span><br>
<span class="quotelev1">&gt; Jun  7 17:07:31 hp430a sshd[3007]: Accepted publickey for mpiuser from 
</span><br>
<span class="quotelev1">&gt; 192.168.0.101 port 34037 ssh2
</span><br>
<span class="quotelev1">&gt; Jun  7 17:07:31 hp430a sshd[3007]: pam_unix(sshd:session): session 
</span><br>
<span class="quotelev1">&gt; opened for user mpiuser by (uid=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea where/how/what to process/check?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 6/7/12 4:38 PM, Duke wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jingha,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 6/7/12 4:28 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Duke,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Welcome to the forum.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The way openmpi schedules by default is to fill all the slots in a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host, before moving on to next host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Check this link for some info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for quick answer. I checked the FAQ, and tried with processes 
</span><br>
<span class="quotelev2">&gt;&gt; more than 2, but somehow it got stalled:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --machinefile 
</span><br>
<span class="quotelev2">&gt;&gt; /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev2">&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried --host flag and it got stalled as well:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [mpiuser_at_fantomfs40a ~]$ mpirun -v -np 4 --host hp430a,hp430b 
</span><br>
<span class="quotelev2">&gt;&gt; ./test/mpihello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My configuration must be wrong somewhere. Anyidea how I can check the 
</span><br>
<span class="quotelev2">&gt;&gt; system?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; D.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jingcha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jun 7, 2012 at 2:11 AM, Duke &lt;duke.lists_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:duke.lists_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hi folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Please be gentle to the newest member of openMPI, I am totally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     new to this field. I just built a test cluster with 3 boxes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Scientific Linux 6.2 and openMPI (Open MPI 1.5.3), and I wanted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to test how the cluster works but I cant figure out what was/is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     happening. On my master node, I have the hostfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [mpiuser_at_fantomfs40a ~]$ cat .mpi_hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     # The Hostfile for Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     fantomfs40a slots=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hp430a slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     hp430b slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     To test, I used the following c code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [mpiuser_at_fantomfs40a ~]$ cat test/mpihello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* program hello */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /* Adapted from mpihello.f by drs */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      int *buf, i, rank, nints, len;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      char hostname[256];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      gethostname(hostname,255);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      printf(&quot;Hello world!  I am process number: %d on host %s\n&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     rank, hostname);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and then compiled and ran:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [mpiuser_at_fantomfs40a ~]$ mpicc -o test/mpihello test/mpihello.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     [mpiuser_at_fantomfs40a ~]$ mpirun -np 2 --machinefile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /home/mpiuser/.mpi_hostfile ./test/mpihello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello world!  I am process number: 0 on host fantomfs40a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello world!  I am process number: 1 on host fantomfs40a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Unfortunately the result did not show what I wanted. I expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to see somethign like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello world!  I am process number: 0 on host hp430a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hello world!  I am process number: 1 on host hp430b
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Anybody has any idea what I am doing wrong?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thank you in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19475/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19476.php">Jeff Squyres: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>Previous message:</strong> <a href="19474.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
<li><strong>In reply to:</strong> <a href="19470.php">Duke: "Re: [OMPI users] testing for openMPI"</a>
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
