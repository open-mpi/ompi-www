<?php
$topdir = "../../..";
$title = "MPI_Attr_get(3) man page (version 1.2.9)";

include_once("$topdir/doc/nav.inc");
include_once("$topdir/includes/header.inc");
?>
<p> <a href="../">&laquo; Return to documentation listing</a></p>
<PRE>
<!-- Manpage converted by man2html 3.0.1 -->

</PRE>
<H2>NAME</H2><PRE>
       <B>MPI_Attr_get</B>  - Retrieves attribute value by key -- use of this routine
       is deprecated.

</PRE>
<H2>SYNTAX</H2><PRE>

</PRE>
<H2>C Syntax</H2><PRE>
       #include &lt;mpi.h&gt;
       int MPI_Attr_get(MPI_Comm <I>comm</I>, int <I>keyval</I>,void <I>*attribute</I><B>_</B><I>val</I>,
            int <I>*flag</I> )

</PRE>
<H2>Fortran Syntax</H2><PRE>
       INCLUDE 'mpif.h'
       MPI_ATTR_GET(<I>COMM</I>, <I>KEYVAL</I>, <I>ATTRIBUTE</I><B>_</B><I>VAL</I>, <I>FLAG</I>, <I>IERROR</I>)
            INTEGER   <I>COMM</I>, <I>KEYVAL</I>, <I>ATTRIBUTE</I><B>_</B><I>VAL</I>, <I>IERROR</I>
            LOGICAL   <I>FLAG</I>

</PRE>
<H2>INPUT PARAMETERS</H2><PRE>
       comm      Communicator to which attribute is attached (handle).

       keyval     Key value (integer).

</PRE>
<H2>OUTPUT PARAMETERS</H2><PRE>
       attribute_val
                 Attribute value, unless flag = false.

       flag      True if  an  attribute  value  was  extracted;  false  if  no
                 attribute is associated with the key.

       IERROR    Fortran only: Error status (integer).

</PRE>
<H2>DESCRIPTION</H2><PRE>
       Note  that  use  of  this routine is <I>deprecated</I> as of MPI-2. Please use
       <a href="../man3/MPI_Comm_get_attr.3.php">MPI_Comm_get_attr</a> instead.

       This deprecated routine is not available in C++.

       Retrieves attribute value by key. The call is erroneous if there is  no
       key  with  value  keyval. On the other hand, the call is correct if the
       key value exists, but no attribute is attached on comm for that key; in
       such  case,  the  call  returns  flag  =  false. In particular MPI_KEY-
       VAL_INVALID is an erroneous key value.

</PRE>
<H2>ERRORS</H2><PRE>
       Almost all MPI routines return an error value; C routines as the  value
       of  the  function  and Fortran routines in the last argument. C++ func-
       tions do not return errors. If the default  error  handler  is  set  to
       MPI::ERRORS_THROW_EXCEPTIONS, then on error the C++ exception mechanism
       will be used to throw an MPI:Exception object.

       Before the error value is returned, the current MPI  error  handler  is
       called.  By  default, this error handler aborts the MPI job, except for
       <a href="../man3/MPI_Comm_get_attr.3.php">MPI_Comm_get_attr</a>

Open MPI 1.2                    September 2006          MPI_Attr_get(3OpenMPI)
</PRE>

<p> <a href="../">&laquo; Return to documentation listing</a></p>
<?php
include_once("$topdir/includes/footer.inc");
