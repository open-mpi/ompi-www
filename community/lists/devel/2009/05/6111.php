<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:28:43 2009" -->
<!-- isoreceived="20090527132843" -->
<!-- sent="Wed, 27 May 2009 09:28:28 -0400" -->
<!-- isosent="20090527132828" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="7AB79075-024E-470A-BDD0-B47971D0AF18_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200905271254.n4RCsfQR011999_at_sourcehaven.osl.iu.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing to note about this change is that it will break binary  
<br>
compatibility between 1.3/1.4 and the 1.5/1.6 series (since these  
<br>
values are #define's, and therefore are resolved at compile time --  
<br>
not run-time).
<br>
<p>While I agree that reducing the memory footprint is a good thing, do  
<br>
we want to change the default string sizes between 1.3 and 1.5?
<br>
<p>Also, fwiw, 16 seems like a pretty short default length for hostnames  
<br>
-- some hostnames will be reported with their domain name by default,  
<br>
which can therefore easily be &gt;16 characters.
<br>
<p>Also, the comment mentions that the longest ROMIO key is 33 chars; do  
<br>
we need the max key length to be 34?  Or does the code already  
<br>
compensate by using +1 for the actual size of the strings?  It's a  
<br>
little confusing because I see &quot;-1&quot;'s in the corresponding fortran code.
<br>
<p>Finally, I wouldn't prefix the macro name with &quot;_&quot; -- an &quot;OPAL_&quot;  
<br>
prefix is sufficient.
<br>
<p><p>On May 27, 2009, at 8:54 AM, &lt;rusraink_at_[hidden]&gt;  
<br>
&lt;rusraink_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2009-05-27 08:54:40 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; New Revision: 21292
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21292">https://svn.open-mpi.org/trac/ompi/changeset/21292</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  - Make the maximum length user strings configurable... Namely
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_ERROR_STRING
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_INFO_KEY
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_PORT_NAME
</span><br>
<span class="quotelev1">&gt;       MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Defaults stay as theyr currently are -- and now give an  
</span><br>
<span class="quotelev1">&gt; explanation on the
</span><br>
<span class="quotelev1">&gt;    min/max values being used in a central place...
</span><br>
<span class="quotelev1">&gt;    m4-macro _OPAL_WITH_OPTION_MIN_MAX_VALUE may be benefical in  
</span><br>
<span class="quotelev1">&gt; other parts
</span><br>
<span class="quotelev1">&gt;    of the configure system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - We need some of these in the lower level OPAL for an upcoming  
</span><br>
<span class="quotelev1">&gt; commit!
</span><br>
<span class="quotelev1">&gt;    All other levels base their values on them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/config/opal_configure_options.m4      |    30 ++++++++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/config/opal_functions.m4              |    38 ++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; ++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/debuggers/mpihandles_interface.h |     4 +
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/mpi.h.in                 |    83 ++++++++++++++ 
</span><br>
<span class="quotelev1">&gt; +++++++++++--------------
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/mpif-common.h            |    12 ----
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/mpif-config.h.in         |    17 ++++++++
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/include/mpif-mpi-io.h            |     2
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/param.cc         |     9 ++++
</span><br>
<span class="quotelev1">&gt;    8 files changed, 151 insertions(+), 44 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/opal_configure_options.m4
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/opal_configure_options.m4      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/opal_configure_options.m4      2009-05-27 08:54:40  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -492,4 +492,34 @@
</span><br>
<span class="quotelev1">&gt;      AC_MSG_RESULT([no])
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# User level (mpi.h.in) visible maximum lengths of strings.
</span><br>
<span class="quotelev1">&gt; +# These may be required in lower-level libraries to set up matching
</span><br>
<span class="quotelev1">&gt; +# data-structures (e.g. OPAL_MAX_OBJECT_NAME).
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +# Default values (as of OMPI-1.3), and some sane minimum and  
</span><br>
<span class="quotelev1">&gt; maximum values
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# No lower and upper bound required or enforced
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(processor_name,  256,  16, 1024)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Min length according to information passed in ompi/errhandler/ 
</span><br>
<span class="quotelev1">&gt; errcode.c
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(error_string,    256,  64, 1024)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Min length according to MPI-2.1, p. 236 (information passed in  
</span><br>
<span class="quotelev1">&gt; ompi/communicator/comm.c: min only 48)
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(object_name,      64,  64,  256)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Min and Max length according to MPI-2.1, p. 287 is 32; longest  
</span><br>
<span class="quotelev1">&gt; key in ROMIO however 33
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(info_key,         36,  33,  255)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# No lower and upper bound required or enforced!
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(info_val,        256,  32, 1024)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Min length according to _POSIX_HOST_NAME_MAX=255 (4*HOST_NAME_MAX)
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(port_name,      1024, 255, 2048)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +# Min length accroding to MPI-2.1, p. 418
</span><br>
<span class="quotelev1">&gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(datarep_string,  128,  64,  256)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  ])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/config/opal_functions.m4
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/config/opal_functions.m4      (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/config/opal_functions.m4      2009-05-27 08:54:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -11,6 +11,8 @@
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2004-2005 The Regents of the University of  
</span><br>
<span class="quotelev1">&gt; California.
</span><br>
<span class="quotelev1">&gt;  dnl                         All rights reserved.
</span><br>
<span class="quotelev1">&gt;  dnl Copyright (c) 2007      Sun Microsystems, Inc.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +dnl Copyright (c) 2009      Oak Ridge National Labs.  All rights  
</span><br>
<span class="quotelev1">&gt; reserved.
</span><br>
<span class="quotelev1">&gt; +dnl
</span><br>
<span class="quotelev1">&gt;  dnl $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt;  dnl
</span><br>
<span class="quotelev1">&gt;  dnl Additional copyrights may follow
</span><br>
<span class="quotelev1">&gt; @@ -356,3 +358,39 @@
</span><br>
<span class="quotelev1">&gt;          unset $ompi_var
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt;  ])dnl
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +dnl  
</span><br>
<span class="quotelev1">&gt; #######################################################################
</span><br>
<span class="quotelev1">&gt; +dnl  
</span><br>
<span class="quotelev1">&gt; #######################################################################
</span><br>
<span class="quotelev1">&gt; +dnl  
</span><br>
<span class="quotelev1">&gt; #######################################################################
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +#  
</span><br>
<span class="quotelev1">&gt; _OPAL_WITH_OPTION_MIN_MAX_VALUE 
</span><br>
<span class="quotelev1">&gt; (NAME,DEFAULT_VALUE,LOWER_BOUND,UPPER_BOUND)
</span><br>
<span class="quotelev1">&gt; +# Defines a variable OPAL_MAX_xxx, with &quot;xxx&quot; being specified as  
</span><br>
<span class="quotelev1">&gt; parameter $1 as &quot;variable_name&quot;.
</span><br>
<span class="quotelev1">&gt; +# If not set at configure-time using --with-max-xxx, the default- 
</span><br>
<span class="quotelev1">&gt; value ($2) is assumed.
</span><br>
<span class="quotelev1">&gt; +# If set, value is checked against lower (value &gt;= $3) and upper  
</span><br>
<span class="quotelev1">&gt; bound (value &lt;= $4)
</span><br>
<span class="quotelev1">&gt; +#
</span><br>
<span class="quotelev1">&gt; +AC_DEFUN([_OPAL_WITH_OPTION_MIN_MAX_VALUE], [
</span><br>
<span class="quotelev1">&gt; +    max_value=[$2]
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_CHECKING([maximum length of ]m4_translit($1, [_], [ ]))
</span><br>
<span class="quotelev1">&gt; +    AC_ARG_WITH([max-]m4_translit($1, [_], [-]),
</span><br>
<span class="quotelev1">&gt; +        AC_HELP_STRING([--with-max-]m4_translit($1, [_], [-]) 
</span><br>
<span class="quotelev1">&gt; [=VALUE],
</span><br>
<span class="quotelev1">&gt; +                       [maximum length of ]m4_translit($1, [_], [ ]) 
</span><br>
<span class="quotelev1">&gt; [s.  VALUE argument has to be specified (default: [$2]).]))
</span><br>
<span class="quotelev1">&gt; +    if test ! -z &quot;$with_max_[$1]&quot; -a &quot;$with_max_[$1]&quot; != &quot;no&quot; ; then
</span><br>
<span class="quotelev1">&gt; +        # Ensure it's a number (hopefully an integer!), and &gt;0
</span><br>
<span class="quotelev1">&gt; +        expr $with_max_[$1] + 1 &gt; /dev/null 2&gt; /dev/null
</span><br>
<span class="quotelev1">&gt; +        AS_IF([test &quot;$?&quot; != &quot;0&quot;], [happy=0],
</span><br>
<span class="quotelev1">&gt; +              [AS_IF([test $with_max_[$1] -ge $3 -a $with_max_[$1] - 
</span><br>
<span class="quotelev1">&gt; le $4],
</span><br>
<span class="quotelev1">&gt; +                     [happy=1], [happy=0])])
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        # If badness in the above tests, bail
</span><br>
<span class="quotelev1">&gt; +        AS_IF([test &quot;$happy&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev1">&gt; +              [AC_MSG_RESULT([bad value ($with_max_[$1])])
</span><br>
<span class="quotelev1">&gt; +               AC_MSG_WARN([--with-max-]m4_translit($1, [_], [-])[s  
</span><br>
<span class="quotelev1">&gt; value must be &gt;= $3 and &lt;= $4])
</span><br>
<span class="quotelev1">&gt; +               AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev1">&gt; +        max_value=$with_max_[$1]
</span><br>
<span class="quotelev1">&gt; +    fi
</span><br>
<span class="quotelev1">&gt; +    AC_MSG_RESULT([$max_value])
</span><br>
<span class="quotelev1">&gt; +    AC_DEFINE_UNQUOTED([OPAL_MAX_]m4_toupper($1), $max_value,
</span><br>
<span class="quotelev1">&gt; +                       [Maximum length of ]m4_translit($1, [_], [ ]) 
</span><br>
<span class="quotelev1">&gt; [s (default is $2)])
</span><br>
<span class="quotelev1">&gt; +])dnl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/debuggers/mpihandles_interface.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/debuggers/mpihandles_interface.h (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/debuggers/mpihandles_interface.h 2009-05-27 08:54:40  
</span><br>
<span class="quotelev1">&gt; EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -20,6 +20,8 @@
</span><br>
<span class="quotelev1">&gt;  #ifndef __MPIDBG_INTERFACE_H__
</span><br>
<span class="quotelev1">&gt;  #define __MPIDBG_INTERFACE_H__ 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * This file provides interface functions for a debugger to gather
</span><br>
<span class="quotelev1">&gt;   * additional information about MPI handles.
</span><br>
<span class="quotelev1">&gt; @@ -37,7 +39,7 @@
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt; **************************************************************************/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  enum {
</span><br>
<span class="quotelev1">&gt; -    MPIDBG_MAX_OBJECT_NAME = 64
</span><br>
<span class="quotelev1">&gt; +    MPIDBG_MAX_OBJECT_NAME = MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  enum {
</span><br>
<span class="quotelev1">&gt;      MPIDBG_MAX_FILENAME = 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/mpi.h.in (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/mpi.h.in 2009-05-27 08:54:40 EDT (Wed, 27 May  
</span><br>
<span class="quotelev1">&gt; 2009)
</span><br>
<span class="quotelev1">&gt; @@ -65,6 +65,27 @@
</span><br>
<span class="quotelev1">&gt;  /* The size of a `int', as computed by sizeof. */
</span><br>
<span class="quotelev1">&gt;  #undef OPAL_SIZEOF_INT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of datarep string (default is 128) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_DATAREP_STRING
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of error strings (default is 256) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_ERROR_STRING
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of info keys (default is 36) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_INFO_KEY
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of info vals (default is 256) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_INFO_VAL
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of object names (default is 64) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_OBJECT_NAME
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of port names (default is 1024) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_PORT_NAME
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +/* Maximum length of processor names (default is 256) */
</span><br>
<span class="quotelev1">&gt; +#undef OPAL_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  /* Whether we have FORTRAN LOGICAL*1 or not */
</span><br>
<span class="quotelev1">&gt;  #undef OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -356,37 +377,37 @@
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * Miscellaneous constants
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ANY_SOURCE         -1      /* match any source rank */
</span><br>
<span class="quotelev1">&gt; -#define MPI_PROC_NULL          -2      /* rank of null process */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ROOT               -4
</span><br>
<span class="quotelev1">&gt; -#define MPI_ANY_TAG            -1      /* match any message tag */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_PROCESSOR_NAME 256     /* max proc. name length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_ERROR_STRING   256     /* max error message length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_OBJECT_NAME    64      /* max object name length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_UNDEFINED          -32766  /* undefined stuff */
</span><br>
<span class="quotelev1">&gt; -#define MPI_CART               1       /* cartesian topology */
</span><br>
<span class="quotelev1">&gt; -#define MPI_GRAPH              2       /* graph topology */
</span><br>
<span class="quotelev1">&gt; -#define MPI_KEYVAL_INVALID     -1      /* invalid key value */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ANY_SOURCE         -1                      /* match any  
</span><br>
<span class="quotelev1">&gt; source rank */
</span><br>
<span class="quotelev1">&gt; +#define MPI_PROC_NULL          -2                      /* rank of  
</span><br>
<span class="quotelev1">&gt; null process */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ROOT               -4                      /* special  
</span><br>
<span class="quotelev1">&gt; value for intercomms */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ANY_TAG            -1                      /* match any  
</span><br>
<span class="quotelev1">&gt; message tag */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_PROCESSOR_NAME OPAL_MAX_PROCESSOR_NAME /* max proc.  
</span><br>
<span class="quotelev1">&gt; name length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_ERROR_STRING   OPAL_MAX_ERROR_STRING   /* max error  
</span><br>
<span class="quotelev1">&gt; message length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_OBJECT_NAME    OPAL_MAX_OBJECT_NAME    /* max  
</span><br>
<span class="quotelev1">&gt; object name length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_UNDEFINED          -32766                  /* undefined  
</span><br>
<span class="quotelev1">&gt; stuff */
</span><br>
<span class="quotelev1">&gt; +#define MPI_CART               1                       /* cartesian  
</span><br>
<span class="quotelev1">&gt; topology */
</span><br>
<span class="quotelev1">&gt; +#define MPI_GRAPH              2                       /* graph  
</span><br>
<span class="quotelev1">&gt; topology */
</span><br>
<span class="quotelev1">&gt; +#define MPI_KEYVAL_INVALID     -1                      /* invalid  
</span><br>
<span class="quotelev1">&gt; key value */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;   * More constants
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; -#define MPI_BOTTOM               ((void *) 0)    /* base reference  
</span><br>
<span class="quotelev1">&gt; address */
</span><br>
<span class="quotelev1">&gt; -#define MPI_IN_PLACE             ((void *) 1)    /* in place buffer  
</span><br>
<span class="quotelev1">&gt; */
</span><br>
<span class="quotelev1">&gt; -#define MPI_BSEND_OVERHEAD       128     /* size of bsend header +  
</span><br>
<span class="quotelev1">&gt; ptr */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_INFO_KEY         36      /* max info key length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_INFO_VAL         256     /* max info value length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ARGV_NULL            ((char **) 0)   /* NULL argument  
</span><br>
<span class="quotelev1">&gt; vector */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ARGVS_NULL           ((char ***) 0)  /* NULL argument  
</span><br>
<span class="quotelev1">&gt; vectors */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ERRCODES_IGNORE      ((int *) 0)    /* don't return  
</span><br>
<span class="quotelev1">&gt; error codes */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_PORT_NAME        1024    /* max port name length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME /* max port name  
</span><br>
<span class="quotelev1">&gt; length */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ORDER_C              0       /* C row major order */
</span><br>
<span class="quotelev1">&gt; -#define MPI_ORDER_FORTRAN        1       /* Fortran column major  
</span><br>
<span class="quotelev1">&gt; order */
</span><br>
<span class="quotelev1">&gt; -#define MPI_DISTRIBUTE_BLOCK     0       /* block distribution */
</span><br>
<span class="quotelev1">&gt; -#define MPI_DISTRIBUTE_CYCLIC    1       /* cyclic distribution */
</span><br>
<span class="quotelev1">&gt; -#define MPI_DISTRIBUTE_NONE      2       /* not distributed */
</span><br>
<span class="quotelev1">&gt; -#define MPI_DISTRIBUTE_DFLT_DARG (-1)    /* default distribution  
</span><br>
<span class="quotelev1">&gt; arg */
</span><br>
<span class="quotelev1">&gt; +#define MPI_BOTTOM               ((void *) 0)          /* base  
</span><br>
<span class="quotelev1">&gt; reference address */
</span><br>
<span class="quotelev1">&gt; +#define MPI_IN_PLACE             ((void *) 1)          /* in place  
</span><br>
<span class="quotelev1">&gt; buffer */
</span><br>
<span class="quotelev1">&gt; +#define MPI_BSEND_OVERHEAD       128                   /* size of  
</span><br>
<span class="quotelev1">&gt; bsend header + ptr */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_INFO_KEY         OPAL_MAX_INFO_KEY     /* max info  
</span><br>
<span class="quotelev1">&gt; key length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_INFO_VAL         OPAL_MAX_INFO_VAL     /* max info  
</span><br>
<span class="quotelev1">&gt; value length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ARGV_NULL            ((char **) 0)         /* NULL  
</span><br>
<span class="quotelev1">&gt; argument vector */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ARGVS_NULL           ((char ***) 0)        /* NULL  
</span><br>
<span class="quotelev1">&gt; argument vectors */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ERRCODES_IGNORE      ((int *) 0)           /* don't  
</span><br>
<span class="quotelev1">&gt; return error codes */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_PORT_NAME        OPAL_MAX_PORT_NAME    /* max port  
</span><br>
<span class="quotelev1">&gt; name length */
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port  
</span><br>
<span class="quotelev1">&gt; name length, non-std. (LAM &lt; 6.3b1) */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ORDER_C              0                     /* C row  
</span><br>
<span class="quotelev1">&gt; major order */
</span><br>
<span class="quotelev1">&gt; +#define MPI_ORDER_FORTRAN        1                     /* Fortran  
</span><br>
<span class="quotelev1">&gt; column major order */
</span><br>
<span class="quotelev1">&gt; +#define MPI_DISTRIBUTE_BLOCK     0                     /* block  
</span><br>
<span class="quotelev1">&gt; distribution */
</span><br>
<span class="quotelev1">&gt; +#define MPI_DISTRIBUTE_CYCLIC    1                     /* cyclic  
</span><br>
<span class="quotelev1">&gt; distribution */
</span><br>
<span class="quotelev1">&gt; +#define MPI_DISTRIBUTE_NONE      2                     /* not  
</span><br>
<span class="quotelev1">&gt; distributed */
</span><br>
<span class="quotelev1">&gt; +#define MPI_DISTRIBUTE_DFLT_DARG (-1)                  /* default  
</span><br>
<span class="quotelev1">&gt; distribution arg */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #if OMPI_PROVIDE_MPI_FILE_INTERFACE
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; @@ -406,11 +427,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #define MPI_DISPLACEMENT_CURRENT   -54278278
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define MPI_SEEK_SET            600
</span><br>
<span class="quotelev1">&gt; -#define MPI_SEEK_CUR            602
</span><br>
<span class="quotelev1">&gt; -#define MPI_SEEK_END            604
</span><br>
<span class="quotelev1">&gt; +#define MPI_SEEK_SET               600
</span><br>
<span class="quotelev1">&gt; +#define MPI_SEEK_CUR               602
</span><br>
<span class="quotelev1">&gt; +#define MPI_SEEK_END               604
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define MPI_MAX_DATAREP_STRING  128
</span><br>
<span class="quotelev1">&gt; +#define MPI_MAX_DATAREP_STRING OPAL_MAX_DATAREP_STRING /* max data  
</span><br>
<span class="quotelev1">&gt; representation length */
</span><br>
<span class="quotelev1">&gt;  #endif /* #if OMPI_PROVIDE_MPI_FILE_INTERFACE */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/mpif-common.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/mpif-common.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/mpif-common.h    2009-05-27 08:54:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -80,9 +80,9 @@
</span><br>
<span class="quotelev1">&gt;  !     Miscellaneous constants
</span><br>
<span class="quotelev1">&gt;  !
</span><br>
<span class="quotelev1">&gt;        integer MPI_ANY_SOURCE, MPI_ANY_TAG
</span><br>
<span class="quotelev1">&gt; -      integer MPI_PROC_NULL, MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev1">&gt; +      integer MPI_PROC_NULL
</span><br>
<span class="quotelev1">&gt;        integer MPI_ROOT
</span><br>
<span class="quotelev1">&gt; -      integer MPI_MAX_ERROR_STRING, MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt; +      integer MPI_UNDEFINED
</span><br>
<span class="quotelev1">&gt;        integer MPI_CART, MPI_GRAPH, MPI_KEYVAL_INVALID
</span><br>
<span class="quotelev1">&gt;        integer MPI_SOURCE, MPI_TAG, MPI_ERROR
</span><br>
<span class="quotelev1">&gt;        integer MPI_TAG_UB, MPI_HOST, MPI_IO, MPI_WTIME_IS_GLOBAL
</span><br>
<span class="quotelev1">&gt; @@ -90,8 +90,6 @@
</span><br>
<span class="quotelev1">&gt;        integer IMPI_CLIENT_SIZE, IMPI_CLIENT_COLOR
</span><br>
<span class="quotelev1">&gt;        integer IMPI_HOST_SIZE, IMPI_HOST_COLOR
</span><br>
<span class="quotelev1">&gt;        integer MPI_BSEND_OVERHEAD
</span><br>
<span class="quotelev1">&gt; -      integer MPI_MAX_INFO_KEY, MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev1">&gt; -      integer MPI_MAX_PORT_NAME, MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev1">&gt;        integer MPI_ORDER_C, MPI_ORDER_FORTRAN
</span><br>
<span class="quotelev1">&gt;        integer MPI_DISTRIBUTE_BLOCK, MPI_DISTRIBUTE_CYCLIC
</span><br>
<span class="quotelev1">&gt;        integer MPI_DISTRIBUTE_NONE, MPI_DISTRIBUTE_DFLT_DARG
</span><br>
<span class="quotelev1">&gt; @@ -106,8 +104,6 @@
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_ANY_TAG=-1)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_PROC_NULL=-2)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_ROOT=-4)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_PROCESSOR_NAME=255)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_ERROR_STRING=255)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_UNDEFINED=-32766)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_CART=1)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_GRAPH=2)
</span><br>
<span class="quotelev1">&gt; @@ -131,10 +127,6 @@
</span><br>
<span class="quotelev1">&gt;        parameter (IMPI_HOST_COLOR=13)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_BSEND_OVERHEAD=128)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_INFO_KEY=35)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_INFO_VAL=255)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_PORT_NAME=255)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_OBJECT_NAME=63)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_ORDER_C=0)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_ORDER_FORTRAN=1)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_DISTRIBUTE_BLOCK=0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/mpif-config.h.in
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/mpif-config.h.in (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/mpif-config.h.in 2009-05-27 08:54:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -89,3 +89,20 @@
</span><br>
<span class="quotelev1">&gt;  !
</span><br>
<span class="quotelev1">&gt;        integer MPI_STATUS_SIZE
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +!     Configurable length constants
</span><br>
<span class="quotelev1">&gt; +!
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_ERROR_STRING
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_INFO_KEY
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_PORT_NAME
</span><br>
<span class="quotelev1">&gt; +      integer MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_PROCESSOR_NAME=@OPAL_MAX_PROCESSOR_NAME_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_ERROR_STRING=@OPAL_MAX_ERROR_STRING_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_OBJECT_NAME=@OPAL_MAX_OBJECT_NAME_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_INFO_KEY=@OPAL_MAX_INFO_KEY_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_INFO_VAL=@OPAL_MAX_INFO_VAL_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_PORT_NAME=@OPAL_MAX_PORT_NAME_at_-1)
</span><br>
<span class="quotelev1">&gt; +      parameter (MPI_MAX_DATAREP_STRING=@OPAL_MAX_DATAREP_STRING_at_-1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/include/mpif-mpi-io.h
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/include/mpif-mpi-io.h    (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/include/mpif-mpi-io.h    2009-05-27 08:54:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -68,7 +68,6 @@
</span><br>
<span class="quotelev1">&gt;        integer MPI_MODE_DELETE_ON_CLOSE, MPI_MODE_UNIQUE_OPEN
</span><br>
<span class="quotelev1">&gt;        integer MPI_MODE_EXCL, MPI_MODE_APPEND, MPI_MODE_SEQUENTIAL
</span><br>
<span class="quotelev1">&gt;        integer MPI_DISPLACEMENT_CURRENT
</span><br>
<span class="quotelev1">&gt; -      integer MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_FILE_NULL=0)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_SEEK_SET=600)
</span><br>
<span class="quotelev1">&gt; @@ -84,4 +83,3 @@
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_MODE_APPEND=128)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_MODE_SEQUENTIAL=256)
</span><br>
<span class="quotelev1">&gt;        parameter (MPI_DISPLACEMENT_CURRENT=-54278278)
</span><br>
<span class="quotelev1">&gt; -      parameter (MPI_MAX_DATAREP_STRING=127)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/tools/ompi_info/param.cc
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; = 
</span><br>
<span class="quotelev1">&gt; ======================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/tools/ompi_info/param.cc (original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/tools/ompi_info/param.cc 2009-05-27 08:54:40 EDT  
</span><br>
<span class="quotelev1">&gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev1">&gt; @@ -784,4 +784,13 @@
</span><br>
<span class="quotelev1">&gt;    out(&quot;MPI extensions&quot;, &quot;options:mpi_ext&quot;, OMPI_EXT_COMPONENTS);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    out(&quot;FT Checkpoint support&quot;, &quot;options:ft_support&quot;, ft_support);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_PROCESSOR_NAME&quot;, &quot;options:max-processor- 
</span><br>
<span class="quotelev1">&gt; name&quot;, OPAL_MAX_PROCESSOR_NAME);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_ERROR_STRING&quot;,   &quot;options:max-error- 
</span><br>
<span class="quotelev1">&gt; string&quot;,   OPAL_MAX_ERROR_STRING);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_OBJECT_NAME&quot;,    &quot;options:max-object- 
</span><br>
<span class="quotelev1">&gt; name&quot;,    OPAL_MAX_OBJECT_NAME);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_INFO_KEY&quot;,       &quot;options:max-info- 
</span><br>
<span class="quotelev1">&gt; key&quot;,       OPAL_MAX_INFO_KEY);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_INFO_VAL&quot;,       &quot;options:max-info- 
</span><br>
<span class="quotelev1">&gt; val&quot;,       OPAL_MAX_INFO_VAL);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_PORT_NAME&quot;,      &quot;options:max-port- 
</span><br>
<span class="quotelev1">&gt; name&quot;,      OPAL_MAX_PORT_NAME);
</span><br>
<span class="quotelev1">&gt; +  out(&quot;Parameter OPAL_MAX_DATAREP_STRING&quot;, &quot;options:max-datarep- 
</span><br>
<span class="quotelev1">&gt; string&quot;, OPAL_MAX_DATAREP_STRING);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6113.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
