<?
$subject_val = "Re: [OMPI users] Odd pipe error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 13:00:28 2015" -->
<!-- isoreceived="20151112180028" -->
<!-- sent="Thu, 12 Nov 2015 10:00:20 -0800" -->
<!-- isosent="20151112180020" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd pipe error" -->
<!-- id="AFCDD195-BC7D-452A-A59F-DF0B73095259_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5644D0A7.4070801_at_iu.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-12 13:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
<li><strong>Previous message:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>In reply to:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow - glad you were able to dig that one out!!
<br>
<p><span class="quotelev1">&gt; On Nov 12, 2015, at 9:47 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;   I thought I would follow up with a solution.  It turns out there is a bug in glibc that is now exposed in old versions (pre 1.8) of OpenMPI on Cray XE systems.  Thanks to Justin Davis of Cray for figuring it out.  The simple solution is to remount /dev/pts with the gid=5 option turned on.  Then all works well again.
</span><br>
<span class="quotelev1">&gt;                  Ray
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/17/2015 12:20 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I&#146;m not sure there is a way to do it - that&#146;s a pretty old version, and the RTE in it is completely different. So entirely possible that something in the update exposed a problem that no longer works.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Out of curiosity: I&#146;m unaware of any changes in the MPI definitions (there were extensions, but no breakage). So why can&#146;t you just build the old packages against 1.8.4?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 17, 2015, at 7:29 AM, Ray Sheppard &lt;rsheppar_at_[hidden]&gt; &lt;mailto:rsheppar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  We run a Cray XE/XT-7.  For normal (ESM) use, Cray supplies integrated MPI libraries.  However, for cluster compatibility mode, we build OpenMPI to use.  Generally we use 1.8.4 but some old packages, like Jaguar, are tied to an old version (1.4.5).  At the last maint, they all started breaking so I rebuilt them.  Version 1.8.4 rebuilt fine and runs fine.  However, even a simple application, recompiled by the new package, fails in 1.4.5 with the error below.  I have tried a number of different configure options.   The current one follows this note.  I am hoping someone could tell what needs to be done to 1.4.5 to build the way 1.8.4 did (i.e. without the pipe error).  Thanks in advance for any insights.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Ray
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure CXX=g++ CC=gcc FC=gfortran CFLAGS=&quot;-O2&quot; F77=gfortran FCFLAGS=&quot;-O2&quot; --enable-shared --enable-static  --with-tm=no --with-threads=posix  --without-openib --enable-mca-no-build=btl-openib --with-gnu-ld --prefix=/N/soft/cle5/openmpi/gnu/1.4.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :~/testdir&gt; !mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 8 -machinefile test_machine hellompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to launch the specified application as it encountered an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Error: pipe function call failed when setting up I/O forwarding subsystem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: nid00819
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while attempting to start process rank 0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27890.php">http://www.open-mpi.org/community/lists/users/2015/10/27890.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27890.php">http://www.open-mpi.org/community/lists/users/2015/10/27890.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27891.php">http://www.open-mpi.org/community/lists/users/2015/10/27891.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/10/27891.php">http://www.open-mpi.org/community/lists/users/2015/10/27891.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/11/28033.php">http://www.open-mpi.org/community/lists/users/2015/11/28033.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28034/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28035.php">Ilias Miroslav: "[OMPI users] static OpenMPI with GNU"</a>
<li><strong>Previous message:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<li><strong>In reply to:</strong> <a href="28033.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
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
