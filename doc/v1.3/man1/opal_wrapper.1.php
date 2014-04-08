<?php
$topdir = "../../..";
$title = "opal_wrapper(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       opal_wrapper - Back-end Open MPI wrapper command

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>opal_wrapper</B> <B>[options]</B>

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <B>opal_wrapper</B>  is  not  meant to be called directly by end users.  It is
       automatically invoked as the back-end by the Open MPI wrapper  commands
       such as: <B>mpicc</B>, <B>mpiCC</B>, <B>mpic++</B>, <B>mpif77</B>, and <B>mpif90</B>.

       Some  Open  MPI  installations  may  have  additional wrapper commands,
       and/or have renamed the wrapper compilers listed above  to  avoid  exe-
       cutable  name conflicts with other MPI implementations.  Hence, you may
       also have wrapper compilers installed including  the  following  names:
       <B>mpif90.openmpi</B>,    <B>mpif77.openmpi</B>,    <B>mpicxx.openmpi</B>,    <B>mpiCC.openmpi</B>,
       <B>mpicc.openmpi</B>, <B>mpic++.openmpi</B>, <B>opalcc</B>, <B>opalc++</B>, <B>ortecc</B>, and <B>ortec++</B>,

</PRE>
<H2>SEE ALSO</H2><PRE>
       The following may exist depending on your particular Open MPI installa-
       tion: <B>mpicc(1)</B>, <B>mpiCC(1)</B>, <B>mpic++(1)</B>, <B>mpif77(1)</B>, <B>mpif90(1)</B>, <B>mpif90.open-</B>
       <B>mpi(1)</B>,   <B>mpif77.openmpi(1)</B>,    <B>mpicxx.openmpi(1)</B>,    <B>mpiCC.openmpi(1)</B>,
       <B>mpicc.openmpi(1)</B>, <B>mpic++.openmpi(1)</B>, <B>ortecc(1)</B>, <B>ortec++(1)</B>, <B>opalccc(1)</B>,
       and the website at <I>http://www.openmpi.org/</I>.

</PRE>
<H2>AUTHORS</H2><PRE>
       The Open MPI maintainers -- see  <I>http://www.openmpi.org/</I>  or  the  file
       <I>AUTHORS</I>.

       This  manual  page  was  originally  contributed  by  Dirk Eddelbuettel
       &lt;email-address-removed&gt;, one of the Debian GNU/Linux maintainers for Open MPI,
       and may be used by others.

1.3.4                            Nov 11, 2009                  <B>OPAL_WRAPPER(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
