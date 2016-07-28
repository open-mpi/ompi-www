<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 20:01:09 2009" -->
<!-- isoreceived="20090423000109" -->
<!-- sent="Wed, 22 Apr 2009 20:00:01 -0400" -->
<!-- isosent="20090423000001" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="7D295858-1883-4BAB-861A-BFC482ED0E14_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49EFAA21.6090104_at_lanl.gov" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 20:00:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9041.php">shan axida: "[OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a tool (not free)  That I have liked that works great with  
<br>
OMPI, and can use gprof information.
<br>
<p><a href="http://www.allinea.com/index.php?page=74">http://www.allinea.com/index.php?page=74</a>
<br>
<p>Also I am not sure but Tau (which is free)  Might support some gprof  
<br>
hooks.
<br>
<a href="http://www.cs.uoregon.edu/research/tau/home.php">http://www.cs.uoregon.edu/research/tau/home.php</a>
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 22, 2009, at 7:37 PM, jgans wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes you can profile MPI applications by compiling with -pg.  
</span><br>
<span class="quotelev1">&gt; However, by default each process will produce an output file called  
</span><br>
<span class="quotelev1">&gt; &quot;gmon.out&quot;, which is a problem if all processes are writing to the  
</span><br>
<span class="quotelev1">&gt; same global file system (i.e. all processes will try to write to  
</span><br>
<span class="quotelev1">&gt; the same file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an undocumented feature of gprof that allows you to  
</span><br>
<span class="quotelev1">&gt; specify the filename for profiling output via the environment  
</span><br>
<span class="quotelev1">&gt; variable GMON_OUT_PREFIX. For example, one can set this variable in  
</span><br>
<span class="quotelev1">&gt; the .bashrc file for every node to insure unique profile filenames,  
</span><br>
<span class="quotelev1">&gt; i.e.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The filename will appear as GMON_OUT_PREFIX.pid, where pid is the  
</span><br>
<span class="quotelev1">&gt; process id on a given node (so this will work when multiple nodes  
</span><br>
<span class="quotelev1">&gt; are contained in a single host).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jason
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tiago Almeida wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I've never done this, but I believe that an executable compiled  
</span><br>
<span class="quotelev2">&gt;&gt; with profilling support (-pg) will generate the gmon.out file in  
</span><br>
<span class="quotelev2">&gt;&gt; its current directory, regardless of running under MPI or not. So  
</span><br>
<span class="quotelev2">&gt;&gt; I think that you'll have a gmon.out on each node and therefore you  
</span><br>
<span class="quotelev2">&gt;&gt; can &quot;gprof&quot; them independently.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Tiago Almeida
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when profiling a normal application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - compile everything with option -pg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - run application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - call gprof
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whether this is the data for node 0 only or accumulated for all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9041.php">shan axida: "[OMPI users] SHARED Memory----------------"</a>
<li><strong>Previous message:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9039.php">jgans: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9051.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
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
