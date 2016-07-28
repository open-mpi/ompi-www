<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 19:37:14 2009" -->
<!-- isoreceived="20090422233714" -->
<!-- sent="Wed, 22 Apr 2009 17:37:05 -0600" -->
<!-- isosent="20090422233705" -->
<!-- name="jgans" -->
<!-- email="jgans_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="49EFAA21.6090104_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49EFA24C.10102_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI and gprof<br>
<strong>From:</strong> jgans (<em>jgans_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 19:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Yes you can profile MPI applications by compiling with -pg. However, by 
<br>
default each process will produce an output file called &quot;gmon.out&quot;, 
<br>
which is a problem if all processes are writing to the same global file 
<br>
system (i.e. all processes will try to write to the same file).
<br>
<p>There is an undocumented feature of gprof that allows you to specify the 
<br>
filename for profiling output via the environment variable 
<br>
GMON_OUT_PREFIX. For example, one can set this variable in the .bashrc 
<br>
file for every node to insure unique profile filenames, i.e.:
<br>
<p>export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
<br>
<p>The filename will appear as GMON_OUT_PREFIX.pid, where pid is the 
<br>
process id on a given node (so this will work when multiple nodes are 
<br>
contained in a single host).
<br>
<p>Regards,
<br>
<p>Jason
<br>
<p>Tiago Almeida wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I've never done this, but I believe that an executable compiled with 
</span><br>
<span class="quotelev1">&gt; profilling support (-pg) will generate the gmon.out file in its 
</span><br>
<span class="quotelev1">&gt; current directory, regardless of running under MPI or not. So I think 
</span><br>
<span class="quotelev1">&gt; that you'll have a gmon.out on each node and therefore you can &quot;gprof&quot; 
</span><br>
<span class="quotelev1">&gt; them independently.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Tiago Almeida
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev2">&gt;&gt; when profiling a normal application:
</span><br>
<span class="quotelev2">&gt;&gt; - compile everything with option -pg
</span><br>
<span class="quotelev2">&gt;&gt; - run application
</span><br>
<span class="quotelev2">&gt;&gt; - call gprof
</span><br>
<span class="quotelev2">&gt;&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev2">&gt;&gt; whether this is the data for node 0 only or accumulated for all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev2">&gt;&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;   Jody
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
<span class="quotelev2">&gt;&gt;   
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9038.php">Tiago Almeida: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
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
