<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 12:31:21 2009" -->
<!-- isoreceived="20090401163121" -->
<!-- sent="Thu, 2 Apr 2009 00:31:15 +0800" -->
<!-- isosent="20090401163115" -->
<!-- name="PN" -->
<!-- email="poknam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="92daa7bf0904010931j6ecd1d96oc8409d53cbd4aeeb_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49D367AE.7000200_at_Sun.COM" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour of SGE+OpenMPI<br>
<strong>From:</strong> PN (<em>poknam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-01 12:31:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8719.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. I've tried your suggestion.
<br>
<p>$ cat hpl-8cpu-test.sge
<br>
#!/bin/bash
<br>
#
<br>
#$ -N HPL_8cpu_GB
<br>
#$ -pe orte 8
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -S /bin/bash
<br>
#$ -V
<br>
#
<br>
/opt/openmpi-gcc/bin/mpirun -mca ras_gridengine_verbose 100 -v -np $NSLOTS
<br>
--host node0001,node0002 hostname
<br>
<p><p>It allocated 2 nodes to run, however all the processes are spawned in
<br>
node0001.
<br>
<p>$ qstat -f
<br>
queuename                      qtype resv/used/tot. load_avg arch
<br>
states
<br>
---------------------------------------------------------------------------------
<br>
all.q_at_[hidden]   BIPC  0/4/4          4.79     lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;45 0.55500 HPL_8cpu_G admin        r     04/02/2009 00:26:49     4
<br>
---------------------------------------------------------------------------------
<br>
all.q_at_[hidden]   BIPC  0/4/4          0.00     lx24-amd64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;45 0.55500 HPL_8cpu_G admin        r     04/02/2009 00:26:49     4
<br>
<p><p>$ cat HPL_8cpu_GB.o45
<br>
[node0001:03194] ras:gridengine: JOB_ID: 45
<br>
[node0001:03194] ras:gridengine: node0001.v5cluster.com: PE_HOSTFILE shows
<br>
slots=4
<br>
[node0001:03194] ras:gridengine: node0002.v5cluster.com: PE_HOSTFILE shows
<br>
slots=4
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
<p>$ qconf -sq all.q
<br>
qname                 all.q
<br>
hostlist              @allhosts
<br>
seq_no                0
<br>
load_thresholds       np_load_avg=1.75
<br>
suspend_thresholds    NONE
<br>
nsuspend              1
<br>
suspend_interval      00:05:00
<br>
priority              0
<br>
min_cpu_interval      00:01:00
<br>
processors            UNDEFINED
<br>
qtype                 BATCH INTERACTIVE
<br>
ckpt_list             blcr
<br>
pe_list               make mpi-rr mpi-fu orte
<br>
rerun                 FALSE
<br>
slots                 4,[node0001=4],[node0002=4]
<br>
tmpdir                /tmp
<br>
shell                 /bin/sh
<br>
prolog                NONE
<br>
epilog                NONE
<br>
shell_start_mode      posix_compliant
<br>
starter_method        NONE
<br>
suspend_method        NONE
<br>
resume_method         NONE
<br>
terminate_method      NONE
<br>
notify                00:00:60
<br>
owner_list            NONE
<br>
user_lists            NONE
<br>
xuser_lists           NONE
<br>
subordinate_list      NONE
<br>
complex_values        NONE
<br>
projects              NONE
<br>
xprojects             NONE
<br>
calendar              NONE
<br>
initial_state         default
<br>
s_rt                  INFINITY
<br>
h_rt                  INFINITY
<br>
s_cpu                 INFINITY
<br>
h_cpu                 INFINITY
<br>
s_fsize               INFINITY
<br>
h_fsize               INFINITY
<br>
s_data                INFINITY
<br>
h_data                INFINITY
<br>
s_stack               INFINITY
<br>
h_stack               INFINITY
<br>
s_core                INFINITY
<br>
h_core                INFINITY
<br>
s_rss                 INFINITY
<br>
h_rss                 INFINITY
<br>
s_vmem                INFINITY
<br>
h_vmem                INFINITY
<br>
<p>$ qconf -se node0001
<br>
hostname              node0001.v5cluster.com
<br>
load_scaling          NONE
<br>
complex_values        slots=4
<br>
load_values           arch=lx24-amd64,num_proc=4,mem_total=3949.597656M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swap_total=0.000000M,virtual_total=3949.597656M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;load_avg=2.800000,load_short=0.220000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;load_medium=2.800000,load_long=2.320000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem_free=3818.746094M,swap_free=0.000000M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;virtual_free=3818.746094M,mem_used=130.851562M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swap_used=0.000000M,virtual_used=130.851562M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu=0.000000,np_load_avg=0.700000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np_load_short=0.055000,np_load_medium=0.700000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np_load_long=0.580000
<br>
processors            4
<br>
user_lists            NONE
<br>
xuser_lists           NONE
<br>
projects              NONE
<br>
xprojects             NONE
<br>
usage_scaling         NONE
<br>
report_variables      NONE
<br>
<p>$ qconf -se node0002
<br>
hostname              node0002.v5cluster.com
<br>
load_scaling          NONE
<br>
complex_values        slots=4
<br>
load_values           arch=lx24-amd64,num_proc=4,mem_total=3949.597656M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swap_total=0.000000M,virtual_total=3949.597656M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;load_avg=0.000000,load_short=0.000000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;load_medium=0.000000,load_long=0.000000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mem_free=3843.074219M,swap_free=0.000000M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;virtual_free=3843.074219M,mem_used=106.523438M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swap_used=0.000000M,virtual_used=106.523438M, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cpu=0.000000,np_load_avg=0.000000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np_load_short=0.000000,np_load_medium=0.000000, \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;np_load_long=0.000000
<br>
processors            4
<br>
user_lists            NONE
<br>
xuser_lists           NONE
<br>
projects              NONE
<br>
xprojects             NONE
<br>
usage_scaling         NONE
<br>
report_variables      NONE
<br>
<p><p><p>2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; It turns out that the use of --host and --hostfile act as a filter of which
</span><br>
<span class="quotelev1">&gt; nodes to run on when you are running under SGE.  So, listing them several
</span><br>
<span class="quotelev1">&gt; times does not affect where the processes land.  However, this still does
</span><br>
<span class="quotelev1">&gt; not explain why you are seeing what you are seeing.  One thing you can try
</span><br>
<span class="quotelev1">&gt; is to add this to the mpirun command.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -mca ras_gridengine_verbose 100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This will provide some additional information as to what Open MPI is seeing
</span><br>
<span class="quotelev1">&gt; as nodes and slots from SGE.  (Is there any chance that node0002 actually
</span><br>
<span class="quotelev1">&gt; has 8 slots?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just retried on my cluster of 2 CPU sparc solaris nodes.  When I run with
</span><br>
<span class="quotelev1">&gt; np=2, the two MPI processes will all land on a single node, because that
</span><br>
<span class="quotelev1">&gt; node has two slots.  When I go up to np=4, then they move on to the other
</span><br>
<span class="quotelev1">&gt; node.  The --host acts as a filter to where they should run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In terms of the using &quot;IB bonding&quot;, I do not know what that means exactly.
</span><br>
<span class="quotelev1">&gt;  Open MPI does stripe over multiple IB interfaces, so I think the answer is
</span><br>
<span class="quotelev1">&gt; yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS:  Here is what my np=4 job script looked like.  (I just changed np=2 for
</span><br>
<span class="quotelev1">&gt; the other run)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  burl-ct-280r-0 148 =&gt;more run.sh
</span><br>
<span class="quotelev1">&gt; #! /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -N Job1
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 200
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -l h_rt=00:20:00      # Run time (hh:mm:ss) - 10 min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo $NSLOTS
</span><br>
<span class="quotelev1">&gt; /opt/SUNWhpc/HPC8.2/sun/bin/mpirun -mca ras_gridengine_verbose 100 -v -np 4
</span><br>
<span class="quotelev1">&gt; -host burl-ct-280r-1,burl-ct-280r-0 -mca btl self,sm,tcp hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the output (somewhat truncated)
</span><br>
<span class="quotelev1">&gt;  burl-ct-280r-0 150 =&gt;more Job1.o199
</span><br>
<span class="quotelev1">&gt; 200
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: JOB_ID: 199
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: PE_HOSTFILE:
</span><br>
<span class="quotelev1">&gt; /ws/ompi-tools/orte/sge/sge6_2u1/default/spool/burl-ct-280r-2/active_jobs/199.1/pe_hostfile
</span><br>
<span class="quotelev1">&gt; [..snip..]
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-0: PE_HOSTFILE shows
</span><br>
<span class="quotelev1">&gt; slots=2
</span><br>
<span class="quotelev1">&gt; [burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-1: PE_HOSTFILE shows
</span><br>
<span class="quotelev1">&gt; slots=2
</span><br>
<span class="quotelev1">&gt; [..snip..]
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-1
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-1
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0
</span><br>
<span class="quotelev1">&gt; burl-ct-280r-0
</span><br>
<span class="quotelev1">&gt;  burl-ct-280r-0 151 =&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 03/31/09 22:39, PN wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reply.
</span><br>
<span class="quotelev2">&gt;&gt; I've created another PE and changed the submission script, explicitly
</span><br>
<span class="quotelev2">&gt;&gt; specify the hostname with &quot;--host&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; However the result is the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # qconf -sp orte
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            orte
</span><br>
<span class="quotelev2">&gt;&gt; slots              8
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat hpl-8cpu-test.sge
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N HPL_8cpu_GB
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe orte 8
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -V
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS --host
</span><br>
<span class="quotelev2">&gt;&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
</span><br>
<span class="quotelev2">&gt;&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # pdsh -a ps ax --width=200|grep hpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18901 ?        S      0:00 /opt/openmpi-gcc/bin/mpirun -v -np 8
</span><br>
<span class="quotelev2">&gt;&gt; --host
</span><br>
<span class="quotelev2">&gt;&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
</span><br>
<span class="quotelev2">&gt;&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18902 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18903 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18904 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18905 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18906 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18907 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18908 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt; node0002: 18909 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any hint to debug this situation?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, if I have 2 IB ports in each node, which IB bonding was done, will
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI automatically benefit from the double bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; PN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden] &lt;mailto:
</span><br>
<span class="quotelev2">&gt;&gt; Rolf.Vandevaart_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    On 03/31/09 11:43, PN wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt;        I have 2 compute nodes for testing, each node has a single quad
</span><br>
<span class="quotelev2">&gt;&gt;        core CPU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Here is my submission script and PE config:
</span><br>
<span class="quotelev2">&gt;&gt;        $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev2">&gt;&gt;        #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -pe mpi-fu 8
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;        #$ -V
</span><br>
<span class="quotelev2">&gt;&gt;        #
</span><br>
<span class="quotelev2">&gt;&gt;        cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev2">&gt;&gt;        # For IB
</span><br>
<span class="quotelev2">&gt;&gt;        /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;        $TMPDIR/machines ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I've tested the mpirun command can be run correctly in command
</span><br>
<span class="quotelev2">&gt;&gt; line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        $ qconf -sp mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt;        pe_name            mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt;        slots              8
</span><br>
<span class="quotelev2">&gt;&gt;        user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt;        xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt;        start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt;        stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev2">&gt;&gt;        allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt;        control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt;        job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt;        urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt;        accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        I've checked the $TMPDIR/machines after submit, it was correct.
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0002
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;        node0001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev2">&gt;&gt;        $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a
</span><br>
<span class="quotelev2">&gt;&gt;        single node, i.e. node0002.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line
</span><br>
<span class="quotelev2">&gt;&gt;        mpirun, i.e.
</span><br>
<span class="quotelev2">&gt;&gt;        /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS
</span><br>
<span class="quotelev2">&gt;&gt;        ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        The mpi processes can start correctly, 4 processes in node0001
</span><br>
<span class="quotelev2">&gt;&gt;        and 4 processes in node0002.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Is this normal behaviour of Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I just tried it both ways and I got the same result both times.  The
</span><br>
<span class="quotelev2">&gt;&gt;    processes are split between the nodes.  Perhaps to be extra sure,
</span><br>
<span class="quotelev2">&gt;&gt;    you can just run hostname?  And for what it is worth, as you have
</span><br>
<span class="quotelev2">&gt;&gt;    seen, you do not need to specify a machines file.  Open MPI will use
</span><br>
<span class="quotelev2">&gt;&gt;    the ones that were allocated by SGE.  You can also change your
</span><br>
<span class="quotelev2">&gt;&gt;    parallel queue to not run any scripts.  Like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    start_proc_args    /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;    stop_proc_args     /bin/true
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Also, I wondered if I have IB interface, for example, the
</span><br>
<span class="quotelev2">&gt;&gt;        hostname of IB become node0001-clust and node0002-clust, will
</span><br>
<span class="quotelev2">&gt;&gt;        Open MPI automatically use the IB interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Yes, it should use the IB interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        How about if I have 2 IB ports in each node, which IB bonding
</span><br>
<span class="quotelev2">&gt;&gt;        was done, will Open MPI automatically benefit from the double
</span><br>
<span class="quotelev2">&gt;&gt;        bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;        PN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    --
</span><br>
<span class="quotelev2">&gt;&gt;    =========================
</span><br>
<span class="quotelev2">&gt;&gt;    rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    781-442-3043
</span><br>
<span class="quotelev2">&gt;&gt;    =========================
</span><br>
<span class="quotelev2">&gt;&gt;    _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;    users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;    users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8718/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8719.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="8717.php">Alessandro Surace: "[OMPI users] mpirun: symbol lookup error: /usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
