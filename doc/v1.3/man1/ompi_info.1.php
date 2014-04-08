<?php
$topdir = "../../..";
$title = "ompi_info(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       ompi_info - Display information about the Open MPI installation

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>ompi_info</B> <B>[options]</B>

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <B>ompi_info</B>  provides  detailed  information about the Open MPI installa-
       tion.  It can be useful for at least three common scenarios:

       1. Checking local configuration and seeing how Open MPI was  installed.

       2.  Submitting  bug  reports  / help requests to the Open MPI community
       (see <I>http://www.open-mpi.org/community/help/</I>)

       3. Seeing a list of installed Open MPI plugins and  querying  what  MCA
       parameters they support.

</PRE>
<H2>OPTIONS</H2><PRE>
       <B>ompi_info</B> accepts the following options:

       <I>-a|--all</I>
               Show all configuration options and MCA parameters

       <I>--arch</I>  Show architecture Open MPI was compiled on

       <I>-c|--config</I>
               Show configuration options

       <I>-gmca|--gmca</I> <I>&lt;param&gt;</I> <I>&lt;value&gt;</I>
               Pass global MCA parameters that are applicable to all contexts.

       <I>-h|--help</I>
               Shows help / usage message

       <I>--hostname</I>
               Show the hostname that Open MPI was configured and built on

       <I>--internal</I>
               Show internal MCA parameters  (not  meant  to  be  modified  by
               users)

       <I>-mca|--mca</I> <I>&lt;param&gt;</I> <I>&lt;value&gt;</I>
               Pass  context-specific  MCA  parameters;  they  are  considered
               global if --gmca is not used and only one context is specified.

       <I>--param</I> <I>&lt;type&gt;</I> <I>&lt;component&gt;</I>
               Show  MCA  parameters.   The first parameter is the type of the
               component to display; the second parameter is the specific com-
               ponent  to  display (or the keyword "all", meaning "display all
               components of this type").

       <I>--parsable</I>
               When used in conjunction with other parameters, the  output  is
               displayed  in a machine-parsable format <I>--parseable</I> Synonym for
               --parsable

       <I>--path</I> <I>&lt;type&gt;</I>
       <I>-v|--version</I> <I>&lt;component&gt;</I> <I>&lt;scope&gt;</I>
               Show  version  of  Open MPI or a component.  &lt;component&gt; can be
               the keywords "ompi" or "all", the name of  a  framework  (e.g.,
               "coll" shows all components in the coll framework), or the name
               of a specific component (e.g., "pls:rsh" shows the  information
               from  the  rsh  PLS  component).   &lt;scope&gt; can be one of: full,
               major, minor, release, greek, svn.

</PRE>
<H2>EXAMPLES</H2><PRE>
       ompi_info
           Show the default output of options and listing of installed  compo-
           nents in a human-readable / prettyprint format.

       ompi_info --parsable
           Show  the default output of options and listing of installed compo-
           nents in a machine-parsable format.

       ompi_info --param btl openib
           Show the MCA parameters of the "openib" BTL component in  a  human-
           readable / prettyprint format.

       ompi_info --param btl openib --parsable
           Show the MCA parameters of the "openib" BTL component in a machine-
           parsable format.

       ompi_info --path bindir
           Show the "bindir" that Open MPI was configured with.

       ompi_info --version ompi full --parsable
           Show the full version numbers of Open MPI (including the  ORTE  and
           OPAL version numbers) in a machine-readable format.

       ompi_info --version btl major
           Show  the  major  version  number  of all BTL components in a pret-
           typrint format.

       ompi_info --version btl:tcp minor
           Show the minor version number of the TCP BTL component in  a  pret-
           typrint format.

       ompi_info --all
           Show <I>all</I> information about the Open MPI installation, including all
           components that can be found, the MCA parameters that they support,
           versions of Open MPI and the components, etc.

</PRE>
<H2>AUTHORS</H2><PRE>
       The  Open  MPI  maintainers  -- see <I>http://www.openmpi.org/</I> or the file
       <I>AUTHORS</I>.

       This manual  page  was  originally  contributed  by  Dirk  Eddelbuettel
       &lt;email-address-removed&gt;, one of the Debian GNU/Linux maintainers for Open MPI,
       and may be used by others.

1.3.4                            Nov 11, 2009                     <B>OMPI_INFO(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
