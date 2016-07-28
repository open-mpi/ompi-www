<?
$subject_val = "Re: [OMPI devel] dropping a pls module into an Open MPI build";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 09:19:49 2008" -->
<!-- isoreceived="20080123141949" -->
<!-- sent="Wed, 23 Jan 2008 07:19:38 -0700" -->
<!-- isosent="20080123141938" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] dropping a pls module into an Open MPI build" -->
<!-- id="C3BC9B0A.BE05%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D919A4C4-3A95-45FD-A13E-6109A05739DA_at_daugerresearch.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] dropping a pls module into an Open MPI build<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 09:19:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3019.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Previous message:</strong> <a href="3017.php">Jeff Squyres: "[OMPI devel] OFED 1.1 compile problems on trunk"</a>
<li><strong>In reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dean
<br>
<p>Had to ponder this for awhile. I'm not entirely sure of the source of the
<br>
problem, but one suspicion has to do with the name of the module. Open MPI
<br>
ships with a module named &quot;rsh&quot; in the PLS framework. The MCA uses the
<br>
module name in its loading process.
<br>
<p>If you insert another module with the identical &quot;rsh&quot; name, then the MCA is
<br>
likely to have a problem. Your output indicates that the PLS module has a
<br>
NULL function pointer somewhere. My suspicion is that the MCA is seeing two
<br>
modules with identical names and getting confused.
<br>
<p>Recompiling the existing rsh module and &quot;dropping&quot; that into the precompiled
<br>
Open MPI distribution will definitely create that conflict!
<br>
<p>Note that you will always get through open and init - the problem is that
<br>
select is getting confused by the conflicting names and returning a NULL set
<br>
of function pointers.
<br>
<p>Try renaming your &quot;drop-in&quot; module something else - maybe &quot;dean_rsh&quot;. You
<br>
need to do that in the component structure - here is the rsh one from
<br>
orte/mca/pls/rsh/pls_rsh_component.c:
<br>
<p>/*
<br>
&nbsp;* Instantiate the public struct with all of our public information
<br>
&nbsp;* and pointers to our public functions in it
<br>
&nbsp;*/
<br>
<p>orte_pls_rsh_component_t mca_pls_rsh_component = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* First, the mca_component_t struct containing meta information
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;about the component itself */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Indicate that we are a pls v1.3.0 component (which also
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implies a specific MCA version) */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_PLS_BASE_VERSION_1_3_0,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Component name and version */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;rsh&quot;,  /***THIS IS WHERE YOU NEED TO PUT YOUR MODULE'S NAME ***/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_MAJOR_VERSION,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_MINOR_VERSION,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ORTE_RELEASE_VERSION,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Component open and close functions */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_rsh_component_open,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_rsh_component_close
<br>
&nbsp;&nbsp;&nbsp;&nbsp;},
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Next the MCA v1.0.0 component meta data */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The component is checkpoint ready */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA_BASE_METADATA_PARAM_CHECKPOINT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;},
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Initialization / querying functions */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;orte_pls_rsh_component_init
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
};
<br>
<p>Obviously, the names of the component structures and functions would be
<br>
unique to your module as well.
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<p>Note
<br>
<p><p>On 1/18/08 12:17 PM, &quot;Dean Dauger, Ph. D.&quot; &lt;d_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm developing an mca_pls module, intending to drop it into a
</span><br>
<span class="quotelev1">&gt; preexisting Open MPI build (in its lib/openmpi directory) and have
</span><br>
<span class="quotelev1">&gt; orterun pick it up, but orterun kept crashing on me even though it
</span><br>
<span class="quotelev1">&gt; correctly calls my module.  To help isolate the issue I separately
</span><br>
<span class="quotelev1">&gt; recompiled the mca_pls_rsh module from a given Open MPI source
</span><br>
<span class="quotelev1">&gt; checkout and dropping that didn't work either.   Any pointers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To give an idea of what's going on here's an example attempt to run
</span><br>
<span class="quotelev1">&gt; on two local processors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dauger$ orterun -mca pls rsh -mca pls_base_verbose 10 --debug-devel --
</span><br>
<span class="quotelev1">&gt; np 2 --host localhost &quot;/Users/dauger/Documents/ompi-trunk/pingpong&quot;
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] connect_uni: connection not allowed
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: Looking for
</span><br>
<span class="quotelev1">&gt; pls components
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: distilling pls
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: including pls
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open:   rsh --&gt;
</span><br>
<span class="quotelev1">&gt; included
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: opening pls
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: found loaded
</span><br>
<span class="quotelev1">&gt; component rsh
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] mca: base: components_open: component rsh
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] orte:base:select: querying component rsh
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] [0,0,0] setting up session dir with
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475]  universe default-universe-4475
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475]  user dauger
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475]  host Rotarran-X-5.local
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475]  jobid 0
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475]  procid 0
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] procdir: /var/folders/oE/oENz6Cd
</span><br>
<span class="quotelev1">&gt; +FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran-
</span><br>
<span class="quotelev1">&gt; X-5.local_0/default-universe-4475/0/0
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] jobdir: /var/folders/oE/oENz6Cd
</span><br>
<span class="quotelev1">&gt; +FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran-
</span><br>
<span class="quotelev1">&gt; X-5.local_0/default-universe-4475/0
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] unidir: /var/folders/oE/oENz6Cd
</span><br>
<span class="quotelev1">&gt; +FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran-
</span><br>
<span class="quotelev1">&gt; X-5.local_0/default-universe-4475
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] top: openmpi-sessions-dauger_at_Rotarran-
</span><br>
<span class="quotelev1">&gt; X-5.local_0
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] tmp: /var/folders/oE/oENz6Cd+FTCWQbRGkntLLU
</span><br>
<span class="quotelev1">&gt; +++TI/-Tmp-/
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] [0,0,0] contact_file /var/folders/oE/
</span><br>
<span class="quotelev1">&gt; oENz6Cd+FTCWQbRGkntLLU+++TI/-Tmp-//openmpi-sessions-dauger_at_Rotarran-
</span><br>
<span class="quotelev1">&gt; X-5.local_0/default-universe-4475/universe-setup.txt
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5.local:04475] [0,0,0] wrote setup file
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5:04475] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5:04475] Signal: Bus error (10)
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5:04475] Signal code:  (2)
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5:04475] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [ 1] [0xbffff828, 0x00000000] (-P-)
</span><br>
<span class="quotelev1">&gt; [ 2] (orterun + 0x457) [0xbffff8b8, 0x00001d07]
</span><br>
<span class="quotelev1">&gt; [ 3] (main + 0x18) [0xbffff8d8, 0x000018ae]
</span><br>
<span class="quotelev1">&gt; [ 4] (start + 0x36) [0xbffff8fc, 0x0000186a]
</span><br>
<span class="quotelev1">&gt; [ 5] [0x00000000, 0x0000000d] (FP-)
</span><br>
<span class="quotelev1">&gt; [Rotarran-X-5:04475] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Bus error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pingpong was compiled with the existing Open MPI, and it runs with
</span><br>
<span class="quotelev1">&gt; the built-in rsh module, but not when I replace the pls_rsh module
</span><br>
<span class="quotelev1">&gt; with a recompiled one.  When I add printf's in the pls_rsh module in
</span><br>
<span class="quotelev1">&gt; its _open and _init, I can show each of its subroutines return
</span><br>
<span class="quotelev1">&gt; without problem, but _launch is not yet called.  I'm running Mac OS X
</span><br>
<span class="quotelev1">&gt; 10.5.1, which ships with Open MPI at /usr, on a MacBook Pro with an
</span><br>
<span class="quotelev1">&gt; Intel Core Duo.  (&quot;Rotarran X.5&quot; is the name of the computer.)  I
</span><br>
<span class="quotelev1">&gt; first attempted the 1.3.0 source code via svn, then went back to the
</span><br>
<span class="quotelev1">&gt; 1.2.3 source code from Open MPI, but both gave the above bus error.
</span><br>
<span class="quotelev1">&gt; Then I went to Apple's copy of Open MPI 1.2.3 at opensource.apple.com
</span><br>
<span class="quotelev1">&gt; guessing Apple changed things, but that still doesn't work.  I've
</span><br>
<span class="quotelev1">&gt; tried their take on ./configure options too to no avail.  Other than
</span><br>
<span class="quotelev1">&gt; debugging orterun, what else can I try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;     Dean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3019.php">Aurélien Bouteiller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r17177"</a>
<li><strong>Previous message:</strong> <a href="3017.php">Jeff Squyres: "[OMPI devel] OFED 1.1 compile problems on trunk"</a>
<li><strong>In reply to:</strong> <a href="3000.php">Dean Dauger, Ph. D.: "[OMPI devel] dropping a pls module into an Open MPI build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3028.php">Dean Dauger, Ph. D.: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
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
