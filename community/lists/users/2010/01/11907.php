<?
$subject_val = "Re: [OMPI users] Non-homogeneous Cluster Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 08:51:22 2010" -->
<!-- isoreceived="20100128135122" -->
<!-- sent="Thu, 28 Jan 2010 06:51:11 -0700" -->
<!-- isosent="20100128135111" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Non-homogeneous Cluster Implementation" -->
<!-- id="C7E0B265-5680-4492-82E4-858CDAFDCB96_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="9b0da5ce1001272343k76d2730es5e34f6d4bc8018ff_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 08:51:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11915.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, did you remember to configure with --enable-heterogeneity?
<br>
<p>On Jan 28, 2010, at 12:43 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I'm not sure i completely understood.
</span><br>
<span class="quotelev1">&gt; Is it the case that an application compiled on the dell will not work
</span><br>
<span class="quotelev1">&gt; on the PS3 and vice versa?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this is the case, you could try this:
</span><br>
<span class="quotelev1">&gt;  shell$ mpirun -np 1 --host a app_ps3 : -np 1 --host b app_dell
</span><br>
<span class="quotelev1">&gt; where app_ps3 is your application compiled on the PS3 and a is your PS3 host,
</span><br>
<span class="quotelev1">&gt; and app_dell is your application compiled on the dell, and b is your dell host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check the MPI FAQs
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=running#mpmd-run">http://www.open-mpi.org/faq/?category=running#mpmd-run</a>
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=running#mpirun-host">http://www.open-mpi.org/faq/?category=running#mpirun-host</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 28, 2010 at 3:08 AM, Lee Manko &lt;lmanko_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OK, so please stop me if you have heard this before, but I couldn&#146;t find
</span><br>
<span class="quotelev2">&gt;&gt; anything in the archives that addressed my situation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a Beowulf cluster where ALL the node are PS3s running Yellow Dog
</span><br>
<span class="quotelev2">&gt;&gt; Linux 6.2 and a host (server) that is a Dell i686 Quad-core running Fedora
</span><br>
<span class="quotelev2">&gt;&gt; Core 12.  After a failed attempt at letting yum install openmpi, I
</span><br>
<span class="quotelev2">&gt;&gt; downloaded v1.4.1, compiled and installed on all machines (PS3s and
</span><br>
<span class="quotelev2">&gt;&gt; Dell).  I have an NSF shared directory on the host where the application
</span><br>
<span class="quotelev2">&gt;&gt; resides after building.  All nodes have access to the shared volume and they
</span><br>
<span class="quotelev2">&gt;&gt; can see any files in the shared volume.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I wrote a very simple master/slave application where the slave does a simple
</span><br>
<span class="quotelev2">&gt;&gt; computation and gets the processor name.  The slave returns both pieces of
</span><br>
<span class="quotelev2">&gt;&gt; information to the master who then simply displays it in the terminal
</span><br>
<span class="quotelev2">&gt;&gt; window.  After the slaves work on 1024 such tasks, the master exists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I run on the host, without distributing to the nodes, I use the
</span><br>
<span class="quotelev2">&gt;&gt; command:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 &#147;mpirun &#150;np 4 ./MPI_Example&#148;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Compiling and running the application on the native hardware works perfectly
</span><br>
<span class="quotelev2">&gt;&gt; (ie: compiled and run on the PS3 or compiled and run on the Dell).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, when I went to scatter the tasks to the nodes, using the following
</span><br>
<span class="quotelev2">&gt;&gt; command,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 &#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile ./MPI_Example&#148;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the application fails.  I&#146;m surmising that the issue is with running code
</span><br>
<span class="quotelev2">&gt;&gt; that was compiled for the Dell on the PS3 since the MPI_Init will launch the
</span><br>
<span class="quotelev2">&gt;&gt; application from the shared volume.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, I took the source code and compiled it on both the Dell and the PS3 and
</span><br>
<span class="quotelev2">&gt;&gt; placed the executables in /shared_volume/Dell and /shared_volume/PS3 and
</span><br>
<span class="quotelev2">&gt;&gt; added the paths to the environment variable PATH.  I tried to run the
</span><br>
<span class="quotelev2">&gt;&gt; application from the host again using the following command,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;                 &#147;mpirun &#150;np 4 &#150;hostfile mpi-hostfile &#150;wdir
</span><br>
<span class="quotelev2">&gt;&gt; /shared_volume/PS3 ./MPI_Example&#148;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hoping that the wdir would set the working directory at the time of the call
</span><br>
<span class="quotelev2">&gt;&gt; to MPI_Init() so that MPI_Init will launch the PS3 version of the
</span><br>
<span class="quotelev2">&gt;&gt; executable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the error:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could not execute the executable &#147;./MPI_Example&#148; : Exec format error
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This could mean that your PATH or executable name is wrong, or that you do
</span><br>
<span class="quotelev2">&gt;&gt; not
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; have the necessary permissions.  Please ensure that the executable is able
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; found and executed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now, I know I&#146;m gonna get some heat for this, but all of these machine use
</span><br>
<span class="quotelev2">&gt;&gt; only the root account with full root privileges, so it&#146;s not a permission
</span><br>
<span class="quotelev2">&gt;&gt; issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am sure there is simple solution to my problem.  Replacing the host with a
</span><br>
<span class="quotelev2">&gt;&gt; PS3 is not an option. Does anyone have any suggestions?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: When I get to programming the Cell BE, then I&#146;ll use the IBM Cell SDK
</span><br>
<span class="quotelev2">&gt;&gt; with its cross-compiler toolchain.
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
<li><strong>Next message:</strong> <a href="11908.php">Jeff Squyres: "Re: [OMPI users] Wrappers should put include path *after* user args"</a>
<li><strong>Previous message:</strong> <a href="11906.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>In reply to:</strong> <a href="11905.php">jody: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11915.php">Lee Manko: "Re: [OMPI users] Non-homogeneous Cluster Implementation"</a>
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
