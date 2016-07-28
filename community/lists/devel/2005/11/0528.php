<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Nov 20 11:12:13 2005" -->
<!-- isoreceived="20051120161213" -->
<!-- sent="Sun, 20 Nov 2005 11:12:05 -0500" -->
<!-- isosent="20051120161205" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="orterun --debug" -->
<!-- id="51a3262d6a25f46f10a125bba21869f8_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-20 11:12:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just implemented the --debug option to orterun (mpirun) on the trunk 
<br>
as described here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/users/2005/10/0214.php">http://www.open-mpi.org/community/lists/users/2005/10/0214.php</a>
<br>
<p>Hence, if you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --debug ...
<br>
<p>It will now search a list of available debuggers, and try to find them 
<br>
in your PATH.  orterun will launch the first one that it finds.
<br>
<p>This makes the option much more vendor-independent, and allows for 
<br>
orterun to launch debuggers other than TotalView.  The MCA parameter 
<br>
orte_base_user_debugger can be a colon-delimited list of debuggers to 
<br>
search for.  It defaults to the following value (also visible via 
<br>
ompi_info):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totalview @mpirun@ -a @mpirun_args@ : fx2 @mpirun@ -a @mpirun_args@
<br>
<p>Where @mpirun@ and @mpirun_args@ are substituted at run-time.  Using an 
<br>
MCA parameter allows the setting of this value in all the different 
<br>
ways that MCA params can be set (files, environment variables, command 
<br>
line parameters).
<br>
<p>We can certainly add in more debuggers as required; the goal is to be 
<br>
inclusionary, not exclusionary.
<br>
<p>*NOTE:* There previously was a &quot;--debug&quot; parameter that was a synonym 
<br>
for &quot;-d&quot;.  &quot;-d&quot; is an OMPI-developer option to print out lots of 
<br>
debugging information during the run.  I hijacked --debug to now be the 
<br>
user debugger option; OMPI developers can now use either -d or 
<br>
--debug-devel to print out debugging information at run-time.
<br>
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
<li><strong>Next message:</strong> <a href="0529.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
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
