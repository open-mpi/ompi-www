<?
$subject_val = "Re: [OMPI users] Open-MPI and gprof";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 23 06:35:19 2009" -->
<!-- isoreceived="20090423103519" -->
<!-- sent="Thu, 23 Apr 2009 12:35:13 +0200" -->
<!-- isosent="20090423103513" -->
<!-- name="Daniel Sp&#195;&#165;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI and gprof" -->
<!-- id="op.ust40zrs6tav9i_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="9b0da5ce0904230116t729b3b25q679c5a5647849cb8_at_mail.gmail.com" -->
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
<strong>From:</strong> Daniel Sp&#195;&#165;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-23 06:35:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
<li><strong>Previous message:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Regarding miscompilation of vprof and bfd_get_section_size_before_reloc.  
<br>
Simply change the call from bfd_get_section_size_before_reloc to  
<br>
bdf_get_section_size in exec.cc and recompile.
<br>
<p>Daniel Sp&#195;&#165;ngberg
<br>
<p>Den 2009-04-23 10:16:07 skrev jody &lt;jody.xha_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; Thanks for all the input.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not gotten around to try any of the tools (Sun Studio, Tau or  
</span><br>
<span class="quotelev1">&gt; vprof).
</span><br>
<span class="quotelev1">&gt; Actually, i can't compile vprof - make fails with
</span><br>
<span class="quotelev1">&gt;   exec.cc: In static member function &#226;&#128;&#152;static void
</span><br>
<span class="quotelev1">&gt; BFDExecutable::find_address_in_section(bfd*, asection*, void*)&#226;&#128;&#153;:
</span><br>
<span class="quotelev1">&gt;   exec.cc:144: error: &#226;&#128;&#152;bfd_get_section_size_before_reloc&#226;&#128;&#153; was not
</span><br>
<span class="quotelev1">&gt; declared in this scope
</span><br>
<span class="quotelev1">&gt; Does anybody have an idea how to get around this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, the GMON_OUT_PREFIX hint was very helpful - thanks, Jason!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If i  get vprof or one of the other tools running, i'll write something  
</span><br>
<span class="quotelev1">&gt; up -
</span><br>
<span class="quotelev1">&gt; perhaps the profiling subject would be worthy for a FAQ entry...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 23, 2009 at 9:12 AM, Daniel Sp&#195;&#165;ngberg &lt;daniels_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I have used vprof, which is free, and also works well with openmpi:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sourceforge.net/projects/vprof/">http://sourceforge.net/projects/vprof/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One might need slight code modifications to get output, depending on
</span><br>
<span class="quotelev2">&gt;&gt; compilers used, such as adding
</span><br>
<span class="quotelev2">&gt;&gt; vmon_begin();
</span><br>
<span class="quotelev2">&gt;&gt; to start profiling and
</span><br>
<span class="quotelev2">&gt;&gt; vmon_done_task(rank);
</span><br>
<span class="quotelev2">&gt;&gt; to end profiling where rank is the MPI rank integer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vprof can also use papi, but I have not (yet) tried this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Sp&#195;&#165;ngberg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Den 2009-04-23 02:00:01 skrev Brock Palen &lt;brockp_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a tool (not free) &#194;&#160;That I have liked that works great with  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and can use gprof information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.allinea.com/index.php?page=74">http://www.allinea.com/index.php?page=74</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also I am not sure but Tau (which is free) &#194;&#160;Might support some gprof
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hooks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cs.uoregon.edu/research/tau/home.php">http://www.cs.uoregon.edu/research/tau/home.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 22, 2009, at 7:37 PM, jgans wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yes you can profile MPI applications by compiling with -pg. However,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; default each process will produce an output file called &quot;gmon.out&quot;,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a problem if all processes are writing to the same global file system  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i.e.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all processes will try to write to the same file).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is an undocumented feature of gprof that allows you to specify  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; filename for profiling output via the environment variable  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GMON_OUT_PREFIX.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For example, one can set this variable in the .bashrc file for every  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; insure unique profile filenames, i.e.:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export GMON_OUT_PREFIX='gmon.out-'`/bin/uname -n`
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The filename will appear as GMON_OUT_PREFIX.pid, where pid is the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; id on a given node (so this will work when multiple nodes are  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contained in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; single host).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jason
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tiago Almeida wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I've never done this, but I believe that an executable compiled with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; profilling support (-pg) will generate the gmon.out file in its  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; current
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directory, regardless of running under MPI or not. So I think that  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you'll
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have a gmon.out on each node and therefore you can &quot;gprof&quot; them
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; independently.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tiago Almeida
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I wanted to profile my application using gprof, and proceeded like
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; when profiling a normal application:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - compile everything with option -pg
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - run application
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; - call gprof
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This returns a normal-looking output, but i don't know
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; whether this is the data for node 0 only or accumulated for all  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does anybody have experience in profiling parallel applications?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Is there a way to have profile data for each node separately?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; If not, is there another profiling tool which can?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &#194;&#160;Jody
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Daniel Sp&#195;&#165;ngberg
</span><br>
<span class="quotelev2">&gt;&gt; Materialkemi
</span><br>
<span class="quotelev2">&gt;&gt; Uppsala Universitet
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
<p><p><p><pre>
-- 
Daniel Sp&#195;&#165;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9057.php">Jeff Squyres: "Re: [OMPI users] Could following situations caused by RDMAmcaparameters?"</a>
<li><strong>Previous message:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="9055.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
<li><strong>Reply:</strong> <a href="9072.php">jody: "Re: [OMPI users] Open-MPI and gprof"</a>
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
