<?
$subject_val = "Re: [OMPI users] Running program on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 21:38:40 2014" -->
<!-- isoreceived="20140925013840" -->
<!-- sent="Thu, 25 Sep 2014 11:38:39 +1000" -->
<!-- isosent="20140925013839" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running program on a cluster" -->
<!-- id="CAKY4v99hCgSXhnS_JGnY9LFjb5nqUobUEn+QRs2Ty_MAF8Kn1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAKY4v9-5eeJ_P-qsnmHHuCrOHB-0uHOhwkxyFeBsp=2qzzvHRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running program on a cluster<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 21:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25385.php">XingFENG: "[OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25385.php">XingFENG: "[OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have found the solution. The command *mpirun -machinefile ./my_hosts -n 3
<br>
./testMPI* works. I think the order of arguments matters here.
<br>
<p>On Thu, Sep 25, 2014 at 11:02 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got problem with running program on a cluster.
</span><br>
<span class="quotelev1">&gt; I used the following command. *my_hosts* is a file containing 3 hosts
</span><br>
<span class="quotelev1">&gt; while *testMPI* is a very simple MPI program.
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *mpirun -np 2 --hostfile ./my_hosts ./testMPImpirun -np 2 --machinefile
</span><br>
<span class="quotelev1">&gt; ./my_hosts ./testMPImpirun -np 2 --f ./my_hosts ./testMPI*
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the output is like this.
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *invalid &quot;local&quot; arg: --hostfileusage:mpiexec [-h or -help or --help]    #
</span><br>
<span class="quotelev1">&gt; get this messagempiexec -file filename             # (or -f) filename
</span><br>
<span class="quotelev1">&gt; contains XML job descriptionmpiexec [global args] [local args] executable
</span><br>
<span class="quotelev1">&gt; [args]   where global args may be      -l                           # line
</span><br>
<span class="quotelev1">&gt; labels by MPI rank      -bnr                         # MPICH1 compatibility
</span><br>
<span class="quotelev1">&gt; mode      -machinefile                 # file mapping procs to
</span><br>
<span class="quotelev1">&gt; machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
</span><br>
<span class="quotelev1">&gt; or 2-4,6       -1                           # override default of trying
</span><br>
<span class="quotelev1">&gt; 1st proc locally      -ifhn                        # network interface to
</span><br>
<span class="quotelev1">&gt; use locally      -tv                          # run procs under totalview
</span><br>
<span class="quotelev1">&gt; (must be installed)      -tvsu                        # totalview startup
</span><br>
<span class="quotelev1">&gt; only      -gdb                         # run procs under gdb
</span><br>
<span class="quotelev1">&gt; -m                           # merge output lines (default with gdb)
</span><br>
<span class="quotelev1">&gt; -a                           # means assign this alias to the job
</span><br>
<span class="quotelev1">&gt; -ecfn                        # output_xml_exit_codes_filename
</span><br>
<span class="quotelev1">&gt; -recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd
</span><br>
<span class="quotelev1">&gt; daemon)      -g&lt;local arg name&gt;           # global version of local arg
</span><br>
<span class="quotelev1">&gt; (below)    and local args may be      -n &lt;n&gt; or -np &lt;n&gt;            # number
</span><br>
<span class="quotelev1">&gt; of processes to start      -wdir &lt;dirname&gt;              # working directory
</span><br>
<span class="quotelev1">&gt; to start in      -umask &lt;umask&gt;               # umask for remote
</span><br>
<span class="quotelev1">&gt; process      -path &lt;dirname&gt;              # place to look for
</span><br>
<span class="quotelev1">&gt; executables      -host &lt;hostname&gt;             # host to start on      -soft
</span><br>
<span class="quotelev1">&gt; &lt;spec&gt;                 # modifier of -n value      -arch
</span><br>
<span class="quotelev1">&gt; &lt;arch&gt;                 # arch type to start on (not implemented)
</span><br>
<span class="quotelev1">&gt; -envall                      # pass all env vars in current
</span><br>
<span class="quotelev1">&gt; environment      -envnone                     # pass no env vars
</span><br>
<span class="quotelev1">&gt; -envlist &lt;list of env var names&gt; # pass current values of these vars
</span><br>
<span class="quotelev1">&gt; -env &lt;name&gt; &lt;value&gt;          # pass this value of this env varmpiexec
</span><br>
<span class="quotelev1">&gt; [global args] [local args] executable args : [local args]
</span><br>
<span class="quotelev1">&gt; executable...mpiexec -gdba jobid                # gdb-attach to existing
</span><br>
<span class="quotelev1">&gt; jobidmpiexec -configfile filename       # filename contains cmd line segs
</span><br>
<span class="quotelev1">&gt; as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
</span><br>
<span class="quotelev1">&gt; 100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
</span><br>
<span class="quotelev1">&gt; master : -n 4 -host mysmp slave*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another problem is that I cannot get the version of MPI. With command
</span><br>
<span class="quotelev1">&gt; mpirun --version I got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *invalid &quot;local&quot; arg: --versionusage:mpiexec [-h or -help or --help]    #
</span><br>
<span class="quotelev1">&gt; get this messagempiexec -file filename             # (or -f) filename
</span><br>
<span class="quotelev1">&gt; contains XML job descriptionmpiexec [global args] [local args] executable
</span><br>
<span class="quotelev1">&gt; [args]   where global args may be      -l                           # line
</span><br>
<span class="quotelev1">&gt; labels by MPI rank      -bnr                         # MPICH1 compatibility
</span><br>
<span class="quotelev1">&gt; mode      -machinefile                 # file mapping procs to
</span><br>
<span class="quotelev1">&gt; machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
</span><br>
<span class="quotelev1">&gt; or 2-4,6       -1                           # override default of trying
</span><br>
<span class="quotelev1">&gt; 1st proc locally      -ifhn                        # network interface to
</span><br>
<span class="quotelev1">&gt; use locally      -tv                          # run procs under totalview
</span><br>
<span class="quotelev1">&gt; (must be installed)      -tvsu                        # totalview startup
</span><br>
<span class="quotelev1">&gt; only      -gdb                         # run procs under gdb
</span><br>
<span class="quotelev1">&gt; -m                           # merge output lines (default with gdb)
</span><br>
<span class="quotelev1">&gt; -a                           # means assign this alias to the job
</span><br>
<span class="quotelev1">&gt; -ecfn                        # output_xml_exit_codes_filename
</span><br>
<span class="quotelev1">&gt; -recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd
</span><br>
<span class="quotelev1">&gt; daemon)      -g&lt;local arg name&gt;           # global version of local arg
</span><br>
<span class="quotelev1">&gt; (below)    and local args may be      -n &lt;n&gt; or -np &lt;n&gt;            # number
</span><br>
<span class="quotelev1">&gt; of processes to start      -wdir &lt;dirname&gt;              # working directory
</span><br>
<span class="quotelev1">&gt; to start in      -umask &lt;umask&gt;               # umask for remote
</span><br>
<span class="quotelev1">&gt; process      -path &lt;dirname&gt;              # place to look for
</span><br>
<span class="quotelev1">&gt; executables      -host &lt;hostname&gt;             # host to start on      -soft
</span><br>
<span class="quotelev1">&gt; &lt;spec&gt;                 # modifier of -n value      -arch
</span><br>
<span class="quotelev1">&gt; &lt;arch&gt;                 # arch type to start on (not implemented)
</span><br>
<span class="quotelev1">&gt; -envall                      # pass all env vars in current
</span><br>
<span class="quotelev1">&gt; environment      -envnone                     # pass no env vars
</span><br>
<span class="quotelev1">&gt; -envlist &lt;list of env var names&gt; # pass current values of these vars
</span><br>
<span class="quotelev1">&gt; -env &lt;name&gt; &lt;value&gt;          # pass this value of this env varmpiexec
</span><br>
<span class="quotelev1">&gt; [global args] [local args] executable args : [local args]
</span><br>
<span class="quotelev1">&gt; executable...mpiexec -gdba jobid                # gdb-attach to existing
</span><br>
<span class="quotelev1">&gt; jobidmpiexec -configfile filename       # filename contains cmd line segs
</span><br>
<span class="quotelev1">&gt; as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
</span><br>
<span class="quotelev1">&gt; 100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
</span><br>
<span class="quotelev1">&gt; master : -n 4 -host mysmp slave*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==========================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Best Regards.
---
Xing FENG
PhD Candidate
Database Research Group
School of Computer Science and Engineering
University of New South Wales
NSW 2052, Sydney
Phone: (+61) 413 857 288
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25385.php">XingFENG: "[OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25385.php">XingFENG: "[OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
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
