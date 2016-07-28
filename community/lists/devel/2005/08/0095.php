<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 11:44:44 2005" -->
<!-- isoreceived="20050808164444" -->
<!-- sent="Mon, 8 Aug 2005 12:44:42 -0400" -->
<!-- isosent="20050808164442" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="New command line option: -gmca" -->
<!-- id="cda8a8e30c5f3083056fb4e73054630f_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 11:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just added a new command line option and changed the behavior of 
<br>
orterun with respect to MCA paramters to behave more the way one would 
<br>
expect.  See my commit message below from r6764 for details.
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2005-08-08 11:42:28 -0500 (Mon, 08 Aug 2005)
</span><br>
<span class="quotelev1">&gt; New Revision: 6764
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/tools/ompi_info/ompi_info.cc
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/base.h
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/base/mca_base_cmd_line.c
</span><br>
<span class="quotelev1">&gt;    trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix a problem where orterun itself would not receive MCA parameters
</span><br>
<span class="quotelev1">&gt; that were set on the command line.  This was techinically exactly the
</span><br>
<span class="quotelev1">&gt; way the code was designed, but it certainly violated the Law of Least
</span><br>
<span class="quotelev1">&gt; Astonishment (even to its designer ;-) ).  So now if you execute
</span><br>
<span class="quotelev1">&gt; something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -mca pls_rsh_debug 1 -np 4 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll see debugging output from the rsh pls component, as you would
</span><br>
<span class="quotelev1">&gt; expect (this was not previously the case -- the MCA pls_rsh_debug
</span><br>
<span class="quotelev1">&gt; parame would be set to 1 in the 4 spawned hello processes, but *not*
</span><br>
<span class="quotelev1">&gt; in the orterun process).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically, MCA parameters will be set in the orterun process
</span><br>
<span class="quotelev1">&gt; in the following cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The new command line switch &quot;--gmca&quot; (or &quot;-gmca&quot;) is used,
</span><br>
<span class="quotelev1">&gt;   indicating that the MCA parameter is &quot;global&quot;.  --gmca also means
</span><br>
<span class="quotelev1">&gt;   that that MCA parameter will be applied to all context app's.  For
</span><br>
<span class="quotelev1">&gt;   example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       mpirun -gmca foo bar -np 1 hello : -np 2 goodbye
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The foo MCA param will be set in both the hello and goodbye
</span><br>
<span class="quotelev1">&gt;   processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - If there is only one context app.  For example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       mpirun -mca pls_rsh_debug 1 -np 4 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   will set pls_rsh_debug to 1 in both the orterun process and the 4
</span><br>
<span class="quotelev1">&gt;   spawned hello processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also added a few more comments inside orterun to document a somewhat
</span><br>
<span class="quotelev1">&gt; confusing use of a state variable in a recursive case.
</span><br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>Previous message:</strong> <a href="0094.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
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
