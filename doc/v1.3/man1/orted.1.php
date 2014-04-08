<?php
$topdir = "../../..";
$title = "orted(1) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       orted - Start an Open RTE User-Level Daemon

</PRE>
<H2>SYNOPSIS</H2><PRE>
       <B>orted</B> <B>[options]</B>

</PRE>
<H2>DESCRIPTION</H2><PRE>
       <B>orted</B> starts an Open RTE daemon for the Open MPI system.

</PRE>
<H2>NOTE</H2><PRE>
       The  <B>orted</B> command is <I>not</I> <I>intended</I> <I>to</I> <I>be</I> <I>manually</I> <I>invoked</I> <I>by</I> <I>end</I> <I>users.</I>
       It is part of the Open MPI architecture and is invoked automatically as
       necessary.   This man page is mainly intended for those adventerous end
       users and system administrators who have noticed an "orted" process and
       wondered what it is.

       As  such, the command line options accepted by the <B>orted</B> are not listed
       below because they are considered internal and are therefore subject to
       change between versions without warning.  Running <B>orted</B> with the <I>--help</I>
       command line option will show all available options.

</PRE>
<H2>AUTHORS</H2><PRE>
       The Open MPI maintainers -- see  <I>http://www.openmpi.org/</I>  or  the  file
       <I>AUTHORS</I>.

       This  manual  page  was  originally  contributed  by  Dirk Eddelbuettel
       &lt;email-address-removed&gt;, one of the Debian GNU/Linux maintainers for Open MPI,
       and may be used by others.

1.3.4                            Nov 11, 2009                         <B>ORTED(1)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
