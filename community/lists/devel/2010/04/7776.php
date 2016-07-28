<?
$subject_val = "[OMPI devel] RFC: mpirun options";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 19 14:52:35 2010" -->
<!-- isoreceived="20100419185235" -->
<!-- sent="Mon, 19 Apr 2010 11:53:38 -0700" -->
<!-- isosent="20100419185338" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: mpirun options" -->
<!-- id="4BCCA6B2.8030800_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: mpirun options<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-19 14:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7777.php">Rolf vandeVaart: "[OMPI devel] RFC: Calling BTL directly from PML"</a>
<li><strong>Previous message:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<li><strong>Reply:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and I were talking about trac 2035 and the handling of mpirun 
<br>
command-line options.  While most mpirun options have long, 
<br>
multi-character names prefixed with a double dash, OMPI had originally 
<br>
also wanted to support combinations of short names (e.g., &quot;mpirun -hvq&quot;, 
<br>
even if we don't document such combinations) as well as legacy 
<br>
single-dash names (e.g., &quot;-host&quot;).  To improve diagnosibility of error 
<br>
messages and simplify the source code and user documentations, some 
<br>
simplifications seemed in order.  Since the command-line parsing is 
<br>
shared not only by mpirun but by all OMPI command-line interfaces, 
<br>
however, Jeff suggested an RFC.  So, here goes.
<br>
<p>
<br>
<head><title>RFC: Drop mpirun Short-Name Combinations</title></head>
<body bgcolor=white>

<h1>RFC: Drop <tt>mpirun</tt> Short-Name Combinations</h1>

<p>
<b>WHAT:</b>  No longer support the combination of multiple <tt>mpirun</tt>
short-name (single-character) options into a single argument.  E.g., do not
allow users to combine <tt>mpirun -h -q -v</tt> into <tt>mpirun -hqv</tt>.

<p>
Also, no longer describe separate single-dash and double-dash names such
as <tt>-server-wait-time</tt> and <tt>--server-wait-time</tt>.  Simply
give one name per option and indicate that it could be prefixed with either
a single or a double dash.

<p>
<b>WHY:</b>  To improve the diagnosibility of error messages and simplify
the description and support of <tt>mpirun</tt> options.

<p>
<b>WHERE:</b>  Basically, in <tt>opal/util/cmd_line.c</tt>.

<p>
<b>WHEN:</b>  Upon acceptance.

<p>
<b>TIMEOUT:</b>  May 7, 2010.

<hr>

<h1>WHY (details)</h1>

<h3>Definitions</h3>

<p>
There are three kinds of <tt>mpirun</tt> option names:
<center><table border>
<tr><th>kind of name</th><th>prefix</th><th>length</th><th>example</th></tr>
<tr><td>long name</td><td><tt>--</tt></td><td>multi-character</td><td><tt>--verbose</tt></td></tr>
<tr><td>short name</td><td><tt>&nbsp;-</tt></td><td>single-character</td><td><tt>&nbsp;-v</tt></td></tr>
<tr><td>single-dash name</td><td><tt>&nbsp;-</tt></td><td>multi-character</td><td><tt>&nbsp;-np</tt></td></tr>
</table></center>

<h3>Background</h3>

<p>
We had wanted to support long and short names.

<p>
Short names were supposed to be combinable.
E.g., instead of <tt>ls -l -t -r</tt>, just write <tt>ls -ltr</tt>.

<p>
To support backwards compatibility with options that had become well-known
from other MPI implementations, we also wanted to support <i>certain</i>
short names, such as <tt>-np</tt> or <tt>-host</tt>.  That is, even though the option starts
with a single-dash, we would first check to see if it were a special recognized
"single-dash" option name.  Only if that check failed would we expand the
argument further to parse it as a combination of short names.

<h3>Obfuscates Error Messages</h3>

<p>
Unfortunately, the resulting, more complicated grammar leads to misleading
error messages.  E.g., consider this example from
<a href=https://svn.open-mpi.org/trac/ompi/ticket/2035>trac 2035</a>:
<pre>
% mpirun -tag-output -np 4 -nperslot 1 -H saem9,saem10 hostname
--------------------------------------------------------------------------
mpirun was unable to launch the specified application as it could not find an executable:

Executable: -p
Node: saem9

while attempting to start process rank 0.
--------------------------------------------------------------------------
</pre>

<p>
The point of the ticket was mostly that a misspelled option is handled as
an unfound executable, but it also points out that we end up reporting on
an option (<tt>-p</tt>) that from the user's perspective isn't even on the
command line in the first place.  What has happened is that an option
(<tt>-nperslot</tt>) was not recognized, the first character (<tt>n</tt>)
<i>was</i> recognized, the option was parsed as a combination of short names,
and one of those short names (<tt>-p</tt>) was not recognized.

<p>
There are different ways of cleaning all of this up, but a simple solution
is just not to support short-name combinations.

<h3>Fringe Functionality</h3>

<p>
The ability to combine short names into a single "-" option is fringe
functionality for <tt>mpirun</tt> anyhow.

<p>
We don't document this ability in the first place.

<p>
Further, we don't have that many short names  -- 10, out of a total of 82 options --
and many combinations don't make much sense.  The ability to combine options makes
most sense for utilities that use short option names, and then if those options don't
take arguments.  E.g., <tt>ls -ltr</tt> in place of <tt>ls -l -t -r</tt>.  The
<tt>mpirun</tt> options just aren't like that.

<h3>Simplify Single-/Double-Dash Usage</h3>

<p>
We were going to support single-dash (multi-character) names only sparingly and
only for backwards compatibility with well-established options from other MPIs.
In reality, we routinely add a single-dash name for each new option we introduce.

<p>
We end up having both single-dash and double-dash names, making both source code
and user documentation less readable.

<p>
However, ultimately the source code doesn't even check these distinctions
when parsing the <tt>mpirun</tt> command line.
For example, we go to the effort in our source code and user documentation to
distinguish between <tt>-server-wait-time</tt> and <tt>--server-wait-time</tt>,
and between <tt>-rf</tt> and <tt>--rankfile</tt>.  When options are parsed, however,
we disregard any such distinctions.  E.g., <tt>--rf</tt> and <tt>-rankfile</tt>
are recognized.

<h3>Other Issues</h3>

<p>
The command-line parser is not only for <tt>mpirun</tt>, however, but for
all OMPI command-line interfaces.  Hence, this RFC.
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7777.php">Rolf vandeVaart: "[OMPI devel] RFC: Calling BTL directly from PML"</a>
<li><strong>Previous message:</strong> <a href="7775.php">Peter Kjellstrom: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
<li><strong>Reply:</strong> <a href="7778.php">Jeff Squyres: "Re: [OMPI devel] RFC: mpirun options"</a>
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
