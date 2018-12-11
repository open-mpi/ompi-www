<?php

include_once("$topdir/software/ompi/current/version.inc");
include_once("$topdir/includes/emoji.inc");

$right_arrow = "&rarr;";

function mpi1($old, $href, $new, $man)
{
    global $topdir;

    $str  = "<tr>";
    $str .= "<td><code><a href=\"#$href\">$old</a></code></td>";
    $str .= "<td></td>";
    $str .= "<td><code><a href=\"$topdir/doc/current/man3/$man.3.php\">$new</a></code></td>";
    $str .= "<td></td>";
    $str .= "<td>MPI-2.0, 1996</td>";
    $str .= "<td></td>";
    $str .= "<td>MPI-3.0, 2012</td>";
    $str .= "</tr>\n";

    return $str;
}

$q[] = "Why does my MPI application fail to compile, complaining that
various MPI APIs/symbols are undefined?";

$anchor[] = "mpi.h-deleted-prototypes";

$a[] = "Starting with v4.0.0, Open MPI &mdash; by default &mdash; removes the
prototypes from [mpi.h] for MPI symbols that were deprecated in 1996
in the MPI-2.0 standard, and finally removed from the MPI-3.0 standard
(2012).

Specifically, the following symbols (specified in the MPI
language-neutral names) are no longer prototyped in [mpi.h] by
default:

<div align=\"center\">
<table border=0 cellpadding=0>
<tr>
<th>Removed symbol</th>
<th>&nbsp;&nbsp;&nbsp;</th>
<th>Replaced with</th>
<th>&nbsp;&nbsp;&nbsp;</th>
<th></th>
<th>&nbsp;&nbsp;&nbsp;</th>
<th></th>
</tr>
<tr>
<th>(click to go to the corresponding FAQ item)</th>
<th></th>
<th>(click to go to the corresponding man page)</th>
<th></th>
<th>Deprecated</th>
<th></th>
<th>Removed</th>
</tr>
<tr>
<td><hr></td>
<td></td>
<td><hr></td>
<td></td>
<td><hr></td>
<td></td>
<td><hr></td>
</tr>" .
mpi1("MPI_ADDRESS", "mpi-1-mpi-address",
     "MPI_GET_ADDRESS", "MPI_Get_address") .
mpi1("MPI_ERRHANDLER_CREATE", "mpi-1-mpi-errhandler-create",
     "MPI_COMM_CREATE_ERRHANDLER", "MPI_Comm_create_errhandler") .
mpi1("MPI_ERRHANDLER_GET", "mpi-1-mpi-errhandler-get",
     "MPI_COMM_GET_ERRHANDLER", "MPI_Comm_get_errhandler") .
mpi1("MPI_ERRHANDLER_SET", "mpi-1-mpi-errhandler-set",
     "MPI_COMM_SET_ERRHANDLER", "MPI_Comm_set_errhandler") .
mpi1("MPI_TYPE_EXTENT", "mpi-1-mpi-type-extent",
     "MPI_TYPE_GET_EXTENT", "MPI_Type_get_extent") .
mpi1("MPI_TYPE_HINDEXED", "mpi-1-mpi-type-hindexed",
     "MPI_TYPE_CREATE_HINDEXED", "MPI_Type_create_hindexed") .
mpi1("MPI_TYPE_HVECTOR", "mpi-1-mpi-type-hvector",
     "MPI_TYPE_CREATE_HVECTOR", "MPI_Type_create_hvector") .
mpi1("MPI_TYPE_LB", "mpi-1-mpi-type-lb",
     "MPI_TYPE_GET_EXTENT", "MPI_Type_get_extent") .
mpi1("MPI_TYPE_STRUCT", "mpi-1-mpi-type-struct",
     "MPI_TYPE_CREATE_STRUCT", "MPI_Type_create_struct") .
mpi1("MPI_TYPE_UB", "mpi-1-mpi-type-ub",
     "MPI_TYPE_GET_EXTENT", "MPI_Type_get_extent") .
mpi1("MPI_LB", "mpi-1-mpi-lb-ub",
     "MPI_TYPE_CREATE_RESIZED", "MPI_Type_create_resized") .
mpi1("MPI_UB", "mpi-1-mpi-lb-ub",
     "MPI_TYPE_CREATE_RESIZED", "MPI_Type_create_resized") .
mpi1("MPI_COMBINER_HINDEXED_INTEGER", "mpi-1-mpi-combiner-fortran-integers",
     "MPI_COMBINER_HINDEXED", "MPI_Type_get_envelope") .
mpi1("MPI_COMBINER_HVECTOR_INTEGER", "mpi-1-mpi-combiner-fortran-integers",
     "MPI_COMBINER_HVECTOR", "MPI_Type_get_envelope") .
mpi1("MPI_COMBINER_STRUCT_INTEGER", "mpi-1-mpi-combiner-fortran-integers",
     "MPI_COMBINER_STRUCT", "MPI_Type_get_envelope") .
mpi1("MPI_HANDLER_FUNCTION", "mpi-1-mpi-handler-function",
     "MPI_COMM_ERRHANDLER_FUNCTION", "MPI_Comm_create_errhandler") .
"</table></div>

Although these symbols are no longer prototyped in [mpi.h], _they are
still present in the MPI library in Open MPI v4.0.x._ This enables
legacy MPI applications to _link and run_ successfully with Open MPI
v4.0.x, even though they will fail to _compile_.

*The Open MPI team <font color=\"red\">strongly</font> encourages all
MPI application developers to stop using these constructs that were
first deprecated over 20 years ago, and finally removed from the MPI
specification in MPI-3.0 (in 2012).* The FAQ items in this category
show how to update your application to stop using these removed
symbols.

All that being said, if you are unable to immediately update your
application to stop using these removed MPI-1 symbols, you can
re-enable them in [mpi.h] by configuring Open MPI with the
[--enable-mpi-compatibility] flag.

*NOTE:* Future releases of Open MPI beyond the v4.0.x series may
remove these symbols altogether.";

/////////////////////////////////////////////////////////////////////////

$current_year = date("Y");
$years_ago = $current_year - 1996;

$q[] = "Why on earth are you breaking the compilation of MPI
applications?";

$anchor[] = "why-breaking-legacy-applications";

$a[] = "The Open MPI developer community decided to take a first step
of removing the prototypes for these symbols from [mpi.h] starting
with the Open MPI v4.0.x series for the following reasons:

<ol>
<li> These symbols have been deprecated since *1996.* That's
<em>$years_ago years ago!</em>  It's time to start raising awareness
for developers who are inadvertantly still using these removed
symbols.</li>
<li> The MPI Forum removed these symbols from the MPI-3.0
specification in 2012.  This is a sign that the Forum itself
recognizes that these removed symbols are no longer needed.</li>
<li> Note that Open MPI _did not fully remove_ these removed symbols:
we just made it slightly more painful to get to them.  This is an
attempt to raise awareness so that MPI application developers can
update their applications (it's easy!).</li>
</ol>

In short: the only way to finally be able to remove these removed
symbols from Open MPI someday is to have a \"grace period\" where the
MPI application developers are a) made aware that they are using
removed symbols, and b) educated how to update their applications.

We, the Open MPI developers, recognize that your MPI application
failing to compile with Open MPI may be a nasty surprise.  We
apologize for that.  <i class=\"em em-anguished\"></i>

Our intent is simply to use this minor shock to raise awareness and
use it as an educational opportunity to show you how to update your
application (or direct your friendly neighborhood MPI application
developer to this FAQ) to stop using these removed MPI symbols.

Thank you!";

/////////////////////////////////////////////////////////////////////////

$q[] = "Why am I getting deprecation warnings when compiling my MPI application?";

$anchor[] = "mpi-legacy-deprecation-warnings";

$a[] = "You are getting deprecation warnings because you are using
symbols / functions that are deprecated in MPI.  For example:

<geshi bash>
shell$ mpicc deprecated-example.c -c
deprecated-example.c: In function 'foo':
deprecated-example.c:6:5: warning: 'MPI_Attr_delete' is deprecated: MPI_Attr_delete was deprecated in MPI-2.0; use MPI_Comm_delete_attr instead [-Wdeprecated-declarations]
     MPI_Attr_delete(MPI_COMM_WORLD, 2);
     ^~~~~~~~~~~~~~~
In file included from deprecated-example.c:2:
/usr/local/openmpi/include/mpi.h:2601:20: note: declared here
 OMPI_DECLSPEC  int MPI_Attr_delete(MPI_Comm comm, int keyval)
                    ^~~~~~~~~~~~~~~
</geshi>

Note that the deprecation compiler warnings tells you how to upgrade
your code to avoid the deprecation warnings.  In this example, it
advises you to use [MPI_Comm_delete_attr()] instead of
[MPI_Attr_delete()].

Also, note that when using [--enable-mpi1-compatibility] to re-enable
removed MPI-1 symbols you will still get compiler warnings when you use
the removed symbols.  For example:

<geshi bash>
shell$ mpicc deleted-example.c -c
deleted-example.c: In function 'foo':
deleted-example.c:8:5: warning: 'MPI_Address' is deprecated: MPI_Address was removed in MPI-3.0; use MPI_Get_address instead. [-Wdeleted-declarations]
     MPI_Address(buffer, &address);
     ^~~~~~~~~~~
In file included from deleted-example.c:2:
/usr/local/openmpi/include/mpi.h:2689:20: note: declared here
 OMPI_DECLSPEC  int MPI_Address(void *location, MPI_Aint *address)
                    ^~~~~~~~~~~
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_ADDRESS?";

$anchor[] = "mpi-1-mpi-address";

$a[] = "In C, the only thing that changed was the function name:
[MPI_Address()] $right_arrow [MPI_Get_address()].  Nothing else needs
to change:

<geshi c>
char buffer[30];
MPI_Aint address;

// Old way
MPI_Address(buffer, &address);

// New way
MPI_Get_address(buffer, &address);
</geshi>

In Fortran, the type of the parameter changed from [INTEGER]
$right_arrow [INTEGER(KIND=MPI_ADDRESS_KIND)] so that it can hold
larger values (e.g., 64 bit pointers):

<geshi fortran>
 USE mpi
 REAL buffer
 INTEGER ierror
 INTEGER old_address
 INTEGER(KIND = MPI_ADDRESS_KIND) new_address

 ! Old way
 CALL MPI_ADDRESS(buffer, old_address, ierror)

 ! New way
 CALL MPI_GET_ADDRESS(buffer, new_address, ierror)
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_ERRHANDLER_CREATE?";

$anchor[] = "mpi-1-mpi-errhandler-create";

$a[] = "In C, _effectively_ the only thing that changed was the name
of the function: [MPI_Errhandler_create()] $right_arrow
[MPI_Comm_create_errhandler()].

_Technically_, the type of the first parameter also changed
( [MPI_Handler_function] $right_arrow [MPI_Comm_errhandler_function]),
but most applications do not use this type directly and may not even
notice the change.

<geshi c>
void my_errhandler_function(MPI_Comm *comm, int *code, ...)
{
    // Do something useful to handle the error
}

void some_function(void)
{
    MPI_Errhandler my_handler;

    // Old way
    MPI_Errhandler_create(my_errhandler_function, &my_handler);

    // New way
    MPI_Comm_create_errhandler(my_errhandler_function, &my_handler);
}
</geshi>

In Fortran, only the subroutine name changed: [MPI_ERRHANDLER_CREATE]
$right_arrow [MPI_COMM_CREATE_ERRHANDLER].

<geshi fortran>
 USE mpi
 EXTERNAL my_errhandler_function
 INTEGER ierror
 INTEGER my_handler

 ! Old way
 CALL MPI_ERRHANDLER_CREATE(my_errhandler_function, my_handler, ierror)

 ! Old way
 CALL MPI_COMM_CREATE_ERRHANDLER(my_errhandler_function, my_handler, ierror)
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_ERRHANDLER_GET?";

$anchor[] = "mpi-1-mpi-errhandler-get";

$a[] = "In both C and Fortran, the only thing that changed with
regards to [MPI_ERRHANDLER_GET] is the name: [MPI_ERRHANDLER_GET]
$right_arrow [MPI_COMM_GET_ERRHANDLER].

All parameter types stayed the same.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_ERRHANDLER_SET?";

$anchor[] = "mpi-1-mpi-errhandler-set";

$a[] = "In both C and Fortran, the only thing that changed with
regards to [MPI_ERRHANDLER_SET] is the name: [MPI_ERRHANDLER_SET]
$right_arrow [MPI_COMM_SET_ERRHANDLER].

All parameter types stayed the same.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_HINDEXED?";

$anchor[] = "mpi-1-mpi-type-hindexed";

$a[] = "In both C and Fortran, _effectively_ the only change is the
name of the function: [MPI_TYPE_HINDEXED] $right_arrow
[MPI_TYPE_CREATE_HINDEXED].

In C, the new function also has a [const] attribute on the two array
parameters, but most applications won't notice the difference.

All other parameter types stayed the same.

<geshi c>
int count = 2;
int block_lengths[] = { 1, 2 };
MPI_Aint displacements[] = { 0, sizeof(int) };
MPI_Datatype newtype;

// Old way
MPI_Type_hindexed(count, block_lengths, displacements, MPI_INT, &newtype);

// New way
MPI_Type_create_hindexed(count, block_lengths, displacements, MPI_INT, &newtype);
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_HVECTOR?";

$anchor[] = "mpi-1-mpi-type-hvector";

$a[] = "In both C and Fortran, the only change is the
name of the function: [MPI_TYPE_HVECTOR] $right_arrow
[MPI_TYPE_CREATE_HVECTOR].

All parameter types stayed the same.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_STRUCT?";

$anchor[] = "mpi-1-mpi-type-struct";

$a[] = "In both C and Fortran, _effectively_ the only change is the
name of the function: [MPI_TYPE_STRUCT] $right_arrow
[MPI_TYPE_CREATE_STRUCT].

In C, the new function also has a [const] attribute on the three array
parameters, but most applications won't notice the difference.

All other parameter types stayed the same.

<geshi c>
int count = 2;
int block_lengths[] = { 1, 2 };
MPI_Aint displacements[] = { 0, sizeof(int) };
MPI_Datatype datatypes[] = { MPI_INT, MPI_DOUBLE };
MPI_Datatype newtype;

// Old way
MPI_Type_struct(count, block_lengths, displacements, datatypes, &newtype);

// New way
MPI_Type_create_struct(count, block_lengths, displacements, datatypes, &newtype);
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_EXTENT?";

$anchor[] = "mpi-1-mpi-type-extent";

$a[] = "In both C and Fortran, the [MPI_TYPE_EXTENT] function is
superseded by the slightly-different [MPI_TYPE_GET_EXTENT] function:
the new function also returns the lower bound.

<geshi c>
MPI_Aint lb;
MPI_Aint extent;

// Old way
MPI_Type_extent(MPI_INT, &extent);

// New way
MPI_Type_get_extent(MPI_INT, &lb, &extent);
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_LB?";

$anchor[] = "mpi-1-mpi-type-lb";

$a[] = "In both C and Fortran, the [MPI_TYPE_LB] function is
superseded by the slightly-different [MPI_TYPE_GET_EXTENT] function:
the new function also returns the extent.

<geshi c>
MPI_Aint lb;
MPI_Aint extent;

// Old way
MPI_Type_lb(MPI_INT, &lb);

// New way
MPI_Type_get_extent(MPI_INT, &lb, &extent);
</geshi>";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_TYPE_UB?";

$anchor[] = "mpi-1-mpi-type-ub";

$a[] = "In both C and Fortran, the [MPI_TYPE_UB] function is
superseded by the slightly-different [MPI_TYPE_GET_EXTENT] function:
the new function returns the lower bound and the extent, which can be
used to compute the upper bound.

<geshi c>
MPI_Aint lb, ub;
MPI_Aint extent;

// Old way
MPI_Type_ub(MPI_INT, &ub);

// New way
MPI_Type_get_extent(MPI_INT, &lb, &extent);
ub = lb + extent
</geshi>

Note the [ub] calculation after calling [MPI_Type_get_extent()].";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_LB / MPI_UB?";

$anchor[] = "mpi-1-mpi-lb-ub";

$a[] = "The [MPI_LB] and [MPI_UB] positional markers were fully
replaced with [MPI_TYPE_CREATE_RESIZED] in MPI-2.0.

Prior to MPI-2.0, [MPI_UB] and [MPI_LB] were intended to be used as
input to [MPI_TYPE_STRUCT] (which, itself, has been deprecated and
renamed to [MPI_TYPE_CREATE_STRUCT]).  The same end effect can now be
achieved with [MPI_TYPE_CREATE_RESIZED].
For example, using the old method:

<geshi c>
int count = 3;
int block_lengths[] = { 1, 1, 1 };
MPI_Aint displacements[] = { -2, 0, 10 };
MPI_Datatype datatypes[] = { MPI_LB, MPI_INT, MPI_UB };
MPI_Datatype newtype;

MPI_Type_struct(count, block_lengths, displacements, datatypes, &newtype);
MPI_Type_commit(&newtype);

MPI_Aint ub, lb, extent;
MPI_Type_lb(newtype, &lb);
MPI_Type_ub(newtype, &ub);
MPI_Type_extent(newtype, &extent);
printf(\"OLD: LB=%d, UB=%d, extent=%d\\n\",
       lb, ub, extent);
</geshi>

If we run the above, we get an output of:

<geshi bash>
OLD: LB=-2, UB=10, extent=12
</geshi>

The [MPI_TYPE_RESIZED] function allows us to take any arbitrary
datatype and set the lower bound and extent directly (which indirectly
sets the upper bound), without needing to setup the arrays and
computing the displacements necessary to invoke
[MPI_TYPE_CREATE_STRUCT].

Aside from the printf statement, the following example is exactly
equivalent to the prior example (see <a
href=\"#mpi-1-mpi-type-ub\">this FAQ entry</a> for a mapping of
[MPI_TYPE_UB] to [MPI_TYPE_GET_EXTENT]):

<geshi c>
MPI_Datatype newtype;

MPI_Type_create_resized(MPI_INT, -2, 12, &newtype);
MPI_Type_commit(&newtype);

MPI_Aint ub, lb, extent;
MPI_Type_get_extent(newtype, &lb, &extent);
ub = lb + extent;
printf(\"NEW: LB=%d, UB=%d, extent=%d\\n\",
       lb, ub, extent);
</geshi>

If we run the above, we get an output of:

<geshi bash>
NEW: LB=-2, UB=10, extent=12
</geshi>";

/////////////////////////////////////////////////////////////////////////

function combiner_table_row($name, $r)
{
    global $right_arrow;

    $str = "<tr>
<td> [MPI_COMBINER_$name" . "_INTEGER] </td>
<td> $r </td>
<td> [MPI_COMBINER_$name] </td>
</tr>\n";

    return $str;
}

$q[] = "How do I update my MPI application to stop using MPI_COMBINER_HINDEXED_INTEGER, MPI_COMBINER_HVECTOR_INTEGER, and MPI_COMBINER_STRUCT_INTEGER?";

$anchor[] = "mpi-1-mpi-combiner-fortran-integers";

$a[] = "The [MPI_COMBINER_HINDEXED_INTEGER],
[MPI_COMBINER_HVECTOR_INTEGER], and [MPI_COMBINER_STRUCT_INTEGER]
constants could previously be returned from [MPI_TYPE_GET_ENVELOPE].

Starting with MPI-3.0, these values will never be returned.  Instead,
they will just return the same names, but without the [_INTEGER]
suffix.  Specifically:

<table border=0 cellpadding=5>\n" .
combiner_table_row("HINDEXED", $right_arrow) .
combiner_table_row("HVECTOR", $right_arrow) .
combiner_table_row("STRUCT", $right_arrow) .
"</table>

If your Fortran code is using any of the [_INTEGER]-suffixed names,
you can just delete the [_INTEGER] suffix.";

/////////////////////////////////////////////////////////////////////////

$q[] = "How do I update my MPI application to stop using MPI_Handler_function?";

$anchor[] = "mpi-1-mpi-handler-function";

$a[] = "The [MPI_Handler_function] C type is only used in the
deprecated/removed function [MPI_Errhandler_create()], as described <a
href=\"#mpi-1-mpi-errhandler-create\">in this FAQ entry</a>.

Most MPI applications likely won't use this type at all.  But if they
do, they can simply use the new, exactly-equivalent type name (i.e.,
the return type, number, and type of parameters didn't change):
[MPI_Comm_errhandler_function].

<geshi c>
void my_errhandler_function(MPI_Comm *comm, int *code, ...)
{
    // Do something useful to handle the error
}

void some_function(void)
{
    // Old way
    MPI_Handler_function *old_ptr = my_errhandler_function;

    // New way
    MPI_Comm_errhandler_function *new_ptr = my_errhandler_function;
}
</geshi>

The [MPI_Handler_function] type isn't used at all in the Fortran
bindings.";
