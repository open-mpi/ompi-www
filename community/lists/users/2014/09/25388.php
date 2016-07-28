<?
$subject_val = "Re: [OMPI users] Running program on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 03:15:40 2014" -->
<!-- isoreceived="20140925071540" -->
<!-- sent="Thu, 25 Sep 2014 17:15:39 +1000" -->
<!-- isosent="20140925071539" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running program on a cluster" -->
<!-- id="CAKY4v98CoK8EFYjFxEXRfhRynXhteN+8upxDPDh2==7oJyhf1g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D0F991A7-1B94-4BCC-A0AE-87DEFAB0202F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-25 03:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25389.php">Blosch, Edwin L: "[OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Previous message:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for your reply.
<br>
<p>I am not pretty sure about the version of mpiexec. The documentation claims
<br>
that two mpi are installed, namely, OpenMPI and MPICH2.
<br>
<p>On Thu, Sep 25, 2014 at 11:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; No, it doesn't matter at all for OMPI - any order is fine. The issue I see
</span><br>
<span class="quotelev1">&gt; is that your mpiexec isn't the OMPI one, but is from someone else. I have
</span><br>
<span class="quotelev1">&gt; no idea whose mpiexec you are using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 24, 2014, at 6:38 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have found the solution. The command *mpirun -machinefile ./my_hosts -n
</span><br>
<span class="quotelev1">&gt; 3 ./testMPI* works. I think the order of arguments matters here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 25, 2014 at 11:02 AM, XingFENG &lt;xingfeng_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I got problem with running program on a cluster.
</span><br>
<span class="quotelev2">&gt;&gt; I used the following command. *my_hosts* is a file containing 3 hosts
</span><br>
<span class="quotelev2">&gt;&gt; while *testMPI* is a very simple MPI program.
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *mpirun -np 2 --hostfile ./my_hosts ./testMPImpirun -np 2 --machinefile
</span><br>
<span class="quotelev2">&gt;&gt; ./my_hosts ./testMPImpirun -np 2 --f ./my_hosts ./testMPI*
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the output is like this.
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *invalid &quot;local&quot; arg: --hostfileusage:mpiexec [-h or -help or --help]
</span><br>
<span class="quotelev2">&gt;&gt; # get this messagempiexec -file filename             # (or -f) filename
</span><br>
<span class="quotelev2">&gt;&gt; contains XML job descriptionmpiexec [global args] [local args] executable
</span><br>
<span class="quotelev2">&gt;&gt; [args]   where global args may be      -l                           # line
</span><br>
<span class="quotelev2">&gt;&gt; labels by MPI rank      -bnr                         # MPICH1 compatibility
</span><br>
<span class="quotelev2">&gt;&gt; mode      -machinefile                 # file mapping procs to
</span><br>
<span class="quotelev2">&gt;&gt; machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
</span><br>
<span class="quotelev2">&gt;&gt; or 2-4,6       -1                           # override default of trying
</span><br>
<span class="quotelev2">&gt;&gt; 1st proc locally      -ifhn                        # network interface to
</span><br>
<span class="quotelev2">&gt;&gt; use locally      -tv                          # run procs under totalview
</span><br>
<span class="quotelev2">&gt;&gt; (must be installed)      -tvsu                        # totalview startup
</span><br>
<span class="quotelev2">&gt;&gt; only      -gdb                         # run procs under
</span><br>
<span class="quotelev2">&gt;&gt; gdb      -m                           # merge output lines (default with
</span><br>
<span class="quotelev2">&gt;&gt; gdb)      -a                           # means assign this alias to the
</span><br>
<span class="quotelev2">&gt;&gt; job      -ecfn                        #
</span><br>
<span class="quotelev2">&gt;&gt; output_xml_exit_codes_filename      -recvtimeout &lt;integer_val&gt;   # timeout
</span><br>
<span class="quotelev2">&gt;&gt; for recvs to fail (e.g. from mpd daemon)      -g&lt;local arg name&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # global version of local arg (below)    and local args may be      -n &lt;n&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or -np &lt;n&gt;            # number of processes to start      -wdir
</span><br>
<span class="quotelev2">&gt;&gt; &lt;dirname&gt;              # working directory to start in      -umask
</span><br>
<span class="quotelev2">&gt;&gt; &lt;umask&gt;               # umask for remote process      -path
</span><br>
<span class="quotelev2">&gt;&gt; &lt;dirname&gt;              # place to look for executables      -host
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hostname&gt;             # host to start on      -soft &lt;spec&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # modifier of -n value      -arch &lt;arch&gt;                 # arch type to
</span><br>
<span class="quotelev2">&gt;&gt; start on (not implemented)      -envall                      # pass all env
</span><br>
<span class="quotelev2">&gt;&gt; vars in current environment      -envnone                     # pass no env
</span><br>
<span class="quotelev2">&gt;&gt; vars      -envlist &lt;list of env var names&gt; # pass current values of these
</span><br>
<span class="quotelev2">&gt;&gt; vars      -env &lt;name&gt; &lt;value&gt;          # pass this value of this env
</span><br>
<span class="quotelev2">&gt;&gt; varmpiexec [global args] [local args] executable args : [local args]
</span><br>
<span class="quotelev2">&gt;&gt; executable...mpiexec -gdba jobid                # gdb-attach to existing
</span><br>
<span class="quotelev2">&gt;&gt; jobidmpiexec -configfile filename       # filename contains cmd line segs
</span><br>
<span class="quotelev2">&gt;&gt; as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
</span><br>
<span class="quotelev2">&gt;&gt; 100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
</span><br>
<span class="quotelev2">&gt;&gt; master : -n 4 -host mysmp slave*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Another problem is that I cannot get the version of MPI. With command
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --version I got
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *invalid &quot;local&quot; arg: --versionusage:mpiexec [-h or -help or --help]    #
</span><br>
<span class="quotelev2">&gt;&gt; get this messagempiexec -file filename             # (or -f) filename
</span><br>
<span class="quotelev2">&gt;&gt; contains XML job descriptionmpiexec [global args] [local args] executable
</span><br>
<span class="quotelev2">&gt;&gt; [args]   where global args may be      -l                           # line
</span><br>
<span class="quotelev2">&gt;&gt; labels by MPI rank      -bnr                         # MPICH1 compatibility
</span><br>
<span class="quotelev2">&gt;&gt; mode      -machinefile                 # file mapping procs to
</span><br>
<span class="quotelev2">&gt;&gt; machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
</span><br>
<span class="quotelev2">&gt;&gt; or 2-4,6       -1                           # override default of trying
</span><br>
<span class="quotelev2">&gt;&gt; 1st proc locally      -ifhn                        # network interface to
</span><br>
<span class="quotelev2">&gt;&gt; use locally      -tv                          # run procs under totalview
</span><br>
<span class="quotelev2">&gt;&gt; (must be installed)      -tvsu                        # totalview startup
</span><br>
<span class="quotelev2">&gt;&gt; only      -gdb                         # run procs under
</span><br>
<span class="quotelev2">&gt;&gt; gdb      -m                           # merge output lines (default with
</span><br>
<span class="quotelev2">&gt;&gt; gdb)      -a                           # means assign this alias to the
</span><br>
<span class="quotelev2">&gt;&gt; job      -ecfn                        #
</span><br>
<span class="quotelev2">&gt;&gt; output_xml_exit_codes_filename      -recvtimeout &lt;integer_val&gt;   # timeout
</span><br>
<span class="quotelev2">&gt;&gt; for recvs to fail (e.g. from mpd daemon)      -g&lt;local arg name&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # global version of local arg (below)    and local args may be      -n &lt;n&gt;
</span><br>
<span class="quotelev2">&gt;&gt; or -np &lt;n&gt;            # number of processes to start      -wdir
</span><br>
<span class="quotelev2">&gt;&gt; &lt;dirname&gt;              # working directory to start in      -umask
</span><br>
<span class="quotelev2">&gt;&gt; &lt;umask&gt;               # umask for remote process      -path
</span><br>
<span class="quotelev2">&gt;&gt; &lt;dirname&gt;              # place to look for executables      -host
</span><br>
<span class="quotelev2">&gt;&gt; &lt;hostname&gt;             # host to start on      -soft &lt;spec&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # modifier of -n value      -arch &lt;arch&gt;                 # arch type to
</span><br>
<span class="quotelev2">&gt;&gt; start on (not implemented)      -envall                      # pass all env
</span><br>
<span class="quotelev2">&gt;&gt; vars in current environment      -envnone                     # pass no env
</span><br>
<span class="quotelev2">&gt;&gt; vars      -envlist &lt;list of env var names&gt; # pass current values of these
</span><br>
<span class="quotelev2">&gt;&gt; vars      -env &lt;name&gt; &lt;value&gt;          # pass this value of this env
</span><br>
<span class="quotelev2">&gt;&gt; varmpiexec [global args] [local args] executable args : [local args]
</span><br>
<span class="quotelev2">&gt;&gt; executable...mpiexec -gdba jobid                # gdb-attach to existing
</span><br>
<span class="quotelev2">&gt;&gt; jobidmpiexec -configfile filename       # filename contains cmd line segs
</span><br>
<span class="quotelev2">&gt;&gt; as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
</span><br>
<span class="quotelev2">&gt;&gt; 100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
</span><br>
<span class="quotelev2">&gt;&gt; master : -n 4 -host mysmp slave*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==========================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards.
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; Xing FENG
</span><br>
<span class="quotelev2">&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt;&gt; Database Research Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25386.php">http://www.open-mpi.org/community/lists/users/2014/09/25386.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25387.php">http://www.open-mpi.org/community/lists/users/2014/09/25387.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25388/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25389.php">Blosch, Edwin L: "[OMPI users] Application hangs in 1.8.1 related to collective operations"</a>
<li><strong>Previous message:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25387.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25390.php">Ralph Castain: "Re: [OMPI users] Running program on a cluster"</a>
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
