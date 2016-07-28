<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan  3 08:38:55 2007" -->
<!-- isoreceived="20070103133855" -->
<!-- sent="Wed, 03 Jan 2007 06:38:48 -0700" -->
<!-- isosent="20070103133848" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted: command not found" -->
<!-- id="C1C0FFF8.6A90%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4471.201.242.105.201.1167771784.squirrel_at_belial.ula.ve" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-03 08:38:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jose
<br>
<p>Sorry for entering the discussion late. From tracing the email thread, I
<br>
somewhat gather the following:
<br>
<p>1. you have installed Open MPI 1.1.2 on two 686 boxes
<br>
<p>2. you created a hostfile on one of the nodes and execute mpirun from that
<br>
node. You gave us a prefix indicating where we should find the Open MPI
<br>
executables on each node
<br>
<p>3. you were getting an error message indicating that mpirun was unable to
<br>
find your executable
<br>
<p>4. you didn't encounter this problem when running on a cluster
<br>
<p>If I have those facts correct, then the problem is simple. My guess is that
<br>
the cluster you were using has a shared file system - hence, the remote
<br>
nodes &quot;see&quot; your executable in the same relative location across the
<br>
cluster.
<br>
<p>In your simple setup with the two boxes, it sounds like you don't have a
<br>
shared file system. When mpirun attempts to locate the executable on
<br>
bernie-3, it won't find the file since it doesn't exist on that node's file
<br>
system. Once you copied the file over to bernie-3, then mpirun could find it
<br>
so everything works fine.
<br>
<p>We hope to add file pre-positioning at some point in the future for systems
<br>
such as yours. However, that is some time away due to priorities. For now,
<br>
Open MPI requires that your executable (and the Open MPI executables and
<br>
libraries) be available on each node you are trying to use.
<br>
<p>Hope that helps to explain the problem.
<br>
Ralph
<br>
<p><p>On 1/2/07 2:03 PM, &quot;jcolmenares_at_[hidden]&quot; &lt;jcolmenares_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I had configured the hostfile located at
</span><br>
<span class="quotelev1">&gt; ~prefix/etc/openmpi-default-hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I copied the file to bernie-3, and it worked...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now, at the cluster I was working at the Universidad de Los Andes
</span><br>
<span class="quotelev1">&gt; (Venezuela) -I decided to install mpi on three machines I was able to put
</span><br>
<span class="quotelev1">&gt; together as a personal proyect- all I had to do was to compile and run my
</span><br>
<span class="quotelev1">&gt; applications, that is, I never copied any file to any other machine...
</span><br>
<span class="quotelev1">&gt; now, I had to. I'm sorry if it was obvious and made you guys loose some
</span><br>
<span class="quotelev1">&gt; time, but why on a cluster I didn't have to copy any files, and now I must
</span><br>
<span class="quotelev1">&gt; do so?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for you patiance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jose
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
<li><strong>Next message:</strong> <a href="2430.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>Previous message:</strong> <a href="2428.php">Grobe, Gary L. \(JSC-EV\)[ESCG]: "Re: [OMPI users] Ompi failing on mx only"</a>
<li><strong>In reply to:</strong> <a href="2422.php">jcolmenares_at_[hidden]: "Re: [OMPI users] orted: command not found"</a>
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
