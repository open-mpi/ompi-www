<?php
$topdir = "../../..";
$title = "mpirun(1) man page (version 1.3.4)";

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

       <B>Note:</B> <I>mpirun</I>, <I>mpiexec</I>, and <I>orterun</I> are all  synonyms  for  each  other.
       Using any of the names will produce the same behavior.

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

       Note  that in both models, invoking <I>mpirun</I> via an absolute path name is
       equivalent to specifying the <I>--prefix</I> option with a <I>&lt;dir&gt;</I> value equiva-
       lent  to  the  directory where <I>mpirun</I> resides, minus its last subdirec-
       tory.  For example:

           <B>%</B> /usr/local/bin/mpirun ...

       is equivalent to

           <B>%</B> mpirun --prefix /usr/local

</PRE>
<H2>QUICK SUMMARY</H2><PRE>
       If you are simply looking for how to run an MPI application, you proba-
       bly want to use a command line of the following form:

           <B>%</B> mpirun [ -np X ] [ --hostfile &lt;filename&gt; ]  &lt;program&gt;

       This  will  run X copies of <I>&lt;program&gt;</I> in your current run-time environ-
       ment (if running under a supported resource manager, Open MPI's  <I>mpirun</I>
       will  usually  automatically  use  the  corresponding  resource manager
       process starter, as opposed to, for example, <I>rsh</I> or <I>ssh</I>, which  require
       the  use  of a hostfile, or will default to running all X copies on the
       localhost), scheduling (by default) in a  round-robin  fashion  by  CPU
       slot.  See the rest of this page for more details.

</PRE>
<H2>OPTIONS</H2><PRE>
       <I>mpirun</I>  will send the name of the directory where it was invoked on the
       local node to each of the remote nodes, and attempt to change  to  that
       directory.   See the "Current Working Directory" section below for fur-
       ther details.

       <B>&lt;program&gt;</B> The program executable. This is identified as the first  non-
                 recognized argument to mpirun.

       <B>&lt;args&gt;</B>    Pass  these  run-time  arguments to every new process.  These
                 execution.

       <B>-v</B>, <B>--verbose</B>
                 Be verbose

       <B>-V</B>, <B>--version</B>
                 Print version number.  If no other arguments are given,  this
                 will also cause orterun to exit.

       To specify which hosts (nodes) of the cluster to run on:

       <B>-H</B>, <B>-host</B>, <B>--host</B> &lt;host1,host2,...,hostN&gt;
              List of hosts on which to invoke processes.

       <B>-hostfile</B>, <B>--hostfile</B> &lt;hostfile&gt;
              Provide a hostfile to use.

       <B>-machinefile</B>, <B>--machinefile</B> &lt;machinefile&gt;
              Synonym for <I>-hostfile</I>.

       To specify the number of processes to launch:

       <B>-c</B>, <B>-n</B>, <B>--n</B>, <B>-np</B> &lt;#&gt;
              Run  this  many  copies of the program on the given nodes.  This
              option indicates that the specified file is an  executable  pro-
              gram and not an application context. If no value is provided for
              the number of copies to execute (i.e., neither the "-np" nor its
              synonyms  are provided on the command line), Open MPI will auto-
              matically execute a copy of the program  on  each  process  slot
              (see  below  for description of a "process slot"). This feature,
              however, can only be used in the SPMD model and will  return  an
              error  (without  beginning  execution of the application) other-
              wise.

       <B>-npersocket</B>, <B>--npersocket</B> <B>&lt;#persocket&gt;</B>
              On each node, launch this many processes  times  the  number  of
              processor  sockets  on  the  node.   The <I>-npersocket</I> option also
              turns on the <I>-bind-to-socket</I> option.

       <B>-npernode</B>, <B>--npernode</B> <B>&lt;#pernode&gt;</B>
              On each node, launch this many processes.

       <B>-pernode</B>, <B>--pernode</B>
              On each node, launch one process -- equivalent to <I>-npernode</I> 1.

       To map processes to nodes:

       <B>-loadbalance</B>, <B>--loadbalance</B>
              Uniform  distribution  of  ranks  across  all  nodes.  See  more
              detailed description below.

       <B>-nolocal</B>, <B>--nolocal</B>
              Do  not  run  any copies of the launched application on the same
              node as orterun is running.  This option will  override  listing
              the  localhost  with  <B>--host</B> or any other host-specifying mecha-
              nism.

       <B>-nooversubscribe</B>, <B>--nooversubscribe</B>
              ranks in a round-robin, "by node" manner.

       For process binding:

       <B>-bycore</B>, <B>--bycore</B>
              Associate  processes  with  successive cores if used with one of
              the <I>-bind-to-*</I> options.

       <B>-bysocket</B>, <B>--bysocket</B>
              Associate processes with successive processor  sockets  if  used
              with one of the <I>-bind-to-*</I> options.

       <B>-cpus-per-proc</B>, <B>--cpus-per-proc</B> <B>&lt;#perproc&gt;</B>
              Use  the  number  of  cores  per process if used with one of the
              <I>-bind-to-*</I> options.

       <B>-cpus-per-rank</B>, <B>--cpus-per-rank</B> <B>&lt;#perrank&gt;</B>
              Alias for <I>-cpus-per-proc</I>.

       <B>-bind-to-core</B>, <B>--bind-to-core</B>
              Bind processes to cores.

       <B>-bind-to-socket</B>, <B>--bind-to-socket</B>
              Bind processes to processor sockets.

       <B>-bind-to-none</B>, <B>--bind-to-none</B>
              Do not bind processes.  (Default.)

       <B>-report-bindings</B>, <B>--report-bindings</B>
              Report any bindings for launched processes.

       <B>-slot-list</B>, <B>--slot-list</B> <B>&lt;slots&gt;</B>
              List of processor IDs to be used for binding MPI processes.  The
              specified  bindings  will  be  applied to all MPI processes. See
              explanation below for syntax.

       For rankfiles:

       <B>-rf</B>, <B>--rankfile</B> <B>&lt;rankfile&gt;</B>
              Provide a rankfile file.

       To manage standard I/O:

       <B>-output-filename</B>, <B>--output-filename</B> &lt;filename&gt;
              Redirect the stdout, stderr, and stddiag of all ranks to a rank-
              unique version of the specified filename. Any directories in the
              filename will automatically be created.  Each output  file  will
              consist  of  filename.rank,  where  the rank will be left-filled
              with zero's for correct ordering in listings.

       <B>-stdin</B>, <B>--stdin</B> <B>&lt;rank&gt;</B>
              The MPI rank that is to receive stdin. The default is to forward
              stdin to rank=0, but this option can be used to forward stdin to
              any rank. It is also acceptable to specify <I>none</I>, indicating that
              no ranks are to receive stdin.

       <B>-tag-output</B>, <B>--tag-output</B>
              Tag  each  line  of  output  to stdout, stderr, and stddiag with
              mat.

       <B>-xterm</B>, <B>--xterm</B> &lt;ranks&gt;
              Display the specified ranks in separate xterm windows. The ranks
              are  specified  as  a  comma-separated list of ranges, with a -1
              indicating all. A separate window will be created for each spec-
              ified  rank.  <B>Note:</B> In some environments, xterm may require that
              the executable be in the user's path, or be specified  in  abso-
              lute  or  relative terms. Thus, it may be necessary to specify a
              local executable as "./foo" instead  of  just  "foo".  If  xterm
              fails  to  find  the  executable,  mpirun  will  hang, but still
              respond correctly to a ctrl-c.  If this  happens,  please  check
              that  the executable is being specified correctly and try again.

       To manage files and runtime environment:

       <B>-path</B>, <B>--path</B> &lt;path&gt;
              &lt;path&gt; that will be used when attempting to locate the requested
              executables.   This  is  used prior to using the local PATH set-
              ting.

       <B>--prefix</B> &lt;dir&gt;
              Prefix  directory  that  will  be  used  to  set  the  <I>PATH</I>  and
              <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I>  on  the remote node before invoking Open MPI or
              the target process.  See the "Remote Execution" section,  below.

       <B>--preload-binary</B>
              Copy  the  specified  executable(s)  to remote machines prior to
              starting remote processes. The executables will be copied to the
              Open  MPI  session directory and will be deleted upon completion
              of the job.

       <B>--preload-files</B> <B>&lt;files&gt;</B>
              Preload the comma separated list of files to the current working
              directory  of  the  remote  machines  where  processes  will  be
              launched prior to starting those processes.

       <B>--preload-files-dest-dir</B> <B>&lt;path&gt;</B>
              The destination directory to be used for preload-files, if other
              than the current working directory. By default, the absolute and
              relative paths provided by --preload-files are used.

       <B>--tmpdir</B> &lt;dir&gt;
              Set the root for the session directory tree for mpirun only.

       <B>-wd</B> &lt;dir&gt;
              Synonym for <I>-wdir</I>.

       <B>-wdir</B> &lt;dir&gt;
              Change to the directory &lt;dir&gt; before  the  user's  program  exe-
              cutes.  See the "Current Working Directory" section for notes on
              relative paths.  <B>Note:</B> If the <I>-wdir</I> option appears both  on  the
              command  line  and  in  an application context, the context will
              take precedence over the command line.

       <B>-x</B> &lt;env&gt;
              Export the specified environment variables to the  remote  nodes
              before executing the program.  Only one environment variable can
              define) them.

       Setting MCA parameters:

       <B>-gmca</B>, <B>--gmca</B> &lt;key&gt; &lt;value&gt;
              Pass  global MCA parameters that are applicable to all contexts.
              <I>&lt;key&gt;</I> is the parameter name; <I>&lt;value&gt;</I> is the parameter value.

       <B>-mca</B>, <B>--mca</B> <B>&lt;key&gt;</B> <B>&lt;value&gt;</B>
              Send arguments to various MCA modules.  See the  "MCA"  section,
              below.

       For debugging:

       <B>-debug</B>, <B>--debug</B>
              Invoke    the    user-level    debugger    indicated    by   the
              <I>orte</I><B>_</B><I>base</I><B>_</B><I>user</I><B>_</B><I>debugger</I> MCA parameter.

       <B>-debugger</B>, <B>--debugger</B>
              Sequence of debuggers to search for when <I>--debug</I> is  used  (i.e.
              a synonym for <I>orte</I><B>_</B><I>base</I><B>_</B><I>user</I><B>_</B><I>debugger</I> MCA parameter).

       <B>-tv</B>, <B>--tv</B>
              Launch processes under the TotalView debugger.  Deprecated back-
              wards compatibility flag. Synonym for <I>--debug</I>.

       There are also other options:

       <B>-aborted</B>, <B>--aborted</B> &lt;#&gt;
              Set the maximum number of aborted processes to display.

       <B>--app</B> &lt;appfile&gt;
              Provide an appfile, ignoring all other command line options.

       <B>-cf</B>, <B>--cartofile</B> &lt;cartofile&gt;
              Provide a cartography file.

       <B>--hetero</B>
              Indicates that multiple app_contexts are being provided that are
              a mix of 32/64-bit binaries.

       <B>-leave-session-attached</B>, <B>--leave-session-attached</B>
              Do  not  detach  OmpiRTE  daemons used by this application. This
              allows error messages from the daemons as well as the underlying
              environment  (e.g.,  when failing to launch a daemon) to be out-
              put.

       <B>-ompi-server</B>, <B>--ompi-server</B> <B>&lt;uri</B> <B>or</B> <B>file&gt;</B>
              Specify the URI of the Open MPI server, or the name of the  file
              (specified  as  file:filename) that contains that info. The Open
              MPI server is used to support  multi-application  data  exchange
              via the MPI-2 <a href="../man3/MPI_Publish_name.3.php">MPI_Publish_name</a> and <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a> functions.

       <B>-wait-for-server</B>, <B>--wait-for-server</B>
              Pause  mpirun  before  launching  the  job  until ompi-server is
              detected. This is useful in scripts  where  ompi-server  may  be
              started  in  the  background,  followed immediately by an <I>mpirun</I>
              command that wishes to connect to it. Mpirun  will  pause  until

       useful to most ORTE and/or MPI users:

       <B>-d</B>, <B>--debug-devel</B>
              Enable debugging of the OmpiRTE  (the  run-time  layer  in  Open
              MPI).  This is not generally useful for most users.

       <B>--debug-daemons</B>
              Enable  debugging  of  any OmpiRTE daemons used by this applica-
              tion.

       <B>--debug-daemons-file</B>
              Enable debugging of any OmpiRTE daemons used  by  this  applica-
              tion, storing output in files.

       <B>-launch-agent</B>, <B>--launch-agent</B>
              Name  of the executable that is to be used to start processes on
              the remote nodes. The default is "orted".  This  option  can  be
              used to test new daemon concepts, or to pass options back to the
              daemons without having mpirun  itself  see  them.  For  example,
              specifying  a  launch  agent  of  orted -mca odls_base_verbose 5
              allows the developer to ask the orted for debugging output with-
              out clutter from mpirun itself.

       <B>--noprefix</B>
              Disable the automatic --prefix behavior

       There may be other options listed with <I>mpirun</I> <I>--help</I>.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       One  invocation  of <I>mpirun</I> starts an MPI application running under Open
       MPI. If the application is single process  multiple  data  (SPMD),  the
       application can be specified on the <I>mpirun</I> command line.

       If  the  application is multiple instruction multiple data (MIMD), com-
       prising of multiple programs, the set of programs and argument  can  be
       specified  in  one  of  two  ways: Extended Command Line Arguments, and
       Application Context.

       An application context describes the MIMD  program  set  including  all
       arguments  in a separate file.  This file essentially contains multiple
       <I>mpirun</I> command lines, less the command name  itself.   The  ability  to
       specify  different options for different instantiations of a program is
       another reason to use an application context.

       Extended command line arguments allow for the description of the appli-
       cation  layout  on  the  command  line using colons (<I>:</I>) to separate the
       specification of programs and arguments. Some options are globally  set
       across  all specified programs (e.g. --hostfile), while others are spe-
       cific to a single program (e.g. -np).

   <B>Specifying</B> <B>Host</B> <B>Nodes</B>
       Host nodes can be identified on the <I>mpirun</I> command line with the  <I>-host</I>
       option or in a hostfile.

       For example,

       mpirun -H aa,aa,bb ./a.out
           launches two processes on node aa and one on bb.

       Here,  we  list  both the host names (aa, bb, and cc) but also how many
       "slots" there are for each.  Slots  indicate  how  many  processes  can
       potentially  execute  on  a  node.  For best performance, the number of
       slots may be chosen to be the number of cores on the node or the number
       of  processor sockets.  If the hostfile does not provide slots informa-
       tion, a default of 1 is assumed.  When running under resource  managers
       (e.g.,  SLURM,  Torque,  etc.), Open MPI will obtain both the hostnames
       and the number of slots directly from the resource manger.

       mpirun -hostfile myhostfile ./a.out
           will launch two processes on each of the three nodes.

       mpirun -hostfile myhostfile -host aa ./a.out
           will launch two processes, both on node aa.

       mpirun -hostfile myhostfile -host dd ./a.out
           will find no hosts to run on and abort with an error.  That is, the
           specified host dd is not in the specified hostfile.

   <B>Specifying</B> <B>Number</B> <B>of</B> <B>Processes</B>
       As  we  have just seen, the number of processes to run can be set using
       the hostfile.  Other mechanisms exist.

       The number of processes launched can be specified as a multiple of  the
       number of nodes or processor sockets available.  For example,

       mpirun -H aa,bb -npersocket 2 ./a.out
           launches processes 0-3 on node aa and process 4-7 on node bb, where
           aa and bb are both dual-socket nodes.  The <I>-npersocket</I> option  also
           turns  on the <I>-bind-to-socket</I> option, which is discussed in a later
           section.

       mpirun -H aa,bb -npernode 2 ./a.out
           launches processes 0-1 on node aa and processes 2-3 on node bb.

       mpirun -H aa,bb -npernode 1 ./a.out
           launches one process per host node.

       mpirun -H aa,bb -pernode ./a.out
           is the same as <I>-npernode</I> 1.

       Another alternative is to specify the number of processes with the  <I>-np</I>
       option.  Consider now the hostfile

          <B>%</B> cat myhostfile
          aa slots=4
          bb slots=4
          cc slots=4

       Now,

       mpirun -hostfile myhostfile -np 6 ./a.out
           will  launch  ranks  0-3  on node aa and ranks 4-5 on node bb.  The
           remaining slots in the hostfile will not  be  used  since  the  <I>-np</I>
           option indicated that only 6 processes should be launched.

         mpirun                  0 1 2 3      4 5

         mpirun -loadbalance     0 1          2 3          4 5

         mpirun -bynode          0 3          1 4          2 5

         mpirun -nolocal                      0 1 2 3      4 5

       The <I>-loadbalance</I> option tries to spread processes out fairly among  the
       nodes.

       The <I>-bynode</I> option does likewise but numbers the processes in "by node"
       in a round-robin fashion.

       The <I>-nolocal</I> option prevents any processes from being mapped  onto  the
       local host (in this case node aa).  While <I>mpirun</I> typically consumes few
       system resources, <I>-nolocal</I> can be helpful for launching very large jobs
       where  <I>mpirun</I>  may  actually  need  to  use noticable amounts of memory
       and/or processing time.

       Just as <I>-np</I> can specify fewer processes than there are  slots,  it  can
       also oversubscribe the slots.  For example, with the same hostfile:

       mpirun -hostfile myhostfile -np 14 ./a.out
           will  launch  processes  0-3 on node aa, 4-7 on bb, and 8-11 on cc.
           It will then add the remaining two processes to whichever nodes  it
           chooses.

       One can also specify limits to oversubscription.  For example, with the
       same hostfile:

       mpirun -hostfile myhostfile -np 14 -nooversubscribe ./a.out
           will produce an error since <I>-nooversubscribe</I> prevents oversubscrip-
           tion.

       Limits  to  oversubscription  can  also  be  specified  in the hostfile
       itself:
        % cat myhostfile
        aa slots=4 max_slots=4
        bb         max_slots=4
        cc slots=4

       The <I>max</I><B>_</B><I>slots</I> field specifies such a limit.  When it  does,  the  <I>slots</I>
       value defaults to the limit.  Now:

       mpirun -hostfile myhostfile -np 14 ./a.out
           causes  the  first  12  processes to be launched as before, but the
           remaining two processes will be forced onto node cc.  The other two
           nodes  are  protected  by  the hostfile against oversubscription by
           this job.

       Using the <I>--nooversubscribe</I> option can be helpful since Open  MPI  cur-
       rently does not get "max_slots" values from the resource manager.

       Of course, <I>-np</I> can also be used with the <I>-H</I> or <I>-host</I> option.  For exam-
       ple,

           will launch process 0 running <I>hostname</I> on node aa and  processes  1
           and 2 each running <I>uptime</I> on nodes bb and cc, respectively.

   <B>Process</B> <B>Binding</B>
       Processes  may  be  bound  to  specific  resources on a node.  This can
       improve performance if the operating system is placing processes subop-
       timally.  For example, it might oversubscribe some multi-core processor
       sockets, leaving other sockets idle;  this can lead processes  to  con-
       tend unnecessarily for common resources.  Or, it might spread processes
       out too widely;  this can be suboptimal if application  performance  is
       sensitive  to  interprocess communication costs.  Binding can also keep
       the operating system from migrating processes  excessively,  regardless
       of how optimally those processes were placed to begin with.

       To  bind processes, one must first associate them with the resources on
       which they should run.  For example, the <I>-bycore</I> option associates  the
       processes  on  a  node with successive cores.  Or, <I>-bysocket</I> associates
       the processes with successive processor sockets,  cycling  through  the
       sockets  in  a  round-robin  fashion  if necessary.  And <I>-cpus-per-proc</I>
       indicates how many cores to bind per process.

       But, such association is meaningless unless the processes are  actually
       bound to those resources.  The binding option specifies the granularity
       of binding -- say, with <I>-bind-to-core</I> or <I>-bind-to-socket</I>.  One can also
       turn binding off with <I>-bind-to-none</I>, which is typically the default.

       Finally, <I>-report-bindings</I> can be used to report bindings.

       As  an  example,  consider a node with two processor sockets, each com-
       prising four cores.  We run <I>mpirun</I> with <I>-np</I> <I>4</I> <I>-report-bindings</I> and  the
       following additional options:

        % mpirun ... -bycore -bind-to-core
        [...] ... binding child [...,0] to cpus 0001
        [...] ... binding child [...,1] to cpus 0002
        [...] ... binding child [...,2] to cpus 0004
        [...] ... binding child [...,3] to cpus 0008

        % mpirun ... -bysocket -bind-to-socket
        [...] ... binding child [...,0] to socket 0 cpus 000f
        [...] ... binding child [...,1] to socket 1 cpus 00f0
        [...] ... binding child [...,2] to socket 0 cpus 000f
        [...] ... binding child [...,3] to socket 1 cpus 00f0

        % mpirun ... -cpus-per-proc 2 -bind-to-core
        [...] ... binding child [...,0] to cpus 0003
        [...] ... binding child [...,1] to cpus 000c
        [...] ... binding child [...,2] to cpus 0030
        [...] ... binding child [...,3] to cpus 00c0

        % mpirun ... -bind-to-none

       Here, <I>-report-bindings</I> shows the binding of each process as a mask.  In
       the first case, the processes bind to successive cores as indicated  by
       the  masks  0001,  0002, 0004, and 0008.  In the second case, processes
       bind to all cores on successive sockets as indicated by the masks  000f
       and  00f0.   The  processes  cycle  through  the processor sockets in a
       round-robin fashion as many times as are needed.  In  the  third  case,
       less  convenient  than  that of <I>mpirun</I> options.  On the other hand, MCA
       parameters can be set not only on the <I>mpirun</I> command line, but alterna-
       tively in a system or user mca-params.conf file or as environment vari-
       ables, as described in the MCA section below.  The correspondences are:

         mpirun option          MCA parameter key           value

         -bycore                rmaps_base_schedule_policy  core
         -bysocket              rmaps_base_schedule_policy  socket
         -bind-to-core          orte_process_binding        core
         -bind-to-socket        orte_process_binding        socket
         -bind-to-none          orte_process_binding        none

       The   <I>orte</I><B>_</B><I>process</I><B>_</B><I>binding</I>   value  can  also  take  on  the  <I>:if-avail</I>
       attribute.  This attribute means that processes will be bound  only  if
       this  is  supported  on  the  underlying operating system.  Without the
       attribute, if there is no such support, the binding request results  in
       an error.  For example, you could have

         % cat $HOME/.openmpi/mca-params.conf
         rmaps_base_schedule_policy = socket
         orte_process_binding       = socket:if-avail

   <B>Rankfiles</B>
       Rankfiles provide a means for specifying detailed information about how
       process ranks should be mapped to nodes and how they should  be  bound.
       Consider the following:

           cat myrankfile
           rank 0=aa slot=1:0-2
           rank 1=bb slot=0:0,1
           rank 2=cc slot=1-2
           mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that

         Rank 0 runs on node aa, bound to socket 1, cores 0-2.
         Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
         Rank 2 runs on node cc, bound to cores 1 and 2.

   <B>Application</B> <B>Context</B> <B>or</B> <B>Executable</B> <B>Program?</B>
       To  distinguish  the  two  different forms, <I>mpirun</I> looks on the command
       line for <I>--app</I> option.  If it is specified, then the file named on  the
       command  line  is  assumed  to be an application context.  If it is not
       specified, then the file is assumed to be an executable program.

   <B>Locating</B> <B>Files</B>
       If no relative or absolute path is specified for a file, Open MPI  will
       first  look  for  files  by  searching the directories specified by the
       <I>--path</I> option.  If there is no <I>--path</I> option set or if the file is  not
       found at the <I>--path</I> location, then Open MPI will search the user's PATH
       environment variable as defined on the source node(s).

       If a relative directory is specified, it must be relative to  the  ini-
       tial  working  directory  determined  by the specific starter used. For
       example when using the rsh or ssh starters, the  initial  directory  is
       $HOME  by  default. Other starters may set the initial directory to the
       current working directory from the invocation of <I>mpirun</I>.

   <B>Current</B> <B>Working</B> <B>Directory</B>
       If  the  <I>-wdir</I>  option is specified, Open MPI will attempt to change to
       the specified directory on all of the  remote  nodes.  If  this  fails,
       <I>mpirun</I> will abort.

       If  the <I>-wdir</I> option is <B>not</B> specified, Open MPI will send the directory
       name where <I>mpirun</I> was invoked to each of the remote nodes.  The  remote
       nodes  will  try to change to that directory. If they are unable (e.g.,
       if the directory does not exit on that node), then Open  MPI  will  use
       the default directory determined by the starter.

       All  directory changing occurs before the user's program is invoked; it
       does not wait until <I>MPI</I><B>_</B><I>INIT</I> is called.

   <B>Standard</B> <B>I/O</B>
       Open MPI directs UNIX standard input  to  /dev/null  on  all  processes
       except  the  MPI_COMM_WORLD  rank  0 process. The MPI_COMM_WORLD rank 0
       process inherits standard input  from  <I>mpirun</I>.   <B>Note:</B>  The  node  that
       invoked   <I>mpirun</I>   need   not  be  the  same  as  the  node  where  the
       MPI_COMM_WORLD rank 0 process resides. Open MPI handles the redirection
       of <I>mpirun</I>'s standard input to the rank 0 process.

       Open  MPI  directs  UNIX standard output and error from remote nodes to
       the node that invoked <I>mpirun</I> and prints it on the standard output/error
       of <I>mpirun</I>.  Local processes inherit the standard output/error of <I>mpirun</I>
       and transfer to it directly.

       Thus it is possible to redirect standard I/O for Open MPI  applications
       by using the typical shell redirection procedure on <I>mpirun</I>.

             <B>%</B> mpirun -np 2 my_app &lt; my_input &gt; my_output

       Note  that  in this example <I>only</I> the MPI_COMM_WORLD rank 0 process will
       receive the stream from <I>my</I><B>_</B><I>input</I> on stdin.  The stdin on all the  other
       nodes  will  be  tied to /dev/null.  However, the stdout from all nodes
       will be collected into the <I>my</I><B>_</B><I>output</I> file.

   <B>Signal</B> <B>Propagation</B>
       When orterun receives a SIGTERM and SIGINT, it will attempt to kill the
       entire  job  by  sending  all processes in the job a SIGTERM, waiting a
       small number of seconds, then  sending  all  processes  in  the  job  a
       SIGKILL.

       SIGUSR1  and  SIGUSR2 signals received by orterun are propagated to all
       processes in the job.

       One can turn on forwarding of SIGSTOP and SIGCONT to the  program  exe-
       cuted  by  mpirun by setting the MCA parameter orte_forward_job_control
       to 1.  A SIGTSTOP signal to mpirun will then cause a SIGSTOP signal  to
       be sent to all of the programs started by mpirun and likewise a SIGCONT
       signal to mpirun will cause a SIGCONT sent.

       Other signals are not currently propagated by orterun.

   <B>Process</B> <B>Termination</B> <B>/</B> <B>Signal</B> <B>Handling</B>
       During the run of an MPI  application,  if  any  rank  dies  abnormally
       (either exiting before invoking <I>MPI</I><B>_</B><I>FINALIZE</I>, or dying as the result of
       a signal), <I>mpirun</I> will print out an error message and kill the rest  of
       the MPI application.
       nal, it is probably not necessary (and safest) for  the  user  to  only
       clean up non-MPI state.

   <B>Process</B> <B>Environment</B>
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
       out  having  pre-configured  the <I>PATH</I> and <I>LD</I><B>_</B><I>LIBRARY</I><B>_</B><I>PATH</I> on the remote
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

           <B>%</B> mpirun --prefix /remote/node/directory

       Open   MPI  will  add  "/remote/node/directory/bin"  to  the  <I>PATH</I>  and
       "/remote/node/directory/lib64" to the D_LIBRARY_PATH on the remote node
       before attempting to execute anything.
       mon prefix.

       Note that executing <I>mpirun</I> via an absolute pathname  is  equivalent  to
       specifying <I>--prefix</I> without the last subdirectory in the absolute path-
       name to <I>mpirun</I>.  For example:

           <B>%</B> /usr/local/bin/mpirun ...

       is equivalent to

           <B>%</B> mpirun --prefix /usr/local

   <B>Exported</B> <B>Environment</B> <B>Variables</B>
       All environment variables that are named in the form OMPI_* will  auto-
       matically  be  exported to new processes on the local and remote nodes.
       The <I>-x</I> option to <I>mpirun</I> can be  used  to  export  specific  environment
       variables  to  the  new  processes.   While the syntax of the <I>-x</I> option
       allows the definition of new variables, note that the parser  for  this
       option  is  currently  not very sophisticated - it does not even under-
       stand quoted values.  Users are advised to set variables in  the  envi-
       ronment and use <I>-x</I> to export them; not to define them.

   <B>Setting</B> <B>MCA</B> <B>Parameters</B>
       The  <I>-mca</I> switch allows the passing of parameters to various MCA (Modu-
       lar Component Architecture) modules.  MCA modules have direct impact on
       MPI  programs  because  they  allow tunable parameters to be set at run
       time (such as which BTL communication device driver to use, what param-
       eters to pass to that BTL, etc.).

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

       Note that the <I>-mca</I> switch is simply a shortcut for setting  environment
       variables.   The same effect may be accomplished by setting correspond-
       ing environment variables before running <I>mpirun</I>.  The form of the envi-
       ronment variables that Open MPI sets is:

             OMPI_MCA_&lt;key&gt;=&lt;value&gt;

       Thus,  the  <I>-mca</I>  switch overrides any previously set environment vari-
       ables.  The <I>-mca</I> settings similarly override MCA parameters set in  the
       $OPAL_PREFIX/etc/openmpi-mca-params.conf     or     $HOME/.openmpi/mca-
       params.conf file.
       <I>ompi</I><B>_</B><I>info</I> command.  See the <I>ompi</I><B>_</B><I>info(1)</I> man page for detailed informa-
       tion on the command.

</PRE>
<H2>EXAMPLES</H2><PRE>
       Be sure also to see the examples throughout the sections above.

       mpirun -np 4 -mca btl ib,tcp,self prog1
           Run 4 copies of prog1 using the "ib", "tcp", and "self"  BTL's  for
           the transport of MPI messages.

       mpirun -np 4 -mca btl tcp,sm,self
           --mca btl_tcp_if_include ce0 prog1
           Run 4 copies of prog1 using the "tcp", "sm" and "self" BTLs for the
           transport of MPI messages, with TCP using only the ce0 interface to
           communicate.   Note  that  other  BTLs  have similar if_include MCA
           parameters.

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

1.3.4                            Nov 11, 2009                        <B>MPIRUN(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
