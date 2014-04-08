<?php
include_once("$topdir/software/ompi/current/version.inc");

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I run with the SGE launcher?";

$anchor[] = "run-n1ge-or-sge";

$a[] = "Support for SGE is included in Open MPI version 1.2 and
later.

<font color=red><strong>NOTE:</strong></font> To build SGE support in v1.3,
you will need to explicitly request the SGE support with the \"[--with-sge]\"
command line switch to Open MPI's [configure] script.

See <a href=\"?category=building#build-rte-sge\">this FAQ entry</a> for
a description of how to correctly build Open MPI with SGE support.

To verify if support for SGE is configured into your Open MPI
installation, run ompi_info as shown below and look for _gridengine_.
The components you will see are slightly different between v1.2 and
v1.3.

For Open MPI 1.2:
<faqcode>
shell$ ompi_info | grep gridengine
                 MCA ras: gridengine (MCA v1.0, API v1.0, Component v1.2)
                 MCA pls: gridengine (MCA v1.0, API v1.0, Component v1.2)
</faqcode>
For Open MPI 1.3:
<faqcode>
shell$ ompi_info | grep gridengine
                 MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.3)
</faqcode>
Open MPI will automatically detect when it is running inside SGE and
will just \"do the Right Thing.\"

Specifically, if you execute an [mpirun] command in a SGE job, it
will automatically use the SGE mechanisms to launch and kill
processes.  There is no need to specify what nodes to run on -- Open
MPI will obtain this information directly from SGE and default to a number
of processes equal to the slot count specified.  For example, this
will run 4 MPI processes on the nodes that were allocated by SGE:


<faqcode>
# Get the environment variables for SGE
# (Assuming SGE is installed at /opt/sge and \$SGE_CELL is 'default' in your environment)
# C shell settings
shell% source /opt/sge/default/common/settings.csh

# bourne shell settings
shell$ . /opt/sge/default/common/settings.sh

# Allocate an SGE interactive job with 4 slots from a parallel
# environment (PE) named 'orte' and run a 4-process Open MPI job
shell$ qrsh -pe orte 4 -b y mpirun -np 4 a.out
</faqcode>

There are also other ways to submit jobs under SGE:

<faqcode>
# Submit a batch job with the 'mpirun' command embedded in a script
shell$ qsub -pe orte 4 my_mpirun_job.csh

# Submit an SGE and OMPI job and mpirun in one line
shell$ qrsh -V -pe orte 4 mpirun hostname

# Use qstat(1) to show the status of SGE jobs and queues
shell$ qstat -f
</faqcode>

In reference to the setup, be sure you have a Parallel Environment
(PE) defined for submitting parallel jobs. You don't have to name your
PE \"orte\". The following example shows a PE named 'orte' that would
look like:

<faqcode>
% qconf -sp orte
   pe_name            orte
   slots              99999
   user_lists         NONE
   xuser_lists        NONE
   start_proc_args    NONE
   stop_proc_args     NONE
   allocation_rule    \$fill_up
   control_slaves     TRUE
   job_is_first_task  FALSE
   urgency_slots      min
   accounting_summary FALSE
   qsort_args         NONE

   \"qsort_args\" is necessary with the Son of Grid Engine distribution,
   version 8.1.1 and later, and probably only applicable to it.  For
   very old versions of SGE, omit \"accounting_summary\" too.

   You may want to alter other parameters, but the important one is
   \"control_slaves\", specifying that the environment has \"tight
   integration\".  Note also the lack of a start or stop procedure.
   The tight integration means that mpirun automatically picks up the
   slot count to use as a default in place of the '-np' argument,
   picks up a host file, spawns remote processes via 'qrsh' so that
   SGE can control and monitor them, and creates and destroys a
   per-job temporary directory (\$TMPDIR), in which Open MPI's
   directory will be created (by default).
 
   Be sure the queue will make use of the PE that you specified:

<faqcode>
% qconf -sq all.q
...
pe_list               make cre orte
...
</faqcode>

To determine whether the SGE parallel job is successfully launched to the remote nodes,
you can pass in the MCA parameter \"[--mca plm_base_verbose 1]\" to mpirun.

This will add in a -verbose flag to qrsh -inherit command that is used to
send parallel tasks to the remote SGE execution hosts. It will show
whether the connections to the remote hosts are established successfully or not. 

   Various SGE documentation with pointers to more is available at
<a
href=\"http://arc.liv.ac.uk/SGE/\">the Son of GridEngine site</a>, and configuration
instructions can be found at
<a
href=\"http://arc.liv.ac.uk/SGE/howto/sge-configs.html\">the Son of GridEngine configuration how-to site.</a>.

";

/////////////////////////////////////////////////////////////////////////

$q[] = "Does the SGE tight integration support the -notify flag to qsub?";

$anchor[] = "qsub-notify";

$a[] = "If you are running SGE6.2 Update 3 or later, then the -notify flag
is supported.  If you are running earlier versions, then the -notify flag
will not work and using it will cause the job to be killed.

To use -notify, one has to be a careful.  First, let us review what
-notify does.  Here is an excerpt from the qsub man page for the
-notify flag.

<dl>
<dt>-notify</dt>
<dd>
This flag, when set causes Sun Grid Engine to send <br />
warning signals to a running job prior to sending the <br />
signals themselves. If a SIGSTOP is pending, the job <br />
will receive a SIGUSR1 several seconds before the SIGSTOP. <br />
If a SIGKILL is pending, the job will receive a SIGUSR2 <br />
several seconds before the SIGKILL.  The amount of time <br />
delay is controlled by the notify parameter in each <br />
queue configuration.
</dd>
</dl>

Let us assume you the reason you want to use
the [-notify] flag is to get the SIGUSR1 signal prior to getting the
SIGTSTP signal.  As mentioned in this <a
href=\"?category=running#suspend-resume\">this FAQ entry</a> one could
run the job as shown in this batch script.

<faqcode>
#! /bin/bash
#$ -S /bin/bash
#$ -V
#$ -cwd
#$ -N Job1
#$ -pe orte 16
#$ -j y
#$ -l h_rt=00:20:00
mpirun -np 16 -mca orte_forward_job_control 1 a.out
</faqcode>

However, one has to make one of two changes to this script for things
to work properly.  By default, a SIGUSR1 signal will kill a
shell script.  So we have to make sure that does not happen. Here
is one way to handle it.

<faqcode>
#! /bin/bash
#$ -S /bin/bash
#$ -V
#$ -cwd
#$ -N Job1
#$ -pe orte 16
#$ -j y
#$ -l h_rt=00:20:00
exec mpirun -np 16 -mca orte_forward_job_control 1 a.out
</faqcode>

Alternatively, one can catch the signals in the script instead of doing
an exec on the mpirun.

<faqcode>
#! /bin/bash
#$ -S /bin/bash
#$ -V
#$ -cwd
#$ -N Job1
#$ -pe orte 16
#$ -j y
#$ -l h_rt=00:20:00
function sigusr1handler()
{
        echo \"SIGUSR1 caught by shell script\" 1>&2
}
function sigusr2handler()
{
        echo \"SIGUSR2 caught by shell script\" 1>&2
}
trap sigusr1handler SIGUSR1
trap sigusr2handler SIGUSR2
mpirun -np 16 -mca orte_forward_job_control 1 a.out
</faqcode>

";

/////////////////////////////////////////////////////////////////////////

$q[] = "Can I suspend and resume my job?";

$anchor[] = "suspend-resume";

$a[] = "A new feature was added into Open MPI 1.3.1 that supports
suspend/resume of an MPI job.  To suspend the job, you send a SIGTSTP
(not SIGSTOP) signal to [mpirun].  [mpirun] will catch this signal and
forward it to the [a.outs] as a SIGSTOP signal.  To resume the job,
you send a SIGCONT signal to [mpirun] which will be caught and
forwarded to the [a.outs].

By default, this feature is not enabled.  This means that both the
SIGTSTP and SIGCONT signals will simply be consumed by the [mpirun]
process.  To have them forwarded, you have to run the job with [--mca
orte_forward_job_control 1].  Here is an example on Solaris.

<faqcode>
shell$ mpirun -mca orte_forward_job_control 1 -np 2 a.out
</faqcode>
In another window, we suspend and continue the job.
<faqcode>
shell$ prstat -p 15301,15303,15305
   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15305 rolfv     158M   22M cpu1     0    0   0:00:21 5.9% a.out/1
 15303 rolfv     158M   22M cpu2     0    0   0:00:21 5.9% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1

shell$ kill -TSTP 15301
shell$ prstat -p 15301,15303,15305
   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15303 rolfv     158M   22M stop    30    0   0:01:44  21% a.out/1
 15305 rolfv     158M   22M stop    20    0   0:01:44  21% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1

shell$ kill -CONT 15301
shell$ prstat -p 15301,15303,15305
   PID USERNAME  SIZE   RSS STATE  PRI NICE      TIME  CPU PROCESS/NLWP
 15305 rolfv     158M   22M cpu1     0    0   0:02:06  17% a.out/1
 15303 rolfv     158M   22M cpu3     0    0   0:02:06  17% a.out/1
 15301 rolfv    8128K 5144K sleep   59    0   0:00:00 0.0% orterun/1
</faqcode>
Note that all this does is stop the [a.outs].  It does not, for example,
free any pinned memory when the job is in the suspended state.

To get this to work under the SGE environment, you have to change the
[suspend_method] entry in the queue.  It has to be set to SIGTSTP.  Here
is an example of what a queue should look like.

<faqcode>
sheel$ qconf -sq all.q
qname                 all.q
[...snip...]
starter_method        NONE
suspend_method        SIGTSTP
resume_method         NONE 
</faqcode>
Note that if you need to suspend other types of jobs with SIGSTOP
(instead of SIGTSTP) in this queue then you need to provide a script
that can implement the correct signals for each job type.
";

/////////////////////////////////////////////////////////////////////////

