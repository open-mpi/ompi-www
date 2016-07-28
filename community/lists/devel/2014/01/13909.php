<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: yet another launch failure";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 24 14:19:12 2014" -->
<!-- isoreceived="20140124191912" -->
<!-- sent="Fri, 24 Jan 2014 11:18:18 -0800" -->
<!-- isosent="20140124191818" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: yet another launch failure" -->
<!-- id="1F14B811-53D2-4DCB-8BAC-F8E6BA9F273A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140123153510.GM31559_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: yet another launch failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-24 14:18:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Granted - cmr'd to 1.7.5 with you set to review
<br>
<p><p>On Jan 23, 2014, at 7:35 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I agree. A configure option to disable the use of getpwuid would be
</span><br>
<span class="quotelev1">&gt; great as it is one of those functions that can never be static. getpwuid
</span><br>
<span class="quotelev1">&gt; also fails for no particular reason on at least one XC30.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 08:57:20PM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   Interesting - still, I see no reason for OMPI to fail just because of
</span><br>
<span class="quotelev2">&gt;&gt;   that. We can run just fine with the uid, so I'll make things a little more
</span><br>
<span class="quotelev2">&gt;&gt;   flexible.
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks for tracking it down!
</span><br>
<span class="quotelev2">&gt;&gt;   On Jan 22, 2014, at 7:54 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Not lacking getpwuid():
</span><br>
<span class="quotelev2">&gt;&gt;     [phh1_at_biou2 BLD]$ grep HAVE_GETPWUID */include/*_config.h
</span><br>
<span class="quotelev2">&gt;&gt;     opal/include/opal_config.h:#define HAVE_GETPWUID 1
</span><br>
<span class="quotelev2">&gt;&gt;     I also can't see why the quoted code could fail.
</span><br>
<span class="quotelev2">&gt;&gt;     The following is working fine:
</span><br>
<span class="quotelev2">&gt;&gt;     [phh1_at_biou2 BLD]$ cat q.c
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #include &lt;pwd.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int main(void) {
</span><br>
<span class="quotelev2">&gt;&gt;        uid_t uid = getuid();
</span><br>
<span class="quotelev2">&gt;&gt;        printf(&quot;uid = %d\n&quot;, (int)uid);
</span><br>
<span class="quotelev2">&gt;&gt;        struct passwd *p = getpwuid(uid); 
</span><br>
<span class="quotelev2">&gt;&gt;        if (p) printf(&quot;name = %s\n&quot;, p-&gt;pw_name);
</span><br>
<span class="quotelev2">&gt;&gt;        return 0;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;     [phh1_at_biou2 BLD]$ gcc -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;     uid = 44154
</span><br>
<span class="quotelev2">&gt;&gt;     name = phh1
</span><br>
<span class="quotelev2">&gt;&gt;     HOWEVER, building for ILP32 target (as in the reported failure) fails:
</span><br>
<span class="quotelev2">&gt;&gt;     [phh1_at_biou2 BLD]$ gcc -m32 -std=c99 q.c &amp;&amp; ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;     uid = 44154
</span><br>
<span class="quotelev2">&gt;&gt;     So, I am going to guess that this *is* a system misconfiguration (maybe
</span><br>
<span class="quotelev2">&gt;&gt;     missing the 32-bit foo.so for the appropriate nsswitch resolver?) just
</span><br>
<span class="quotelev2">&gt;&gt;     as the error message said.
</span><br>
<span class="quotelev2">&gt;&gt;     Sorry for the false alarm,
</span><br>
<span class="quotelev2">&gt;&gt;     -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Wed, Jan 22, 2014 at 7:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       Here is the offending code:
</span><br>
<span class="quotelev2">&gt;&gt;            /* get the name of the user */
</span><br>
<span class="quotelev2">&gt;&gt;           uid = getuid();
</span><br>
<span class="quotelev2">&gt;&gt;       #ifdef HAVE_GETPWUID
</span><br>
<span class="quotelev2">&gt;&gt;           pwdent = getpwuid(uid);
</span><br>
<span class="quotelev2">&gt;&gt;       #else
</span><br>
<span class="quotelev2">&gt;&gt;           pwdent = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;       #endif
</span><br>
<span class="quotelev2">&gt;&gt;           if (NULL != pwdent) {
</span><br>
<span class="quotelev2">&gt;&gt;               user = strdup(pwdent-&gt;pw_name);
</span><br>
<span class="quotelev2">&gt;&gt;           } else {
</span><br>
<span class="quotelev2">&gt;&gt;               orte_show_help(&quot;help-orte-runtime.txt&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;                              &quot;orte:session:dir:nopwname&quot;, true);
</span><br>
<span class="quotelev2">&gt;&gt;               return ORTE_ERR_OUT_OF_RESOURCE;
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;       Is it possible on this platform that you don't have getpwuid? I'm
</span><br>
<span class="quotelev2">&gt;&gt;       surprised at the code as we could just use the uid instead - not sure
</span><br>
<span class="quotelev2">&gt;&gt;       why this more stringent test was applied
</span><br>
<span class="quotelev2">&gt;&gt;       On Jan 22, 2014, at 7:02 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         On yet another test platform I see the following:
</span><br>
<span class="quotelev2">&gt;&gt;         $ mpirun -mca btl sm,self -np 1 examples/ring_c
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI was unable to obtain the username in order to create a path
</span><br>
<span class="quotelev2">&gt;&gt;         for its required temporary directories.  This type of error is
</span><br>
<span class="quotelev2">&gt;&gt;         usually
</span><br>
<span class="quotelev2">&gt;&gt;         caused by a transient failure of network-based authentication
</span><br>
<span class="quotelev2">&gt;&gt;         services
</span><br>
<span class="quotelev2">&gt;&gt;         (e.g., LDAP or NIS failure due to network congestion), but can also
</span><br>
<span class="quotelev2">&gt;&gt;         be
</span><br>
<span class="quotelev2">&gt;&gt;         an indication of system misconfiguration.
</span><br>
<span class="quotelev2">&gt;&gt;         Please consult your system administrator about these issues and try
</span><br>
<span class="quotelev2">&gt;&gt;         again.
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource
</span><br>
<span class="quotelev2">&gt;&gt;         in file
</span><br>
<span class="quotelev2">&gt;&gt;         /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/util/session_dir.c
</span><br>
<span class="quotelev2">&gt;&gt;         at line 380
</span><br>
<span class="quotelev2">&gt;&gt;         [biou2.rice.edu:30021] [[40214,0],0] ORTE_ERROR_LOG: Out of resource
</span><br>
<span class="quotelev2">&gt;&gt;         in file
</span><br>
<span class="quotelev2">&gt;&gt;         /home/phh1/SCRATCH/OMPI/openmpi-1.7-latest-linux-ppc32-xlc-11.1/openmpi-1.7.4rc2r30361/orte/mca/ess/hnp/ess_hnp_module.c
</span><br>
<span class="quotelev2">&gt;&gt;         at line 599
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         It looks like orte_init failed for some reason; your parallel
</span><br>
<span class="quotelev2">&gt;&gt;         process is
</span><br>
<span class="quotelev2">&gt;&gt;         likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;         fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;         environment problems.  This failure appears to be an internal
</span><br>
<span class="quotelev2">&gt;&gt;         failure;
</span><br>
<span class="quotelev2">&gt;&gt;         here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;         Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;           orte_session_dir failed
</span><br>
<span class="quotelev2">&gt;&gt;           --&gt; Returned value Out of resource (-2) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         An &quot;-np 2&quot; run fails in the same manner.
</span><br>
<span class="quotelev2">&gt;&gt;         This is a production system and there is no problem with &quot;whoami&quot; or
</span><br>
<span class="quotelev2">&gt;&gt;         &quot;id&quot;, leaving me doubting the explanation provided by the error
</span><br>
<span class="quotelev2">&gt;&gt;         message.
</span><br>
<span class="quotelev2">&gt;&gt;         [phh1_at_biou2 ~]$ whoami
</span><br>
<span class="quotelev2">&gt;&gt;         phh1
</span><br>
<span class="quotelev2">&gt;&gt;         [phh1_at_biou2 ~]$ id
</span><br>
<span class="quotelev2">&gt;&gt;         uid=44154(phh1) gid=2016(hpc)
</span><br>
<span class="quotelev2">&gt;&gt;         groups=2016(hpc),3803(hpcusers),3805(sshgw),3808(biou)
</span><br>
<span class="quotelev2">&gt;&gt;         The &quot;ompi_info --all&quot; output is attached.
</span><br>
<span class="quotelev2">&gt;&gt;         Please let me know what additional info is needed.
</span><br>
<span class="quotelev2">&gt;&gt;         -Paul
</span><br>
<span class="quotelev2">&gt;&gt;         --
</span><br>
<span class="quotelev2">&gt;&gt;         Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;         Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;         Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;biou2_info.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;       devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;       devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     --
</span><br>
<span class="quotelev2">&gt;&gt;     Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt;     Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="13910.php">Ralph Castain: "Re: [OMPI devel] harmless warnings from ompi_rb_tree test"</a>
<li><strong>Previous message:</strong> <a href="13908.php">Kenneth Adam Miller: "Re: [OMPI devel] Specific use case - very very new to MPI"</a>
<li><strong>In reply to:</strong> <a href="13877.php">Nathan Hjelm: "Re: [OMPI devel] 1.7.4rc: yet another launch failure"</a>
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
