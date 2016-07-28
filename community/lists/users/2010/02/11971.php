<?
$subject_val = "Re: [OMPI users] Non-homogeneous Cluster Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 13:23:33 2010" -->
<!-- isoreceived="20100202182333" -->
<!-- sent="Tue, 2 Feb 2010 10:23:27 -0800" -->
<!-- isosent="20100202182327" -->
<!-- name="Lee Manko" -->
<!-- email="lmanko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-homogeneous Cluster Implementation" -->
<!-- id="e33c0c7d1002021023k7e5e558en5762d8eb95722740_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="71d2d8cc1002021001s26f6092brdf3e89eb3149cfd4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Non-homogeneous Cluster Implementation<br>
<strong>From:</strong> Lee Manko (<em>lmanko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 13:23:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11972.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11970.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11970.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, I'll give it a try!
<br>
Lee Manko
<br>
<p><p><p>On Tue, Feb 2, 2010 at 10:01 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Probably the easiest solution is to tell OMPI not to use the second NIC.
</span><br>
<span class="quotelev1">&gt; For example, if that NIC is eth1, then you could do this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -mca oob_tcp_if_exclude eth1 -mca btl_tcp_if_exclude eth1 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This tells both the MPI layer and the RTE to ignore the eth1 interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Feb 2, 2010 at 10:04 AM, Lee Manko &lt;lmanko_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you Jody and Ralph.  Your suggestions got me up and running (well
</span><br>
<span class="quotelev2">&gt;&gt; sort of).  I have run into another issue that I was wondering if you have
</span><br>
<span class="quotelev2">&gt;&gt; had any experience with.  My server has one NIC that is static and a second
</span><br>
<span class="quotelev2">&gt;&gt; that is DHCP on a corp network (the only way to get to the outside world).
</span><br>
<span class="quotelev2">&gt;&gt;  My scatter/gather process does not work when the second NIC is plugged in,
</span><br>
<span class="quotelev2">&gt;&gt; but does work when unplugged.  It appears to have something to do with DHCP
</span><br>
<span class="quotelev2">&gt;&gt; Discovery.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lee Manko
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan 28, 2010 at 11:53 AM, Lee Manko &lt;lmanko_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See, it was a simple thing.  Thank you for the information.  I am trying
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it now.  Have to recompile and re-install openmpi for a heterogeneous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now, knowing what to search for, I found that I can set the configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the cluster in a file that mpirun and mpiexec can read.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --app my_appfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where app file contains the same --host information.  Makes customizing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the cluster for certain applications very easy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the guidance to this MPI newbie.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lee
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 27, 2010 at 11:43 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure i completely understood.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it the case that an application compiled on the dell will not work
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the PS3 and vice versa?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If this is the case, you could try this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  shell$ mpirun -np 1 --host a app_ps3 : -np 1 --host b app_dell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; where app_ps3 is your application compiled on the PS3 and a is your PS3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and app_dell is your application compiled on the dell, and b is your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dell host.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Check the MPI FAQs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=running#mpmd-run">http://www.open-mpi.org/faq/?category=running#mpmd-run</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hope this helps
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jan 28, 2010 at 3:08 AM, Lee Manko &lt;lmanko_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; OK, so please stop me if you have heard this before, but I couldn&#146;t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; anything in the archives that addressed my situation.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I have a Beowulf cluster where ALL the node are PS3s running Yellow
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Linux 6.2 and a host (server) that is a Dell i686 Quad-core running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fedora
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Core 12.  After a failed attempt at letting yum install openmpi, I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; downloaded v1.4.1, compiled and installed on all machines (PS3s and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Dell).  I have an NSF shared directory on the host where the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; resides after building.  All nodes have access to the shared volume
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and they
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; can see any files in the shared volume.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I wrote a very simple master/slave application where the slave does a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; computation and gets the processor name.  The slave returns both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; pieces of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; information to the master who then simply displays it in the terminal
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; window.  After the slaves work on 1024 such tasks, the master exists.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; When I run on the host, without distributing to the nodes, I use the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 &#147;mpirun &#150;np 4 ./MPI_Example&#148;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Compiling and running the application on the native hardware works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perfectly
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; (ie: compiled and run on the PS3 or compiled and run on the Dell).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; However, when I went to scatter the tasks to the nodes, using the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; command,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 &#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile ./MPI_Example&#148;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; the application fails.  I&#146;m surmising that the issue is with running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; code
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; that was compiled for the Dell on the PS3 since the MPI_Init will
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launch the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; application from the shared volume.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; So, I took the source code and compiled it on both the Dell and the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS3 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; placed the executables in /shared_volume/Dell and /shared_volume/PS3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; added the paths to the environment variable PATH.  I tried to run the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; application from the host again using the following command,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;                 &#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile &#150;wdir
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; /shared_volume/PS3 ./MPI_Example&#148;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Hoping that the wdir would set the working directory at the time of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the call
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; to MPI_Init() so that MPI_Init will launch the PS3 version of the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; executable.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I get the error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Could not execute the executable &#147;./MPI_Example&#148; : Exec format error
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; This could mean that your PATH or executable name is wrong, or that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you do
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; have the necessary permissions.  Please ensure that the executable is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; able
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; found and executed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Now, I know I&#146;m gonna get some heat for this, but all of these machine
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; only the root account with full root privileges, so it&#146;s not a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; permission
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; issue.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I am sure there is simple solution to my problem.  Replacing the host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; PS3 is not an option. Does anyone have any suggestions?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; PS: When I get to programming the Cell BE, then I&#146;ll use the IBM Cell
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SDK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; with its cross-compiler toolchain.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11972.php">Shiqing Fan: "Re: [OMPI users] mpirun with WMI on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="11970.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11970.php">Ralph Castain: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
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
