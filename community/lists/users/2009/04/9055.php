<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 04:16:14 2009" -->
<!-- isoreceived="20090423081614" -->
<!-- sent="Thu, 23 Apr 2009 10:16:07 +0200" -->
<!-- isosent="20090423081607" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="9b0da5ce0904230116t729b3b25q679c5a5647849cb8_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="op.ustvnqo9hvmlko_at_girasole.cluster.mkem.uu.se" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 04:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9054.php">Katz, Jacob: "[OMPI users] Launching MPI app manually when rsh/ssh can't be used..."</a>
<li><strong>In reply to:</strong> <a href="9051.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9071.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
Thanks for all the input.
<br>
<p>I have not gotten around to try any of the tools (Sun Studio, Tau or vprof).
<br>
Actually, i can't compile vprof - make fails with
<br>
&nbsp;&nbsp;exec.cc: In static member function &#145;static void
<br>
BFDExecutable::find_address_in_section(bfd*, asection*, void*)&#146;:
<br>
&nbsp;&nbsp;exec.cc:144: error: &#145;bfd_get_section_size_before_reloc&#146; was not
<br>
declared in this scope
<br>
Does anybody have an idea how to get around this problem?
<br>
<p>Anyway, the GMON_OUT_PREFIX hint was very helpful - thanks, Jason!
<br>
<p>If i  get vprof or one of the other tools running, i'll write something up -
<br>
perhaps the profiling subject would be worthy for a FAQ entry...
<br>
<p>Thanks
<br>
&nbsp;&nbsp;Jody
<br>
<p>On Thu, Apr 23, 2009 at 9:12 AM, Daniel Sp&#229;ngberg &lt;daniels_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have used vprof, which is free, and also works well with openmpi:
</span><br>
<span class="quotelev1">&gt; <a href="http://sourceforge.net/projects/vprof/">http://sourceforge.net/projects/vprof/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One might need slight code modifications to get output, depending on
</span><br>
<span class="quotelev1">&gt; compilers used, such as adding
</span><br>
<span class="quotelev1">&gt; vmon_begin();
</span><br>
<span class="quotelev1">&gt; to start profiling and
</span><br>
<span class="quotelev1">&gt; vmon_done_task(rank);
</span><br>
<span class="quotelev1">&gt; to end profiling where rank is the MPI rank integer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vprof can also use papi, but I have not (yet) tried this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Den 2009-04-23 02:00:01 skrev Brock Palen &lt;brockp_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a tool (not free) &#160;That I have liked that works great with OMPI,
</span><br>
<span class="quotelev2">&gt;&gt; and can use gprof information.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.allinea.com/index.php?page=74">http://www.allinea.com/index.php?page=74</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also I am not sure but Tau (which is free) &#160;Might support some gprof
</span><br>
<span class="quotelev2">&gt;&gt; hooks.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cs.uoregon.edu/research/tau/home.php">http://www.cs.uoregon.edu/research/tau/home.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2009, at 7:37 PM, jgans wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes you can profile MPI applications by compiling with -pg. However, by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; default each process will produce an output file called &quot;gmon.out&quot;, which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a problem if all processes are writing to the same global file system (i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all processes will try to write to the same file).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is an undocumented feature of gprof that allows you to specify the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; filename for profiling output via the environment variable GMON_OUT_PREFIX.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, one can set this variable in the .bashrc file for every node to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; insure unique profile filenames, i.e.:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The filename will appear as GMON_OUT_PREFIX.pid, where pid is the process
</span><br>
<span class="quotelev3">&gt;&gt;&gt; id on a given node (so this will work when multiple nodes are contained in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single host).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tiago Almeida wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've never done this, but I believe that an executable compiled with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; profilling support (-pg) will generate the gmon.out file in its current
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directory, regardless of running under MPI or not. So I think that you'll
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have a gmon.out on each node and therefore you can &quot;gprof&quot; them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; independently.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tiago Almeida
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when profiling a normal application:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - compile everything with option -pg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - run application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - call gprof
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; whether this is the data for node 0 only or accumulated for all nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#160;Jody
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt; Materialkemi
</span><br>
<span class="quotelev1">&gt; Uppsala Universitet
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
<li><strong>Next message:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Previous message:</strong> <a href="9054.php">Katz, Jacob: "[OMPI users] Launching MPI app manually when rsh/ssh can't be used..."</a>
<li><strong>In reply to:</strong> <a href="9051.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9056.php">Daniel Spångberg: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9071.php">Eugene Loh: "Re: [OMPI users] Open-MPI and gprof"</a>
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
