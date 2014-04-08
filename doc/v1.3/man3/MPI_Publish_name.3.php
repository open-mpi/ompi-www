<?php
$topdir = "../../..";
$title = "MPI_Publish_name(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Publish_name</B> - Publishes a service name associated with a port

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Publish_name(char *<I>service</I><B>_</B><I>name</I>, MPI_Info <I>info</I>,
            char *<I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_PUBLISH_NAME(<I>SERVICE</I><B>_</B><I>NAME,</I> <I>INFO,</I> <I>PORT</I><B>_</B><I>NAME,</I> <I>IERROR</I>)
            CHARACTER*(*)  <I>SERVICE</I><B>_</B><I>NAME,</I> <I>PORT</I><B>_</B><I>NAME</I>
            INTEGER        <I>INFO,</I> <I>IERROR</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       void MPI::Publish_name(const char* <I>service</I><B>_</B><I>name</I>, const MPI::Info&amp; <I>info</I>,
            const char* <I>port</I><B>_</B><I>name</I>)

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       service_name  A service name (string).

       info          Options to the name service functions (handle).

       port_name     A port name (string).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       IERROR        Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       This  routine  publishes  the pair (<I>service</I><B>_</B><I>name,</I> <I>port</I><B>_</B><I>name</I>) so that an
       application may retrieve <I>port</I><B>_</B><I>name</I> by calling <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a> with <I>ser-</I>
       <I>vice</I><B>_</B><I>name</I>  as  an  argument.  It  is  an error to publish the same <I>ser-</I>
       <I>vice</I><B>_</B><I>name</I> twice, or to use a <I>port</I><B>_</B><I>name</I> argument that was not previously
       opened by the calling process via a call to <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>.

</PRE>
<H2>INFO ARGUMENTS</H2><PRE>
       The following keys for <I>info</I> are recognized:

       Key                   Type      Description
       ---                   ----      -----------

       ompi_global_scope     bool      If set to true, publish the name in
                                       the global scope.  Publish in the local
                                       scope otherwise.  See the NAME SCOPE
                                       section for more details.

       <I>bool</I>  info  keys  are actually strings but are evaluated as follows: if
       global server has been specified and is available. If so, then the pub-
       lish  function  will  default to global scope first, followed by local.
       Otherwise, the data will default to publish with local scope.

</PRE>
<H2>NAME SCOPE</H2><PRE>
       Open MPI supports two name scopes: <I>global</I> and <I>local</I>. Local  scope  will
       place  the  specified  service/port pair in a data store located on the
       mpirun of the calling process' job. Thus,  data  published  with  local
       scope  will  only  be  accessible  to processes in jobs spawned by that
       mpirun - e.g., processes in  the  calling  process'  job,  or  in  jobs
       spawned via <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>.

       Global  scope  places  the  specified service/port pair in a data store
       located on a central server that is accessible to all jobs  running  in
       the  cluster or environment. Thus, data published with global scope can
       be accessed by multiple  mpiruns  and  used  for  <a href="../man3/MPI_Comm_connect.3.php">MPI_Comm_Connect</a>  and
       <a href="../man3/MPI_Comm_accept.3.php">MPI_Comm_accept</a> between jobs.

       Note that global scope operations require both the presence of the cen-
       tral server and that the calling process be able to communicate to that
       server. MPI_Publish_name will return an error if global scope is speci-
       fied and a global server is either not specified or cannot be found.

       Open MPI provides a server called <I>ompi-server</I> to support  global  scope
       operations.  Please  refer  to  its  manual  page  for  a more detailed
       description of data store/lookup operations.

       As an example of the impact of these scoping rules, consider  the  case
       where  a  job  has  been  started with mpirun - call this job "job1". A
       process in job1 creates and publishes a service/port pair using a local
       scope. Open MPI will store this data in the data store within mpirun.

       A process in job1 (perhaps the same as did the publish, or perhaps some
       other process in the job) subsequently calls  <a href="../man3/MPI_Comm_spawn.3.php">MPI_Comm_spawn</a>  to  start
       another  job  (call  it  "job2")  under this mpirun. Since the two jobs
       share a common mpirun, both jobs  have  access  to  local  scope  data.
       Hence,  a  process  in job2 can perform an <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a> with a local
       scope to retrieve the information.

       However, assume another user starts a job using mpirun - call this  job
       "job3". Because the service/port data published by job1 specified local
       scope, processes in job3 cannot access that data. In contrast,  if  the
       data  had  been  published using global scope, then any process in job3
       could access the data, provided that mpirun was given knowledge of  how
       to  contact the central server and the process could establish communi-
       cation with it.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Lookup_name.3.php">MPI_Lookup_name</a>
       <a href="../man3/MPI_Open_port.3.php">MPI_Open_port</a>

1.3.4                            Nov 11, 2009              <B>MPI_Publish_name(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
