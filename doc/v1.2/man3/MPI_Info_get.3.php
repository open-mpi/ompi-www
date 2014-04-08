<?php
$topdir = "../../..";
$title = "MPI_Info_get(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Info_get</B>  -  Retrieves  the  value associated with a key in an info
       object.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Info_get(MPI_Info <I>info</I>, char <I>*key</I>, int <I>valuelen</I>, char <I>*value</I>, int *<I>flag</I>)

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_INFO_GET(<I>INFO,</I> <I>KEY,</I> <I>VALUELEN,</I> <I>VALUE,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER   <I>INFO,</I> <I>VALUELEN,</I> <I>IERROR</I>
            CHARACTER*(*) <I>KEY,</I> <I>VALUE</I>
            LOGICAL <I>FLAG</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Info::Get(const char* <I>key</I>, int <I>valuelen</I>,
            char* <I>value</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       info      Info object (handle).

       key       Key (string).

       valuelen  Length of value arg (integer).

</PRE>
<H2>OUTPUT PARAMETER</H2><PRE>
       value     Value (string).

       flag      Returns true if key defined, false if not (boolean).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       MPI_Info_get retrieves the value associated with <I>key</I> in a previous call
       to <a href="../man3/MPI_Info_set.3.php">MPI_Info_set</a>. If such a key exists, it sets <I>flag</I> to true and returns
       the value in <I>value</I>; otherwise it sets <I>flag</I> to false  and  leaves  <I>value</I>
       unchanged.  <I>valuelen</I> is the number of characters available in value. If
       it is less than the actual size of the value,  the  returned  value  is
       truncated.  In  C, <I>valuelen</I> should be one less than the amount of allo-
       cated space to allow for the null terminator.

       If <I>key</I> is larger than MPI_MAX_INFO_KEY, the call is erroneous.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Info_create.3.php">MPI_Info_create</a>
       <a href="../man3/MPI_Info_delete.3.php">MPI_Info_delete</a>
       <a href="../man3/MPI_Info_dup.3.php">MPI_Info_dup</a>
       <a href="../man3/MPI_Info_free.3.php">MPI_Info_free</a>
       <a href="../man3/MPI_Info_get_valuelen.3.php">MPI_Info_get_valuelen</a>
       <a href="../man3/MPI_Info_get_nkeys.3.php">MPI_Info_get_nkeys</a>
       <a href="../man3/MPI_Info_get_nthkey.3.php">MPI_Info_get_nthkey</a>
       <a href="../man3/MPI_Info_set.3.php">MPI_Info_set</a>

Open MPI 1.2                    September 2006          MPI_Info_get(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
