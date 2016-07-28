<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 03:12:58 2009" -->
<!-- isoreceived="20090423071258" -->
<!-- sent="Thu, 23 Apr 2009 09:12:52 +0200" -->
<!-- isosent="20090423071252" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="op.ustvnqo9hvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7D295858-1883-4BAB-861A-BFC482ED0E14_at_umich.edu" -->
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
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 03:12:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have used vprof, which is free, and also works well with openmpi:
<br>
<a href="http://sourceforge.net/projects/vprof/">http://sourceforge.net/projects/vprof/</a>
<br>
<p>One might need slight code modifications to get output, depending on  
<br>
compilers used, such as adding
<br>
vmon_begin();
<br>
to start profiling and
<br>
vmon_done_task(rank);
<br>
to end profiling where rank is the MPI rank integer.
<br>
<p>vprof can also use papi, but I have not (yet) tried this.
<br>
<p>Daniel Sp&#229;ngberg
<br>
<p><p>Den 2009-04-23 02:00:01 skrev Brock Palen &lt;brockp_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; There is a tool (not free)  That I have liked that works great with  
</span><br>
<span class="quotelev1">&gt; OMPI, and can use gprof information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.allinea.com/index.php?page=74">http://www.allinea.com/index.php?page=74</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I am not sure but Tau (which is free)  Might support some gprof  
</span><br>
<span class="quotelev1">&gt; hooks.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cs.uoregon.edu/research/tau/home.php">http://www.cs.uoregon.edu/research/tau/home.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 22, 2009, at 7:37 PM, jgans wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes you can profile MPI applications by compiling with -pg. However, by  
</span><br>
<span class="quotelev2">&gt;&gt; default each process will produce an output file called &quot;gmon.out&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt; which is a problem if all processes are writing to the same global file  
</span><br>
<span class="quotelev2">&gt;&gt; system (i.e. all processes will try to write to the same file).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is an undocumented feature of gprof that allows you to specify  
</span><br>
<span class="quotelev2">&gt;&gt; the filename for profiling output via the environment variable  
</span><br>
<span class="quotelev2">&gt;&gt; GMON_OUT_PREFIX. For example, one can set this variable in the .bashrc  
</span><br>
<span class="quotelev2">&gt;&gt; file for every node to insure unique profile filenames, i.e.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The filename will appear as GMON_OUT_PREFIX.pid, where pid is the  
</span><br>
<span class="quotelev2">&gt;&gt; process id on a given node (so this will work when multiple nodes are  
</span><br>
<span class="quotelev2">&gt;&gt; contained in a single host).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jason
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tiago Almeida wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've never done this, but I believe that an executable compiled with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; profilling support (-pg) will generate the gmon.out file in its  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current directory, regardless of running under MPI or not. So I think  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that you'll have a gmon.out on each node and therefore you can &quot;gprof&quot;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; them independently.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tiago Almeida
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when profiling a normal application:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - compile everything with option -pg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - run application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - call gprof
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whether this is the data for node 0 only or accumulated for all nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Jody
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<p><p><p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9052.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9050.php">viral.vkm_at_[hidden]: "Re: [OMPI users] [Fwd: mpi alltoall memory requirement]"</a>
<li><strong>In reply to:</strong> <a href="9040.php">Brock Palen: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
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
