<?php
$topdir = "../../..";
$title = "MPI_Info_get_valuelen(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Info_get_valuelen</B>  -  Retrieves the length of the key value associ-
       ated with an info object.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Info_get_valuelen(MPI_Info <I>info</I>, char <I>*key</I>,
            int <I>*valuelen</I>, int <I>*flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INFO_GET_VALUELEN(<I>INFO,</I> <I>KEY,</I> <I>VALUELEN,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER        <I>INFO,</I> <I>VALUELEN,</I> <I>IERROR</I>
            LOGICAL        <I>FLAG</I>
            CHARACTER*(*)  <I>KEY</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Info::Get_valuelen(const char* <I>key</I>, int&amp; <I>valuelen</I>)
            const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       info      Info object (handle).

       key       Key (string).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       valuelen  Length of value arg (integer).

       flag      Returns true if key defined, false if not (boolean).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Info_get_valuelen retrieves the length of the <I>value</I> associated with
       <I>key</I>. If <I>key</I> is defined, <I>valuelen</I> is set to the length of its associated
       value and <I>flag</I> is set to true. If <I>key</I> is not defined, <I>valuelen</I>  is  not
       touched  and <I>flag</I> is set to false. The length returned in C or C++ does
       not include the end-of-string character.

       If <I>key</I> is larger than MPI_MAX_INFO_KEY, the call is erroneous.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       <a href="../man3/MPI_Info_get.3.php">MPI_Info_get</a>
       <a href="../man3/MPI_Info_get_nkeys.3.php">MPI_Info_get_nkeys</a>
       <a href="../man3/MPI_Info_get_nthkey.3.php">MPI_Info_get_nthkey</a>

Open MPI 1.2                    September 2006 MPI_Info_get_valuelen(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
