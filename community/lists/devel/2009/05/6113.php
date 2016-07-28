<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:54:20 2009" -->
<!-- isoreceived="20090527135420" -->
<!-- sent="Wed, 27 May 2009 09:54:13 -0400" -->
<!-- isosent="20090527135413" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292" -->
<!-- id="200905270954.13795.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7AB79075-024E-470A-BDD0-B47971D0AF18_at_cisco.com" -->
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
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:54:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
On Wednesday 27 May 2009 09:28:28 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; One thing to note about this change is that it will break binary
</span><br>
<span class="quotelev1">&gt; compatibility between 1.3/1.4 and the 1.5/1.6 series (since these
</span><br>
<span class="quotelev1">&gt; values are #define's, and therefore are resolved at compile time --
</span><br>
<span class="quotelev1">&gt; not run-time).
</span><br>
Wait a minute.
<br>
<p>Before there was:
<br>
#define MPI_MAX_PROCESSOR_NAME 256
<br>
<p>Now there is:
<br>
#define MPI_MAX_PROCESSOR_NAME OPAL_MAX_PROCESSOR_NAME
<br>
with
<br>
#define OPAL_MAX_PROCESSOR_NAME 256
<br>
<p>Just that now, the user may change it -- the default is still the same.
<br>
<p>Where's the break??
<br>
<p><p><span class="quotelev1">&gt; While I agree that reducing the memory footprint is a good thing, do
</span><br>
<span class="quotelev1">&gt; we want to change the default string sizes between 1.3 and 1.5?
</span><br>
We don't
<br>
<p><span class="quotelev1">&gt; Also, fwiw, 16 seems like a pretty short default length for hostnames
</span><br>
<span class="quotelev1">&gt; -- some hostnames will be reported with their domain name by default,
</span><br>
<span class="quotelev1">&gt; which can therefore easily be &gt;16 characters.
</span><br>
Well -- again, the minimum is a save-guard to not change against something 
<br>
silly.
<br>
And most of the time we will run on systems without specifying the whole FQDN.
<br>
<p><span class="quotelev1">&gt; Also, the comment mentions that the longest ROMIO key is 33 chars; do
</span><br>
<span class="quotelev1">&gt; we need the max key length to be 34?  Or does the code already
</span><br>
<span class="quotelev1">&gt; compensate by using +1 for the actual size of the strings?  It's a
</span><br>
<span class="quotelev1">&gt; little confusing because I see &quot;-1&quot;'s in the corresponding fortran code.
</span><br>
Yes, You're right, this is confusing, here the min max key length should be 34 
<br>
to be on the save side...
<br>
<p><span class="quotelev1">&gt; Finally, I wouldn't prefix the macro name with &quot;_&quot; -- an &quot;OPAL_&quot;
</span><br>
<span class="quotelev1">&gt; prefix is sufficient.
</span><br>
Sure, I don't care....
<br>
<p>Will do later (it's after 9am EST, so don't wanna change any m4s again...)
<br>
<p>Thanks.
<br>
Rainer
<br>
<p><p><p><span class="quotelev1">&gt; On May 27, 2009, at 8:54 AM, &lt;rusraink_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;rusraink_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Author: rusraink
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2009-05-27 08:54:40 EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 21292
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/21292">https://svn.open-mpi.org/trac/ompi/changeset/21292</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt;  - Make the maximum length user strings configurable... Namely
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_ERROR_STRING
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_INFO_KEY
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_PORT_NAME
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Defaults stay as theyr currently are -- and now give an
</span><br>
<span class="quotelev2">&gt; &gt; explanation on the
</span><br>
<span class="quotelev2">&gt; &gt;    min/max values being used in a central place...
</span><br>
<span class="quotelev2">&gt; &gt;    m4-macro _OPAL_WITH_OPTION_MIN_MAX_VALUE may be benefical in
</span><br>
<span class="quotelev2">&gt; &gt; other parts
</span><br>
<span class="quotelev2">&gt; &gt;    of the configure system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  - We need some of these in the lower level OPAL for an upcoming
</span><br>
<span class="quotelev2">&gt; &gt; commit!
</span><br>
<span class="quotelev2">&gt; &gt;    All other levels base their values on them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/config/opal_configure_options.m4      |    30 ++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/config/opal_functions.m4              |    38 ++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt; ++++
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/debuggers/mpihandles_interface.h |     4 +
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/include/mpi.h.in                 |    83 ++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt; +++++++++++--------------
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/include/mpif-common.h            |    12 ----
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/include/mpif-config.h.in         |    17 ++++++++
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/include/mpif-mpi-io.h            |     2
</span><br>
<span class="quotelev2">&gt; &gt;    trunk/ompi/tools/ompi_info/param.cc         |     9 ++++
</span><br>
<span class="quotelev2">&gt; &gt;    8 files changed, 151 insertions(+), 44 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/config/opal_configure_options.m4
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/config/opal_configure_options.m4      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/config/opal_configure_options.m4      2009-05-27 08:54:40
</span><br>
<span class="quotelev2">&gt; &gt; EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -492,4 +492,34 @@
</span><br>
<span class="quotelev2">&gt; &gt;      AC_MSG_RESULT([no])
</span><br>
<span class="quotelev2">&gt; &gt;  fi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# User level (mpi.h.in) visible maximum lengths of strings.
</span><br>
<span class="quotelev2">&gt; &gt; +# These may be required in lower-level libraries to set up matching
</span><br>
<span class="quotelev2">&gt; &gt; +# data-structures (e.g. OPAL_MAX_OBJECT_NAME).
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +# Default values (as of OMPI-1.3), and some sane minimum and
</span><br>
<span class="quotelev2">&gt; &gt; maximum values
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# No lower and upper bound required or enforced
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(processor_name,  256,  16, 1024)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Min length according to information passed in ompi/errhandler/
</span><br>
<span class="quotelev2">&gt; &gt; errcode.c
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(error_string,    256,  64, 1024)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Min length according to MPI-2.1, p. 236 (information passed in
</span><br>
<span class="quotelev2">&gt; &gt; ompi/communicator/comm.c: min only 48)
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(object_name,      64,  64,  256)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Min and Max length according to MPI-2.1, p. 287 is 32; longest
</span><br>
<span class="quotelev2">&gt; &gt; key in ROMIO however 33
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(info_key,         36,  33,  255)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# No lower and upper bound required or enforced!
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(info_val,        256,  32, 1024)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Min length according to _POSIX_HOST_NAME_MAX=255 (4*HOST_NAME_MAX)
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(port_name,      1024, 255, 2048)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +# Min length accroding to MPI-2.1, p. 418
</span><br>
<span class="quotelev2">&gt; &gt; +_OPAL_WITH_OPTION_MIN_MAX_VALUE(datarep_string,  128,  64,  256)
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  ])dnl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/config/opal_functions.m4
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/config/opal_functions.m4      (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/config/opal_functions.m4      2009-05-27 08:54:40 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -11,6 +11,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;  dnl Copyright (c) 2004-2005 The Regents of the University of
</span><br>
<span class="quotelev2">&gt; &gt; California.
</span><br>
<span class="quotelev2">&gt; &gt;  dnl                         All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt;  dnl Copyright (c) 2007      Sun Microsystems, Inc.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +dnl Copyright (c) 2009      Oak Ridge National Labs.  All rights
</span><br>
<span class="quotelev2">&gt; &gt; reserved.
</span><br>
<span class="quotelev2">&gt; &gt; +dnl
</span><br>
<span class="quotelev2">&gt; &gt;  dnl $COPYRIGHT$
</span><br>
<span class="quotelev2">&gt; &gt;  dnl
</span><br>
<span class="quotelev2">&gt; &gt;  dnl Additional copyrights may follow
</span><br>
<span class="quotelev2">&gt; &gt; @@ -356,3 +358,39 @@
</span><br>
<span class="quotelev2">&gt; &gt;          unset $ompi_var
</span><br>
<span class="quotelev2">&gt; &gt;      done
</span><br>
<span class="quotelev2">&gt; &gt;  ])dnl
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +dnl
</span><br>
<span class="quotelev2">&gt; &gt; #######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +dnl
</span><br>
<span class="quotelev2">&gt; &gt; #######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +dnl
</span><br>
<span class="quotelev2">&gt; &gt; #######################################################################
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; _OPAL_WITH_OPTION_MIN_MAX_VALUE
</span><br>
<span class="quotelev2">&gt; &gt; (NAME,DEFAULT_VALUE,LOWER_BOUND,UPPER_BOUND)
</span><br>
<span class="quotelev2">&gt; &gt; +# Defines a variable OPAL_MAX_xxx, with &quot;xxx&quot; being specified as
</span><br>
<span class="quotelev2">&gt; &gt; parameter $1 as &quot;variable_name&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; +# If not set at configure-time using --with-max-xxx, the default-
</span><br>
<span class="quotelev2">&gt; &gt; value ($2) is assumed.
</span><br>
<span class="quotelev2">&gt; &gt; +# If set, value is checked against lower (value &gt;= $3) and upper
</span><br>
<span class="quotelev2">&gt; &gt; bound (value &lt;= $4)
</span><br>
<span class="quotelev2">&gt; &gt; +#
</span><br>
<span class="quotelev2">&gt; &gt; +AC_DEFUN([_OPAL_WITH_OPTION_MIN_MAX_VALUE], [
</span><br>
<span class="quotelev2">&gt; &gt; +    max_value=[$2]
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_MSG_CHECKING([maximum length of ]m4_translit($1, [_], [ ]))
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_ARG_WITH([max-]m4_translit($1, [_], [-]),
</span><br>
<span class="quotelev2">&gt; &gt; +        AC_HELP_STRING([--with-max-]m4_translit($1, [_], [-])
</span><br>
<span class="quotelev2">&gt; &gt; [=VALUE],
</span><br>
<span class="quotelev2">&gt; &gt; +                       [maximum length of ]m4_translit($1, [_], [ ])
</span><br>
<span class="quotelev2">&gt; &gt; [s.  VALUE argument has to be specified (default: [$2]).]))
</span><br>
<span class="quotelev2">&gt; &gt; +    if test ! -z &quot;$with_max_[$1]&quot; -a &quot;$with_max_[$1]&quot; != &quot;no&quot; ; then
</span><br>
<span class="quotelev2">&gt; &gt; +        # Ensure it's a number (hopefully an integer!), and &gt;0
</span><br>
<span class="quotelev2">&gt; &gt; +        expr $with_max_[$1] + 1 &gt; /dev/null 2&gt; /dev/null
</span><br>
<span class="quotelev2">&gt; &gt; +        AS_IF([test &quot;$?&quot; != &quot;0&quot;], [happy=0],
</span><br>
<span class="quotelev2">&gt; &gt; +              [AS_IF([test $with_max_[$1] -ge $3 -a $with_max_[$1] -
</span><br>
<span class="quotelev2">&gt; &gt; le $4],
</span><br>
<span class="quotelev2">&gt; &gt; +                     [happy=1], [happy=0])])
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +        # If badness in the above tests, bail
</span><br>
<span class="quotelev2">&gt; &gt; +        AS_IF([test &quot;$happy&quot; = &quot;0&quot;],
</span><br>
<span class="quotelev2">&gt; &gt; +              [AC_MSG_RESULT([bad value ($with_max_[$1])])
</span><br>
<span class="quotelev2">&gt; &gt; +               AC_MSG_WARN([--with-max-]m4_translit($1, [_], [-])[s
</span><br>
<span class="quotelev2">&gt; &gt; value must be &gt;= $3 and &lt;= $4])
</span><br>
<span class="quotelev2">&gt; &gt; +               AC_MSG_ERROR([Cannot continue])])
</span><br>
<span class="quotelev2">&gt; &gt; +        max_value=$with_max_[$1]
</span><br>
<span class="quotelev2">&gt; &gt; +    fi
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_MSG_RESULT([$max_value])
</span><br>
<span class="quotelev2">&gt; &gt; +    AC_DEFINE_UNQUOTED([OPAL_MAX_]m4_toupper($1), $max_value,
</span><br>
<span class="quotelev2">&gt; &gt; +                       [Maximum length of ]m4_translit($1, [_], [ ])
</span><br>
<span class="quotelev2">&gt; &gt; [s (default is $2)])
</span><br>
<span class="quotelev2">&gt; &gt; +])dnl
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/debuggers/mpihandles_interface.h
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/debuggers/mpihandles_interface.h (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/debuggers/mpihandles_interface.h 2009-05-27 08:54:40
</span><br>
<span class="quotelev2">&gt; &gt; EDT (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -20,6 +20,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;  #ifndef __MPIDBG_INTERFACE_H__
</span><br>
<span class="quotelev2">&gt; &gt;  #define __MPIDBG_INTERFACE_H__ 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi_config.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  /*
</span><br>
<span class="quotelev2">&gt; &gt;   * This file provides interface functions for a debugger to gather
</span><br>
<span class="quotelev2">&gt; &gt;   * additional information about MPI handles.
</span><br>
<span class="quotelev2">&gt; &gt; @@ -37,7 +39,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *************************************************************************
</span><br>
<span class="quotelev2">&gt; &gt;*/
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  enum {
</span><br>
<span class="quotelev2">&gt; &gt; -    MPIDBG_MAX_OBJECT_NAME = 64
</span><br>
<span class="quotelev2">&gt; &gt; +    MPIDBG_MAX_OBJECT_NAME = MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev2">&gt; &gt;  };
</span><br>
<span class="quotelev2">&gt; &gt;  enum {
</span><br>
<span class="quotelev2">&gt; &gt;      MPIDBG_MAX_FILENAME = 1024
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/include/mpi.h.in
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/include/mpi.h.in (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/include/mpi.h.in 2009-05-27 08:54:40 EDT (Wed, 27 May
</span><br>
<span class="quotelev2">&gt; &gt; 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -65,6 +65,27 @@
</span><br>
<span class="quotelev2">&gt; &gt;  /* The size of a `int', as computed by sizeof. */
</span><br>
<span class="quotelev2">&gt; &gt;  #undef OPAL_SIZEOF_INT
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of datarep string (default is 128) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_DATAREP_STRING
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of error strings (default is 256) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_ERROR_STRING
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of info keys (default is 36) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_INFO_KEY
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of info vals (default is 256) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_INFO_VAL
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of object names (default is 64) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_OBJECT_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of port names (default is 1024) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_PORT_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +/* Maximum length of processor names (default is 256) */
</span><br>
<span class="quotelev2">&gt; &gt; +#undef OPAL_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  /* Whether we have FORTRAN LOGICAL*1 or not */
</span><br>
<span class="quotelev2">&gt; &gt;  #undef OMPI_HAVE_FORTRAN_LOGICAL1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; @@ -356,37 +377,37 @@
</span><br>
<span class="quotelev2">&gt; &gt;  /*
</span><br>
<span class="quotelev2">&gt; &gt;   * Miscellaneous constants
</span><br>
<span class="quotelev2">&gt; &gt;   */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ANY_SOURCE         -1      /* match any source rank */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_PROC_NULL          -2      /* rank of null process */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ROOT               -4
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ANY_TAG            -1      /* match any message tag */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_PROCESSOR_NAME 256     /* max proc. name length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_ERROR_STRING   256     /* max error message length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_OBJECT_NAME    64      /* max object name length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_UNDEFINED          -32766  /* undefined stuff */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_CART               1       /* cartesian topology */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_GRAPH              2       /* graph topology */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_KEYVAL_INVALID     -1      /* invalid key value */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ANY_SOURCE         -1                      /* match any
</span><br>
<span class="quotelev2">&gt; &gt; source rank */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_PROC_NULL          -2                      /* rank of
</span><br>
<span class="quotelev2">&gt; &gt; null process */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ROOT               -4                      /* special
</span><br>
<span class="quotelev2">&gt; &gt; value for intercomms */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ANY_TAG            -1                      /* match any
</span><br>
<span class="quotelev2">&gt; &gt; message tag */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_PROCESSOR_NAME OPAL_MAX_PROCESSOR_NAME /* max proc.
</span><br>
<span class="quotelev2">&gt; &gt; name length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_ERROR_STRING   OPAL_MAX_ERROR_STRING   /* max error
</span><br>
<span class="quotelev2">&gt; &gt; message length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_OBJECT_NAME    OPAL_MAX_OBJECT_NAME    /* max
</span><br>
<span class="quotelev2">&gt; &gt; object name length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_UNDEFINED          -32766                  /* undefined
</span><br>
<span class="quotelev2">&gt; &gt; stuff */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_CART               1                       /* cartesian
</span><br>
<span class="quotelev2">&gt; &gt; topology */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_GRAPH              2                       /* graph
</span><br>
<span class="quotelev2">&gt; &gt; topology */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_KEYVAL_INVALID     -1                      /* invalid
</span><br>
<span class="quotelev2">&gt; &gt; key value */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  /*
</span><br>
<span class="quotelev2">&gt; &gt;   * More constants
</span><br>
<span class="quotelev2">&gt; &gt;   */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_BOTTOM               ((void *) 0)    /* base reference
</span><br>
<span class="quotelev2">&gt; &gt; address */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_IN_PLACE             ((void *) 1)    /* in place buffer
</span><br>
<span class="quotelev2">&gt; &gt; */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_BSEND_OVERHEAD       128     /* size of bsend header +
</span><br>
<span class="quotelev2">&gt; &gt; ptr */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_INFO_KEY         36      /* max info key length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_INFO_VAL         256     /* max info value length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ARGV_NULL            ((char **) 0)   /* NULL argument
</span><br>
<span class="quotelev2">&gt; &gt; vector */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ARGVS_NULL           ((char ***) 0)  /* NULL argument
</span><br>
<span class="quotelev2">&gt; &gt; vectors */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ERRCODES_IGNORE      ((int *) 0)    /* don't return
</span><br>
<span class="quotelev2">&gt; &gt; error codes */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_PORT_NAME        1024    /* max port name length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME /* max port name
</span><br>
<span class="quotelev2">&gt; &gt; length */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ORDER_C              0       /* C row major order */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_ORDER_FORTRAN        1       /* Fortran column major
</span><br>
<span class="quotelev2">&gt; &gt; order */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_DISTRIBUTE_BLOCK     0       /* block distribution */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_DISTRIBUTE_CYCLIC    1       /* cyclic distribution */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_DISTRIBUTE_NONE      2       /* not distributed */
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_DISTRIBUTE_DFLT_DARG (-1)    /* default distribution
</span><br>
<span class="quotelev2">&gt; &gt; arg */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_BOTTOM               ((void *) 0)          /* base
</span><br>
<span class="quotelev2">&gt; &gt; reference address */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_IN_PLACE             ((void *) 1)          /* in place
</span><br>
<span class="quotelev2">&gt; &gt; buffer */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_BSEND_OVERHEAD       128                   /* size of
</span><br>
<span class="quotelev2">&gt; &gt; bsend header + ptr */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_INFO_KEY         OPAL_MAX_INFO_KEY     /* max info
</span><br>
<span class="quotelev2">&gt; &gt; key length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_INFO_VAL         OPAL_MAX_INFO_VAL     /* max info
</span><br>
<span class="quotelev2">&gt; &gt; value length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ARGV_NULL            ((char **) 0)         /* NULL
</span><br>
<span class="quotelev2">&gt; &gt; argument vector */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ARGVS_NULL           ((char ***) 0)        /* NULL
</span><br>
<span class="quotelev2">&gt; &gt; argument vectors */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ERRCODES_IGNORE      ((int *) 0)           /* don't
</span><br>
<span class="quotelev2">&gt; &gt; return error codes */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_PORT_NAME        OPAL_MAX_PORT_NAME    /* max port
</span><br>
<span class="quotelev2">&gt; &gt; name length */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port
</span><br>
<span class="quotelev2">&gt; &gt; name length, non-std. (LAM &lt; 6.3b1) */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ORDER_C              0                     /* C row
</span><br>
<span class="quotelev2">&gt; &gt; major order */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_ORDER_FORTRAN        1                     /* Fortran
</span><br>
<span class="quotelev2">&gt; &gt; column major order */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_DISTRIBUTE_BLOCK     0                     /* block
</span><br>
<span class="quotelev2">&gt; &gt; distribution */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_DISTRIBUTE_CYCLIC    1                     /* cyclic
</span><br>
<span class="quotelev2">&gt; &gt; distribution */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_DISTRIBUTE_NONE      2                     /* not
</span><br>
<span class="quotelev2">&gt; &gt; distributed */
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_DISTRIBUTE_DFLT_DARG (-1)                  /* default
</span><br>
<span class="quotelev2">&gt; &gt; distribution arg */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #if OMPI_PROVIDE_MPI_FILE_INTERFACE
</span><br>
<span class="quotelev2">&gt; &gt;  /*
</span><br>
<span class="quotelev2">&gt; &gt; @@ -406,11 +427,11 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  #define MPI_DISPLACEMENT_CURRENT   -54278278
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_SEEK_SET            600
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_SEEK_CUR            602
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_SEEK_END            604
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_SEEK_SET               600
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_SEEK_CUR               602
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_SEEK_END               604
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -#define MPI_MAX_DATAREP_STRING  128
</span><br>
<span class="quotelev2">&gt; &gt; +#define MPI_MAX_DATAREP_STRING OPAL_MAX_DATAREP_STRING /* max data
</span><br>
<span class="quotelev2">&gt; &gt; representation length */
</span><br>
<span class="quotelev2">&gt; &gt;  #endif /* #if OMPI_PROVIDE_MPI_FILE_INTERFACE */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  /*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/include/mpif-common.h
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/include/mpif-common.h    (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/include/mpif-common.h    2009-05-27 08:54:40 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -80,9 +80,9 @@
</span><br>
<span class="quotelev2">&gt; &gt;  !     Miscellaneous constants
</span><br>
<span class="quotelev2">&gt; &gt;  !
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_ANY_SOURCE, MPI_ANY_TAG
</span><br>
<span class="quotelev2">&gt; &gt; -      integer MPI_PROC_NULL, MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_PROC_NULL
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_ROOT
</span><br>
<span class="quotelev2">&gt; &gt; -      integer MPI_MAX_ERROR_STRING, MPI_UNDEFINED
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_UNDEFINED
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_CART, MPI_GRAPH, MPI_KEYVAL_INVALID
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_SOURCE, MPI_TAG, MPI_ERROR
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_TAG_UB, MPI_HOST, MPI_IO, MPI_WTIME_IS_GLOBAL
</span><br>
<span class="quotelev2">&gt; &gt; @@ -90,8 +90,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;        integer IMPI_CLIENT_SIZE, IMPI_CLIENT_COLOR
</span><br>
<span class="quotelev2">&gt; &gt;        integer IMPI_HOST_SIZE, IMPI_HOST_COLOR
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_BSEND_OVERHEAD
</span><br>
<span class="quotelev2">&gt; &gt; -      integer MPI_MAX_INFO_KEY, MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev2">&gt; &gt; -      integer MPI_MAX_PORT_NAME, MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_ORDER_C, MPI_ORDER_FORTRAN
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_DISTRIBUTE_BLOCK, MPI_DISTRIBUTE_CYCLIC
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_DISTRIBUTE_NONE, MPI_DISTRIBUTE_DFLT_DARG
</span><br>
<span class="quotelev2">&gt; &gt; @@ -106,8 +104,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_ANY_TAG=-1)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_PROC_NULL=-2)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_ROOT=-4)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_PROCESSOR_NAME=255)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_ERROR_STRING=255)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_UNDEFINED=-32766)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_CART=1)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_GRAPH=2)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -131,10 +127,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (IMPI_HOST_COLOR=13)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_BSEND_OVERHEAD=128)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_INFO_KEY=35)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_INFO_VAL=255)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_PORT_NAME=255)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_OBJECT_NAME=63)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_ORDER_C=0)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_ORDER_FORTRAN=1)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_DISTRIBUTE_BLOCK=0)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/include/mpif-config.h.in
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/include/mpif-config.h.in (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/include/mpif-config.h.in 2009-05-27 08:54:40 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -89,3 +89,20 @@
</span><br>
<span class="quotelev2">&gt; &gt;  !
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_STATUS_SIZE
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_STATUS_SIZE=5)
</span><br>
<span class="quotelev2">&gt; &gt; +!
</span><br>
<span class="quotelev2">&gt; &gt; +!     Configurable length constants
</span><br>
<span class="quotelev2">&gt; &gt; +!
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_PROCESSOR_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_ERROR_STRING
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_OBJECT_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_INFO_KEY
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_INFO_VAL
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_PORT_NAME
</span><br>
<span class="quotelev2">&gt; &gt; +      integer MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_PROCESSOR_NAME=@OPAL_MAX_PROCESSOR_NAME_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_ERROR_STRING=@OPAL_MAX_ERROR_STRING_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_OBJECT_NAME=@OPAL_MAX_OBJECT_NAME_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_INFO_KEY=@OPAL_MAX_INFO_KEY_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_INFO_VAL=@OPAL_MAX_INFO_VAL_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_PORT_NAME=@OPAL_MAX_PORT_NAME_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt; +      parameter (MPI_MAX_DATAREP_STRING=@OPAL_MAX_DATAREP_STRING_at_-1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/include/mpif-mpi-io.h
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/include/mpif-mpi-io.h    (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/include/mpif-mpi-io.h    2009-05-27 08:54:40 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -68,7 +68,6 @@
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_MODE_DELETE_ON_CLOSE, MPI_MODE_UNIQUE_OPEN
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_MODE_EXCL, MPI_MODE_APPEND, MPI_MODE_SEQUENTIAL
</span><br>
<span class="quotelev2">&gt; &gt;        integer MPI_DISPLACEMENT_CURRENT
</span><br>
<span class="quotelev2">&gt; &gt; -      integer MPI_MAX_DATAREP_STRING
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_FILE_NULL=0)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_SEEK_SET=600)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -84,4 +83,3 @@
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_MODE_APPEND=128)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_MODE_SEQUENTIAL=256)
</span><br>
<span class="quotelev2">&gt; &gt;        parameter (MPI_DISPLACEMENT_CURRENT=-54278278)
</span><br>
<span class="quotelev2">&gt; &gt; -      parameter (MPI_MAX_DATAREP_STRING=127)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/ompi/tools/ompi_info/param.cc
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; =
</span><br>
<span class="quotelev2">&gt; &gt; ======================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/ompi/tools/ompi_info/param.cc (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/ompi/tools/ompi_info/param.cc 2009-05-27 08:54:40 EDT
</span><br>
<span class="quotelev2">&gt; &gt; (Wed, 27 May 2009)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -784,4 +784,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;    out(&quot;MPI extensions&quot;, &quot;options:mpi_ext&quot;, OMPI_EXT_COMPONENTS);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    out(&quot;FT Checkpoint support&quot;, &quot;options:ft_support&quot;, ft_support);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_PROCESSOR_NAME&quot;, &quot;options:max-processor-
</span><br>
<span class="quotelev2">&gt; &gt; name&quot;, OPAL_MAX_PROCESSOR_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_ERROR_STRING&quot;,   &quot;options:max-error-
</span><br>
<span class="quotelev2">&gt; &gt; string&quot;,   OPAL_MAX_ERROR_STRING);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_OBJECT_NAME&quot;,    &quot;options:max-object-
</span><br>
<span class="quotelev2">&gt; &gt; name&quot;,    OPAL_MAX_OBJECT_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_INFO_KEY&quot;,       &quot;options:max-info-
</span><br>
<span class="quotelev2">&gt; &gt; key&quot;,       OPAL_MAX_INFO_KEY);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_INFO_VAL&quot;,       &quot;options:max-info-
</span><br>
<span class="quotelev2">&gt; &gt; val&quot;,       OPAL_MAX_INFO_VAL);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_PORT_NAME&quot;,      &quot;options:max-port-
</span><br>
<span class="quotelev2">&gt; &gt; name&quot;,      OPAL_MAX_PORT_NAME);
</span><br>
<span class="quotelev2">&gt; &gt; +  out(&quot;Parameter OPAL_MAX_DATAREP_STRING&quot;, &quot;options:max-datarep-
</span><br>
<span class="quotelev2">&gt; &gt; string&quot;, OPAL_MAX_DATAREP_STRING);
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6114.php">Josh Hursey: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="6112.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6111.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>Reply:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
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
