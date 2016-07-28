<?
$subject_val = "[OMPI users] Running program on a cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 21:02:01 2014" -->
<!-- isoreceived="20140925010201" -->
<!-- sent="Thu, 25 Sep 2014 11:02:01 +1000" -->
<!-- isosent="20140925010201" -->
<!-- name="XingFENG" -->
<!-- email="xingfeng_at_[hidden]" -->
<!-- subject="[OMPI users] Running program on a cluster" -->
<!-- id="CAKY4v9-5eeJ_P-qsnmHHuCrOHB-0uHOhwkxyFeBsp=2qzzvHRg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Running program on a cluster<br>
<strong>From:</strong> XingFENG (<em>xingfeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-24 21:02:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25384.php">Allin Cottrell: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I got problem with running program on a cluster.
<br>
I used the following command. *my_hosts* is a file containing 3 hosts while
<br>
*testMPI* is a very simple MPI program.
<br>
==========================================
<br>
<p><p><p>*mpirun -np 2 --hostfile ./my_hosts ./testMPImpirun -np 2 --machinefile
<br>
./my_hosts ./testMPImpirun -np 2 --f ./my_hosts ./testMPI*
<br>
==========================================
<br>
<p>And the output is like this.
<br>
==========================================
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>*invalid &quot;local&quot; arg: --hostfileusage:mpiexec [-h or -help or --help]    #
<br>
get this messagempiexec -file filename             # (or -f) filename
<br>
contains XML job descriptionmpiexec [global args] [local args] executable
<br>
[args]   where global args may be      -l                           # line
<br>
labels by MPI rank      -bnr                         # MPICH1 compatibility
<br>
mode      -machinefile                 # file mapping procs to
<br>
machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
<br>
or 2-4,6       -1                           # override default of trying
<br>
1st proc locally      -ifhn                        # network interface to
<br>
use locally      -tv                          # run procs under totalview
<br>
(must be installed)      -tvsu                        # totalview startup
<br>
only      -gdb                         # run procs under gdb
<br>
-m                           # merge output lines (default with gdb)
<br>
-a                           # means assign this alias to the job
<br>
-ecfn                        # output_xml_exit_codes_filename
<br>
-recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd
<br>
daemon)      -g&lt;local arg name&gt;           # global version of local arg
<br>
(below)    and local args may be      -n &lt;n&gt; or -np &lt;n&gt;            # number
<br>
of processes to start      -wdir &lt;dirname&gt;              # working directory
<br>
to start in      -umask &lt;umask&gt;               # umask for remote
<br>
process      -path &lt;dirname&gt;              # place to look for
<br>
executables      -host &lt;hostname&gt;             # host to start on      -soft
<br>
&lt;spec&gt;                 # modifier of -n value      -arch
<br>
&lt;arch&gt;                 # arch type to start on (not implemented)
<br>
-envall                      # pass all env vars in current
<br>
environment      -envnone                     # pass no env vars
<br>
-envlist &lt;list of env var names&gt; # pass current values of these vars
<br>
-env &lt;name&gt; &lt;value&gt;          # pass this value of this env varmpiexec
<br>
[global args] [local args] executable args : [local args]
<br>
executable...mpiexec -gdba jobid                # gdb-attach to existing
<br>
jobidmpiexec -configfile filename       # filename contains cmd line segs
<br>
as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
<br>
100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
<br>
master : -n 4 -host mysmp slave*
<br>
<p>==========================================
<br>
<p><p>Another problem is that I cannot get the version of MPI. With command
<br>
mpirun --version I got
<br>
<p>==========================================
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>*invalid &quot;local&quot; arg: --versionusage:mpiexec [-h or -help or --help]    #
<br>
get this messagempiexec -file filename             # (or -f) filename
<br>
contains XML job descriptionmpiexec [global args] [local args] executable
<br>
[args]   where global args may be      -l                           # line
<br>
labels by MPI rank      -bnr                         # MPICH1 compatibility
<br>
mode      -machinefile                 # file mapping procs to
<br>
machines      -s &lt;spec&gt;                    # direct stdin to &quot;all&quot; or 1,2
<br>
or 2-4,6       -1                           # override default of trying
<br>
1st proc locally      -ifhn                        # network interface to
<br>
use locally      -tv                          # run procs under totalview
<br>
(must be installed)      -tvsu                        # totalview startup
<br>
only      -gdb                         # run procs under gdb
<br>
-m                           # merge output lines (default with gdb)
<br>
-a                           # means assign this alias to the job
<br>
-ecfn                        # output_xml_exit_codes_filename
<br>
-recvtimeout &lt;integer_val&gt;   # timeout for recvs to fail (e.g. from mpd
<br>
daemon)      -g&lt;local arg name&gt;           # global version of local arg
<br>
(below)    and local args may be      -n &lt;n&gt; or -np &lt;n&gt;            # number
<br>
of processes to start      -wdir &lt;dirname&gt;              # working directory
<br>
to start in      -umask &lt;umask&gt;               # umask for remote
<br>
process      -path &lt;dirname&gt;              # place to look for
<br>
executables      -host &lt;hostname&gt;             # host to start on      -soft
<br>
&lt;spec&gt;                 # modifier of -n value      -arch
<br>
&lt;arch&gt;                 # arch type to start on (not implemented)
<br>
-envall                      # pass all env vars in current
<br>
environment      -envnone                     # pass no env vars
<br>
-envlist &lt;list of env var names&gt; # pass current values of these vars
<br>
-env &lt;name&gt; &lt;value&gt;          # pass this value of this env varmpiexec
<br>
[global args] [local args] executable args : [local args]
<br>
executable...mpiexec -gdba jobid                # gdb-attach to existing
<br>
jobidmpiexec -configfile filename       # filename contains cmd line segs
<br>
as lines  (See User Guide for more details)Examples:   mpiexec -l -n 10 cpi
<br>
100   mpiexec -genv QPL_LICENSE 4705 -n 3 a.out   mpiexec -n 1 -host foo
<br>
master : -n 4 -host mysmp slave*
<br>
<p><p>==========================================
<br>
<p>Any help would be greatly appreciated!
<br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25385/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Previous message:</strong> <a href="25384.php">Allin Cottrell: "Re: [OMPI users] Strange affinity messages with 1.8 and torque 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
<li><strong>Reply:</strong> <a href="25386.php">XingFENG: "Re: [OMPI users] Running program on a cluster"</a>
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
