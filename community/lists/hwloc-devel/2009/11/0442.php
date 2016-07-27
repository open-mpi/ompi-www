<?
$subject_val = "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 10:56:28 2009" -->
<!-- isoreceived="20091130155628" -->
<!-- sent="Mon, 30 Nov 2009 09:56:23 -0600" -->
<!-- isosent="20091130155623" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="4B13EB27.90103_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091130152632.GW4848_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2<br>
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 10:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Software modules, eg on SuSE see the Modules RPM.  The way that a lot
<br>
of software installations used to be managed was to throw them all under
<br>
/usr in the standard directories.  This kept library paths and include
<br>
in default places but breaks down when you have multiple installations
<br>
of a product, conflicting names, want to keep installations on central
<br>
file servers, etc.  Modules let you install the package wherever is
<br>
convenient and then easy load the environment when you actually want the
<br>
package.
<br>
<p>&nbsp;&nbsp;For example:
<br>
<p>module load intel-compilers-11
<br>
module load mpt/1.25
<br>
&lt;compile and test&gt;
<br>
<p>module unload mpt/1.25 intel-compilers-11
<br>
module load intel-compilers-9
<br>
module load mpt/1.22
<br>
module load totalview
<br>
&lt;compile and test&gt;
<br>
<p>&nbsp;&nbsp;This easily lets me modify which versions of the various products I'm
<br>
using.  The `module load` command modifies my shell's LD_LIBRARY_PATH,
<br>
LD_PATH, PATH, MANPATH, MPIROOT, CPATH, etc variables.  For hwloc I could:
<br>
<p>module load hwloc
<br>
lstopo
<br>
<p>&nbsp;&nbsp;This keeps hwloc out of /usr thus keeping the Linux File Hierarchy
<br>
Standard (LFHS) happy.
<br>
<p>Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Michael Raymond, le Mon 30 Nov 2009 09:23:02 -0600, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;   At the moment I'm thinking SLES11 (and RHEL6) RPMs of 0.9.3 / TOT
</span><br>
<span class="quotelev2">&gt;&gt; installed in /opt[/sgi]/hwloc.  I'd also add module support.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you mean by &quot;module support&quot;?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0441.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0441.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0443.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
