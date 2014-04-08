<?php
$topdir = "../../..";
$title = "MPI_Win_get_attr(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Win_get_attr</B> - Obtains the value of a window attribute.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Win_get_attr(MPI_Win <I>win</I>, int <I>win</I><B>_</B><I>keyval</I>,
            void *<I>attribute</I><B>_</B><I>val</I>, int *<I>flag</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_WIN_GET_ATTR(<I>WIN,</I> <I>WIN</I><B>_</B><I>KEYVAL,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER <I>WIN,</I> <I>WIN</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ATTRIBUTE</I><B>_</B><I>VAL</I>
            LOGICAL <I>FLAG</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Win::Get_attr(int win_keyval, void* attribute_val) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       win       Window to which the attribute is attached (handle).

       win_keyval
                 Key value (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       attribute_val
                 Attribute value, unless <I>ag</I> = false

       flag      False if no attribute is associated with the key (logical).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Obtains the value of a window attribute.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The   MPI   standard   prescribes   portable  Fortran  syntax  for  the
       <I>ATTRIBUTE</I><B>_</B><I>VAL</I> argument only for Fortran 90. FORTRAN 77  users  may  use
       the non-portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>ATTRIBUTE</I><B>_</B><I>VAL</I>

       where  MPI_ADDRESS_KIND  is  a constant defined in mpif.h and gives the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       not guarantee that an MPI program can continue past an error.

Open MPI 1.2                    September 2006      MPI_Win_get_attr(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
