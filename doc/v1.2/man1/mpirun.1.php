<?php
$topdir = "../../..";
$title = "mpirun(1) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       orterun,  mpirun,  mpiexec  -  Execute serial and parallel jobs in Open
       MPI.

       <B>Note:</B> <I>mpirun</I>, <I>mpiexec</I>, and <I>orterun</I> are  all  exact  synonyms  for  each
       other.   Using any of the names will result in exactly identical behav-
       ior.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       Single Process Multiple Data (SPMD) Model:

       <B>mpirun</B> [ options ] <B>&lt;program&gt;</B> [ &lt;args&gt; ]

       Multiple Instruction Multiple Data (MIMD) Model:

       <B>mpirun</B> [ global_options ]
              [ local_options1 ] <B>&lt;program1&gt;</B> [ &lt;args1&gt; ] :
              [ local_options2 ] <B>&lt;program2&gt;</B> [ &lt;args2&gt; ] :
              ... :
              [ local_optionsN ] <B>&lt;programN&gt;</B> [ &lt;argsN&gt; ]

       Note that in both models, invoking <I>mpirun</I> via an absolute path name  is
       equivalent to specifying the <I>--prefix</I> option with a <I>&lt;dir&gt;</I> value equiva-
       lent to the directory where <I>mpirun</I> resides, minus  its  last  subdirec-
       tory.  For example:

           <B>shell$</B> /usr/local/bin/mpirun ...

       is equivalent to

           <B>shell$</B> mpirun --prefix /usr/local

</PRE>
<H2>QUICK SUMMARY</H2><PRE>
       If you are simply looking for how to run an MPI application, you proba-
       bly want to use a command line of the following form:

           <B>shell$</B> mpirun [ -np X ] [ --hostfile &lt;filename&gt; ]  &lt;program&gt;

       This will run X copies of <I>&lt;program&gt;</I> in your current  run-time  environ-
       ment  (if running under a supported resource manager, Open MPI's <I>mpirun</I>
       will usually  automatically  use  the  corresponding  resource  manager
       process  starter, as opposed to, for example, <I>rsh</I> or <I>ssh</I>, which require
       the use of a hostfile, or will default to running all X copies  on  the
       localhost),  scheduling  (by  default)  in a round-robin fashion by CPU
       slot.  See the rest of this page for more details.

</PRE>
<H2>OPTIONS</H2><PRE>
       <I>mpirun</I> will send the name of the directory where it was invoked on  the
       local  node  to each of the remote nodes, and attempt to change to that
       directory.  See the "Current Working Directory" section below for  fur-
       ther details.

       <B>&lt;args&gt;</B>    Pass  these  run-time  arguments to every new process.  These
                 must always be the last arguments to <I>mpirun</I>. If an  app  con-
                 text file is used, <I>&lt;args&gt;</I> will be ignored.
                 Provide an appfile, ignoring all other command line  options.

       <B>-bynode</B>, <B>--bynode</B>
                 Allocate (map) the processes by node in a round-robin scheme.

       <B>-byslot</B>, <B>--byslot</B>
                 Allocate (map) the processes by slot in a round-robin scheme.
                 This is the default.

       <B>-c</B> &lt;#&gt;    Synonym for <I>-np</I>.

       <B>-debug</B>, <B>--debug</B>
                 Invoke    the    user-level   debugger   indicated   by   the
                 <I>orte</I><B>_</B><I>base</I><B>_</B><I>user</I><B>_</B><I>debugger</I> MCA parameter.

       <B>-debugger</B>, <B>--debugger</B>
                 Sequence of debuggers to search  for  when  <I>--debug</I>  is  used
                 (i.e.   a synonym for <I>orte</I><B>_</B><I>base</I><B>_</B><I>user</I><B>_</B><I>debugger</I> MCA parameter).

       <B>-gmca</B>, <B>--gmca</B> &lt;key&gt; &lt;value&gt;
                 Pass global MCA parameters that are applicable  to  all  con-
                 texts.  <I>&lt;key&gt;</I> is the parameter name; <I>&lt;value&gt;</I> is the parameter
                 value.

       <B>-h</B>, <B>--help</B>
                 Display help for this command

       <B>-H</B> &lt;host1,host2,...,hostN&gt;
                 Synonym for <I>-host</I>.

       <B>-host</B>, <B>--host</B> &lt;host1,host2,...,hostN&gt;
                 List of hosts on which to invoke processes.

       <B>-hostfile</B>, <B>--hostfile</B> &lt;hostfile&gt;
                 Provide a hostfile to use.

       <B>-machinefile</B>, <B>--machinefile</B> &lt;machinefile&gt;
                 Synonym for <I>-hostfile</I>.

       <B>-mca</B>, <B>--mca</B> <B>&lt;key&gt;</B> <B>&lt;value&gt;</B>
                 Send arguments to various MCA modules.  See  the  "MCA"  sec-
                 tion, below.

       <B>-n</B>, <B>--n</B> &lt;#&gt;
                 Synonym for <I>-np</I>.

       <B>-nolocal</B>, <B>--nolocal</B>
                 Do not run any copies of the launched application on the same
                 node as orterun is running.  This option will override  list-
                 ing  the  localhost  with <B>--host</B> or any other host-specifying
                 mechanism.

       <B>-nooversubscribe</B>, <B>--nooversubscribe</B>
                 Do not oversubscribe any nodes; error (without  starting  any
                 processes)  if  the requested number of processes would cause
                 oversubscription.  This option  implicitly  sets  "max_slots"
                 equal to the "slots" value for each node.

                 model  and  will return an error (without beginning execution
                 of the application) otherwise.

       <B>-nw</B>, <B>--nw</B> Launch the processes and do not wait  for  their  completion.
                 mpirun will complete as soon as successful launch occurs.

       <B>-path</B>, <B>--path</B> &lt;path&gt;
                 &lt;path&gt;  that will be used when attempting to locate requested
                 executables.

       <B>--prefix</B> &lt;dir&gt;
                 Prefix directory that will  be  used  to  set  the  <I>PATH</I>  and
                 <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I>  on  the remote node before invoking Open MPI
                 or the target process.  See the "Remote  Execution"  section,
                 below.

       <B>-q</B>, <B>--quiet</B>
                 Suppress informative messages from orterun during application
                 execution.

       <B>--tmpdir</B> &lt;dir&gt;
                 Set the root for the session directory tree for mpirun  only.

       <B>-tv</B>, <B>--tv</B> Launch  processes  under  the TotalView debugger.  Deprecated
                 backwards compatibility flag. Synonym for <I>--debug</I>.

       <B>--universe</B> &lt;email-address-removed:universe_name&gt;
                 For this application, set the universe name as:
                      email-address-removed:universe_name

       <B>-v</B>, <B>--verbose</B>
                 Be verbose

       <B>-V</B>, <B>--version</B>
                 Print version number.  If no other arguments are given,  this
                 will also cause orterun to exit.

       <B>-wd</B> &lt;dir&gt; Synonym for <I>-wdir</I>.

       <B>-wdir</B> &lt;dir&gt;
                 Change  to the directory &lt;dir&gt; before the user's program exe-
                 cutes.  See the "Current Working Directory" section for notes
                 on relative paths.  <B>Note:</B> If the <I>-wdir</I> option appears both on
                 the command line and in an application context,  the  context
                 will take precedence over the command line.

       <B>-x</B> &lt;env&gt;  Export  the  specified  environment  variables  to the remote
                 nodes before executing  the  program.   Existing  environment
                 variables can be specified (see the Examples section, below),
                 or new variable names specified  with  corresponding  values.
                 The  parser  for  the <I>-x</I> option is not very sophisticated; it
                 does not even understand quoted values.  Users are advised to
                 set  variables  in the environment, and then use <I>-x</I> to export
                 (not define) them.

       The following options are useful for developers; they are not generally
       useful to most ORTE and/or MPI users:

       <B>--debug-daemons-file</B>
              Enable  debugging  of  any OpenRTE daemons used by this applica-
              tion, storing output in files.

       <B>--no-daemonize</B>
              Do not detach OpenRTE daemons used by this application.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       One invocation of <I>mpirun</I> starts an MPI application running  under  Open
       MPI.  If  the  application  is single process multiple data (SPMD), the
       application can be specified on the <I>mpirun</I> command line.

       If the application is multiple instruction multiple data  (MIMD),  com-
       prising  of  multiple programs, the set of programs and argument can be
       specified in one of two ways:  Extended  Command  Line  Arguments,  and
       Application Context.

       An  application  context  describes  the MIMD program set including all
       arguments in a separate file.  This file essentially contains  multiple
       <I>mpirun</I>  command  lines,  less  the command name itself.  The ability to
       specify different options for different instantiations of a program  is
       another reason to use an application context.

       Extended command line arguments allow for the description of the appli-
       cation layout on the command line using  colons  (<I>:</I>)  to  separate  the
       specification  of programs and arguments. Some options are globally set
       across all specified programs (e.g. --hostfile), while others are  spe-
       cific to a single program (e.g. -np).

   <B>Process</B> <B>Slots</B>
       Open  MPI uses "slots" to represent a potential location for a process.
       Hence, a node with 2 slots means that 2 processes can  be  launched  on
       that  node.  For  performance, the community typically equates a "slot"
       with a physical CPU, thus ensuring that any process  assigned  to  that
       slot has a dedicated processor. This is not, however, a requirement for
       the operation of Open MPI.

       Slots can be specified in hostfiles after the hostname.  For example:

       host1.example.com slots=4
           Indicates that there are 4 process slots on host1.

       If no slots value is specified, then Open MPI will automatically assign
       a default value of "slots=1" to that host.

       When  running under resource managers (e.g., SLURM, Torque, etc.), Open
       MPI will obtain both the hostnames and the  number  of  slots  directly
       from  the  resource manger.  For example, if running under a SLURM job,
       Open MPI will automatically receive the hosts that SLURM has  allocated
       to  the  job as well as how many slots on each node that SLURM says are
       usable - in most high-performance environments, the slots  will  equate
       to the number of processors on the node.

       When  deciding  where  to launch processes, Open MPI will first fill up
       all available slots before  oversubscribing  (see  "Location  Nomencla-
       ture", below, for more details on the scheduling algorithms available).
       Unless told otherwise, Open MPI will arbitrarily  oversubscribe  nodes.
       For example, if the only node available is the localhost, Open MPI will
           Indicates  that  there are 4 process slots on host2.  Further, Open
           MPI is limited to launching a maximum of 6 processes on host2.

       host3.example.com slots=2 max_slots=2
           Indicates that there are 2 process slots on host3 and that no over-
           subscription  is allowed (similar to the <I>--nooversubscribe</I> option).

       host4.example.com max_slots=2
           Shorthand; same as listing "slots=2 max_slots=2".

       Note that Open MPI's support for resource managers does  not  currently
       set  the "max_slots" values for hosts.  If you wish to prevent oversub-
       scription in such scenarios, use the <I>--nooversubscribe</I> option.

       In scenarios where the user wishes to launch an application across  all
       available  slots  by  not providing a "-n" option on the mpirun command
       line, Open MPI will launch a process on each process slot for each host
       within  the  provided  environment. For example, if a hostfile has been
       provided, then Open MPI will spawn processes on each identified host up
       to  the "slots=x" limit if oversubscription is not allowed. If oversub-
       scription is allowed (the default), then Open MPI will spawn  processes
       on  each  host up to the "max_slots=y" limit if that value is provided.
       In all cases, the "-bynode" and "-byslot" mapping  directives  will  be
       enforced to ensure proper placement of process ranks.

   <B>Location</B> <B>Nomenclature</B>
       As  described above, <I>mpirun</I> can specify arbitrary locations in the cur-
       rent Open MPI universe.  Locations can be specified either by CPU or by
       node.

       <B>Note:</B>  This  nomenclature  does not force Open MPI to bind processes to
       CPUs -- specifying a location "by CPU" is really a  convenience  mecha-
       nism for SMPs that ultimately maps down to a specific node.

       Specifying  locations by node will launch one copy of an executable per
       specified node.  Using the <I>--bynode</I> option tells Open MPI  to  use  all
       available  nodes.   Using the <I>--byslot</I> option tells Open MPI to use all
       slots on an available node before  allocating  resources  on  the  next
       available node.  For example:

       mpirun --bynode -np 4 a.out
           Runs one copy of the the executable <I>a.out</I> on all available nodes in
           the Open MPI universe.  MPI_COMM_WORLD rank 0  will  be  on  node0,
           rank  1  will  be  on  node1, etc. Regardless of how many slots are
           available on each of the nodes.

       mpirun --byslot -np 4 a.out
           Runs one copy of the the executable <I>a.out</I> on each slot on  a  given
           node before running the executable on other available nodes.

   <B>Specifying</B> <B>Hosts</B>
       Hosts can be specified in a number of ways. The most common of which is
       in a 'hostfile' or 'machinefile'. If our hostfile contain the following
       information:

          <B>shell$</B> cat my-hostfile
          node00 slots=2
          node01 slots=2

       Here can can include and exclude hosts from the set of hosts to run on.
       For example:

       mpirun -np 3 --host a a.out
              Runs three copies of the executable <I>a.out</I> on host a.

       mpirun -np 3 --host a,b,c a.out
              Runs one copy of the executable <I>a.out</I> on hosts a, b, and c.

       mpirun -np 3 --hostfile my-hostfile --host node00 a.out
              Runs three copies of the executable <I>a.out</I> on host node00.

       mpirun -np 3 --hostfile my-hostfile --host node10 a.out
              This will prompt an error since node10 is  not  in  my-hostfile;
              mpirun will abort.

       shell$ mpirun -np 1 --host a hostname : -np 2 --host b,c uptime
              Runs one copy of the executable <I>hostname</I> on host a. And runs one
              copy of the executable <I>uptime</I> on hosts b and c.

   <B>No</B> <B>Local</B> <B>Launch</B>
       Using the <B>--nolocal</B> option to orterun tells the system  to  not  launch
       any  of the application processes on the same node that orterun is run-
       ning.   While  orterun  typically  blocks  and  consumes   few   system
       resources,  this  option  can  be helpful for launching very large jobs
       where orterun may actually need to  use  noticable  amounts  of  memory
       and/or processing time.  <B>--nolocal</B> allows orteun to run without sharing
       the local node with the launched applications, and likewise allows  the
       launched applications to run unhindered by orterun's system usage.

       Note that <B>--nolocal</B> will override any other specification to launch the
       application on the local node.  It will disqualify the  localhost  from
       being capable of running any processes in the application.

       shell$ mpirun -np 1 --host localhost --nolocal hostname
              This  example  will  result in an error because orterun will not
              find anywhere to launch the application.

   <B>No</B> <B>Oversubscription</B>
       Using the <I>--nooversubscribe</I> option causes Open MPI  to  implicitly  set
       the  "max_slots"  value  to  be  the same as the "slots" value for each
       node.  This can  be  especially  helpful  when  running  jobs  under  a
       resource manager because Open MPI currently only sets the "slots" value
       for each node that it obtains from the resource manager.

   <B>Application</B> <B>Context</B> <B>or</B> <B>Executable</B> <B>Program?</B>
       To distinguish the two different forms, <I>mpirun</I>  looks  on  the  command
       line  for <I>--app</I> option.  If it is specified, then the file named on the
       command line is assumed to be an application context.   If  it  is  not
       specified, then the file is assumed to be an executable program.

   <B>Locating</B> <B>Files</B>
       If  <I>no</I> relative or absolute path is specified for a file, Open MPI will
       look for files by searching the directories in the user's PATH environ-
       ment variable as defined on the source node(s).

       If  a  relative directory is specified, it must be relative to the ini-
       tial working directory determined by the  specific  starter  used.  For
       ries on specific nodes and/or for specific applications.

       If the <I>-wdir</I> option appears both in a context file and on  the  command
       line,  the context file directory will override the command line value.

       If the <I>-wdir</I> option is specified, Open MPI will attempt  to  change  to
       the  specified  directory  on  all  of the remote nodes. If this fails,
       <I>mpirun</I> will abort.

       If the <I>-wdir</I> option is <B>not</B> specified, Open MPI will send the  directory
       name  where  <I>mpirun</I> was invoked to each of the remote nodes. The remote
       nodes will try to change to that directory. If they are  unable  (e.g.,
       if  the  directory  does not exit on that node), then Open MPI will use
       the default directory determined by the starter.

       All directory changing occurs before the user's program is invoked;  it
       does not wait until <I>MPI</I><B>_</B><I>INIT</I> is called.

   <B>Standard</B> <B>I/O</B>
       Open  MPI  directs  UNIX  standard  input to /dev/null on all processes
       except the MPI_COMM_WORLD rank 0 process.  The  MPI_COMM_WORLD  rank  0
       process  inherits  standard  input  from  <I>mpirun</I>.   <B>Note:</B> The node that
       invoked  <I>mpirun</I>  need  not  be  the  same  as  the   node   where   the
       MPI_COMM_WORLD rank 0 process resides. Open MPI handles the redirection
       of <I>mpirun</I>'s standard input to the rank 0 process.

       Open MPI directs UNIX standard output and error from  remote  nodes  to
       the node that invoked <I>mpirun</I> and prints it on the standard output/error
       of <I>mpirun</I>.  Local processes inherit the standard output/error of <I>mpirun</I>
       and transfer to it directly.

       Thus  it is possible to redirect standard I/O for Open MPI applications
       by using the typical shell redirection procedure on <I>mpirun</I>.

             <B>shell$</B> mpirun -np 2 my_app &lt; my_input &gt; my_output

       Note that in this example <I>only</I> the MPI_COMM_WORLD rank 0  process  will
       receive  the stream from <I>my</I><B>_</B><I>input</I> on stdin.  The stdin on all the other
       nodes will be tied to /dev/null.  However, the stdout  from  all  nodes
       will be collected into the <I>my</I><B>_</B><I>output</I> file.

   <B>Signal</B> <B>Propagation</B>
       When orterun receives a SIGTERM and SIGINT, it will attempt to kill the
       entire job by sending all processes in the job  a  SIGTERM,  waiting  a
       small  number  of  seconds,  then  sending  all  processes in the job a
       SIGKILL.  SIGUSR1 and SIGUSR2 signals received by  orterun  are  propa-
       gated  to  all  processes  in the job.  Other signals are not currently
       propagated by orterun.

   <B>Process</B> <B>Termination</B> <B>/</B> <B>Signal</B> <B>Handling</B>
       During the run of an MPI  application,  if  any  rank  dies  abnormally
       (either exiting before invoking <I>MPI</I><B>_</B><I>FINALIZE</I>, or dying as the result of
       a signal), <I>mpirun</I> will print out an error message and kill the rest  of
       the MPI application.

       User  signal handlers should probably avoid trying to cleanup MPI state
       (Open MPI is, currently, neither  thread-safe  nor  async-signal-safe).
       For  example,  if  a  segmentation  fault  occurs  in <I>MPI</I><B>_</B><I>SEND</I> (perhaps
       Processes  in  the  MPI  application inherit their environment from the
       Open RTE daemon upon the node on which they are running.  The  environ-
       ment  is  typically  inherited from the user's shell.  On remote nodes,
       the exact environment is determined by the boot MCA module  used.   The
       <I>rsh</I>  launch module, for example, uses either <I>rsh</I>/<I>ssh</I> to launch the Open
       RTE daemon on remote nodes, and typically executes one or more  of  the
       user's  shell-setup  files  before launching the Open RTE daemon.  When
       running   dynamically   linked   applications   which    require    the
       <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I>  environment  variable to be set, care must be taken to
       ensure that it is correctly set when booting Open MPI.

       See the "Remote Execution" section for more details.

   <B>Remote</B> <B>Execution</B>
       Open MPI requires that the <I>PATH</I> environment variable  be  set  to  find
       executables  on  remote nodes (this is typically only necessary in <I>rsh</I>-
       or <I>ssh</I>-based environments  --  batch/scheduled  environments  typically
       copy the current environment to the execution of remote jobs, so if the
       current environment has <I>PATH</I> and/or <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> set  properly,  the
       remote nodes will also have it set properly).  If Open MPI was compiled
       with shared library support, it may  also  be  necessary  to  have  the
       <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> environment variable set on remote nodes as well (espe-
       cially to find the shared libraries required to run user  MPI  applica-
       tions).

       However,  it  is not always desirable or possible to edit shell startup
       files to set <I>PATH</I> and/or <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I>.  The <I>--prefix</I> option is  pro-
       vided for some simple configurations where this is not possible.

       The  <I>--prefix</I> option takes a single argument: the base directory on the
       remote node where Open MPI is installed.  Open MPI will use this direc-
       tory  to  set  the remote <I>PATH</I> and <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> before executing any
       Open MPI or user applications.  This allows running Open MPI jobs with-
       out  having  pre-configued  the  <I>PATH</I> and <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> on the remote
       nodes.

       Open MPI adds the basename of the current node's "bindir"  (the  direc-
       tory where Open MPI's executables are installed) to the prefix and uses
       that to set the <I>PATH</I> on the remote node.  Similarly, Open MPI adds  the
       basename of the current node's "libdir" (the directory where Open MPI's
       libraries are installed) to  the  prefix  and  uses  that  to  set  the
       <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> on the remote node.  For example:

       Local bindir:  /local/node/directory/bin

       Local libdir:  /local/node/directory/lib64

       If the following command line is used:

           <B>shell$</B> mpirun --prefix /remote/node/directory

       Open   MPI  will  add  "/remote/node/directory/bin"  to  the  <I>PATH</I>  and
       "/remote/node/directory/lib64" to the D_LIBRARY_PATH on the remote node
       before attempting to execute anything.

       Note that <I>--prefix</I> can be set on a per-context basis, allowing for dif-
       ferent values for different nodes.

       name to <I>mpirun</I>.  For example:

           <B>shell$</B> /usr/local/bin/mpirun ...

       is equivalent to

           <B>shell$</B> mpirun --prefix /usr/local

   <B>Exported</B> <B>Environment</B> <B>Variables</B>
       All environment variables that are named in the form OMPI_* will  auto-
       matically  be  exported to new processes on the local and remote nodes.
       The <I>-x</I> option to <I>mpirun</I> can be  used  to  export  specific  environment
       variables  to  the  new  processes.   While the syntax of the <I>-x</I> option
       allows the definition of new variables, note that the parser  for  this
       option  is  currently  not very sophisticated - it does not even under-
       stand quoted values.  Users are advised to set variables in  the  envi-
       ronment and use <I>-x</I> to export them; not to define them.

   <B>MCA</B> <B>(Modular</B> <B>Component</B> <B>Architecture)</B>
       The  <I>-mca</I>  switch  allows the passing of parameters to various MCA mod-
       ules.  MCA modules have direct impact  on  MPI  programs  because  they
       allow  tunable parameters to be set at run time (such as which BTL com-
       munication device driver to use, what parameters to pass to  that  BTL,
       etc.).

       The  <I>-mca</I>  switch  takes  two  arguments: <I>&lt;key&gt;</I> and <I>&lt;value&gt;</I>.  The <I>&lt;key&gt;</I>
       argument generally specifies which MCA module will receive  the  value.
       For example, the <I>&lt;key&gt;</I> "btl" is used to select which BTL to be used for
       transporting MPI messages.  The <I>&lt;value&gt;</I> argument is the value  that  is
       passed.  For example:

       mpirun -mca btl tcp,self -np 1 foo
           Tells  Open MPI to use the "tcp" and "self" BTLs, and to run a sin-
           gle copy of "foo" an allocated node.

       mpirun -mca btl self -np 1 foo
           Tells Open MPI to use the "self" BTL, and to run a single  copy  of
           "foo" an allocated node.

       The  <I>-mca</I>  switch can be used multiple times to specify different <I>&lt;key&gt;</I>
       and/or <I>&lt;value&gt;</I> arguments.  If the same <I>&lt;key&gt;</I>  is  specified  more  than
       once, the <I>&lt;value&gt;</I>s are concatenated with a comma (",") separating them.

       <B>Note:</B> The <I>-mca</I> switch is simply  a  shortcut  for  setting  environment
       variables.   The same effect may be accomplished by setting correspond-
       ing environment variables before running <I>mpirun</I>.  The form of the envi-
       ronment variables that Open MPI sets are:

             OMPI_&lt;key&gt;=&lt;value&gt;

       Note  that  the  <I>-mca</I>  switch  overrides any previously set environment
       variables.  Also note that unknown <I>&lt;key&gt;</I> arguments  are  still  set  as
       environment  variable  -- they are not checked (by <I>mpirun</I>) for correct-
       ness.  Illegal or  incorrect  <I>&lt;value&gt;</I>  arguments  may  or  may  not  be
       reported -- it depends on the specific MCA module.

</PRE>
<H2>EXAMPLES</H2><PRE>
       Be  sure  to  also see the examples in the "Location Nomenclature" sec-

       mpirun -np 4 -mca btl ib,tcp,self prog1
           Run  4  copies of prog1 using the "ib", "tcp", and "self" BTL's for
           the transport of MPI messages.

</PRE>
<H2>RETURN VALUE</H2><PRE>
       <I>mpirun</I> returns 0 if all ranks started  by  <I>mpirun</I>  exit  after  calling
       <a href="../man3/MPI_Finalize.3.php">MPI_FINALIZE</a>.   A  non-zero  value  is  returned  if  an internal error
       occurred in  mpirun,  or  one  or  more  ranks  exited  before  calling
       <a href="../man3/MPI_Finalize.3.php">MPI_FINALIZE</a>.  If an internal error occurred in mpirun, the correspond-
       ing error code is returned.  In the event that one or more  ranks  exit
       before  calling  <a href="../man3/MPI_Finalize.3.php">MPI_FINALIZE</a>,  the  return  value  of  the rank of the
       process that <I>mpirun</I> first notices died before calling <a href="../man3/MPI_Finalize.3.php">MPI_FINALIZE</a> will
       be  returned.   Note that, in general, this will be the first rank that
       died but is not guaranteed to be so.

       However, note that if the <I>-nw</I> switch is used,  the  return  value  from
       mpirun does not indicate the exit status of the ranks.

Open MPI                          March 2006                         <B>MPIRUN(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
