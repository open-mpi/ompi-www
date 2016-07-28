<?
$subject_val = "Re: [OMPI users] Running program on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 07:38:57 2014" -->
<!-- isoreceived="20140925113857" -->
<!-- sent="Thu, 25 Sep 2014 04:38:53 -0700" -->
<!-- isosent="20140925113853" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running program on a cluster" -->
<!-- id="ACCB1D69-84B5-4BE2-95B9-D614D7B11951_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKY4v9_OJEdwUL_uiqQjZi=SnOEKxCL1fhb55Eg=g5qG1EjQAw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-25 07:38:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25393.php">Amos Anderson: "[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?"</a>
<li><strong>Previous message:</strong> <a href="25391.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25391.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I imagine you must have a system admin down there - perhaps you should ask for their help in finding the OMPI installation. Such systems often use &quot;modules&quot; to assist in setting up paths. I'm afraid I can't really help you find it, all I can do is tell you that you are using the MPICH version.
<br>
<p>On Sep 25, 2014, at 4:33 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It returns /usr/bin/mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 25, 2014 at 8:57 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Do &quot;which mpiexec&quot; and look at the path. The options you show are from MPICH, not OMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 25, 2014, at 12:15 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am not pretty sure about the version of mpiexec. The documentation claims that two mpi are installed, namely, OpenMPI and MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 25, 2014 at 11:45 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No, it doesn't matter at all for OMPI - any order is fine. The issue I see is that your mpiexec isn't the OMPI one, but is from someone else. I have no idea whose mpiexec you are using
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2014, at 6:38 PM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have found the solution. The command mpirun -machinefile ./my_hosts -n 3 ./testMPI works. I think the order of arguments matters here.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep 25, 2014 at 11:02 AM, XingFENG &lt;xingfeng_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got problem with running program on a cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I used the following command. my_hosts is a file containing 3 hosts while testMPI is a very simple MPI program.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --hostfile ./my_hosts ./testMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --machinefile ./my_hosts ./testMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --f ./my_hosts ./testMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And the output is like this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invalid &quot;local&quot; arg: --hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usage:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [-h or -help or --help]    # get this message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -file filename             # (or -f) filename contains XML job description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [global args] [local args] executable [args]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    where global args may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -l                           # line labels by MPI rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -bnr                         # MPICH1 compatibility mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -machinefile                 # file mapping procs to machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2 or 2-4,6 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -1                           # override default of trying 1st proc locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -ifhn                        # network interface to use locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -tv                          # run procs under totalview (must be installed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -tvsu                        # totalview startup only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -gdb                         # run procs under gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -m                           # merge output lines (default with gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -a                           # means assign this alias to the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -ecfn                        # output_xml_exit_codes_filename
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd daemon)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -g&lt;local arg name&gt;           # global version of local arg (below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and local args may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -n &lt;n&gt; or -np &lt;n&gt;            # number of processes to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -wdir &lt;dirname&gt;              # working directory to start in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -umask &lt;umask&gt;               # umask for remote process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -path &lt;dirname&gt;              # place to look for executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -host &lt;hostname&gt;             # host to start on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -soft &lt;spec&gt;                 # modifier of -n value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -arch &lt;arch&gt;                 # arch type to start on (not implemented)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envall                      # pass all env vars in current environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envnone                     # pass no env vars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envlist &lt;list of env var names&gt; # pass current values of these vars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -env &lt;name&gt; &lt;value&gt;          # pass this value of this env var
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [global args] [local args] executable args : [local args] executable...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -gdba jobid                # gdb-attach to existing jobid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -configfile filename       # filename contains cmd line segs as lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   (See User Guide for more details)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -l -n 10 cpi 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -genv QPL_LICENSE 4705 -n 3 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -n 1 -host foo master : -n 4 -host mysmp slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another problem is that I cannot get the version of MPI. With command mpirun --version I got
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; invalid &quot;local&quot; arg: --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; usage:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [-h or -help or --help]    # get this message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -file filename             # (or -f) filename contains XML job description
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [global args] [local args] executable [args]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    where global args may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -l                           # line labels by MPI rank
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -bnr                         # MPICH1 compatibility mode
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -machinefile                 # file mapping procs to machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2 or 2-4,6 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -1                           # override default of trying 1st proc locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -ifhn                        # network interface to use locally
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -tv                          # run procs under totalview (must be installed)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -tvsu                        # totalview startup only
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -gdb                         # run procs under gdb
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -m                           # merge output lines (default with gdb)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -a                           # means assign this alias to the job
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -ecfn                        # output_xml_exit_codes_filename
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd daemon)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -g&lt;local arg name&gt;           # global version of local arg (below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     and local args may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -n &lt;n&gt; or -np &lt;n&gt;            # number of processes to start
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -wdir &lt;dirname&gt;              # working directory to start in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -umask &lt;umask&gt;               # umask for remote process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -path &lt;dirname&gt;              # place to look for executables
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -host &lt;hostname&gt;             # host to start on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -soft &lt;spec&gt;                 # modifier of -n value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -arch &lt;arch&gt;                 # arch type to start on (not implemented)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envall                      # pass all env vars in current environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envnone                     # pass no env vars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -envlist &lt;list of env var names&gt; # pass current values of these vars
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       -env &lt;name&gt; &lt;value&gt;          # pass this value of this env var
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec [global args] [local args] executable args : [local args] executable...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -gdba jobid                # gdb-attach to existing jobid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpiexec -configfile filename       # filename contains cmd line segs as lines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   (See User Guide for more details)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -l -n 10 cpi 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -genv QPL_LICENSE 4705 -n 3 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpiexec -n 1 -host foo master : -n 4 -host mysmp slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==========================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help would be greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best Regards.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Xing FENG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Database Research Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of New South Wales
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25386.php">http://www.open-mpi.org/community/lists/users/2014/09/25386.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25387.php">http://www.open-mpi.org/community/lists/users/2014/09/25387.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25388.php">http://www.open-mpi.org/community/lists/users/2014/09/25388.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25390.php">http://www.open-mpi.org/community/lists/users/2014/09/25390.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25391.php">http://www.open-mpi.org/community/lists/users/2014/09/25391.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25392/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25393.php">Amos Anderson: "[OMPI users] Binary distribution of my program possible using OpenMPI+Torque?"</a>
<li><strong>Previous message:</strong> <a href="25391.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>In reply to:</strong> <a href="25391.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
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
