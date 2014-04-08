<?php
$topdir = "../../..";
$title = "MPI_Type_get_attr(3) man page (version 1.3.4)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Type_get_attr</B>  - Returns the attribute associated with a data type.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Type_get_attr(MPI_Datatype <I>type</I>, int <I>type</I><B>_</B><I>keyval</I>, void *<I>attribute</I><B>_</B><I>val</I>, int *<I>flag</I>)

</PRE>
<H2>Fortran Syntax (see FORTRAN 77 NOTES)</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_TYPE_GET_ATTR(<I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>ATTRIBUTE</I><B>_</B><I>VAL,</I> <I>FLAG,</I> <I>IERROR</I>)
            INTEGER   <I>TYPE,</I> <I>TYPE</I><B>_</B><I>KEYVAL,</I> <I>IERROR</I>
            INTEGER(KIND=MPI_ADDRESS_KIND) <I>ATTRIBUTE</I><B>_</B><I>VAL</I>
            LOGICAL <I>FLAG</I>

</PRE>
<H2>C++ Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       bool MPI::Datatype::Get_attr(int <I>type</I><B>_</B><I>keyval</I>, void* <I>attribute</I><B>_</B><I>val</I>) const

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       type      Data type to which the attribute is attached (handle).

       type_keyval
                 Key value (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       attribute_val
                 Attribute value, unless <I>flag</I> = false

       flag      "false" if no attribute is associated with the key (logical).

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       For  the  given data type, MPI_Type_get_attr returns an attribute value
       that corresponds to the specified key value.

</PRE>
<H2>FORTRAN 77 NOTES</H2><PRE>
       The  MPI  standard  prescribes  portable   Fortran   syntax   for   the
       <I>ATTRIBUTE</I><B>_</B><I>VAL</I>  argument  only for Fortran 90.  Sun FORTRAN 77 users may
       use the non-portable syntax

            INTEGER*MPI_ADDRESS_KIND <I>ATTRIBUTE</I><B>_</B><I>VAL</I>

       where MPI_ADDRESS_KIND is a constant defined in mpif.h  and  gives  the
       length of the declared integer in bytes.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost  all MPI routines return an error value; C routines as the value
       of the function and Fortran routines in the last  argument.  C++  func-
       may  be  used  to cause error values to be returned. Note that MPI does
       not guarantee that an MPI program can continue past an error.

</PRE>
<H2>SEE ALSO</H2><PRE>
       <a href="../man3/MPI_Type_set_attr.3.php">MPI_Type_set_attr</a>

1.3.4                            Nov 11, 2009             <B>MPI_Type_get_attr(3)</B>
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
