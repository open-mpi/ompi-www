<?php
$topdir = "../../..";
$title = "ompi-server(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi-server - Server for supporting name publish/lookup operations.

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi-server</B> [ options ]

</PRE>
<H2>Options</H2><PRE>
       <I>ompi-server</I> acts as a data server for Open MPI jobs to exchange contact
       information in support of MPI-2's Publish_name  and  Lookup_name  func-
       tions.

       <B>-h</B> <B>|</B> <B>--help</B>
                 Display help for this command

       <B>-d</B> <B>|</B> <B>--debug</B>
                 Enable verbose output for debugging

       <B>-r</B> <B>|</B> <B>--report-uri</B> &lt;value&gt;
                 Report  the Open MPI contact information for the server. This
                 information is required for MPI jobs to use the data  server.
                 Three  parameter  values  are  supported: (a) '-', indicating
                 that the uri is to be printed to stdout; (b) '+',  indicating
                 that  the uri is to be printed to stderr; and (c) "file:path-
                 to-file", indicating that the uri is to  be  printed  to  the
                 specified  file. The "path-to-file" can be either absolute or
                 relative, but must be in a location where the user has  write
                 permissions.  Please  note  that  the  resulting file must be
                 read-accessible to expected users of the server.

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <I>ompi-server</I> acts as a data server for Open MPI jobs to exchange contact
       information  in  support  of MPI-2's Publish_name and Lookup_name func-
       tions.

</PRE>
<H2>SEE ALSO</H2><PRE>
1.3.4                            Nov 11, 2009                   <B>OMPI-SERVER(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
