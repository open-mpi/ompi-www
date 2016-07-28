<?
$subject_val = "Re: [OMPI users] Odd pipe error";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 17 14:23:58 2015" -->
<!-- isoreceived="20151017182358" -->
<!-- sent="Sat, 17 Oct 2015 14:23:51 -0400" -->
<!-- isosent="20151017182351" -->
<!-- name="Ray Sheppard" -->
<!-- email="rsheppar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd pipe error" -->
<!-- id="56229237.6060001_at_iu.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="30955cf8caf047738a80b373d517b954_at_bl-cci-exch02.ads.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd pipe error<br>
<strong>From:</strong> Ray Sheppard (<em>rsheppar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-17 14:23:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
<li><strong>Previous message:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe in reply to:</strong> <a href="27890.php">Ray Sheppard: "[OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I was afraid that there wasn't a &quot;oh we started...&quot;  For what it is 
<br>
worth, everything up to and including 1.7.x shows the same sort of 
<br>
failure.  The trouble with Jaguar is that they actually embed their own 
<br>
version of everything inside their code.  I once took on the task of 
<br>
swapping out the embedded version with a newer one. That turned out to 
<br>
be much more difficult than one would think.  So, now I support a 
<br>
version for the general public (currently 1.8.4) and one for them.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ray
<br>
<p>On 10/17/2015 12:20 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I&#146;m not sure there is a way to do it - that&#146;s a pretty old version, and the RTE in it is completely different. So entirely possible that something in the update exposed a problem that no longer works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Out of curiosity: I&#146;m unaware of any changes in the MPI definitions (there were extensions, but no breakage). So why can&#146;t you just build the old packages against 1.8.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 17, 2015, at 7:29 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;   We run a Cray XE/XT-7.  For normal (ESM) use, Cray supplies integrated MPI libraries.  However, for cluster compatibility mode, we build OpenMPI to use.  Generally we use 1.8.4 but some old packages, like Jaguar, are tied to an old version (1.4.5).  At the last maint, they all started breaking so I rebuilt them.  Version 1.8.4 rebuilt fine and runs fine.  However, even a simple application, recompiled by the new package, fails in 1.4.5 with the error below.  I have tried a number of different configure options.   The current one follows this note.  I am hoping someone could tell what needs to be done to 1.4.5 to build the way 1.8.4 did (i.e. without the pipe error).  Thanks in advance for any insights.
</span><br>
<span class="quotelev2">&gt;&gt;                Ray
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure CXX=g++ CC=gcc FC=gfortran CFLAGS=&quot;-O2&quot; F77=gfortran FCFLAGS=&quot;-O2&quot; --enable-shared --enable-static  --with-tm=no --with-threads=posix  --without-openib --enable-mca-no-build=btl-openib --with-gnu-ld --prefix=/N/soft/cle5/openmpi/gnu/1.4.5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :~/testdir&gt; !mpirun
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 -machinefile test_machine hellompi
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev2">&gt;&gt; Node: nid00819
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27890.php">http://www.open-mpi.org/community/lists/users/2015/10/27890.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27891.php">http://www.open-mpi.org/community/lists/users/2015/10/27891.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
<li><strong>Previous message:</strong> <a href="27891.php">Ralph Castain: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>Maybe in reply to:</strong> <a href="27890.php">Ray Sheppard: "[OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
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
