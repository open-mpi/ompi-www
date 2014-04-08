<?php
$topdir = "../../..";
$title = "orte-ps(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi-ps,  orte-ps - Displays information about the active jobs and pro-
       cesses in Open MPI.

       <B>NOTE:</B> <I>ompi-ps</I>, and <I>orte-ps</I> are exact synonyms for each other. Using any
       of the names will result in exactly identical behavior.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi-ps</B> [ options ]

</PRE>
<H2>Options</H2><PRE>
       <I>ompi-ps</I>  will  display  information about running job(s) in the current
       universe.

       <B>-h</B> <B>|</B> <B>--help</B>
                 Display help for this command

       <B>-v</B> <B>|</B> <B>--verbose</B>
                 Enable verbose output for debugging

       <B>--daemons</B> Display daemon job information.

       <B>-j</B> <B>|</B> <B>--jobid</B>
                 Display the state of a  specific  job  in  the  universe.  By
                 default all jobs will be displayed.

       <B>-p</B> <B>|</B> <B>--vpid</B>
                 Display  the  state  of a specific vpid (process) in the uni-
                 verse. By default all vpids cooresponding to  processes  will
                 be  displayed.  Must  be used in conjunction with the <B>--jobid</B>
                 option.

       <B>-n</B> <B>|</B> <B>--nodes</B>
                 Display all of the allocated nodes, and  their  cooresponding
                 states. By default this is disabled.

       <B>-gmca</B> <B>|</B> <B>--gmca</B> &lt;key&gt; &lt;value&gt;
                 Pass  global  MCA  parameters that are applicable to all con-
                 texts. <I>&lt;key&gt;</I> is the parameter name; <I>&lt;value&gt;</I> is the  parameter
                 value.

       <B>-mca</B> <B>|</B> <B>--mca</B> <B>&lt;key&gt;</B> <B>&lt;value&gt;</B>
                 Send arguments to various MCA modules.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <I>ompi-ps</I> displays the state of jobs running inside an Open RTE universe.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <B>orterun(1)</B>, <B>orte-clean(1)</B>

1.3.4                            Nov 11, 2009                       <B>OMPI-PS(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
